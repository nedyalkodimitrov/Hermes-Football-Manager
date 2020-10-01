<?php

namespace App\Controller\Player;


use App\Repository\ScheduleRepository;
use App\Repository\TeamRepository;
use App\Service\CoachService;
use App\Service\TrainingService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PlayerPostController extends PlayerController
{

    /**
     * @Route("/player/player/post", name="player_player_post", methods={"POST"})
     */
    public function index()
    {
        return $this->render('player/player_post/index.html.twig', [
            'controller_name' => 'PlayerPostController',
        ]);
    }


    /**
     * @Route("/player/removeWaterGlasses", name = "removeWaterGlassAction",  methods={"POST"})
     */
    public function RemoveWaterGlassesAction()
    {
        $userId = $this->getUser()->getId();

        $water_glasses = $this->waterGlassRepo->getWaterGlassesByUserDESC($userId);

        if ($water_glasses->getWaterGlasses() > 0){
            $water_glasses->setWaterGlasses($water_glasses->getWaterGlasses() - 1);
            $this->waterGlassRepo->save($water_glasses);

        }
        return $this->json(1);
    }

    /**
     * @Route("/player/addWaterGlasses", name = "addWaterGlassActions", methods={"POST"})
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
        return $this->json(1);
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



    /**
     *
     * @Route("/player/trainingByDate", name = "playerGetTrainingByDate")
     */
    public function TrainingByDate(CoachService $coachService,Request $request,TrainingService $trainingService, ScheduleRepository $scheduleRepository, \App\Service\CustomSerializer $serializer)
    {
        $date = $request->get("date");
        $team =  $this->getUser()->getPlayer()->getTeam();

        $coach = $coachService->getHeadCoachOfTeam($team);
        if ($coach == null){
            $coach = $coachService->getHeadCoachOfYouthTeam($team);
        }

        $trainings    =  $trainingService->getTrainingByDate( $coach->getId(), $date, $scheduleRepository, $serializer);

        $serializedContent =  $serializer->serialize($trainings);
        return JsonResponse::fromJsonString($serializedContent);


    }



}
