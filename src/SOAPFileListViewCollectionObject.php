<?php

namespace Boskee\ProofHQ;

class SOAPFileListViewCollectionObject
{

    /**
     * @var int $total
     */
    protected $total = null;

    /**
     * @var SOAPFileListViewObjectArray $results
     */
    protected $results = null;

    /**
     * @param int $total
     * @param SOAPFileListViewObjectArray $results
     */
    public function __construct($total, $results)
    {
      $this->total = $total;
      $this->results = $results;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param int $total
     * @return \Boskee\ProofHQ\SOAPFileListViewCollectionObject
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return SOAPFileListViewObjectArray
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param SOAPFileListViewObjectArray $results
     * @return \Boskee\ProofHQ\SOAPFileListViewCollectionObject
     */
    public function setResults($results)
    {
      $this->results = $results;
      return $this;
    }

}
