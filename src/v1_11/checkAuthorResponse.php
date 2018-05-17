<?php

namespace VGWort\MessageService;

class checkAuthorResponse
{

    /**
     * @var boolean $valid
     * @access public
     */
    public $valid = null;

    /**
     * @param boolean $valid
     * @access public
     */
    public function __construct($valid)
    {
      $this->valid = $valid;
    }

}
