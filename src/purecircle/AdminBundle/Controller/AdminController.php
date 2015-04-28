<?php

namespace purecircle\AdminBundle\Controller;

use purecircle\AdminBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller {

    public function indexAction() {
        return $this->render('purecircleAdminBundle:Default:dashboard.html.twig');
    }

}
