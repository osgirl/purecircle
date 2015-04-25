<?php

namespace purecircle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('purecircleMainBundle:Default:index.html.twig');
    }
    
    public function loginAction(Request $request) {
        
        $authenticationUtils = $this->get('security.authentication_utils');
// get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        
        return $this->render(
                    'purecircleMainBundle:Default:login.html.twig', array(// last username entered by the user
                    'error' => $error,
                        )
        );
    }

}
