<?php

namespace Boskee\ProofHQ;

class SOAPDecisionReasonObjectArray
{

    /**
     * @var SOAPDecisionReasonObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPDecisionReasonObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPDecisionReasonObject[] $item
     * @return \Boskee\ProofHQ\SOAPDecisionReasonObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
