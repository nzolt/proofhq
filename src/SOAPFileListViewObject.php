<?php

namespace Boskee\ProofHQ;

class SOAPFileListViewObject
{

    /**
     * @var int $file_id
     */
    protected $file_id = null;

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $mediaType
     */
    protected $mediaType = null;

    /**
     * @var string $filename
     */
    protected $filename = null;

    /**
     * @var int $version
     */
    protected $version = null;

    /**
     * @var int $versions
     */
    protected $versions = null;

    /**
     * @var int $pages
     */
    protected $pages = null;

    /**
     * @var string $thumbnail
     */
    protected $thumbnail = null;

    /**
     * @param int $file_id
     * @param string $token
     * @param string $code
     * @param string $mediaType
     * @param string $filename
     * @param int $version
     * @param int $versions
     * @param int $pages
     * @param string $thumbnail
     */
    public function __construct($file_id, $token, $code, $mediaType, $filename, $version, $versions, $pages, $thumbnail)
    {
      $this->file_id = $file_id;
      $this->token = $token;
      $this->code = $code;
      $this->mediaType = $mediaType;
      $this->filename = $filename;
      $this->version = $version;
      $this->versions = $versions;
      $this->pages = $pages;
      $this->thumbnail = $thumbnail;
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
     * @return \Boskee\ProofHQ\SOAPFileListViewObject
     */
    public function setFile_id($file_id)
    {
      $this->file_id = $file_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \Boskee\ProofHQ\SOAPFileListViewObject
     */
    public function setToken($token)
    {
      $this->token = $token;
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
     * @return \Boskee\ProofHQ\SOAPFileListViewObject
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaType()
    {
      return $this->mediaType;
    }

    /**
     * @param string $mediaType
     * @return \Boskee\ProofHQ\SOAPFileListViewObject
     */
    public function setMediaType($mediaType)
    {
      $this->mediaType = $mediaType;
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
     * @return \Boskee\ProofHQ\SOAPFileListViewObject
     */
    public function setFilename($filename)
    {
      $this->filename = $filename;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param int $version
     * @return \Boskee\ProofHQ\SOAPFileListViewObject
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersions()
    {
      return $this->versions;
    }

    /**
     * @param int $versions
     * @return \Boskee\ProofHQ\SOAPFileListViewObject
     */
    public function setVersions($versions)
    {
      $this->versions = $versions;
      return $this;
    }

    /**
     * @return int
     */
    public function getPages()
    {
      return $this->pages;
    }

    /**
     * @param int $pages
     * @return \Boskee\ProofHQ\SOAPFileListViewObject
     */
    public function setPages($pages)
    {
      $this->pages = $pages;
      return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
      return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     * @return \Boskee\ProofHQ\SOAPFileListViewObject
     */
    public function setThumbnail($thumbnail)
    {
      $this->thumbnail = $thumbnail;
      return $this;
    }

}
