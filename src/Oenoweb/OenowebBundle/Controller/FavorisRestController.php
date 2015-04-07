<?php

namespace Oenoweb\OenowebBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


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
