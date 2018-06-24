<?php

namespace Souk\ApiBundle\Controller;

use Souk\BackBundle\Entity\CommentairesAnc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
class CommentaireAncApiController extends Controller
{
    /******* crud mobile (web service) ***********************/
    /******* lister les commentaire Anc ***********************/
    public function listeComAncAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('BackBundle:Annonces')->find($id);
        $com_Anc = $em->getRepository('BackBundle:CommentairesAnc')->findBy(array("annonce"=>$annonce));
        $callback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format('Y-m-d')
                : '';
        };


        $normalizer = new ObjectNormalizer();
        $normalizer->setIgnoredAttributes(array('annonce','client'));
        $normalizer->setCallbacks(array('dateCmt' => $callback));
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $formatted= $serializer->normalize($com_Anc, 'json');

        return new JsonResponse($formatted);
    }

    /******* ajouter Commentaire Anc ***********************/

    public function createComAncAction(Request $request,$contenu,$annonce,$client)
    {
        $em = $this->getDoctrine()->getManager();
        $com_Anc= new CommentairesAnc();
        $client = $em->getRepository('UserBundle:User')->find($client);
        $annonces = $em->getRepository('BackBundle:Annonces')->find($annonce);
        $com_Anc->setContenu($contenu);
        $com_Anc->setDateCmt(new \DateTime('now'));
        $com_Anc->setClient($client);
        $com_Anc->setAnnonce($annonces);
        $em->persist($com_Anc);
        $em->flush();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $serializer = new Serializer([$normalizer]);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $formatted = $serializer->normalize($com_Anc, 'json');

        return new JsonResponse($formatted);

    }

    /******* modifier Commentaire Anc  ***********************/

    public function modifComAncAction($comAnc,$contenu)
    {
        //cnx
        $em = $this->getDoctrine()->getManager();
        //extraire l'objet commentaireAnc
        $com_Anc = $em->getRepository('BackBundle:CommentairesAnc')->find($comAnc);
        //affecter les champs envoyé en url
        $com_Anc->setId($comAnc);
        $com_Anc->setContenu($contenu);
        $em->persist($com_Anc);
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
    //Supprimer ComAnc
    public function deleteAncAction($comAnc)
    {
        //cnx
        $em = $this->getDoctrine()->getManager();
        //extraire l'objet comAnc
        $com_Anc = $em->getRepository('BackBundle:CommentairesAnc')->find($comAnc);
        $em->remove($com_Anc);

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
