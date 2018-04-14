<?php

namespace Souk\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('BackBundle:Annonces')->findAll();
        return $this->render('FrontBundle:default:index.html.twig',array(
            'annonces' => $annonces,));
    }

}
