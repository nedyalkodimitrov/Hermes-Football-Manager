<?php

namespace App\Controller;

use App\Repository\CityRepository;
use App\Repository\CountryRepository;
use App\Service\CustomSerializer;
use App\Service\SecurityHelperService;
use http\Env\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->isGranted('ROLE_PLAYER')) {
            return $this->redirectToRoute('playerView');
        }elseif ($this->isGranted('ROLE_COACH')){
            return $this->redirectToRoute('coacheViewAction');
        }
        elseif ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('adminHomeAction');
        }
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        return $this->redirectToRoute("app_login");
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }

    /**
     * @Route("/signUp", name="app_signUp")
     */
    public function signUp(AuthenticationUtils $authenticationUtils, CountryRepository  $countryRepository): Response
    {
        if ($this->isGranted('ROLE_PLAYER')) {
            return $this->redirectToRoute('playerView');
        }elseif ($this->isGranted('ROLE_COACH')){
            return $this->redirectToRoute('coacheViewAction');
        }
        elseif ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('adminHomeAction');
        }
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $allCountries = $countryRepository->findAll();

        return $this->render('security/signUp.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'countries' => $allCountries,


            ]);
    }


    /**
     * @Route("/getCitiesByCountry")
     */
    public function getCitiesByCountry( CityRepository $cityRepository, SecurityHelperService $securityHelperService, CustomSerializer $serializer)
    {

//
        $cities = $securityHelperService->getCitiesByCountry("Bulgaria", $cityRepository);

        $citiesInfo = [];

        for($i = 0; $i < count($cities); $i++){
            $citiesInfo[$i][0] =  $cities[$i]->getId();
            $citiesInfo[$i][1] =  $cities[$i]->getName();

        }

        return $this->json($serializer->serialize($citiesInfo));


    }





}
