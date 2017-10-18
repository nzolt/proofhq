<?php

namespace Boskee\ProofHQ;

class SOAPUserProofingDefaultsObject
{

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var boolean $subscriptions
     */
    protected $subscriptions = null;

    /**
     * @var string $default_role
     */
    protected $default_role = null;

    /**
     * @var boolean $validate_subscriptions
     */
    protected $validate_subscriptions = null;

    /**
     * @var string $email_notifications
     */
    protected $email_notifications = null;

    /**
     * @var boolean $login_required
     */
    protected $login_required = null;

    /**
     * @var boolean $autoclose
     */
    protected $autoclose = null;

    /**
     * @var boolean $one_decision
     */
    protected $one_decision = null;

    /**
     * @var boolean $block_download
     */
    protected $block_download = null;

    /**
     * @param string $subject
     * @param string $message
     * @param boolean $subscriptions
     * @param string $default_role
     * @param boolean $validate_subscriptions
     * @param string $email_notifications
     * @param boolean $login_required
     * @param boolean $autoclose
     * @param boolean $one_decision
     * @param boolean $block_download
     */
    public function __construct($subject, $message, $subscriptions, $default_role, $validate_subscriptions, $email_notifications, $login_required, $autoclose, $one_decision, $block_download)
    {
      $this->subject = $subject;
      $this->message = $message;
      $this->subscriptions = $subscriptions;
      $this->default_role = $default_role;
      $this->validate_subscriptions = $validate_subscriptions;
      $this->email_notifications = $email_notifications;
      $this->login_required = $login_required;
      $this->autoclose = $autoclose;
      $this->one_decision = $one_decision;
      $this->block_download = $block_download;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \Boskee\ProofHQ\SOAPUserProofingDefaultsObject
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Boskee\ProofHQ\SOAPUserProofingDefaultsObject
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSubscriptions()
    {
      return $this->subscriptions;
    }

    /**
     * @param boolean $subscriptions
     * @return \Boskee\ProofHQ\SOAPUserProofingDefaultsObject
     */
    public function setSubscriptions($subscriptions)
    {
      $this->subscriptions = $subscriptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefault_role()
    {
      return $this->default_role;
    }

    /**
     * @param string $default_role
     * @return \Boskee\ProofHQ\SOAPUserProofingDefaultsObject
     */
    public function setDefault_role($default_role)
    {
      $this->default_role = $default_role;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValidate_subscriptions()
    {
      return $this->validate_subscriptions;
    }

    /**
     * @param boolean $validate_subscriptions
     * @return \Boskee\ProofHQ\SOAPUserProofingDefaultsObject
     */
    public function setValidate_subscriptions($validate_subscriptions)
    {
      $this->validate_subscriptions = $validate_subscriptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail_notifications()
    {
      return $this->email_notifications;
    }

    /**
     * @param string $email_notifications
     * @return \Boskee\ProofHQ\SOAPUserProofingDefaultsObject
     */
    public function setEmail_notifications($email_notifications)
    {
      $this->email_notifications = $email_notifications;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLogin_required()
    {
      return $this->login_required;
    }

    /**
     * @param boolean $login_required
     * @return \Boskee\ProofHQ\SOAPUserProofingDefaultsObject
     */
    public function setLogin_required($login_required)
    {
      $this->login_required = $login_required;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoclose()
    {
      return $this->autoclose;
    }

    /**
     * @param boolean $autoclose
     * @return \Boskee\ProofHQ\SOAPUserProofingDefaultsObject
     */
    public function setAutoclose($autoclose)
    {
      $this->autoclose = $autoclose;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOne_decision()
    {
      return $this->one_decision;
    }

    /**
     * @param boolean $one_decision
     * @return \Boskee\ProofHQ\SOAPUserProofingDefaultsObject
     */
    public function setOne_decision($one_decision)
    {
      $this->one_decision = $one_decision;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBlock_download()
    {
      return $this->block_download;
    }

    /**
     * @param boolean $block_download
     * @return \Boskee\ProofHQ\SOAPUserProofingDefaultsObject
     */
    public function setBlock_download($block_download)
    {
      $this->block_download = $block_download;
      return $this;
    }

}
