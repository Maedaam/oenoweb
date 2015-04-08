<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;


class RechercheDidactiqueRestController extends Controller {

	public function getSynchroAction(){
		$em=$this->getDoctrine()->getManager();

		$queryVins = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:Vins a'
		);

  		$vins = $queryVins->getResult(); 

		$queryAvis = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:Avis a'
		);

		$avis = $queryAvis->getResult(); 

    	return array($vins, $avis);
	}

	}


}
