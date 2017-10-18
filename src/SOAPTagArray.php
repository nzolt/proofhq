<?php

namespace Boskee\ProofHQ;

class SOAPTagArray
{

    /**
     * @var SOAPTag[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPTag[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPTag[] $item
     * @return \Boskee\ProofHQ\SOAPTagArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
