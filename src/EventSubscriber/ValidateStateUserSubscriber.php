<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Exception\DisabledException;

class ValidateStateUserSubscriber implements EventSubscriberInterface
{
    public function onExikJwtAuthenticationOnJwtAuthenticated($event)
    {
        if(!$event->getUser()->getStatus() || $event->getUser()->getBeenRemove()){
            throw new DisabledException();
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            'lexik_jwt_authentication.on_jwt_created' => 'onExikJwtAuthenticationOnJwtAuthenticated',
        ];
    }
}
