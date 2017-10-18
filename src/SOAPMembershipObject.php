<?php

namespace Boskee\ProofHQ;

class SOAPMembershipObject
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var SOAPPlanObject $plan
     */
    protected $plan = null;

    /**
     * @var string $start_at
     */
    protected $start_at = null;

    /**
     * @var string $finish_at
     */
    protected $finish_at = null;

    /**
     * @var int $storage_usage
     */
    protected $storage_usage = null;

    /**
     * @var int $proofs_usage
     */
    protected $proofs_usage = null;

    /**
     * @var int $users_usage
     */
    protected $users_usage = null;

    /**
     * @var int $storage_limit
     */
    protected $storage_limit = null;

    /**
     * @var int $proofs_limit
     */
    protected $proofs_limit = null;

    /**
     * @var int $users_limit
     */
    protected $users_limit = null;

    /**
     * @param int $id
     * @param SOAPPlanObject $plan
     * @param string $start_at
     * @param string $finish_at
     * @param int $storage_usage
     * @param int $proofs_usage
     * @param int $users_usage
     * @param int $storage_limit
     * @param int $proofs_limit
     * @param int $users_limit
     */
    public function __construct($id, $plan, $start_at, $finish_at, $storage_usage, $proofs_usage, $users_usage, $storage_limit, $proofs_limit, $users_limit)
    {
      $this->id = $id;
      $this->plan = $plan;
      $this->start_at = $start_at;
      $this->finish_at = $finish_at;
      $this->storage_usage = $storage_usage;
      $this->proofs_usage = $proofs_usage;
      $this->users_usage = $users_usage;
      $this->storage_limit = $storage_limit;
      $this->proofs_limit = $proofs_limit;
      $this->users_limit = $users_limit;
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
     * @return \Boskee\ProofHQ\SOAPMembershipObject
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return SOAPPlanObject
     */
    public function getPlan()
    {
      return $this->plan;
    }

    /**
     * @param SOAPPlanObject $plan
     * @return \Boskee\ProofHQ\SOAPMembershipObject
     */
    public function setPlan($plan)
    {
      $this->plan = $plan;
      return $this;
    }

    /**
     * @return string
     */
    public function getStart_at()
    {
      return $this->start_at;
    }

    /**
     * @param string $start_at
     * @return \Boskee\ProofHQ\SOAPMembershipObject
     */
    public function setStart_at($start_at)
    {
      $this->start_at = $start_at;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinish_at()
    {
      return $this->finish_at;
    }

    /**
     * @param string $finish_at
     * @return \Boskee\ProofHQ\SOAPMembershipObject
     */
    public function setFinish_at($finish_at)
    {
      $this->finish_at = $finish_at;
      return $this;
    }

    /**
     * @return int
     */
    public function getStorage_usage()
    {
      return $this->storage_usage;
    }

    /**
     * @param int $storage_usage
     * @return \Boskee\ProofHQ\SOAPMembershipObject
     */
    public function setStorage_usage($storage_usage)
    {
      $this->storage_usage = $storage_usage;
      return $this;
    }

    /**
     * @return int
     */
    public function getProofs_usage()
    {
      return $this->proofs_usage;
    }

    /**
     * @param int $proofs_usage
     * @return \Boskee\ProofHQ\SOAPMembershipObject
     */
    public function setProofs_usage($proofs_usage)
    {
      $this->proofs_usage = $proofs_usage;
      return $this;
    }

    /**
     * @return int
     */
    public function getUsers_usage()
    {
      return $this->users_usage;
    }

    /**
     * @param int $users_usage
     * @return \Boskee\ProofHQ\SOAPMembershipObject
     */
    public function setUsers_usage($users_usage)
    {
      $this->users_usage = $users_usage;
      return $this;
    }

    /**
     * @return int
     */
    public function getStorage_limit()
    {
      return $this->storage_limit;
    }

    /**
     * @param int $storage_limit
     * @return \Boskee\ProofHQ\SOAPMembershipObject
     */
    public function setStorage_limit($storage_limit)
    {
      $this->storage_limit = $storage_limit;
      return $this;
    }

    /**
     * @return int
     */
    public function getProofs_limit()
    {
      return $this->proofs_limit;
    }

    /**
     * @param int $proofs_limit
     * @return \Boskee\ProofHQ\SOAPMembershipObject
     */
    public function setProofs_limit($proofs_limit)
    {
      $this->proofs_limit = $proofs_limit;
      return $this;
    }

    /**
     * @return int
     */
    public function getUsers_limit()
    {
      return $this->users_limit;
    }

    /**
     * @param int $users_limit
     * @return \Boskee\ProofHQ\SOAPMembershipObject
     */
    public function setUsers_limit($users_limit)
    {
      $this->users_limit = $users_limit;
      return $this;
    }

}
