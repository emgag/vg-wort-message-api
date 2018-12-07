<?php

namespace Emgag\VGWort\PixelService;

class tomFault
{

    /**
     * @var int $errorcode
     * @access public
     */
    public $errorcode = null;

    /**
     * @var string $errormsg
     * @access public
     */
    public $errormsg = null;

    /**
     * @param int $errorcode
     * @param string $errormsg
     * @access public
     */
    public function __construct($errorcode, $errormsg)
    {
      $this->errorcode = $errorcode;
      $this->errormsg = $errormsg;
    }

}
