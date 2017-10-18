<?php

namespace Boskee\ProofHQ;

class SOAPFileRecipientObjectArray
{

    /**
     * @var SOAPFileRecipientObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPFileRecipientObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPFileRecipientObject[] $item
     * @return \Boskee\ProofHQ\SOAPFileRecipientObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
