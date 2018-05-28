<?php

namespace Emgag\VGWort\v1_11;

class Involved
{

    /**
     * @var string_240 $firstName
     * @access public
     */
    public $firstName = null;

    /**
     * @var string_2255 $surName
     * @access public
     */
    public $surName = null;

    /**
     * @var cardNumberType $cardNumber
     * @access public
     */
    public $cardNumber = null;

    /**
     * @var codeType $code
     * @access public
     */
    public $code = null;

    /**
     * @param string_240 $firstName
     * @param string_2255 $surName
     * @param cardNumberType $cardNumber
     * @param codeType $code
     * @access public
     */
    public function __construct($firstName, $surName, $cardNumber, $code)
    {
      $this->firstName = $firstName;
      $this->surName = $surName;
      $this->cardNumber = $cardNumber;
      $this->code = $code;
    }

}
