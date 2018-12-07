<?php

namespace Emgag\VGWort\PixelService;

class Pixels
{

    /**
     * @var Pixel[] $pixel
     * @access public
     */
    public $pixel = null;

    /**
     * @param Pixel[] $pixel
     * @access public
     */
    public function __construct($pixel)
    {
      $this->pixel = $pixel;
    }

}
