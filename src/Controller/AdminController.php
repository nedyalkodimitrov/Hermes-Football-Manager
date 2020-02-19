<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Entity\Coach;
use App\Entity\CoachPosition;
use App\Entity\Division;
use App\Entity\Player;
use App\Entity\Requests\CoachToPlayerRequest;
use App\Entity\Team;
use App\Entity\User;
use App\Entity\YouthDivision;
use App\Entity\YouthTeam;
use App\Form\CoachType;
use App\Form\PlayerType;
use App\Form\UserType;
use App\Repository\PlayerRepository;
use App\Repository\TeamRepository;
use App\Repository\YouthTeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name = "adminHomeAction" )
     */
    public function CoacheViewAction(Request $request){
        $user = new User();
        $coach = new Coach();
        $player = new Player();

        $admin = $this->getUser()->getAdmin();
        $team = $admin->getTeam();
        $division = $team->getDivision();
        $players = $team->getPlayers();
        $coaches = $team->getCoaches();
        $youthTeams = $team->getYouthTeams();

        $form_user = $this->createForm(UserType::class, $user);
        $form_coaches = $this->createForm(CoachType::class, $coach);
        $form_player = $this->createForm(PlayerType::class, $player);

        $form_player->handleRequest($request);
        $form_user->handleRequest($request);

        $form_coaches->handleRequest($request);

        return $this->render('admin/home.html.twig', array('profile_img' => $admin->getTeam()->getImage(),
            'playersNum' => count($players),
            'division' => $division,
            'players' => $players,
            'coaches' =>$coaches,
            'team' =>''
        ));
    }

    /**
     * @Route("/admin/youthTeams", name= "youthTeams" )
     */
    public function ListTeams(Request $request){
        $user = $this->getUser()->getAdmin();
        $team = $user->getTeam();
        $youthTeams = $team->getYouthTeams();
        $country = $team->getCity()->getCountry();
        $divisions = $country->getYouthDivisions();

        return $this->render('admin/teams.html.twig', array(
            'youthTeams' =>$youthTeams,
            'profile_img' => $this->getUser()->getAdmin()->getTeam()->getImage(),
            'divisions' => $divisions,
        ));
    }


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
     * @Route("/admin/youthTeam/{id}" , name = "youthTeam")
     */
    public function YouthTeam($id, Request $request){

        $user = new User();
        $coach = new Coach();
        $player = new Player();
        $admin = $this->getUser()->getAdmin();

        $youthTeam = $this->getDoctrine()->getRepository(YouthTeam::class)->find($id);
        if ($youthTeam->getMotherTeam()->getAdmin()[0]->getId() != $admin->getId()){
            return $this->redirectToRoute(adminHomeAction);
        }

        $players = $youthTeam->getPlayers();
        $coaches = $youthTeam->getCoaches();

        $form_user = $this->createForm(UserType::class, $user);
        $form_player = $this->createForm(PlayerType::class, $player);
        $form_coaches = $this->createForm(CoachType::class, $coach);

        $form_coaches->handleRequest($request);
        $form_player->handleRequest($request);
        $form_user->handleRequest($request);

        if($form_player->isSubmitted() && $form_user->isSubmitted()) {

            $playerPhone = $player->getPhone();

            if ($this->CheckPhoneNumber($playerPhone)) {
                return 1;
            } else {

                $positionId = $this->GetPropFromRequest('position');
                $position = $this->getDoctrine()->getRepository(Positions::class)->find((int)$positionId);

                $player->setPosition($position);
                $player->setYouthTeams($youthTeam);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();


                $player->setUser($user);
                $em->persist($player);
                $em->flush();

                return 2;
            }
        }

        if($form_coaches->isSubmitted() && $form_user->isSubmitted()) {
            $coachePhoneNumber = $coache->getPhone();

            if ($this->CheckPhoneNumber($coachePhoneNumber)) {
                return 1;
            } else {
                $positionId = $this->GetPropFromRequest('position');
                $position = $this->getDoctrine()->getRepository(CoachPosition::class)->find((int)$positionId);

                $coache->setTeamPosition($position);
                $coache->setYouthTeam($youthTeam);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $coache->setUserId($user);
                $em->persist($coache);
                $em->flush();

                return 2;
            }
        }

        return $this->render('admin/youthTeam.html.twig', array('players' =>$players,
            'coaches' => $coaches,
            'teamId' => $id,
            'profile_img' =>  $admin->getTeam()->getImage()));

    }

    /**
     * @Route("/admin/coaches/" , name = "coaches")
     */
    public function Coaches(Request $request)
    {
        $admin = $this->getUser()->getAdmin();
        $team = $admin->getTeam();
        $youthTeams = $team->getYouthTeams();

        return $this->render('admin/coaches.html.twig', array('team' =>$team,
            'youthTeams' => $youthTeams,
            'profile_img' => ''));

    }

    /**
     * @Route("/admin/coaches/{id}" , name = "coacheAction")
     */
    public function CoachesAction($id, Request $request)
    {   $admin = $this->getUser()->getAdmin();
        $coache = $this->getDoctrine()->getRepository(Coaches::class)->find($id);
        if ($coache->getTeam() != null){
            $team = $coache->getTeams();
        }else{
            $team = $coache->getYouthTeam()->getTeam();
        }

        if ($team->getAdmin()[0]->getId() != $admin->getId())
        {
            return $this->redirectToRoute(coaches);
        }

        return $this->render('admin/coacheAction.html.twig', array('coache' =>$coache,

            'profile_img' => ''));

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
     * @Route("/admin/sendRequestToPlayer" , name = "deleteCoache")
     */
    public function SendRequestToPlayer(PlayerRepository $playerRepository,TeamRepository $teamRepository, YouthTeamRepository $youthTeamRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $playerId = $this->GetPropFromRequest('player');
        $teamName = $this->GetPropFromRequest('team');
        $team = $teamRepository->getTeamsByName($teamName);
        $youthTeam = $youthTeamRepository->getTeamsByName($teamName);
        if ($team != null){
            $coach = $this->getHeadCoachOfTeam($team[0]);
        }else {
            $coach = $this->getHeadCoachOfYouthTeam($youthTeam[0]);
            $team = $youthTeam[0];
        }
        if ($coach == null){
            return "Please first add head coach";
        }


        $player = $playerRepository->find(intval($playerId));
        $allPlayerRequest = $coach->getRequestsToPlayers();
        foreach($allPlayerRequest as $playerRequest){
            if ($playerRequest->getPlayer()->getId() ==  intval($playerId)){
                echo "this player has a request ";
                exit;
            }
        }

        if($player != null)
        {
            $toPlayerRequest = new CoachToPlayerRequest();
            $toPlayerRequest->setCoach($coach);
            $toPlayerRequest->setPlayer($player);
            $toPlayerRequest->setDate(date("d/m/Y"));
            $toPlayerRequest->setMessage($message);
            $em->persist($toPlayerRequest);
            $em->flush();
//            var_dump($toPlayerRequest);
            echo $message;
            exit;
        }

        echo "Please give us a valid player";
        exit;
    }



    private function CheckPhoneNumber($phone){
        $playerPhoneNumber = $this->getDoctrine()->getRepository(Player::class)->findBy(array('phone' => $phone));
        $coachPhoneNumber = $this->getDoctrine()->getRepository(Coach::class)->findBy(array('phone' => $phone));
        $adminPhoneNumber = $this->getDoctrine()->getRepository(Admin::class)->findBy(array('phone' => $phone));

        if (count($playerPhoneNumber) > 0 || count($coachPhoneNumber) > 0 || count($adminPhoneNumber) > 0  ){
            return true;
        }
        return false;

    }

    private  function GetPropFromRequest($prop, Request $request){
        return json_decode($request->request->get($prop));
    }

    private function getHeadCoachOfTeam(Team $team){
        $coaches = $team->getCoaches();

        foreach ($coaches as $coach){
            if ($coach->getTeamPosition() == "HEAD_COACH"){
                return $coach;
            }

        }
        return null;

    }

   private function getHeadCoachOfYouthTeam(YouthTeam $youthTeam){
        $coaches = $youthTeam->getCoaches();

        foreach ($coaches as $coach){
            if ($coach->getTeamPosition() == "HEAD_COACH"){
                return $coach;
            }

        }
        return null;

    }


}
