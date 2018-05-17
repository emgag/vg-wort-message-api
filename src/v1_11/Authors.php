<?php

namespace VGWort\MessageService;

class Authors
{

    /**
     * @var Involved $author
     * @access public
     */
    public $author = null;

    /**
     * @var InvolvedWithoutContract $authorWithoutContract
     * @access public
     */
    public $authorWithoutContract = null;

    /**
     * @param Involved $author
     * @param InvolvedWithoutContract $authorWithoutContract
     * @access public
     */
    public function __construct($author, $authorWithoutContract)
    {
      $this->author = $author;
      $this->authorWithoutContract = $authorWithoutContract;
    }

}
