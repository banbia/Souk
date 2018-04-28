<?php

namespace Souk\FrontBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\CommentairesEvs;
use Souk\BackBundle\Form\CommentairesEvsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $coms_Evs = $cm->getRepository('BackBundle:CommentairesEvs')->findBy(array("evennement"=>$evennement));
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
     * @Route("/delete_com_Evs/{$evennement}/{$com}", name="commentairesEvs_delete")
     */
    public function deleteAction($com,$evennement)
    {
        $em = $this->getDoctrine()->getManager();
        $comm_Evs = $em->getRepository('BackBundle:commentairesEvs')->find($com);
        $em->remove($comm_Evs);
        $em->flush();
        return $this->redirectToRoute('commentairesEvs_new',array("evennement"=>$evennement));

    }

    /**
     * @Route("/Edit_com_Evs/{$evennement}/{$com}", name="commentairesEvs_Edit")
     */
    public function editAction(Request $request,$evennement,$com)
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

            return $this->redirectToRoute('commentairesEvs_new',array("evennement"=>$evennement));
        }
        return $this->render('FrontBundle:commentairesEvs:edit_commentaireEvs.html.twig',array('form'=>$formView,'evennement'=>$evennements));
    }

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

    public function newEvsAction(Request $request,$evennement)
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
