<?php

namespace Boskee\ProofHQ;

class SOAPFileUploadObject
{

    /**
     * @var string $filehash
     */
    protected $filehash = null;

    /**
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var string $md5
     */
    protected $md5 = null;

    /**
     * @var string $errorcode
     */
    protected $errorcode = null;

    /**
     * @var string $errorstring
     */
    protected $errorstring = null;

    /**
     * @param string $filehash
     * @param string $filename
     * @param string $md5
     * @param string $errorcode
     * @param string $errorstring
     */
    public function __construct($filehash, $filename, $md5, $errorcode, $errorstring)
    {
      $this->filehash = $filehash;
      $this->filename = $filename;
      $this->md5 = $md5;
      $this->errorcode = $errorcode;
      $this->errorstring = $errorstring;
    }

    /**
     * @return string
     */
    public function getFilehash()
    {
      return $this->filehash;
    }

    /**
     * @param string $filehash
     * @return \Boskee\ProofHQ\SOAPFileUploadObject
     */
    public function setFilehash($filehash)
    {
      $this->filehash = $filehash;
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
     * @return \Boskee\ProofHQ\SOAPFileUploadObject
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
      return $this;
    }

    /**
     * @return string
     */
    public function getMd5()
    {
      return $this->md5;
    }

    /**
     * @param string $md5
     * @return \Boskee\ProofHQ\SOAPFileUploadObject
     */
    public function setMd5($md5)
    {
      $this->md5 = $md5;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorcode()
    {
      return $this->errorcode;
    }

    /**
     * @param string $errorcode
     * @return \Boskee\ProofHQ\SOAPFileUploadObject
     */
    public function setErrorcode($errorcode)
    {
      $this->errorcode = $errorcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorstring()
    {
      return $this->errorstring;
    }

    /**
     * @param string $errorstring
     * @return \Boskee\ProofHQ\SOAPFileUploadObject
     */
    public function setErrorstring($errorstring)
    {
      $this->errorstring = $errorstring;
      return $this;
    }

}
