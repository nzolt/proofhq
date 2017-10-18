<?php

namespace Boskee\ProofHQ;

class SOAPImageObject
{

    /**
     * @var string $data
     */
    protected $data = null;

    /**
     * @var string $encoding
     */
    protected $encoding = null;

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @param string $data
     * @param string $encoding
     * @param string $content
     */
    public function __construct($data, $encoding, $content)
    {
      $this->data = $data;
      $this->encoding = $encoding;
      $this->content = $content;
    }

    /**
     * @return string
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param string $data
     * @return \Boskee\ProofHQ\SOAPImageObject
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
      return $this->encoding;
    }

    /**
     * @param string $encoding
     * @return \Boskee\ProofHQ\SOAPImageObject
     */
    public function setEncoding($encoding)
    {
      $this->encoding = $encoding;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return \Boskee\ProofHQ\SOAPImageObject
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

}
