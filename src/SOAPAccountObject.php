<?php

namespace Boskee\ProofHQ;

class SOAPAccountObject
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var SOAPMembershipObject $membership
     */
    protected $membership = null;

    /**
     * @var SOAPUserObjectArray $users
     */
    protected $users = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $postcode
     */
    protected $postcode = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $telephone
     */
    protected $telephone = null;

    /**
     * @var string $mobile
     */
    protected $mobile = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var string $domain
     */
    protected $domain = null;

    /**
     * @var SOAPAccountPasswordSettingsObject $password_settings
     */
    protected $password_settings = null;

    /**
     * @var SOAPAccountProofingDefaultsObject $proofing_defaults
     */
    protected $proofing_defaults = null;

    /**
     * @var string $reference_id
     */
    protected $reference_id = null;

    /**
     * @param int $id
     * @param string $name
     * @param SOAPMembershipObject $membership
     * @param SOAPUserObjectArray $users
     * @param string $street
     * @param string $city
     * @param string $state
     * @param string $postcode
     * @param string $country
     * @param string $telephone
     * @param string $mobile
     * @param string $fax
     * @param string $domain
     * @param SOAPAccountPasswordSettingsObject $password_settings
     * @param SOAPAccountProofingDefaultsObject $proofing_defaults
     * @param string $reference_id
     */
    public function __construct($id, $name, $membership, $users, $street, $city, $state, $postcode, $country, $telephone, $mobile, $fax, $domain, $password_settings, $proofing_defaults, $reference_id)
    {
      $this->id = $id;
      $this->name = $name;
      $this->membership = $membership;
      $this->users = $users;
      $this->street = $street;
      $this->city = $city;
      $this->state = $state;
      $this->postcode = $postcode;
      $this->country = $country;
      $this->telephone = $telephone;
      $this->mobile = $mobile;
      $this->fax = $fax;
      $this->domain = $domain;
      $this->password_settings = $password_settings;
      $this->proofing_defaults = $proofing_defaults;
      $this->reference_id = $reference_id;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SOAPMembershipObject
     */
    public function getMembership()
    {
      return $this->membership;
    }

    /**
     * @param SOAPMembershipObject $membership
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setMembership($membership)
    {
      $this->membership = $membership;
      return $this;
    }

    /**
     * @return SOAPUserObjectArray
     */
    public function getUsers()
    {
      return $this->users;
    }

    /**
     * @param SOAPUserObjectArray $users
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setUsers($users)
    {
      $this->users = $users;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param string $street
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
      return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setTelephone($telephone)
    {
      $this->telephone = $telephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
      return $this->mobile;
    }

    /**
     * @param string $mobile
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setMobile($mobile)
    {
      $this->mobile = $mobile;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
      return $this->domain;
    }

    /**
     * @param string $domain
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setDomain($domain)
    {
      $this->domain = $domain;
      return $this;
    }

    /**
     * @return SOAPAccountPasswordSettingsObject
     */
    public function getPassword_settings()
    {
      return $this->password_settings;
    }

    /**
     * @param SOAPAccountPasswordSettingsObject $password_settings
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setPassword_settings($password_settings)
    {
      $this->password_settings = $password_settings;
      return $this;
    }

    /**
     * @return SOAPAccountProofingDefaultsObject
     */
    public function getProofing_defaults()
    {
      return $this->proofing_defaults;
    }

    /**
     * @param SOAPAccountProofingDefaultsObject $proofing_defaults
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setProofing_defaults($proofing_defaults)
    {
      $this->proofing_defaults = $proofing_defaults;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference_id()
    {
      return $this->reference_id;
    }

    /**
     * @param string $reference_id
     * @return \Boskee\ProofHQ\SOAPAccountObject
     */
    public function setReference_id($reference_id)
    {
      $this->reference_id = $reference_id;
      return $this;
    }

}
