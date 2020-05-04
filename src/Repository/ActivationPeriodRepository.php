<?php

namespace App\Repository;

use App\Entity\ActivationPeriod;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ActivationPeriod|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActivationPeriod|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActivationPeriod[]    findAll()
 * @method ActivationPeriod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivationPeriodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActivationPeriod::class);
    }

    // /**
    //  * @return ActivationPeriod[] Returns an array of ActivationPeriod objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ActivationPeriod
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
