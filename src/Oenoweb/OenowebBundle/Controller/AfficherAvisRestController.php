<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;


class AfficherAvisRestController extends Controller
{
  public function getListCommentaireAction($idVin){
  $em=$this->getDoctrine()->getManager();

  $query = $em->createQuery(
  'SELECT distinct a , b.username
  FROM OenowebBundle:Avis a,  OenowebBundle:Users b
  WHERE a.idVin = :parametre 
  AND a.idUser = b.id
  ORDER BY a.commentaire ASC'
  )->setParameter('parametre' , $idVin );

  	$listelement = $query->getResult(); 

  //   if(!is_object($listRegion[0])){
  //     throw $this->createNotFoundException();
  //   }
    return $listelement;
  }
}