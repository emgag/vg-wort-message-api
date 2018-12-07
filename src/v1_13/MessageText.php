<?php

namespace Emgag\VGWort\v1_13;

class MessageText
{

    /**
     * @var string_1100 $shorttext
     */
    protected $shorttext = null;

    /**
     * @var Text $text
     */
    protected $text = null;

    /**
     * @var boolean $lyric
     */
    protected $lyric = null;

    /**
     * @param string_1100 $shorttext
     * @param Text $text
     * @param boolean $lyric
     */
    public function __construct($shorttext, $text, $lyric)
    {
      $this->shorttext = $shorttext;
      $this->text = $text;
      $this->lyric = $lyric;
    }

    /**
     * @return string_1100
     */
    public function getShorttext()
    {
      return $this->shorttext;
    }

    /**
     * @param string_1100 $shorttext
     * @return \Emgag\VGWort\v1_13\MessageText
     */
    public function setShorttext($shorttext)
    {
      $this->shorttext = $shorttext;
      return $this;
    }

    /**
     * @return Text
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param Text $text
     * @return \Emgag\VGWort\v1_13\MessageText
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLyric()
    {
      return $this->lyric;
    }

    /**
     * @param boolean $lyric
     * @return \Emgag\VGWort\v1_13\MessageText
     */
    public function setLyric($lyric)
    {
      $this->lyric = $lyric;
      return $this;
    }

}
