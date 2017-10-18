<?php

namespace Boskee\ProofHQ;

class SOAPContactAccountObjectArray
{

    /**
     * @var SOAPContactAccountObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPContactAccountObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPContactAccountObject[] $item
     * @return \Boskee\ProofHQ\SOAPContactAccountObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
