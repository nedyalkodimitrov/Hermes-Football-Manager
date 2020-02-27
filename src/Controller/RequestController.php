<?php

namespace App\Controller;

use App\Entity\Requests\CoachToPlayerRequest;
use App\Repository\PlayerRepository;
use App\Repository\TeamRepository;
use App\Repository\YouthTeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RequestController extends AbstractController
{

    /**
     * @Route("/admin/sendRequestToPlayer" , name = "sendRequestToPlayer")
     */
    public function SendRequestToPlayer(Request $request, PlayerRepository $playerRepository,TeamRepository $teamRepository, YouthTeamRepository $youthTeamRepository)
    {

        exit;
            $em = $this->getDoctrine()->getManager();
            $playerId = $request->request->get('playerInfo');
           $teamName = $request->request->get('team');
           $team = $teamRepository->getTeamsByName($teamName);
           $youthTeam =  $youthTeamRepository->getTeamsByName($teamName);
        if ($team != null){
            $coach = $this->getHeadCoachOfTeam($team[0]);
        }else {
            $coach = $this->getHeadCoachOfYouthTeam($youthTeam[0]);
            $team = $youthTeam[0];
        }
        if ($coach == null){
            return "Please first add head coach";
        }


        $player = $playerRepository->find(intval($playerId));
        $allPlayerRequest = $coach->getRequestsToPlayers();
        foreach($allPlayerRequest as $playerRequest){
            if ($playerRequest->getPlayer()->getId() ==  intval($playerId)){
                echo "this player has a request ";
                exit;
            }
        }

        if($player != null)
        {
            $toPlayerRequest = new CoachToPlayerRequest();
            $toPlayerRequest->setCoach($coach);
            $toPlayerRequest->setPlayer($player);
            $toPlayerRequest->setDate(date("d/m/Y"));
            $toPlayerRequest->setMessage($message);
            $em->persist($toPlayerRequest);
            $em->flush();
//            var_dump($toPlayerRequest);
            echo $message;
            exit;
        }

        echo "Please give us a valid player";
        exit;
    }


    /**
     * @Route("/admin/sendRequestToCoach" , name = "sendRequestToCoach")
     */
    public function SendRequestToCoach(Request $request, PlayerRepository $playerRepository,TeamRepository $teamRepository, YouthTeamRepository $youthTeamRepository)
    {
    }
    
}
