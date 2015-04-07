<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Response;
use Oenoweb\OenowebBundle\Entity\Vins;


class VinsRestController extends Controller
{
  public function getRegionAocDomaineAction($region , $aoc , $domaine){
  $em=$this->getDoctrine()->getManager();

  $query = $em->createQuery(
  'SELECT distinct a
  FROM OenowebBundle:Vins a
  WHERE a.region  = :parametre1 AND a.aoc = :parametre3 AND a.domaine = :parametre2
'
  )->setParameters(array(
      'parametre1' => $region,
      'parametre2' => $domaine,
      'parametre3' => $aoc,
      ));

  	$listelement = $query->getResult(); 

    return $listelement;
  }
}