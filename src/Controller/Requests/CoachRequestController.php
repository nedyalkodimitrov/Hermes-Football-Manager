<?php

namespace App\Controller\Requests;

use App\Entity\Player;
use App\Entity\Requests\UserToUserRequest;
use App\Repository\PlayerRepository;
use App\Repository\Requests\CoachToPlayerRequestRepository;
use App\Repository\Requests\UserToUserRequestRepository;
use App\Service\CoachService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CoachRequestController extends AbstractController
{
    /**
     * CoachRequestController constructor.
     */
    private $coachService;

    public function __construct(CoachService $coachService)
    {
        $this->coachService = $coachService;
    }

    /**
     * @Route("/coache/sendPlayerRequest/{id}", name = "sendPlayerRequest")
     */
    public function sendPlayerRequestAction($id,$message = "all is alrright", \Symfony\Component\HttpFoundation\Request $request, PlayerRepository $playerRepository)
    {

        $coach = $this->getUser()->getCoach();
       if (! $this->coachService->isHeadCoach($coach)){
           $this->redirectToRoute("coacheViewAction");
       }
        $player = $playerRepository->find(intval($id))->getUser();
        $em = $this->getDoctrine()->getManager();
        $allRequestFromCoach = $coach->getUser()->getRequestToUser();

        foreach($allRequestFromCoach as $requestFromCoach){
            if ($requestFromCoach->getReceiver()->getId() ==  $player->getId()){
                echo "this player has a request ";
                exit;
            }
        }

        if($player != null)
        {
            $toPlayerRequest = new UserToUserRequest();
            $toPlayerRequest->setSender($coach->getUser());
            $toPlayerRequest->setReceiver($player);
            $toPlayerRequest->setDate(date("d/m/Y"));
            $toPlayerRequest->setType(self::requestType);
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
     * @Route("/coache/removePlayerRequest/{id}")
     */
    public function removePlayerRequestAction($id, \Symfony\Component\HttpFoundation\Request $request, UserToUserRequestRepository $userToUserRequest)
    {
        $coach = $this->getUser()->getCoach();
        if ($this->coachService->isHeadCoach($coach)) {
            $em = $this->getDoctrine()->getManager();
            $playerRequest = $userToUserRequest->find($id);
            if($playerRequest != null)
            {
                $em->remove($playerRequest);
                $em->flush();

                echo "The request is removed successful";
                exit;
            }

            echo "Sorry, but you haven't send a request to that player";
            exit;
        }else {
            echo "sorry but you are not a head coach";
            exit;
        }
    }

    /**
     * @Route("/coache/acceptPlayerRequest/{playerId}")
     */
    public function acceptPlayerRequest($playerId){
        $coach = $this->getUser()->getCoach();
        $team = $this->coachService->getCoachTeam($coach);
        $this->coachService->isHeadCoach($coach);

        $player = $this->getDoctrine()->getRepository(Player::class)->find(intval($playerId));
        $player->setTeam($coach->getTeam());
        echo "The player is accepted successful";
        exit();
    }


    /**
     * @Route("/coache/requests")

     */
    public function requestsView(){
        $coach = $this->getUser()->getCoach();
        if (!$this->coachService->isHeadCoach($coach)){
            return $this->redirectToRoute("coacheViewAction");
        }
        $user = $coach->getUser();
        $requestsToPlayers = $user->getRequestToUser();
        $requestsFromPlayers = $this->coachService->getRequestFromPlayers($coach);
        return $this->render('coaches/requests.html.twig',
            array(
                "requestsToPlayers" => $requestsToPlayers,
                "requestsFromPlayers" => $requestsFromPlayers,
                "profile_img" => $coach->getImage()
                )
        );

    }




}
