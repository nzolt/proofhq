<?php

namespace Boskee\ProofHQ;

class SOAPContactProofingDefaultsObject
{

    /**
     * @var string $default_proof_role
     */
    protected $default_proof_role = null;

    /**
     * @param string $default_proof_role
     */
    public function __construct($default_proof_role)
    {
      $this->default_proof_role = $default_proof_role;
    }

    /**
     * @return string
     */
    public function getDefault_proof_role()
    {
      return $this->default_proof_role;
    }

    /**
     * @param string $default_proof_role
     * @return \Boskee\ProofHQ\SOAPContactProofingDefaultsObject
     */
    public function setDefault_proof_role($default_proof_role)
    {
      $this->default_proof_role = $default_proof_role;
      return $this;
    }

}
