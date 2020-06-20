<?php

namespace App\Repository\Requests\Division;

use App\Entity\Requests\Division\DivisionRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DivisionRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method DivisionRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method DivisionRequest[]    findAll()
 * @method DivisionRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DivisionRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DivisionRequest::class);
    }

    // /**
    //  * @return DivisionRequest[] Returns an array of DivisionRequest objects
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
    public function findOneBySomeField($value): ?DivisionRequest
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
