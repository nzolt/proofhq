<?php

namespace Boskee\ProofHQ;

class SOAPFileActivityObjectArray
{

    /**
     * @var SOAPFileActivityObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPFileActivityObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPFileActivityObject[] $item
     * @return \Boskee\ProofHQ\SOAPFileActivityObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
