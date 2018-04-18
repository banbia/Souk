<?php

namespace Souk\FrontBundle\Controller;

use Souk\BackBundle\Entity\CommentairesEvs;
use Souk\BackBundle\Entity\Evennements;
use Souk\BackBundle\Form\CommentairesEvsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Evennement controller.
 *
 */
class EvennementsController extends Controller
{
    /**
     * Lists all evennement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $evennements = $em->getRepository('BackBundle:Evennements')->findAll();

        return $this->render('FrontBundle:evennements:index.html.twig', array(
            'evennements' => $evennements,
        ));
    }

    /**
     * Creates a new evennement entity.
     *
     */
    public function newAction(Request $request)
    {
        $evennement = new Evennements();
        $form = $this->createForm('Souk\BackBundle\Form\EvennementsType', $evennement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evennement);
            $em->flush();

            return $this->redirectToRoute('evennements_show', array('id' => $evennement->getId()));
        }

        return $this->render('FrontBundle:evennements:new.html.twig', array(
            'evennement' => $evennement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a evennement entity.
     *
     */
    public function showAction(Evennements $evennement)
    {
        $deleteForm = $this->createDeleteForm($evennement);

        return $this->render('FrontBundle:evennements:show.html.twig', array(
            'evennement' => $evennement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing evennement entity.
     *
     */
    public function editAction(Request $request, Evennements $evennement)
    {
        $deleteForm = $this->createDeleteForm($evennement);
        $editForm = $this->createForm('Souk\BackBundle\Form\EvennementsType', $evennement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('evennements_edit', array('id' => $evennement->getId()));
        }

        return $this->render('FrontBundle:evennements:edit.html.twig', array(
            'evennement' => $evennement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a evennement entity.
     *
     */
    public function deleteAction(Request $request, Evennements $evennement)
    {
        $form = $this->createDeleteForm($evennement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evennement);
            $em->flush();
        }

        return $this->redirectToRoute('evennements_index');
    }

    /**
     * Creates a form to delete a evennement entity.
     *
     * @param Evennements $evennement The evennement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Evennements $evennement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evennements_delete', array('id' => $evennement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    // Safa Boufares  commentaire Evs

    // Ajout des commentaires et les listees pour un Evs

    /**
     * @Route("/evennement/{$evennement}", name="commentairesEvs_new")
     */
    public function newEvsAction(Request $request,$evennement)
    {
        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //extraire la liste des commentaires d'un Evs
        $coms_Evs = $cm->getRepository('BackBundle:commentairesEvs')->findBy(array("evennement"=>$evennement));
        //ajout d'un noveau commentaire Evs
        $com_Evs =new CommentairesEvs();
        ///récupérer Evs
        $evennements = $cm->getRepository('BackBundle:Evennements')->find($evennement);
        ///récupérer user
        $user = $this->getUser();
        $form = $this->createForm(CommentairesEvsType::class,$com_Evs);

        $formView=$form->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $com_Evs->setDateCmt(new \DateTime('now'));
            $com_Evs->setClient($user);
            $com_Evs->setEvennement($evennements);
            $cm->persist($com_Evs);
            $cm->flush();
            return $this->redirectToRoute('commentairesEvs_new',array("evennement"=>$evennement));
        }


        return $this->render('FrontBundle:evennements:new_commentairesEvs.html.twig',array('coms_Evs'=>$coms_Evs,'form'=>$formView));
    }
}
