<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowTemplateBasicObject
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
     * @var IntArray $shared_users
     */
    protected $shared_users = null;

    /**
     * @param int $workflow_template_id
     * @param int $owner_id
     * @param string $name
     * @param IntArray $shared_users
     */
    public function __construct($workflow_template_id, $owner_id, $name, $shared_users)
    {
      $this->workflow_template_id = $workflow_template_id;
      $this->owner_id = $owner_id;
      $this->name = $name;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowTemplateBasicObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowTemplateBasicObject
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
     * @return \Boskee\ProofHQ\SOAPWorkflowTemplateBasicObject
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Boskee\ProofHQ\SOAPWorkflowTemplateBasicObject
     */
    public function setShared_users($shared_users)
    {
      $this->shared_users = $shared_users;
      return $this;
    }

}
