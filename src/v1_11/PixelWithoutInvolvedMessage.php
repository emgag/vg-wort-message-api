<?php

namespace Emgag\VGWort\v1_11;

class PixelWithoutInvolvedMessage
{

    /**
     * @var pixelIDType $privateId
     * @access public
     */
    public $privateId = null;

    /**
     * @var pixelIDType $publicId
     * @access public
     */
    public $publicId = null;

    /**
     * @var dateTime $createdDate
     * @access public
     */
    public $createdDate = null;

    /**
     * @var string_240 $title
     * @access public
     */
    public $title = null;

    /**
     * @var Participant[] $Participant
     * @access public
     */
    public $Participant = null;

    /**
     * @param pixelIDType $privateId
     * @param pixelIDType $publicId
     * @param dateTime $createdDate
     * @param string_240 $title
     * @param Participant[] $Participant
     * @access public
     */
    public function __construct($privateId, $publicId, $createdDate, $title, $Participant)
    {
      $this->privateId = $privateId;
      $this->publicId = $publicId;
      $this->createdDate = $createdDate;
      $this->title = $title;
      $this->Participant = $Participant;
    }

}
