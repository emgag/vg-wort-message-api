<?php

namespace Emgag\VGWort\v1_13;

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
     * @return \Emgag\VGWort\v1_13\Webranges
     */
    public function setWebrange(array $webrange)
    {
      $this->webrange = $webrange;
      return $this;
    }

}
