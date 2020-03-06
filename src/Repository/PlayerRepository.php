<?php

namespace App\Repository;

use App\Entity\Player;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Player|null find($id, $lockMode = null, $lockVersion = null)
 * @method Player|null findOneBy(array $criteria, array $orderBy = null)
 * @method Player[]    findAll()
 * @method Player[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Player::class);
    }

    public function getPlayerTeam(Player $player){
        if ($player->getYouthTeams() != null){
            $team = $player->getYouthTeams();
        }else{
            $team = $player->getTeam();
        }
        return $team;
    }


    public function findByText($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.name = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function getTopPlayers($teamId)
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.stats ', 's')
            ->andWhere('p.team = :team')
            ->setParameter('team', $teamId)
            ->orderBy('s.statusFromCoaches', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult()
        ;
    }

    public function getTopYouthPlayers($teamId)
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.stats ', 's')
            ->leftJoin('p.youthTeams', 't')
            ->andWhere('t.motherTeam = :team')
            ->setParameter('team', $teamId)
            ->orderBy('s.statusFromCoaches', 'ASC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult()
            ;
    }

    public function getTopYouthPlayersFromCurrentTeam($teamId)
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.stats ', 's')
            ->andWhere('p.youthTeams= :team')
            ->setParameter('team', $teamId)
            ->orderBy('s.statusFromCoaches', 'ASC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult()
            ;
    }

    /*
    public function findOneBySomeField($value): ?Player
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
