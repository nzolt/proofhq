<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowStageObject
{

    /**
     * @var int $stage_id
     */
    protected $stage_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $deadline_days
     */
    protected $deadline_days = null;

    /**
     * @var int $deadline_hours
     */
    protected $deadline_hours = null;

    /**
     * @var int $deadline_minutes
     */
    protected $deadline_minutes = null;

    /**
     * @var int $start_trigger
     */
    protected $start_trigger = null;

    /**
     * @var int $start_dependent_stage_id
     */
    protected $start_dependent_stage_id = null;

    /**
     * @var int $start_dependent_days
     */
    protected $start_dependent_days = null;

    /**
     * @var int $start_dependent_hours
     */
    protected $start_dependent_hours = null;

    /**
     * @var int $start_dependent_minutes
     */
    protected $start_dependent_minutes = null;

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
     * @var SOAPWorkflowRecipientObjectArray $stage_reviewers
     */
    protected $stage_reviewers = null;

    /**
     * @var int $deadline_calculate_on
     */
    protected $deadline_calculate_on = null;

    /**
     * @param int $stage_id
     * @param string $name
     * @param int $deadline_days
     * @param int $deadline_hours
     * @param int $deadline_minutes
     * @param int $start_trigger
     * @param int $start_dependent_stage_id
     * @param int $start_dependent_days
     * @param int $start_dependent_hours
     * @param int $start_dependent_minutes
     * @param int $stage_locking
     * @param boolean $stage_one_decision_only
     * @param boolean $stage_private
     * @param SOAPWorkflowRecipientObjectArray $stage_reviewers
     */
    public function __construct($stage_id, $name, $deadline_days, $deadline_hours, $deadline_minutes, $start_trigger, $start_dependent_stage_id, $start_dependent_days, $start_dependent_hours, $start_dependent_minutes, $stage_locking, $stage_one_decision_only, $stage_private, $stage_reviewers)
    {
      $this->stage_id = $stage_id;
      $this->name = $name;
      $this->deadline_days = $deadline_days;
      $this->deadline_hours = $deadline_hours;
      $this->deadline_minutes = $deadline_minutes;
      $this->start_trigger = $start_trigger;
      $this->start_dependent_stage_id = $start_dependent_stage_id;
      $this->start_dependent_days = $start_dependent_days;
      $this->start_dependent_hours = $start_dependent_hours;
      $this->start_dependent_minutes = $start_dependent_minutes;
      $this->stage_locking = $stage_locking;
      $this->stage_one_decision_only = $stage_one_decision_only;
      $this->stage_private = $stage_private;
      $this->stage_reviewers = $stage_reviewers;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeadline_days()
    {
      return $this->deadline_days;
    }

    /**
     * @param int $deadline_days
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setDeadline_days($deadline_days)
    {
      $this->deadline_days = $deadline_days;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeadline_hours()
    {
      return $this->deadline_hours;
    }

    /**
     * @param int $deadline_hours
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setDeadline_hours($deadline_hours)
    {
      $this->deadline_hours = $deadline_hours;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeadline_minutes()
    {
      return $this->deadline_minutes;
    }

    /**
     * @param int $deadline_minutes
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setDeadline_minutes($deadline_minutes)
    {
      $this->deadline_minutes = $deadline_minutes;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setStart_dependent_stage_id($start_dependent_stage_id)
    {
      $this->start_dependent_stage_id = $start_dependent_stage_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getStart_dependent_days()
    {
      return $this->start_dependent_days;
    }

    /**
     * @param int $start_dependent_days
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setStart_dependent_days($start_dependent_days)
    {
      $this->start_dependent_days = $start_dependent_days;
      return $this;
    }

    /**
     * @return int
     */
    public function getStart_dependent_hours()
    {
      return $this->start_dependent_hours;
    }

    /**
     * @param int $start_dependent_hours
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setStart_dependent_hours($start_dependent_hours)
    {
      $this->start_dependent_hours = $start_dependent_hours;
      return $this;
    }

    /**
     * @return int
     */
    public function getStart_dependent_minutes()
    {
      return $this->start_dependent_minutes;
    }

    /**
     * @param int $start_dependent_minutes
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setStart_dependent_minutes($start_dependent_minutes)
    {
      $this->start_dependent_minutes = $start_dependent_minutes;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setStage_private($stage_private)
    {
      $this->stage_private = $stage_private;
      return $this;
    }

    /**
     * @return SOAPWorkflowRecipientObjectArray
     */
    public function getStage_reviewers()
    {
      return $this->stage_reviewers;
    }

    /**
     * @param SOAPWorkflowRecipientObjectArray $stage_reviewers
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setStage_reviewers($stage_reviewers)
    {
      $this->stage_reviewers = $stage_reviewers;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObject
     */
    public function setDeadline_calculate_on($deadline_calculate_on)
    {
      $this->deadline_calculate_on = $deadline_calculate_on;
      return $this;
    }

}
