<?php

namespace Boskee\ProofHQ;

class SOAPCustomFieldOptionObjectArray
{

    /**
     * @var SOAPCustomFieldOptionObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPCustomFieldOptionObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPCustomFieldOptionObject[] $item
     * @return \Boskee\ProofHQ\SOAPCustomFieldOptionObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
