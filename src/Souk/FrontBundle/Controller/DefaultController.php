<?php

namespace Souk\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('BackBundle:Annonces')->findAllOrderedByDate();
      $gategories = $em->getRepository('BackBundle:Categories')->findAll();

      return $this->render('FrontBundle:default:index.html.twig',array(
            'annonces' => $annonces,'categories' => $gategories,));
    }
  public function listeruserbyCategorieAction($categorie,Request $request)
  {

    $em = $this->getDoctrine()->getManager();
    $cat = $em->getRepository('BackBundle:Categories')->find($categorie);
    $gategories = $em->getRepository('BackBundle:Categories')->findAll();
    $annonces = $em->getRepository('BackBundle:Annonces')->findBy(array('categorie' => $cat));


    return $this->render('FrontBundle:default:index.html.twig',array(
      'categories' => $gategories,'annonces' =>$result,));
  }
}
