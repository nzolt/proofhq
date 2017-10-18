<?php

namespace Boskee\ProofHQ;

class SOAPCommentAttachmentObject
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $name
     */
    public function __construct($id, $url, $name)
    {
      $this->id = $id;
      $this->url = $url;
      $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Boskee\ProofHQ\SOAPCommentAttachmentObject
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Boskee\ProofHQ\SOAPCommentAttachmentObject
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Boskee\ProofHQ\SOAPCommentAttachmentObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
