<?php
namespace App\Controller\UserSystem;

use App\Repository\UserSystemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\Response;


class UserMenuController extends AbstractController
{
    /**
    * @var TokenStorageInterface
    */
    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }
    public function index(UserSystemRepository $userSystemRepository){

        $token = $this->tokenStorage->getToken();
        $user = $token->getUser()->getId();
        $systems = $userSystemRepository->findMenuForUser($user);
        $valSystem = $this->desestructurate($systems);
        return $this->json($valSystem);
    }

    private function desestructurate($systems){
        $res = [];
        foreach ($systems as $key => $value) {
            $res[$key]['name'] = $value->getSystem()->getName();
            $res[$key]['locationFileImage'] = $value->getSystem()->getLocationFileImage();
            $res[$key]['codSystem'] = $value->getSystem()->getCodSystem();

        }
        return $res;
    }
}