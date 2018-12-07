<?php

namespace Emgag\VGWort\PixelService;

class pixelOverviewResponse
{

    /**
     * @var pixelIDType $privateIdentificationId
     * @access public
     */
    public $privateIdentificationId = null;

    /**
     * @var int_0Max $offset
     * @access public
     */
    public $offset = null;

    /**
     * @var int_0Max $amount
     * @access public
     */
    public $amount = null;

    /**
     * @param pixelIDType $privateIdentificationId
     * @param int_0Max $offset
     * @param int_0Max $amount
     * @access public
     */
    public function __construct($privateIdentificationId, $offset, $amount)
    {
      $this->privateIdentificationId = $privateIdentificationId;
      $this->offset = $offset;
      $this->amount = $amount;
    }

}
