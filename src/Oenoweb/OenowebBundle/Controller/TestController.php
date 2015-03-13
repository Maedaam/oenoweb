<?php
namespace Oenoweb\OenowebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Oenoweb\OenowebBundle\Entity\Avis;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
   
 public function createAction()
    {

    	$em = $this->getDoctrine()->getManager();

    	$elem1 = new Avis();
    	$elem1->setIdUser('1');
        $elem1->setIdVin('1');
        $elem1->setAnnee('2009');
        $elem1->setTitre('Tres bon vin !');
        $elem1->setCommentaire('j\'ai vraiment apprecié le gout fruité de ce vin savoureux agreble' );  
        $elem1->setNotes('2');


        $elem2 = new Avis();
        $elem2->setIdUser('4');
        $elem2->setIdVin('1');
        $elem2->setAnnee('2012');
        $elem2->setTitre('Excellent');
        $elem2->setCommentaire('j\'ai adoré');
        $elem2->setNotes('3');

        $elem3 = new Avis();
        $elem3->setIdUser('2');
        $elem3->setIdVin('2');
        $elem3->setAnnee('1998');
        $elem3->setTitre('Peu apprecié !');
        $elem3->setCommentaire('pas agreable' );
        $elem3->setNotes('4');


    	$em->persist($elem1);
        $em->persist($elem2);
        $em->persist($elem3);
    	$em->flush();

        return new Response('vin de choix');

    }
}

?>