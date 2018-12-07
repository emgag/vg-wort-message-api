<?php

namespace Emgag\VGWort\v1_13;

class Text
{

    /**
     * @var base64BinaryMax15MB $pdf
     */
    protected $pdf = null;

    /**
     * @var base64BinaryMax15MB $plainText
     */
    protected $plainText = null;

    /**
     * @var base64BinaryMax15MB $epub
     */
    protected $epub = null;

    /**
     * @param base64BinaryMax15MB $pdf
     * @param base64BinaryMax15MB $plainText
     * @param base64BinaryMax15MB $epub
     */
    public function __construct($pdf, $plainText, $epub)
    {
      $this->pdf = $pdf;
      $this->plainText = $plainText;
      $this->epub = $epub;
    }

    /**
     * @return base64BinaryMax15MB
     */
    public function getPdf()
    {
      return $this->pdf;
    }

    /**
     * @param base64BinaryMax15MB $pdf
     * @return \Emgag\VGWort\v1_13\Text
     */
    public function setPdf($pdf)
    {
      $this->pdf = $pdf;
      return $this;
    }

    /**
     * @return base64BinaryMax15MB
     */
    public function getPlainText()
    {
      return $this->plainText;
    }

    /**
     * @param base64BinaryMax15MB $plainText
     * @return \Emgag\VGWort\v1_13\Text
     */
    public function setPlainText($plainText)
    {
      $this->plainText = $plainText;
      return $this;
    }

    /**
     * @return base64BinaryMax15MB
     */
    public function getEpub()
    {
      return $this->epub;
    }

    /**
     * @param base64BinaryMax15MB $epub
     * @return \Emgag\VGWort\v1_13\Text
     */
    public function setEpub($epub)
    {
      $this->epub = $epub;
      return $this;
    }

}
