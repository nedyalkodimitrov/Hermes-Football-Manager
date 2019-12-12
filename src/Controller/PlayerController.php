<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class PlayerController extends AbstractController
{
    /**
     * @Route("/player", name="player")
     *
     */
    public function index()
    {
        $user = $this->getUser();
        var_dump($user);
        return $this->render('player/index.html.twig', [
            'controller_name' => 'PlayerController',
        ]);
    }
}
