<?php

namespace Boskee\ProofHQ;

class SOAPSatelliteAccountObjectArray
{

    /**
     * @var SOAPSatelliteAccountObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPSatelliteAccountObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPSatelliteAccountObject[] $item
     * @return \Boskee\ProofHQ\SOAPSatelliteAccountObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
