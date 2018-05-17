<?php

namespace VGWort\MessageService;

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
