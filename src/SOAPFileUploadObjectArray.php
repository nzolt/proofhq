<?php

namespace Boskee\ProofHQ;

class SOAPFileUploadObjectArray
{

    /**
     * @var SOAPFileUploadObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPFileUploadObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPFileUploadObject[] $item
     * @return \Boskee\ProofHQ\SOAPFileUploadObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
