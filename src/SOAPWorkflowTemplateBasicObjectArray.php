<?php

namespace Boskee\ProofHQ;

class SOAPWorkflowTemplateBasicObjectArray
{

    /**
     * @var SOAPWorkflowTemplateBasicObject[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SOAPWorkflowTemplateBasicObject[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SOAPWorkflowTemplateBasicObject[] $item
     * @return \Boskee\ProofHQ\SOAPWorkflowTemplateBasicObjectArray
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
