<?php

namespace Boskee\ProofHQ;

class SOAPWorkspaceObjectArray
{

    /**
     * @var SOAPWorkspaceObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkspaceObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkspaceObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkspaceObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
