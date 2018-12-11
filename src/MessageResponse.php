<?php

namespace Emgag\VGWort;

use Emgag\VGWort\MessageService\newMessageResponse;

/**
 * Response package that comes from the VG Wort Message API
 */
class MessageResponse
{
    /** @var newMessageResponse */
    protected $newMessageResponse;

    /** @var string */
    protected $newMessageError;

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return !is_null($this->newMessageResponse) && is_null($this->newMessageError);
    }

    /**
     * @return null|string|array
     */
    public function errorMessage()
    {
        if ($this->isValid()) {
            return null;
        }

        return $this->newMessageError;
    }

    /**
     * @param newMessageResponse $newMessageResponse
     */
    public function success(newMessageResponse $newMessageResponse)
    {
        $this->newMessageResponse = $newMessageResponse;
    }

    /**
     * @param $error
     */
    public function error($error)
    {
        if ($error == null) {
            return;
        }

        if (isset($error->newMessageFault)) {
            $this->newMessageError = $error->newMessageFault->errormsg;
        } elseif (isset($error->ValidationError)) {
            $this->newMessageError = $error->ValidationError;
        } else {
            $this->newMessageError = 'Unknown error';
        }
    }
}