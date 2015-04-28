<?php

namespace purecircle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * County
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class County
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="countyName", type="string", length=255)
     */
    private $countyName;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set countyName
     *
     * @param string $countyName
     * @return County
     */
    public function setCountyName($countyName)
    {
        $this->countyName = $countyName;

        return $this;
    }

    /**
     * Get countyName
     *
     * @return string 
     */
    public function getCountyName()
    {
        return $this->countyName;
    } 
    
    public function __toString() {
        return $this->countyName;
        
    }
}
