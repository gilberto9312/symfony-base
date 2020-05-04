<?php

namespace App\Repository;

use App\Entity\FaultLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FaultLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method FaultLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method FaultLog[]    findAll()
 * @method FaultLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FaultLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FaultLog::class);
    }

    // /**
    //  * @return FaultLog[] Returns an array of FaultLog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FaultLog
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
