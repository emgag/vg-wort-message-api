<?php

namespace VGWort\MessageService;

class ResearchedMetisMessage
{

    /**
     * @var string_1100 $messageType
     * @access public
     */
    public $messageType = null;

    /**
     * @var string_1100 $title
     * @access public
     */
    public $title = null;

    /**
     * @var string $publicidentificationid
     * @access public
     */
    public $publicidentificationid = null;

    /**
     * @var string $privateidentificationid
     * @access public
     */
    public $privateidentificationid = null;

    /**
     * @var dateTime $createdDate
     * @access public
     */
    public $createdDate = null;

    /**
     * @var Parties $parties
     * @access public
     */
    public $parties = null;

    /**
     * @var Webranges $webranges
     * @access public
     */
    public $webranges = null;

    /**
     * @param string_1100 $messageType
     * @param string_1100 $title
     * @param string $publicidentificationid
     * @param string $privateidentificationid
     * @param dateTime $createdDate
     * @param Parties $parties
     * @param Webranges $webranges
     * @access public
     */
    public function __construct($messageType, $title, $publicidentificationid, $privateidentificationid, $createdDate, $parties, $webranges)
    {
      $this->messageType = $messageType;
      $this->title = $title;
      $this->publicidentificationid = $publicidentificationid;
      $this->privateidentificationid = $privateidentificationid;
      $this->createdDate = $createdDate;
      $this->parties = $parties;
      $this->webranges = $webranges;
    }

}
