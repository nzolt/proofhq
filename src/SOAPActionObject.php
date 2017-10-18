<?php

namespace Boskee\ProofHQ;

class SOAPActionObject
{

    /**
     * @var int $actionID
     */
    protected $actionID = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var boolean $enabled
     */
    protected $enabled = null;

    /**
     * @param int $actionID
     * @param string $action
     * @param boolean $enabled
     */
    public function __construct($actionID, $action, $enabled)
    {
      $this->actionID = $actionID;
      $this->action = $action;
      $this->enabled = $enabled;
    }

    /**
     * @return int
     */
    public function getActionID()
    {
      return $this->actionID;
    }

    /**
     * @param int $actionID
     * @return \Boskee\ProofHQ\SOAPActionObject
     */
    public function setActionID($actionID)
    {
      $this->actionID = $actionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param string $action
     * @return \Boskee\ProofHQ\SOAPActionObject
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
      return $this->enabled;
    }

    /**
     * @param boolean $enabled
     * @return \Boskee\ProofHQ\SOAPActionObject
     */
    public function setEnabled($enabled)
    {
      $this->enabled = $enabled;
      return $this;
    }

}
