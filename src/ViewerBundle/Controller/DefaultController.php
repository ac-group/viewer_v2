<?php

namespace ViewerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
        
class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $layers = $em->getRepository('ViewerBundle:Layer')->findBy(array('active' => true));
        $serializedEntity = $this->container->get('serializer')->serialize($layers, 'json');
        
//        $encoder = new JsonEncoder(new JsonEncode(JSON_UNESCAPED_SLASHES), new JsonDecode(false));
//        $serializedEntity=$encoder->encode($layers,'json');
//        var_dump($serializedEntity);        die();
        return $this->render('ViewerBundle:Default:index.html.twig', array('layers'=>$serializedEntity));
    }

    public function maplinkAction(Request $request) {
        $zoom = $request->get('zoom');
        $x = $request->get('x');
        $y = $request->get('y');
        return $this->render('ViewerBundle:Default:index.html.twig');
    }

    public function setlangAction(Request $request) {
        if($request->get('lang')=='en') {
            $this->get('translator')->setLocale('en');
            $this->get('translator')->setFallbackLocales(array('en'));
            $this->get('session')->set('_locale', 'en');
        } else {
            $this->get('translator')->setLocale('uk');
            $this->get('translator')->setFallbackLocales(array('uk'));
            $this->get('session')->set('_locale', 'uk');
        }
        return new JsonResponse($this->get('translator')->getLocale(),200);
    }

}
