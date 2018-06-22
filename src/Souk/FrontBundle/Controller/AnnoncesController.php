<?php

namespace Souk\FrontBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use Souk\BackBundle\Entity\Annonces;
use Souk\BackBundle\Entity\Commandes;
use Souk\BackBundle\Entity\CommentairesAnc;

use Souk\BackBundle\Form\CommentairesAncType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Annonce controller.
 *
 */
class AnnoncesController extends Controller
{

    /**
     * Finds and displays a annonce entity.
     *
     */
    public function showAction(Request $request, Annonces $annonce)
    {


        /* Nour's Work Start*/
        $commande = new Commandes();
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('BackBundle:Annonces')->find($annonce);
      $images = $em->getRepository('BackBundle:Images')->findBy(array("annonce" => $annonce->getId()));

        $form = $this->createForm('Souk\BackBundle\Form\CommandesType', $commande);
        $form->handleRequest($request);
        $find_com = $em->getRepository('BackBundle:Commandes')->findBy(array("client" => $user, "annonce" => $annonce, "etat" => 0));
        $com = count($find_com);
        if ($form->isSubmitted() && $form->isValid()) {


            $commande->setAnnonce($annonce);
            //var_dump('<pre>'.$commande->getDateCom().'</pre>');die;
            $now = new \DateTime($commande->getDateCom());
            $commande->setDateCom($now);
            $commande->setEtat(0);//0 => en attente

            $commande->setClient($user);
            $em->persist($commande);

            $commandes_confirme = array();
            $commandes_attente = array();
            $commandes = array();
            if ($this->get('security.authorization_checker')->isGranted('ROLE_CLIENT')) {

                $commandes_confirme = $em->getRepository('BackBundle:Commandes')->findBy(array("client" => $user, "etat" => 1));
                $commandes_attente = $em->getRepository('BackBundle:Commandes')->findBy(array("client" => $user, "etat" => 0));
                $commandes = $em->getRepository('BackBundle:Commandes')->findBy(array("client" => $user));

            } else if ($this->get('security.authorization_checker')->isGranted('ROLE_COM')) {

                $commandes_attente = $em->getRepository('BackBundle:Commandes')->attentesCommandesCommercial($user->getId());
                $commandes_confirme = $em->getRepository('BackBundle:Commandes')->confirmesCommandesCommercial($user->getId());
                $commandes = $em->getRepository('BackBundle:Commandes')->tousCommandesCommercial($user->getId());

            }
            $em->flush();
            return $this->redirectToRoute('commandes_index');
            //return $this->redirectToRoute('commandes_show', array('id' => $commande->getId()));
        }
        /* Nour's Work End*/
        /* safa Boufare Begin*/
        //extraire la liste des commentaires d'une annonce
        $coms = $em->getRepository('BackBundle:CommentairesAnc')->findBy(array("annonce" => $annonce->getId()));
        //ajout d'un noveau commentaire

        $com_Anc = new CommentairesAnc();

        $formC = $this->createForm(CommentairesAncType::class, $com_Anc);

        $formViewC = $formC->createView();

        $formC->handleRequest($request);

        if ($formC->isSubmitted() && $formC->isValid()) {
            ///récupérer user
            $user = $this->getUser();
            ///récupérer annonce
            $com_Anc->setDateCmt(new \DateTime('now'));
            $com_Anc->setClient($user);
            $com_Anc->setAnnonce($annonce);
            $em->persist($com_Anc);
            $em->flush();
            return $this->redirectToRoute('annonces_show', array("id" => $annonce->getId()));
        }
        /* safa Boufare End*/




    /* Nour's Work End*/
    /* safa Boufare Begin*/
    //extraire la liste des commentaires d'une annonce
    $coms = $em->getRepository('BackBundle:CommentairesAnc')->findBy(array("annonce" => $annonce->getId()));
    //ajout d'un noveau commentaire

    $com_Anc = new CommentairesAnc();

    $formC = $this->createForm(CommentairesAncType::class, $com_Anc);

    $formViewC = $formC->createView();

    $formC->handleRequest($request);

    if ($formC->isSubmitted() && $formC->isValid()) {
      ///récupérer user
      $user = $this->getUser();
      ///récupérer annonce
      $com_Anc->setDateCmt(new \DateTime('now'));
      $com_Anc->setClient($user);
      $com_Anc->setAnnonce($annonce);
      $em->persist($com_Anc);
      $em->flush();
      return $this->redirectToRoute('annonces_show', array("id" => $annonce->getId()));
    }
    /* safa Boufare End*/

        return $this->render('FrontBundle:annonces:show.html.twig', array(
            'annonce' => $annonce,
            'commande' => $commande,
            'form' => $form->createView(),
            'com' => $com,
            'coms' => $coms,
            'formC' => $formViewC,
             'Image'=>$images,

        ));

  }
  /**
   * haifa-dev-start
   * delete annonce
   *
   */

