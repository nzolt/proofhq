<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofRecipientObject
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
     * @var string $decision
     */
    protected $decision = null;

    /**
     * @var int $email_notification
     */
    protected $email_notification = null;

    /**
     * @var boolean $primary_decision_maker
     */
    protected $primary_decision_maker = null;

    /**
     * @var string $proof_url
     */
    protected $proof_url = null;

    /**
     * @param int $recipient_id
     * @param int $stage_id
     * @param string $name
     * @param string $email
     * @param string $position
     * @param int $role
     * @param string $decision
     * @param int $email_notification
     * @param boolean $primary_decision_maker
     * @param string $proof_url
     */
    public function __construct($recipient_id, $stage_id, $name, $email, $position, $role, $decision, $email_notification, $primary_decision_maker, $proof_url)
    {
      $this->recipient_id = $recipient_id;
      $this->stage_id = $stage_id;
      $this->name = $name;
      $this->email = $email;
      $this->position = $position;
      $this->role = $role;
      $this->decision = $decision;
      $this->email_notification = $email_notification;
      $this->primary_decision_maker = $primary_decision_maker;
      $this->proof_url = $proof_url;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObject
     */
    public function setRole($role)
    {
      $this->role = $role;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObject
     */
    public function setDecision($decision)
    {
      $this->decision = $decision;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObject
     */
    public function setPrimary_decision_maker($primary_decision_maker)
    {
      $this->primary_decision_maker = $primary_decision_maker;
      return $this;
    }

    /**
     * @return string
     */
    public function getProof_url()
    {
      return $this->proof_url;
    }

    /**
     * @param string $proof_url
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObject
     */
    public function setProof_url($proof_url)
    {
      $this->proof_url = $proof_url;
      return $this;
    }

}
