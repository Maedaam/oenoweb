<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;


class VinsDomaineRestController extends Controller
{
  public function getListDomaineAction($pregion , $paoc){
  $em=$this->getDoctrine()->getManager();

  $query = $em->createQuery(
  'SELECT distinct a.domaine
  FROM OenowebBundle:Vins a
  WHERE a.region  = :parametre AND a.aoc = :parametre2
  ORDER BY a.domaine ASC'
  )->setParameters(array(
      'parametre' => $pregion,
      'parametre2' => $paoc,
      ));

  	$listelement = $query->getResult(); 

  //   if(!is_object($listRegion[0])){
  //     throw $this->createNotFoundException();
  //   }
    return $listelement;
  }
}