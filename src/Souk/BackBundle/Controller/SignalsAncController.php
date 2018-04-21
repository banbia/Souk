<?php

namespace Souk\BackBundle\Controller;

use Souk\BackBundle\Entity\SignalsAnc;
use Souk\BackBundle\Form\SignalsAncType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
class SignalsAncController extends Controller
{
    /**
     * @Route("/signalsAnc/{$annonce}", name="signalsAnc_all")
     */
    public function allAction(Request $request,$annonce)
    {
        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //extraire la liste des signals d'une annonce
        $coms = $cm->getRepository('BackBundle:SignalsAnc')->findBy(array("annonce"=>$annonce));
        return $this->render('BackBundle:signalsAnc:listeSignalsAnc.html.twig',array('coms'=>$coms));
    }
}
