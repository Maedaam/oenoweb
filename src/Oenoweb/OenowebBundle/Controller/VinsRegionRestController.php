<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;

class VinsRegionRestController extends Controller
{
  public function getListRegionAction(){
  $em=$this->getDoctrine()->getManager();

  $query = $em->createQuery(
  'SELECT distinct a.region
  FROM OenowebBundle:Vins a
  ORDER BY a.region ASC'

  );

  	$listRegion = $query->getResult(); 

  //   if(!is_object($listRegion[0])){
  //     throw $this->createNotFoundException();
  //   }
    return $listRegion;
  }
}

