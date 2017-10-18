<?php

namespace Boskee\ProofHQ;

class SOAPFileActivityObject
{

    /**
     * @var int $file_id
     */
    protected $file_id = null;

    /**
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var string $details
     */
    protected $details = null;

    /**
     * @param int $file_id
     * @param string $filename
     * @param string $created_at
     * @param string $action
     * @param string $details
     */
    public function __construct($file_id, $filename, $created_at, $action, $details)
    {
      $this->file_id = $file_id;
      $this->filename = $filename;
      $this->created_at = $created_at;
      $this->action = $action;
      $this->details = $details;
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
     * @return \Boskee\ProofHQ\SOAPFileActivityObject
     */
    public function setFile_id($file_id)
    {
      $this->file_id = $file_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
      return $this->filename;
    }

    /**
     * @param string $filename
     * @return \Boskee\ProofHQ\SOAPFileActivityObject
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreated_at()
    {
      return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return \Boskee\ProofHQ\SOAPFileActivityObject
     */
    public function setCreated_at($created_at)
    {
      $this->created_at = $created_at;
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
     * @return \Boskee\ProofHQ\SOAPFileActivityObject
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
      return $this->details;
    }

    /**
     * @param string $details
     * @return \Boskee\ProofHQ\SOAPFileActivityObject
     */
    public function setDetails($details)
    {
      $this->details = $details;
      return $this;
    }

}
