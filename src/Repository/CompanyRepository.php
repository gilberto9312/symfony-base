<?php

namespace App\Repository;

use App\Entity\Company;
use App\Entity\ActivationPeriod;
use App\Entity\Subscription;
use App\Entity\Level;
use App\Entity\Country;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Company|null find($id, $lockMode = null, $lockVersion = null)
 * @method Company|null findOneBy(array $criteria, array $orderBy = null)
 * @method Company[]    findAll()
 * @method Company[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompanyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Company::class);
    }

    public function create(ActivationPeriod $activationPeriod,Subscription $subscription,Level $level,Country $country){
        $uuid = uuid_create(UUID_TYPE_RANDOM);
        $date = new \DateTime();
        try{
            $company = new Company();
            $company->setCodCompany($uuid);
            $company->setTradename('Trade name');
            $company->setCommercialAddress('Commercial addres');
            $company->setPhone(00000);
            $company->setEmail('example@example');
            $company->setWebsite('example.com');
            $company->setActivationPeriod($activationPeriod);
            $company->setStartDatePeriod($date);
            $company->setEndDatePeriod(new \DateTime(date('m/d/Y',strtotime('+30 days',strtotime('05/06/2016')))));
            $company->setSubscription($subscription);
            $company->setLevel($level);
            $company->setLocationFileBadge('public/');
            $company->setUniqueCountryRegistry(9999999999);
            $company->setState(true);
            $company->setCountry($country);
            $company->setProvince('province');
            $company->setBeenRemove(false);
        }
        catch(Exception $e) {
            throw $e;
        }

        $this->_em->persist($company);
        $this->_em->flush();

        return $company;

    }

    // /**
    //  * @return Company[] Returns an array of Company objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Company
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
