<?php

namespace App\Repository\Requests\Coach;

use App\Entity\Requests\Coach\TeamToCoachRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TeamToCoachRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeamToCoachRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeamToCoachRequest[]    findAll()
 * @method TeamToCoachRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamToCoachRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamToCoachRequest::class);
    }

    // /**
    //  * @return TeamToCoachRequest[] Returns an array of TeamToCoachRequest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TeamToCoachRequest
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
