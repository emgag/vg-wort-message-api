<?php

namespace Emgag\VGWort\v1_13;

class ResearchedMetisMessage
{

    /**
     * @var string_1100 $messageType
     */
    protected $messageType = null;

    /**
     * @var string_1100 $title
     */
    protected $title = null;

    /**
     * @var string $publicidentificationid
     */
    protected $publicidentificationid = null;

    /**
     * @var string $privateidentificationid
     */
    protected $privateidentificationid = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var Parties $parties
     */
    protected $parties = null;

    /**
     * @var Webranges $webranges
     */
    protected $webranges = null;

    /**
     * @param string_1100 $messageType
     * @param string_1100 $title
     * @param string $publicidentificationid
     * @param string $privateidentificationid
     * @param \DateTime $createdDate
     * @param Parties $parties
     * @param Webranges $webranges
     */
    public function __construct($messageType, $title, $publicidentificationid, $privateidentificationid, \DateTime $createdDate, $parties, $webranges)
    {
      $this->messageType = $messageType;
      $this->title = $title;
      $this->publicidentificationid = $publicidentificationid;
      $this->privateidentificationid = $privateidentificationid;
      $this->createdDate = $createdDate->format(\DateTime::ATOM);
      $this->parties = $parties;
      $this->webranges = $webranges;
    }

    /**
     * @return string_1100
     */
    public function getMessageType()
    {
      return $this->messageType;
    }

    /**
     * @param string_1100 $messageType
     * @return \Emgag\VGWort\v1_13\ResearchedMetisMessage
     */
    public function setMessageType($messageType)
    {
      $this->messageType = $messageType;
      return $this;
    }

    /**
     * @return string_1100
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string_1100 $title
     * @return \Emgag\VGWort\v1_13\ResearchedMetisMessage
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublicidentificationid()
    {
      return $this->publicidentificationid;
    }

    /**
     * @param string $publicidentificationid
     * @return \Emgag\VGWort\v1_13\ResearchedMetisMessage
     */
    public function setPublicidentificationid($publicidentificationid)
    {
      $this->publicidentificationid = $publicidentificationid;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrivateidentificationid()
    {
      return $this->privateidentificationid;
    }

    /**
     * @param string $privateidentificationid
     * @return \Emgag\VGWort\v1_13\ResearchedMetisMessage
     */
    public function setPrivateidentificationid($privateidentificationid)
    {
      $this->privateidentificationid = $privateidentificationid;
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
     * @return \Emgag\VGWort\v1_13\ResearchedMetisMessage
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
      $this->createdDate = $createdDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return Parties
     */
    public function getParties()
    {
      return $this->parties;
    }

    /**
     * @param Parties $parties
     * @return \Emgag\VGWort\v1_13\ResearchedMetisMessage
     */
    public function setParties($parties)
    {
      $this->parties = $parties;
      return $this;
    }

    /**
     * @return Webranges
     */
    public function getWebranges()
    {
      return $this->webranges;
    }

    /**
     * @param Webranges $webranges
     * @return \Emgag\VGWort\v1_13\ResearchedMetisMessage
     */
    public function setWebranges($webranges)
    {
      $this->webranges = $webranges;
      return $this;
    }

}
