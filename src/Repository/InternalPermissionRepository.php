<?php

namespace App\Repository;

use App\Entity\InternalPermission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InternalPermission|null find($id, $lockMode = null, $lockVersion = null)
 * @method InternalPermission|null findOneBy(array $criteria, array $orderBy = null)
 * @method InternalPermission[]    findAll()
 * @method InternalPermission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InternalPermissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InternalPermission::class);
    }

    // /**
    //  * @return InternalPermission[] Returns an array of InternalPermission objects
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
    public function findOneBySomeField($value): ?InternalPermission
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
