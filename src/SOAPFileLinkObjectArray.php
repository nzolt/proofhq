<?php

namespace Boskee\ProofHQ;

class SOAPFileLinkObjectArray
{

    /**
     * @var SOAPFileLinkObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPFileLinkObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPFileLinkObject[] $item
     * @return \Boskee\ProofHQ\SOAPFileLinkObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
