<?php

namespace App\Controller\UserSystem;

use App\Repository\UserSystemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserSystemController extends AbstractController
{
    /**
    * @var TokenStorageInterface
    */
    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }
    public function index(UserSystemRepository $UserSystemRepository): Response
    {
            $token = $this->tokenStorage->getToken();
            $user = $token->getUser()->getId();
            $systems = $UserSystemRepository->findSystemForUser($user);
            $valSystem = $this->desestructurate($systems,
            $user);
            //dump($valSystem);die;
            return new Response(json_encode($valSystem));
    }

    private function desestructurate($systems,$user){

        
        $em = $this->getDoctrine()->getManager();

            $RAW_QUERY = 'SELECT us.id, us.company_id , us.system_id , us.users_id , ur.id as id_ur , ur.menu_id, m.logical_name ,s."name" as "system", s.id  as s_system_id
                          FROM user_system us
                          INNER JOIN user_rights ur on ur.system_id = us.system_id
                          INNER JOIN menu_window_system m on m.id = ur.menu_id
                          INNER JOIN "system" s on s.id  = us.system_id 
                          WHERE us.users_id = :user';
            
            $statement = $em->getConnection()->prepare($RAW_QUERY);
            
            // Set parameters 
            $statement->bindValue('user', $user);
            $statement->execute();
            $right = $statement->fetchAll();    

        
        $res = [];
        foreach ($systems as $key => $value) {
            $res[$key]['id'] = $value->getSystem()->getId();
            $res[$key]['name'] = $value->getSystem()->getName();
            $res[$key]['locationFileImage'] = $value->getSystem()->getLocationFileImage();
            $res[$key]['codSystem'] = $value->getSystem()->getCodSystem();
            $res[$key]['location_file_image'] = $value->getSystem()->getLocationFileImage();
            
            foreach ($right as $k => $val) {
                if($res[$key]['id'] == $val['system_id']){                    
                $res[$key]['right'][$k]['id'] = $val['id'];
                $res[$key]['right'][$k]['company_id'] = $val['company_id'];
                $res[$key]['right'][$k]['system_id'] = $val['system_id'];
                $res[$key]['right'][$k]['users_id'] = $val['users_id'];
                $res[$key]['right'][$k]['menu_id'] = $val['menu_id'];
                $res[$key]['right'][$k]['logical_name'] = $val['logical_name'];
                }
            }
            sort($res[$key]['right']);

        }

        return $res;
    }

  

}
