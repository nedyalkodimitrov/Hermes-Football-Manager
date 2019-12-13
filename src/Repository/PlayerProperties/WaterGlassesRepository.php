<?php

namespace App\Repository\PlayerProperties;

use App\Entity\PlayerProperties\WaterGlasses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method WaterGlasses|null find($id, $lockMode = null, $lockVersion = null)
 * @method WaterGlasses|null findOneBy(array $criteria, array $orderBy = null)
 * @method WaterGlasses[]    findAll()
 * @method WaterGlasses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WaterGlassesRepository extends \Doctrine\ORM\EntityRepository
{


    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em, new \Doctrine\ORM\Mapping\ClassMetadata(WaterGlasses::class));
    }

    public function getWaterGlassesByUserDESC($userId){
        return $this->_em
            ->getRepository(WaterGlasses::class)
            ->findBy(['playerId' => $userId], [ 'id' => 'DESC'])[0];
    }

    public function getWaterGlassesByUserASC($userId){
        return $this->_em
            ->getRepository(WaterGlasses::class)
            ->findBy(['playerId' => $userId], [ 'id' => 'ASC'])[0];
    }

    public function setWaterGlass($player, $date){
        $waterGlass = new WaterGlasses();
        $waterGlass->setPlayerId($player);
        $waterGlass->setDate($date);
        $waterGlass->setWaterGlasses(0);
        $this->save($waterGlass);
    }

    public function save( WaterGlasses $waterGlass){
        $this->_em->persist($waterGlass);
        $this->_em->flush();
    }

    public function getLastWaterGlass($playerId){
        $waterGlasses = $this->_em->getRepository(WaterGlasses::class)
            ->findBy(['playerId' => $playerId], [ 'id' => 'DESC']);
        return $waterGlasses[0];
    }


    // /**
    //  * @return WaterGlasses[] Returns an array of WaterGlasses objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WaterGlasses
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
