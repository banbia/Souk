<?php

namespace Souk\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\SignalsAnc;
use Souk\BackBundle\Form\SignalsAncType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SignalsAncController extends Controller
{
    /**
     * @Route("/signalsAncN/{annonce}", name="signalsAncN_new")
     */
    public function newAction(Request $request,$annonce)
    {

        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //ajout d'un noveau signal
        $sig_Anc =new SignalsAnc();
        ///récupérer annonce
        $annonces = $cm->getRepository('BackBundle:Annonces')->find($annonce);
        ///récupérer user
        $user = $this->getUser();
        $form = $this->createForm(SignalsAncType::class,$sig_Anc);

        $formView=$form->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $sig_Anc->setDateSg(new \DateTime('now'));
            $sig_Anc->setClient($user);
            $sig_Anc->setAnnonce($annonces);
            $cm->persist($sig_Anc);
            $cm->flush();
            return $this->redirectToRoute('commentairesAnc_new',array("annonce"=>$annonce));
        }


        return $this->render('FrontBundle:signalsAnc:signal_Anc.html.twig',array('form'=>$formView,'annonce'=>$annonces));
    }
}
