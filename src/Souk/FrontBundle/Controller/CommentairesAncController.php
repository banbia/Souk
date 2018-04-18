<?php

namespace Souk\FrontBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\CommentairesAnc;
use Souk\BackBundle\Entity\Annonces;

use Souk\BackBundle\Form\CommentairesAncType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


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
        $annonces = $cm->getRepository('BackBundle:Annonces')->find($annonce);
        ///récupérer user
        $user = $this->getUser();
        $form = $this->createForm(CommentairesAncType::class,$com_Anc);

        $formView=$form->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $com_Anc->setDateCmt(new \DateTime('now'));
            $com_Anc->setClient($user);
            $com_Anc->setAnnonce($annonces);
            $cm->persist($com_Anc);
            $cm->flush();
            return $this->redirectToRoute('commentairesAnc_new',array("annonce"=>$annonce));
        }


            return $this->render('FrontBundle:commentairesAnc:new_commentairesAnc.html.twig',array('coms'=>$coms,'form'=>$formView,'annonce'=>$annonces));
    }

    /**
     * @Route("/delete_com/{$com}/{$annonce}", name="commentairesAnc_delete")
     */
    public function deleteAction($com,$annonce)
    {
        $em = $this->getDoctrine()->getManager();
        $comm = $em->getRepository('BackBundle:CommentairesAnc')->find($com);
        $em->remove($comm);
        $em->flush();

        return $this->redirectToRoute('commentairesAnc_new',array("annonce"=>$annonce));
    }
    /**
     * @Route("/Edit_com/{$com}/{$annonce}", name="commentairesAnc_Edit")
     */
    public function editAction(Request $request,$com,$annonce)
    {
        $em = $this->getDoctrine()->getManager();
        $com_Anc = $em->getRepository('BackBundle:CommentairesAnc')->find($com);
        $form=$this->createForm( CommentairesAncType::class,$com_Anc);
        ///récupérer annonce
        $annonces = $em->getRepository('BackBundle:Annonces')->find($annonce);
        $formView=$form->createView();
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid())
        {
            $em->persist($com_Anc);
            $em->flush();

            return $this->redirectToRoute('commentairesAnc_new',array("annonce"=>$annonce));
        }
        return $this->render('FrontBundle:commentairesAnc:edit_commantaireAnc.html.twig',array('form'=>$formView,'annonce'=>$annonces));
    }

    public function allAction(Request $request){
        $com_Anc = $this->getDoctrine()->getManager()
            ->getRepository('BackBundle:CommentairesAnc')
            ->findAll();
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($com_Anc, 'json');

        return new JsonResponse($formatted);
    }



    public function findAction($id)
    {
        $com_Anc = $this->getDoctrine()->getManager()
            ->getRepository('BackBundle:CommentairesAnc')
            ->find($id);
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($com_Anc, 'json');

        return new JsonResponse($formatted);
    }

    public function newAncAction(Request $request,$annonce)
    {
        $em = $this->getDoctrine()->getManager();
        $com_Anc= new CommentairesAnc();
        $user = $this->getUser();
        $anonnces = $em->getRepository('BackBundle:Annonces')->find($annonce);
        $com_Anc->setDateCmt(new \DateTime('now'));
        $com_Anc->setClient($user);
        $com_Anc->setAnnonce($anonnces);
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($com_Anc, 'json');

        return new JsonResponse($formatted);

    }
}