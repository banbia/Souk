<?php

namespace Souk\BackBundle\Controller;
use Souk\BackBundle\Entity\Categories;
use Souk\BackBundle\Entity\Annonces;


use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Histogram;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cats = $em->getRepository('BackBundle:Categories')->findAll();
        $anc = array();
        $anc[0] = array('Catégorie','Annoces');
        $i=1;
        foreach($cats as $cat){
            $annonces = $em->getRepository('BackBundle:Annonces')->findBy(array("categorie"=>$cat));
            $anc[$i] = array($cat->getDesignation(),count($annonces));
            $i = $i+1;
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable($anc);
        $pieChart->getOptions()->setPieSliceText('label');
        $pieChart->getOptions()->setTitle('Les Annonces par rapport au categories');
        $pieChart->getOptions()->setPieStartAngle(100);
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getLegend()->setPosition('none');
        return $this->render('BackBundle:Stats:index.html.twig', array('piechart' => $pieChart));


    }

}
