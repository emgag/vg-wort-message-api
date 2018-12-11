<?php

namespace Emgag\VGWort\MessageService;

class Webranges
{

    /**
     * @var Webrange[] $webrange
     */
    protected $webrange = null;

    /**
     * @param Webrange[] $webrange
     */
    public function __construct(array $webrange)
    {
      $this->webrange = $webrange;
    }

    /**
     * @return Webrange[]
     */
    public function getWebrange()
    {
      return $this->webrange;
    }

    /**
     * @param Webrange[] $webrange
     * @return \Emgag\VGWort\MessageService\Webranges
     */
    public function setWebrange(array $webrange)
    {
      $this->webrange = $webrange;
      return $this;
    }

}
