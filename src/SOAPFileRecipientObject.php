<?php

namespace Boskee\ProofHQ;

class SOAPFileRecipientObject
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $role
     */
    protected $role = null;

    /**
     * @var string $notifications
     */
    protected $notifications = null;

    /**
     * @var string $deadline
     */
    protected $deadline = null;

    /**
     * @var string $position
     */
    protected $position = null;

    /**
     * @var string $primary_decision_maker
     */
    protected $primary_decision_maker = null;

    /**
     * @param string $name
     * @param string $email
     * @param string $role
     * @param string $notifications
     * @param string $deadline
     * @param string $position
     * @param string $primary_decision_maker
     */
    public function __construct($name, $email, $role, $notifications, $deadline, $position, $primary_decision_maker)
    {
      $this->name = $name;
      $this->email = $email;
      $this->role = $role;
      $this->notifications = $notifications;
      $this->deadline = $deadline;
      $this->position = $position;
      $this->primary_decision_maker = $primary_decision_maker;
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
     * @return \Boskee\ProofHQ\SOAPFileRecipientObject
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
     * @return \Boskee\ProofHQ\SOAPFileRecipientObject
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param string $role
     * @return \Boskee\ProofHQ\SOAPFileRecipientObject
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotifications()
    {
      return $this->notifications;
    }

    /**
     * @param string $notifications
     * @return \Boskee\ProofHQ\SOAPFileRecipientObject
     */
    public function setNotifications($notifications)
    {
      $this->notifications = $notifications;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeadline()
    {
      return $this->deadline;
    }

    /**
     * @param string $deadline
     * @return \Boskee\ProofHQ\SOAPFileRecipientObject
     */
    public function setDeadline($deadline)
    {
      $this->deadline = $deadline;
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
     * @return \Boskee\ProofHQ\SOAPFileRecipientObject
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimary_decision_maker()
    {
      return $this->primary_decision_maker;
    }

    /**
     * @param string $primary_decision_maker
     * @return \Boskee\ProofHQ\SOAPFileRecipientObject
     */
    public function setPrimary_decision_maker($primary_decision_maker)
    {
      $this->primary_decision_maker = $primary_decision_maker;
      return $this;
    }

}
