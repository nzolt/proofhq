<?php

namespace Boskee\ProofHQ;

class SOAPAccountPasswordSettingsObject
{

    /**
     * @var int $password_length
     */
    protected $password_length = null;

    /**
     * @var int $lcase_characters
     */
    protected $lcase_characters = null;

    /**
     * @var int $ucase_characters
     */
    protected $ucase_characters = null;

    /**
     * @var int $numeric_characters
     */
    protected $numeric_characters = null;

    /**
     * @var int $symbol_characters
     */
    protected $symbol_characters = null;

    /**
     * @var int $characters_repetition
     */
    protected $characters_repetition = null;

    /**
     * @var int $password_lifetime
     */
    protected $password_lifetime = null;

    /**
     * @var int $password_repetition
     */
    protected $password_repetition = null;

    /**
     * @var int $bruteforce_attempts
     */
    protected $bruteforce_attempts = null;

    /**
     * @var int $bruteforce_lock_time
     */
    protected $bruteforce_lock_time = null;

    /**
     * @param int $password_length
     * @param int $lcase_characters
     * @param int $ucase_characters
     * @param int $numeric_characters
     * @param int $symbol_characters
     * @param int $characters_repetition
     * @param int $password_lifetime
     * @param int $password_repetition
     * @param int $bruteforce_attempts
     * @param int $bruteforce_lock_time
     */
    public function __construct($password_length, $lcase_characters, $ucase_characters, $numeric_characters, $symbol_characters, $characters_repetition, $password_lifetime, $password_repetition, $bruteforce_attempts, $bruteforce_lock_time)
    {
      $this->password_length = $password_length;
      $this->lcase_characters = $lcase_characters;
      $this->ucase_characters = $ucase_characters;
      $this->numeric_characters = $numeric_characters;
      $this->symbol_characters = $symbol_characters;
      $this->characters_repetition = $characters_repetition;
      $this->password_lifetime = $password_lifetime;
      $this->password_repetition = $password_repetition;
      $this->bruteforce_attempts = $bruteforce_attempts;
      $this->bruteforce_lock_time = $bruteforce_lock_time;
    }

    /**
     * @return int
     */
    public function getPassword_length()
    {
      return $this->password_length;
    }

    /**
     * @param int $password_length
     * @return \Boskee\ProofHQ\SOAPAccountPasswordSettingsObject
     */
    public function setPassword_length($password_length)
    {
      $this->password_length = $password_length;
      return $this;
    }

    /**
     * @return int
     */
    public function getLcase_characters()
    {
      return $this->lcase_characters;
    }

    /**
     * @param int $lcase_characters
     * @return \Boskee\ProofHQ\SOAPAccountPasswordSettingsObject
     */
    public function setLcase_characters($lcase_characters)
    {
      $this->lcase_characters = $lcase_characters;
      return $this;
    }

    /**
     * @return int
     */
    public function getUcase_characters()
    {
      return $this->ucase_characters;
    }

    /**
     * @param int $ucase_characters
     * @return \Boskee\ProofHQ\SOAPAccountPasswordSettingsObject
     */
    public function setUcase_characters($ucase_characters)
    {
      $this->ucase_characters = $ucase_characters;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumeric_characters()
    {
      return $this->numeric_characters;
    }

    /**
     * @param int $numeric_characters
     * @return \Boskee\ProofHQ\SOAPAccountPasswordSettingsObject
     */
    public function setNumeric_characters($numeric_characters)
    {
      $this->numeric_characters = $numeric_characters;
      return $this;
    }

    /**
     * @return int
     */
    public function getSymbol_characters()
    {
      return $this->symbol_characters;
    }

    /**
     * @param int $symbol_characters
     * @return \Boskee\ProofHQ\SOAPAccountPasswordSettingsObject
     */
    public function setSymbol_characters($symbol_characters)
    {
      $this->symbol_characters = $symbol_characters;
      return $this;
    }

    /**
     * @return int
     */
    public function getCharacters_repetition()
    {
      return $this->characters_repetition;
    }

    /**
     * @param int $characters_repetition
     * @return \Boskee\ProofHQ\SOAPAccountPasswordSettingsObject
     */
    public function setCharacters_repetition($characters_repetition)
    {
      $this->characters_repetition = $characters_repetition;
      return $this;
    }

    /**
     * @return int
     */
    public function getPassword_lifetime()
    {
      return $this->password_lifetime;
    }

    /**
     * @param int $password_lifetime
     * @return \Boskee\ProofHQ\SOAPAccountPasswordSettingsObject
     */
    public function setPassword_lifetime($password_lifetime)
    {
      $this->password_lifetime = $password_lifetime;
      return $this;
    }

    /**
     * @return int
     */
    public function getPassword_repetition()
    {
      return $this->password_repetition;
    }

    /**
     * @param int $password_repetition
     * @return \Boskee\ProofHQ\SOAPAccountPasswordSettingsObject
     */
    public function setPassword_repetition($password_repetition)
    {
      $this->password_repetition = $password_repetition;
      return $this;
    }

    /**
     * @return int
     */
    public function getBruteforce_attempts()
    {
      return $this->bruteforce_attempts;
    }

    /**
     * @param int $bruteforce_attempts
     * @return \Boskee\ProofHQ\SOAPAccountPasswordSettingsObject
     */
    public function setBruteforce_attempts($bruteforce_attempts)
    {
      $this->bruteforce_attempts = $bruteforce_attempts;
      return $this;
    }

    /**
     * @return int
     */
    public function getBruteforce_lock_time()
    {
      return $this->bruteforce_lock_time;
    }

    /**
     * @param int $bruteforce_lock_time
     * @return \Boskee\ProofHQ\SOAPAccountPasswordSettingsObject
     */
    public function setBruteforce_lock_time($bruteforce_lock_time)
    {
      $this->bruteforce_lock_time = $bruteforce_lock_time;
      return $this;
    }

}
