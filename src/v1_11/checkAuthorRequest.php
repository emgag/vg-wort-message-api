<?php

namespace VGWort\MessageService;

class checkAuthorRequest
{

    /**
     * @var cardNumberType $cardNumber
     * @access public
     */
    public $cardNumber = null;

    /**
     * @var string_2255 $surName
     * @access public
     */
    public $surName = null;

    /**
     * @param cardNumberType $cardNumber
     * @param string_2255 $surName
     * @access public
     */
    public function __construct($cardNumber, $surName)
    {
      $this->cardNumber = $cardNumber;
      $this->surName = $surName;
    }

}
