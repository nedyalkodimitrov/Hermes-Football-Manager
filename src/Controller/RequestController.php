<?php

namespace App\Controller;

use App\Entity\Player;
use App\Entity\Requests\CoachToPlayerRequest;
use App\Entity\Requests\Division\DivisionRequest;
use App\Entity\Requests\UserToUserRequest;
use App\Entity\Team;
use App\Entity\YouthTeam;
use App\Repository\CoachRepository;
use App\Repository\DivisionRepository;
use App\Repository\PlayerRepository;
use App\Repository\Requests\CoachToPlayerRequestRepository;
use App\Repository\Requests\Division\DivisionRequestRepository;
use App\Repository\Requests\UserToUserRequestRepository;
use App\Repository\TeamRepository;
use App\Repository\YouthTeamRepository;
use App\Service\CoachService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RequestController extends AbstractController
{
    //admin requests
    /**
     * @Route("/admin/divisionRequest/{divisionId}")
     */
    public function DivisionRequests($divisionId, DivisionRepository $divisionRepository, DivisionRequestRepository $divisionRequestRepository){
        $team = $this->getUser()->getAdmin()->getTeam();
        $division = $divisionRepository->find($divisionId);
        $type =  "team-division";
        $sameRequest = $divisionRequestRepository->findBy(
            [
                "team" => $team,
                "division" => $division,
                "type"=> $type,
            ]
        );

        if ($sameRequest != null ){
                echo 2;
                exit;
        }
        $divisionRequest = new DivisionRequest();
        $divisionRequest->setTeam($team);
        $divisionRequest->setDivision($division);
        $divisionRequest->setType($type);
        $em = $this->getDoctrine()->getManager();
        $em->persist($divisionRequest);
        $em->flush();
        echo 1 ;
        exit;
    }

    /**
     * @Route("/admin/acceptDivisionRequest/{divisionRequestId}")
     */
    public function AcceptDivisionRequests($divisionRequestId, DivisionRepository $divisionRepository, DivisionRequestRepository $divisionRequestRepository)
    {
        $team = $this->getUser()->getAdmin()->getTeam();
        $type = "division-team";
        $em = $this->getDoctrine()->getManager();

        $divisionRequest = $divisionRequestRepository->findBy(
            [
                'id' => $divisionRequestId,
                'type' => $type,
            ],
            null
            ,
            1


        );

        if ($divisionRequest != null  ){
            if ($team->getDivision() == null){
                $team->setDivision($divisionRequest[0]->getDivision());
                $em->persist($team);
                $em->flush();
                echo" nice";
            }else{
                echo "you have to remove youre curent division to accept this ";

            }
        }else{
            echo "0";
        }

        exit;
    }




    /**
     * @Route("/admin/youthDivisionRequest/{divisionId}", name = "addWaterGlassAction")
     */
    public function YouthDivisionRequests($divisionId, DivisionRepository $divisionRepository){
        $division = $divisionRepository->find($divisionId);
        $divisionRequest = new DivisionRequest();
        $divisionRequest->setTeam($this->getUser()->getAdmin()->getTeam());
        $divisionRequest->setDivision($division);
        $divisionRequest->setType("team-division");

    }


    //superAdmin
    /**
     * @Route("/superAdmin/sendDivisionRequest/{divisionId}/{teamId}", name = "addWaterGlassAction")
     */
    public function SendDivisionRequest($divisionId, $teamId,TeamRepository $teamRepository,DivisionRequestRepository $divisionRequestRepository,  DivisionRepository $divisionRepository)
    {
        $team = $teamRepository->find($teamId);
        $division = $divisionRepository->find($divisionId);
        $type =  "division-team";
        $sameRequest = $divisionRequestRepository->findBy(
            [
                "team" => $team,
                "division" => $division,
                "type"=> $type,
            ]
        );

        if ($sameRequest != null ){
            echo 2;
            exit;
        }
        $divisionRequest = new DivisionRequest();
        $divisionRequest->setTeam($team);
        $divisionRequest->setDivision($division);
        $divisionRequest->setType($type);
        $em = $this->getDoctrine()->getManager();
        $em->persist($divisionRequest);
        $em->flush();
        echo 1 ;
        exit;
    }

    /**
     * @Route("/superAdmin/acceptDivisionRequest/{divisionRequestId}", name = "addWaterGlassAction")
     */
    public function AcceptDivisionRequest($divisionRequestId, DivisionRequestRepository $divisionRequestRepository)
    {
        $type = "team-division";
        $em = $this->getDoctrine()->getManager();

        $divisionRequest = $divisionRequestRepository->findBy(
            [
                'id' => $divisionRequestId,
                'type' => $type,
            ],
            null
            ,
            1


        );
        $team = $divisionRequest[0]->getTeam();

        if ($divisionRequest != null  ){
            if ($team->getDivision() == null){
                $team->setDivision($divisionRequest[0]->getDivision());
                $em->persist($team);
                $em->flush();
                echo" nice";
            }else{
                echo "you have to remove youre curent division to accept this ";

            }
        }else{
            echo "0";
        }

        exit;
    }
    //division requests


    //player requests
    /**
     * @Route("/player/acceptTeamRequest/{teamRequestId}", name = "acceptTeamRequest")
     */
    public function AcceptTeamRequest($teamRequestId, UserToUserRequestRepository $userRequestRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $player = $this->getUser()->getPlayer();
        if($player->getTeam() != null){
            return $this->json(2);
        }


        $request = $userRequestRepository->find($teamRequestId);
        if($request->getType() == "coach-player"){
            $team = $request->getSender()->getCoach()->getTeam();
        }else {
            $team = $request->getSender()->getAdmin()->getTeam();
        }

        $player->setTeam($team);
        $em->persist($player);
        $em->flush();
        $em->remove($request);
        $em->flush();
        return $this->json(1);

    }
    /**
     * @Route("/player/removeTeamRequest", name = "removeTeamRequest", methods={"POST"})
     */
    public function RemoveTeamRequest(Request $request, UserToUserRequestRepository $userRequestRepository)
    {
        $teamRequestId = $request->request->get("teamRequestId");
        $em = $this->getDoctrine()->getManager();
        $request = $userRequestRepository->find($teamRequestId);

        $em->remove($request);
        $em->flush();
        return $this->json(1);
    }


}
