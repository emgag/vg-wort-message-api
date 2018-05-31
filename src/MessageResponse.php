<?php

namespace Emgag\VGWort;

use Emgag\VGWort\v1_11\newMessageFault;
use Emgag\VGWort\v1_11\newMessageResponse;

/**
 * Response package that comes from the VG Wort Message API
 */
class MessageResponse
{
    protected $newMessageResponse;
    protected $newMessageFault;

    /**
     * MessageResponse constructor.
     *
     * @param newMessageResponse $newMessageResponse
     * @param newMessageFault $newMessageFault
     */
    public function __construct($newMessageResponse = null, $newMessageFault = null)
    {
        $this->newMessageResponse = $newMessageResponse;
        $this->newMessageFault = $newMessageFault;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return !is_null($this->newMessageResponse) && is_null($this->newMessageFault);
    }

    /**
     * @return null|string
     */
    public function errorMessage(): ?string
    {
        if ($this->isValid()) {
            return null;
        }

        return $this->newMessageFault->newMessageFault->errormsg;
    }

    /**
     * @param newMessageResponse $newMessageResponse
     */
    public function success(newMessageResponse $newMessageResponse)
    {
        $this->newMessageResponse = $newMessageResponse;
    }

    /**
     * @param newMessageFault $newMessageFault
     */
    public function error(newMessageFault $newMessageFault)
    {
        $this->newMessageFault = $newMessageFault;
    }
}