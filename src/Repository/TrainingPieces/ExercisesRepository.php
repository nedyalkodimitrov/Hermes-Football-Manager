<?php

namespace App\Repository\TrainingPieces;

use App\Entity\TrainingPieces\Exercises;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Exercises|null find($id, $lockMode = null, $lockVersion = null)
 * @method Exercises|null findOneBy(array $criteria, array $orderBy = null)
 * @method Exercises[]    findAll()
 * @method Exercises[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExercisesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Exercises::class);
    }

    // /**
    //  * @return Exercises[] Returns an array of Exercises objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */


    public function findByName($value)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT * FROM Exercises e 
        WHERE e.name LIKE :name
        ORDER BY e.name ASC
        ';

        $stmt = $conn->prepare($sql);
        $stmt->execute(['name' => '%'.$value.'%']);
        return $stmt->fetchAll();
    }

}
