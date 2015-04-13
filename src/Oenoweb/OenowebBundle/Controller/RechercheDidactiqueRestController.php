<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;


class RechercheDidactiqueRestController extends Controller {

/*
*	Fonction permettant de sortir la liste des régions
*	route : /api/regions.{_format}
*/
	public function getRegionsAction(){
		$em=$this->getDoctrine()->getManager();

		$query = $em->createQuery(
		'SELECT distinct a
		FROM OenowebBundle:Vins a
		ORDER BY a.region ASC'
		);

		$listRegion = $query->getResult(); 

	    return $listRegion;
  	}

/*
*	Fonction permettant de récupérer la liste des aoc d'une région
*	Le paramètre est le nom de la région
*	route : api/regions/{region}.{_format} 
*/
  	public function getRegionAction($region){
  		$em=$this->getDoctrine()->getManager();

 		$query = $em->createQuery(
 		'SELECT distinct a
		FROM OenowebBundle:Vins a
		WHERE a.region = :parametre
		ORDER BY a.aoc ASC'
		)->setParameter('parametre' , $region );
  
  		$listelement = $query->getResult(); 

    	return $listelement;
 	}

/*
*	Fonction permettant de récupérer la liste des domaines d'une aoc
*	Les paramètres sont : le nom de l'aoc et de sa région
*	route : /api/regions/{region}/aocs/{paoc}.{_format} 
*/
 	 public function getRegionAocAction($region , $paoc){
  		$em=$this->getDoctrine()->getManager();

  		$query = $em->createQuery(
  		'SELECT distinct a
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

/*
*	Fonction permettant de lister les vins d'un domaine
*	Les paramètres sont : le nom de la région, de l'aoc et du domaine du vins
*	route : /api/regions/{pregion}/aocs/{paoc}/domaines/{pdomaine}.{_format} 
*/
	public function getRegionAocDomaineAction($pregion, $paoc, $pdomaine){
		$em=$this->getDoctrine()->getManager();

		$query = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:Vins a
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