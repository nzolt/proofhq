<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowRecipientRequestObjectArray
{

    /**
     * @var SOAPWorkflowRecipientRequestObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowRecipientRequestObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowRecipientRequestObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientRequestObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
