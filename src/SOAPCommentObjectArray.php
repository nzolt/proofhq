<?php

namespace Boskee\ProofHQ;

class SOAPCommentObjectArray
{

    /**
     * @var SOAPCommentObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPCommentObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPCommentObject[] $item
     * @return \Boskee\ProofHQ\SOAPCommentObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
