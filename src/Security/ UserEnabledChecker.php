<?php

namespace App\Security;

use App\Entity\Users;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Core\Exception\DisabledException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserEnabledChecker implements UserCheckerInterface
{

    /**
     * Checks the user account before authentication.
     * @throws AccountStatusException
     */
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof Users) {
            return;
        }

        if (!$user->getStatus()) {
            throw new DisabledException();
        }
    }

    /**
     * Checks the user account after authentication.
     * @throws AccountStatusException
     */
    public function checkPostAuth(UserInterface $user)
    {

    }
}