<?php

namespace Boskee\ProofHQ;

class SOAPRecipientDecisionReasonObject
{

    /**
     * @var int $file_id
     */
    protected $file_id = null;

    /**
     * @var string $reason_name
     */
    protected $reason_name = null;

    /**
     * @var int $reviewer_id
     */
    protected $reviewer_id = null;

    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @param int $file_id
     * @param string $reason_name
     * @param int $reviewer_id
     * @param string $text
     */
    public function __construct($file_id, $reason_name, $reviewer_id, $text)
    {
      $this->file_id = $file_id;
      $this->reason_name = $reason_name;
      $this->reviewer_id = $reviewer_id;
      $this->text = $text;
    }

    /**
     * @return int
     */
    public function getFile_id()
    {
      return $this->file_id;
    }

    /**
     * @param int $file_id
     * @return \Boskee\ProofHQ\SOAPRecipientDecisionReasonObject
     */
    public function setFile_id($file_id)
    {
      $this->file_id = $file_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason_name()
    {
      return $this->reason_name;
    }

    /**
     * @param string $reason_name
     * @return \Boskee\ProofHQ\SOAPRecipientDecisionReasonObject
     */
    public function setReason_name($reason_name)
    {
      $this->reason_name = $reason_name;
      return $this;
    }

    /**
     * @return int
     */
    public function getReviewer_id()
    {
      return $this->reviewer_id;
    }

    /**
     * @param int $reviewer_id
     * @return \Boskee\ProofHQ\SOAPRecipientDecisionReasonObject
     */
    public function setReviewer_id($reviewer_id)
    {
      $this->reviewer_id = $reviewer_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param string $text
     * @return \Boskee\ProofHQ\SOAPRecipientDecisionReasonObject
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

}
