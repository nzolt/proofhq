<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofAddRecipientRequestObject
{

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var int $role
     */
    protected $role = null;

    /**
     * @var int $email_notification
     */
    protected $email_notification = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $position
     */
    protected $position = null;

    /**
     * @var boolean $primary_decision_maker
     */
    protected $primary_decision_maker = null;

    /**
     * @var int $stage_id
     */
    protected $stage_id = null;

    /**
     * @param string $email
     * @param int $role
     * @param int $email_notification
     * @param string $name
     * @param string $position
     * @param boolean $primary_decision_maker
     * @param int $stage_id
     */
    public function __construct($email, $role, $email_notification, $name, $position, $primary_decision_maker, $stage_id)
    {
      $this->email = $email;
      $this->role = $role;
      $this->email_notification = $email_notification;
      $this->name = $name;
      $this->position = $position;
      $this->primary_decision_maker = $primary_decision_maker;
      $this->stage_id = $stage_id;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofAddRecipientRequestObject
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return int
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param int $role
     * @return \Boskee\ProofHQ\SOAPWorkflowProofAddRecipientRequestObject
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return int
     */
    public function getEmail_notification()
    {
      return $this->email_notification;
    }

    /**
     * @param int $email_notification
     * @return \Boskee\ProofHQ\SOAPWorkflowProofAddRecipientRequestObject
     */
    public function setEmail_notification($email_notification)
    {
      $this->email_notification = $email_notification;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofAddRecipientRequestObject
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofAddRecipientRequestObject
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrimary_decision_maker()
    {
      return $this->primary_decision_maker;
    }

    /**
     * @param boolean $primary_decision_maker
     * @return \Boskee\ProofHQ\SOAPWorkflowProofAddRecipientRequestObject
     */
    public function setPrimary_decision_maker($primary_decision_maker)
    {
      $this->primary_decision_maker = $primary_decision_maker;
      return $this;
    }

    /**
     * @return int
     */
    public function getStage_id()
    {
      return $this->stage_id;
    }

    /**
     * @param int $stage_id
     * @return \Boskee\ProofHQ\SOAPWorkflowProofAddRecipientRequestObject
     */
    public function setStage_id($stage_id)
    {
      $this->stage_id = $stage_id;
      return $this;
    }

}
