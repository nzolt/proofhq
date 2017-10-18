<?php

namespace Boskee\ProofHQ;

class SOAPGroupObject
{

    /**
     * @var int $group_id
     */
    protected $group_id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $private
     */
    protected $private = null;

    /**
     * @var SOAPGroupMemberObjectArray $members
     */
    protected $members = null;

    /**
     * @param int $group_id
     * @param string $name
     * @param string $description
     * @param boolean $private
     * @param SOAPGroupMemberObjectArray $members
     */
    public function __construct($group_id, $name, $description, $private, $members)
    {
      $this->group_id = $group_id;
      $this->name = $name;
      $this->description = $description;
      $this->private = $private;
      $this->members = $members;
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
     * @return \Boskee\ProofHQ\SOAPGroupObject
     */
    public function setGroup_id($group_id)
    {
      $this->group_id = $group_id;
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
     * @return \Boskee\ProofHQ\SOAPGroupObject
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Boskee\ProofHQ\SOAPGroupObject
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrivate()
    {
      return $this->private;
    }

    /**
     * @param boolean $private
     * @return \Boskee\ProofHQ\SOAPGroupObject
     */
    public function setPrivate($private)
    {
      $this->private = $private;
      return $this;
    }

    /**
     * @return SOAPGroupMemberObjectArray
     */
    public function getMembers()
    {
      return $this->members;
    }

    /**
     * @param SOAPGroupMemberObjectArray $members
     * @return \Boskee\ProofHQ\SOAPGroupObject
     */
    public function setMembers($members)
    {
      $this->members = $members;
      return $this;
    }

}
