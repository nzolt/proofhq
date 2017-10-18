<?php

namespace Boskee\ProofHQ;

class SOAPCustomFieldObject
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @var boolean $multiple
     */
    protected $multiple = null;

    /**
     * @var SOAPCustomFieldOptionObjectArray $options
     */
    protected $options = null;

    /**
     * @param string $name
     * @param int $type
     */
    public function __construct($name, $type)
    {
      $this->name = $name;
      $this->type = $type;
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
     * @return \Boskee\ProofHQ\SOAPCustomFieldObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param int $type
     * @return \Boskee\ProofHQ\SOAPCustomFieldObject
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Boskee\ProofHQ\SOAPCustomFieldObject
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMultiple()
    {
      return $this->multiple;
    }

    /**
     * @param boolean $multiple
     * @return \Boskee\ProofHQ\SOAPCustomFieldObject
     */
    public function setMultiple($multiple)
    {
      $this->multiple = $multiple;
      return $this;
    }

    /**
     * @return SOAPCustomFieldOptionObjectArray
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param SOAPCustomFieldOptionObjectArray $options
     * @return \Boskee\ProofHQ\SOAPCustomFieldObject
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

}
