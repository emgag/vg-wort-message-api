<?php

namespace Emgag\VGWort\v1_13;

class Participant
{

    /**
     * @var string_240 $firstName
     */
    protected $firstName = null;

    /**
     * @var string_2255 $surName
     */
    protected $surName = null;

    /**
     * @var codeType $code
     */
    protected $code = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string_240
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string_240 $firstName
     * @return \Emgag\VGWort\v1_13\Participant
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string_2255
     */
    public function getSurName()
    {
      return $this->surName;
    }

    /**
     * @param string_2255 $surName
     * @return \Emgag\VGWort\v1_13\Participant
     */
    public function setSurName($surName)
    {
      $this->surName = $surName;
      return $this;
    }

    /**
     * @return codeType
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param codeType $code
     * @return \Emgag\VGWort\v1_13\Participant
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
