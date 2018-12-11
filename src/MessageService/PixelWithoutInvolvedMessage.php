<?php

namespace Emgag\VGWort\MessageService;

class PixelWithoutInvolvedMessage
{

    /**
     * @var pixelIDType $privateId
     */
    protected $privateId = null;

    /**
     * @var pixelIDType $publicId
     */
    protected $publicId = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var string_240 $title
     */
    protected $title = null;

    /**
     * @var Participant[] $Participant
     */
    protected $Participant = null;

    /**
     * @param pixelIDType $privateId
     * @param pixelIDType $publicId
     * @param \DateTime $createdDate
     * @param string_240 $title
     * @param Participant[] $Participant
     */
    public function __construct($privateId, $publicId, \DateTime $createdDate, $title, array $Participant)
    {
      $this->privateId = $privateId;
      $this->publicId = $publicId;
      $this->createdDate = $createdDate->format(\DateTime::ATOM);
      $this->title = $title;
      $this->Participant = $Participant;
    }

    /**
     * @return pixelIDType
     */
    public function getPrivateId()
    {
      return $this->privateId;
    }

    /**
     * @param pixelIDType $privateId
     * @return \Emgag\VGWort\MessageService\PixelWithoutInvolvedMessage
     */
    public function setPrivateId($privateId)
    {
      $this->privateId = $privateId;
      return $this;
    }

    /**
     * @return pixelIDType
     */
    public function getPublicId()
    {
      return $this->publicId;
    }

    /**
     * @param pixelIDType $publicId
     * @return \Emgag\VGWort\MessageService\PixelWithoutInvolvedMessage
     */
    public function setPublicId($publicId)
    {
      $this->publicId = $publicId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Emgag\VGWort\MessageService\PixelWithoutInvolvedMessage
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
      $this->createdDate = $createdDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string_240
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string_240 $title
     * @return \Emgag\VGWort\MessageService\PixelWithoutInvolvedMessage
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return Participant[]
     */
    public function getParticipant()
    {
      return $this->Participant;
    }

    /**
     * @param Participant[] $Participant
     * @return \Emgag\VGWort\MessageService\PixelWithoutInvolvedMessage
     */
    public function setParticipant(array $Participant)
    {
      $this->Participant = $Participant;
      return $this;
    }

}
