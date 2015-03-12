<?php
namespace Oenoweb\OenowebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Oenoweb\OenowebBundle\Entity\Vins;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
   
 public function createAction()
    {

    	$em = $this->getDoctrine()->getManager();

    	$vin1 = new Vins();
    	$vin1->setNom('Gite de Descartes');
    	$vin1->setDomaine('Chateau de Descartes');
    	$vin1->setCouleur('3');
    	$vin1->setRegion('3');

    	$em->persist($vin1);
    	$em->flush();

        return new Response('vin de choix');

    }
}


?>