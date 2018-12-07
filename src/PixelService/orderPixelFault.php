<?php

namespace Emgag\VGWort\PixelService;

class orderPixelFault
{

    /**
     * @var int_0Max $maxOrder
     * @access public
     */
    public $maxOrder = null;

    /**
     * @param int_0Max $maxOrder
     * @access public
     */
    public function __construct($maxOrder)
    {
      $this->maxOrder = $maxOrder;
    }

}
