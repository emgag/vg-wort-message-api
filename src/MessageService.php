<?php

namespace Emgag\VGWort;

/**
 * Service for using the VG Wort Message API
 */
class MessageService
{
    protected $messageService;

    /**
     * MessageService constructor.
     *
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
        $this->messageService = new \Emgag\VGWort\MessageService\MessageService([
            "authentication"     => SOAP_AUTHENTICATION_BASIC,
            "login"              => $username,
            "password"           => $password,
            "connection_timeout" => 60
        ]);
    }

    /**
     * Builds a new message request and tries to send it.
     *
     * @param string $id
     * @param array  $authors
     * @param string $title
     * @param string $text
     * @param array  $urls
     * @return MessageResponse|null
     */
    public function newMessage(string $id, array $authors, string $title, string $text, array $urls): ?MessageResponse
    {
        if (empty($id) || count($authors) < 1 || empty($title) || empty($text) || count($urls) < 1) {
            return null;
        }

        $messageRequest = new MessageRequest([
            "id"      => $id,
            "authors" => $authors,
            "title"   => $title,
            "text"    => $text,
            "urls"    => $urls
        ]);

        $messageResponse = new MessageResponse();

        try {
            $response = $this->messageService->newMessage($messageRequest->get());
            $messageResponse->success($response);
        } catch (\Exception $exception) {
            $messageResponse->error($exception->getMessage());
        }

        return $messageResponse;
    }
}