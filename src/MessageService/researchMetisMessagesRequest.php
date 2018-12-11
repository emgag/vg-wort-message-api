<?php

namespace Emgag\VGWort\MessageService;

class researchMetisMessagesRequest
{

    /**
     * @var date $dateFrom
     */
    protected $dateFrom = null;

    /**
     * @var date $dateTo
     */
    protected $dateTo = null;

    /**
     * @var string_1100 $title
     */
    protected $title = null;

    /**
     * @var string_160 $firstName
     */
    protected $firstName = null;

    /**
     * @var string_160 $surName
     */
    protected $surName = null;

    /**
     * @var cardNumberType $cardNumber
     */
    protected $cardNumber = null;

    /**
     * @var int_0MAX $offset
     */
    protected $offset = null;

    /**
     * @param date $dateFrom
     * @param date $dateTo
     * @param string_1100 $title
     * @param string_160 $firstName
     * @param string_160 $surName
     * @param cardNumberType $cardNumber
     * @param int_0MAX $offset
     */
    public function __construct($dateFrom, $dateTo, $title, $firstName, $surName, $cardNumber, $offset)
    {
      $this->dateFrom = $dateFrom;
      $this->dateTo = $dateTo;
      $this->title = $title;
      $this->firstName = $firstName;
      $this->surName = $surName;
      $this->cardNumber = $cardNumber;
      $this->offset = $offset;
    }

    /**
     * @return date
     */
    public function getDateFrom()
    {
      return $this->dateFrom;
    }

    /**
     * @param date $dateFrom
     * @return \Emgag\VGWort\MessageService\researchMetisMessagesRequest
     */
    public function setDateFrom($dateFrom)
    {
      $this->dateFrom = $dateFrom;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateTo()
    {
      return $this->dateTo;
    }

    /**
     * @param date $dateTo
     * @return \Emgag\VGWort\MessageService\researchMetisMessagesRequest
     */
    public function setDateTo($dateTo)
    {
      $this->dateTo = $dateTo;
      return $this;
    }

    /**
     * @return string_1100
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string_1100 $title
     * @return \Emgag\VGWort\MessageService\researchMetisMessagesRequest
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string_160
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string_160 $firstName
     * @return \Emgag\VGWort\MessageService\researchMetisMessagesRequest
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string_160
     */
    public function getSurName()
    {
      return $this->surName;
    }

    /**
     * @param string_160 $surName
     * @return \Emgag\VGWort\MessageService\researchMetisMessagesRequest
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
     * @return \Emgag\VGWort\MessageService\researchMetisMessagesRequest
     */
    public function setCardNumber($cardNumber)
    {
      $this->cardNumber = $cardNumber;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int_0MAX $offset
     * @return \Emgag\VGWort\MessageService\researchMetisMessagesRequest
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

}
