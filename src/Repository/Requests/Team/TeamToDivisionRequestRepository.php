<?php

namespace App\Repository\Requests\Team;

use App\Entity\Requests\Team\TeamToDivisionRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TeamToDivisionRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeamToDivisionRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeamToDivisionRequest[]    findAll()
 * @method TeamToDivisionRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamToDivisionRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamToDivisionRequest::class);
    }

    // /**
    //  * @return TeamToDivisionRequest[] Returns an array of TeamToDivisionRequest objects
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
    public function findOneBySomeField($value): ?TeamToDivisionRequest
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
