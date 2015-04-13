<?php
namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\Response;
use Oenoweb\OenowebBundle\Entity\Avis;
use Oenoweb\OenowebBundle\Entity\User2;
use Oenoweb\OenowebBundle\Form\AvisType;
use Oenoweb\OenowebBundle\Form\User2Type;


// Ensemble des fonctions en rapport avec les utilisateurs du bundle REST
class FonctionSocialeRestController extends Controller  {

/*
*	Fonction permettant d'ajouter un avis
*	Route : /api/avis/{.format}
*/
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

/*
*	Fonction permettant d'ajouter un favoris a la base de donnée
*	Les paramètres sont l'id de l'utilisateur et l'id du vin associé
*	route : /api/favoris.{_format} 
*/
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

/*
*	Fonction permettant de lire les commentaires relatifs à un utilisateur
*	Cette fonction prend en paramètre l'id d'un utilisateur
*	route : /api/commentaires/{idUser}/user.{_format} 
*/
	public function getCommentaireUserAction($idUser)
	{
		$em=$this->getDoctrine()->getManager();

		$query = $em->createQuery(
		'SELECT distinct a , b.username
		FROM OenowebBundle:Avis a,  OenowebBundle:User2 b
		WHERE b.username = :parametre 
		AND b.id = a.idUser
		ORDER BY a.commentaire ASC'
		)->setParameter('parametre' , $idUser );

		$listelement = $query->getResult(); 

	    return $listelement;
	  }

/*
*	Fonction permettant de recevoir les commentaires relatifs à un vin 
*	Cette fonction prend en parémètre l'id d'un vin
*	route :  /api/commentaires/{idVin}/vins.{_format} 
*/
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

/*
*	Fonction permettant de recevoir la liste des favoris d'un utilisateur
*	La fonction prend en paramètre l'id de l'utilisateur
*	route : 
*/
	public function getFavorisUserAction($idUser){
		$em=$this->getDoctrine()->getManager();

		$query = $em->createQuery(
		'SELECT distinct a
		FROM OenowebBundle:Favoris a
		WHERE a.idUser = :parametre'
		)->setParameter('parametre' , $idUser );

		$listelement = $query->getResult(); 

		return $listelement;
	}

/*
*	Fonction permettant de lire les informations liée à un utilisateur
*	La fonction prend en paramètre le nom de l'utilisateur
*	route : /api/users/{username}.{_format} 
*/
	public function getUserAction($username){
	    $user = $this->getDoctrine()
	    ->getRepository('OenowebBundle:Users2')
	    ->findOneByUsername($username);
	    
	    if(!is_object($user)){
	      throw $this->createNotFoundException();
	    }
	    return $user;
	}

/*
*	Fonction permettant d'ajouter un utilisateur à la base de donnée
*	Les paramètres sont l'id de l'utilisateur et l'id du vin associé
*	route :  /api/user2.{_format}
*/	
	public function postUser2Action(Request $request)
	{
	    $entity = new User2();
	    $form = $this->createForm(new User2Type(), $entity);
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


}