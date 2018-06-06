<?php

namespace Souk\FrontBundle\Controller;

use Souk\BackBundle\Entity\Abonnements;
use Souk\BackBundle\Entity\HistoriqueAbs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ComAbonnementsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $histoabo = $em->getRepository('BackBundle:HistoriqueAbs')->findBy(array('commercial'=>$user));
        $abs = $em->getRepository('BackBundle:Abonnements')->findAll();

        return $this->render('FrontBundle:ComAbonnement:ComAbonnement.html.twig', array(
            'histoabo' => $histoabo,
            'abs' => $abs,
        ));
    }
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $histoabo = $em->getRepository('BackBundle:HistoriqueAbs')->findBy(array('commercial'=>$user));

        return $this->render('BackBundle:ComAbonnement:ComAbonnement.html.twig', array(
            'histoabo' => $histoabo,
        ));
    }
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $histoabo = $em->getRepository('BackBundle:HistoriqueAbs')->findBy(array('commercial'=>$user));

        return $this->render('BackBundle:ComAbonnement:ComAbonnement.html.twig', array(
            'histoabo' => $histoabo,
        ));
    }

    public function exportAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $histoabo = $em->getRepository('BackBundle:HistoriqueAbs')->findBy(array('commercial'=>$user));

        $writer = $this->container->get('egyg33k.csv.writer');
        $csv = $writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(['Abonnement', 'Date Abonnement', 'Etat']);

        foreach ($histoabo as $histo){

            $histor = $histo->getEtat();

            if ($histor == 0)

            {
                $hist = "Valide";
            }
            elseif ($histor == 1)
            {
                $hist = "Expiré";
            }
            else
            {
                $hist = "En attente de validation";
            }

            $csv->insertOne([$histo-> getAbonnement()->getDesignation(), $histo->getDateAb()->format('Y-m-d H:i:s'), $hist]);
        }
        $csv->output('histoAb.csv');
        exit;
    }
}
