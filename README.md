# vg-wort-message-api

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

## Usage

```PHP
use Emgag\VGWort\MessageService;

$messageService = new MessageService($username, $password);

$response = $messageService->newMessage(
    $id, // Private Identification Id
    [
        // Multiple Authors possible
        ["firstName" => "", "surName" => "", "cardNumber" => ""]
    ],
    $title, // Title of this message
    $test, // Text of this message (plain text)
    $url // URL of this message
);
```

## License

vg-wort-message-api is licensed under the [MIT License](http://opensource.org/licenses/MIT).