<?php

namespace Souk\FrontBundle\Controller;

use Souk\BackBundle\Entity\Abonnements;
use Souk\BackBundle\Entity\HistoriqueAbs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ComAbonnementsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $histoabo = $em->getRepository('BackBundle:HistoriqueAbs')->findBy(array('commercial'=>$user));
        $abs = $em->getRepository('BackBundle:Abonnements')->findAll();

        return $this->render('FrontBundle:ComAbonnement:ComAbonnement.html.twig', array(
            'histoabo' => $histoabo,
            'abs' => $abs,
        ));
    }
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $histoabo = $em->getRepository('BackBundle:HistoriqueAbs')->findBy(array('commercial'=>$user));

        return $this->render('BackBundle:ComAbonnement:ComAbonnement.html.twig', array(
            'histoabo' => $histoabo,
        ));
    }
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $histoabo = $em->getRepository('BackBundle:HistoriqueAbs')->findBy(array('commercial'=>$user));

        return $this->render('BackBundle:ComAbonnement:ComAbonnement.html.twig', array(
            'histoabo' => $histoabo,
        ));
    }
}
