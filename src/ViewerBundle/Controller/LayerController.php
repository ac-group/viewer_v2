<?php

namespace ViewerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ViewerBundle\Entity\Layer;
use Symfony\Component\HttpFoundation\Response;


/**
 * Documents controller.
 *
 */
class LayerController extends Controller
{

    public function getAllAction()
    {
        $em = $this->getDoctrine()->getManager();

        $layers = $em->getRepository('ViewerBundle:Layer')->findAll();
        $serializedEntity = $this->container->get('serializer')->serialize($layers, 'json');

        return new Response($serializedEntity);
    }

        public function getActiveAction()
    {
        $em = $this->getDoctrine()->getManager();

        $layers = $em->getRepository('ViewerBundle:Layer')->findBy(array('active' => true));
        $serializedEntity = $this->container->get('serializer')->serialize($layers, 'json');

        return new Response($serializedEntity);
    }
}
