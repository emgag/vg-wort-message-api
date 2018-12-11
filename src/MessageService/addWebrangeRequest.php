<?php

namespace Emgag\VGWort\MessageService;

class addWebrangeRequest
{

    /**
     * @var Webrange $webrange
     */
    protected $webrange = null;

    /**
     * @var pixelIDType $privateidentificationid
     */
    protected $privateidentificationid = null;

    /**
     * @param Webrange $webrange
     * @param pixelIDType $privateidentificationid
     */
    public function __construct($webrange, $privateidentificationid)
    {
      $this->webrange = $webrange;
      $this->privateidentificationid = $privateidentificationid;
    }

    /**
     * @return Webrange
     */
    public function getWebrange()
    {
      return $this->webrange;
    }

    /**
     * @param Webrange $webrange
     * @return \Emgag\VGWort\MessageService\addWebrangeRequest
     */
    public function setWebrange($webrange)
    {
      $this->webrange = $webrange;
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
     * @return \Emgag\VGWort\MessageService\addWebrangeRequest
     */
    public function setPrivateidentificationid($privateidentificationid)
    {
      $this->privateidentificationid = $privateidentificationid;
      return $this;
    }

}
