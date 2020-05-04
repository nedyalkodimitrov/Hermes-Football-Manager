<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Entity\Matches;
use App\Entity\MatchList;
use App\Repository\CoachRepository;
use App\Repository\MatchesRepository;
use App\Repository\PlayerRepository;
use Symfony\Bridge\Twig\TokenParser\DumpTokenParser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MatchController extends AbstractController
{
    /**
     * @Route("/coache/matches", name="wsasd")
     */
    public function matchesView(MatchesRepository $matchesRepository)
    {
        $coach = $this->getUser()->getCoach();
        $teamId = $this->getUser()->getCoach()->getTeam()->getId();
        $upcomingMatches = $matchesRepository->findUpcomingMatchesByTeam($teamId);
        $pastMatches = $matchesRepository->findPastMatchesByTeam($teamId);

        return $this->render('coaches/matches/matches.html.twig',
            array(
                'matchStats' => $pastMatches[0]->getMatchStats(),
                'upcomingMatches' => $upcomingMatches,
                'pastMatches' => $pastMatches,
                'profile_img' => $coach->getImage()
            )
        );
    }


    /**
     * @Route("/coache/match/{id}", name="matchList", methods={"GET"})
     */
    public function matchView($id, \Symfony\Component\HttpFoundation\Request $request, CoachRepository $coachRepository)
    {
        $match = $this->getDoctrine()->getRepository(Matches::class)->find($id);
        $coach = $this->getUser()->getCoach();
        $team = $coachRepository->getCoachTeam($coach);
        $players = $team->getPlayers();
        return $this->render('coaches/matches/match.html.twig',
            array(
                'players' => $players,
                'profile_img' => $coach->getImage()
            )
        );
    }

    /**
     * @Route("/coache/match/{id}", name="createMatchList", methods={"POST"})
     */
    public function matchListAction($id, \Symfony\Component\HttpFoundation\Request $request, PlayerRepository $playerRepository)
    {
        $players = $request->request->get('players');
        $em = $this->getDoctrine()->getManager();
        $match = $this->getDoctrine()->getRepository(Matches::class)->find($id);
        for ($i = 0; $i < count($players); $i++){
            var_dump(intval($players[$i]));
//            $matchList->setPlayer($playerRepository->find(intval($players[$i])));
//            $matchList->setMatch($match);
//            $em->flush();

        }
        $matchList = new MatchList();

        $em->persist($matchList);
        $em->flush();

        echo "assdas";
        exit;
    }




}
