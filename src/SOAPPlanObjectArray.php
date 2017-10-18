<?php

namespace Boskee\ProofHQ;

class SOAPPlanObjectArray
{

    /**
     * @var SOAPPlanObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPPlanObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPPlanObject[] $item
     * @return \Boskee\ProofHQ\SOAPPlanObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
