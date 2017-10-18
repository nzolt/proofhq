<?php

namespace Boskee\ProofHQ;

class SOAPActivityLogObject
{

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var string $details
     */
    protected $details = null;

    /**
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var string $workspace_name
     */
    protected $workspace_name = null;

    /**
     * @var string $user_email
     */
    protected $user_email = null;

    /**
     * @var string $sent_at
     */
    protected $sent_at = null;

    /**
     * @var string $email_sender
     */
    protected $email_sender = null;

    /**
     * @var string $email_recipient
     */
    protected $email_recipient = null;

    /**
     * @var string $email_subject
     */
    protected $email_subject = null;

    /**
     * @param string $created_at
     * @param string $action
     * @param string $details
     * @param string $filename
     * @param string $workspace_name
     * @param string $user_email
     * @param string $sent_at
     * @param string $email_sender
     * @param string $email_recipient
     * @param string $email_subject
     */
    public function __construct($created_at, $action, $details, $filename, $workspace_name, $user_email, $sent_at, $email_sender, $email_recipient, $email_subject)
    {
      $this->created_at = $created_at;
      $this->action = $action;
      $this->details = $details;
      $this->filename = $filename;
      $this->workspace_name = $workspace_name;
      $this->user_email = $user_email;
      $this->sent_at = $sent_at;
      $this->email_sender = $email_sender;
      $this->email_recipient = $email_recipient;
      $this->email_subject = $email_subject;
    }

    /**
     * @return string
     */
    public function getCreated_at()
    {
      return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return \Boskee\ProofHQ\SOAPActivityLogObject
     */
    public function setCreated_at($created_at)
    {
      $this->created_at = $created_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param string $action
     * @return \Boskee\ProofHQ\SOAPActivityLogObject
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param string $details
     * @return \Boskee\ProofHQ\SOAPActivityLogObject
     */
    public function setDetails($details)
    {
      $this->details = $details;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
      return $this->filename;
    }

    /**
     * @param string $filename
     * @return \Boskee\ProofHQ\SOAPActivityLogObject
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkspace_name()
    {
      return $this->workspace_name;
    }

    /**
     * @param string $workspace_name
     * @return \Boskee\ProofHQ\SOAPActivityLogObject
     */
    public function setWorkspace_name($workspace_name)
    {
      $this->workspace_name = $workspace_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getUser_email()
    {
      return $this->user_email;
    }

    /**
     * @param string $user_email
     * @return \Boskee\ProofHQ\SOAPActivityLogObject
     */
    public function setUser_email($user_email)
    {
      $this->user_email = $user_email;
      return $this;
    }

    /**
     * @return string
     */
    public function getSent_at()
    {
      return $this->sent_at;
    }

    /**
     * @param string $sent_at
     * @return \Boskee\ProofHQ\SOAPActivityLogObject
     */
    public function setSent_at($sent_at)
    {
      $this->sent_at = $sent_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail_sender()
    {
      return $this->email_sender;
    }

    /**
     * @param string $email_sender
     * @return \Boskee\ProofHQ\SOAPActivityLogObject
     */
    public function setEmail_sender($email_sender)
    {
      $this->email_sender = $email_sender;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail_recipient()
    {
      return $this->email_recipient;
    }

    /**
     * @param string $email_recipient
     * @return \Boskee\ProofHQ\SOAPActivityLogObject
     */
    public function setEmail_recipient($email_recipient)
    {
      $this->email_recipient = $email_recipient;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail_subject()
    {
      return $this->email_subject;
    }

    /**
     * @param string $email_subject
     * @return \Boskee\ProofHQ\SOAPActivityLogObject
     */
    public function setEmail_subject($email_subject)
    {
      $this->email_subject = $email_subject;
      return $this;
    }

}
