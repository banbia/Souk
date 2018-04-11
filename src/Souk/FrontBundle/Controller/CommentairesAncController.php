<?php

namespace Souk\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\CommentairesAnc;
use Souk\BackBundle\Entity\Annonces;

use Souk\BackBundle\Form\CommentairesAncType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class CommentairesAncController extends Controller
{
    /**
     * @Route("/annonce/{$annonce}", name="commentairesAnc_new")
     */
    public function newAction(Request $request,$annonce)
    {
        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //extraire la liste des commentaires d'une annonce
        $coms = $cm->getRepository('BackBundle:CommentairesAnc')->findBy(array("annonce"=>$annonce));
        //ajout d'un noveau commentaire
        $com_Anc =new CommentairesAnc();
        ///récupérer annonce
        $anonnces = $cm->getRepository('BackBundle:Annonces')->find($annonce);
        ///récupérer user
        $user = $this->getUser();
        $form = $this->createForm(CommentairesAncType::class,$com_Anc);

        $formView=$form->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $com_Anc->setDateCmt(new \DateTime('now'));
            $com_Anc->setClient($user);
            $com_Anc->setAnnonce($anonnces);
            $cm->persist($com_Anc);
            $cm->flush();
        }


            return $this->render('FrontBundle:commentairesAnc:new_commentairesAnc.html.twig',array('coms'=>$coms,'form'=>$formView));
    }

    /**
     * @Route("/delete_com/{id_Anc}", name="commentairesAnc_delete")
     */
    public function deleteAction($id_Anc)
    {
        $em = $this->getDoctrine()->getManager();
        $comm = $em->getRepository('BackBundle:CommentairesAnc')->find($id_Anc);
        $em->remove($comm);
        $em->flush();

        return $this->redirectToRoute('commentairesAnc_new');

    }



}