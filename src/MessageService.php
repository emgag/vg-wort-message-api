<?php

namespace Emgag\VGWort;

use SoapFault;
use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

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
     * @param string $version
     */
    public function __construct($username, $password, $version = '1.11')
    {
        $generator = new Generator();
        $generator->generate(
            new Config([
                'inputFile'         => 'https://tom.vgwort.de/services/' . $version . '/messageService.wsdl',
                'outputDir'         => '/tmp',
                'soapClientOptions' => [
                    'authentication'     => SOAP_AUTHENTICATION_BASIC,
                    'login'              => $username,
                    'password'           => $password,
                    'connection_timeout' => 60
                ]
            ])
        );

        require '/tmp/autoload.php';

        $this->messageService = new \MessageService();
    }

    /**
     * Builds a new message request and tries to send it.
     *
     * @param string $id
     * @param array  $authors
     * @param string $title
     * @param string $text
     * @param string $url
     * @return MessageResponse|null
     */
    public function newMessage($id, array $authors, $title, $text, $url)
    {
        if (empty($id) || count($authors) < 1 || empty($title) || empty($text) || empty($url)) {
            return null;
        }
        
        $messageRequest = new MessageRequest([
            "id"      => $id,
            "authors" => $authors,
            "title"   => $title,
            "text"    => $text,
            "url"     => $url
        ]);

        $messageResponse = new MessageResponse();

        try {
            $response = $this->messageService->newMessage($messageRequest->get());
            $messageResponse->success($response);
        } catch (SoapFault $exception) {
            $messageResponse->error($exception->detail);
        }

        return $messageResponse;
    }
}