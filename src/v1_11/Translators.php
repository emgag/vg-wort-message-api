<?php

namespace VGWort\MessageService;

class Translators
{

    /**
     * @var Involved $translator
     * @access public
     */
    public $translator = null;

    /**
     * @var InvolvedWithoutContract $translatorWithoutContract
     * @access public
     */
    public $translatorWithoutContract = null;

    /**
     * @param Involved $translator
     * @param InvolvedWithoutContract $translatorWithoutContract
     * @access public
     */
    public function __construct($translator, $translatorWithoutContract)
    {
      $this->translator = $translator;
      $this->translatorWithoutContract = $translatorWithoutContract;
    }

}
