<?php

namespace Boskee\ProofHQ;

class SOAPFileEmbedCodeObjectArray
{

    /**
     * @var SOAPFileEmbedCodeObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPFileEmbedCodeObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPFileEmbedCodeObject[] $item
     * @return \Boskee\ProofHQ\SOAPFileEmbedCodeObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
