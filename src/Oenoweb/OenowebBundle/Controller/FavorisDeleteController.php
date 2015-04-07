<?php
namespace Oenoweb/OenowebBundle/Controller;

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