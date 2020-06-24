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
use App\Repository\CoachRepository;
use App\Repository\MatchesRepository;
use App\Repository\PlayerRepository;
use App\Repository\Requests\UserToUserRequestRepository;
use App\Repository\ScheduleRepository;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;
use App\Repository\YouthTeamRepository;
use App\Service\CoachService;
use App\Service\MatchService;
use App\Service\PlayerService;
use App\Service\TeamService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name = "adminHomeAction" )
     */
    public function CoachViewAction(Request $request, PlayerRepository $playerRepository){

        $admin = $this->getUser()->getAdmin();
        $team = $admin->getTeam();
        $division = $team->getDivision();
        $players = $team->getPlayers();
        $coaches = $team->getCoaches();
        $youthTeams = $team->getYouthTeams();
        $topPlayers = $playerRepository->getTopPlayers($team->getId());
        $topYouthPlayers = $playerRepository->getTopYouthPlayers($team->getId());



        return $this->render('admin/home.html.twig', array('profile_img' => $admin->getTeam()->getImage(),
            'playersNum' => count($players),
            'division' => $division,
            'players' => $topPlayers,
            'youthPlayers' => $topYouthPlayers,
            'coaches' =>$coaches,
            'team' =>''
        ));
    }

    /**
     * @Route("/admin/team" , name = "manTeam")
     */
    public function MenTeam(Request $request)
    {

        $admin = $this->getUser()->getAdmin();
        $team = $admin->getTeam();

        $players = $team->getPlayers();
        $coaches = $team->getCoaches();

        return $this->render('admin/menTeam.html.twig', array('players' =>$players,
            'coaches' => $coaches,
            'teamId' => $team->getId(),
            'profile_img' =>  $admin->getTeam()->getImage()));

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


        $admin = $this->getUser()->getAdmin();

        $youthTeam = $this->getDoctrine()->getRepository(YouthTeam::class)->find($id);
        if ($youthTeam->getMotherTeam()->getAdmin()[0]->getId() != $admin->getId()){
            return $this->redirectToRoute(adminHomeAction);
        }

        $players = $youthTeam->getPlayers();
        $coaches = $youthTeam->getCoaches();

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
            'profile_img' => $team->getImage()));

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

            'profile_img' => $admin->getTeam()->getImage()));

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

    /**
     * @Route("/admin/schedule" , name = "allSchedule")
     */
    public function Schedule(Request $request, ScheduleRepository $scheduleRepository){
        $team = $this->getUser()->getAdmin()->getTeam();
        $menTeamSchedule = $this->getHeadCoachOfTeam($team)->getSchedule();
    }

    /**
     * @Route("/admin/requests" , name = "requestView")
     */
    public function Requests(Request $request, UserToUserRequestRepository $userRequestRepository ){
        $admin = $this->getUser()->getAdmin();
        $team = $admin->getTeam();
        $coach = $this->getHeadCoachOfTeam($team);
        $fromTeamRequests = $userRequestRepository->findBy(
            [
                'sender' => $coach->getUser(),
                'type' => 'coach-player'
            ]
        );
        $toTeamRequests = $userRequestRepository->findBy(
            [
                'receiver' => $coach->getUser(),
                'type' => 'player-coach'
            ]
        );
        $fromTeamCoachRequests = $userRequestRepository->findBy(
            [
                'sender' => $admin->getUser(),
                'type' => 'admin-coach'
            ]
        );
        $toTeamCoachRequests = $userRequestRepository->findBy(
            [
                'receiver' => $admin->getUser(),
                'type' => 'coach-admin'
            ]
        );

        return $this->render('admin/requests.html.twig',
            array
            (
                'fromTeamRequests' =>$fromTeamRequests,
                'toTeamRequests' => $toTeamRequests,
                'fromTeamCoachRequests' => $fromTeamCoachRequests,
                'toTeamCoachRequests' => $toTeamCoachRequests,
                'profile_img' => $team->getImage()
            )
        );


    }

    /**
     * @Route("/admin/division" , name = "divisionView")
     */
    public function DivisionView(Request $request,TeamService $teamService, MatchesRepository $matchesRepository, UserToUserRequestRepository $userRequestRepository )
    {
        $admin = $this->getUser()->getAdmin();
        $team = $admin->getTeam();
        $division = $team->getDivision();
        $teams = $teamService->getTeams($division);
        $upComingMatches = $matchesRepository->findUpcomingMatchesByTeam($team);
        $pastMatches = $matchesRepository->findPastMatchesByTeam($team);
        if ($division == null){
//
        }else{
            return $this->render('admin/division.html.twig',
                array
                (
                    'division' => $division,
                    'teams' => $teams,
                    'profile_img' => $team->getImage(),
                    'admin' => $admin,
                    'upComingMatches' => $upComingMatches,
                    'pastMatches' => $pastMatches
                )
            );


        }
    }
    /**
     * @Route("/admin/player/{id}", name = "adminPlayerStatsView")
     *
     */
    public function PlayerAction($id, \Symfony\Component\HttpFoundation\Request $request, PlayerService $playerService, CoachService $coachService)
    {
        $admin = $this->getUser()->getAdmin();
        $player = $this->getDoctrine()->getRepository(Player::class)->find($id);
        $playerStats = $player->getStats();
        $newPlayers = new Player();

        $form = $this->createFormBuilder($newPlayers)->add('pace');

        $playerTeam = $playerService->getPlayerTeam($player);
        $team =$admin->getTeam();

        if ($playerTeam->getId() != $team->getId() &&
            (
                ($player->getYouthTeam() == null && $team->getYouthTeam() != null) ||
                ($player->getYouthTeam() != null && $team->getYouthTeam() == null)
            )
        ){
            return $this->redirectToRoute("trainingView");
        }

        $playedMatches = $playerService->getPlayedMatches($player);
        $titularMatchers = $playerService->getTitularPlayedMatches($player);
        $playerGoals = $playerService->getGoals($player);
        $playedMinutes = $playerService->getTotalPlayedMinutes($player);
        return $this->render('coaches/playerStat.html.twig',
            array(
                'profile_img' => $team ->getImage(),
                'player' => $player,
                'playerStats' => $playerStats,
                'image' => $player->getImage(),
                'playedMatches' => $playedMatches,
                'titularMatches' => $titularMatchers,
                'goals' => $playerGoals,
                'playedMinutes' => $playedMinutes
            )
        );
    }
    /**
     * @Route("/admin/settings" , name = "adminSettingView")
     */
    public function SettingsView(Request $request,TeamService $teamService, MatchesRepository $matchesRepository, UserToUserRequestRepository $userRequestRepository )
    {
        $admin = $this->getUser()->getAdmin();
        $team = $admin->getTeam();
        $newTeam = new Team();
        $teamFormBuilder = $this->createFormBuilder($newTeam)
            ->add('image')
            ->add('coverImage')
            ->getForm();

        return $this->render('admin/settings.html.twig',
            array
            (
                'profile_img' => $team->getImage(),
                'admin' => $admin,
                'team' => $team,
                'form' => $teamFormBuilder->createView()

            )
        );
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
