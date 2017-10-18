<?php

namespace Boskee\ProofHQ;

class SOAPFileObjectArray
{

    /**
     * @var SOAPFileObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPFileObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPFileObject[] $item
     * @return \Boskee\ProofHQ\SOAPFileObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
