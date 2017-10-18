<?php

namespace Boskee\ProofHQ;

class SOAPFileListViewObjectArray
{

    /**
     * @var SOAPFileListViewObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPFileListViewObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPFileListViewObject[] $item
     * @return \Boskee\ProofHQ\SOAPFileListViewObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
