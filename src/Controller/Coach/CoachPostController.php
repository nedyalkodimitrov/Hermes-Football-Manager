<?php

namespace App\Controller\Coach;

use App\Entity\Player;
use App\Entity\Training;
use App\Entity\User;
use App\Repository\PlayerRepository;
use App\Repository\ScheduleRepository;
use App\Repository\TrainingRepository;
use App\Repository\UserRepository;
use App\Service\CoachService;
use App\Service\PlayerService;
use http\Env\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
class CoachPostController extends CoachController
{

    /**
     * @Route("/coache/playerStats/{id}", name = "playerStatsMaker")
     *
     */
    public function PlayerStats($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $player = $this->getDoctrine()->getRepository(Player::class)->find(intval($id));
        $playerStats = $player->getStats();
        $playerStats->setDribble(intval($request->get("dribble")));
        $playerStats->setLongPass(intval($request->get("longPass")));
        $playerStats->setWork(intval($request->get("workHard")));
        $playerStats->setPass(intval($request->get("pass")));
        $playerStats->setPerspective(intval($request->get("perspective")));
        $playerStats->setRelax(intval($request->get("relax")));
        $playerStats->setShot(intval($request->get("shot")));
        $playerStats->setTacticks(intval($request->get("tacktick")));
        $playerStats->setTechnique(intval($request->get("technique")));
        $playerStats->setWillpower(intval($request->get("willPower")));
        $playerStats->setStatusFromCoaches(intval($request->get("all")));
        $playerStats->setPace(intval($request->get("pace")));
        $playerStats->setHeight(intval($request->get("height")));
        $playerStats->setWeight(intval($request->get("weight")));
        $playerStats->setFat(intval($request->get("fat")));

        $em = $this->getDoctrine()->getManager();
        $em->persist($playerStats);
        $em->flush();

        return $this->json(1);

    }



    /**
     * @Route("/coache/removePlayerFromTeam/{id}")
     *
     */
    public function removePlayerFromTeam($id, Request $request, CoachService $coachService){
        $coach = $this->getUser()->getCoach();
        $coachService->isHeadCoach($coach);

        $player = $this->getDoctrine()->getRepository(Player::class)->find(intval($id));
        $player->setTeam(null);

        echo "The player is removed successful";
        exit();
    }


    /**
     *
     * @Route("/coache/trainingsw", name = "trainingAction")
     */
    public function TrainingAction(Request $request, UserRepository $userRepository, PlayerRepository $playerRepository, PlayerService $playerService)
    {
        $coach = $this->getUser()->getCoach();
        $playerInfo = $request->get("playerName");
        $results = $userRepository->findPlayer($playerInfo);
        $players = [];


        for ($i = 0; $i < count($results); $i++){
            $playerInformation = [];
            $user = $this->getDoctrine()->getRepository(User::class)->find($results[0]["id"]);
            $player = $user->getPlayer();
            $playerTeam = $playerService->getPlayerTeam($player);
            if ($playerTeam->getId() != $coach->getTeam()->getId()) {
                $playerInformation[0] = $user;
                $playerInformation[1] = $player->getPosition()->getName();
                $playerInformation[2] = $user->getCity()->getName() . ", " . $user->getCity()->getCountry()->getName();
                $playerInformation[3] = $playerTeam;
                $playerInformation[4] = $player->getId();
                $players[$i] = $playerInformation;
            }
        }
        $response = new JsonResponse();

        $response->setData($players);


        return $response;

    }


    /**
     *
     * @Route("/coache/trainingByDate", name = "trainingByDate")
     */
    public function TrainingByDate(Request $request, ScheduleRepository $scheduleRepository, \App\Service\CustomSerializer $serializer)
    {
        $date = $request->get("date");

        $trainings = $scheduleRepository->findTrainingByDate($date);
        $training = new Training();

        $serializedContent =  $serializer->serialize($trainings);
        return JsonResponse::fromJsonString($serializedContent);


    }


}
