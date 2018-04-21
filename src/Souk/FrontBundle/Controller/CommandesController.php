<?php

namespace Souk\FrontBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use Souk\BackBundle\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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

        if ($this->get('security.authorization_checker')->isGranted('ROLE_CLIENT')) {

            $commandes_confirme = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user,"etat"=>1));
            $commandes_attente = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user,"etat"=>0));
            $commandes = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user));

        }else if ($this->get('security.authorization_checker')->isGranted('ROLE_COM')) {
            $commandes_attente = $em
                ->createQueryBuilder('c')
                ->from('AppBundle:Commandes','c')
                ->join('AppBundle:Annonces','a')
                ->select(array('c', 'a'))
                ->where('c.annonce=a.id and a.commercial= :user and c.etat = 0')
                ->setParameter('user',$user)
                ->getQuery()
                ->getResult();
            $commandes_confirme = $em
                ->createQueryBuilder('c')
                ->from('AppBundle:Commandes','c')
                ->join('AppBundle:Annonces','a')
                ->select(array('c', 'a'))
                ->where('c.annonce=a.id and a.commercial= :user and c.etat = 1')
                ->setParameter('user',$user)
                ->getQuery()
                ->getResult();
            $commandes=$em
                ->createQueryBuilder('c')
                ->from('AppBundle:Commandes','c')
                ->join('AppBundle:Annonces','a')
                ->select(array('c', 'a'))
                ->where('c.annonce=a.id and a.commercial= :user')
                ->setParameter('user',$user)
                ->getQuery()
                ->getResult();

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
        $deleteForm = $this->createDeleteForm($commande);
        $editForm = $this->createForm('Souk\BackBundle\Form\CommandesType', $commande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commandes_edit', array('id' => $commande->getId()));
        }

        return $this->render('FrontBundle:commandes:edit.html.twig', array(
            'commande' => $commande,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * valid a command
     *
     */
    public function validAction(Request $request, Commandes $commande)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('BackBundle:Commandes')->find($commande);
        $commande->setEtat(1);
        $em->persist($commande);
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

    /******* crud mobile (web service) ***********************/
    public function listeAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BackBundle:Commandes')->find($id);

        if ($user->hasRole('ROLE_CLIENT')) {

            $commandes = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user));

        }else if ($user->hasRole('ROLE_COM')) {

            $commandes=$em
                ->createQueryBuilder('c')
                ->from('AppBundle:Commandes','c')
                ->join('AppBundle:Annonces','a')
                ->select(array('c', 'a'))
                ->where('c.annonce=a.id and a.commercial= :user')
                ->setParameter('user',$user)
                ->getQuery()
                ->getResult();

        }

        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($commandes, 'json');

        return new JsonResponse($formatted);
    }




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
