<?php

namespace Emgag\VGWort;

use Emgag\VGWort\v1_13\Authors;
use Emgag\VGWort\v1_13\Involved;
use Emgag\VGWort\v1_13\MessageText;
use Emgag\VGWort\v1_13\newMessageRequest;
use Emgag\VGWort\v1_13\Parties;
use Emgag\VGWort\v1_13\Text;
use Emgag\VGWort\v1_13\Webrange;
use Emgag\VGWort\v1_13\Webranges;

/**
 * Request package to send to VG Wort Message API
 */
class MessageRequest
{
    const PARTIES = 0;
    const MESSAGE_TEXT = 1;
    const WEBRANGES = 2;

    /** @var newMessageRequest */
    protected $newMessageRequest;

    /**
     * MessageRequest constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $id          = $data['id'];
        $messageData = $this->verifyMessageData($data);

        if (empty($id) || empty($messageData)) {
            return;
        }

        $this->newMessageRequest = new newMessageRequest(
            $messageData[self::PARTIES],
            $messageData[self::MESSAGE_TEXT],
            $messageData[self::WEBRANGES],
            $id
        );
    }

    /**
     * @return newMessageRequest
     */
    public function get(): newMessageRequest
    {
        return $this->newMessageRequest;
    }

    /**
     * @param array $data
     * @return array
     */
    private function verifyMessageData(array $data): array
    {
        $messageData = [];

        // Parties
        if (!($authors = $data['authors']) || empty($authors)) {
            return [];
        }

        $involved = [];
        foreach ($authors as $author) {
            $involved[] = $this->createInvolved($author);
        }

        $authors = new Authors($involved);
        $messageData[self::PARTIES] = new Parties($authors);

        // Text
        if (!($text = $data['text']) || empty($text) || !($title = $data['title']) || empty($title)) {
            return [];
        }

        $text                            = new Text(null, base64_encode($text), null);
        $messageData[self::MESSAGE_TEXT] = new MessageText($title, $text, false);

        // Webranges
        if (!($urls = $data['urls']) || empty($urls)) {
            return [];
        }

        $webranges = [];

        foreach ($urls as $urlItem) {
            $webranges[] = new Webrange(is_array($urlItem) ? $urlItem : [$urlItem]);
        }

        $messageData[self::WEBRANGES] = new Webranges($webranges);

        return $messageData;
    }

    /**
     * @param array $data
     * @return Involved
     */
    private function createInvolved(array $data): Involved
    {
        $involved = new Involved($data['firstName'], $data['surName'], null);

        if(isset($data['cardNumber'])){
            $involved->setCardNumber($data['cardNumber']);
        }

        return $involved;
    }
}