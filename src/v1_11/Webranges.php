<?php

namespace VGWort\MessageService;

class Webranges
{

    /**
     * @var Webrange[] $webrange
     * @access public
     */
    public $webrange = null;

    /**
     * @param Webrange[] $webrange
     * @access public
     */
    public function __construct($webrange)
    {
      $this->webrange = $webrange;
    }

}
