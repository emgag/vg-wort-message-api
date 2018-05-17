<?php

namespace VGWort\MessageService;

class MessageText
{

    /**
     * @var string_1100 $shorttext
     * @access public
     */
    public $shorttext = null;

    /**
     * @var Text $text
     * @access public
     */
    public $text = null;

    /**
     * @var boolean $lyric
     * @access public
     */
    public $lyric = null;

    /**
     * @param string_1100 $shorttext
     * @param Text $text
     * @param boolean $lyric
     * @access public
     */
    public function __construct($shorttext, $text, $lyric)
    {
      $this->shorttext = $shorttext;
      $this->text = $text;
      $this->lyric = $lyric;
    }

}
