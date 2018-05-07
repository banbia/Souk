<?php

namespace Souk\FrontBundle\Controller;

use Souk\BackBundle\Entity\Abonnements;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ComAbonnementsController extends Controller
{

    public function newAction(Request $request)
    {
        $abonnement = new Abonnements();
        $form = $this->createForm('Souk\BackBundle\Form\AbonnementsType', $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($abonnement);
            $em->flush();

            return $this->redirectToRoute('abonnements_show', array('id' => $abonnement->getId()));
        }

        return $this->render('BackBundle:abonnements:new.html.twig', array(
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ));
    }
}
