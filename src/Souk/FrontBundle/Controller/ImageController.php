<?php
/**
 * Created by PhpStorm.
 * User: HAYFA
 * Date: 23/04/2018
 * Time: 20:00
 */

namespace Souk\FrontBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\Images;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Souk\BackBundle\Entity\Annonces;

class ImageController extends Controller
{


  public function newImageAction(Request $request, $annonce)
  {
    $image = new Images();
    $form = $this->createForm('Souk\BackBundle\Form\ImagesType', $image);
    $form->handleRequest($request);
    $em = $this->getDoctrine()->getManager();

    $annonces = $em->getRepository('BackBundle:Annonces')->find($annonce);

    if ($form->isSubmitted() && $form->isValid()) {

      $image->setUpdateAt(new \DateTime('now'));
      $image->setAnnonce($annonces);
      /*$image->setImageName();*/
      $em->persist($image);
      $em->flush();

      return $this->redirectToRoute('image_new', array('annonce' => $annonces->getId()));
    }

    return $this->render('FrontBundle:image:ajouterImage.html.twig', array(

      'formImage' => $form->createView(),
    ));
  }

}