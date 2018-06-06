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
        $anc = array();
        $cats = $em->getRepository('BackBundle:Categories')->findAll();
        $i = 0;
        foreach($cats as $cat){
            $annonces = $em->getRepository('BackBundle:Annonces')->findBy(array("categorie"=>$cat));
            $anc[$i] = array($cat->getDesignation() => count($annonces));
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [
                ['Categorie', 'Annonces'],

                ['Artisanale', 1],
                ['rustique',  2],

            ]
        );
        $pieChart->getOptions()->setPieSliceText('label');
        $pieChart->getOptions()->setTitle('Les Annonces par rapport au categories');
        $pieChart->getOptions()->setPieStartAngle(100);
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getLegend()->setPosition('none');

        $histogram = new Histogram();
        $histogram->getData()->setArrayToDataTable([
            ['Population'],
            [12000000],
            [13000000],
            [100000000],
            [1000000000],
            [25000000],
            [600000],
            [6000000],
            [65000000],
            [210000000],
            [80000000],
        ]);
        $histogram->getOptions()->setTitle('Categorie');
        $histogram->getOptions()->setWidth(900);
        $histogram->getOptions()->setHeight(500);
        $histogram->getOptions()->getLegend()->setPosition('none');
        $histogram->getOptions()->setColors(['#e7711c']);
        $histogram->getOptions()->getHistogram()->setLastBucketPercentile(10);
        $histogram->getOptions()->getHistogram()->setBucketSize(10000000);

        return $this->render('BackBundle:Stats:index.html.twig', array('piechart' => $pieChart, 'histogram' => $histogram));


    }

}
