<?php

namespace App\Repository;

use App\Entity\Users;
use App\Entity\Company;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @method Users|null find($id, $lockMode = null, $lockVersion = null)
 * @method Users|null findOneBy(array $criteria, array $orderBy = null)
 * @method Users[]    findAll()
 * @method Users[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    private $passwordEncoder;
    public function __construct(ManagerRegistry $registry,UserPasswordEncoderInterface $passwordEncoder)
    {
        parent::__construct($registry, Users::class);
        $this->passwordEncoder = $passwordEncoder;
        
        
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof Users) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    public function activate(Users $user){

        try{
            $user->setToken(null);
            $user->setStatus(true);
    
            $this->_em->persist($user);
            $this->_em->flush();
            
            return true;
        }
        catch (Exception $e) {
            throw $e;
        }
    }   

    public function save ($email,$roles,$password,$identificationCard,$name,$lastName,$birthdate,$phone,$note,$status,$admin,$lastEntry,$accesIp,$beenRemove,$pathImg,$token,Company $company){
 
        try {
            $user = new Users();
            $user->setEmail($email);
            $user->setRoles($roles);
            $user->setPassword($this->passwordEncoder->encodePassword($user,$password));
            $user->setIdentificationCard($identificationCard);
            $user->setName($name);
            $user->setLastName($lastName);
            $user->setBirthdate($birthdate);
            $user->setPhone($phone);
            $user->setNote($note);
            $user->setAdmin($admin);
            $user->setLastEntry($lastEntry);
            $user->setAccesIp($accesIp);
            $user->setBeenRemove($beenRemove);
            $user->setPathImg($pathImg);
            $user->setToken($token);
            $user->setCompany($company);
            $this->_em->persist($user);
            $this->_em->flush();

            return $user;
        }
        catch (Exception $e) {
            throw $e;
        }


    }

    // /**
    //  * @return Users[] Returns an array of Users objects
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
    public function findOneBySomeField($value): ?Users
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
