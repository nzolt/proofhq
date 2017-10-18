<?php

namespace Boskee\ProofHQ;

class SOAPProfileObject
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
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $id
     * @param string $email
     * @param string $name
     */
    public function __construct($id, $email, $name)
    {
      $this->id = $id;
      $this->email = $email;
      $this->name = $name;
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
     * @return \Boskee\ProofHQ\SOAPProfileObject
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
     * @return \Boskee\ProofHQ\SOAPProfileObject
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
     * @return \Boskee\ProofHQ\SOAPProfileObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
