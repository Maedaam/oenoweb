<?php
#src/Oenoweb/OenowebBundle/Controller/FavorisPostController.php
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