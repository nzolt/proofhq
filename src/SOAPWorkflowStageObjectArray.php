<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowStageObjectArray
{

    /**
     * @var SOAPWorkflowStageObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowStageObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowStageObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowStageObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
