<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Player;
use App\Entity\Requests\UserToUserRequest;
use App\Entity\Schedule;
use App\Entity\User;
use App\Form\PlayerType;
use App\Form\ScheduleType;
use App\Form\UserType;
use App\Repository\CoachRepository;
use App\Repository\PlayerRepository;
use App\Repository\Requests\CoachToPlayerRequestRepository;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;
use App\Service\CoachService;
use App\Service\FileService;
use App\Service\PlayerService;
use Doctrine\DBAL\Schema\SchemaDiff;
use phpDocumentor\Reflection\Types\Self_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;



class CoachController extends AbstractController
{
    const HeadCoach = 'HEAD_COACH';
    const requestType = "coach-player";
    private $coachService;
    private $bCryptAlgorithmOption;
    public function __construct(CoachService $coachService)
    {
        $this->coachService = $coachService;
        $this->bCryptAlgorithmOption = [
            'cost' => 12,
        ];
    }



    /**
     * @Route("/coache", name = "coacheViewAction" )
     */
    public function CoacheViewAction(TeamRepository $teamRepository, PlayerRepository $playerRepository){
        $coach = $this->getUser()->getCoaches();

       $teamCoach = $this->coachService->getCoachTeam($coach);
        $topPlayers = $this->coachService->getTopPlayersFromCoachTeam($playerRepository, $coach);
        if ($teamCoach == null){
            $players = 0;
            $teams = null;
            $hasTeam = false;
        }else {
            $hasTeam = true;
            $teams = $teamRepository->getTeamByDivisionDesc($teamCoach->getDivision()->getId());
            $players = $teamCoach->getPlayers();
        }
        $teamPosition = 0;
        for ($i = 0; $i < count($teams); $i++){
            if ($teams[$i]->getId() == $teamCoach->getId()){
                $teamPosition = $i + 1;
            }
        }

        return $this->render('coaches/index.html.twig', array(
            'playersCount' => count($players),
            'cups' => 0,
            'players' => $players,
            'topPlayers' => $topPlayers,
            'name' => $this->getUser()->getName() ,
            'fName' => $this->getUser()->getFName(),
            'profile_img' => $this->getUser()->getCoaches()->getImage(),
            'division' => $teamCoach->getDivision()->getName(),
            'hasTeam' => $hasTeam,
            'myTeam' => $teamCoach,
            'teams' =>$teams,
            'teamPosition' =>$teamPosition,

        ));

    }

    /**
     * @Route("/coache/trainings", name = "trainingView", methods = {"GET"})
     */
    public function TrainingView(Request $request)
    {
        $user = new User();
        $player = new Player();
        $coach = $this->getUser()->getCoaches();
        $teamCoach = $this->coachService->getCoachTeam($coach);

        if ($teamCoach == null){
            $players = null;
        }else{
            $players = $teamCoach->getPlayers();
        }

        $form_user = $this->createForm(UserType::class, $user);
        $form_player = $this->createForm(PlayerType::class, $player)->add('position');

        $form_player->handleRequest($request);
        $form_user->handleRequest($request);

        if($form_player->isSubmitted() && $form_user->isSubmitted()){
            $playerPhone = $player->getPhone();
            $validPhoneNum = $this->getDoctrine()->getRepository(Players::class)->findBy(array('phone' => $playerPhone));
            if (count($validPhoneNum) > 0){
                return "This phone number is already in database";
            }else {
                $positionId =   json_decode($request->request->get('position'));
                $position = $this->getDoctrine()->getRepository(Positions::class)->find((int)$positionId);
                $player->setPosition($position);
                $player->setTeam($teamCoach);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $player->setUserId($user);
                $em->persist($player);
                $em->flush();
                return "All data is inserted";
            }
        }

        $user = $this->getUser()->getCoaches();
        return $this->render('coaches/trainings/training.html.twig',array(
            'profile_img' => $user->getImage(),
            'coachTeamName' => $teamCoach->getName(),
            'coachTeamImage' => $teamCoach->getImage(),
            'coachPosition' => $coach->getTeamPosition()->getName(),
            'players' => $players
        ));
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
       exit;
    }

    /**
     * @Route("/coache/trainingCalendar", name = "trainingCalendarActionView")
     */
    public function TrainingCalendarViewAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $coach = $this->getUser()->getCoaches();

        $schedule = new Schedule();
        $form = $this->createForm(ScheduleType::class, $schedule);
        $form->handleRequest($request);

