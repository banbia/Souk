<?php

namespace Souk\ApiBundle\Controller;
use Souk\BackBundle\Entity\Images;

use Souk\BackBundle\Entity\Annonces;
use Souk\BackBundle\Entity\Rating;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

class RatingApiController extends Controller
{

  //nouvelle rating
  public function createAction($client,$vote,$annonces)
  {
    //connexion
    $em = $this->getDoctrine()->getManager();
    //get commercial and categorie object
    $client = $em->getRepository('UserBundle:User')->find($client);
    $annonces = $em->getRepository('BackBundle:Annonces')->find($annonces);

    //instance rating
    $rating= new Rating();
    //affecter les champs
      $rating->setClient($client);
      $rating->setAnnonce($annonces);
      $rating->setVote($vote);
      $em->persist($rating);

      $em->flush();






      $normalizer = new ObjectNormalizer();

    $serializer = new Serializer([$normalizer]);


    $formatted= $serializer->normalize( "succes", 'json');

    return new JsonResponse($formatted);

  }

}

