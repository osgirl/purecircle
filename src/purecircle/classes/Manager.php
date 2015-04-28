<?php

/*
 
 */
namespace purecircle\classes;
use purecircle\AdminBundle\Entity\User as User;
/**
 * Description of Manager 
 *
 * @author paulem
 */
class Manager {
   
    public function getManager() {
       $user=new User();
       $manager=$user->getId();
       return $manager;
        
    }
}
