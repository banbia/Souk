<?php

namespace Souk\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\CommentairesEvs;
use Souk\BackBundle\Form\CommentairesEvsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Souk\BackBundle\Entity\Evennements;

class CommentaireEvsController extends Controller
{
    /**
     * @Route("/evennement/{$evennement}", name="commentairesEvs_new")
     */
    public function newAction(Request $request,$evennement)
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


        return $this->render('FrontBundle:commentairesEvs:new_commentairesEvs.html.twig',array('coms_Evs'=>$coms_Evs,'form'=>$formView));
    }

    /**
     * @Route("/delete_com_Evs/{$id_Evs}", name="commentairesEvs_delete")
     */
    public function deleteAction($id_Evs)
    {
        $em = $this->getDoctrine()->getManager();
        $comm_Evs = $em->getRepository('BackBundle:commentairesEvs')->find($id_Evs);
        $em->remove($comm_Evs);
        $em->flush();

        return $this->redirectToRoute('commentairesEvs_new');

    }



}
