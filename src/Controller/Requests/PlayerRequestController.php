<?php

namespace App\Controller\Requests;

use App\Entity\Team;
use App\Repository\Requests\CoachToPlayerRequestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class PlayerRequestController extends AbstractController
{
    /**
     * @Route("/player/acceptCoachRequest/{id}")
     */
    public function acceptCoachRequest($id, CoachToPlayerRequestRepository $coachToPlayerRequestRepository){
        $em = $this->getDoctrine()->getManager();
        $player = $this->getUser()->getPlayer();
        $request = $this->getDoctrine()->getManager()->getRepository(CoachToPlayerRequest::class)->find($id);

        if ($player->getTeam() == null && $player->getYouthTeams() == null){
//            var_dump($request);
            if ($request->getCoach()->getTeam() == null){
                $player->setYouthTeam($request[0]->getCoach()->getYouthTeam());
            }else{
                $player->setTeam($request->getCoach()->getTeam());
            }
            $em->persist($player);
            $em->remove($request);
            $em->flush();
            echo "You have been accept the coach request and now you are a part of this club ";
            exit;
        }
        echo "First you have to leave your club to have a chance to accept this request";
        exit;
    }


    /**
     * @Route("/player/sendRequestToClub/{id}/{message}")
     */
    public function sendRequestToTeam($id, $message)
    {

        $player = $this->getUser()->getPlayer();
        if (count($player->getRequestToTeam()) > 0 ){
            echo "You have one request to a team";
            exit;
        }

        $em = $this->getDoctrine()->getManager();
        $request = new PlayerToTeamRequest();
        if ($player->getTeam() == null){
            $team = $em->getRepository(Team::class)->find(intval($id));
            $request->setPlayer($player);
            $request->setTeam($team);
            $request->setDate(date('m-d-Y'));
            $request->setMessage($message);
            $em->persist($request);
            $em->flush();
        }
        echo "You leave successfully your team!";
        exit;
    }

    /**
     * @Route("/player/requests", name="requestsView")
     */
    public function requestsView(CoachToPlayerRequestRepository $coachToPlayerRequestRepository){
        $player = $this->getUser()->getPlayer();
        $returnedInformation =[];

        $encoders = [new JsonEncoder()]; // If no need for XmlEncoder
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        $requestFromTeams = $coachToPlayerRequestRepository->findBy(["player" => $player->getId()]);
        for ($i = 0; $i < count($requestFromTeams); $i++) {
            $returnedInformation[$i][0] = $requestFromTeams[$i]->getCoach()->getTeam();
            $returnedInformation[$i][1] = $requestFromTeams[$i]->getId();
        }

        $jsonObject = $serializer->serialize($requestFromTeams, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            },
            [AbstractNormalizer::IGNORED_ATTRIBUTES  => [['users']]]
        ]);


        return new Response($jsonObject, 200, ['Content-Type' => 'application/json']);

    }

}
