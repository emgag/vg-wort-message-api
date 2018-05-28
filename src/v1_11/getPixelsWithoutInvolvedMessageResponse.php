<?php

namespace Emgag\VGWort\v1_11;

class getPixelsWithoutInvolvedMessageResponse
{

    /**
     * @var PixelWithoutInvolvedMessage $PixelWithoutInvolvedMessage
     * @access public
     */
    public $PixelWithoutInvolvedMessage = null;

    /**
     * @param PixelWithoutInvolvedMessage $PixelWithoutInvolvedMessage
     * @access public
     */
    public function __construct($PixelWithoutInvolvedMessage)
    {
      $this->PixelWithoutInvolvedMessage = $PixelWithoutInvolvedMessage;
    }

}
