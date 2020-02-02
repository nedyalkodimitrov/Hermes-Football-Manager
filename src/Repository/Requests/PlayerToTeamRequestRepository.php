<?php

namespace App\Repository\Requests;

use App\Entity\Requests\PlayerToTeamRequest;
use App\Entity\Team;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PlayerToTeamRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerToTeamRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerToTeamRequest[]    findAll()
 * @method PlayerToTeamRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerToTeamRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlayerToTeamRequest::class);
    }


    public function getAllToTeamRequest(Team $team){
        $allRequest = $team->getRequestFromPlayer();
        return $allRequest;
    }
    // /**
    //  * @return PlayerToTeamRequest[] Returns an array of PlayerToTeamRequest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlayerToTeamRequest
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
