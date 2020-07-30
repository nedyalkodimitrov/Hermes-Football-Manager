<?php

namespace App\Controller\Admin;

use App\Entity\Coach;
use App\Entity\Player;
use App\Entity\User;
use App\Entity\YouthDivision;
use App\Entity\YouthTeam;
use App\Repository\CoachRepository;
use App\Repository\PlayerRepository;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;
use App\Repository\YouthTeamRepository;
use App\Service\PlayerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminPostController extends AdminController
{
    /**
     * @Route("/admin/createYouthTeam", name= "createYouthTeam" )
     */
    public function CreateYouthTeam(Request $request)
    {
        $user = $this->getUser()->getAdmin();
        $team = $user->getTeam();
        $country = $team->getCity();

        $youthTeam = new YouthTeam();
        $youthTeam->setName($request->request->get('name'));
        $division = $this->getDoctrine()->getRepository(YouthDivision::class)->find(intval($request->request->get('division')));
        $youthTeam->setDivision($division);

        if ($youthTeam->getName() != null && $youthTeam->getDivision() != null) {
            $youthTeam->setCity($country);
            $youthTeam->setMotherTeam($team);
            $youthTeam->setPoints(0);
            $youthTeam->setPlayedGames(0);
            $youthTeam->setLostGames(0);
            $youthTeam->setGoalsInTheTeamDoor(0);
            $youthTeam->setDrawsGames(0);
            $youthTeam->setGoals(0);
            $youthTeam->setWins(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($youthTeam);
            $em->flush();

            return $this->redirectToRoute('youthTeams');
        }


    }
    /**
     * @Route("/admin/deleteYouthTeam/{id}", name= "deleteYouthTeam" )
     */
    public function DeleteYouthTeam($id, Request $request){
        $em = $this->getDoctrine()->getManager();

        $youthTeam = $this->getDoctrine()->getRepository(YouthTeam::class)->find(intval($id));
        $players = $this->getDoctrine()->getRepository(Player::class)->findBy(["youthTeams" =>intval($id)]);
        $coaches= $this->getDoctrine()->getRepository(Coach::class)->findBy(["youthTeam" =>intval($id)]);

        foreach ($coaches as $coach){
            $em->remove($coach);
            $em->flush();
        }

        foreach ($players as $player){
            $em->remove($player);
            $em->flush();
        }

        $em->remove($youthTeam);
        $em->flush();

        return $this->redirectToRoute('youthTeams');
    }





    /**
     * @Route("/admin/removePlayerFromTeam/{id}" , name = "deletePlayer")
     */
    public function DeletePlayer($id, Request $request)
    {    $players = $this->getDoctrine()->getRepository(Players::class)->find(intval($id));

        if($players->getTeam() != null){
            $team = $players->getTeam();
        }else{
            $team = $players->getYouthTeams()->getMotherTeam();
        }

        if ($team->getId() != $this->getUser()->getAdmin()->getTeam()->getId()){
            echo 0;
            exit;
        }

        $user = $players->getUserId();
        $em = $this->getDoctrine()->getManager();
        $em->remove($players);
        $em->remove($user);
        $em->flush();
        return 1;
    }
    /**
     * @Route("/admin/deleteCoache/{id}" , name = "deleteCoache")
     */
    public function DeleteCoache($id, Request $request)
    {
        $coache = $this->getDoctrine()->getRepository(Coaches::class)->find(intval($id));

        if($coache->getTeam() != null){
            $team = $coache->getTeam();
        }else{
            $team = $coache->getYouthTeam()->getMotherTeam();
        }

        if ($team->getId() != $this->getUser()->getAdmin()->getTeam()->getId()){
            return 0;
        }

        $user = $coache->getUserId();
        $em = $this->getDoctrine()->getManager();
        $em->remove($coache);
        $em->remove($user);
        $em->flush();
        return 1;
    }



    /**
     * @Route("/admin/getPlayersByName" , name = "deleteCoache")
     */
    public function GetPlayersByName(Request $request, UserRepository $userRepository, PlayerService $playerService, PlayerRepository $playerRepository,TeamRepository $teamRepository, YouthTeamRepository $youthTeamRepository)
    {
        $playerInfo =$request->request->get("playerInfo");

        $results = $userRepository->findPlayer($playerInfo);
        $players = [];

        for ($i = 0; $i < count($results); $i++){
            $playerInformation = [];
            $user = $this->getDoctrine()->getRepository(User::class)->find($results[0]["id"]);
            $player = $user->getPlayer();
            $playerTeam = $playerService->getPlayerTeam($player);
            $playerInformation[0] = $user;
            $playerInformation[1] = $player->getPosition()->getName();
            $playerInformation[2] = $user->getCity()->getName(). ", " . $user->getCity()->getCountry()->getName()  ;
            $playerInformation[3] = $playerTeam;
            $playerInformation[4] =   $player->getId();
            $players[$i] = $playerInformation;
        }
        $response = new JsonResponse();
        $response->setData($players);
        return $response;

    }


    /**
     * @Route("/admin/getCoachesByName" , name = "getCoachesByName")
     */
    public function GetCoachesByName(Request $request,CoachRepository $coachRepository, UserRepository $userRepository,TeamRepository $teamRepository, YouthTeamRepository $youthTeamRepository)
    {
        $playerInfo =$request->request->get("coacheInfo");

        $results = $userRepository->findCoach($playerInfo);
        $coaches = [];

        for ($i = 0; $i < count($results); $i++){
            $coachInformation = [];
            $user = $this->getDoctrine()->getRepository(User::class)->find($results[0]["id"]);
            $coach = $user->getPlayer();
            $coachTeam = $coachRepository->getCoachTeam($coach);
            $coachInformation[0] = $user;
            $coachInformation[1] = $coach->getPosition()->getName();
            $coachInformation[2] = $user->getCity()->getName(). ", " . $user->getCity()->getCountry()->getName()  ;
            $coachInformation[3] = $coachTeam;
            $coachInformation[4] =   $coach->getId();
            $players[$i] = $coachInformation;
        }
        return new JsonResponse($coaches);
    }


}
