<?php

namespace Boskee\ProofHQ;

class SOAPDecisionObjectArray
{

    /**
     * @var SOAPDecisionObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPDecisionObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPDecisionObject[] $item
     * @return \Boskee\ProofHQ\SOAPDecisionObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
