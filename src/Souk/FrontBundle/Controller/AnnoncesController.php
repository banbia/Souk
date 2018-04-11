<?php

namespace Souk\FrontBundle\Controller;

use Souk\BackBundle\Entity\Annonces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Annonce controller.
 *
 */
class AnnoncesController extends Controller
{
    /**
     * Lists all annonce entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('BackBundle:Annonces')->findAll();

        return $this->render('FrontBundle:annonces:index.html.twig', array(
            'annonces' => $annonces,
        ));
    }

    /**
     * Finds and displays a annonce entity.
     *
     */
    public function showAction(Annonces $annonce)
    {

        return $this->render('FrontBundle:annonces:show.html.twig', array(
            'annonce' => $annonce,

        ));
    }


}
