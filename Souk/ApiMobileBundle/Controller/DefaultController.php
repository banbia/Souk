<?php

namespace ApiMobileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApiMobileBundle:Default:index.html.twig');
    }
}
