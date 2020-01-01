<?php

namespace App\Repository;

use App\Entity\InjuredUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method InjuredUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method InjuredUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method InjuredUsers[]    findAll()
 * @method InjuredUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InjuredUsersRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InjuredUsers::class);

    }


    public function save(InjuredUsers $injuredUser){
        $em = $this->getEntityManager();
        $em->persist($injuredUser);
        $em->flush();
    }
    // /**
    //  * @return InjuredUsers[] Returns an array of InjuredUsers objects
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
    public function findOneBySomeField($value): ?InjuredUsers
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
