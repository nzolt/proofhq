<?php

namespace Boskee\ProofHQ;

class SOAPSectionObjectArray
{

    /**
     * @var SOAPSectionObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPSectionObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPSectionObject[] $item
     * @return \Boskee\ProofHQ\SOAPSectionObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
