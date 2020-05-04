<?php

namespace App\Controller\UserSystem;

use App\Repository\UsersRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;




class ActivateUserController extends AbstractController
 {

    private $usersRepository;

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }
    public function index(Request $request): Response
    {
      $data = json_decode($request->getContent(),true);

      $user = $this->usersRepository->findOneBy(['token'=>$data['token']]);

      $this->usersRepository->activate($user);


      return new JsonResponse(['status' => 'User activated!'], Response::HTTP_OK);

    }
}