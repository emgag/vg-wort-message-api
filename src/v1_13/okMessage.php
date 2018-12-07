<?php

namespace Emgag\VGWort\v1_13;

class okMessage
{

    /**
     * @var okType $status
     */
    protected $status = null;

    /**
     * @param okType $status
     */
    public function __construct($status)
    {
      $this->status = $status;
    }

    /**
     * @return okType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param okType $status
     * @return \Emgag\VGWort\v1_13\okMessage
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
