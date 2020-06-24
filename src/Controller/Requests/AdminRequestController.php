<?php

namespace App\Controller\Requests;

use App\Entity\Coach;
use App\Entity\Player;
use App\Entity\Requests\UserToUserRequest;
use App\Repository\CoachRepository;
use App\Repository\PlayerRepository;
use App\Repository\Requests\UserToUserRequestRepository;
use App\Repository\TeamRepository;
use App\Repository\YouthTeamRepository;
use App\Service\CoachService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminRequestController extends AbstractController
{
    /**
     * @Route("/admin/sendRequestToPlayer" , name = "sendRequestToPlayer")
     */
    public function SendRequestToPlayer(Request $request,CoachService $coachService, PlayerRepository $playerRepository,TeamRepository $teamRepository, YouthTeamRepository $youthTeamRepository, UserToUserRequestRepository $userToUserRequestRepository)
    {

        $em = $this->getDoctrine()->getManager();
        $playerId = $request->request->get('playerInfo');
        $teamName = $request->request->get('team');
        $team = $teamRepository->getTeamsByName($teamName);
        $youthTeam =  $youthTeamRepository->getTeamsByName($teamName);
        if ($team != null){
            $coach = $coachService->getHeadCoachOfTeam($team[0]);
        }else {
            $coach = $coachService->getHeadCoachOfYouthTeam($youthTeam[0]);
            $team = $youthTeam[0];
        }

        if ($coach == null){
            echo "You hav to had a coach";
            exit;
        }

        $player = $playerRepository->find(intval(1));

        if ($player == null){
            echo "Please give us a valid player";
            exit;
        }

        $allToPlayerRequest = $userToUserRequestRepository->findByExampleField($coach->getUser(),"coach-player");
        foreach($allToPlayerRequest as $toPlayerRequest){
            if ($toPlayerRequest->getReceiver()->getPlayer()->getId() ==  intval($playerId)){
                echo "this player has a request ";
                exit;
            }
        }

        $toPlayerRequest = new UserToUserRequest();
        $toPlayerRequest->setSender($coach->getUser());
        $toPlayerRequest->setReceiver($player->getUser());
        $toPlayerRequest->setDate(date("d/m/Y"));
        $toPlayerRequest->setType("coach-player");
        $em->persist($toPlayerRequest);
        $em->flush();
        echo "all is over";
        exit;
    }


    /**
     * @Route("/admin/sendRasequestToCoach" , name = "sendRequestToCoach")
     */
    public function SendRequestToCoach(Request $request,UserToUserRequestRepository $userToUserRequestRepository, CoachRepository $coachRepository,TeamRepository $teamRepository, YouthTeamRepository $youthTeamRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $coachId = $request->request->get('coachInfo');
        $teamName = $request->request->get('team');

        $coach = $coachRepository->find(intval($coachId));

        if ($coach == null){
            echo "Please give us a valid player";
            exit;
        }

        $allToCoachRequest = $userToUserRequestRepository->findByExampleField($this->getUser(),"admin-coach");
        foreach($allToCoachRequest as $toCoachRequest){
            if ($toCoachRequest->getReceiver()->getPlayer()->getId() ==  intval($coachId)){
                echo "this player has a request ";
                exit;
            }
        }

        $toCoachRequest = new UserToUserRequest();
        $toCoachRequest->setSender($this->getUser());
        $toCoachRequest->setReceiver($coach->getUser());
        $toCoachRequest->setDate(date("d/m/Y"));
        $toCoachRequest->setType("admin-coach");
        $em->persist($toCoachRequest);
        $em->flush();
        echo "all is over";
        exit;
    }

    /**
     * @Route("/admin/acceptPlayerRequest", name="adminAceptPlayerRequest", methods={"POST"})
     */
    public function acceptPlayerRequest(Request $request){
        $playerId = $request->request->get("playerId");
        $admin = $this->getUser()->getAdmin();
        $team = $admin->getTeam();

        $player = $this->getDoctrine()->getRepository(Player::class)->find(intval($playerId));
        $player->setTeam($team);
        echo "The player is accepted successful";
        exit();
    }
    /**
     * @Route("/admin/acceptCoachrRequest", name="adminAceptCoachRequest", methods={"POST"})
     */
    public function acceptCoachRequest(Request $request){
        $coachId = $request->request->get("coachId");
        $admin = $this->getUser()->getAdmin();
        $team = $admin->getTeam();

        $player = $this->getDoctrine()->getRepository(Coach::class)->find(intval($coachId));
        $player->setTeam($team);
        echo "The player is accepted successful";
        exit();
    }

    /**
     * @Route("/admin/removeRequest", name="adminRemoveRequest", methods={"POST"})
     */
    public function removeCoachRequest(Request $request, UserToUserRequestRepository $userToUserRequestRepository){
        $requestId = $request->request->get("requestId");
        $em = $this->getDoctrine()->getManager();
        $matchRecord = $userToUserRequestRepository->find($requestId);

        $em->remove($matchRecord);
        $em->flush();
        return $this->json(1);

    }

    }