        $schedules  = [];
        $schedules2 = $this->getDoctrine()->getRepository(Schedule::class)->findBy(['coaches' => $coach->getId()]);

        $Current = strval(Date('d/m/Y'));
        $currentMonth = explode('/', $Current);

        for ( $i = 0; $i < count($schedules2); $i++ ){
            $dates = explode('/', strval($schedules2[$i]->getDate()));
            if ($currentMonth[1] == $dates[1]){
                array_push($schedules, $schedules2[$i]);
            }else{
                $em->remove($schedules2[$i]);
                $em->flush();
            }
        }

        if ($form->isSubmitted()) {
            $schedule->setCoaches($coach);
            $em = $this->getDoctrine()->getManager();
            $em->persist($schedule);
            $em->flush();
            exit;
        }

        return $this->render('coaches/trainings/trainingCalendar.html.twig',
            array("form" => $form->createView(),
                'profile_img' => $coach->getImage(),
                'schedules' => $schedules));
    }

    /**
     * @Route("/coache/settings", name = "coache_settings")
     *
     */
    public function SettingsView(\Symfony\Component\HttpFoundation\Request $request, FileService $fileService){
        $coach = $this->getUser()->getCoaches();
        $newCoach = new Coach();
        $form = $this->createFormBuilder($newCoach)
            ->add('image', FileType::class, array('data_class' => null, ))
            ->add('save', SubmitType::class, ['label' => 'Задай новата снимка'])
            ->getForm();
        $form->handleRequest($request);

        $coachNewFileName = $fileService->MoveImage($form);
        if ($coachNewFileName != null) {
               $em = $this->getDoctrine()->getManager();
               $coach->setImage($coachNewFileName);
               $em->persist($coach);
               $em->flush();

        }

        return $this->render('coaches/settings/settings.html.twig',
            array(
                'form' => $form->createView(),
                "image" =>  $coach->getImage(),
                "coach" => $coach,
                "profile_img" => $coach->getImage()

                ));
    }

    /**
     * @Route("/coache/player/{id}", name = "playerStatsView")
     *
     */
    public function PlayerAction($id, \Symfony\Component\HttpFoundation\Request $request, PlayerService $playerService, CoachService $coachService)
    {
        $coach = $this->getUser()->getCoaches();
        $player = $this->getDoctrine()->getRepository(Player::class)->find($id);
        $playerStats = $player->getStats();
        $newPlayers = new Player();

        $form = $this->createFormBuilder($newPlayers)->add('pace');

        $playerTeam = $playerService->getPlayerTeam($player);
        $coachTeam = $coachService->getCoachTeam($coach);

        if ($playerTeam->getId() != $coachTeam->getId() &&
                (
                    ($player->getYouthTeam() == null && $coach->getYouthTeam() != null) ||
                    ($player->getYouthTeam() != null && $coach->getYouthTeam() == null)
                )
            ){
            return $this->redirectToRoute("trainingView");
        }

        $playedMatches = $playerService->getPlayedMatches($player);
        $titularMatchers = $playerService->getTitularPlayedMatches($player);
        $playerGoals = $playerService->getGoals($player);
        $playedMinutes = $playerService->getTotalPlayedMinutes($player);
        return $this->render('coaches/playerStat.html.twig',
            array(
                'profile_img' => $coach->getImage(),
                'player' => $player,
                'playerStats' => $playerStats,
                'image' => $player->getImage(),
                'playedMatches' => $playedMatches,
                'titularMatches' => $titularMatchers,
                'goals' => $playerGoals,
                'playedMinutes' => $playedMinutes
            )
        );
    }

    /**
     * @Route("/coache/searchEngine", name = "searchEngine")
     */
    public function SearchEngine(\Symfony\Component\HttpFoundation\Request $request)
    {
        return $this->render("coaches\searchEngine.html.twig", array('profile_img' => null));
    }


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





    private function binarySearch($l, $r, $x)
    {
        $arr[] = range(0, 1000000);
        while ($l <= $r)
        {
            $m = $l + ($r - $l) / 2;

            // Check if x is present at mid
            if (password_verify($x, $arr[$m] ))
                return floor($m);

            // If x greater, ignore
            // left half
            if ($arr[$m] < $x)
                $l = $m + 1;

            // If x is smaller,
            // ignore right half
            else
                $r = $m - 1;
        }

        // if we reach here, then
        // element was not present
        return -1;
    }

}
