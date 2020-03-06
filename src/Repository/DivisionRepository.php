<?php

namespace App\Repository;

use App\Entity\Division;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Division|null find($id, $lockMode = null, $lockVersion = null)
 * @method Division|null findOneBy(array $criteria, array $orderBy = null)
 * @method Division[]    findAll()
 * @method Division[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DivisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Division::class);
    }

    public function getTopDivision()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT * FROM division d
        INNER JOIN team t 
        ORDER BY count(t.division_id  ) ASC
        LIMIT 3 ;
        ';

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // /**
    //  * @return Division[] Returns an array of Division objects
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
    public function findOneBySomeField($value): ?Division
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
