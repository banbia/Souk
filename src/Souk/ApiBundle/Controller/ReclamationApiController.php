<?php

namespace Souk\ApiBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use Souk\BackBundle\Entity\Reclamations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

class ReclamationApiController extends Controller{


    public function allRecAction()
    {

        $reclamations=$this->getDoctrine()->getRepository('BackBundle:Reclamations')->findAll();

        $callback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format('Y-m-d')
                : '';
        };
        $normalizer = new ObjectNormalizer();
        $normalizer->setIgnoredAttributes(array('annonce','commentaires','evennements','reservations'));
        $normalizer->setCallbacks(array('dateRec' => $callback));
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $formatted= $serializer->normalize($reclamations, 'json');
        return new JsonResponse($formatted);
    }


    public function listeRecAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user));
        $callback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format('Y-m-d')
                : '';
        };

        $normalizer = new ObjectNormalizer();
        $normalizer->setIgnoredAttributes(array('client','annonce','commentaires'));
        $normalizer->setCallbacks(array('dateRec' => $callback));
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();

        });

            $formatted= $serializer->normalize($reclamations, 'json');
            return new JsonResponse($formatted);
    }


    public function newRecAction(Request $request,$contenu,$commercial)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = new Reclamations();
        $now = new \DateTime('NOW');
        $reclamations->setDateRec($now);
        $user = $this->getUser();
        $reclamations->setClient($user);
        $reclamations->setContenu($contenu);
        $reclamations->setCommercial($commercial);
            //0=>en attente
            //1=>confirme par admin
            //-1=>rejeté
        $reclamations->setEtat(0);
        $em->persist($reclamations);
        $em->flush();

            $serializer = SerializerBuilder::create()->build();
            $formatted = $serializer->serialize($reclamations, 'json');

            return new JsonResponse($formatted);

    }


    public function editRecAction($rec,$contenu)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('BackBundle:Reclamations')->find($rec);

        $reclamations->setContenu($contenu);

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

    /******! PARTIE ADMIN !******/
    public function accepterRecAction($rec)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('BackBundle:Reclamations')->find($rec);
        $reclamations->setEtat(1);

        $em->flush();
        //retourner delete => ok comme resultat json
        $json = array("Accepter"=>"ok");
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            //return $object->getId();
        });

        $formatted= $serializer->normalize($json, 'json');

        return new JsonResponse($formatted);

    }

    public function rejeterRecAction($rec)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('BackBundle:Reclamations')->find($rec);
        $reclamations->setEtat(-1);

        $em->flush();
        //retourner delete => ok comme resultat json
        $json = array("Accepter"=>"ok");
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            //return $object->getId();
        });

        $formatted= $serializer->normalize($json, 'json');

        return new JsonResponse($formatted);
    }



}

