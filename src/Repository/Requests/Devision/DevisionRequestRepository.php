<?php

namespace App\Repository\Requests\Devision;

use App\Entity\Requests\Devision\DevisionRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DevisionRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method DevisionRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method DevisionRequest[]    findAll()
 * @method DevisionRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DevisionRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DevisionRequest::class);
    }

    // /**
    //  * @return DevisionRequest[] Returns an array of DevisionRequest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DevisionRequest
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
