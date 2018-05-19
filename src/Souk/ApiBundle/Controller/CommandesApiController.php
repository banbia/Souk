<?php

namespace Souk\ApiBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use Souk\BackBundle\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

class CommandesApiController extends Controller
{

    public function listeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        if ($user->hasRole('ROLE_CLIENT')) {
            $commandes = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user));


        }else {

            $commandes=$em->getRepository('BackBundle:Commandes')->tousCommandesCommercial($user->getId());

        }
        $callback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format('Y-m-d')
                : '';
        };


        $normalizer = new ObjectNormalizer();
        $normalizer->setIgnoredAttributes(array('client','annonce','commentaires'));
        $normalizer->setCallbacks(array('dateCom' => $callback));
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $formatted= $serializer->normalize($commandes, 'json');

        return new JsonResponse($formatted);
    }
    /******* crud mobile (web service) ***********************/

    public function createAction(Request $request,$annonce,$date,$quantite,$client)
    {
        //connexion
        $em = $this->getDoctrine()->getManager();
        //get annonce and client object
        $client = $em->getRepository('UserBundle:User')->find($client);
        $annonce = $em->getRepository('BackBundle:Annonces')->find($annonce);
        $commande= new Commandes();
        $commande->setAnnonce($annonce);
        $commande->setClient($client);
        $commande->setQuantite($quantite);
        $commande->setEtat(0);
        $commande->setDateCom(new \DateTime($date));

        $em->persist($commande);

        $em->flush();
        $callback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format('Y-m-d')
                : '';
        };


        $normalizer = new ObjectNormalizer();
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