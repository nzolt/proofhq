<?php

namespace Boskee\ProofHQ;

class IntArray
{

    /**
     * @var int[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param int[] $item
     * @return \Boskee\ProofHQ\IntArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
