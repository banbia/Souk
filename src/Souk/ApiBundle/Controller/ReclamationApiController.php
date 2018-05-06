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

    ///se connecter à traver l'application


        //Crud Mobile
    public function listeRecAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);

        if ($request->getMethod() == "POST") {
            $user = $this->getUser();
            $p = $request->get('etat');
            if ($p != "") {

                if ($p == "Accepter")
                    $p = 1;
                elseif ($p == "Encours")
                    $p = 0;
                else
                    $p = -1;
                $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user, 'etat' => $p));

            } else {
                $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user));

            }
        } else
            $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user));


        $normalizer = new ObjectNormalizer();
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

    /*public function showRecAction(Reclamations $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('FrontBundle:reclamations:show.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing reclamation entity.
     *
     */

    public function editRecAction($contenu)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = new Reclamations();
        $reclamations->setContenu($contenu);
        ;
        $em->persist($reclamations);

        $em->flush();
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($reclamations, 'json');

        return new JsonResponse($formatted);

    }
    public function accepterRecAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = new Reclamations();
        $reclamations->setEtat(1);
        ;
        $em->persist($reclamations);

        $em->flush();
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($reclamations, 'json');

        return new JsonResponse($formatted);

    }
    public function rejeterRecAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = new Reclamations();
        $reclamations->setEtat(-1);
        ;
        $em->persist($reclamations);

        $em->flush();
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($reclamations, 'json');

        return new JsonResponse($formatted);

    }


}

