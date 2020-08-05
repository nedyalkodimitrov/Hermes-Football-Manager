<?php

namespace App\Controller\Coach;

use App\Entity\Matches;
use App\Entity\MatchList;
use App\Repository\MatchesRepository;
use App\Repository\PlayerRepository;
use App\Service\CoachService;
use App\Service\MatchService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CoachMatchController extends AbstractController
{
    /**
     * @Route("/coache/matches", name="coachMatches")
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
    public function matchView($id, \Symfony\Component\HttpFoundation\Request $request, MatchService $matchService, CoachService $coachService)
    {
        $match = $this->getDoctrine()->getRepository(Matches::class)->find($id);
        $coach = $this->getUser()->getCoach();
        $team = $coachService->getCoachTeam($coach);
        $players = $team->getPlayers();

        if ($matchService->checkIfTheTeamIsReadyWithMatchList($id, $team->getId())) {
            $startingPlayers = $matchService->getStartingPlayers($id, $team->getId());

            return $this->render('coaches/matches/matchPlayersView.html.twig',
                array(
                    'matchListRecords' => $match->getMatchList(),
                    'profile_img' => $coach->getImage(),
                    'startingPlayers' => $startingPlayers
                )
            );
        }else {
            return $this->render('coaches/matches/match.html.twig',
                array(
                    'players' => $players,
                    'profile_img' => $coach->getImage(),
                    'team' => $team
                )
            );
        }

    }

    /**
     * @Route("/coache/match/{id}", name="createMatchList",  methods={"POST"})
     */
    public function matchListAction($id, \Symfony\Component\HttpFoundation\Request $request, PlayerRepository $playerRepository)
    {
        $players = $request->request->get('players');
        $em = $this->getDoctrine()->getManager();
        $match = $this->getDoctrine()->getRepository(Matches::class)->find($id);
        for ($i = 0; $i < count($players); $i++){
            $matchList  = new MatchList();
            var_dump(intval($players[$i]));
            $matchList->setPlayer($playerRepository->find(intval($players[$i])));
            $matchList->setMatch($match);
            $em->persist($matchList);

            $em->flush();

        }

        return $this->redirectToRoute("matchList",["id" => $id]);
    }


    /**
     * @Route("/coache/match/{id}/setStartingPlayers",  methods={"POST"})
     */
    public function setStartingPlayers($id, \Symfony\Component\HttpFoundation\Request $request, PlayerRepository $playerRepository)
    {
        $em = $this->getDoctrine()->getManager();

        $startingPlayers = $request->request->get('players');
        // $startingPlayers =[1,5,7,8];
        $matchLists  = $this->getDoctrine()->getRepository(Matches::class)->find($id)->getMatchList();
        for ($i=0; $i < count($matchLists); $i++) {
            if(in_array($matchLists[$i]->getPlayer()->getId(), $startingPlayers)){
                $matchLists[$i]->setIsStarting(true);
            }else {
                $matchLists[$i]->setIsStarting(false);
            }
            $em->persist($matchLists[$i]);
            $em->flush();
        }

        return $this->redirectToRoute("matchList",["id" => $id]);

    }


    /**
     * @Route("/coache/pastMatch/{id}", name="pastMatchView",  methods={"GET"})
     */
    public function pastMatchView($id, \Symfony\Component\HttpFoundation\Request $request, PlayerRepository $playerRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $match = $this->getDoctrine()->getRepository(Matches::class)->find($id);
        $coach = $this->getUser()->getCoach();

        return $this->render('coaches/matches/pastMatches.html.twig',
            array(
                'profile_img' => $coach->getImage(),
                'match' => $match,
                'coach' => $coach
            )
        );

    }

}
