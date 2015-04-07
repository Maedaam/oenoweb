<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;


class RechercheDidactiqueRestController extends Controller {

	public function getRegionsAction(){
		$em=$this->getDoctrine()->getManager();

		$query = $em->createQuery(
		'SELECT distinct a.region
		FROM OenowebBundle:Vins a
		ORDER BY a.region ASC'
		);

		$listRegion = $query->getResult(); 

	    return $listRegion;
  	}

  	public function getRegionAction($region){
  		$em=$this->getDoctrine()->getManager();

 		$query = $em->createQuery(
 		'SELECT distinct a.aoc
		FROM OenowebBundle:Vins a
		WHERE a.region = :parametre
		ORDER BY a.aoc ASC'
		)->setParameter('parametre' , $region );

  		$listelement = $query->getResult(); 

    	return $listelement;
 	}

 	 public function getRegionAocAction($region , $paoc){
  		$em=$this->getDoctrine()->getManager();

  		$query = $em->createQuery(
  		'SELECT distinct a.domaine
  		FROM OenowebBundle:Vins a
  		WHERE a.region  = :parametre
  		AND a.aoc = :parametre2
  		ORDER BY a.domaine ASC'
  		)->setParameters(array(
  		    'parametre' => $region,
  		    'parametre2' => $paoc,
  		    ));

  		$listelement = $query->getResult(); 

	    return $listelement;
	}

	public function getRegionAocDomaineAction($pregion, $paoc, $pdomaine){
		$em=$this->getDoctrine()->getManager();

		$query = $em->createQuery(
		'SELECT OenowebBundle:Vins
		FROM OenowebBundle:Vins
		WHERE a.region  = :parametre1
		AND a.aoc = :parametre2
		AND a.domaine = :parametre3'
		)->setParameters(array(
    		'parametre1' => $pregion,
    		'parametre2' => $paoc,
    		'parametre3' => $pdomaine,
    		));

  		$listelement = $query->getResult(); 

    	return $listelement;
	}



}