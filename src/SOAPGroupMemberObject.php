<?php

namespace Boskee\ProofHQ;

class SOAPGroupMemberObject
{

    /**
     * @var int $group_id
     */
    protected $group_id = null;

    /**
     * @var int $member_id
     */
    protected $member_id = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $default_role
     */
    protected $default_role = null;

    /**
     * @var string $default_email_notification
     */
    protected $default_email_notification = null;

    /**
     * @param int $group_id
     * @param int $member_id
     * @param string $email
     * @param string $default_role
     * @param string $default_email_notification
     */
    public function __construct($group_id, $member_id, $email, $default_role, $default_email_notification)
    {
      $this->group_id = $group_id;
      $this->member_id = $member_id;
      $this->email = $email;
      $this->default_role = $default_role;
      $this->default_email_notification = $default_email_notification;
    }

    /**
     * @return int
     */
    public function getGroup_id()
    {
      return $this->group_id;
    }

    /**
     * @param int $group_id
     * @return \Boskee\ProofHQ\SOAPGroupMemberObject
     */
    public function setGroup_id($group_id)
    {
      $this->group_id = $group_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getMember_id()
    {
      return $this->member_id;
    }

    /**
     * @param int $member_id
     * @return \Boskee\ProofHQ\SOAPGroupMemberObject
     */
    public function setMember_id($member_id)
    {
      $this->member_id = $member_id;
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
     * @return \Boskee\ProofHQ\SOAPGroupMemberObject
     */
    public function setEmail($email)
    {
      $this->email = $email;
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
     * @return \Boskee\ProofHQ\SOAPGroupMemberObject
     */
    public function setDefault_role($default_role)
    {
      $this->default_role = $default_role;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefault_email_notification()
    {
      return $this->default_email_notification;
    }

    /**
     * @param string $default_email_notification
     * @return \Boskee\ProofHQ\SOAPGroupMemberObject
     */
    public function setDefault_email_notification($default_email_notification)
    {
      $this->default_email_notification = $default_email_notification;
      return $this;
    }

}
