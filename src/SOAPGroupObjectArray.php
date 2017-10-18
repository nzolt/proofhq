<?php

namespace Boskee\ProofHQ;

class SOAPGroupObjectArray
{

    /**
     * @var SOAPGroupObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPGroupObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPGroupObject[] $item
     * @return \Boskee\ProofHQ\SOAPGroupObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
