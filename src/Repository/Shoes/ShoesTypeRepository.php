<?php

namespace App\Repository\Shoes;

use App\Entity\Shoes\ShoesType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ShoesType|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShoesType|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShoesType[]    findAll()
 * @method ShoesType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShoesTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShoesType::class);
    }

    // /**
    //  * @return ShoesType[] Returns an array of ShoesType objects
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
    public function findOneBySomeField($value): ?ShoesType
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
