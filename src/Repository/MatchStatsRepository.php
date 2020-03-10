<?php

namespace App\Repository;

use App\Entity\MatchStats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MatchStats|null find($id, $lockMode = null, $lockVersion = null)
 * @method MatchStats|null findOneBy(array $criteria, array $orderBy = null)
 * @method MatchStats[]    findAll()
 * @method MatchStats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchStatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MatchStats::class);
    }

    // /**
    //  * @return MatchStats[] Returns an array of MatchStats objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MatchStats
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
