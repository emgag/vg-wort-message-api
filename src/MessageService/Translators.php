<?php

namespace Emgag\VGWort\MessageService;

class Translators
{

    /**
     * @var Involved $translator
     */
    protected $translator = null;

    /**
     * @var InvolvedWithoutContract $translatorWithoutContract
     */
    protected $translatorWithoutContract = null;

    /**
     * @param Involved $translator
     */
    public function __construct($translator)
    {
      $this->translator = $translator;
    }

    /**
     * @return Involved
     */
    public function getTranslator()
    {
      return $this->translator;
    }

    /**
     * @param Involved $translator
     * @return \Emgag\VGWort\MessageService\Translators
     */
    public function setTranslator($translator)
    {
      $this->translator = $translator;
      return $this;
    }

    /**
     * @return InvolvedWithoutContract
     */
    public function getTranslatorWithoutContract()
    {
      return $this->translatorWithoutContract;
    }

    /**
     * @param InvolvedWithoutContract $translatorWithoutContract
     * @return \Emgag\VGWort\MessageService\Translators
     */
    public function setTranslatorWithoutContract($translatorWithoutContract)
    {
      $this->translatorWithoutContract = $translatorWithoutContract;
      return $this;
    }

}
