<?php

namespace Souk\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\Reclamations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reclamation controller.
 *@Route("reclamations")
 */
class ReclamationsController extends Controller
{
    /**
     * Lists all reclamations.yml entities.
     * @Route("/", name="reclamations_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        if ($request->getMethod() == "POST") {
            $user = $this->getUser();
            $p = $request->get('etat');
            if ($p != "") {

                if ($p == "Accepter")
                    $p = 1;
                elseif ($p == "Encours")
                    $p = 0;
                else
                    $p = -1;
                $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user, 'etat' => $p));
            } else {
                $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user));

            }
        } else
            $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user));

        return $this->render('FrontBundle:reclamations:index.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }

    /**
     * Creates a new reclamations.yml entity.
     * @Route("/new", name="reclamations_new")
     */
    public function newAction(Request $request)
    {
        $reclamation = new Reclamations();
        $form = $this->createForm('Souk\BackBundle\Form\ReclamationsType', $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $now = new \DateTime('NOW');
            $reclamation->setDateRec($now);
            $user = $this->getUser();
            $reclamation->setClient($user);
            //0=>en attente
            //1=>confirme par admin
            //-1=>rejeté
            $reclamation->setEtat(0);
            $em->persist($reclamation);
            $em->flush();

            return $this->redirectToRoute('reclamations_show', array('id' => $reclamation->getId()));
        }

        return $this->render('FrontBundle:reclamations:new.html.twig', array(
            'reclamations.yml' => $reclamation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Show.
     *
     */
    public function showAction(Reclamations $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('FrontBundle:reclamations:show.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reclamations.yml entity.
     *
     */
    public function editAction(Request $request, Reclamations $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);
        $editForm = $this->createForm('Souk\BackBundle\Form\ReclamationsType', $reclamation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamations_index', array('id' => $reclamation->getId()));
        }

        return $this->render('FrontBundle:reclamations:edit.html.twig', array(
            'reclamations.yml' => $reclamation,
            'edit' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));

    }


    /**
     * Deletes a reclamations.yml entity.
     *
     */
    public function deleteAction(Request $request, Reclamations $reclamation)
    {
        $form = $this->createDeleteForm($reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reclamation);
            $em->flush();
        }

        return $this->redirectToRoute('reclamations_index');
    }

    /**
     * Creates a form to delete a reclamations.yml entity.
     *
     * @param Reclamations $reclamation The reclamations.yml entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reclamations $reclamation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reclamations_delete', array('id' => $reclamation->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }


}
