<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Response;
use Oenoweb\OenowebBundle\Entity\Avis;


class PosterUnAvisRestController extends Controller
{
  public function postCommentaireAction($setIdUser , $idVin , $Annee , $titre , $commentaire , $notes){
  // "post_Avis_Commentaire" [POST] /api/Commentaire/{setIdUser}/{idVin}
  $em=$this->getDoctrine()->getManager();

  $elem1 = new Avis();
    	$elem1->setIdUser($setIdUser);
        $elem1->setIdVin($idVin);
        $elem1->setAnnee($annee);
        $elem1->setTitre($titre);
        $elem1->setCommentaire($commentaire);  
        $elem1->setNotes($notes);
      

        $em->persist($elem1);
    	$em->flush();
  }
}
 
?>
