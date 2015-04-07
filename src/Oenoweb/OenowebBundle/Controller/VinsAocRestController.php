<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;

class VinsAocRestController extends Controller
{
  public function getListAocAction($region){
  $em=$this->getDoctrine()->getManager();

  $query = $em->createQuery(
  'SELECT distinct a.id , a.aoc
  FROM OenowebBundle:Vins a
  WHERE a.region = :parametre
  ORDER BY a.id  ASC'
  )->setParameter('parametre' , $region );

  	$listelement = $query->getResult(); 

  //   if(!is_object($listRegion[0])){
  //     throw $this->createNotFoundException();
  //   }
    return $listelement;
  }
}