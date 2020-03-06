<?php

namespace App\Repository\Requests;

use App\Entity\Requests\UserToUserRequest;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserToUserRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserToUserRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserToUserRequest[]    findAll()
 * @method UserToUserRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserToUserRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserToUserRequest::class);
    }


    // /**
    //  * @return UserToUserRequest[] Returns an array of UserToUserRequest objects
    //  */

    public function findByExampleField(User $user, $type)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.type = :type')
            ->andWhere('u.sender = :user')
            ->setParameter('type', $type)
            ->setParameter('user', $user->getId())
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?UserToUserRequest
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
