<?php

namespace App\Controller\Player;

use App\Entity\Matches;
use App\Repository\MatchListRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlayerMatchController extends AbstractController
{

    /**
     * @Route("/player/pastMatch/{id}", name="playerPastMatchView",  methods={"GET"})
     */
    public function playerPastMatchView($id, \Symfony\Component\HttpFoundation\Request $request, MatchListRepository $matchListRepository)
    {
        $player = $this->getUser()->getPlayer();
        $em = $this->getDoctrine()->getManager();
        $match = $this->getDoctrine()->getRepository(Matches::class)->find($id);
        $coach = $this->getUser()->getCoach();

        $matchRecord = $matchListRepository->findBy(
            [
                "player"=> 1,
                "match" => 3,
            ]
        );


        return $this->render('player/pastMatches.html.twig',
            array(
                'profile_img' => $player->getImage(),
                'match' => $match,
                'matchRecord' => $matchRecord[0]
            )
        );

    }


}
