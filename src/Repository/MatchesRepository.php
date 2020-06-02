<?php

namespace App\Repository;

use App\Entity\Matches;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Matches|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matches|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matches[]    findAll()
 * @method Matches[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Matches::class);
    }


    public function findUpcomingMatchesByTeam($teamId)
    {
        $matches = $this->getEntityManager()
            ->createQuery(
                'SELECT m FROM App\Entity\Matches m
                    WHERE  (m.homeTeam = :teamId
                    OR m.awayTeam = :teamId )
                    AND m.date > CURRENT_TIMESTAMP()
                    ORDER BY m.date ASC'
            )->setParameter('teamId', $teamId)->getResult();
        return $matches;
    }

    public function findPastMatchesByTeam($teamId)
    {
        $matches = $this->getEntityManager()
            ->createQuery(
                'SELECT m FROM App\Entity\Matches m
                    WHERE  (m.homeTeam = :teamId
                    OR m.awayTeam = :teamId )
                    AND m.date < CURRENT_TIMESTAMP()
                    ORDER BY m.date ASC'
            )->setParameter('teamId', $teamId)->getResult();
        return $matches;
    }

    public function findPastMatchesWithNoMatchStats()
    {
        $matches = $this->getEntityManager()
            ->createQuery(
                'SELECT m FROM App\Entity\Matches m
                    WHERE m.date < CURRENT_TIMESTAMP()
                    AND m.matchStats is null
                    ORDER BY m.date ASC'
            )->getResult();
        return $matches;
    }

    public function findUpcomingMatches()
    {
        $matches = $this->getEntityManager()
            ->createQuery(
                'SELECT m FROM App\Entity\Matches m
                    WHERE m.date > CURRENT_TIMESTAMP()
                    ORDER BY m.date ASC'
            )->getResult();
        return $matches;
    }

    // /**
    //  * @return Matches[] Returns an array of Matches objects
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
    public function findOneBySomeField($value): ?Matches
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
