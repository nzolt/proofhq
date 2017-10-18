<?php

namespace Boskee\ProofHQ;

class SOAPContactGroupObject
{

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
     * @param string $type
     * @param string $name
     * @param SOAPContactObjectArray $people
     */
    public function __construct($type, $name, $people)
    {
      $this->type = $type;
      $this->name = $name;
      $this->people = $people;
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
     * @return \Boskee\ProofHQ\SOAPContactGroupObject
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
     * @return \Boskee\ProofHQ\SOAPContactGroupObject
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
     * @return \Boskee\ProofHQ\SOAPContactGroupObject
     */
    public function setPeople($people)
    {
      $this->people = $people;
      return $this;
    }

}
