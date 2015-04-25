<?php

namespace purecircle\AdminBundle\Controller;
use purecircle\AdminBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller {

    public function indexAction() {
        return $this->render('purecircleAdminBundle:Default:dashboard.html.twig');
    }

    public function registerAction(Request $request) 
       {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
         $repo = $em->getRepository('purecircleAdminBundle:User');
         $total=count($repo->findAll());
        if ($request->getMethod() == 'POST') {      
            //get the post from the form
            $fullname=$request->get('fullname');
            $username=$request->get('username');
            $password=$request->get('password');
            $email=$request->get('email');
            $county=$request->get('county');
            $contact=$request->get('contact'); 
             
            $user = new User();
            $user->setUsername($username);
            $user->setPassword($password);
            $user->setEmail($email);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->render('purecircleAdminBundle:Default:systemuser.html.twig');
       
            }
         return $this->render('purecircleAdminBundle:Default:systemuser.html.twig');
        
        
    }
   
    
    //function check credetials
   public function check($fn,$cn,$ps,$us){
       
       } 

}
