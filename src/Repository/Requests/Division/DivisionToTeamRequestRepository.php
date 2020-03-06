<?php

namespace App\Repository\Requests\Division;

use App\Entity\Requests\Division\DivisionToTeamRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DivisionToTeamRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method DivisionToTeamRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method DivisionToTeamRequest[]    findAll()
 * @method DivisionToTeamRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DivisionToTeamRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DivisionToTeamRequest::class);
    }

    // /**
    //  * @return DivisionToTeamRequest[] Returns an array of DivisionToTeamRequest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DivisionToTeamRequest
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
