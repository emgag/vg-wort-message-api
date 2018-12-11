<?php

namespace Emgag\VGWort\MessageService;

class Parties
{

    /**
     * @var Authors $authors
     */
    protected $authors = null;

    /**
     * @var Translators $translators
     */
    protected $translators = null;

    /**
     * @param Authors $authors
     */
    public function __construct($authors)
    {
      $this->authors = $authors;
    }

    /**
     * @return Authors
     */
    public function getAuthors()
    {
      return $this->authors;
    }

    /**
     * @param Authors $authors
     * @return \Emgag\VGWort\MessageService\Parties
     */
    public function setAuthors($authors)
    {
      $this->authors = $authors;
      return $this;
    }

    /**
     * @return Translators
     */
    public function getTranslators()
    {
      return $this->translators;
    }

    /**
     * @param Translators $translators
     * @return \Emgag\VGWort\MessageService\Parties
     */
    public function setTranslators($translators)
    {
      $this->translators = $translators;
      return $this;
    }

}
