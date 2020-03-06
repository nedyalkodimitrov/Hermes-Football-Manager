<?php

namespace App\Repository\Requests\Coach;

use App\Entity\Requests\Coach\CoachToTeamRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CoachToTeamRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoachToTeamRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoachToTeamRequest[]    findAll()
 * @method CoachToTeamRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoachToTeamRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoachToTeamRequest::class);
    }

    // /**
    //  * @return CoachToTeamRequest[] Returns an array of CoachToTeamRequest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CoachToTeamRequest
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
