<?php

namespace Emgag\VGWort\v1_13;

class getPixelsWithoutInvolvedMessageResponse
{

    /**
     * @var PixelWithoutInvolvedMessage $PixelWithoutInvolvedMessage
     */
    protected $PixelWithoutInvolvedMessage = null;

    /**
     * @param PixelWithoutInvolvedMessage $PixelWithoutInvolvedMessage
     */
    public function __construct($PixelWithoutInvolvedMessage)
    {
      $this->PixelWithoutInvolvedMessage = $PixelWithoutInvolvedMessage;
    }

    /**
     * @return PixelWithoutInvolvedMessage
     */
    public function getPixelWithoutInvolvedMessage()
    {
      return $this->PixelWithoutInvolvedMessage;
    }

    /**
     * @param PixelWithoutInvolvedMessage $PixelWithoutInvolvedMessage
     * @return \Emgag\VGWort\v1_13\getPixelsWithoutInvolvedMessageResponse
     */
    public function setPixelWithoutInvolvedMessage($PixelWithoutInvolvedMessage)
    {
      $this->PixelWithoutInvolvedMessage = $PixelWithoutInvolvedMessage;
      return $this;
    }

}
