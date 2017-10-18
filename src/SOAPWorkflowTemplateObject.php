<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowTemplateObject
{

    /**
     * @var int $workflow_template_id
     */
    protected $workflow_template_id = null;

    /**
     * @var int $owner_id
     */
    protected $owner_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var SOAPWorkflowStageObjectArray $stages
     */
    protected $stages = null;

    /**
     * @var IntArray $shared_users
     */
    protected $shared_users = null;

    /**
     * @param int $workflow_template_id
     * @param int $owner_id
     * @param string $name
     * @param SOAPWorkflowStageObjectArray $stages
     * @param IntArray $shared_users
     */
    public function __construct($workflow_template_id, $owner_id, $name, $stages, $shared_users)
    {
      $this->workflow_template_id = $workflow_template_id;
      $this->owner_id = $owner_id;
      $this->name = $name;
      $this->stages = $stages;
      $this->shared_users = $shared_users;
    }

    /**
     * @return int
     */
    public function getWorkflow_template_id()
    {
      return $this->workflow_template_id;
    }

    /**
     * @param int $workflow_template_id
     * @return \Boskee\ProofHQ\SOAPWorkflowTemplateObject
     */
    public function setWorkflow_template_id($workflow_template_id)
    {
      $this->workflow_template_id = $workflow_template_id;
      return $this;
    }

    /**
     * @return int
     */
    public function getOwner_id()
    {
      return $this->owner_id;
    }

    /**
     * @param int $owner_id
     * @return \Boskee\ProofHQ\SOAPWorkflowTemplateObject
     */
    public function setOwner_id($owner_id)
    {
      $this->owner_id = $owner_id;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowTemplateObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SOAPWorkflowStageObjectArray
     */
    public function getStages()
    {
      return $this->stages;
    }

    /**
     * @param SOAPWorkflowStageObjectArray $stages
     * @return \Boskee\ProofHQ\SOAPWorkflowTemplateObject
     */
    public function setStages($stages)
    {
      $this->stages = $stages;
      return $this;
    }

    /**
     * @return IntArray
     */
    public function getShared_users()
    {
      return $this->shared_users;
    }

    /**
     * @param IntArray $shared_users
     * @return \Boskee\ProofHQ\SOAPWorkflowTemplateObject
     */
    public function setShared_users($shared_users)
    {
      $this->shared_users = $shared_users;
      return $this;
    }

}
