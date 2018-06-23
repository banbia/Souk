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


}
