<?php

namespace Emgag\VGWort\MessageService;

class tomFault
{

    /**
     * @var int $errorcode
     */
    protected $errorcode = null;

    /**
     * @var string $errormsg
     */
    protected $errormsg = null;

    /**
     * @param int $errorcode
     * @param string $errormsg
     */
    public function __construct($errorcode, $errormsg)
    {
      $this->errorcode = $errorcode;
      $this->errormsg = $errormsg;
    }

    /**
     * @return int
     */
    public function getErrorcode()
    {
      return $this->errorcode;
    }

    /**
     * @param int $errorcode
     * @return \Emgag\VGWort\MessageService\tomFault
     */
    public function setErrorcode($errorcode)
    {
      $this->errorcode = $errorcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrormsg()
    {
      return $this->errormsg;
    }

    /**
     * @param string $errormsg
     * @return \Emgag\VGWort\MessageService\tomFault
     */
    public function setErrormsg($errormsg)
    {
      $this->errormsg = $errormsg;
      return $this;
    }

}
