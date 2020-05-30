<?php

namespace App\Controller;

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
        $teams = $this->getDoctrine()->getRepository(Admin::class)->findAll();
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
    public function Teams($id, TeamRepository $teamRepository)
    {
        $teams = $this->getDoctrine()->getRepository(Team::class)->findBy(["division" => strval($id)], ['name' => 'ASC']);
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $division = $this->getDoctrine()->getRepository(Division::class)->find(strval($id));
        $teamStanding = $teamRepository->getTeamByDivisionDesc($id);
        $matches = $this->getDoctrine()->getRepository(Matches::class)->findBy(['division'=>intval($id)]);
        $match = new Matches();
        $matchForm = $this->createForm(MatchesType::class, $match)->createView();
        return $this->render('superAdmin/teams.html.twig', array(
            'division' => $division,
            'hasTeam' => true,
            'teams' => $teams,
            'matches' => $matches,
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
     * @Route("/superAdmin/deleteTeam/{id}" ,name  = "superAdminDeleteTeam")
     *
     */
    public function DeleteTeam($id, Request $request, AuthenticationUtils $authUtils)
    {
        $team = $this->getDoctrine()->getRepository(Teams::class)->find(intval($id));
        $players = $this->getDoctrine()->getRepository(Players::class)->findBy(["team" =>intval($id)]);
        $coaches= $this->getDoctrine()->getRepository(Coaches::class)->findBy(["team" =>intval($id)]);
        $admin = $this->getDoctrine()->getRepository(Admins::class)->findBy(["team" =>intval($id)]);
        $em = $this->getDoctrine()->getManager();
        foreach ($coaches as $coache){
            $em->remove($coache->getUserId());
            $em->flush();
            $em->remove($coache);
            $em->flush();

        }
        foreach ($players as $player){
            $em->remove($player->getUserId());
            $em->remove($player);
            $em->flush();
        }


        foreach ($admin as $ad){
            $userAcc = $ad->getUserId();
            $em->remove($ad);
            $em->flush();

            $em->remove($userAcc);
            $em->flush();
        }


        $em->remove($team);
        $em->flush();

        echo 1;
        exit;

    }
    /**
     * @Route("/superAdmin/deleteDivision" ,name  = "superAdminDeleteDivision")
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
        $stats = new MatchStats();
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
