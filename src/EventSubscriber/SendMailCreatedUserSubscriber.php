<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\EventSubscriber\SendMailCreatedUserEvent;


class SendMailCreatedUserSubscriber implements EventSubscriberInterface
{
    /**
     * @var \Swift_Mailer $mailer
     */
    private $mailer;
    public function __construct(\Swift_Mailer $mailer){
        $this->mailer = $mailer;
    }
    public function onUserCreated($event)
    {
        
        $message = (new \Swift_Message('Hello Email'))
        ->setFrom('send@example.com')
        ->setTo($event->getEmail())
        ->setBody(
            $event->getToken()

        )
    ;

    return $this->mailer->send($message);
    }

    public static function getSubscribedEvents()
    {
        return [
            SendMailCreatedUserEvent::NAME => 'onUserCreated',
        ];
    }
}
