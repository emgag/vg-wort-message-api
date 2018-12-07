<?php

namespace Emgag\VGWort\PixelService;

class pixelOverviewRequest
{

    /**
     * @var int_0Max $offset
     * @access public
     */
    public $offset = null;

    /**
     * @var pixelOverviewType $type
     * @access public
     */
    public $type = null;

    /**
     * @param int_0Max $offset
     * @param pixelOverviewType $type
     * @access public
     */
    public function __construct($offset, $type)
    {
      $this->offset = $offset;
      $this->type = $type;
    }

}
