<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofStageRequestObject
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
     * @var string $deadline_date
     */
    protected $deadline_date = null;

    /**
     * @var string $deadline_time
     */
    protected $deadline_time = null;

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
     * @var string $start_dependent_time
     */
    protected $start_dependent_time = null;

    /**
     * @var int $stage_locking
     */
    protected $stage_locking = null;

    /**
     * @var boolean $stage_one_decision_only
     */
    protected $stage_one_decision_only = null;

    /**
     * @var boolean $stage_private
     */
    protected $stage_private = null;

    /**
     * @var SOAPWorkflowProofRecipientRequestObjectArray $stage_reviewers
     */
    protected $stage_reviewers = null;

    /**
     * @var int $deadline_calculate_on
     */
    protected $deadline_calculate_on = null;

    /**
     * @param int $stage_id
     * @param string $name
     * @param string $deadline_date
     * @param string $deadline_time
     * @param int $start_trigger
     * @param int $start_dependent_stage_id
     * @param string $start_dependent_date
     * @param string $start_dependent_time
     * @param int $stage_locking
     * @param boolean $stage_one_decision_only
     * @param boolean $stage_private
     * @param SOAPWorkflowProofRecipientRequestObjectArray $stage_reviewers
     */
    public function __construct($stage_id, $name, $deadline_date, $deadline_time, $start_trigger, $start_dependent_stage_id, $start_dependent_date, $start_dependent_time, $stage_locking, $stage_one_decision_only, $stage_private, $stage_reviewers)
    {
      $this->stage_id = $stage_id;
      $this->name = $name;
      $this->deadline_date = $deadline_date;
      $this->deadline_time = $deadline_time;
      $this->start_trigger = $start_trigger;
      $this->start_dependent_stage_id = $start_dependent_stage_id;
      $this->start_dependent_date = $start_dependent_date;
      $this->start_dependent_time = $start_dependent_time;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
     */
    public function setDeadline_date($deadline_date)
    {
      $this->deadline_date = $deadline_date;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeadline_time()
    {
      return $this->deadline_time;
    }

    /**
     * @param string $deadline_time
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
     */
    public function setDeadline_time($deadline_time)
    {
      $this->deadline_time = $deadline_time;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
     */
    public function setStart_dependent_date($start_dependent_date)
    {
      $this->start_dependent_date = $start_dependent_date;
      return $this;
    }

    /**
     * @return string
     */
    public function getStart_dependent_time()
    {
      return $this->start_dependent_time;
    }

    /**
     * @param string $start_dependent_time
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
     */
    public function setStart_dependent_time($start_dependent_time)
    {
      $this->start_dependent_time = $start_dependent_time;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
     */
    public function setStage_locking($stage_locking)
    {
      $this->stage_locking = $stage_locking;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
     */
    public function setStage_private($stage_private)
    {
      $this->stage_private = $stage_private;
      return $this;
    }

    /**
     * @return SOAPWorkflowProofRecipientRequestObjectArray
     */
    public function getStage_reviewers()
    {
      return $this->stage_reviewers;
    }

    /**
     * @param SOAPWorkflowProofRecipientRequestObjectArray $stage_reviewers
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObject
     */
    public function setDeadline_calculate_on($deadline_calculate_on)
    {
      $this->deadline_calculate_on = $deadline_calculate_on;
      return $this;
    }

}
