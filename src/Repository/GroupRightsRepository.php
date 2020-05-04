<?php

namespace App\Repository;

use App\Entity\GroupRights;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GroupRights|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupRights|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupRights[]    findAll()
 * @method GroupRights[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupRightsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupRights::class);
    }

    // /**
    //  * @return GroupRights[] Returns an array of GroupRights objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GroupRights
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
