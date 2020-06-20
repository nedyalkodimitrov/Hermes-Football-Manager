<?php

namespace App\Controller;


use App\Entity\InjuredUsers;
use App\Entity\PlayerProperties\PlayerStats;
use App\Entity\PlayerProperties\Position;
use App\Entity\Requests\CoachToPlayerRequest;
use App\Entity\Requests\PlayerToTeamRequest;
use App\Entity\Schedule;
use App\Entity\Team;
use App\Entity\User;
use App\Entity\Player;
use App\Form\InjuredUsersType;
use App\Form\PlayerStatsType;
use App\Form\PlayerType;
use App\Repository\InjuredUsersRepository;
use App\Repository\MatchesRepository;
use App\Repository\PlayerProperties\WaterGlassesRepository;
use App\Repository\PlayerRepository;
use App\Repository\Requests\CoachToPlayerRequestRepository;
use App\Repository\TeamRepository;
use App\Service\FileService;
use App\Service\PlayerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use  App\Repository\PlayersInjuredRepository;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class PlayerController extends AbstractController
{
    private $playerPropService;
    private $waterGlassRepo;

    public function __construct(PlayerService $playerProperties, WaterGlassesRepository $waterGlassesRepository)
    {
        $this->playerPropService = $playerProperties;
        $this->waterGlassRepo = $waterGlassesRepository;

    }

    /**
     * @Route("/player", name ="playerView")
     */
    public function IndexView()
    {
        $user = $this->getUser();
        $player =  $user->getPlayer();
        $playerStats = $player->getStats();

        $lastWaterRecord = $this->playerPropService->LastWaterRecord($user, $user->getId());
        $allWaterRecords = $this->waterGlassRepo->getWaterGlassesByUserASC($user->getId());
        $playerTeam = $this->playerPropService->getTeam($player);
        if ($playerTeam != null) {
            $teams = $this->playerPropService->getTeams($playerTeam->getDivision());
            $hasTeam = true;
        }else {
            $teams = null;
            $hasTeam = false;
        }

        $playerNames = $this->playerPropService->generateName($player->getUser()->getFName());

        return $this->render('player/index.html.twig', array('coachStatus' => $playerStats->getStatusFromCoaches(),
            'playerFat' => $playerStats->getFat(),
            'pace' => $playerStats->getPace(),
            'teams' => $teams,
            'hasTeam' => $hasTeam,
            'myTeam' => $playerTeam,
            'waterGlasses' =>  $lastWaterRecord->getWaterGlasses(),
            'allWatersGlasese' => $allWaterRecords,
            'profile_img' => $player->getImage(),
            'playerName' => $playerNames,
        ));
    }

    /**
     * @Route("/player/removeWaterGlasses", name = "removeWaterGlassAction")
     */
    public function RemoveWaterGlassesAction()
    {
        $userId = $this->getUser()->getId();

        $water_glasses = $this->waterGlassRepo->getWaterGlassesByUserDESC($userId);

        if ($water_glasses->getWaterGlasses() > 0){
            $water_glasses->setWaterGlasses($water_glasses->getWaterGlasses() - 1);
            $this->waterGlassRepo->save($water_glasses);

        }
        return 'success';
    }

    /**
     * @Route("/player/addWaterGlasses", name = "addWaterGlassAction")
     */
    public function AddWaterGlassesAction()
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $water_glasses = $this->waterGlassRepo->getWaterGlassesByUserDESC($userId);

        if ($water_glasses->getWaterGlasses() < 21) {
            $water_glasses->setWaterGlasses($water_glasses->getWaterGlasses() + 1);
            $this->waterGlassRepo->save($water_glasses);
        }
        return 'success';
    }

    /**
     * @Route("/player/settings", name = "player_settings")
     *
     */
    public function SettingsView(\Symfony\Component\HttpFoundation\Request $request, FileService $fileService){
        $currentPlayer = $this->getUser()->getPlayer();
        $newPlayer = new Player();
        $newPlayerStats = new PlayerStats();
        $newUser = new User();
        $playerStats = $currentPlayer->getStats();

        $positions = $this->getDoctrine()->getRepository(Position::class)->findAll();

        $formStats = $this->createForm(PlayerStatsType::class, $newPlayerStats);

        $playerInfoForm = $this->createFormBuilder($newUser)
            ->add('phone')
            ->getForm();

        $formPlayer = $this->createFormBuilder($newPlayer)
            ->add('image', FileType::class, array('data_class' => null, ))
            ->add('position')
            ->getForm();

        $formStats->handleRequest($request);
        $formPlayer->handleRequest($request);
        $playerInfoForm->handleRequest($request);

        $fileName = $fileService->MoveImage($formPlayer);
      if ($fileName != null){

        $newFileName = $fileService->MoveImage($formPlayer);

        if($newFileName != false) {
            $em = $this->getDoctrine()->getManager();
            $currentPlayer->setImage($newFileName);
            $em->persist($currentPlayer);
            $em->flush();

        }
      }

      return $this->render('player/settings/newSettingPage.html.twig',
          array(

              'playerForm' => $formPlayer->createView(),
              'formStats' => $formStats->createView(),
              'playerInfoForm' => $playerInfoForm->createView(),
              "image" => $currentPlayer->getImage(),
              'profile_img' =>$currentPlayer->getImage(),
              'player' => $currentPlayer,
              'form' => $formPlayer->createView(),
              'team' => $this->playerPropService->getTeam($currentPlayer),
              'playerStats' => $playerStats,
              'playerName' => $currentPlayer->getUser()->getName(). ' '.$currentPlayer->getUser()->getFName()
          ));
    }




    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }

    /**
     * @Route("/player/training", name="playerTraining")
     */
    public function TrainingView(\Symfony\Component\HttpFoundation\Request $request,InjuredUsersRepository $injuredUserRepository, PlayerService $playerService)
    {
        $Current = Date('N');
        $DaysToSunday = 7 - $Current;
        $DaysFromMonday = $Current - 1;
        $Monday = Date('d-m-Y', StrToTime("- {$DaysFromMonday} Days"));
        $Sunday = Date('d-m-Y', StrToTime("+ {$DaysToSunday} Days"));

        $user = $this->getUser();
        $player = $user->getPlayer();
        $status = new InjuredUsers();

        $form = $this->createForm(InjuredUsersType::class, $status);
        $form->handleRequest($request);

        $statuses = $user->getTreatmentInformation();

        if ($form->isSubmitted()) {
            $querySucceed = $this->playerPropService->setInjured($player, $statuses, $status, $injuredUserRepository);
            return new Response($querySucceed);
        }

        $team = $playerService->getPlayerTeam($player);

        if ($team == null) {
            $coaches = null;
            $schedule = null;
            $headCoach = null;
        }
        else  {
            $coaches = $team->getCoaches();
            $schedule = null;
            $headCoach = $this->playerPropService->getHeadCoache($coaches);
        }

        $schedule = $this->getDoctrine()->getRepository(Schedule::class)
            ->findBy(["coaches" => $headCoach->getId() ],   ['date' => 'DESC', 'startTime' =>'ASC']);
        if (count($schedule) == 0){
            $schedule = [];
        }
        return $this->render('player/training.html.twig' , array('schedule' => $schedule,
            'monday' => strval($Monday),
            'sunday' => strval($Sunday),
            'profile_img' => $player->getImage(),
            'coaches' => $coaches,
            'bigCoach' =>$headCoach,
            'status' => $statuses,
            'playerName' => $player->getUser()->getName(). ' '.$player->getUser()->getFName(),
        ));
    }

    /**
     * @Route("/player/deleteStat/{id}", name="playerStatDeleting")
     */
    public function StatRemove($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $player= $this->getUser()->getPlayer()->getId();
        $stat = $this->getDoctrine()->getRepository(PlayersInjured::class)->find($id);
        if ($stat->getUsers()->getId() != $player)
            return $this->redirectToRoute(playerTraining);

        $em = $this->getDoctrine()->getManager();
        $em->remove($stat);
        $em->flush();
        return 1;
    }

    /**
     * @Route("/player/requests", name="playerRequestes")
     */
    public function Requests()
    {
        $user = $this->getUser();
        $requests = $this->getUser()->getRequestFromUser();
        return $this->render('player/requests.html.twig', array("requests" => $requests,
            "playerName" =>$user->getName(),
            "profile_img" => $user->getPlayer()->getImage()));
    }

    /**
     * @Route("/player/stats", name="playerStats")
     */
    public function Stats(PlayerService $playerService, MatchesRepository $matchesRepository)
    {
        $player =  $this->getUser()->getPlayer();
        $playerTeam = $playerService->getPlayerTeam($player);
        $upComingMatches = $matchesRepository->findUpcomingMatchesByTeam($playerTeam->getId());
        $teams = $this->playerPropService->getTeams($playerTeam->getDivision()  );

        $playedMatches = $playerService->getPlayedMatches($player);
        $titularMatchers = $playerService->getTitularPlayedMatches($player);
        $playerGoals = $playerService->getGoals($player);
        $playedMinutes = $playerService->getTotalPlayedMinutes($player);
        return $this->render('player/stats.html.twig', array(
            "playerName" => $this->getUser()->getName(),
            "profile_img" => $player->getImage(),
            "player" =>  $this->getUser()->getPlayer(),
            "upComingMatches" => $upComingMatches,
            "teams" => $teams,
            'playedMatches' => $playedMatches,
            'titularMatches' => $titularMatchers,
            'goals' => $playerGoals,
            'playedMinutes' => $playedMinutes

        ));
    }

    /**
     * @Route("/player/getOutOfTeam", name="getOutOfteam")
     */
    public function getOutOfTeam(Request $request){
        $player = $this->getUser()->getPlayer();
        $em = $this->getDoctrine()->getManager();

        if ($player->getTeam() != null ){
            $player->setTeam(null);
        }else {
            $player->setYouthTeam(null);
        }
        $em->persist($player);
        $em->flush();
        return $this->redirectToRoute('playerView');
    }

    /**
     * @Route("/player/searchTeam/{name}", )
     */
    public function searchTeam($name, TeamRepository $teamRepository){
        $teamsInformation = [];
        $teams = $teamRepository->getTeamsByName($name);
        for ($i = 0; $i < count($teams); $i++){
            $currentTeam = $teams[$i];
            array_push($teamsInformation, array($currentTeam->getName(),
                $currentTeam->getCity()->getName(). ', ' . $currentTeam->getCity()->getCountry()->getName(),
                $currentTeam->getImage(),
                $currentTeam->getDivision()->getName()
                ));
        }
        return $this->json($teamsInformation);
    }

    private  function getPropFromRequest($prop, Request $request){
        return json_decode($request->request->get($prop));
    }


    /**
     * @Route("/player/removeCurrentClub")
     */
    public function removeCurrentClubAction()
    {
        $player = $this->getUser()->getPlayer();
        $em = $this->getDoctrine()->getManager();
        $player->setTeam(null);
        $player->setYouthTeams(null);
        $em->persist($player);
        $em->flush();
        echo "You leave successfully your team!";
        exit;
    }




}
