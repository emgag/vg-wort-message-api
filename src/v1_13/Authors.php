<?php

namespace Emgag\VGWort\v1_13;

class Authors
{

    /**
     * @var Involved $author
     */
    protected $author = null;

    /**
     * @var InvolvedWithoutContract $authorWithoutContract
     */
    protected $authorWithoutContract = null;

    /**
     * @param Involved $author
     */
    public function __construct($author)
    {
      $this->author = $author;
    }

    /**
     * @return Involved
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param Involved $author
     * @return \Emgag\VGWort\v1_13\Authors
     */
    public function setAuthor($author)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return InvolvedWithoutContract
     */
    public function getAuthorWithoutContract()
    {
      return $this->authorWithoutContract;
    }

    /**
     * @param InvolvedWithoutContract $authorWithoutContract
     * @return \Emgag\VGWort\v1_13\Authors
     */
    public function setAuthorWithoutContract($authorWithoutContract)
    {
      $this->authorWithoutContract = $authorWithoutContract;
      return $this;
    }

}
