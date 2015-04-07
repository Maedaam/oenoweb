<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;


class VinsRestController extends Controller
{
  public function getVinsAction($pregion , $paoc, $pdomaine){
  $em=$this->getDoctrine()->getManager();

  $query = $em->createQuery(
  'SELECT distinct a
  FROM OenowebBundle:Vins a
  WHERE a.region  = :parametre AND a.aoc = :parametre2 AND a.domaine = :parametre3
  ORDER BY a.domaine ASC'
  )->setParameters(array(
      'parametre' => $region,
      'parametre2' => $paoc,
      'parametre3' => $pdomaine,
      ));

  	$listelement = $query->getResult(); 

    return $listelement;
  }
}