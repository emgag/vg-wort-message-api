<?php

namespace VGWort\MessageService;

class Text
{

    /**
     * @var base64BinaryMax15MB $pdf
     * @access public
     */
    public $pdf = null;

    /**
     * @var base64BinaryMax15MB $plainText
     * @access public
     */
    public $plainText = null;

    /**
     * @var base64BinaryMax15MB $epub
     * @access public
     */
    public $epub = null;

    /**
     * @param base64BinaryMax15MB $pdf
     * @param base64BinaryMax15MB $plainText
     * @param base64BinaryMax15MB $epub
     * @access public
     */
    public function __construct($pdf, $plainText, $epub)
    {
      $this->pdf = $pdf;
      $this->plainText = $plainText;
      $this->epub = $epub;
    }

}
