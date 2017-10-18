<?php

namespace Boskee\ProofHQ;

class SOAPFileEmbedCodeObject
{

    /**
     * @var int $file_id
     */
    protected $file_id = null;

    /**
     * @var int $reviewer_id
     */
    protected $reviewer_id = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @param int $file_id
     * @param int $reviewer_id
     * @param string $type
     * @param string $code
     * @param string $url
     */
    public function __construct($file_id, $reviewer_id, $type, $code, $url)
    {
      $this->file_id = $file_id;
      $this->reviewer_id = $reviewer_id;
      $this->type = $type;
      $this->code = $code;
      $this->url = $url;
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
     * @return \Boskee\ProofHQ\SOAPFileEmbedCodeObject
     */
    public function setFile_id($file_id)
    {
      $this->file_id = $file_id;
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
     * @return \Boskee\ProofHQ\SOAPFileEmbedCodeObject
     */
    public function setReviewer_id($reviewer_id)
    {
      $this->reviewer_id = $reviewer_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Boskee\ProofHQ\SOAPFileEmbedCodeObject
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Boskee\ProofHQ\SOAPFileEmbedCodeObject
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Boskee\ProofHQ\SOAPFileEmbedCodeObject
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
