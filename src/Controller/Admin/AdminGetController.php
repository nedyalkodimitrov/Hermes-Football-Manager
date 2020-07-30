<?php

namespace App\Controller\Admin;

use App\Entity\Player;
use App\Entity\Team;
use App\Entity\YouthTeam;
use App\Repository\MatchesRepository;
use App\Repository\PlayerRepository;
use App\Repository\Requests\UserToUserRequestRepository;
use App\Service\CoachService;
use App\Service\PlayerService;
use App\Service\TeamService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminGetController extends AdminController
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
     * @Route("/admin/coaches" , name = "coaches")
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

}
