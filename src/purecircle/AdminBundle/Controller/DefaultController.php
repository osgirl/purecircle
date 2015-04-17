<?php

namespace purecircle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('purecircleAdminBundle:Default:adminhome.html.twig');
    }
    
    
   public function registerAction( Request $request )
    {
           $session = $this->getRequest()->getSession();
           $em = $this->getDoctrine()->getEntityManager();
          
           
           if($request->getMethod() == 'POST'){
               
               
               return $this->render('purecircleAdminBundle:Default:newuser.html.twig');
           }
        
    } 
}
