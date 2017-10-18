<?php

namespace Boskee\ProofHQ;

class SOAPContactAccountObject
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var SOAPContactObjectArray $people
     */
    protected $people = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $name
     * @param SOAPContactObjectArray $people
     */
    public function __construct($id, $type, $name, $people)
    {
      $this->id = $id;
      $this->type = $type;
      $this->name = $name;
      $this->people = $people;
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
     * @return \Boskee\ProofHQ\SOAPContactAccountObject
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Boskee\ProofHQ\SOAPContactAccountObject
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Boskee\ProofHQ\SOAPContactAccountObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SOAPContactObjectArray
     */
    public function getPeople()
    {
      return $this->people;
    }

    /**
     * @param SOAPContactObjectArray $people
     * @return \Boskee\ProofHQ\SOAPContactAccountObject
     */
    public function setPeople($people)
    {
      $this->people = $people;
      return $this;
    }

}
