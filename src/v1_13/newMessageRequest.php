<?php

namespace Emgag\VGWort\v1_13;

class newMessageRequest
{

    /**
     * @var Parties $parties
     */
    protected $parties = null;

    /**
     * @var MessageText $messagetext
     */
    protected $messagetext = null;

    /**
     * @var Webranges $webranges
     */
    protected $webranges = null;

    /**
     * @var pixelIDType $privateidentificationid
     */
    protected $privateidentificationid = null;

    /**
     * @param Parties $parties
     * @param MessageText $messagetext
     * @param Webranges $webranges
     * @param pixelIDType $privateidentificationid
     */
    public function __construct($parties, $messagetext, $webranges, $privateidentificationid)
    {
      $this->parties = $parties;
      $this->messagetext = $messagetext;
      $this->webranges = $webranges;
      $this->privateidentificationid = $privateidentificationid;
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
     * @return \Emgag\VGWort\v1_13\newMessageRequest
     */
    public function setParties($parties)
    {
      $this->parties = $parties;
      return $this;
    }

    /**
     * @return MessageText
     */
    public function getMessagetext()
    {
      return $this->messagetext;
    }

    /**
     * @param MessageText $messagetext
     * @return \Emgag\VGWort\v1_13\newMessageRequest
     */
    public function setMessagetext($messagetext)
    {
      $this->messagetext = $messagetext;
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
     * @return \Emgag\VGWort\v1_13\newMessageRequest
     */
    public function setWebranges($webranges)
    {
      $this->webranges = $webranges;
      return $this;
    }

    /**
     * @return pixelIDType
     */
    public function getPrivateidentificationid()
    {
      return $this->privateidentificationid;
    }

    /**
     * @param pixelIDType $privateidentificationid
     * @return \Emgag\VGWort\v1_13\newMessageRequest
     */
    public function setPrivateidentificationid($privateidentificationid)
    {
      $this->privateidentificationid = $privateidentificationid;
      return $this;
    }

}
