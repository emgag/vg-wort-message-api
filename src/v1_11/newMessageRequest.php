<?php

namespace VGWort\MessageService;

class newMessageRequest
{

    /**
     * @var Parties $parties
     * @access public
     */
    public $parties = null;

    /**
     * @var MessageText $messagetext
     * @access public
     */
    public $messagetext = null;

    /**
     * @var Webranges $webranges
     * @access public
     */
    public $webranges = null;

    /**
     * @var pixelIDType $privateidentificationid
     * @access public
     */
    public $privateidentificationid = null;

    /**
     * @param Parties $parties
     * @param MessageText $messagetext
     * @param Webranges $webranges
     * @param pixelIDType $privateidentificationid
     * @access public
     */
    public function __construct($parties, $messagetext, $webranges, $privateidentificationid)
    {
      $this->parties = $parties;
      $this->messagetext = $messagetext;
      $this->webranges = $webranges;
      $this->privateidentificationid = $privateidentificationid;
    }

}
