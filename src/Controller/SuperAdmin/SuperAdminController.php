<?php

namespace App\Controller\SuperAdmin;

use App\Entity\Admin;
use App\Entity\Country;
use App\Entity\Division;
use App\Entity\Match;
use App\Entity\MatchList;
use App\Entity\Matches;
use App\Entity\MatchStats;
use App\Entity\Team;
use App\Entity\User;
use App\Entity\YouthDivision;
use App\Form\MatchesType;
use App\Repository\DivisionRepository;
use App\Repository\MatchesRepository;
use App\Repository\MatchListRepository;
use App\Repository\PlayerRepository;
use App\Repository\TeamRepository;
use App\Service\MatchService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SuperAdminController extends AbstractController
{
    /**
     * @Route("/superAdmin" ,name  = "superAdminHome")
     *
     */
    public function signInView(Request $request, AuthenticationUtils $authUtils, DivisionRepository $divisionRepository)
    {
        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $divisions = $this->getDoctrine()->getRepository(Division::class)->findAll();
        $youthDivisions = $this->getDoctrine()->getRepository(YouthDivision::class)->findAll();
        $getTopThreeDivision = $divisionRepository->getTopDivision();
        return $this->render('superAdmin/index.html.twig', array(
            'profile_img' => '',
            'teams' => $teams,
            'topDivisions' => $getTopThreeDivision,
            'users' => count($users),
            'divisions' => $divisions,
            'youthDivisions' => $youthDivisions,
        ));
    }
    /**
     * @Route("/superAdmin/countries" ,name  = "superAdminCountries")
     *
     */
    public function TeamsCountry(Request $request, AuthenticationUtils $authUtils)
    {
        $countries = $this->getDoctrine()->getRepository(Country::class)->findAll();
        return $this->render('superAdmin/countryTeams.html.twig', array(
            'countries' => $countries
        ));
    }

    /**
     * @Route("/superAdmin/divisionsCountry" ,name  = "superAdminDivisionsCountry")
     *
     */
    public function DivisionsCountry(Request $request, AuthenticationUtils $authUtils)
    {
        $countries = $this->getDoctrine()->getRepository(Country::class)->findAll();
        return $this->render('superAdmin/countryDivisions.html.twig', array(
            'countries' => $countries
        ));
    }

    /**
     * @Route("/superAdmin/teams/{id}" ,name  = "superAdminTeams")
     *
     */
    public function Teams($id, TeamRepository $teamRepository, MatchesRepository $matchesRepository)
    {
        $teams = $this->getDoctrine()->getRepository(Team::class)->findBy(["division" => strval($id)], ['name' => 'ASC']);
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $division = $this->getDoctrine()->getRepository(Division::class)->find(strval($id));
        $teamStanding = $teamRepository->getTeamByDivisionDesc($id);
        $matches = $this->getDoctrine()->getRepository(Matches::class)->findBy(['division'=>intval($id)]);
        $pastMatches = $matchesRepository->findPastMatchesWithNoMatchStats();
        $upcomingMatches = $matchesRepository->findUpcomingMatches();

        $match = new Matches();
        $matchForm = $this->createForm(MatchesType::class, $match)->createView();
        return $this->render('superAdmin/teams.html.twig', array(
            'division' => $division,
            'hasTeam' => true,
            'teams' => $teams,
            'matches' => $matches,
            'upcomingMatches' => $upcomingMatches,
            'pastMatches' => $pastMatches,
            'standingTeams' => $teamStanding,
            'users' => count($users),
            'matchForm' => $matchForm,
        ));
    }




    /**
     * @Route("/superAdmin/createTeams" ,name  = "superAdminCreateTeam")
     *
     */
    public function CreateTeams( Request $request)
    {
        $phoneCheck = $this->PhoneCheker( strval($request->get('phone')));

        $team = new Team();
        $admin = new Admin();
        $user = new User();
        $form = $this->createFormBuilder($team)->add("name")->getForm();
        $adminForm = $this->createFormBuilder($admin)->add("phone")->getForm();
        $form->handleRequest($request);
        $adminForm->handleRequest($request);

        $divsion = $this->getDoctrine()->getRepository(Division::class)->find(intval($request->get('division')));
        $request->get('name');
        $team->setName( $request->get('name'));
        $team->setDevision($divsion);
        $admin->setPhone( $request->get('phone'));

        $country = $divsion->getCountry();

        if($team->getName() != null &&  $admin->getPhone() != null){
            $team->setCountry($country);
            $team->setDrawsGames(0);
            $team->setGoals(0);

            $team->setGoalsInTheTeamDoor(0);
            $team->setLostGames(0);
            $team->setPlayedGames(0);
            $team->setPoints(0);
            $team->setWins(0);


            $em = $this->getDoctrine()->getManager();

            $em->persist($team);
            $em->flush();

            $user->setFName(" ");
            $user->setName($team->getName());
            $em->persist($user);
            $em->flush();
            $admin->setUser($user);
            $admin->setTeam($team);
            $em->persist($admin);
            $em->flush();
            echo 2;
            exit;
        }



    }


    /**
     * @Route("/superAdmin/divisions/{id}" ,name  = "superAdminDivisions")
     *
     */
    public function SuperAdminDivisions($id, Request $request)
    {
        $divisions = $this->getDoctrine()->getRepository(Division::class)->findBy(["country" => $id]);
        return $this->render('superAdmin/divisions.html.twig', array(
            'divisions' => $divisions,
        ));
    }


    /**
     * @Route("/superAdmin/teamsDivisions/{id}" ,name  = "superAdminTeamsDivisions")
     *
     */
    public function SuperAdminTeamsDivisions($id, Request $request)
    {
        $divisions = $this->getDoctrine()->getRepository(Division::class)->findBy(["country" => $id]);
        return $this->render('superAdmin/teamsDivisions.html.twig', array(
            'divisions' => $divisions,
        ));
    }

    /**
     * @Route("/superAdmin/createDivision",name  = "superAdminTeamsDivisions")
     *
     */
    public function CreateDivision( Request $request)
    {

        return $this->render('superAdmin/divisions/createDivision.html.twig', array(

        ));
    }


    /**
     * @Route("/superAdmin/removeTeam/{id}" ,name  = "superAdminDeleteTeam")
     *
     */
    public function RemoveTeam($id, Request $request, AuthenticationUtils $authUtils, MatchesRepository $matchesRepository)
    {
        $team = $this->getDoctrine()->getRepository(Team::class)->find(intval($id));
        $em = $this->getDoctrine()->getManager();
        $division = $team->getDivision();
        $homeMatches = $matchesRepository->findBy(
            [
                "homeTeam" => $team,
                "division" => $division
            ]
        );
        $awayMatches = $matchesRepository->findBy(
            [
                "awayTeam" => $team,
                "division" => $division
            ]
        );

        for ($i = 0; $i < count($homeMatches); $i++) {
            $matchStats = $homeMatches[$i]->getMatchStats();
            if ($matchStats != null) {
                $homeTeamGoals = $homeMatches[$i]->getMatchStats()->getHomeTeamGoals();
                $awayTeamGoals = $homeMatches[$i]->getMatchStats()->getAwayTeamGoals();
                $awayTeam = $homeMatches[$i]->getAwayTeam();
                if ($awayTeamGoals > $homeTeamGoals) {
                    $awayTeam->setPoints($awayTeam->getPoints() - 3);
                    $awayTeam->setWins($awayTeam->getWins() - 1);

                } else if ($awayTeamGoals < $homeTeamGoals) {
                    $awayTeam->setPoints($awayTeam->getPoints() + 3);
                    $awayTeam->setWins($awayTeam->getLostGames() - 1);
                } else {
                    $awayTeam->setPoints($awayTeam->getPoints() - 1);
                    $awayTeam->setWins($awayTeam->getDrawsGames() - 1);
                }

                $awayTeam->setGoals($awayTeam->getGoals() - $awayTeamGoals);
                $awayTeam->setGoalsInTheTeamDoor($awayTeam->getGoalsInTheTeamDoor() - $homeTeamGoals);

                $em->persist($awayTeam);
                $em->flush();
            }else{
                $homeMatches[$i]->setIsCanceled(true);
            }
        }

        for ($i = 0; $i < count($awayMatches); $i++){
                $matchStats = $awayMatches[$i]->getMatchStats();
                if ($matchStats != null){

                    $homeTeamGoals = $awayMatches[$i]->getMatchStats()->getHomeTeamGoals();
                    $awayTeamGoals = $awayMatches[$i]->getMatchStats()->getAwayTeamGoals();
                    $homeTeam = $homeMatches[$i]->getHomeTeam();
                    if ($awayTeamGoals < $homeTeamGoals){
                        $homeTeam->setPoints($homeTeam->getPoints() - 3);
                        $homeTeam->setWins($homeTeam->getWins() - 1);

                    }else if ($awayTeamGoals > $homeTeamGoals){
                        $homeTeam->setPoints($homeTeam->getPoints() + 3);
                        $homeTeam->setWins($homeTeam->getLostGames() - 1);
                    }else{
                        $homeTeam->setPoints($homeTeam->getPoints() - 1);
                        $homeTeam->setWins($homeTeam->getDrawsGames() - 1);
                    }

                    $homeTeam->setGoals($homeTeam->getGoals() - $homeTeamGoals);
                    $homeTeam->setGoalsInTheTeamDoor($homeTeam->getGoalsInTheTeamDoor() - $awayTeamGoals);

                    $em->persist($homeTeam);
                    $em->flush();
            }else{
                    $awayMatches[$i]->setIsCanceled(true);
                }
        }

        $team->setDivision(null);
            $em->flush();
        echo 1;
        exit;

    }
    /**
     * @Route("/superAdmin/deleteremDivision" ,name  = "superAdminDeleteDivision")
     *
     */
    public function DeleteDivision(Request $request, AuthenticationUtils $authUtils)
    {
        $teams = $this->getDoctrine()->getRepository(Admins::class)->findAll();
        $users = $this->getDoctrine()->getRepository(Users::class)->findAll();
        $divisions = $this->getDoctrine()->getRepository(Division::class)->findAll();
        $youthDivisions = $this->getDoctrine()->getRepository(YouthDivisions::class)->findAll();
        return $this->render('superAdmin/index.html.twig', array(
            'profile_img' => '',
            'teams' => $teams,
            'users' => count($users),
            'divisions' => $divisions,
            'youthDivisions' => $youthDivisions,


        ));
    }


    /**
     * @Route("/superAdmin/createMatch" ,name  = "createMatch")
     *
     */
    public function createMatch(TeamRepository $teamRepository, Request $request)
    {
        $match = new Matches();
        $em = $this->getDoctrine()->getManager();
        $homeTeamId = $request->request->get("homeTeam");
        $awayTeamId = $request->request->get("awayTeam");
        var_dump($awayTeamId);
        $date = $request->request->get("date");
        var_dump($date);
        $time = $request->request->get("time");
        var_dump($time);

        $homeTeam = $teamRepository->find(intval($homeTeamId));
        $awayTeam = $teamRepository->find(intval($awayTeamId));
        //
        $match->setHomeTeam($homeTeam);
        $match->setAwayTeam($awayTeam);
        $match->setDate($date);
        $match->setTime($time);
        $match->setDivision($homeTeam->getDivision());

        $em->persist($match);
        $em->flush();


        echo "suxxel";
        exit;



    }


    /**
     * @Route("/superAdmin/matches/{id}" ,name  = "matchView", methods={"GET"})
     *
     */
    public function MatchView(MatchesRepository $matchesRepository, $id)
    {
        $match = $matchesRepository->find(intval($id));

        return $this->render('superAdmin/match.html.twig', array(
           "match" => $match


        ));

    }

    /**
     * @Route("/superAdmin/matches/{id}" ,name  = "matchPlayerDetailList", methods={"POST"} )
     *
     */
    public function MatchPlayerDetailList(MatchService $matchService, Request $request,MatchesRepository $matchesRepository, $id)
    {

      $homeTeamPlayers = json_decode($request->request->get('homeTeamPlayers'));
      $awayTeamPlayers = json_decode($request->request->get('awayTeamPlayers'));
      $em = $this->getDoctrine()->getManager();

      $homeTeamGoals = 0;
      $awayTeamGoals = 0;
      $match = $matchesRepository->find($id);
      for ($i=0; $i < count($homeTeamPlayers) ; $i++) {
        $homeTeamGoals += $homeTeamPlayers[$i][0];
        $matchListRecord = $matchService->getMatchListRecodByMatchAndPlayer(intval($homeTeamPlayers[$i][7]), $id);
        $matchListRecord->setGoals($homeTeamPlayers[$i][0]);
        $matchListRecord->setAssits($homeTeamPlayers[$i][1]);
        $matchListRecord->setSaves($homeTeamPlayers[$i][2]);
        $matchListRecord->setStartTime($homeTeamPlayers[$i][4]);
        $matchListRecord->setEndTime($homeTeamPlayers[$i][5]);
        $em->persist($matchListRecord);
        $em->flush();

      }

      for ($i=0; $i < count($awayTeamPlayers) ; $i++) {
        $awayTeamGoals += $awayTeamPlayers[$i][0];
        $matchListRecord = $matchService->getMatchListRecodByMatchAndPlayer(intval($awayTeamPlayers[$i][7]), $id);
        $matchListRecord->setGoals($awayTeamPlayers[$i][0]);
        $matchListRecord->setAssits($awayTeamPlayers[$i][1]);
        $matchListRecord->setSaves($awayTeamPlayers[$i][2]);
        $matchListRecord->setStartTime($awayTeamPlayers[$i][4]);
        $matchListRecord->setEndTime($awayTeamPlayers[$i][5]);
        $em->persist($matchListRecord);
        $em->flush();

      }

      $matchStats = $match->getMatchStats();
      if ($matchStats == null) {
            $matchStats = new MatchStats();
            $matchStats->setMatch($match);
            $em->persist($matchStats);
            $match->setMatchStats($matchStats);
            $em->persist($match);
            $em->flush();
      }

      $matchStats->setHomeTeamGoals($homeTeamGoals);

      $matchStats->setAwayTeamGoals($awayTeamGoals);
      $matchStats->setMatch($match);
      $matchStats->setIsPlayed(true);
      $em->persist($matchStats);

      $em->persist($match);
      $em->flush();

      exit;
    }


    /**
     * @Route("/superAdmin/canceledMatch" ,name  = "", methods={"POST"} )
     *
     */
    public function DeleteMatch(MatchService $matchService, Request $request,MatchesRepository $matchesRepository, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $matchId = $request->request->get("matchId");
        $match = $matchesRepository->find(intval($matchId));

        $match->setIsCanceled(true);
        $em->persist($match);
        $em->flush();

    }

    /**
     * @Route("/superAdmin/delayMatch" ,name  = "", methods={"POST"} )
     *
     */
    public function DelayMatch(Request $request,MatchesRepository $matchesRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $matchId = $request->request->get("matchId");
        $matchTime = $request->request->get("matchTime");
        $matchDate = $request->request->get("matchDate");
        $match = $matchesRepository->find(intval($matchId));
        $match->setDate($matchDate);
        $match->setTime($matchTime);
        $em->persist($match);
        $em->flush();

    }

    /**
     * @Route("/superAdmin/teamView/{id}" ,name  = "superAdminTeamView")
     *
     */
    public function TeamView($id, Request $request,MatchesRepository $matchesRepository, MatchService $matchService)
    {
        $team = $this->getDoctrine()->getRepository(Team::class)->find($id);
        $upcomingMatches = $matchesRepository->findUpcomingMatchesByTeam($team);
        $pastMatches = $matchesRepository->findPastMatchesByTeam($team);
        return $this->render('superAdmin/team.html.twig', array(
            "team" => $team,
            "upcomingMatches" => $upcomingMatches,
            "pastMatches" => $pastMatches


        ));

    }

        public function PhoneCheker($phone)
    {
        $player = $this->getDoctrine()->getRepository(Players::class)->findBy(["phone" => $phone]);
        $coache = $this->getDoctrine()->getRepository(Players::class)->findBy(["phone" => $phone]);
        $admin = $this->getDoctrine()->getRepository(Players::class)->findBy(["phone" => $phone]);

        if(count($player) != 0 || count($coache) != 0 || count($admin) != 0){
            echo 0;
            exit;
        }
    }



}
