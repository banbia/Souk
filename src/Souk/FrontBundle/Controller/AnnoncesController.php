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

    /**
     * Creates a new annonce entity.
     *
     */
    public function newAction(Request $request)
    {
        $annonce = new Annonce();
        $form = $this->createForm('Souk\BackBundle\Form\AnnoncesType', $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirectToRoute('annonces_show', array('id' => $annonce->getId()));
        }

        return $this->render('FrontBundle:annonces:new.html.twig', array(
            'annonce' => $annonce,
            'form' => $form->createView(),
        ));
    }
    /**
     * Displays a form to edit an existing annonce entity.
     *
     */
    public function editAction(Request $request, Annonces $annonce)
    {
        $deleteForm = $this->createDeleteForm($annonce);
        $editForm = $this->createForm('Souk\BackBundle\Form\AnnoncesType', $annonce);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('annonces_edit', array('id' => $annonce->getId()));
        }

        return $this->render('FrontBundle:annonces:edit.html.twig', array(
            'annonce' => $annonce,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a annonce entity.
     *
     */
    public function deleteAction(Request $request, Annonces $annonce)
    {
        $form = $this->createDeleteForm($annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($annonce);
            $em->flush();
        }

        return $this->redirectToRoute('annonces_index');
    }

    /**
     * Creates a form to delete a annonce entity.
     *
     * @param Annonces $annonce The annonce entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Annonces $annonce)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('annonces_delete', array('id' => $annonce->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
