<?php

namespace VGWort\MessageService;

class researchMetisMessagesRequest
{

    /**
     * @var date $dateFrom
     * @access public
     */
    public $dateFrom = null;

    /**
     * @var date $dateTo
     * @access public
     */
    public $dateTo = null;

    /**
     * @var string_1100 $title
     * @access public
     */
    public $title = null;

    /**
     * @var string_160 $firstName
     * @access public
     */
    public $firstName = null;

    /**
     * @var string_160 $surName
     * @access public
     */
    public $surName = null;

    /**
     * @var cardNumberType $cardNumber
     * @access public
     */
    public $cardNumber = null;

    /**
     * @var int_0MAX $offset
     * @access public
     */
    public $offset = null;

    /**
     * @param date $dateFrom
     * @param date $dateTo
     * @param string_1100 $title
     * @param string_160 $firstName
     * @param string_160 $surName
     * @param cardNumberType $cardNumber
     * @param int_0MAX $offset
     * @access public
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

}
