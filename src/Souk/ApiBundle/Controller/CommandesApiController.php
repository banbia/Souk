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
    /******* crud mobile (web service) ***********************/

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
    //nouvelle commande
    public function createAction(Request $request,$annonce,$date,$quantite,$client)
    {
        //connexion
        $em = $this->getDoctrine()->getManager();
        //get annonce and client object
        $client = $em->getRepository('UserBundle:User')->find($client);
        $annonce = $em->getRepository('BackBundle:Annonces')->find($annonce);
        //instance commande
        $commande= new Commandes();
        //affecter les champs
        $commande->setAnnonce($annonce);
        $commande->setClient($client);
        $commande->setQuantite($quantite);
        $commande->setEtat(0);
        $commande->setDateCom(new \DateTime($date));

        $em->persist($commande);

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
        $normalizer->setCallbacks(array('dateCom' => $callback));
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $formatted= $serializer->normalize($commande, 'json');

        return new JsonResponse($formatted);

    }
    //modifier commande
    public function modifAction($com,$date,$quantite)
    {
        //cnx
        $em = $this->getDoctrine()->getManager();
        //extraire l'objet commande
        $commande = $em->getRepository('BackBundle:Commandes')->find($com);
        //affecter les champs envoyé en url
        $commande->setId($com);
        $commande->setQuantite($quantite);
        $commande->setDateCom(new \DateTime($date));
        $em->persist($commande);
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
    //annuler/Supprimer commande
    public function annulerAction($com)
    {
        //cnx
        $em = $this->getDoctrine()->getManager();
        //extraire l'objet commande
        $commande = $em->getRepository('BackBundle:Commandes')->find($com);
        $em->remove($commande);

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
    //confirmer commande permet de changer son etat
    public function confirmerAction($com)
    {
        //cnx
        $em = $this->getDoctrine()->getManager();
        //extraire l'objet commande
        $commande = $em->getRepository('BackBundle:Commandes')->find($com);
        //changer etat a confirmer = 1
        $commande->setEtat(1);
        $em->persist($commande);

        $em->flush();
        //retourner delete => ok comme resultat json
        $json = array("confirmation"=>"ok");
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