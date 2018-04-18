<?php

namespace Souk\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
class SignalsEvsController extends Controller
{
    /**
     * @Route("/admin", name="admin_homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('BackBundle:admin:home.html.twig');
    }
}
