<?php

namespace Souk\ApiBundle\Controller;

use Souk\BackBundle\Entity\Annonces;
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
      $callback = function ($dateTime) {
          return $dateTime instanceof \DateTime
              ? $dateTime->format('Y-m-d')
              : '';
      };


      $normalizer = new ObjectNormalizer();
      $normalizer->setIgnoredAttributes(array('commercial','client','commandes','commentaires','signalsAnc','images'));
      $normalizer->setCallbacks(array('dateCreation' => $callback));
      $normalizer->setCircularReferenceLimit(1);
      $serializer = new Serializer([$normalizer]);
      $normalizer->setCircularReferenceHandler(function ($object) {
          return $object->getId();
      });

      $formatted= $serializer->normalize($annonce, 'json');

      return new JsonResponse($formatted);
  }
  //nouvelle annonce
  public function createAction(Request $request,$annonce,$date,$quantite,$client)
  {
    //connexion
    $em = $this->getDoctrine()->getManager();
    //get annonce and client object
    $client = $em->getRepository('UserBundle:User')->find($client);
    $annonce = $em->getRepository('BackBundle:Annonces')->find($annonce);
    //instance commande
    $commande= new Commandes();
    //affecter les champs
    $commande->setAnnonce($annonce);
    $commande->setClient($client);
    $commande->setQuantite($quantite);
    $commande->setEtat(0);
    $commande->setDateCom(new \DateTime($date));

    $em->persist($commande);

    $em->flush();
    //format date
    $callback = function ($dateTime) {
      return $dateTime instanceof \DateTime
        ? $dateTime->format('Y-m-d')
        : '';
    };


    $normalizer = new ObjectNormalizer();
    //ne pas envoyer client,annonce,commentaires dans le retour json
    $normalizer->setIgnoredAttributes(array('client','annonce','commentaires'));
    $normalizer->setCallbacks(array('dateCom' => $callback));
    $normalizer->setCircularReferenceLimit(1);
    $serializer = new Serializer([$normalizer]);
    $normalizer->setCircularReferenceHandler(function ($object) {
      return $object->getId();
    });

    $formatted= $serializer->normalize($commande, 'json');

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
