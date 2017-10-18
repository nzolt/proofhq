<?php

namespace Boskee\ProofHQ;

class SOAPContactObject
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $position
     */
    protected $position = null;

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
     * @var SOAPContactProofingDefaultsObject $proofing_defaults
     */
    protected $proofing_defaults = null;

    /**
     * @param string $type
     * @param string $email
     * @param string $name
     * @param string $company
     * @param string $position
     * @param string $telephone
     * @param string $mobile
     * @param string $fax
     * @param SOAPContactProofingDefaultsObject $proofing_defaults
     */
    public function __construct($type, $email, $name, $company, $position, $telephone, $mobile, $fax, $proofing_defaults)
    {
      $this->type = $type;
      $this->email = $email;
      $this->name = $name;
      $this->company = $company;
      $this->position = $position;
      $this->telephone = $telephone;
      $this->mobile = $mobile;
      $this->fax = $fax;
      $this->proofing_defaults = $proofing_defaults;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Boskee\ProofHQ\SOAPContactObject
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Boskee\ProofHQ\SOAPContactObject
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Boskee\ProofHQ\SOAPContactObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->company;
    }

    /**
     * @param string $company
     * @return \Boskee\ProofHQ\SOAPContactObject
     */
    public function setCompany($company)
    {
      $this->company = $company;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param string $position
     * @return \Boskee\ProofHQ\SOAPContactObject
     */
    public function setPosition($position)
    {
      $this->position = $position;
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
     * @return \Boskee\ProofHQ\SOAPContactObject
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
     * @return \Boskee\ProofHQ\SOAPContactObject
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
     * @return \Boskee\ProofHQ\SOAPContactObject
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return SOAPContactProofingDefaultsObject
     */
    public function getProofing_defaults()
    {
      return $this->proofing_defaults;
    }

    /**
     * @param SOAPContactProofingDefaultsObject $proofing_defaults
     * @return \Boskee\ProofHQ\SOAPContactObject
     */
    public function setProofing_defaults($proofing_defaults)
    {
      $this->proofing_defaults = $proofing_defaults;
      return $this;
    }

}
