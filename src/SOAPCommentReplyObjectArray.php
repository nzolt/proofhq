<?php

namespace Boskee\ProofHQ;

class SOAPCommentReplyObjectArray
{

    /**
     * @var SOAPCommentReplyObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPCommentReplyObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPCommentReplyObject[] $item
     * @return \Boskee\ProofHQ\SOAPCommentReplyObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
