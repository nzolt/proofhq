<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofRecipientRequestObjectArray
{

    /**
     * @var SOAPWorkflowProofRecipientRequestObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowProofRecipientRequestObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowProofRecipientRequestObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientRequestObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
