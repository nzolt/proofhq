<?php

namespace Boskee\ProofHQ;

class SOAPRecipientDecisionReasonObjectArray
{

    /**
     * @var SOAPRecipientDecisionReasonObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPRecipientDecisionReasonObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPRecipientDecisionReasonObject[] $item
     * @return \Boskee\ProofHQ\SOAPRecipientDecisionReasonObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
