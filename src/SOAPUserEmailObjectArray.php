<?php

namespace Boskee\ProofHQ;

class SOAPUserEmailObjectArray
{

    /**
     * @var SOAPUserEmailObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPUserEmailObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPUserEmailObject[] $item
     * @return \Boskee\ProofHQ\SOAPUserEmailObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
