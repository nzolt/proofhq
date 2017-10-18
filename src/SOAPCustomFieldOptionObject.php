<?php

namespace Boskee\ProofHQ;

class SOAPCustomFieldOptionObject
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $selected
     */
    protected $selected = null;

    /**
     * @param string $name
     * @param boolean $selected
     */
    public function __construct($name, $selected)
    {
      $this->name = $name;
      $this->selected = $selected;
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
     * @return \Boskee\ProofHQ\SOAPCustomFieldOptionObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSelected()
    {
      return $this->selected;
    }

    /**
     * @param boolean $selected
     * @return \Boskee\ProofHQ\SOAPCustomFieldOptionObject
     */
    public function setSelected($selected)
    {
      $this->selected = $selected;
      return $this;
    }

}
