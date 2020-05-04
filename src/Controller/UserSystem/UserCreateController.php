<?php

namespace App\Controller\UserSystem;

use App\Repository\UsersRepository;
use App\Repository\CompanyRepository;
use App\Repository\ActivationPeriodRepository;
use App\Repository\SubscriptionRepository;
use App\Repository\LevelRepository;
use App\Repository\CountryRepository;
use App\Entity\Users;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use App\EventSubscriber\SendMailCreatedUserEvent;



class UserCreateController extends AbstractController
{
//    public string $hola;

    private $usersRepository;
    private $dispatcher;
    private $companyRepositori;
    private $activationPeriodRepository;
    private $subscriptionRepository;
    private $levelRepository;
    private $countryRepository;

    public function __construct(UsersRepository $usersRepository,EventDispatcherInterface $dispatcher,CompanyRepository $companyRepositori,ActivationPeriodRepository $activationPeriodRepository,SubscriptionRepository $subscriptionRepository,LevelRepository $levelRepository,CountryRepository $countryRepository)
    {
        $this->usersRepository            = $usersRepository;
        $this->dispatcher                 = $dispatcher;
        $this->companyRepositori          = $companyRepositori;
        $this->activationPeriodRepository = $activationPeriodRepository;
        $this->subscriptionRepository     = $subscriptionRepository;
        $this->levelRepository            = $levelRepository;
        $this->countryRepository          = $countryRepository;
    }
    public function index(Request $request): Response
    {

      $data = json_decode($request->getContent(),true);

      if(empty($data['email']) || empty($data['password']) || empty($data['identificationCard']) || empty($data['password']) ){
        throw new NotFoundHttpException('Expecting mandatory parameters!');
      }
      $activationPeriod = $this->activationPeriodRepository->findOneBy(['name'=>'free']);
      $subscription     = $this->subscriptionRepository->findOneBy(['name'=>'Basic']);
      $level            = $this->levelRepository->findOneBy(['name'=>'Company']);
      //change for request
      $country          = $this->countryRepository->findOneBy(['codCountry'=>'EC']);

      $company          = $this->companyRepositori->create($activationPeriod,$subscription,$level,$country);

      

      $token = sha1(mt_rand(1, 90000) . 'SALT');
      $roles = Users::ROLE_USER;
      $phone = 0;
      $status = false;
      $admin = true;
      $lastEntry = new \DateTime();
      $birthdate = new \DateTime($data['birthdate']);
      $accesIp =  $request->getClientIp();
      $beenRemove = false;
      empty($data['phone']) ? $phone = $phone : $phone = $data['phone'];

      

      
      $user = $this->usersRepository->save($data['email'],[$roles],$data['password'],$data['identificationCard'],$data['name'],$data['lastName'],$birthdate,$phone,$data['note'],$status,$admin,$lastEntry,$accesIp,$beenRemove,$data['pathImg'],$token,$company);
      
      $event = new SendMailCreatedUserEvent($user);
      $this->dispatcher->dispatch($event, SendMailCreatedUserEvent::NAME);

      return new JsonResponse(['status' => 'User created!'], Response::HTTP_CREATED);
        
    }
}
