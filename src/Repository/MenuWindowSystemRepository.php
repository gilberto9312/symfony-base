<?php

namespace App\Repository;

use App\Entity\MenuWindowSystem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MenuWindowSystem|null find($id, $lockMode = null, $lockVersion = null)
 * @method MenuWindowSystem|null findOneBy(array $criteria, array $orderBy = null)
 * @method MenuWindowSystem[]    findAll()
 * @method MenuWindowSystem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenuWindowSystemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MenuWindowSystem::class);
    }

    // /**
    //  * @return MenuWindowSystem[] Returns an array of MenuWindowSystem objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MenuWindowSystem
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
