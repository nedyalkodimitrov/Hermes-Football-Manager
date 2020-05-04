<?php

namespace App\Repository;

use App\Entity\MatchList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MatchList|null find($id, $lockMode = null, $lockVersion = null)
 * @method MatchList|null findOneBy(array $criteria, array $orderBy = null)
 * @method MatchList[]    findAll()
 * @method MatchList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MatchList::class);
    }

    public function findPlayerById($playerId, $matchId)
    {
        $teams = $this->getEntityManager()
            ->createQuery(
                'SELECT m
                FROM  App\Entity\MatchList m 
                WHERE m.player = :playerId AND m.match = :matchId
               '
            )
            ->setParameter('playerId', $playerId)
            ->setParameter('matchId', $matchId)
            ->getResult();
        return $teams;
    }

    // /**
    //  * @return MatchList[] Returns an array of MatchList objects
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
    public function findOneBySomeField($value): ?MatchList
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
