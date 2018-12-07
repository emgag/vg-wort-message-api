<?php

namespace Emgag\VGWort\PixelService;

class orderPixelRequest
{

    /**
     * @var int_1Max $count
     * @access public
     */
    public $count = null;

    /**
     * @param int_1Max $count
     * @access public
     */
    public function __construct($count)
    {
      $this->count = $count;
    }

}
