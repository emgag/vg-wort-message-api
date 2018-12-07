<?php

namespace Emgag\VGWort\v1_13;

class Involved
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
     * @var cardNumberType $cardNumber
     */
    protected $cardNumber = null;

    /**
     * @var codeType $code
     */
    protected $code = null;

    /**
     * @param string_240 $firstName
     * @param string_2255 $surName
     * @param codeType $code
     */
    public function __construct($firstName, $surName, $code)
    {
      $this->firstName = $firstName;
      $this->surName = $surName;
      $this->code = $code;
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
     * @return \Emgag\VGWort\v1_13\Involved
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
     * @return \Emgag\VGWort\v1_13\Involved
     */
    public function setSurName($surName)
    {
      $this->surName = $surName;
      return $this;
    }

    /**
     * @return cardNumberType
     */
    public function getCardNumber()
    {
      return $this->cardNumber;
    }

    /**
     * @param cardNumberType $cardNumber
     * @return \Emgag\VGWort\v1_13\Involved
     */
    public function setCardNumber($cardNumber)
    {
      $this->cardNumber = $cardNumber;
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
     * @return \Emgag\VGWort\v1_13\Involved
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
