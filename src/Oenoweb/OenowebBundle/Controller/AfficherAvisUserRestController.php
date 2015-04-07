<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;

class AfficherAvisUserRestController extends Controller
{
  public function getCommentaireUserAction($idUser){
  $em=$this->getDoctrine()->getManager();

  $query = $em->createQuery(
  'SELECT distinct a , b.username
  FROM OenowebBundle:Avis a,  OenowebBundle:Users b
  WHERE b.username = :parametre 
  AND b.id = a.idUser
  ORDER BY a.commentaire ASC'
  )->setParameter('parametre' , $idUser );

  	$listelement = $query->getResult(); 

  //   if(!is_object($listRegion[0])){
  //     throw $this->createNotFoundException();
  //   }
    return $listelement;
  }
}
