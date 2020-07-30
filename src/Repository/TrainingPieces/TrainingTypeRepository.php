<?php

namespace App\Repository\TrainingPieces;

use App\Entity\TrainingPieces\TrainingType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TrainingType|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrainingType|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrainingType[]    findAll()
 * @method TrainingType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrainingTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrainingType::class);
    }

    // /**
    //  * @return TrainingType[] Returns an array of TrainingType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TrainingType
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
