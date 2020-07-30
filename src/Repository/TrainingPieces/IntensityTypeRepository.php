<?php

namespace App\Repository\TrainingPieces;

use App\Entity\TrainingPieces\IntensityType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method IntensityType|null find($id, $lockMode = null, $lockVersion = null)
 * @method IntensityType|null findOneBy(array $criteria, array $orderBy = null)
 * @method IntensityType[]    findAll()
 * @method IntensityType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntensityTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IntensityType::class);
    }

    // /**
    //  * @return IntensityType[] Returns an array of IntensityType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IntensityType
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
