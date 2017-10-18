<?php

namespace Boskee\ProofHQ;

class SOAPCommentObject
{

    /**
     * @var int $id
     */
    protected $id = null;

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
     * @var int $replies_count
     */
    protected $replies_count = null;

    /**
     * @var SOAPCommentReplyObjectArray $replies
     */
    protected $replies = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $drawing_xml
     */
    protected $drawing_xml = null;

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @var SOAPCommentAttachmentObjectArray $attachments
     */
    protected $attachments = null;

    /**
     * @param int $id
     * @param int $reviewer_id
     * @param string $author
     * @param string $comment
     * @param string $created_at
     * @param int $replies_count
     * @param SOAPCommentReplyObjectArray $replies
     * @param string $url
     * @param string $drawing_xml
     * @param string $location
     * @param SOAPCommentAttachmentObjectArray $attachments
     */
    public function __construct($id, $reviewer_id, $author, $comment, $created_at, $replies_count, $replies, $url, $drawing_xml, $location, $attachments)
    {
      $this->id = $id;
      $this->reviewer_id = $reviewer_id;
      $this->author = $author;
      $this->comment = $comment;
      $this->created_at = $created_at;
      $this->replies_count = $replies_count;
      $this->replies = $replies;
      $this->url = $url;
      $this->drawing_xml = $drawing_xml;
      $this->location = $location;
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
     * @return \Boskee\ProofHQ\SOAPCommentObject
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \Boskee\ProofHQ\SOAPCommentObject
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
     * @return \Boskee\ProofHQ\SOAPCommentObject
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
     * @return \Boskee\ProofHQ\SOAPCommentObject
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
     * @return \Boskee\ProofHQ\SOAPCommentObject
     */
    public function setCreated_at($created_at)
    {
      $this->created_at = $created_at;
      return $this;
    }

    /**
     * @return int
     */
    public function getReplies_count()
    {
      return $this->replies_count;
    }

    /**
     * @param int $replies_count
     * @return \Boskee\ProofHQ\SOAPCommentObject
     */
    public function setReplies_count($replies_count)
    {
      $this->replies_count = $replies_count;
      return $this;
    }

    /**
     * @return SOAPCommentReplyObjectArray
     */
    public function getReplies()
    {
      return $this->replies;
    }

    /**
     * @param SOAPCommentReplyObjectArray $replies
     * @return \Boskee\ProofHQ\SOAPCommentObject
     */
    public function setReplies($replies)
    {
      $this->replies = $replies;
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
     * @return \Boskee\ProofHQ\SOAPCommentObject
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrawing_xml()
    {
      return $this->drawing_xml;
    }

    /**
     * @param string $drawing_xml
     * @return \Boskee\ProofHQ\SOAPCommentObject
     */
    public function setDrawing_xml($drawing_xml)
    {
      $this->drawing_xml = $drawing_xml;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param string $location
     * @return \Boskee\ProofHQ\SOAPCommentObject
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Boskee\ProofHQ\SOAPCommentObject
     */
    public function setAttachments($attachments)
    {
      $this->attachments = $attachments;
      return $this;
    }

}
