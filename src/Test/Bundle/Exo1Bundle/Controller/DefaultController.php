<?php

namespace Test\Bundle\Exo1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name , $prenom)
    {
        return $this->render('TestExo1Bundle:Default:index.html.twig', array('name' => $name, 
                                                                            'prenom' => $prenom));
    }
}

// lire , savoir ce que c'eest une application "rest" , prochaine fois :
//se renseigner sur le bundle (fostrestBundle) d