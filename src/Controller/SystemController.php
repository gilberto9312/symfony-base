<?php

namespace App\Controller;

use App\Repository\SystemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class SystemController extends AbstractController
{
    public integer $user;
    /**
    * @var TokenStorageInterface
    */
    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }
    public function index(SystemRepository $systemRepository): Response
    {
            $token = $this->tokenStorage->getToken();
            $user = $token->getUser()->getId();
            $systems = $systemRepository->findSystemForUser($user);

            return $this->json($systems);
    }
}
