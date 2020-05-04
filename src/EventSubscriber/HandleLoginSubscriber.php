<?php

namespace App\EventSubscriber;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class HandleLoginSubscriber implements EventSubscriberInterface
{
    private $logger;
    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }
    public function onLexikJwtAuthenticationOnAuthenticationSuccess($event)
    {
        //var_dump($event->getUser()->getId());
        $this->logger->info('I just got the logger');
    }

    public static function getSubscribedEvents()
    {
        return [
            'lexik_jwt_authentication.on_authentication_success' => 'onLexikJwtAuthenticationOnAuthenticationSuccess',
        ];
    }
}
