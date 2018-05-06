<?php

namespace Souk\FrontBundle\Controller;
use JMS\Serializer\SerializerBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Souk\BackBundle\Entity\Reclamations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Reclamation controller.
 *@Route("reclamations")
 */
class ReclamationsController extends Controller
{
    /**
     * Lists all reclamation entities.
     * @Route("/", name="reclamations_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

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
                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted =$serializer->normalize($reclamations);
            } else {
                $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user));

            }
        } else
            $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user));

        return $this->render('FrontBundle:reclamations:index.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }

    /**
     * Creates a new reclamation entity.
     * @Route("/new", name="reclamations_new")
     */
    public function newAction(Request $request)
    {
        $reclamation = new Reclamations();
        $form = $this->createForm('Souk\BackBundle\Form\ReclamationsType', $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $now = new \DateTime('NOW');
            $reclamation->setDateRec($now);
            $user = $this->getUser();
            $reclamation->setClient($user);
            //0=>en attente
            //1=>confirme par admin
            //-1=>rejeté
            $reclamation->setEtat(0);
            $em->persist($reclamation);
            $em->flush();

            return $this->redirectToRoute('reclamations_show', array('id' => $reclamation->getId()));
        }

        return $this->render('FrontBundle:reclamations:new.html.twig', array(
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Show.
     *
     */
    public function showAction(Reclamations $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('FrontBundle:reclamations:show.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reclamation entity.
     *
     */
    public function editAction(Request $request, Reclamations $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);
        $editForm = $this->createForm('Souk\BackBundle\Form\ReclamationsType', $reclamation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamations_index', array('id' => $reclamation->getId()));
        }

        return $this->render('FrontBundle:reclamations:edit.html.twig', array(
            'reclamation' => $reclamation,
            'edit' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));

    }


    /**
     * Deletes a reclamation entity.
     *
     */
    public function deleteAction(Request $request, Reclamations $reclamation)
    {
        $form = $this->createDeleteForm($reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reclamation);
            $em->flush();
        }

        return $this->redirectToRoute('reclamations_index');
    }

    /**
     * Creates a form to delete a reclamation entity.
     *
     * @param Reclamations $reclamation The reclamation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reclamations $reclamation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reclamations_delete', array('id' => $reclamation->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
        //Crud Mobile
    public function indexMobileAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

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
                $serializer = SerializerBuilder::create()->build();
                $formatted =$serializer->serialize($reclamations,'json');
            } else {
                $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user));
                $serializer = SerializerBuilder::create()->build();
                $formatted =$serializer->serialize($reclamations,'json');
            }
        } else
            $reclamations = $em->getRepository('BackBundle:Reclamations')->findBy(array('client' => $user));
        $serializer = new Serializer([new objectNormalizer()]);
        $formatted =$serializer->normalize($reclamations,'json');

        return new JsonResponse($formatted);
    }


    public function newMobileAction(Request $request,$commercial,$contenu)
    {
        $reclamation = new Reclamations();
        $form = $this->createForm('Souk\BackBundle\Form\ReclamationsType', $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $now = new \DateTime('NOW');
            $reclamation->setDateRec($now);
            $user = $this->getUser();
            $reclamation->setClient($user);
            $reclamation->setContenu($contenu);
            $reclamation->setCommercial($commercial);
            //0=>en attente
            //1=>confirme par admin
            //-1=>rejeté
            $reclamation->setEtat(0);
            $em->persist($reclamation);
            $em->flush();


            $serializer = SerializerBuilder::create()->build();
            $formatted =$serializer->serialize($reclamation,'json');

            return new JsonResponse($formatted);
            //return $this->redirectToRoute('reclamations_show', array('id' => $reclamation->getId()));
        }

        return $this->render('FrontBundle:reclamations:new.html.twig', array(
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ));
    }

    public function showMobileAction(Reclamations $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('FrontBundle:reclamations:show.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reclamation entity.
     *
     */
    public function editMobileAction(Request $request, Reclamations $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);
        $editForm = $this->createForm('Souk\BackBundle\Form\ReclamationsType', $reclamation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamations_index', array('id' => $reclamation->getId()));
        }

        return $this->render('FrontBundle:reclamations:edit.html.twig', array(
            'reclamation' => $reclamation,
            'edit' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));

    }


}
