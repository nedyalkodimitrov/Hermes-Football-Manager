<?php

namespace App\Controller;


use App\Repository\PlayerProperties\WaterGlassesRepository;
use App\Repository\TeamRepository;
use App\Service\PlayerProperties;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class PlayerController extends AbstractController
{
    private $playerPropService;
    private $waterGlassRepo;

    public function __construct(PlayerProperties $playerProperties, WaterGlassesRepository $waterGlassesRepository)
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

        return $this->render('players/index.html.twig', array('coachStatus' => $playerStats->getStatusFromCoaches(),
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
     * @Route("/players/removeWaterGlasses", name = "removeWaterGlassAction")
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
     * @Route("/players/addWaterGlasses", name = "addWaterGlassAction")
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
     * @Route("/players/settings", name = "player_settings")
     *
     */
    public function SettingsView(\Symfony\Component\HttpFoundation\Request $request){
        $currentPlayer = $this->getUser()->getPlayer();
        $newPlayer = new Players();
        $newPlayerStats = new PlayerStats();

        $playerStats = $currentPlayer->getStats();

        $positions = $this->getDoctrine()->getRepository(Positions::class)->findAll();
        $formStats = $this->createForm(PlayerStatsType::class, $newPlayerStats);
        $formPlayer = $this->createForm(PlayersType::class, $newPlayer);
        $formStats->handleRequest($request);
        $formPlayer->handleRequest($request);

        if ($formPlayer->isSubmitted() && $formPlayer->isValid()) {
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $newPlayer->getImage();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e) {

            }

            $em = $this->getDoctrine()->getManager();
            $currentPlayer->setImage($fileName);
            $em->persist($currentPlayer);
            $em->flush();

            return $this->render('players/settings/newSettingPage.html.twig',
                array("image" => $currentPlayer->getImage(),
                    'formPlayer' => $formPlayer->createView(),
                    'formStats' => $formStats->createView(),
                    'players' => $currentPlayer,
                    'team' => $this->playerPropService->getTeam($currentPlayer),
                    'playerStats' => $playerStats,
                    'playerName' => $currentPlayer->getUserId()->getName(). ' '.$currentPlayer->getUserId()->getFName()
                ));
        }

        return $this->render('players/settings/newSettingPage.html.twig',
            array(
                'formPlayer' => $formPlayer->createView(),
                'formStats' => $formStats->createView(),
                "image" => $currentPlayer->getImage(),
                'profile_img' =>$currentPlayer->getImage(),
                'players' => $currentPlayer,
                'team' => $this->playerPropService->getTeam($currentPlayer),
                'playerStats' => $playerStats,
                'playerName' => $currentPlayer->getUserId()->getName(). ' '.$currentPlayer->getUserId()->getFName()
            ));
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }
//
//    /**
//     * @Route("/players/training", name="playerTraining")
//     */
//    public function TrainingView(\Symfony\Component\HttpFoundation\Request $request, PlayersInjuredRepository $playersInjuredRepo, PlayersRepository $playersRepository)
//    {
//        $players = $this->getUser()->getPlayer();
//        $status = new PlayersInjured();
//        $form = $this->createForm(PlayersInjuredType::class, $status);
//        $form->handleRequest($request);
//        $statuses = $this->getDoctrine()->getRepository(PlayersInjured::class)
//            ->findBy(['users' =>$players->getId()], ['id' => 'DESC']);
//
//        $Current = Date('N');
//        $DaysToSunday = 7 - $Current;
//        $DaysFromMonday = $Current - 1;
//        $Monday = Date('d-m-Y', StrToTime("- {$DaysFromMonday} Days"));
//        $Sunday = Date('d-m-Y', StrToTime("+ {$DaysToSunday} Days"));
//
//        if ($form->isSubmitted()) {
//            $querySuccseesd = $this->playerPropService->setInjured($players, $statuses, $status, $playersInjuredRepo);
//            return new Response($querySuccseesd);
//        }
//
//        $team = $playersRepository->getPlayerTeam($players);
//        $coaches = $team->getCoaches();
//        $schedule = $this->playerPropService->getSchedule($coaches);
//        $headCoache = $this->playerPropService->getHeadCoache($coaches);
//
//        return $this->render('players/training.html.twig' , array('schedule' => $schedule,
//            'monday' => strval($Monday),
//            'sunday' => strval($Sunday),
//            'profile_img' => $players->getImage(),
//            'coaches' => $coaches,
//            'bigCoache' =>$headCoache,
//            'status' => $statuses,
//            'playerName' => $players->getUserId()->getFName(),
//        ));
//    }

    /**
     * @Route("/players/deleteStat/{id}", name="playerStatDeleting")
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
     * @Route("/players/getOutOfTeam", name="getOutOfteam")
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
     * @Route("/players/searchTeam/{name}", )
     */
    public function searchTeam($name, TeamRepository $teamRepository){
        $teamsInformation = [];
        $teams = $teamRepository->getTeamsByName($name);
        for ($i = 0; $i < count($teams); $i++){
            $currentTeam = $teams[$i];
            array_push($teamsInformation, array($currentTeam->getId(), $currentTeam->getName()));
        }
        return $this->json($teamsInformation);
    }

    private  function getPropFromRequest($prop, Request $request){
        return json_decode($request->request->get($prop));
    }

}
