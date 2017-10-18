<?php

namespace Boskee\ProofHQ;

class SOAPCallbackObject
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var int $interval
     */
    protected $interval = null;

    /**
     * @var string $proof_name
     */
    protected $proof_name = null;

    /**
     * @param string $type
     */
    public function __construct($type)
    {
      $this->type = $type;
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
     * @return \Boskee\ProofHQ\SOAPCallbackObject
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Boskee\ProofHQ\SOAPCallbackObject
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return int
     */
    public function getInterval()
    {
      return $this->interval;
    }

    /**
     * @param int $interval
     * @return \Boskee\ProofHQ\SOAPCallbackObject
     */
    public function setInterval($interval)
    {
      $this->interval = $interval;
      return $this;
    }

    /**
     * @return string
     */
    public function getProof_name()
    {
      return $this->proof_name;
    }

    /**
     * @param string $proof_name
     * @return \Boskee\ProofHQ\SOAPCallbackObject
     */
    public function setProof_name($proof_name)
    {
      $this->proof_name = $proof_name;
      return $this;
    }

}
