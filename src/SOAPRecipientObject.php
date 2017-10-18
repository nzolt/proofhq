<?php

namespace Boskee\ProofHQ;

class SOAPRecipientObject
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $file_id
     */
    protected $file_id = null;

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
     * @var string $role
     */
    protected $role = null;

    /**
     * @var string $proof_url
     */
    protected $proof_url = null;

    /**
     * @var string $dowload_url
     */
    protected $dowload_url = null;

    /**
     * @var string $decision
     */
    protected $decision = null;

    /**
     * @var string $deadline
     */
    protected $deadline = null;

    /**
     * @var string $email_notifications
     */
    protected $email_notifications = null;

    /**
     * @var int $replies_count
     */
    protected $replies_count = null;

    /**
     * @var int $comments_count
     */
    protected $comments_count = null;

    /**
     * @var string $primary_decision_maker
     */
    protected $primary_decision_maker = null;

    /**
     * @var SOAPRecipientDecisionReasonObjectArray $decision_reasons
     */
    protected $decision_reasons = null;

    /**
     * @var int $stage_id
     */
    protected $stage_id = null;

    /**
     * @var SOAPProgressObject $progress
     */
    protected $progress = null;

    /**
     * @param int $id
     * @param int $file_id
     * @param string $name
     * @param string $email
     * @param string $position
     * @param string $role
     * @param string $proof_url
     * @param string $dowload_url
     * @param string $decision
     * @param string $deadline
     * @param string $email_notifications
     * @param int $replies_count
     * @param int $comments_count
     * @param string $primary_decision_maker
     * @param SOAPRecipientDecisionReasonObjectArray $decision_reasons
     * @param int $stage_id
     * @param SOAPProgressObject $progress
     */
    public function __construct($id, $file_id, $name, $email, $position, $role, $proof_url, $dowload_url, $decision, $deadline, $email_notifications, $replies_count, $comments_count, $primary_decision_maker, $decision_reasons, $stage_id, $progress)
    {
      $this->id = $id;
      $this->file_id = $file_id;
      $this->name = $name;
      $this->email = $email;
      $this->position = $position;
      $this->role = $role;
      $this->proof_url = $proof_url;
      $this->dowload_url = $dowload_url;
      $this->decision = $decision;
      $this->deadline = $deadline;
      $this->email_notifications = $email_notifications;
      $this->replies_count = $replies_count;
      $this->comments_count = $comments_count;
      $this->primary_decision_maker = $primary_decision_maker;
      $this->decision_reasons = $decision_reasons;
      $this->stage_id = $stage_id;
      $this->progress = $progress;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getFile_id()
    {
      return $this->file_id;
    }

    /**
     * @param int $file_id
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setFile_id($file_id)
    {
      $this->file_id = $file_id;
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
     * @return \Boskee\ProofHQ\SOAPRecipientObject
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
     * @return \Boskee\ProofHQ\SOAPRecipientObject
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
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setPosition($position)
    {
      $this->position = $position;
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
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setRole($role)
    {
      $this->role = $role;
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
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setProof_url($proof_url)
    {
      $this->proof_url = $proof_url;
      return $this;
    }

    /**
     * @return string
     */
    public function getDowload_url()
    {
      return $this->dowload_url;
    }

    /**
     * @param string $dowload_url
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setDowload_url($dowload_url)
    {
      $this->dowload_url = $dowload_url;
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
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setDecision($decision)
    {
      $this->decision = $decision;
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
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setDeadline($deadline)
    {
      $this->deadline = $deadline;
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
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setEmail_notifications($email_notifications)
    {
      $this->email_notifications = $email_notifications;
      return $this;
    }

    /**
     * @return int
     */
    public function getReplies_count()
    {
      return $this->replies_count;
    }

    /**
     * @param int $replies_count
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setReplies_count($replies_count)
    {
      $this->replies_count = $replies_count;
      return $this;
    }

    /**
     * @return int
     */
    public function getComments_count()
    {
      return $this->comments_count;
    }

    /**
     * @param int $comments_count
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setComments_count($comments_count)
    {
      $this->comments_count = $comments_count;
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
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setPrimary_decision_maker($primary_decision_maker)
    {
      $this->primary_decision_maker = $primary_decision_maker;
      return $this;
    }

    /**
     * @return SOAPRecipientDecisionReasonObjectArray
     */
    public function getDecision_reasons()
    {
      return $this->decision_reasons;
    }

    /**
     * @param SOAPRecipientDecisionReasonObjectArray $decision_reasons
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setDecision_reasons($decision_reasons)
    {
      $this->decision_reasons = $decision_reasons;
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
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setStage_id($stage_id)
    {
      $this->stage_id = $stage_id;
      return $this;
    }

    /**
     * @return SOAPProgressObject
     */
    public function getProgress()
    {
      return $this->progress;
    }

    /**
     * @param SOAPProgressObject $progress
     * @return \Boskee\ProofHQ\SOAPRecipientObject
     */
    public function setProgress($progress)
    {
      $this->progress = $progress;
      return $this;
    }

}
