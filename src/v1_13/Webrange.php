<?php

namespace Emgag\VGWort\v1_13;

class Webrange
{

    /**
     * @var urlType[] $url
     */
    protected $url = null;

    /**
     * @param urlType[] $url
     */
    public function __construct(array $url)
    {
      $this->url = $url;
    }

    /**
     * @return urlType[]
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param urlType[] $url
     * @return \Emgag\VGWort\v1_13\Webrange
     */
    public function setUrl(array $url)
    {
      $this->url = $url;
      return $this;
    }

}
