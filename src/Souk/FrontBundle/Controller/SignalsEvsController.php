<?php

namespace Souk\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\SignalsEvs;
use Souk\BackBundle\Form\SignalsEvsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SignalsEvsController extends Controller
{
    /**
     * @Route("/signalsEvsN/{evennement}", name="signalsEvsN_new")
     */
    public function newAction(Request $request,$evennement)
    {

        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //ajout d'un noveau signal
        $sig_Evs =new SignalsEvs();
        ///récupérer Evennements
        $evennements = $cm->getRepository('BackBundle:Evennements')->find($evennement);
        ///récupérer user
        $user = $this->getUser();
        $form = $this->createForm(SignalsEvsType::class,$sig_Evs);

        //$formView=$form->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $sig_Evs->setDateSg(new \DateTime('now'));
            $sig_Evs->setClient($user);
            $sig_Evs->setEvennement($evennements);
            $cm->persist($sig_Evs);
            $cm->flush();
            return $this->redirectToRoute('commentairesEvs_new',array("evennement"=>$evennement));
        }


        return $this->render('FrontBundle:signalsEvs:signalEvs.html.twig',array('evennement'=>$evennements,'form'=>$form->createView()));
    }

}
