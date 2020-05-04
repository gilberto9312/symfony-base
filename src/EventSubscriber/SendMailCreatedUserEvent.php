<?php
namespace App\EventSubscriber;

use App\Entity\Users;

class SendMailCreatedUserEvent{

  /**
   * @var Users $user
   */
  private $user;

  CONST NAME = 'user.created';

  public function __construct(Users $user){
    $this->user = $user;
  }

  public function getToken()
  {
    return $this->user->getToken();
  }

  public function getEmail(){
    return $this->user->getEmail();
  }
}
