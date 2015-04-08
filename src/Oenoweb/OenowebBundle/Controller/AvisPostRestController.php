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
#src/Oenoweb/OenowebBundle/Controller/AvisPostRestController.php
/**
 * Collection post action
 * @var Request $request
 * @return View|array
 */
class AvisPostRestController extends Controller  {

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
}