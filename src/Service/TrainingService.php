<?php


namespace App\Service;


use App\Entity\Training;
use App\Repository\ScheduleRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class TrainingService
{



    public function getTrainingByDate($coachId , $date, ScheduleRepository $scheduleRepository, \App\Service\CustomSerializer $serializer)
    {
        $trainings = $scheduleRepository->findTrainingByDate($coachId, $date);
        return $trainings;


    }

}