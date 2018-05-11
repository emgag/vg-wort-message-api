<?php

namespace Emgag\VGWort;

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
     * @param $data
     */
    public function __construct($data)
    {
        $id          = $data['id'];
        $messageData = $this->verifyMessageData($data);

        if (empty($id) || empty($messageData)) {
            return;
        }

        $this->newMessageRequest = new \newMessageRequest(
            $messageData[self::PARTIES],
            $messageData[self::MESSAGE_TEXT],
            $messageData[self::WEBRANGES],
            $id
        );
    }

    /**
     * @return \newMessageRequest
     */
    public function get()
    {
        return $this->newMessageRequest;
    }

    /**
     * @param $data
     * @return array
     */
    private function verifyMessageData($data)
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

        $authors = new \Authors($authorCollection);
        $messageData[self::PARTIES] = new \Parties($authors);

        // Text
        if (!($text = $data['text']) || empty($text) || !($title = $data['title']) || empty($title)) {
            return [];
        }

        $text                            = new \Text(null, base64_encode($text), null);
        $messageData[self::MESSAGE_TEXT] = new \MessageText($title, $text, false);

        // Webranges
        if (!($url = $data['url']) || empty($url)) {
            return [];
        }

        $webrange = new \Webrange([$url]);
        $messageData[self::WEBRANGES] = new \Webranges([$webrange]);

        return $messageData;
    }

    /**
     * @param array $data
     * @return \Involved
     */
    private function createInvolved(array $data)
    {
        $involved = new \Involved($data['firstName'], $data['surName'], null);
        $involved->setCardNumber($data['cardNumber']);

        return $involved;
    }
}