<?php

namespace Souk\BackBundle\Controller;

use Souk\BackBundle\Entity\Abonnements;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Abonnement controller.
 *
 */
class AbonnementsController extends Controller
{
    /**
     * Lists all abonnement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $abonnements = $em->getRepository('BackBundle:Abonnements')->findAll();

        return $this->render('BackBundle:abonnements:index.html.twig', array(
            'abonnements' => $abonnements,
        ));
    }

    /**
     * Creates a new abonnement entity.
     *
     */
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

    /**
     * Finds and displays a abonnement entity.
     *
     */
    public function showAction(Abonnements $abonnement)
    {
        $deleteForm = $this->createDeleteForm($abonnement);

        return $this->render('BackBundle:abonnements:show.html.twig', array(
            'abonnement' => $abonnement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing abonnement entity.
     *
     */
    public function editAction(Request $request, Abonnements $abonnement)
    {
        $deleteForm = $this->createDeleteForm($abonnement);
        $editForm = $this->createForm('Souk\BackBundle\Form\AbonnementsType', $abonnement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('abonnements_edit', array('id' => $abonnement->getId()));
        }

        return $this->render('BackBundle:abonnements:edit.html.twig', array(
            'abonnement' => $abonnement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a abonnement entity.
     *
     */
    public function deleteAction(Request $request, Abonnements $abonnement)
    {
        $form = $this->createDeleteForm($abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($abonnement);
            $em->flush();
        }

        return $this->redirectToRoute('abonnements_index');
    }

    /**
     * Creates a form to delete a abonnement entity.
     *
     * @param Abonnements $abonnement The abonnement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Abonnements $abonnement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('abonnements_delete', array('id' => $abonnement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
