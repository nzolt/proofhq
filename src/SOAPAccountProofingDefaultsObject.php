<?php

namespace Boskee\ProofHQ;

class SOAPAccountProofingDefaultsObject
{

    /**
     * @var string $on_load_message
     */
    protected $on_load_message = null;

    /**
     * @var string $on_decision_message
     */
    protected $on_decision_message = null;

    /**
     * @var string $confirm_button
     */
    protected $confirm_button = null;

    /**
     * @var string $cancel_button
     */
    protected $cancel_button = null;

    /**
     * @param string $on_load_message
     * @param string $on_decision_message
     * @param string $confirm_button
     * @param string $cancel_button
     */
    public function __construct($on_load_message, $on_decision_message, $confirm_button, $cancel_button)
    {
      $this->on_load_message = $on_load_message;
      $this->on_decision_message = $on_decision_message;
      $this->confirm_button = $confirm_button;
      $this->cancel_button = $cancel_button;
    }

    /**
     * @return string
     */
    public function getOn_load_message()
    {
      return $this->on_load_message;
    }

    /**
     * @param string $on_load_message
     * @return \Boskee\ProofHQ\SOAPAccountProofingDefaultsObject
     */
    public function setOn_load_message($on_load_message)
    {
      $this->on_load_message = $on_load_message;
      return $this;
    }

    /**
     * @return string
     */
    public function getOn_decision_message()
    {
      return $this->on_decision_message;
    }

    /**
     * @param string $on_decision_message
     * @return \Boskee\ProofHQ\SOAPAccountProofingDefaultsObject
     */
    public function setOn_decision_message($on_decision_message)
    {
      $this->on_decision_message = $on_decision_message;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirm_button()
    {
      return $this->confirm_button;
    }

    /**
     * @param string $confirm_button
     * @return \Boskee\ProofHQ\SOAPAccountProofingDefaultsObject
     */
    public function setConfirm_button($confirm_button)
    {
      $this->confirm_button = $confirm_button;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancel_button()
    {
      return $this->cancel_button;
    }

    /**
     * @param string $cancel_button
     * @return \Boskee\ProofHQ\SOAPAccountProofingDefaultsObject
     */
    public function setCancel_button($cancel_button)
    {
      $this->cancel_button = $cancel_button;
      return $this;
    }

}
