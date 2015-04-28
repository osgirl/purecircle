<?php

namespace purecircle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User implements AdvancedUserInterface {

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
     * @Assert\NotBlank(
     *  message = "Full name cannot be blank")
     * @Assert\Length( min = "4",max = "50", minMessage = "Fuul Name is too short", maxMessage = "Please less than 50 chars") 
     * @ORM\Column(name="fullname", type="string", length=255)
     */
    private $fullname;

    /**
     * @var string
     * @Assert\NotBlank(
     *  message = "Username cannot be blank")
     * @Assert\Length( min = "3",max = "50", minMessage = "Username is oo short", maxMessage = "Username is too long" )
     * @ORM\Column(name="username", type="string", length=255,unique=true)
     */
    private $username;

    /**
     * @var \DateTime
     * @ORM\Column(name="dateAdded", type="date")
     */
    private $dateAdded;

    /**
     * @var string
     * @Assert\NotBlank(
     *  message = "The Password Field cannot be blank")
     * @Assert\Length( min = "4", minMessage = "Password is too short")
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     * @Assert\NotBlank(
     *  message = "The email cannot be blank"
     * )
     * @Assert\Email(
     *  message = "The email '{{ value }}' is not a valid email."
     * )
     * @ORM\Column(name="email", type="string", length=255,unique=true)
     */
    private $email;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var string
     * @ORM\Column(name="county", type="string", length=255)
     */
    private $county;

    /**
     * @var string
     * *@Assert\NotBlank(
     *  message = "The Contact field cannot be blank")
     * @Assert\Length(min=9,minMessage="Contact Field lenght too short")
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="is_active", type="boolean",nullable=true)
     */
    private $isActive;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function __construct() {
      
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_BCRYPT);

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Get isActive
     *
     * @return string 
     */
    public function getIsActive() {
        return $this->isActive;
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        return array('ROLE_USER');
    }

    public function getSalt() {
        return null;
    }

    /**
     * Set county
     *
     * @param string $county
     * @return User
     */
    public function setCounty($county) {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return string 
     */
    public function getCounty() {
        return $this->county;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive) {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return User
     */
    public function setContact($contact) {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return User
     */
    public function setFullname($fullname) {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname() {
        return $this->fullname;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return User
     */
    public function setDateAdded($dateAdded) {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime 
     */
    public function getDateAdded() {
        return $this->dateAdded;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender) {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender() {
        return $this->gender;
    }

    public function isAccountNonExpired() {
        return TRUE;
    }

    public function isAccountNonLocked() {
         return TRUE;
    }

    public function isCredentialsNonExpired() {
         return TRUE;
    }

    public function isEnabled() {
         return $this->isActive;
    }

}
