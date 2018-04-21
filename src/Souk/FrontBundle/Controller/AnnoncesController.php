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
     * Lists all annonce entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

      $annonces = $em->getRepository('BackBundle:Annonces')->findAll();
      $categories = $em->getRepository('BackBundle:Categories')->findAll();

        return $this->render('FrontBundle:annonces:index.html.twig', array(
            'annonces' => $annonces,
            'categories' => $categories,
        ));
    }

    /**
     * Finds and displays a annonce entity.
     *
     */
    public function showAction(Request $request,Annonces $annonce)
    {
        /* Nour's Work Start*/
        $commande = new Commandes();
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm('Souk\BackBundle\Form\CommandesType', $commande);
        $form->handleRequest($request);
        $find_com = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user,"annonce"=>$annonce,"etat"=>0));
        $com = count($find_com);
        if ($form->isSubmitted() && $form->isValid()) {


            $commande->setAnnonce($annonce);
            //var_dump('<pre>'.$commande->getDateCom().'</pre>');die;
            $now = new \DateTime($commande->getDateCom());
            $commande->setDateCom($now);
            $commande->setEtat(0);//0 => en attente

            $commande->setClient($user);
            $em->persist($commande);

            $commandes_confirme = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user,"etat"=>1));
            $commandes_attente = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user,"etat"=>0));
            $commandes = $em->getRepository('BackBundle:Commandes')->findBy(array("client"=>$user));
            $em->flush();
            return $this->render('FrontBundle:commandes:index.html.twig', array(
                'commandes' => $commandes,
                'commandes_attente' => $commandes_attente,
                'commandes_confirme' => $commandes_confirme,
            ));
            //return $this->redirectToRoute('commandes_show', array('id' => $commande->getId()));
        }
        /* Nour's Work End*/
        return $this->render('FrontBundle:annonces:show.html.twig', array(
            'annonce' => $annonce,
            'commande' => $commande,
            'form' => $form->createView(),
            'com'=>$com

        ));
    }
    // Safa Boufares  commentaire Anc

    // Ajout des commentaires et les listees pour une annonce
    /**
     * @Route("/annonce/{$annonce}", name="commentairesAnc_new")
     */
    public function newAction(Request $request,$annonce)
    {
        //cnx bd
        $cm = $this->getDoctrine()->getManager();
        //extraire la liste des commentaires d'une annonce
        $coms = $cm->getRepository('BackBundle:CommentairesAnc')->findBy(array("annonce"=>$annonce));
        //ajout d'un noveau commentaire
        $com_Anc =new CommentairesAnc();
        ///récupérer annonce
        $annonces = $cm->getRepository('BackBundle:Annonces')->find($annonce);
        ///récupérer user
        $user = $this->getUser();
        $form = $this->createForm(CommentairesAncType::class,$com_Anc);

        $formView=$form->createView();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $com_Anc->setDateCmt(new \DateTime('now'));
            $com_Anc->setClient($user);
            $com_Anc->setAnnonce($annonces);
            $cm->persist($com_Anc);
            $cm->flush();
            return $this->redirectToRoute('commentairesAnc_new',array("annonce"=>$annonce));
        }


        return $this->render('FrontBundle:annonces:new_commentairesAnc.html.twig',array('coms'=>$coms,'form'=>$formView,'annonce'=>$annonces));
    }


    // delete  des comm de l'Anc
    /**
     * @Route("/delete_com/{$com}/{$annonce}", name="commentairesAnc_delete")
     */
    public function deleteAction($com,$annonce)
    {
        $em = $this->getDoctrine()->getManager();
        $comm = $em->getRepository('BackBundle:CommentairesAnc')->find($com);
        $em->remove($comm);
        $em->flush();

        return $this->redirectToRoute('commentairesAnc_new',array("annonce"=>$annonce));
    }

    // edit des comm de l'Anc

    /**
     * @Route("/Edit_com/{$com}/{$annonce}", name="commentairesAnc_Edit")
     */
    public function editAction(Request $request,$com,$annonce)
    {
        $em = $this->getDoctrine()->getManager();
        $com_Anc = $em->getRepository('BackBundle:CommentairesAnc')->find($com);
        $form=$this->createForm( CommentairesAncType::class,$com_Anc);
        ///récupérer annonce
        $annonces = $em->getRepository('BackBundle:Annonces')->find($annonce);
        $formView=$form->createView();
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid())
        {
            $em->persist($com_Anc);
            $em->flush();

            return $this->redirectToRoute('commentairesAnc_new',array("annonce"=>$annonce));
        }
        return $this->render('FrontBundle:annonces:edit_commantaireAnc.html.twig',array('form'=>$formView,'annonce'=>$annonces));
    }
    // les services web des commentaires de l'Anc

    public function allAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BackBundle:CommentairesAnc')->find($id);

        if ($user->hasRole('ROLE_CLIENT')) {

            $com_Anc = $em->getRepository('BackBundle:CommentairesAnc')->findBy(array("client"=>$user));

        }else if ($user->hasRole('ROLE_COM')) {

            $com_Anc=$em
                ->createQueryBuilder('c')
                ->from('AppBundle:CommentairesAnc','c')
                ->join('AppBundle:Annonces','a')
                ->select(array('c', 'a'))
                ->where('c.annonce=a.id and a.commercial= :user')
                ->setParameter('user',$user)
                ->getQuery()
                ->getResult();

        }

        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($com_Anc, 'json');

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


    public function findAction($id)
    {
        $com_Anc = $this->getDoctrine()->getManager()
            ->getRepository('BackBundle:CommentairesAnc')
            ->find($id);
        $serializer = SerializerBuilder::create()->build();
        $formatted = $serializer->serialize($com_Anc, 'json');

        return new JsonResponse($formatted);
    }

    public function newAncAction(Request $request,$annonce)
    {
        $em = $this->getDoctrine()->getManager();
        $com_Anc= new CommentairesAnc();
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
