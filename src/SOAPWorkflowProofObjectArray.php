<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofObjectArray
{

    /**
     * @var SOAPWorkflowProofObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowProofObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowProofObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowProofObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
