<?php

namespace Boskee\ProofHQ;

class SOAPRecipientObjectArray
{

    /**
     * @var SOAPRecipientObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPRecipientObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPRecipientObject[] $item
     * @return \Boskee\ProofHQ\SOAPRecipientObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
