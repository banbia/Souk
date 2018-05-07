<?php

namespace Souk\ApiBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use Souk\BackBundle\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

class CommandesApiController extends Controller
{

    ///se connecter à traver l'application
    public function listeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        if ($user->hasRole('ROLE_CLIENT')) {
            $commandes = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user));


        }else {

            $commandes=$em->getRepository('BackBundle:Commandes')->tousCommandesCommercial($user->getId());

        }


        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $serializer->normalize(new \DateTime());
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        /* $serializer = new Serializer(array($normalizer), array(new JsonEncoder()));*/
        $formatted= $serializer->normalize($commandes, 'json');

        return new JsonResponse($formatted);
    }
    /******* crud mobile (web service) ***********************/
    /*public function listeAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BackBundle:Commandes')->find($id);
        if ($user->hasRole('ROLE_CLIENT')) {

            $commandes = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user));

        }else {

            $commandes=$em->getRepository('BackBundle:Commandes')->tousCommandesCommercial($user->getId());

        }

        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($commandes, 'json');

        return new JsonResponse($formatted);
    }*/




    public function createAction(Request $request,$annonce,$date,$quantite,$client)
    {
        $em = $this->getDoctrine()->getManager();
        $commande= new Commandes();
        $commande->setAnnonce($annonce);
        $commande->setClient($client);
        $commande->setQuantite($quantite);
        $commande->setEtat(0);
        $commande->setDateCom(new \DateTime($date));

        $em->persist($commande);

        $em->flush();
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($commande, 'json');

        return new JsonResponse($formatted);

    }
    public function modifAction(Request $request,$com,$date,$quantite)
    {
        $em = $this->getDoctrine()->getManager();
        $commande= new Commandes();
        $commande->setId($com);
        $commande->setQuantite($quantite);
        $commande->setDateCom(new \DateTime($date));
        $em->persist($commande);

        $em->flush();
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($commande, 'json');

        return new JsonResponse($formatted);

    }
    public function annulerAction(Request $request,$com)
    {
        $em = $this->getDoctrine()->getManager();
        $commande= new Commandes();
        $commande->setId($com);
        $em->remove($commande);

        $em->flush();
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($commande, 'json');

        return new JsonResponse($formatted);

    }
    public function confirmerAction(Request $request,$com)
    {
        $em = $this->getDoctrine()->getManager();
        $commande= new Commandes();
        $commande->setId($com);
        $commande->setEtat(1);
        $em->persist($commande);

        $em->flush();
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($commande, 'json');

        return new JsonResponse($formatted);

    }
}