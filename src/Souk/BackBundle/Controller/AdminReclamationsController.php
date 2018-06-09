<?php

namespace Souk\BackBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\Reclamations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AdminReclamationsController extends Controller
{
    /**
     * Lists all reclamations.yml entities.
     * @Route("/", name="admin_reclamations_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->createQuery("SELECT d FROM BackBundle:Reclamations d order by d.dateRec desc")->getResult();

        return $this->render('BackBundle:reclamations:index.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }


    /**
     * Displays a form to edit an existing reclamations.yml entity.
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
            'reclamations.yml' => $reclamation,
            'edit' => $editForm->createView(),
        ));
    }


    public function accepterAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('BackBundle:Reclamations')->find($id);

        $reclamations->setEtat(1);
        $em->persist($reclamations);
        $em->flush();

        return $this->redirectToRoute('admin_reclamations_index');

    }


    /**
     * @Route("/refuser/{id}", name="admin_reclamations_refuser")
     */
    public function refuserAction(Request $request,$id )
    {

        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('BackBundle:Reclamations')->find($id);

        $reclamations->setEtat(-1);
        $em->persist($reclamations);
        $em->flush();

        return $this->redirectToRoute('admin_reclamations_index');

    }

}