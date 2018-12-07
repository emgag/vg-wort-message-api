<?php

namespace Emgag\VGWort\PixelService;

class Pixel
{

    /**
     * @var pixelIDType $publicIdentificationId
     * @access public
     */
    public $publicIdentificationId = null;

    /**
     * @var pixelIDType $privateIdentificationId
     * @access public
     */
    public $privateIdentificationId = null;

    /**
     * @param pixelIDType $publicIdentificationId
     * @param pixelIDType $privateIdentificationId
     * @access public
     */
    public function __construct($publicIdentificationId, $privateIdentificationId)
    {
      $this->publicIdentificationId = $publicIdentificationId;
      $this->privateIdentificationId = $privateIdentificationId;
    }

}
