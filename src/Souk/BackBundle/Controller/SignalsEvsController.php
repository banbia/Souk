<?php

namespace Souk\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
class SignalsEvsController extends Controller
{

    /**
     * @Route("/signalsEvs/{evennement}", name="signalsEvs_all")
     */
    public function allAction(Request $request,$evennement)
    {
        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //extraire la liste des signals d'un evennement
        $coms = $cm->getRepository('BackBundle:SignalsEvs')->findBy(array("evennement"=>$evennement));
        return $this->render('BackBundle:signalsEvs:listeSignalsEvs.html.twig',array('coms'=>$coms));
    }
}
