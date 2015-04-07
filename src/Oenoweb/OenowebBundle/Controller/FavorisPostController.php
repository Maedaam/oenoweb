<?php

namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Util\Codes;
use Oenoweb\OenowebBundle\Entity\Favoris;


class FavorisPostController extends Controller implements ClassResourceInterface
{


#src/OenowebBundle/Controller/FavorisPostController.php
/**
 * Put action
 * @var Request $request
 * @var integer $ Id of the entity
 * @return View|array
 */



public function PutAction(Request $request, $id)
{
    $entity = $this->getEntity($id);
    $form = $this->createForm(new FavorisType(), $entity);
    $form->bind($request);

    if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return $this->view(null, Codes::HTTP_NO_CONTENT);
    }

    return array(
        'form' => $form,
    );
}



/**
 * Delete action
 * @var integer $id Id of the entity
 * @return View
 */
public function deleteAction($id)
{
    $entity = $this->getEntity($id);

    $em = $this->getDoctrine()->getManager();
    $em->remove($entity);
    $em->flush();

    return $this->view(null, Codes::HTTP_NO_CONTENT);
}


/**
 * Collection post action
 * @var Request $request
 * @return View|array
 */
public function cpostAction(Request $request)
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
                    'get_favoris',
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







