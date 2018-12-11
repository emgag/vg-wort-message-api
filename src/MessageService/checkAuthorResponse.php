<?php

namespace Emgag\VGWort\MessageService;

class checkAuthorResponse
{

    /**
     * @var boolean $valid
     */
    protected $valid = null;

    /**
     * @param boolean $valid
     */
    public function __construct($valid)
    {
      $this->valid = $valid;
    }

    /**
     * @return boolean
     */
    public function getValid()
    {
      return $this->valid;
    }

    /**
     * @param boolean $valid
     * @return \Emgag\VGWort\MessageService\checkAuthorResponse
     */
    public function setValid($valid)
    {
      $this->valid = $valid;
      return $this;
    }

}
