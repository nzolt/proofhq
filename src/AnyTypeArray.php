<?php

namespace Boskee\ProofHQ;

class AnyTypeArray
{

    /**
     * @var anyType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anyType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param anyType[] $item
     * @return \Boskee\ProofHQ\AnyTypeArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
