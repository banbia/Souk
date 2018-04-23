<?php

namespace Souk\BackBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\Reclamations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AdminReclamationsController extends Controller
{
    /**
     * Lists all reclamation entities.
     * @Route("/", name="admin_reclamations_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('BackBundle:Reclamations')->findAll();

        return $this->render('BackBundle:reclamations:index.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }

    //0=>en attente
    //1=>confirme par admin
    //-1=>rejeté


    /**
     * Displays a form to edit an existing reclamation entity.
     *
     */
    public function editAction(Request $request, Reclamations $reclamation)
    {
        $editForm = $this->createForm('Souk\BackBundle\Form\ReclamationsType', $reclamation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamations_edit', array('id' => $reclamation->getId()));
        }

        return $this->render('BackBundle:reclamations:edit.html.twig', array(
            'reclamation' => $reclamation,
            'edit' => $editForm->createView(),
        ));
    }

}