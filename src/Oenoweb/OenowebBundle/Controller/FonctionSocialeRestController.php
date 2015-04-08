<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Response;
use Oenoweb\OenowebBundle\Entity\Avis;
use Oenoweb\OenowebBundle\Form\AvisType;

class FonctionSocialeRestController extends Controller  {

	public function postAvisAction(Request $request)
	{
	    $entity = new Avis();
	    $form = $this->createForm(new AvisType(), $entity);
	    $form->bind($request);

	    if ($form->isValid()) {
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($entity);
	        $em->flush();

	        return $this->redirectView(
	                $this->generateUrl(
	                    'get_organisation',
	                    array('id' => $entity->getId())
	                    ),
	                Codes::HTTP_CREATED
	                );
	    }

	    return array(
	        'form' => $form,
	    );
	}

	public function postFavorisAction(Request $request)
	{
	    $entity = new Favoris();
	    $form = $this->createForm(new FavorisType(), $entity);
	    $form->bind($request);

	    if ($form->isValid()) {
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($entity);
	        $em->flush();

	        return $this->redirectView(
	                $this->generateUrl(
	                    'get_organisation',
	                    array('id' => $entity->getId())
	                    ),
	                Codes::HTTP_CREATED
	                );
	    }

	    return array(
	        'form' => $form,
	    );
	}


	public function getCommentaireUserAction($idUser)
	{
		$em=$this->getDoctrine()->getManager();

		$query = $em->createQuery(
		'SELECT distinct a , b.username
		FROM OenowebBundle:Avis a,  OenowebBundle:Users b
		WHERE b.username = :parametre 
		AND b.id = a.idUser
		ORDER BY a.commentaire ASC'
		)->setParameter('parametre' , $idUser );

		$listelement = $query->getResult(); 

	    return $listelement;
	  }


	public function getCommentaireVinsAction($idVin){
		$em=$this->getDoctrine()->getManager();

		$query = $em->createQuery(
		'SELECT distinct a , b.username
		FROM OenowebBundle:Avis a,  OenowebBundle:Users b
		WHERE a.idVin = :parametre 
		AND a.idUser = b.id
		ORDER BY a.commentaire ASC'
		)->setParameter('parametre' , $idVin );

		$listelement = $query->getResult(); 

		return $listelement;
	}

	public function getUserAction($username){
	    $user = $this->getDoctrine()
	    ->getRepository('OenowebBundle:Users')
	    ->findOneByUsername($username);
	    
	    if(!is_object($user)){
	      throw $this->createNotFoundException();
	    }
	    return $user;
	}


}