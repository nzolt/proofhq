<?php

namespace Boskee\ProofHQ;

class SOAPWorkspaceObject
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $root_level
     */
    protected $root_level = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $client
     */
    protected $client = null;

    /**
     * @var string $project
     */
    protected $project = null;

    /**
     * @var boolean $personal
     */
    protected $personal = null;

    /**
     * @var int $parent_workspace_id
     */
    protected $parent_workspace_id = null;

    /**
     * @var int $owner_id
     */
    protected $owner_id = null;

    /**
     * @param int $id
     * @param string $name
     * @param int $root_level
     * @param string $description
     * @param string $client
     * @param string $project
     * @param boolean $personal
     * @param int $owner_id
     */
    public function __construct($id, $name, $root_level, $description, $client, $project, $personal, $owner_id)
    {
      $this->id = $id;
      $this->name = $name;
      $this->root_level = $root_level;
      $this->description = $description;
      $this->client = $client;
      $this->project = $project;
      $this->personal = $personal;
      $this->owner_id = $owner_id;
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
     * @return \Boskee\ProofHQ\SOAPWorkspaceObject
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Boskee\ProofHQ\SOAPWorkspaceObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoot_level()
    {
      return $this->root_level;
    }

    /**
     * @param int $root_level
     * @return \Boskee\ProofHQ\SOAPWorkspaceObject
     */
    public function setRoot_level($root_level)
    {
      $this->root_level = $root_level;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Boskee\ProofHQ\SOAPWorkspaceObject
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getClient()
    {
      return $this->client;
    }

    /**
     * @param string $client
     * @return \Boskee\ProofHQ\SOAPWorkspaceObject
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return string
     */
    public function getProject()
    {
      return $this->project;
    }

    /**
     * @param string $project
     * @return \Boskee\ProofHQ\SOAPWorkspaceObject
     */
    public function setProject($project)
    {
      $this->project = $project;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonal()
    {
      return $this->personal;
    }

    /**
     * @param boolean $personal
     * @return \Boskee\ProofHQ\SOAPWorkspaceObject
     */
    public function setPersonal($personal)
    {
      $this->personal = $personal;
      return $this;
    }

    /**
     * @return int
     */
    public function getParent_workspace_id()
    {
      return $this->parent_workspace_id;
    }

    /**
     * @param int $parent_workspace_id
     * @return \Boskee\ProofHQ\SOAPWorkspaceObject
     */
    public function setParent_workspace_id($parent_workspace_id)
    {
      $this->parent_workspace_id = $parent_workspace_id;
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
     * @return \Boskee\ProofHQ\SOAPWorkspaceObject
     */
    public function setOwner_id($owner_id)
    {
      $this->owner_id = $owner_id;
      return $this;
    }

}
