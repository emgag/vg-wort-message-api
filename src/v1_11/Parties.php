<?php

namespace VGWort\MessageService;

class Parties
{

    /**
     * @var Authors $authors
     * @access public
     */
    public $authors = null;

    /**
     * @var Translators $translators
     * @access public
     */
    public $translators = null;

    /**
     * @param Authors $authors
     * @param Translators $translators
     * @access public
     */
    public function __construct($authors, $translators)
    {
      $this->authors = $authors;
      $this->translators = $translators;
    }

}
