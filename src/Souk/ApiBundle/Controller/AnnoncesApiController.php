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


///get all annonce by Id
  public function GetAnnonceByIdAction($id )
  {

    $annonce=$this->getDoctrine()->getRepository('BackBundle:Annonces')->find($id);
    /*
     $formatted= $serializer->normalize($annonce,'json');
     return new JsonResponse($formatted);*/
    $normalizer = new ObjectNormalizer();

    $callback = function ($dateTime) {
      return $dateTime instanceof \DateTime
        ? $dateTime->format('Y-m-d')
        : '';
    };



    $normalizer->setIgnoredAttributes(array('client'));
    $normalizer->setCallbacks(array('dateCreation' => $callback));
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
