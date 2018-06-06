<?php

namespace Souk\ApiBundle\Controller;

use Souk\UserBundle\Entity\Annonces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

class AnnoncesApiController extends Controller
{

  ///se connecter à traver l'application
  public function getAllAnnoncesAction()
  {

    $annonce=$this->getDoctrine()->getRepository('BackBundle:Annonces')->findAll();
   /*
    $formatted= $serializer->normalize($annonce,'json');
    return new JsonResponse($formatted);*/
    $normalizer = new ObjectNormalizer();
    $normalizer->setCircularReferenceLimit(1);
    $serializer = new Serializer([$normalizer]);
    $normalizer->setCircularReferenceHandler(function ($object) {
      return $object->getId();
    });

   /* $serializer = new Serializer(array($normalizer), array(new JsonEncoder()));*/
    $formatted= $serializer->normalize($annonce, 'json');
    return new JsonResponse($formatted);
  }


}