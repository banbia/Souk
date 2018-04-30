<?php

namespace Souk\BackBundle\Controller;

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

    public function showAction(Request $request,$evennement)
    {
        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //extraire la liste des signals d'un evennement
        $coms = $cm->getRepository('BackBundle:SignalsEvs')->findBy(array("evennement"=>$evennement));

        return $this->render('BackBundle:Signals:show.html.twig', array('coms'=>$coms));
    }

    public function consulterAction(Request $request,$annonce)
    {
        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //extraire la liste des signals d'une annonce
        $coms = $cm->getRepository('BackBundle:SignalsAnc')->findBy(array("annonce" => $annonce));
        return $this->render('BackBundle:Signals:consulter.html.twig', array('coms' => $coms));
    }

    public function deleteEvAction()
    {


        return $this->render('BackBundle:Signals:delete_ev.html.twig', array(  ));
    }

    public function deleteAncAction()
    {


        return $this->render('BackBundle:Signals:delete_anc.html.twig', array( ));
    }

}
