<?php

namespace ViewerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ViewerBundle:Default:index.html.twig');
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
