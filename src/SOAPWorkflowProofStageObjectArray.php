<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofStageObjectArray
{

    /**
     * @var SOAPWorkflowProofStageObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowProofStageObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowProofStageObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowProofStageObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
