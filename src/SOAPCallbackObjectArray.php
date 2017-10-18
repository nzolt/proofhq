<?php

namespace Boskee\ProofHQ;

class SOAPCallbackObjectArray
{

    /**
     * @var SOAPCallbackObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPCallbackObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPCallbackObject[] $item
     * @return \Boskee\ProofHQ\SOAPCallbackObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
