<?php

namespace VGWort\MessageService;

class Webrange
{

    /**
     * @var urlType[] $url
     * @access public
     */
    public $url = null;

    /**
     * @param urlType[] $url
     * @access public
     */
    public function __construct($url)
    {
      $this->url = $url;
    }

}
