<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;

class DeleteAvisRestController extends Controller
{
  public function deleteAvisAction($id)
  {
      $em = $this->getDoctrine()->getManager();

      $Avis = $em->getRepository('OenowebBundle:Avis');

      $entity = $Avis->getEntity($id);

      $em->remove($entity);
      $em->flush();

      return $this->view(null, Codes::HTTP_NO_CONTENT);
  }
}