  public function deleteAnnonceAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $annonces = $em->getRepository('BackBundle:Annonces')->find($id);
    $images = $em->getRepository('BackBundle:Images')->findBy(array("annonce" => $id));
    foreach ($images as $img ) {
      $em->remove($img);
    }
    $em->remove($annonces);
    $em->flush();
    return $this->redirectToRoute('commercial_annonces_index');
  }

  /**
   * haifa-dev-start
   * new annonce
   *
   */

  public function newAnnonceAction(Request $request)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $annonce = new Annonces();

    $form = $this->createForm('Souk\BackBundle\Form\AnnoncesType', $annonce);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $annonce->setDateCreation(new \DateTime('now'));
      $user = $this->getUser();
      $annonce->setCommercial($user);
      $em->persist($annonce);
      $em->flush();
      return $this->redirectToRoute('image_new', array('annonce' => $annonce->getId()));
    }
    return $this->render('FrontBundle:annonces:new.html.twig', array(

      'form' => $form->createView(),
    ));

  }
/**modifier annonces*/
  public function editAnnonceAction(Request $request,$id)
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
    $annonce = $em->getRepository('BackBundle:Annonces')->find($id);

    $form = $this->createForm('Souk\BackBundle\Form\AnnoncesType', $annonce);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $annonce->setDateCreation(new \DateTime('now'));
      $user = $this->getUser();
      $annonce->setCommercial($user);
      $em->persist($annonce);
      $em->flush();
      return $this->redirectToRoute('commercial_annonces_index');
    }
    return $this->render('FrontBundle:annonces:edit.html.twig', array(

      'form' => $form->createView(),
    ));

  }

  /**affichage  les annonces  du commercial connecte  **/
  public function indexCommercialAction()
  {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $dateJour=new \DateTime('now');

    $em = $this->getDoctrine()->getManager();
    $user = $this->getUser();
    $annonces = $em->getRepository('BackBundle:Annonces')->findAllOrderedByDateCommercial($user->getId());


    $abonnement = $em->getRepository('BackBundle:HistoriqueAbs')->findAbonnementByIdUserDate($user->getId(),$dateJour);

    return $this->render('FrontBundle:annonces:indexCommercial.html.twig', array(
      'annonces' => $annonces,'abonnement'=>$abonnement,

    ));
  }
  /**affichage  les annonces par categories  **/
  public function listerbyCategorieAction($categorie)
  {

    $em = $this->getDoctrine()->getManager();
    $cat = $em->getRepository('BackBundle:Categories')->find($categorie);
    $gategories = $em->getRepository('BackBundle:Categories')->findAll();
    $annonces = $em->getRepository('BackBundle:Annonces')->findBy(array('categorie' => $cat));


    return $this->render('FrontBundle:annonces:index.html.twig', array(
      'annonces' => $annonces,'categories' => $gategories,
    ));
  }


  /**
   * Lists all annonce entities.
   *
   */
  public function indexAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $annonces = $em->getRepository('BackBundle:Annonces')->findAll();
    //API salsabil pagination
      /**
       * @var $paginator \Knp\Component\Pager\Paginator
       */
      $paginator  = $this->get('knp_paginator');
      $result=$paginator->paginate(
          $annonces,
          $request->query->getInt('page',1),
          $request->query->getInt('limit',2)
      );

    $categories = $em->getRepository('BackBundle:Categories')->findAll();

    return $this->render('FrontBundle:annonces:index.html.twig', array(
      'annonces' => $result,
      'categories' => $categories,
    ));
  }

  /**
   * haifa-dev-end
   */

  /**
   * Finds and displays a annonce entity.
   *
   */

  // Safa Boufares  commentaire Anc

  // Ajout des commentaires et les listees pour une annonce
  /**
   * @Route("/annonce/{$annonce}", name="commentairesAnc_new")
   */


  public function deleteAction($com, $annonce)
  {
    $em = $this->getDoctrine()->getManager();
    $comm = $em->getRepository('BackBundle:CommentairesAnc')->find($com);
    $em->remove($comm);
    $em->flush();
    return $this->redirectToRoute('annonces_show',array("annonce"=>$annonce));
  }
  public function newAction(Request $request, $annonce)
  {
      /* safa Boufare Begin*/
    //cnx bd
    $cm = $this->getDoctrine()->getManager();
    //extraire la liste des commentaires d'une annonce
    $coms = $cm->getRepository('BackBundle:CommentairesAnc')->findBy(array("annonce" => $annonce));
    //ajout d'un noveau commentaire
    $com_Anc = new CommentairesAnc();
    ///récupérer annonce
    $annonces = $cm->getRepository('BackBundle:Annonces')->find($annonce);
    ///récupérer user
    $user = $this->getUser();
    $form = $this->createForm(CommentairesAncType::class, $com_Anc);

    $formView = $form->createView();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $com_Anc->setDateCmt(new \DateTime('now'));
      $com_Anc->setClient($user);
      $com_Anc->setAnnonce($annonces);
      $cm->persist($com_Anc);
      $cm->flush();
      return $this->redirectToRoute('annonces_show', array("annonce" => $annonce));
    }


    return $this->render('FrontBundle:annonces:new_commentairesAnc.html.twig', array('coms' => $coms, 'form' => $formView, 'annonce' => $annonces));
  }

  // edit des comm de l'Anc

  public function editAction(Request $request, $com, $annonce)
  {
    $em = $this->getDoctrine()->getManager();
    $com_Anc = $em->getRepository('BackBundle:CommentairesAnc')->find($com);
    $form = $this->createForm(CommentairesAncType::class, $com_Anc);
    ///récupérer annonce
    $annonces = $em->getRepository('BackBundle:Annonces')->find($annonce);
    $formView = $form->createView();
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $em->persist($com_Anc);
      $em->flush();

      return $this->redirectToRoute('annonces_show', array("id" => $annonce));
    }
    return $this->render('FrontBundle:annonces:edit_commantaireAnc.html.twig', array('form' => $formView, 'annonce' => $annonces));
  }

    public function deleteComAncAction($com,$annonce)
    {
        $em = $this->getDoctrine()->getManager();
        $comm = $em->getRepository('BackBundle:CommentairesAnc')->find($com);
        $em->remove($comm);
        $em->flush();

        return $this->redirectToRoute('annonces_show',array("id"=>$annonce));
    }
  // les services web des commentaires de l'Anc

  public function createAction(Request $request, $annonce, $date, $quantite, $client)
  {
    $em = $this->getDoctrine()->getManager();
    $commande = new Commandes();
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


  public function findAction($id)
  {
    $com_Anc = $this->getDoctrine()->getManager()
      ->getRepository('BackBundle:CommentairesAnc')
      ->find($id);
    $serializer = SerializerBuilder::create()->build();
    $formatted = $serializer->serialize($com_Anc, 'json');

    return new JsonResponse($formatted);
  }

  public function newAncAction(Request $request, $annonce)
  {
    $em = $this->getDoctrine()->getManager();
    $com_Anc = new CommentairesAnc();
    $user = $this->getUser();
    $anonnces = $em->getRepository('BackBundle:Annonces')->find($annonce);
    $com_Anc->setDateCmt(new \DateTime('now'));
    $com_Anc->setClient($user);
    $com_Anc->setAnnonce($anonnces);
    $serializer = SerializerBuilder::create()->build();
    $formatted = $serializer->serialize($com_Anc, 'json');

    return new JsonResponse($formatted);

  }
}
