<?php

namespace purecircle\ManagerBundle\Entity;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * TechAdv
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity
 * @UniqueEntity(fields="payrollNumber", message="Payroll Number already Exists")
 * @UniqueEntity(fields="idNumber", message="id Number already exits")
 */
class TechAdv {

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
     *  message = "first name cannot be blank")
     * @Assert\Length( min = "2",max = "50", minMessage = "first Name is too short", maxMessage = "Please less than 50 chars for first name") 
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     * @Assert\NotBlank(
     *  message = "Last name cannot be blank")
     * @Assert\Length( min = "2",max = "50", minMessage = "last Name is too short", maxMessage = "Please less than 50 chars for last name") 
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     * * @Assert\NotBlank(
     *  message = " Gender cannot be blank")
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var string
     * @Assert\NotBlank(
     *  message = "Contact cannot be blank")
     * @Assert\Length( min = "9",max = "11", minMessage = "Wrong Contact Number format", maxMessage = "Wrong Number Format") 
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;

    /**
     * @var string
     * @Assert\NotBlank(
     *  message = "Id number cannot be blank")
     * @ORM\Column(name="idNumber", type="string", length=255)
     */
    private $idNumber;

    /**
     * @var string
     * @Assert\NotBlank(
     *  message = "Payroll number cannot be blank")
     * @ORM\Column(name="payrollNumber", type="string", length=255)
     */
    private $payrollNumber;

    /**
     * @var string
     * @Assert\NotBlank(
     *  message = "region cannot be blank")
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var string
     * @Assert\NotBlank(
     *  message = "Village cannot be blank")
     * @ORM\Column(name="village", type="string", length=255)
     */
    private $village;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255,nullable=true)
     */
    private $longitude;

    /**
     * @var string
     * @Assert\NotBlank(
     *  message = "Manager Wasnt found")
     * @ORM\Column(name="ManagerId", type="string", length=255)
     */
    private $managerId;

    /**
     * @var string
     *
     * @ORM\Column(name="remarks", type="string", length=255,nullable=true)
     */
    private $remarks;

    /**
     * @var \DateTime
     * @Assert\NotBlank(
     *  message = "Date is required") 
     * @ORM\Column(name="dateAdded", type="date")
     */
    private $dateAdded;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return TechAdv
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return TechAdv
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return TechAdv
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

    /**
     * Set contact
     *
     * @param string $contact
     * @return TechAdv
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
     * Set idNumber
     *
     * @param string $idNumber
     * @return TechAdv
     */
    public function setIdNumber($idNumber) {
        $this->idNumber = $idNumber;

        return $this;
    }

    /**
     * Get idNumber
     *
     * @return string 
     */
    public function getIdNumber() {
        return $this->idNumber;
    }

    /**
     * Set payrollNumber
     *
     * @param string $payrollNumber
     * @return TechAdv
     */
    public function setPayrollNumber($payrollNumber) {
        $this->payrollNumber = $payrollNumber;

        return $this;
    }

    /**
     * Get payrollNumber
     *
     * @return string 
     */
    public function getPayrollNumber() {
        return $this->payrollNumber;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return TechAdv
     */
    public function setRegion($region) {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion() {
        return $this->region;
    }

    /**
     * Set village
     *
     * @param string $village
     * @return TechAdv
     */
    public function setVillage($village) {
        $this->village = $village;

        return $this;
    }

    /**
     * Get village
     *
     * @return string 
     */
    public function getVillage() {
        return $this->village;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return TechAdv
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return TechAdv
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * Set managerId
     *
     * @param string $managerId
     * @return TechAdv
     */
    public function setManagerId($managerId) {
        $this->managerId = $managerId;

        return $this;
    }

    /**
     * Get managerId
     *
     * @return string 
     */
    public function getManagerId() {
        return $this->managerId;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     * @return TechAdv
     */
    public function setRemarks($remarks) {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string 
     */
    public function getRemarks() {
        return $this->remarks;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return TechAdv
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

}
