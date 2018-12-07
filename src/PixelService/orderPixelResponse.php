<?php

namespace Emgag\VGWort\PixelService;

class orderPixelResponse
{

    /**
     * @var string $domain
     * @access public
     */
    public $domain = null;

    /**
     * @var stringDateType $orderDateTime
     * @access public
     */
    public $orderDateTime = null;

    /**
     * @var Pixels $pixels
     * @access public
     */
    public $pixels = null;

    /**
     * @param string $domain
     * @param stringDateType $orderDateTime
     * @param Pixels $pixels
     * @access public
     */
    public function __construct($domain, $orderDateTime, $pixels)
    {
      $this->domain = $domain;
      $this->orderDateTime = $orderDateTime;
      $this->pixels = $pixels;
    }

}
