<?php

namespace App\Repository;

use App\Entity\UserYouthTeamRegister;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserYouthTeamRegister|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserYouthTeamRegister|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserYouthTeamRegister[]    findAll()
 * @method UserYouthTeamRegister[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserYouthTeamRegisterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserYouthTeamRegister::class);
    }

    // /**
    //  * @return UserYouthTeamRegister[] Returns an array of UserYouthTeamRegister objects
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
    public function findOneBySomeField($value): ?UserYouthTeamRegister
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
