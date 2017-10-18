<?php

namespace Boskee\ProofHQ;

class SOAPFileLinkObject
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $menu
     */
    protected $menu = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @var StringArray $allowed_reviewer_roles
     */
    protected $allowed_reviewer_roles = null;

    /**
     * @param int $id
     * @param string $menu
     * @param string $url
     * @param string $text
     * @param StringArray $allowed_reviewer_roles
     */
    public function __construct($id, $menu, $url, $text, $allowed_reviewer_roles)
    {
      $this->id = $id;
      $this->menu = $menu;
      $this->url = $url;
      $this->text = $text;
      $this->allowed_reviewer_roles = $allowed_reviewer_roles;
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
     * @return \Boskee\ProofHQ\SOAPFileLinkObject
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMenu()
    {
      return $this->menu;
    }

    /**
     * @param string $menu
     * @return \Boskee\ProofHQ\SOAPFileLinkObject
     */
    public function setMenu($menu)
    {
      $this->menu = $menu;
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
     * @return \Boskee\ProofHQ\SOAPFileLinkObject
     */
    public function setUrl($url)
    {
      $this->url = $url;
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
     * @return \Boskee\ProofHQ\SOAPFileLinkObject
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return StringArray
     */
    public function getAllowed_reviewer_roles()
    {
      return $this->allowed_reviewer_roles;
    }

    /**
     * @param StringArray $allowed_reviewer_roles
     * @return \Boskee\ProofHQ\SOAPFileLinkObject
     */
    public function setAllowed_reviewer_roles($allowed_reviewer_roles)
    {
      $this->allowed_reviewer_roles = $allowed_reviewer_roles;
      return $this;
    }

}
