<?php

namespace Boskee\ProofHQ;

class SOAPDecisionObject
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
     * @var boolean $status
     */
    protected $status = null;

    /**
     * @var boolean $reason
     */
    protected $reason = null;

    /**
     * @var boolean $post_message
     */
    protected $post_message = null;

    /**
     * @param int $id
     * @param string $name
     * @param boolean $status
     * @param boolean $reason
     * @param boolean $post_message
     */
    public function __construct($id, $name, $status, $reason, $post_message)
    {
      $this->id = $id;
      $this->name = $name;
      $this->status = $status;
      $this->reason = $reason;
      $this->post_message = $post_message;
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
     * @return \Boskee\ProofHQ\SOAPDecisionObject
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
     * @return \Boskee\ProofHQ\SOAPDecisionObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param boolean $status
     * @return \Boskee\ProofHQ\SOAPDecisionObject
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param boolean $reason
     * @return \Boskee\ProofHQ\SOAPDecisionObject
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPost_message()
    {
      return $this->post_message;
    }

    /**
     * @param boolean $post_message
     * @return \Boskee\ProofHQ\SOAPDecisionObject
     */
    public function setPost_message($post_message)
    {
      $this->post_message = $post_message;
      return $this;
    }

}
