<?php
namespace Oenoweb\OenowebBundle\Security\Core\Authentication\Provider;
 
use Escape\WSSEAuthenticationBundle\Security\Core\Authentication\Provider\Provider as BaseProvider;
use Symfony\Component\HttpFoundation\Request;
 
class Provider extends BaseProvider
{
        protected function getSalt(\Symfony\Component\Security\Core\User\UserInterface $user)
        {
                return "";
        }
}



?>