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

    public function demandesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandes = $em->getRepository('BackBundle:HistoriqueAbs')->findBy(array("etat"=>0));

        return $this->render('BackBundle:abonnements:demandes.html.twig', array(
            'demandes' => $demandes,
        ));
    }
    public function validerAction(Request $request,$id,$nb)
    {
        $em = $this->getDoctrine()->getManager();

        $demande = $em->getRepository('BackBundle:HistoriqueAbs')->find($id);

        $demande->setEtat(1);

        $em->persist($demande);
        $user = $em->getRepository('UserBundle:User')->find($demande->getCommercial());

        if(is_null($user->getDateFinAb())){

            date_default_timezone_set( 'Africa/Tunis' );
            $date = new \DateTime('now');
        }else{
            $date = $user->getDateFinAb();

        }
        $nb = $nb+1;
        $date = $date->format('Y-m-d');
        $p = "+".$nb." months";
        //var_dump($date);
        $x = strtotime($p, strtotime($date));
        $new = new \DateTime();
        $new->format('Y-m-d');
        $user->setDateFinAb($new);
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('abonnements_demandes');

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

            return $this->redirectToRoute('abonnements_index', array('id' => $abonnement->getId()));
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
    /**
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
     *  */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $abonnement = $em->getRepository('BackBundle:Abonnements')->find($id);

        $em->remove($abonnement);
        $em->flush();
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
