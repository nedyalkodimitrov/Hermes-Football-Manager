<?php

namespace App\Repository;

use App\Entity\SoccerScheme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SoccerScheme|null find($id, $lockMode = null, $lockVersion = null)
 * @method SoccerScheme|null findOneBy(array $criteria, array $orderBy = null)
 * @method SoccerScheme[]    findAll()
 * @method SoccerScheme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SoccerSchemeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SoccerScheme::class);
    }

    // /**
    //  * @return SoccerScheme[] Returns an array of SoccerScheme objects
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
    public function findOneBySomeField($value): ?SoccerScheme
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
