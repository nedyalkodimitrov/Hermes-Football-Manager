<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Entity\Country;
use App\Entity\Division;
use App\Entity\Team;
use App\Entity\User;
use App\Entity\YouthDivision;
use App\Repository\DivisionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

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
    public function Teams($id)
    {
        $teams = $this->getDoctrine()->getRepository(Team::class)->findBy(["division" => strval($id)]);
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $division = $this->getDoctrine()->getRepository(Division::class)->find(strval($id));
        return $this->render('superAdmin/teams.html.twig', array(
            'division' => $division,
            'teams' => $teams,
            'users' => count($users),
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
