<?php

namespace App\Controller;

use App\Entity\Schedule;
use App\Repository\ScheduleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ScheduleController extends AbstractController
{

    private $scheduleRepository;

    /**
     * ScheduleController constructor.
     * @param $scheduleRepository
     */
    public function __construct(ScheduleRepository $scheduleRepository)
    {
        $this->scheduleRepository = $scheduleRepository;
    }




    /**
     * @Route("/coache/setTraining", name = "setTraining", methods={"POST"})
     */
    public function TrainingSetAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $schedule = new Schedule();
        $coach = $this->getUser()->getCoaches();
        $em = $this->getDoctrine()->getManager();

        $date = $request->request->get("date");
        $startTime = $request->request->get("startTime");
        $endTime = $request->request->get("endTime");
        $description = $request->request->get("description");
        var_dump($date);



//       THIS DONT WORK. FIXED IT !!!
//        if (count($this->scheduleRepository->getTrainingByDateAndStartHour($coach, $date, $startTime)) != 0){
//            return "You already have a training at this time of the day";
//
//        }

        $schedule->setDate($date);
        $schedule->setStartTime($startTime);
        $schedule->setEndTime($endTime);
        $schedule->setCoaches($coach);
        $schedule->setDescription($description);

        $em->persist($schedule);
        $em->flush();

       echo "The date is set successfully";
       exit;
    }

    /**
     * @Route("/coache/deleteTraining", name = "deleteTraining", methods={"POST"})
     */
    public function TrainingDeleteAction(\Symfony\Component\HttpFoundation\Request $request, ScheduleRepository $scheduleRepository)
    {
        $coach = $this->getUser()->getCoache();
        $date = $request->request->get("date");
        $startTime = $request->request->get("startTime");
        $endTime = $request->request->get("endTime");
        $description = $request->request->get("description");

        $result = $scheduleRepository->deleteTraining($coach, $date, $startTime);
        var_dump($result);
        exit;

    }

}
