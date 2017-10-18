<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofStageObject
{

    /**
     * @var SOAPWorkflowProofRecipientObjectArray $stage_reviewers
     */
    protected $stage_reviewers = null;

    /**
     * @var int $file_id
     */
    protected $file_id = null;

    /**
     * @var int $stage_id
     */
    protected $stage_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var SOAPProgressObject $progress
     */
    protected $progress = null;

    /**
     * @var string $deadline_date
     */
    protected $deadline_date = null;

    /**
     * @var int $start_trigger
     */
    protected $start_trigger = null;

    /**
     * @var int $start_dependent_stage_id
     */
    protected $start_dependent_stage_id = null;

    /**
     * @var string $start_dependent_date
     */
    protected $start_dependent_date = null;

    /**
     * @var int $stage_locking
     */
    protected $stage_locking = null;

    /**
     * @var int $stage_primary_decision_maker_recipient_id
     */
    protected $stage_primary_decision_maker_recipient_id = null;

    /**
     * @var boolean $stage_one_decision_only
     */
    protected $stage_one_decision_only = null;

    /**
     * @var boolean $stage_private
     */
    protected $stage_private = null;

    /**
     * @var int $comments_count
     */
    protected $comments_count = null;

    /**
     * @var int $recipients_count
     */
    protected $recipients_count = null;

    /**
     * @var string $decision
     */
    protected $decision = null;

    /**
     * @var string $stage_start_date
     */
    protected $stage_start_date = null;

    /**
     * @var string $last_status_change_date
     */
    protected $last_status_change_date = null;

    /**
     * @var int $deadline_calculate_on
     */
    protected $deadline_calculate_on = null;

    /**
     * @var boolean $active
     */
    protected $active = null;

    /**
     * @param SOAPWorkflowProofRecipientObjectArray $stage_reviewers
     * @param int $file_id
     * @param int $stage_id
     * @param string $name
     * @param SOAPProgressObject $progress
     * @param string $deadline_date
     * @param int $start_trigger
     * @param int $start_dependent_stage_id
     * @param string $start_dependent_date
     * @param int $stage_locking
     * @param boolean $stage_one_decision_only
     * @param boolean $stage_private
     * @param int $comments_count
     * @param int $recipients_count
     * @param string $decision
     * @param string $stage_start_date
     * @param string $last_status_change_date
     * @param boolean $active
     */
    public function __construct($stage_reviewers, $file_id, $stage_id, $name, $progress, $deadline_date, $start_trigger, $start_dependent_stage_id, $start_dependent_date, $stage_locking, $stage_one_decision_only, $stage_private, $comments_count, $recipients_count, $decision, $stage_start_date, $last_status_change_date, $active)
    {
      $this->stage_reviewers = $stage_reviewers;
      $this->file_id = $file_id;
      $this->stage_id = $stage_id;
      $this->name = $name;
      $this->progress = $progress;
      $this->deadline_date = $deadline_date;
      $this->start_trigger = $start_trigger;
      $this->start_dependent_stage_id = $start_dependent_stage_id;
      $this->start_dependent_date = $start_dependent_date;
      $this->stage_locking = $stage_locking;
      $this->stage_one_decision_only = $stage_one_decision_only;
      $this->stage_private = $stage_private;
      $this->comments_count = $comments_count;
      $this->recipients_count = $recipients_count;
      $this->decision = $decision;
      $this->stage_start_date = $stage_start_date;
      $this->last_status_change_date = $last_status_change_date;
      $this->active = $active;
    }

    /**
     * @return SOAPWorkflowProofRecipientObjectArray
     */
    public function getStage_reviewers()
    {
      return $this->stage_reviewers;
    }

    /**
     * @param SOAPWorkflowProofRecipientObjectArray $stage_reviewers
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setStage_reviewers($stage_reviewers)
    {
      $this->stage_reviewers = $stage_reviewers;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setFile_id($file_id)
    {
      $this->file_id = $file_id;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setProgress($progress)
    {
      $this->progress = $progress;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeadline_date()
    {
      return $this->deadline_date;
    }

    /**
     * @param string $deadline_date
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setDeadline_date($deadline_date)
    {
      $this->deadline_date = $deadline_date;
      return $this;
    }

    /**
     * @return int
     */
    public function getStart_trigger()
    {
      return $this->start_trigger;
    }

    /**
     * @param int $start_trigger
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setStart_trigger($start_trigger)
    {
      $this->start_trigger = $start_trigger;
      return $this;
    }

    /**
     * @return int
     */
    public function getStart_dependent_stage_id()
    {
      return $this->start_dependent_stage_id;
    }

    /**
     * @param int $start_dependent_stage_id
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setStart_dependent_stage_id($start_dependent_stage_id)
    {
      $this->start_dependent_stage_id = $start_dependent_stage_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getStart_dependent_date()
    {
      return $this->start_dependent_date;
    }

    /**
     * @param string $start_dependent_date
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setStart_dependent_date($start_dependent_date)
    {
      $this->start_dependent_date = $start_dependent_date;
      return $this;
    }

    /**
     * @return int
     */
    public function getStage_locking()
    {
      return $this->stage_locking;
    }

    /**
     * @param int $stage_locking
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setStage_locking($stage_locking)
    {
      $this->stage_locking = $stage_locking;
      return $this;
    }

    /**
     * @return int
     */
    public function getStage_primary_decision_maker_recipient_id()
    {
      return $this->stage_primary_decision_maker_recipient_id;
    }

    /**
     * @param int $stage_primary_decision_maker_recipient_id
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setStage_primary_decision_maker_recipient_id($stage_primary_decision_maker_recipient_id)
    {
      $this->stage_primary_decision_maker_recipient_id = $stage_primary_decision_maker_recipient_id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStage_one_decision_only()
    {
      return $this->stage_one_decision_only;
    }

    /**
     * @param boolean $stage_one_decision_only
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setStage_one_decision_only($stage_one_decision_only)
    {
      $this->stage_one_decision_only = $stage_one_decision_only;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStage_private()
    {
      return $this->stage_private;
    }

    /**
     * @param boolean $stage_private
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setStage_private($stage_private)
    {
      $this->stage_private = $stage_private;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setComments_count($comments_count)
    {
      $this->comments_count = $comments_count;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipients_count()
    {
      return $this->recipients_count;
    }

    /**
     * @param int $recipients_count
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setRecipients_count($recipients_count)
    {
      $this->recipients_count = $recipients_count;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setDecision($decision)
    {
      $this->decision = $decision;
      return $this;
    }

    /**
     * @return string
     */
    public function getStage_start_date()
    {
      return $this->stage_start_date;
    }

    /**
     * @param string $stage_start_date
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setStage_start_date($stage_start_date)
    {
      $this->stage_start_date = $stage_start_date;
      return $this;
    }

    /**
     * @return string
     */
    public function getLast_status_change_date()
    {
      return $this->last_status_change_date;
    }

    /**
     * @param string $last_status_change_date
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setLast_status_change_date($last_status_change_date)
    {
      $this->last_status_change_date = $last_status_change_date;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeadline_calculate_on()
    {
      return $this->deadline_calculate_on;
    }

    /**
     * @param int $deadline_calculate_on
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setDeadline_calculate_on($deadline_calculate_on)
    {
      $this->deadline_calculate_on = $deadline_calculate_on;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param boolean $active
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObject
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

}
