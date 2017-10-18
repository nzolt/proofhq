<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowRecipientRequestUpdateObject
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
     * @param int $role
     * @param int $email_notification
     * @param boolean $primary_decision_maker
     */
    public function __construct($recipient_id, $stage_id, $role, $email_notification, $primary_decision_maker)
    {
      $this->recipient_id = $recipient_id;
      $this->stage_id = $stage_id;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientRequestUpdateObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientRequestUpdateObject
     */
    public function setStage_id($stage_id)
    {
      $this->stage_id = $stage_id;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientRequestUpdateObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientRequestUpdateObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientRequestUpdateObject
     */
    public function setPrimary_decision_maker($primary_decision_maker)
    {
      $this->primary_decision_maker = $primary_decision_maker;
      return $this;
    }

}
