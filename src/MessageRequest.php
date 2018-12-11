<?php

namespace Emgag\VGWort;

use Emgag\VGWort\MessageService\Authors;
use Emgag\VGWort\MessageService\Involved;
use Emgag\VGWort\MessageService\MessageText;
use Emgag\VGWort\MessageService\newMessageRequest;
use Emgag\VGWort\MessageService\Parties;
use Emgag\VGWort\MessageService\Text;
use Emgag\VGWort\MessageService\Webrange;
use Emgag\VGWort\MessageService\Webranges;

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

        $text                            = new Text(null, $text, null);
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