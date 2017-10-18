<?php

namespace Boskee\ProofHQ;

class SOAPGroupMemberObjectArray
{

    /**
     * @var SOAPGroupMemberObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPGroupMemberObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPGroupMemberObject[] $item
     * @return \Boskee\ProofHQ\SOAPGroupMemberObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
