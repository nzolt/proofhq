<?php

namespace Boskee\ProofHQ;

class SOAPUserObjectArray
{

    /**
     * @var SOAPUserObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPUserObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPUserObject[] $item
     * @return \Boskee\ProofHQ\SOAPUserObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
