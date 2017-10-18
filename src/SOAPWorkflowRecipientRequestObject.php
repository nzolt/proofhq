<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowRecipientRequestObject
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
     * @var boolean $primary_decision_maker
     */
    protected $primary_decision_maker = null;

    /**
     * @param string $email
     * @param int $role
     * @param int $email_notification
     * @param boolean $primary_decision_maker
     */
    public function __construct($email, $role, $email_notification, $primary_decision_maker)
    {
      $this->email = $email;
      $this->role = $role;
      $this->email_notification = $email_notification;
      $this->primary_decision_maker = $primary_decision_maker;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientRequestObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientRequestObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientRequestObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientRequestObject
     */
    public function setPrimary_decision_maker($primary_decision_maker)
    {
      $this->primary_decision_maker = $primary_decision_maker;
      return $this;
    }

}
