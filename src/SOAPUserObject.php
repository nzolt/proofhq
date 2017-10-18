<?php

namespace Boskee\ProofHQ;

class SOAPUserObject
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $openid
     */
    protected $openid = null;

    /**
     * @var string $first_name
     */
    protected $first_name = null;

    /**
     * @var string $last_name
     */
    protected $last_name = null;

    /**
     * @var string $position
     */
    protected $position = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var SOAPPermissionsObject $permissions
     */
    protected $permissions = null;

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
     * @var string $date_timezone
     */
    protected $date_timezone = null;

    /**
     * @var string $date_format
     */
    protected $date_format = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var SOAPUserProofingDefaultsObject $proofing_defaults
     */
    protected $proofing_defaults = null;

    /**
     * @var SOAPUserEmailObjectArray $email_aliases
     */
    protected $email_aliases = null;

    /**
     * @var boolean $product_marketing_emails
     */
    protected $product_marketing_emails = null;

    /**
     * @var boolean $api_only
     */
    protected $api_only = null;

    /**
     * @var boolean $send_proof_ready_email
     */
    protected $send_proof_ready_email = null;

    /**
     * @var string $api_token
     */
    protected $api_token = null;

    /**
     * @var string $reference_id
     */
    protected $reference_id = null;

    /**
     * @param int $id
     * @param string $email
     * @param string $openid
     * @param string $first_name
     * @param string $last_name
     * @param string $position
     * @param string $status
     * @param SOAPPermissionsObject $permissions
     * @param string $street
     * @param string $city
     * @param string $state
     * @param string $postcode
     * @param string $country
     * @param string $telephone
     * @param string $mobile
     * @param string $fax
     * @param string $date_timezone
     * @param string $date_format
     * @param string $language
     * @param SOAPUserProofingDefaultsObject $proofing_defaults
     * @param SOAPUserEmailObjectArray $email_aliases
     * @param boolean $product_marketing_emails
     * @param boolean $api_only
     * @param boolean $send_proof_ready_email
     * @param string $api_token
     * @param string $reference_id
     */
    public function __construct($id, $email, $openid, $first_name, $last_name, $position, $status, $permissions, $street, $city, $state, $postcode, $country, $telephone, $mobile, $fax, $date_timezone, $date_format, $language, $proofing_defaults, $email_aliases, $product_marketing_emails, $api_only, $send_proof_ready_email, $api_token, $reference_id)
    {
      $this->id = $id;
      $this->email = $email;
      $this->openid = $openid;
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->position = $position;
      $this->status = $status;
      $this->permissions = $permissions;
      $this->street = $street;
      $this->city = $city;
      $this->state = $state;
      $this->postcode = $postcode;
      $this->country = $country;
      $this->telephone = $telephone;
      $this->mobile = $mobile;
      $this->fax = $fax;
      $this->date_timezone = $date_timezone;
      $this->date_format = $date_format;
      $this->language = $language;
      $this->proofing_defaults = $proofing_defaults;
      $this->email_aliases = $email_aliases;
      $this->product_marketing_emails = $product_marketing_emails;
      $this->api_only = $api_only;
      $this->send_proof_ready_email = $send_proof_ready_email;
      $this->api_token = $api_token;
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
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpenid()
    {
      return $this->openid;
    }

    /**
     * @param string $openid
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setOpenid($openid)
    {
      $this->openid = $openid;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirst_name()
    {
      return $this->first_name;
    }

    /**
     * @param string $first_name
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setFirst_name($first_name)
    {
      $this->first_name = $first_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getLast_name()
    {
      return $this->last_name;
    }

    /**
     * @param string $last_name
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setLast_name($last_name)
    {
      $this->last_name = $last_name;
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
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SOAPPermissionsObject
     */
    public function getPermissions()
    {
      return $this->permissions;
    }

    /**
     * @param SOAPPermissionsObject $permissions
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setPermissions($permissions)
    {
      $this->permissions = $permissions;
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
     * @return \Boskee\ProofHQ\SOAPUserObject
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
     * @return \Boskee\ProofHQ\SOAPUserObject
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
     * @return \Boskee\ProofHQ\SOAPUserObject
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
     * @return \Boskee\ProofHQ\SOAPUserObject
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
     * @return \Boskee\ProofHQ\SOAPUserObject
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
     * @return \Boskee\ProofHQ\SOAPUserObject
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
     * @return \Boskee\ProofHQ\SOAPUserObject
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
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate_timezone()
    {
      return $this->date_timezone;
    }

    /**
     * @param string $date_timezone
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setDate_timezone($date_timezone)
    {
      $this->date_timezone = $date_timezone;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate_format()
    {
      return $this->date_format;
    }

    /**
     * @param string $date_format
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setDate_format($date_format)
    {
      $this->date_format = $date_format;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return SOAPUserProofingDefaultsObject
     */
    public function getProofing_defaults()
    {
      return $this->proofing_defaults;
    }

    /**
     * @param SOAPUserProofingDefaultsObject $proofing_defaults
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setProofing_defaults($proofing_defaults)
    {
      $this->proofing_defaults = $proofing_defaults;
      return $this;
    }

    /**
     * @return SOAPUserEmailObjectArray
     */
    public function getEmail_aliases()
    {
      return $this->email_aliases;
    }

    /**
     * @param SOAPUserEmailObjectArray $email_aliases
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setEmail_aliases($email_aliases)
    {
      $this->email_aliases = $email_aliases;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProduct_marketing_emails()
    {
      return $this->product_marketing_emails;
    }

    /**
     * @param boolean $product_marketing_emails
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setProduct_marketing_emails($product_marketing_emails)
    {
      $this->product_marketing_emails = $product_marketing_emails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApi_only()
    {
      return $this->api_only;
    }

    /**
     * @param boolean $api_only
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setApi_only($api_only)
    {
      $this->api_only = $api_only;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSend_proof_ready_email()
    {
      return $this->send_proof_ready_email;
    }

    /**
     * @param boolean $send_proof_ready_email
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setSend_proof_ready_email($send_proof_ready_email)
    {
      $this->send_proof_ready_email = $send_proof_ready_email;
      return $this;
    }

    /**
     * @return string
     */
    public function getApi_token()
    {
      return $this->api_token;
    }

    /**
     * @param string $api_token
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setApi_token($api_token)
    {
      $this->api_token = $api_token;
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
     * @return \Boskee\ProofHQ\SOAPUserObject
     */
    public function setReference_id($reference_id)
    {
      $this->reference_id = $reference_id;
      return $this;
    }

}
