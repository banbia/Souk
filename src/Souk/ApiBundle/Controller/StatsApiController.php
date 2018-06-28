<?php

namespace Souk\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
class StatsApiController extends Controller
{

    public function statsAction()
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());

        $em = $this->getDoctrine()->getManager();


        $etab = $em
            // automatically knows to select Comment
            // the "c" is an alias you'll use in the rest of the query
            ->createQueryBuilder('c')
            ->select('distinct (c.designation) as libelle, (count(a.categorie)) AS nbr ')
            ->from('BackBundle:Categories', 'c')
            ->join('BackBundle:Annonces', 'a')
            ->where('a.categorie=c.id')
            ->groupBy('a.categorie')
            ->getQuery()
            ->getResult();


        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->normalize($etab, 'json');
        return new JsonResponse($jsonContent);
    }

}

