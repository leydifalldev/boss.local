<?php

namespace Boss\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Boss\CustomerBundle\Repository\CompanyRepository")
 */
class Company
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
     * @ORM\Column(name="legalname", type="string", length=255)
     */
    private $legalname;

    /**
     * @var string
     *
     * @ORM\Column(name="abbreviation", type="string", length=255)
     */
    private $abbreviation;

    /**
     * @var string
     *
     * @ORM\Column(name="sign", type="string", length=255)
     */
    private $sign;

    /**
     * @var string
     *
     * @ORM\Column(name="headoffice", type="string", length=255)
     */
    private $headoffice;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=255)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="capital_type", type="string", length=255, nullable=true)
     */
    private $capitalType;

    /**
     * @var float
     *
     * @ORM\Column(name="capital_amount", type="float", nullable=true)
     */
    private $capitalAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="capital_discharge", type="float", nullable=true)
     */
    private $capitalDischarge;

    /**
     * @var float
     *
     * @ORM\Column(name="capital_bank_amount", type="float", nullable=true)
     */
    private $capitalBankAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_description", type="text", nullable=true)
     */
    private $activityDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="main_activity", type="text", nullable=true)
     */
    private $mainActivity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isCraft", type="boolean", nullable=true)
     */
    private $isCraft;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=255, nullable=true)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=true)
     */
    private $place;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", cascade={"persist"}, inversedBy="company")
     */

    private $user;
    
    
    function __construct($user) {
        $this->user = $user;
    }

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
     * Set legalname
     *
     * @param string $legalname
     * @return Company
     */
    public function setLegalname($legalname)
    {
        $this->legalname = $legalname;

        return $this;
    }

    /**
     * Get legalname
     *
     * @return string 
     */
    public function getLegalname()
    {
        return $this->legalname;
    }

    /**
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return Company
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string 
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Set sign
     *
     * @param string $sign
     * @return Company
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get sign
     *
     * @return string 
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set headoffice
     *
     * @param string $headoffice
     * @return Company
     */
    public function setHeadoffice($headoffice)
    {
        $this->headoffice = $headoffice;

        return $this;
    }

    /**
     * Get headoffice
     *
     * @return string 
     */
    public function getHeadoffice()
    {
        return $this->headoffice;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Company
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Company
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Company
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set capitalType
     *
     * @param string $capitalType
     * @return Company
     */
    public function setCapitalType($capitalType)
    {
        $this->capitalType = $capitalType;

        return $this;
    }

    /**
     * Get capitalType
     *
     * @return string 
     */
    public function getCapitalType()
    {
        return $this->capitalType;
    }

    /**
     * Set capitalAmount
     *
     * @param float $capitalAmount
     * @return Company
     */
    public function setCapitalAmount($capitalAmount)
    {
        $this->capitalAmount = $capitalAmount;

        return $this;
    }

    /**
     * Get capitalAmount
     *
     * @return float 
     */
    public function getCapitalAmount()
    {
        return $this->capitalAmount;
    }

    /**
     * Set capitalDischarge
     *
     * @param float $capitalDischarge
     * @return Company
     */
    public function setCapitalDischarge($capitalDischarge)
    {
        $this->capitalDischarge = $capitalDischarge;

        return $this;
    }

    /**
     * Get capitalDischarge
     *
     * @return float 
     */
    public function getCapitalDischarge()
    {
        return $this->capitalDischarge;
    }

    /**
     * Set capitalBankAmount
     *
     * @param float $capitalBankAmount
     * @return Company
     */
    public function setCapitalBankAmount($capitalBankAmount)
    {
        $this->capitalBankAmount = $capitalBankAmount;

        return $this;
    }

    /**
     * Get capitalBankAmount
     *
     * @return float 
     */
    public function getCapitalBankAmount()
    {
        return $this->capitalBankAmount;
    }

    /**
     * Set activityDescription
     *
     * @param string $activityDescription
     * @return Company
     */
    public function setActivityDescription($activityDescription)
    {
        $this->activityDescription = $activityDescription;

        return $this;
    }

    /**
     * Get activityDescription
     *
     * @return string 
     */
    public function getActivityDescription()
    {
        return $this->activityDescription;
    }

    /**
     * Set mainActivity
     *
     * @param string $mainActivity
     * @return Company
     */
    public function setMainActivity($mainActivity)
    {
        $this->mainActivity = $mainActivity;

        return $this;
    }

    /**
     * Get mainActivity
     *
     * @return string 
     */
    public function getMainActivity()
    {
        return $this->mainActivity;
    }

    /**
     * Set isCraft
     *
     * @param boolean $isCraft
     * @return Company
     */
    public function setIsCraft($isCraft)
    {
        $this->isCraft = $isCraft;

        return $this;
    }

    /**
     * Get isCraft
     *
     * @return boolean 
     */
    public function getIsCraft()
    {
        return $this->isCraft;
    }

    /**
     * Set nature
     *
     * @param string $nature
     * @return Company
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Company
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }
    
    function getUser() {
        return $this->user;
    }

    function setUser($user) {
        $this->user = $user;
    }

}
