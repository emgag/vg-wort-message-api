<?php

namespace VGWort\MessageService;

class Participant
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
     * @var codeType $code
     * @access public
     */
    public $code = null;

    /**
     * @param string_240 $firstName
     * @param string_2255 $surName
     * @param codeType $code
     * @access public
     */
    public function __construct($firstName, $surName, $code)
    {
      $this->firstName = $firstName;
      $this->surName = $surName;
      $this->code = $code;
    }

}
