<?php

namespace App\Repository;

use App\Entity\UserSystem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
/**
 * @method UserSystem|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserSystem|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserSystem[]    findAll()
 * @method UserSystem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserSystemRepository extends ServiceEntityRepository
{
    protected $entityManager;
    protected $reg;

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserSystem::class);
    }

    public function findSystemForUser($user)
    {
        
        /* $dql = $this->reg->createQuery('
                        SELECT us, ur
                        FROM App\Entity\UserSystem us
                        JOIN App\Entity\UserRights ur on ur.system = us.system
                        WHERE us.users = :user                        
                    ')->setParameter('user',$user);
                    //$result=$dql->getQuery();
        return $dql; */

        return $this->createQueryBuilder('us')
                ->innerJoin('us.system','ur')
                ->where('us.users = :user')->setParameter('user',$user)
                ->getQuery()
                ->getResult();
    }
    // /**
    //  * @return UserSystem[] Returns an array of UserSystem objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserSystem
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
