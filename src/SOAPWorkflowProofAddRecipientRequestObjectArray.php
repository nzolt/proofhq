<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofAddRecipientRequestObjectArray
{

    /**
     * @var SOAPWorkflowProofAddRecipientRequestObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowProofAddRecipientRequestObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowProofAddRecipientRequestObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowProofAddRecipientRequestObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
