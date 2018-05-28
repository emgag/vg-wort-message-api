<?php

namespace Emgag\VGWort\v1_11;

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
