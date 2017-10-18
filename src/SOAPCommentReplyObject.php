<?php

namespace Boskee\ProofHQ;

class SOAPCommentReplyObject
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $comment_id
     */
    protected $comment_id = null;

    /**
     * @var int $reviewer_id
     */
    protected $reviewer_id = null;

    /**
     * @var string $author
     */
    protected $author = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $created_at
     */
    protected $created_at = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var SOAPCommentAttachmentObjectArray $attachments
     */
    protected $attachments = null;

    /**
     * @param int $id
     * @param int $comment_id
     * @param int $reviewer_id
     * @param string $author
     * @param string $comment
     * @param string $created_at
     * @param string $url
     * @param SOAPCommentAttachmentObjectArray $attachments
     */
    public function __construct($id, $comment_id, $reviewer_id, $author, $comment, $created_at, $url, $attachments)
    {
      $this->id = $id;
      $this->comment_id = $comment_id;
      $this->reviewer_id = $reviewer_id;
      $this->author = $author;
      $this->comment = $comment;
      $this->created_at = $created_at;
      $this->url = $url;
      $this->attachments = $attachments;
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
     * @return \Boskee\ProofHQ\SOAPCommentReplyObject
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getComment_id()
    {
      return $this->comment_id;
    }

    /**
     * @param int $comment_id
     * @return \Boskee\ProofHQ\SOAPCommentReplyObject
     */
    public function setComment_id($comment_id)
    {
      $this->comment_id = $comment_id;
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
     * @return \Boskee\ProofHQ\SOAPCommentReplyObject
     */
    public function setReviewer_id($reviewer_id)
    {
      $this->reviewer_id = $reviewer_id;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param string $author
     * @return \Boskee\ProofHQ\SOAPCommentReplyObject
     */
    public function setAuthor($author)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \Boskee\ProofHQ\SOAPCommentReplyObject
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
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
     * @return \Boskee\ProofHQ\SOAPCommentReplyObject
     */
    public function setCreated_at($created_at)
    {
      $this->created_at = $created_at;
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
     * @return \Boskee\ProofHQ\SOAPCommentReplyObject
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return SOAPCommentAttachmentObjectArray
     */
    public function getAttachments()
    {
      return $this->attachments;
    }

    /**
     * @param SOAPCommentAttachmentObjectArray $attachments
     * @return \Boskee\ProofHQ\SOAPCommentReplyObject
     */
    public function setAttachments($attachments)
    {
      $this->attachments = $attachments;
      return $this;
    }

}
