<?php

namespace App\Repository;

use App\Entity\YouthDivision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method YouthDivision|null find($id, $lockMode = null, $lockVersion = null)
 * @method YouthDivision|null findOneBy(array $criteria, array $orderBy = null)
 * @method YouthDivision[]    findAll()
 * @method YouthDivision[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class YouthDivisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, YouthDivision::class);
    }

    // /**
    //  * @return YouthDivision[] Returns an array of YouthDivision objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('y.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?YouthDivision
    {
        return $this->createQueryBuilder('y')
            ->andWhere('y.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
