<?php

namespace Souk\FrontBundle\Controller;

use Souk\BackBundle\Entity\Annonces;
use Souk\BackBundle\Entity\Commandes;
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
    public function showAction(Request $request,Annonces $annonce)
    {
        /* Nour's Work Start*/
        $commande = new Commandes();
        $form = $this->createForm('Souk\BackBundle\Form\CommandesType', $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $commande->setAnnonce($annonce);
            //var_dump('<pre>'.$commande->getDateCom().'</pre>');die;
            $now = new \DateTime($commande->getDateCom());
            $commande->setDateCom($now);
            $commande->setEtat(0);//0 => en attente
            $user = $this->getUser();
            $commande->setClient($user);
            $em->persist($commande);

            $commandes_confirme = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user,"etat"=>1));
            $commandes_attente = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user,"etat"=>0));
            $commandes = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user));
            $em->flush();
            return $this->render('FrontBundle:commandes:index.html.twig', array(
                'commandes' => $commandes,
                'commandes_attente' => $commandes_attente,
                'commandes_confirme' => $commandes_confirme,
            ));
            //return $this->redirectToRoute('commandes_show', array('id' => $commande->getId()));
        }
        /* Nour's Work End*/
        return $this->render('FrontBundle:annonces:show.html.twig', array(
            'annonce' => $annonce,
            'commande' => $commande,
            'form' => $form->createView(),

        ));
    }


}
