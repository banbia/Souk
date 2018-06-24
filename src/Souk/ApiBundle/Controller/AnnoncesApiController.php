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
    /* $serializer = new Serializer(array($normalizer), array(new JsonEncoder()));*/
    $formatted= $serializer->normalize($annonce, 'json');
    return new JsonResponse($formatted);
  }
  //nouvelle annonce
  public function createAction($commercial,$prix,$categorie,$description,$titre)
  {
    //connexion
    $em = $this->getDoctrine()->getManager();
    //get commercial and categorie object
    $commercial = $em->getRepository('UserBundle:User')->find($commercial);
    $categorie = $em->getRepository('BackBundle:Categories')->findBy($categorie);

    //instance annonce
    $annonce= new Annonces();
    //affecter les champs
    $annonce->setCommercial($commercial);
    $annonce->setCategorie($categorie);
    $annonce->setDescription($description);
    $annonce->setTitre($titre);

    $annonce->setPrix($prix);
    $annonce->setDisponible(true);


    $annonce->setDateCreation(new \DateTime('now'));
    $em->persist($annonce);

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
    $normalizer->setCallbacks(array('dateCretaion' => $callback));
    $normalizer->setCircularReferenceLimit(1);
    $serializer = new Serializer([$normalizer]);
    $normalizer->setCircularReferenceHandler(function ($object) {
      return $object->getId();
    });

    $formatted= $serializer->normalize($annonce, 'json');

    return new JsonResponse($formatted);

  }

//modifier annonce
  public function modifierAction($idannonces,$prix,$categorie,$description,$titre)
  {
    //connexion
    $em = $this->getDoctrine()->getManager();
    //get annonces and categorie object
    $annonce = $em->getRepository('BackBundle:Annonces')->find($idannonces);
    $categorie = $em->getRepository('BackBundle:Categories')->find($categorie);


    //affecter les champs

    $annonce->setCategorie($categorie);
    $annonce->setDescription($description);
    $annonce->setTitre($titre);

    $annonce->setPrix($prix);



    $em->persist($annonce);

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
    $normalizer->setCallbacks(array('dateCretaion' => $callback));
    $normalizer->setCircularReferenceLimit(1);
    $serializer = new Serializer([$normalizer]);
    $normalizer->setCircularReferenceHandler(function ($object) {
      return $object->getId();
    });

    $formatted= $serializer->normalize($annonce, 'json');

    return new JsonResponse($formatted);

  }
  ///delete annonce

  public function supprimerAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $annonce = $em->getRepository('BackBundle:Annonces')->find($id);
    $images = $em->getRepository('BackBundle:Images')->findBy(array("annonce" => $id));
    foreach ($images as $img ) {
      $em->remove($img);
    }
    $em->remove($annonce);
    $em->flush();



    $annonces = $em->getRepository('BackBundle:Annonces')->findAll();

    //format date
    $callback = function ($dateTime) {
      return $dateTime instanceof \DateTime
        ? $dateTime->format('Y-m-d')
        : '';
    };


    $normalizer = new ObjectNormalizer();
    //ne pas envoyer client,annonce,commentaires dans le retour json
    $normalizer->setIgnoredAttributes(array('client','annonce','commentaires'));
    $normalizer->setCallbacks(array('dateCretaion' => $callback));
    $normalizer->setCircularReferenceLimit(1);
    $serializer = new Serializer([$normalizer]);
    $normalizer->setCircularReferenceHandler(function ($object) {
      return $object->getId();
    });

    $formatted= $serializer->normalize($annonces, 'json');

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
