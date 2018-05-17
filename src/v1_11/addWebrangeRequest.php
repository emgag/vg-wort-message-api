<?php

namespace VGWort\MessageService;

class addWebrangeRequest
{

    /**
     * @var Webrange $webrange
     * @access public
     */
    public $webrange = null;

    /**
     * @var pixelIDType $privateidentificationid
     * @access public
     */
    public $privateidentificationid = null;

    /**
     * @param Webrange $webrange
     * @param pixelIDType $privateidentificationid
     * @access public
     */
    public function __construct($webrange, $privateidentificationid)
    {
      $this->webrange = $webrange;
      $this->privateidentificationid = $privateidentificationid;
    }

}
