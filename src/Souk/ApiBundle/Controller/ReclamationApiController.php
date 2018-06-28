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




    public function newRecAction($id_client,$id_commercial,$contenu)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id_client);
        $commercial = $em->getRepository('UserBundle:User')->find($id_commercial);

        $reclamations= new Reclamations();
        //affecter les champs
        $reclamations->setClient($user);
        $reclamations->setCommercial($commercial);
        $reclamations->setContenu($contenu);
        $reclamations->setEtat(0);
        $reclamations->setDateRec(new \DateTime('now'));
        $em->persist($reclamations);

        $em->flush();
        //format date
        $callback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format('Y-m-d')
                : '';
        };


        $normalizer = new ObjectNormalizer();
        $normalizer->setCallbacks(array('DateRec' => $callback));
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $formatted= $serializer->normalize($reclamations, 'json');

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

