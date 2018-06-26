<?php

namespace Souk\ApiBundle\Controller;

use Souk\BackBundle\Entity\Annonces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

class CategorieApiController extends Controller
{

  ///get all categorie
  public function lstCategorieAction()
  {

    $categorie=$this->getDoctrine()->getRepository('BackBundle:Categories')->findAll();


    $normalizer = new ObjectNormalizer();
    $normalizer->setIgnoredAttributes(array('annonce'));

    $normalizer->setCircularReferenceLimit(1);
    $serializer = new Serializer([$normalizer]);
    $normalizer->setCircularReferenceHandler(function ($object) {
      return $object->getId();
    });

    /* $serializer = new Serializer(array($normalizer), array(new JsonEncoder()));*/
    $formatted= $serializer->normalize($categorie, 'json');
    return new JsonResponse($formatted);
  }

}
