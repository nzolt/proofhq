<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowStageRequestObjectArray
{

    /**
     * @var SOAPWorkflowStageRequestObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowStageRequestObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowStageRequestObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowStageRequestObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
