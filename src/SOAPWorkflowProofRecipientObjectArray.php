<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowProofRecipientObjectArray
{

    /**
     * @var SOAPWorkflowProofRecipientObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowProofRecipientObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowProofRecipientObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowProofRecipientObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
