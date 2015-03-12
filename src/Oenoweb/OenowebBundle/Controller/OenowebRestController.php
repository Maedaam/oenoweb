<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class OenowebRestController extends Controller
{
  public function getUserAction($username){
    $user = $this->getRepository('UserBundle:User')->findOneByUsername($username);
    if(!is_object($user)){
      throw $this->createNotFoundException();
    }
    return $user;
  }
}

?>