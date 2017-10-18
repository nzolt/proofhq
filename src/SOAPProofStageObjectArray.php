<?php

namespace Boskee\ProofHQ;

class SOAPProofStageObjectArray
{

    /**
     * @var SOAPProofStageObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPProofStageObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPProofStageObject[] $item
     * @return \Boskee\ProofHQ\SOAPProofStageObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
