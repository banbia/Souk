<?php
/**
 * Created by PhpStorm.
 * User: salsa
 * Date: 6/3/2018
 * Time: 11:19 PM
 */

namespace Souk\ApiBundle\Controller;


use Souk\BackBundle\Entity\Evennements;
use Souk\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class EvenementsApiController extends Controller

{
    /******* crud mobile (web service) ***********************/
    public function getEventsAction(){
        $em = $this->getDoctrine()->getManager();
        $evennements = $em->getRepository('BackBundle:Evennements')->findAll();

        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $formatted= $serializer->normalize($evennements, 'json');
        return new JsonResponse($formatted);
    }

    public function getEventsbyUserAction(User $user){
        $em = $this->getDoctrine()->getManager();
        $evennements = $em->getRepository('BackBundle:Evennements')->findBy(array(

            "commercial" => $user
        ));


        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $formatted= $serializer->normalize($evennements, 'json');
        return new JsonResponse($formatted);
    }

    public function getEventsbyIdAction(Evennements $evennements){

        dump($evennements);exit;

        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $formatted= $serializer->normalize($evennements, 'json');
        return new JsonResponse($formatted);
    }

}