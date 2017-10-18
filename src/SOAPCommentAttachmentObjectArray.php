<?php

namespace Boskee\ProofHQ;

class SOAPCommentAttachmentObjectArray
{

    /**
     * @var SOAPCommentAttachmentObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPCommentAttachmentObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPCommentAttachmentObject[] $item
     * @return \Boskee\ProofHQ\SOAPCommentAttachmentObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
