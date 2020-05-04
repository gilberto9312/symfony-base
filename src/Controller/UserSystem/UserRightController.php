<?php
namespace App\Controller\UserSystem;

use App\Repository\UserRightsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class UserRightController extends AbstractController
{
    /**
    * @var TokenStorageInterface
    */
    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }
    public function index(Request $request, UserRightsRepository $userRightsRepository){
        $system = $request->headers->get('system');
        $token = $this->tokenStorage->getToken();
        $user = $token->getUser()->getId();
        $menus = $userRightsRepository->findMenuForUser($user,$system);
        $valMenus = $this->desestructurate($menus);
        return $this->json($valMenus);
    }

    private function desestructurate($menus){
        $res = [];
        foreach ($menus as $key => $value) {
            $res[$value->getMenu()->getFather()][$value->getId()]['name'] = $value->getMenu()->getLogicalName();
            $res[$value->getMenu()->getFather()][$value->getId()]['physical_name'] = $value->getMenu()->getPhysicalName();
            $res[$value->getMenu()->getFather()][$value->getId()]['father'] = $value->getMenu()->getFather();

        }
        return $res;
    }
}