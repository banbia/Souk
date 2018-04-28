<?php

namespace Souk\BackBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
class SignalsAncController extends Controller
{
    /**
     * @Route("/signalsAnc/{$annonce}", name="signalsAnc_all")
     */
    public function allAction(Request $request, $annonce)
    {
        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //extraire la liste des signals d'une annonce
        $coms = $cm->getRepository('BackBundle:SignalsAnc')->findBy(array("annonce" => $annonce));
        return $this->render('BackBundle:signalsAnc:listeSignalsAnc.html.twig', array('coms' => $coms));
    }

    // delete des signals de l'Evs

    /**
     * @Route("/delete_sig_Evs/{$signalAnc}/{$sig}", name="signalEvs_delete")
     */
    public function deleteAction($sig, $signalAnc)
    {
        $em = $this->getDoctrine()->getManager();
        $sig_Evs = $em->getRepository('BackBundle:SignalsAnc')->find($sig);
        $em->remove($sig_Evs);
        $em->flush();
        return $this->redirectToRoute('signalsAnc_all', array("id" => $signalAnc));
    }
}
