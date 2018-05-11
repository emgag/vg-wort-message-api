<?php

namespace Emgag\VGWort;

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
     * @param null $newMessageResponse
     * @param null $newMessageFault
     */
    public function __construct($newMessageResponse = null, $newMessageFault = null)
    {
        $this->newMessageResponse = $newMessageResponse;
        $this->newMessageFault = $newMessageFault;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return !is_null($this->newMessageResponse) && is_null($this->newMessageFault);
    }

    /**
     * @return null|string
     */
    public function errorMessage()
    {
        if ($this->isValid()) {
            return null;
        }

        return $this->newMessageFault->newMessageFault->errormsg;
    }

    /**
     * @param $newMessageResponse
     */
    public function success($newMessageResponse)
    {
        $this->newMessageResponse = $newMessageResponse;
    }

    /**
     * @param $newMessageFault
     */
    public function error($newMessageFault)
    {
        $this->newMessageFault = $newMessageFault;
    }
}