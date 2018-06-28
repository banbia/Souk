<?php

namespace Souk\ApiBundle\Controller;


use JMS\Serializer\SerializerBuilder;
use Souk\BackBundle\Entity\Abonnements;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
class AbonnementApiController extends Controller
{
    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $abs=$em->getRepository('BackBundle:Abonnements')->findAll();


        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $formatted= $serializer->normalize($abs, 'json');

        return new JsonResponse($formatted);
    }

    //annuler/Supprimer abonnement
    public function deleteAction($ab)
    {
        //cnx
        $em = $this->getDoctrine()->getManager();
        //extraire l'objet abonnement
        $abon = $em->getRepository('BackBundle:Abonnements')->find($ab);
        $em->remove($abon);

        $em->flush();
        //retourner delete => ok comme resultat json
        $json = array("delete"=>"ok");
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            //return $object->getId();
        });

        $formatted= $serializer->normalize($json, 'json');

        return new JsonResponse($formatted);

    }

    //modifier abonnement
    public function modifierAction($id_ab,$designation,$description,$prix,$nbMois)
    {
        //cnx
        $em = $this->getDoctrine()->getManager();
        //extraire l'objet abonnement
        $abonnement = $em->getRepository('BackBundle:Abonnements')->find($id_ab);
        //affecter les champs envoyé en url
        $abonnement->setId($id_ab);
        $abonnement->setDesignation($designation);
        $abonnement->setDescription($description);
        $abonnement-> setPrix($prix);
        $abonnement-> setNbMois($nbMois);

        $em->persist($abonnement);
        $em->flush();
        //retourner update => ok comme resultat json
        $json = array("update"=>"ok");
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            //return $object->getId();
        });

        $formatted= $serializer->normalize($json, 'json');

        return new JsonResponse($formatted);

    }

    //nouvel abonnement
    public function createAction(Request $request,$designation,$description,$prix,$nbMois)
    {
        //connexion
        $em = $this->getDoctrine()->getManager();

        //instance abonnement
        $abonnement= new Abonnements();
        //affecter les champs
        $abonnement->setDesignation($designation);
        $abonnement->setDescription($description);
        $abonnement->setPrix($prix);
        $abonnement->setNbMois($nbMois);


        $em->persist($abonnement);

        $em->flush();


        $normalizer = new ObjectNormalizer();


        $json = array("ajout"=>"ok");
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            //return $object->getId();
        });

        $formatted= $serializer->normalize($abonnement, 'json');

        return new JsonResponse($formatted);

    }
}
