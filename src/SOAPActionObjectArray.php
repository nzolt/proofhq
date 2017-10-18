<?php

namespace Boskee\ProofHQ;

class SOAPActionObjectArray
{

    /**
     * @var SOAPActionObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPActionObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPActionObject[] $item
     * @return \Boskee\ProofHQ\SOAPActionObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
