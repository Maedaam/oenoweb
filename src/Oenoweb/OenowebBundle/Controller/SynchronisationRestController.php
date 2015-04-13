<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;


class SynchronisationRestController extends Controller {

	public function getSynchroAction(){
		$em=$this->getDoctrine()->getManager();

		$query = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:Avis a'
		);

  		$avis = $query->getResult(); 

		$queryAvis = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:Caracteristique a'
		);

		$caracteristique = $queryAvis->getResult(); 

		$query = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:CaracteristiqueVins a'
		);

		$caracteristiqueVins = $queryAvis->getResult(); 

		$query = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:Cepage a'
		);

		$cepage = $query->getResult(); 

		$query = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:CepageVins a'
		);

		$cepagevins = $query->getResult(); 

		$query = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:Favoris a'
		);

		$favoris = $query->getResult(); 

		$query = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:Users a'
		);

		$users = $query->getResult(); 

		$query = $em->createQuery(
		'SELECT a
		FROM OenowebBundle:Vins a'
		);

		$vins= $query->getResult(); 

    	return array($avis, $caracteristique, $caracteristiqueVins, $cepage, $cepagevins, $favoris, $users, $vins);
	}

	}

