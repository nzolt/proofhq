<?php

namespace Boskee\ProofHQ;

class SOAPProgressObject
{

    /**
     * @var int $sent
     */
    protected $sent = null;

    /**
     * @var int $opened
     */
    protected $opened = null;

    /**
     * @var int $comment_made
     */
    protected $comment_made = null;

    /**
     * @var int $decision_made
     */
    protected $decision_made = null;

    /**
     * @param int $sent
     * @param int $opened
     * @param int $comment_made
     * @param int $decision_made
     */
    public function __construct($sent, $opened, $comment_made, $decision_made)
    {
      $this->sent = $sent;
      $this->opened = $opened;
      $this->comment_made = $comment_made;
      $this->decision_made = $decision_made;
    }

    /**
     * @return int
     */
    public function getSent()
    {
      return $this->sent;
    }

    /**
     * @param int $sent
     * @return \Boskee\ProofHQ\SOAPProgressObject
     */
    public function setSent($sent)
    {
      $this->sent = $sent;
      return $this;
    }

    /**
     * @return int
     */
    public function getOpened()
    {
      return $this->opened;
    }

    /**
     * @param int $opened
     * @return \Boskee\ProofHQ\SOAPProgressObject
     */
    public function setOpened($opened)
    {
      $this->opened = $opened;
      return $this;
    }

    /**
     * @return int
     */
    public function getComment_made()
    {
      return $this->comment_made;
    }

    /**
     * @param int $comment_made
     * @return \Boskee\ProofHQ\SOAPProgressObject
     */
    public function setComment_made($comment_made)
    {
      $this->comment_made = $comment_made;
      return $this;
    }

    /**
     * @return int
     */
    public function getDecision_made()
    {
      return $this->decision_made;
    }

    /**
     * @param int $decision_made
     * @return \Boskee\ProofHQ\SOAPProgressObject
     */
    public function setDecision_made($decision_made)
    {
      $this->decision_made = $decision_made;
      return $this;
    }

}
