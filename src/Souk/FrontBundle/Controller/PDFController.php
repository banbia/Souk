<?php
namespace Souk\FrontBundle\Controller;

use Souk\BackBundle\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PDFController extends Controller
{
    public function pdfshowAction(Commandes $commande)
    {
        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('FrontBundle:commandes:pdf_commande.html.twig', array(
            "commande"=>$commande
        ));

        $filename = 'commande';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }
}
