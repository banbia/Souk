<?php

namespace Souk\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\CommentairesAnc;
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
        $com_Anc =new CommentairesAnc();

        $form = $this->createForm(CommentairesAncType::class,$com_Anc);

        $formView=$form->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {

            $cm->persist($com_Anc);
            $cm->flush();
        }
            return $this->render('FrontBundle:commentairesAnc:new_commentairesAnc.html.twig',array('coms'=>$coms));
    }

    /**
     * @Route("/delete_com", name="commentairesAnc_delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $film = $em->getRepository('BackBundle:CommentairesAnc')->find($id);
        $em->remove($film);
        $em->flush();

        return $this->redirectToRoute('commentairesAnc_new');

    }

    /**
     * @Route("/all_com", name="commentairesAnc_liste")
     */
    public function allAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $com = $em->getRepository('BackBundle:CommentairesAnc')->findAll();

        return $this->render('FrontBundle:commentairesAnc:new_commentairesAnc.html.twig', array(
            'CommentairesAnc' => $com,
        ));
    }

}