<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofStageRequestObjectArray
{

    /**
     * @var SOAPWorkflowProofStageRequestObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowProofStageRequestObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowProofStageRequestObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageRequestObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
