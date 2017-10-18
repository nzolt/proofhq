<?php

namespace Boskee\ProofHQ;

class SOAPActivityLogObjectArray
{

    /**
     * @var SOAPActivityLogObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPActivityLogObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPActivityLogObject[] $item
     * @return \Boskee\ProofHQ\SOAPActivityLogObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
