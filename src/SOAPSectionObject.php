<?php

namespace Boskee\ProofHQ;

class SOAPSectionObject
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var SOAPCustomFieldObjectArray $fields
     */
    protected $fields = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
      $this->name = $name;
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
     * @return \Boskee\ProofHQ\SOAPSectionObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SOAPCustomFieldObjectArray
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param SOAPCustomFieldObjectArray $fields
     * @return \Boskee\ProofHQ\SOAPSectionObject
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

}
