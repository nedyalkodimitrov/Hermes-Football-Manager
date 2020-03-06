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
use App\Repository\UserRepository;
use Doctrine\DBAL\Schema\SchemaDiff;
use phpDocumentor\Reflection\Types\Self_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CoachController extends AbstractController
{
     const HeadCoach = 'HEAD_COACH';
    private $coachRepository;
    private $bCryptAlgorithmOption;
    public function __construct(CoachRepository $coachRepository)
    {
        $this->coachRepository = $coachRepository;
        $this->bCryptAlgorithmOption = [
            'cost' => 12,
        ];
    }

    /**
     * @Route("/coache", name = "coacheViewAction" )
     */
    public function CoacheViewAction(PlayerRepository $playerRepository){
        $coach = $this->getUser()->getCoaches();

       $teamCoach = $this->coachRepository->getCoachTeam($coach);
        $topPlayers = $this->coachRepository->getTopPlayersFromCoachTeam($playerRepository, $coach);
        if ($teamCoach == null){
            $players = 0;
            $teams = null;
        }else {
            $teams = $teamCoach->getDivision()->getTeams();
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
            'hasTeam' => true,
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
        $teamCoach = $this->coachRepository->getCoachTeam($coach);

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
         $playerInfo = $request->get("playerInfo");
          $results = $userRepository->findPlayer($playerInfo);
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
        return new JsonResponse($players);
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
    public function SettingsView(\Symfony\Component\HttpFoundation\Request $request){
        $user = $this->getUser()->getCoaches();
        $coaches = new Coach();
        $form = $this->createFormBuilder($coaches)
            ->add('image', FileType::class, array('data_class' => null, ))
            ->add('save', SubmitType::class, ['label' => 'Create Task'])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $coaches->getImage();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e) {

            }
            $em = $this->getDoctrine()->getManager();

            $user->setImage($fileName);
            $em->persist($user);
            $em->flush();

            // ... persist the $product variable or any other work
            return $this->render('coaches/settings/settings.html.twig',
                array("image" => $user->getImage(),'form' => $form->createView()));
        }

        return $this->render('coaches/settings/settings.html.twig',
            array('form' => $form->createView(), "image" => 0 ));
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }


    /**
     * @Route("/coache/player/{id}", name = "playerAction")
     *
     */
    public function PlayerAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
        $coach = $this->getUser()->getCoaches();
        $player = $this->getDoctrine()->getRepository(Player::class)->find($id);
        $playerStats = $player->getStats();
        $coachYouthTeam = false;
        $playerYouthTeam = false;
        $players = new Player();

        $form = $this->createFormBuilder($players)->add('pace');

        if($player->getTeam() != null){
            $team = $player->getTeam();

        }else {
            $team = $player->getYouthTeams();
            $playerYouthTeam = true;
        }

        if($coach->getTeam() != null){
            $coachTeam = $coach->getTeam();

        }else {
            $coachTeam = $coach->getYouthTeams();
            $coachYouthTeam = true;
        }

        if ($team->getId() != $coachTeam->getId() || $coachYouthTeam != $playerYouthTeam){
            return $this->redirectToRoute("trainingView");
        }

        return $this->render('coaches/playerStat.html.twig',
            array(
                'profile_img' => $coach->getImage(),
                'player' => $player,
                'playerStats' => $playerStats,
                'image' => $this->getUser()->getCoaches()->getImage(),
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
        $coach = $this->getUser->getCoach();
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
        $team = $this->coachRepository->getCoachTeam($coach);
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


}
