<?php

namespace Boskee\ProofHQ;

class SOAPPermissionsObject
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
     * @param int $id
     * @param string $name
     */
    public function __construct($id, $name)
    {
      $this->id = $id;
      $this->name = $name;
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
     * @return \Boskee\ProofHQ\SOAPPermissionsObject
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
     * @return \Boskee\ProofHQ\SOAPPermissionsObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
