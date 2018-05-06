<?php

namespace Souk\FrontBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use Souk\BackBundle\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Request;

/**
 * Commande controller.
 *
 */
class CommandesController extends Controller
{
    /**
     * Lists all commande entities.
     *
     */
    public function indexAction( )
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $commandes_confirme = array();
        $commandes_attente = array();
        $commandes = array();
        if ($this->get('security.authorization_checker')->isGranted('ROLE_CLIENT')) {

            $commandes_confirme = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user,"etat"=>1));
            $commandes_attente = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user,"etat"=>0));
            $commandes = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user));

        }else if ($this->get('security.authorization_checker')->isGranted('ROLE_COM')) {

            $commandes_attente = $em->getRepository('BackBundle:Commandes')->attentesCommandesCommercial($user->getId());
            $commandes_confirme = $em->getRepository('BackBundle:Commandes')->confirmesCommandesCommercial($user->getId());
            $commandes=$em->getRepository('BackBundle:Commandes')->tousCommandesCommercial($user->getId());

        }

        $em->flush();
        return $this->render('FrontBundle:commandes:index.html.twig', array(
            'commandes' => $commandes,
            'commandes_attente' => $commandes_attente,
            'commandes_confirme' => $commandes_confirme,
        ));


    }

    /**
     * Creates a new commande entity.
     *
     */
    public function newAction(Request $request,$annonce)
    {
        $commande = new Commandes();
        $form = $this->createForm('Souk\BackBundle\Form\CommandesType', $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $commande->setAnnonce($annonce);
            $user = $this->getUser();
            $commande->setClient($user);
            $em->persist($commande);
            $em->flush();

            return $this->redirectToRoute('commandes_show', array('id' => $commande->getId()));
        }

        return $this->render('FrontBundle:commandes:new.html.twig', array(
            'commande' => $commande,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a commande entity.
     *
     */
    public function showAction(Commandes $commande)
    {
        $deleteForm = $this->createDeleteForm($commande);

        return $this->render('FrontBundle:commandes:show.html.twig', array(
            'commande' => $commande,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commande entity.
     *
     */
    public function editAction(Request $request, Commandes $commande)
    {
        //var_dump($commande->getDateCom()->format('Y-m-d'));




        return $this->render('FrontBundle:commandes:edit.html.twig', array(
            'commande' => $commande,
        ));
    }
    public function modifierAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $status = 'erreur';
        $html = 'erreur';



        if ($request->isMethod('POST'))
        {

            if($request->isXmlHttpRequest()) {

                //extraire les données de modal
                $date = $request->request->get('date');
                $quantite = $request->request->get('quantite');
                $id = $request->request->get('id');
                //nouveau rendezvous
                $commande=$em->getRepository('BackBundle:Commandes')->find($id);

                $commande->setQuantite($quantite);
                $date = new \DateTime($date);

                //$date = new \DateTime($date);
                $date->format('Y-m-d H:i');
                $commande->setDateCom($date);



                $em->persist($commande);


                if($commande!=null){

                    $status = 'success';
                    $html = 'yes';
                }

            }
        }

        $em->flush();



        $jsonArray = array(
            'status' => $status,
            'data' => $html,
        );

        $response = new Response(json_encode($jsonArray));
        $response->headers->set('Content-Type', 'application/json; charset=utf-8');

        return $response;


    }
    /**
     * valid a command
     *
     */
    public function validAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $com = $em->getRepository('BackBundle:Commandes')->find($id);
        $com->setEtat(1);
        $em->persist($com);
        $em->flush();
        return $this->redirectToRoute('commandes_index');

    }
    /**
     * Deletes a commande entity.
     *
     */
    public function deleteAction(Request $request, Commandes $commande)
    {
        $form = $this->createDeleteForm($commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commande);
            $em->flush();
        }

        return $this->redirectToRoute('commandes_index');
    }

    /**
     * Creates a form to delete a commande entity.
     *
     * @param Commandes $commande The commande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commandes $commande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commandes_delete', array('id' => $commande->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}
