<?php

/*
 
 */

namespace purecircle\classes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use purecircle\AdminBundle\Entity\User;
/**
 * Description of Manager 
 *
 * @author paulem
 */
class Manager extends Controller{
   
    public function getManager() {
       
        
        $id= $this->getUser();
        
        return $id;
    }
}
