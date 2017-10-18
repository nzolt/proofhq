<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowRecipientObjectArray
{

    /**
     * @var SOAPWorkflowRecipientObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowRecipientObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowRecipientObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowRecipientObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
