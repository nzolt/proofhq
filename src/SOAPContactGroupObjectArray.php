<?php

namespace Boskee\ProofHQ;

class SOAPContactGroupObjectArray
{

    /**
     * @var SOAPContactGroupObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPContactGroupObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPContactGroupObject[] $item
     * @return \Boskee\ProofHQ\SOAPContactGroupObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
