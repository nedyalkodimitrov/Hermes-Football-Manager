<?php

namespace App\Repository\Requests;

use App\Entity\Requests\CoachToPlayerRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CoachToPlayerRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoachToPlayerRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoachToPlayerRequest[]    findAll()
 * @method CoachToPlayerRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoachToPlayerRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoachToPlayerRequest::class);
    }

    // /**
    //  * @return CoacheToPlayerRequest[] Returns an array of CoacheToPlayerRequest objects
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
    public function findOneBySomeField($value): ?CoacheToPlayerRequest
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
