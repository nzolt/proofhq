<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowRecipientObject
{

    /**
     * @var int $recipient_id
     */
    protected $recipient_id = null;

    /**
     * @var int $stage_id
     */
    protected $stage_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $position
     */
    protected $position = null;

    /**
     * @var int $role
     */
    protected $role = null;

    /**
     * @var int $email_notification
     */
    protected $email_notification = null;

    /**
     * @var boolean $primary_decision_maker
     */
    protected $primary_decision_maker = null;

    /**
     * @param int $recipient_id
     * @param int $stage_id
     * @param string $name
     * @param string $email
     * @param string $position
     * @param int $role
     * @param int $email_notification
     * @param boolean $primary_decision_maker
     */
    public function __construct($recipient_id, $stage_id, $name, $email, $position, $role, $email_notification, $primary_decision_maker)
    {
      $this->recipient_id = $recipient_id;
      $this->stage_id = $stage_id;
      $this->name = $name;
      $this->email = $email;
      $this->position = $position;
      $this->role = $role;
      $this->email_notification = $email_notification;
      $this->primary_decision_maker = $primary_decision_maker;
    }

    /**
     * @return int
     */
    public function getRecipient_id()
    {
      return $this->recipient_id;
    }

    /**
     * @param int $recipient_id
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientObject
     */
    public function setRecipient_id($recipient_id)
    {
      $this->recipient_id = $recipient_id;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientObject
     */
    public function setStage_id($stage_id)
    {
      $this->stage_id = $stage_id;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientObject
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientObject
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientObject
     */
    public function setPosition($position)
    {
      $this->position = $position;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientObject
     */
    public function setEmail_notification($email_notification)
    {
      $this->email_notification = $email_notification;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientObject
     */
    public function setPrimary_decision_maker($primary_decision_maker)
    {
      $this->primary_decision_maker = $primary_decision_maker;
      return $this;
    }

}
