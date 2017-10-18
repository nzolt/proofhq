<?php

namespace Boskee\ProofHQ;

class SOAPProfileObjectArray
{

    /**
     * @var SOAPProfileObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPProfileObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPProfileObject[] $item
     * @return \Boskee\ProofHQ\SOAPProfileObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
