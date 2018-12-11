<?php

namespace Emgag\VGWort\MessageService;

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
     * @return \Emgag\VGWort\MessageService\getPixelsWithoutInvolvedMessageResponse
     */
    public function setPixelWithoutInvolvedMessage($PixelWithoutInvolvedMessage)
    {
      $this->PixelWithoutInvolvedMessage = $PixelWithoutInvolvedMessage;
      return $this;
    }

}
