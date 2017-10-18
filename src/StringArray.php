<?php

namespace Boskee\ProofHQ;

class StringArray
{

    /**
     * @var string[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param string[] $item
     * @return \Boskee\ProofHQ\StringArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
