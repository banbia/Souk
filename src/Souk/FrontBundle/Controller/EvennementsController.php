<?php

namespace Souk\FrontBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\CommentairesEvs;
use Souk\BackBundle\Entity\Evennements;
use Souk\BackBundle\Entity\Reservation;
use Souk\BackBundle\Form\CommentairesEvsType;
use Souk\BackBundle\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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
            $evennement->setEtat(1);//0 disponible
            $user = $this->getUser();
            $now = new \DateTime('NOW');
            $evennement->setDateDeb($now);
            $evennement->setCommercial($user);
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
     * Displays participants list in the evennement entity.
     *
     */
    public function listeParAction (Request $request,Reservation $evennement){
        $em = $this->getDoctrine()->getManager();

        $liste_part = $em->getRepository('BackBundle:Reservation')->findBy(array('evennement'=>$evennement));
        return $this->render('FrontBundle:evennements:liste_des_participants.html.twig', array(
            'parts'=>$liste_part
        ));

    }

    /**
     * Finds and displays a evennement entity.
     *
     */
    public function showAction(Request $request,Evennements $evennement)

    {
        /* safa Boufare Begin*/
        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //extraire la liste des commentaires d'un Evs
        $comsEvs = $cm->getRepository('BackBundle:CommentairesEvs')->findBy(array("evennement"=>$evennement->getId()));
        //ajout d'un noveau commentaire Evs

        $com_Evs =new CommentairesEvs();

        $formC = $this->createForm(CommentairesEvsType::class,$com_Evs);

        $formViewC=$formC->createView();
        $reservation = new Reservation();
        $form = $this->createForm('Souk\BackBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $client = $this->getUser();

            $reservation->setClient($client);
            $now = new \DateTime('NOW');
            $reservation->setDateRes($now);
            $reservation->setEvennement($evennement);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('reservation_show', array('id' => $reservation->getId()));
        }
        $formC->handleRequest($request);
         if ($formC->isSubmitted()&& $formC->isValid()) {
             ///récupérer user
             $user = $this->getUser();
             $com_Evs->setDateCmt(new \DateTime('now'));
             $com_Evs->setClient($user);
             $com_Evs->setEvennement($evennement);
             $cm->persist($com_Evs);
             $cm->flush();
             return $this->redirectToRoute('evennements_show',array("id"=>$evennement->getId()));
         }

        return $this->render('FrontBundle:evennements:show.html.twig', array(
            'evennement' => $evennement,
            'reservation' => $reservation,

            'comsEvs'=>$comsEvs,

            'comEvs'=>$comsEvs,

            'form' => $form->createView(),
            'formC'=>$formViewC));
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

    // delete des comm de l'Evs
    public function deleteComEvsAction($com,$evennement)
    {
        $em = $this->getDoctrine()->getManager();
        $comm_Evs = $em->getRepository('BackBundle:commentairesEvs')->find($com);
        $em->remove($comm_Evs);
        $em->flush();
        return $this->redirectToRoute('evennements_show',array("id"=>$evennement));

    }
    // edit des comm de l'Anc
    public function editComEvsAction(Request $request,$evennement,$com)
    {
        $em = $this->getDoctrine()->getManager();
        $com_Evs = $em->getRepository('BackBundle:commentairesEvs')->find($com);
        $form=$this->createForm( CommentairesEvsType::class,$com_Evs);
        ///récupérer evennement
        $evennements = $em->getRepository('BackBundle:Evennements')->find($evennement);
        $formView=$form->createView();
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid())
        {
            $em->persist($com_Evs);
            $em->flush();

            return $this->redirectToRoute('evennements_show',array("id"=>$evennement));
        }
        return $this->render('FrontBundle:evennements:edit_commentaireEvs.html.twig',array('form'=>$formView,'evennement'=>$evennements));
    }

    //services web pour comm Evs

    public function allAction(Request $request){
        $com_Anc = $this->getDoctrine()->getManager()
            ->getRepository('BackBundle:commentairesEvs')
            ->findAll();
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($com_Anc, 'json');

        return new JsonResponse($formatted);
    }

    public function findAction($id)
    {
        $com_Anc = $this->getDoctrine()->getManager()
            ->getRepository('BackBundle:commentairesEvs')
            ->find($id);
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($com_Anc, 'json');

        return new JsonResponse($formatted);
    }

    public function newEvsSAction(Request $request,$evennement,$contnu)
    {
        $em = $this->getDoctrine()->getManager();
        $com_Evs= new CommentairesEvs();
        $user = $this->getUser();
        $evennements = $em->getRepository('BackBundle:Evennements')->find($evennement);
        $com_Evs->setDateCmt(new \DateTime('now'));
        $com_Evs->setClient($user);
        $com_Evs->setEvennement($evennements);
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($com_Evs, 'json');

        return new JsonResponse($formatted);

    }
}
