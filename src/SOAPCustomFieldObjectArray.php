<?php

namespace Boskee\ProofHQ;

class SOAPCustomFieldObjectArray
{

    /**
     * @var SOAPCustomFieldObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPCustomFieldObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPCustomFieldObject[] $item
     * @return \Boskee\ProofHQ\SOAPCustomFieldObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
