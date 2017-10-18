<?php

namespace Boskee\ProofHQ;

class SOAPPlanObject
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
     * @var float $price
     */
    protected $price = null;

    /**
     * @var boolean $enterprise
     */
    protected $enterprise = null;

    /**
     * @var int $user_limit
     */
    protected $user_limit = null;

    /**
     * @var int $storage_limit
     */
    protected $storage_limit = null;

    /**
     * @var int $proof_limit
     */
    protected $proof_limit = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @param int $id
     * @param string $name
     * @param float $price
     * @param boolean $enterprise
     * @param int $user_limit
     * @param int $storage_limit
     * @param int $proof_limit
     * @param int $type
     */
    public function __construct($id, $name, $price, $enterprise, $user_limit, $storage_limit, $proof_limit, $type)
    {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->enterprise = $enterprise;
      $this->user_limit = $user_limit;
      $this->storage_limit = $storage_limit;
      $this->proof_limit = $proof_limit;
      $this->type = $type;
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
     * @return \Boskee\ProofHQ\SOAPPlanObject
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
     * @return \Boskee\ProofHQ\SOAPPlanObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \Boskee\ProofHQ\SOAPPlanObject
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnterprise()
    {
      return $this->enterprise;
    }

    /**
     * @param boolean $enterprise
     * @return \Boskee\ProofHQ\SOAPPlanObject
     */
    public function setEnterprise($enterprise)
    {
      $this->enterprise = $enterprise;
      return $this;
    }

    /**
     * @return int
     */
    public function getUser_limit()
    {
      return $this->user_limit;
    }

    /**
     * @param int $user_limit
     * @return \Boskee\ProofHQ\SOAPPlanObject
     */
    public function setUser_limit($user_limit)
    {
      $this->user_limit = $user_limit;
      return $this;
    }

    /**
     * @return int
     */
    public function getStorage_limit()
    {
      return $this->storage_limit;
    }

    /**
     * @param int $storage_limit
     * @return \Boskee\ProofHQ\SOAPPlanObject
     */
    public function setStorage_limit($storage_limit)
    {
      $this->storage_limit = $storage_limit;
      return $this;
    }

    /**
     * @return int
     */
    public function getProof_limit()
    {
      return $this->proof_limit;
    }

    /**
     * @param int $proof_limit
     * @return \Boskee\ProofHQ\SOAPPlanObject
     */
    public function setProof_limit($proof_limit)
    {
      $this->proof_limit = $proof_limit;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param int $type
     * @return \Boskee\ProofHQ\SOAPPlanObject
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
