<?php

namespace Souk\BackBundle\Controller;

use Souk\BackBundle\Entity\Evennements;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SignalsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $annoncesSig = $em->getRepository('BackBundle:Annonces')->signales();
        $evennementSig = $em->getRepository('BackBundle:Evennements')->signales();

        return $this->render('BackBundle:Signals:index.html.twig', array(
            "anc"=>$annoncesSig, "ev"=>$evennementSig
        ));

    }

    public function showAction(Request $request, $evennement)
    {
        //cnx bd
        $em = $this->getDoctrine()->getManager();
        //extraire la liste des signals d'un evennement
        $coms = $em->getRepository('BackBundle:SignalsEvs')->findBy(array("evennement"=>$evennement));
        $evennement = $em->getRepository('BackBundle:Evennements')->find($evennement);;
        return $this->render('BackBundle:Signals:show.html.twig',
            array('coms'=>$coms,'evennement'=>$evennement)
        );
    }

    public function consulterAction(Request $request,$annonce)
    {
        //cnx bd
        $em = $this->getDoctrine()->getManager();
        //extraire la liste des signals d'une annonce
        $coms = $em->getRepository('BackBundle:SignalsAnc')->findBy(array("annonce" => $annonce));
        $annonce = $em->getRepository('BackBundle:Annonces')->find($annonce);;

        return $this->render('BackBundle:Signals:consulter.html.twig', array('coms' => $coms,'annonce'=>$annonce));
    }

    public function deleteEvAction($evennement)
    {

        $em = $this->getDoctrine()->getManager();
        $Evs_sig = $em->getRepository('BackBundle:Evennements')->find($evennement);
        $em->remove($Evs_sig);
        $em->flush();
        return $this->redirectToRoute('index');

    }

    public function deleteAncAction($annonce)
    {
        $em = $this->getDoctrine()->getManager();
        $Anc_sig = $em->getRepository('BackBundle:Annonces')->find($annonce);
        $em->remove($Anc_sig);
        $em->flush();
        return $this->redirectToRoute('index');

    }

}
