<?php

namespace App\Repository;

use App\Entity\SuperAdmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SuperAdmin|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuperAdmin|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuperAdmin[]    findAll()
 * @method SuperAdmin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuperAdminRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuperAdmin::class);
    }



    public function findPlayerById($playerId, $matchId)
    {
        $teams = $this->getEntityManager()
            ->createQuery(
                'SELECT m
                FROM  App\Entity\MatchList m
                WHERE (m.player = :playerId AND m.match = :matchId)
               '
            )
            ->setParameter('playerId', "%".$playerId."%")
            ->setParameter('matchId', "%".$matchId."%")
            ->getResult();
        return $teams;
    }


    /*
    public function findOneBySomeField($value): ?SuperAdmin
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
