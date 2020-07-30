<?php

namespace App\Controller\Player;

use App\Entity\InjuredUsers;
use App\Entity\Player;
use App\Entity\PlayerProperties\PlayerStats;
use App\Entity\PlayerProperties\Position;
use App\Entity\Schedule;
use App\Entity\User;
use App\Form\InjuredUsersType;
use App\Form\PlayerStatsType;
use App\Repository\InjuredUsersRepository;
use App\Repository\MatchesRepository;
use App\Repository\Requests\UserToUserRequestRepository;
use App\Service\FileService;
use App\Service\PlayerService;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerGetController extends PlayerController
{

    /**
     * @Route("/player", name ="playerView")
     */
    public function IndexView(UserToUserRequestRepository $userToUserRequestRepository)
    {
        $user = $this->getUser();
        $player =  $user->getPlayer();
        $playerStats = $player->getStats();

        $lastWaterRecord = $this->playerPropService->LastWaterRecord($user, $user->getId());
        $allWaterRecords = $this->waterGlassRepo->getWaterGlassesByUserASC($user->getId());
        $playerTeam = $this->playerPropService->getTeam($player);
        $allWaterRecords = array_reverse($allWaterRecords);

        if ($playerTeam != null) {
            $teams = $this->playerPropService->getTeams($playerTeam->getDivision());
            $hasTeam = true;
        }else {
            $teams = null;
            $hasTeam = false;
        }

        $request = $userToUserRequestRepository->findBy(
            [
                "type" => 'coach-player',
                "receiver" => $player
            ]
        );

        $playerNames = $this->playerPropService->generateName($player->getUser()->getFName());
        if (!$hasTeam ){
            return $this->render('player/noTeamPage.html.twig', array('coachStatus' => $playerStats->getStatusFromCoaches(),

                'requests' => $request
            ));
        }
        return $this->render('player/index.html.twig', array('coachStatus' => $playerStats->getStatusFromCoaches(),
            'playerStats' => $playerStats,
            'pace' => $playerStats->getPace(),
            'teams' => $teams,
            'hasTeam' => $hasTeam,
            'myTeam' => $playerTeam,
            'waterGlasses' =>  $lastWaterRecord->getWaterGlasses(),
            'allWatersGlasese' => $allWaterRecords,
            'profile_img' => $player->getImage(),
            'playerName' => $playerNames,
            'requests' => $request
        ));
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
        return $this->render('player/training/training.html.twig' , array('schedule' => $schedule,
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


}
