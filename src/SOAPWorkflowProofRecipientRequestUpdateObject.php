<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofRecipientRequestUpdateObject
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
     * @var string $position
     */
    protected $position = null;

    /**
     * @var string $decision
     */
    protected $decision = null;

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
     * @param string $position
     * @param string $decision
     * @param int $role
     * @param int $email_notification
     * @param boolean $primary_decision_maker
     */
    public function __construct($recipient_id, $stage_id, $name, $position, $decision, $role, $email_notification, $primary_decision_maker)
    {
      $this->recipient_id = $recipient_id;
      $this->stage_id = $stage_id;
      $this->name = $name;
      $this->position = $position;
      $this->decision = $decision;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientRequestUpdateObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientRequestUpdateObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientRequestUpdateObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientRequestUpdateObject
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return string
     */
    public function getDecision()
    {
      return $this->decision;
    }

    /**
     * @param string $decision
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientRequestUpdateObject
     */
    public function setDecision($decision)
    {
      $this->decision = $decision;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientRequestUpdateObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientRequestUpdateObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientRequestUpdateObject
     */
    public function setPrimary_decision_maker($primary_decision_maker)
    {
      $this->primary_decision_maker = $primary_decision_maker;
      return $this;
    }

}
