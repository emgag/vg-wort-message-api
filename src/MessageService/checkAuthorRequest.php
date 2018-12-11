<?php

namespace Emgag\VGWort\MessageService;

class checkAuthorRequest
{

    /**
     * @var cardNumberType $cardNumber
     */
    protected $cardNumber = null;

    /**
     * @var string_240 $firstName
     */
    protected $firstName = null;

    /**
     * @var string_2255 $surName
     */
    protected $surName = null;

    /**
     * @param cardNumberType $cardNumber
     * @param string_240 $firstName
     * @param string_2255 $surName
     */
    public function __construct($cardNumber, $firstName, $surName)
    {
      $this->cardNumber = $cardNumber;
      $this->firstName = $firstName;
      $this->surName = $surName;
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
     * @return \Emgag\VGWort\MessageService\checkAuthorRequest
     */
    public function setCardNumber($cardNumber)
    {
      $this->cardNumber = $cardNumber;
      return $this;
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
     * @return \Emgag\VGWort\MessageService\checkAuthorRequest
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
     * @return \Emgag\VGWort\MessageService\checkAuthorRequest
     */
    public function setSurName($surName)
    {
      $this->surName = $surName;
      return $this;
    }

}
