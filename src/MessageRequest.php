<?php

namespace Emgag\VGWort;

use Emgag\VGWort\v1_11\Authors;
use Emgag\VGWort\v1_11\Involved;
use Emgag\VGWort\v1_11\MessageText;
use Emgag\VGWort\v1_11\newMessageRequest;
use Emgag\VGWort\v1_11\Parties;
use Emgag\VGWort\v1_11\Text;
use Emgag\VGWort\v1_11\Webrange;
use Emgag\VGWort\v1_11\Webranges;

/**
 * Request package to send to VG Wort Message API
 */
class MessageRequest
{
    const PARTIES = 0;
    const MESSAGE_TEXT = 1;
    const WEBRANGES = 2;

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

        $authorCollection = [];
        foreach ($authors as $author) {
            $authorCollection[] = $this->createInvolved($author);
        }

        $authors = new Authors($authorCollection, null);
        $messageData[self::PARTIES] = new Parties($authors, null);

        // Text
        if (!($text = $data['text']) || empty($text) || !($title = $data['title']) || empty($title)) {
            return [];
        }

        $text                            = new Text(null, base64_encode($text), null);
        $messageData[self::MESSAGE_TEXT] = new MessageText($title, $text, false);

        // Webranges
        if (!($url = $data['url']) || empty($url)) {
            return [];
        }

        $webrange = new Webrange([$url]);
        $messageData[self::WEBRANGES] = new Webranges([$webrange]);

        return $messageData;
    }

    /**
     * @param array $data
     * @return Involved
     */
    private function createInvolved(array $data): Involved
    {
        $involved = new Involved($data['firstName'], $data['surName'], $data['cardNumber'], null);

        return $involved;
    }
}