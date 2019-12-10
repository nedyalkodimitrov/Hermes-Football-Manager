<?php

namespace App\Repository;

use App\Entity\YouthTeam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method YouthTeam|null find($id, $lockMode = null, $lockVersion = null)
 * @method YouthTeam|null findOneBy(array $criteria, array $orderBy = null)
 * @method YouthTeam[]    findAll()
 * @method YouthTeam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class YouthTeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, YouthTeam::class);
    }

    // /**
    //  * @return YouthTeam[] Returns an array of YouthTeam objects
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
    public function findOneBySomeField($value): ?YouthTeam
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
