<?php

namespace App\Repository;

use App\Entity\UserTeamRegister;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserTeamRegister|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserTeamRegister|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserTeamRegister[]    findAll()
 * @method UserTeamRegister[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserTeamRegisterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserTeamRegister::class);
    }

    // /**
    //  * @return UserTeamRegister[] Returns an array of UserTeamRegister objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserTeamRegister
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
