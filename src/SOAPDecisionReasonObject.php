<?php

namespace Boskee\ProofHQ;

class SOAPDecisionReasonObject
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $text
     */
    protected $text = null;

    /**
     * @param int $id
     * @param string $name
     * @param boolean $text
     */
    public function __construct($id, $name, $text)
    {
      $this->id = $id;
      $this->name = $name;
      $this->text = $text;
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
     * @return \Boskee\ProofHQ\SOAPDecisionReasonObject
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Boskee\ProofHQ\SOAPDecisionReasonObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param boolean $text
     * @return \Boskee\ProofHQ\SOAPDecisionReasonObject
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

}
