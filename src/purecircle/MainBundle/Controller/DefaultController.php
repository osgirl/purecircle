<?php

namespace purecircle\MainBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('purecircleMainBundle:Default:index.html.twig');
    }
    
    
    public function loginAction(Request $request)       
    {
         $session = $this->getRequest()->getSession();
           $em = $this->getDoctrine()->getEntityManager();
           $repo = $em->getRepository('purecircleAdminBundle:User');
        $users=  count($repo->findAll());

        if ($request->getMethod() == 'POST') {
            $username=$request->get('username');
            $password=$request->get('password');
            
            return $this->render('purecircleMainBundle:Default:login.html.twig',array(
                "account" =>($username."  ".$password.$users)
                
            ));
            
            
    }
        return $this->render('purecircleMainBundle:Default:login.html.twig',array(
            "account"=>"no post"
        ));
    
    }
}
