<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Player;
use App\Entity\Requests\CoachToPlayerRequest;
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
use http\Env\Response;
use phpDocumentor\Reflection\Types\Self_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;



class CoachController extends AbstractController
{
     const HeadCoach = 'HEAD_COACH';
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
            'teams' =>$teams

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
    public function TrainingAction(Request $request, UserRepository $userRepository, PlayerRepository $playerRepository)
    {
          $playerInfo = $request->get("playerName");
          $results = $userRepository->findPlayer('Нед');
          $players = [];

        for ($i = 0; $i < count($results); $i++){
              $playerInformation = [];
              $user = $this->getDoctrine()->getRepository(User::class)->find($results[0]["id"]);
              $player = $user->getPlayer();
              $playerTeam = $playerRepository->getPlayerTeam($player);
              $playerInformation[0] = $user;
              $playerInformation[1] = $player->getPosition()->getName();
              $playerInformation[2] = $user->getCity()->getName(). ", " . $user->getCity()->getCountry()->getName()  ;
              $playerInformation[3] = $playerTeam;
              $playerInformation[4] =   $player->getId();
              $players[$i] = $playerInformation;
          }
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $jsonObject = $serializer->serialize($players, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]   );

       return $jsonObject;
// For instance, return a Response with encoded Json
//        return new ($jsonObject, 200, ['Content-Type' => 'application/json']);
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
            ->add('save', SubmitType::class, ['label' => 'Create Task'])
            ->getForm();
        $form->handleRequest($request);

        $coachNewFileName = $fileService->MoveImage($form);
        if ($coachNewFileName != false) {
               $em = $this->getDoctrine()->getManager();

               $coach->setImage($coachNewFileName);
               $em->persist($coach);
               $em->flush();


                return $this->render('coaches/settings/settings.html.twig',
                    array(
                        "image" => $coach->getImage(),
                        'form' => $form->createView(),
                        "coach" => $coach,
                        "profile_img" => $coach->getImage()
                    ));
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

        return $this->render('coaches/playerStat.html.twig',
            array(
                'profile_img' => $coach->getImage(),
                'player' => $player,
                'playerStats' => $playerStats,
                'image' => $player->getImage(),
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
     * @Route("/coache/playerStats/{id}", name = "playerStats")
     *
     */
    public function PlayerStats($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $player = $this->getDoctrine()->getRepository(Players::class)->find(intval($id));
        $player->setDribble(intval($request->get("dribble")));
        $player->setLongPass(intval($request->get("longPass")));
        $player->setWork(intval($request->get("workHard")));
        $player->setPass(intval($request->get("pass")));
        $player->setPerspective(intval($request->get("perspective")));
        $player->setRelax(intval($request->get("relax")));
        $player->setShot(intval($request->get("shot")));
        $player->setTacticks(intval($request->get("tacktick")));
        $player->setTechnique(intval($request->get("technique")));
        $player->setWillpower(intval($request->get("willPower")));
        $player->setStatusFromCoaches(intval($request->get("all")));
        $player->setPace(intval($request->get("pace")));
        $player->setHeight(intval($request->get("height")));
        $player->setWeight(intval($request->get("weight")));
        $player->setFat(intval($request->get("fat")));

        $em = $this->getDoctrine()->getManager();
        $em->persist($player);
        $em->flush();

        return 1;

    }

    /**
     * @Route("/coache/sendPlayerRequest/{id}", name = "playerStats")
     */
    public function sendPlayerRequestAction($id,$message = "all is alrright", \Symfony\Component\HttpFoundation\Request $request, PlayerRepository $playerRepository)
    {
        
        $coach = $this->getUser()->getCoach();
        $this->isHeadCoach($coach);
        $player = $playerRepository->find(intval($id));
        $em = $this->getDoctrine()->getManager();
        $allPlayerRequest = $coach->getRequestsToPlayers();
        foreach($allPlayerRequest as $playerRequest){
            if ($playerRequest->getPlayer()->getId() ==  intval($id)){
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
     * @Route("/coache/removePlayerRequest/{id}")
     */
    public function removePlayerRequestAction($id, \Symfony\Component\HttpFoundation\Request $request, CoachToPlayerRequestRepository $coachToPlayerRequestRepository)
    {
        $coach = $this->getUser()->getCoach();
        $this->isHeadCoach($coach);


        $player = $this->getDoctrine()->getRepository(Player::class)->find(intval($id));
        $em = $this->getDoctrine()->getManager();
        $playerRequest = $coachToPlayerRequestRepository->findBy(["player" => $player]);
        if($playerRequest != null)
        {
            $em->remove($playerRequest[0]);
            $em->flush();

            echo "The request is removed successful";
            exit;
        }

        echo "Sorry, but you haven't send a request to that player";
        exit;
    }

    /**
     * @Route("/coache/removePlayerFromTeam/{id}")
     *
     */
    public function removePlayerFromTeam($id, Request $request){
        $coach = $this->getUser()->getCoach();
        $this->isHeadCoach($coach);

        $player = $this->getDoctrine()->getRepository(Player::class)->find(intval($id));
        $player->setTeam(null);

        echo "The player is removed successful";
        exit();
    }

    /**
     * @Route("/coache/acceptPlayerRequest/{playerId}")
     */
    public function acceptPlayerRequest($playerId){
        $coach = $this->getUser->getCoach();
        $team = $this->coachService->getCoachTeam($coach);
        $this->isHeadCoach($coach);

        $player = $this->getDoctrine()->getRepository(Player::class)->find(intval($playerId));
        $player->setTeam($coach->getTeam());
        echo "The player is accepted successful";
        exit();
    }
    
    private function isHeadCoach(Coach $coach ){
        if ($coach->getTeamPosition()->getName() != self::HeadCoach){
            echo "You are not a head coach and you can not use that functionality";
        }
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

    public function ChangeImage(FormInterface $form)
    {
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('image')->getData();

            $imageNewFileName = 'asadas-' . uniqid() . '.' . $file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $imageNewFileName
                );
                return $imageNewFileName;
            } catch (FileException $e) {
                return false;
            }
        }
    }


}
