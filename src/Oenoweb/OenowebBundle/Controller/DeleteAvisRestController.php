<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Oenoweb\OenowebBundle\Entity\Avis;
use Oenoweb\OenowebBundle\Repository\AvisRepository;
use Oenoweb\OenowebBundle\Form\AvisType;
use Oenoweb\OenowebBundle\Entity;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;


class DeleteAvisRestController extends Controller
{
  public function deleteAvisAction($id)
  {
      $em = $this->getDoctrine()->getManager();

      $Avis = $em->getEntity('OenowebBundle:AvisRepository');

      $entity = $Avis->getEntity($id);

      $em->remove($entity);
      $em->flush();

      return $this->view(null, Codes::HTTP_NO_CONTENT);
  }
}
