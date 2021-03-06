<?php

namespace App\Repository;

use App\Entity\Schedule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Schedule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Schedule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Schedule[]    findAll()
 * @method Schedule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScheduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Schedule::class);
    }

    public function deleteTraining($coach, $date, $startTime ){
        return $this->getEntityManager()->createQueryBuilder(
            "Delete  
            from App\Entity\Schedule
             Where coaches = :coachId
             And date = :date
             And startTime = :startTime")
            ->setParameter("coachId",  $coach->getId())
            ->setParameter("date",  $date)
            ->setParameter("startTime",  $startTime)
            ->getQuery()
            ->getResult();
    }

    public function getTrainingByDateAndStartHour($coach, $date, $startTime){
        return $this->getEntityManager()->createQueryBuilder("
            Select   
            from App\Entity\Schedule
            Where coaches = :coachId
            And date = :date
            And startTime = :startTime")
        ->setParameter("coachId",1)
        ->setParameter("date", $date)
        ->setParameter("startTime", $startTime)
        ->getQuery()->getResult();
    }

    public function findTrainingByDate($coachId, $date)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.date = :date')
            ->andWhere('t.coaches = :coachId')
            ->setParameter('date', $date)
            ->setParameter('coachId', $coachId)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return Schedule[] Returns an array of Schedule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Schedule
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
