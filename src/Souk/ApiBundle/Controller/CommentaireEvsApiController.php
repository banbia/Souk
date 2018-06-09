<?php

namespace Souk\ApiBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use Souk\BackBundle\Entity\CommentairesEvs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CommentaireEvsApiController extends Controller
{
    /******* crud mobile (web service) ***********************/
    /******* lister les commentaire EVS ***********************/
    public function listeComEvsAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        if ($user->hasRole('ROLE_CLIENT')) {
            $com_Evs = $em->getRepository('BackBundle:CommentairesEvs')->findBy(array("client"=>$user));
        }
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($com_Evs, 'json');
        return new JsonResponse($formatted);
    }
    /******* ajouter Commentaire Evs ***********************/

    public function createComEvsAction(Request $request,$contenu,$evennement,$client)
    {
        $em = $this->getDoctrine()->getManager();
        $com_Evs= new CommentairesEvs();
        $client = $em->getRepository('UserBundle:User')->find($client);
        $evennements = $em->getRepository('BackBundle:Evennements')->find($evennement);
        $com_Evs->setContenu($contenu);
        $com_Evs->setDateCmt(new \DateTime('now'));
        $com_Evs->setClient($client);
        $com_Evs->setEvennement($evennements);
        $em->persist($com_Evs);
        $em->flush();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $formatted = $serializer->normalize($com_Evs, 'json');

        return new JsonResponse($formatted);

    }
    /******* modifier Commentaire Evs ***********************/

    public function modifComEvsAction($comEvs,$contenu)
    {
        $em = $this->getDoctrine()->getManager();
        $com_Evs = $em->getRepository('BackBundle:CommentairesEvs')->find($comEvs);
        $com_Evs->setId($comEvs);
        $com_Evs->setContenu($contenu);
        $em->persist($com_Evs);
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
    //Supprimer ComEvs
    public function deleteComEvsAction($comEvs)
    {
        //cnx
        $em = $this->getDoctrine()->getManager();
        //extraire l'objet comEvs
        $com_Evs = $em->getRepository('BackBundle:CommentairesEvs')->find($comEvs);
        $em->remove($com_Evs);

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
}
