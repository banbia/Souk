<?php

namespace Souk\ApiBundle\Controller;
use Souk\BackBundle\Entity\Images;

use Souk\BackBundle\Entity\Annonces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

class ImageApiController extends Controller
{


  ///recuperer les image selon id  annonce

  public function GetImageByIdAction($id )
  {

    $image=$this->getDoctrine()->getRepository('BackBundle:Images')->findBy(array("annonce"=>$id));
    /*
     $formatted= $serializer->normalize($annonce,'json');
     return new JsonResponse($formatted);*/
    $normalizer = new ObjectNormalizer();

    $callback = function ($dateTime) {
      return $dateTime instanceof \DateTime
        ? $dateTime->format('Y-m-d')
        : '';
    };



    $normalizer->setIgnoredAttributes(array('commercial','client','commandes','commentaires','signalsAnc','annonce'));
    $normalizer->setCallbacks(array('update_at' => $callback));
    $normalizer->setCircularReferenceLimit(1);
    $serializer = new Serializer([$normalizer]);

    $normalizer->setCircularReferenceHandler(function ($object) {
      return $object->getId();
    });

    /* $serializer = new Serializer(array($normalizer), array(new JsonEncoder()));*/
    $formatted= $serializer->normalize($image, 'json');
    return new JsonResponse($formatted);
  }
}

