<?php

namespace Oenoweb\OenowebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Oenoweb\OenowebBundle\Entity\Vins;

class TestController extends Controller
{
    public function ajoutAction()
    {

    	$em = $this->getDoctrine()->getManager();

    	$vins = $em->getRepository('OenowebBundle:Vins')->findAll();

        return $this->render('OenowebBundle:Default:test.html.twig', array('vins' => $vins));

    }
}