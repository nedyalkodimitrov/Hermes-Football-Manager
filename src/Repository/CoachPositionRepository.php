<?php

namespace App\Repository;

use App\Entity\CoachPosition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CoachPosition|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoachPosition|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoachPosition[]    findAll()
 * @method CoachPosition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoachPositionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoachPosition::class);
    }

    // /**
    //  * @return CoachPosition[] Returns an array of CoachPosition objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CoachPosition
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
