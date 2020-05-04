<?php

namespace App\Repository;

use App\Entity\EnventLogs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EnventLogs|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnventLogs|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnventLogs[]    findAll()
 * @method EnventLogs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnventLogsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnventLogs::class);
    }

    // /**
    //  * @return EnventLogs[] Returns an array of EnventLogs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EnventLogs
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
