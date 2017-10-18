<?php

namespace Boskee\ProofHQ;

class SOAPContactObjectArray
{

    /**
     * @var SOAPContactObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPContactObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPContactObject[] $item
     * @return \Boskee\ProofHQ\SOAPContactObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
