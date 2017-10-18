<?php

namespace Boskee\ProofHQ;

class SOAPUserEmailObject
{

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param string $email
     * @param string $status
     */
    public function __construct($email, $status)
    {
      $this->email = $email;
      $this->status = $status;
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
     * @return \Boskee\ProofHQ\SOAPUserEmailObject
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Boskee\ProofHQ\SOAPUserEmailObject
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
