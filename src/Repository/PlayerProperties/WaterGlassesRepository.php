<?php

namespace App\Repository\PlayerProperties;

use App\Entity\PlayerProperties\WaterGlasses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method WaterGlasses|null find($id, $lockMode = null, $lockVersion = null)
 * @method WaterGlasses|null findOneBy(array $criteria, array $orderBy = null)
 * @method WaterGlasses[]    findAll()
 * @method WaterGlasses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WaterGlassesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WaterGlasses::class);
    }

    // /**
    //  * @return WaterGlasses[] Returns an array of WaterGlasses objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WaterGlasses
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
