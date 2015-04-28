<?php

namespace purecircle\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('purecircleManagerBundle:Default:index.html.twig');
    }
}
