# vg-wort-message-api

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/emgag/vg-wort-message-api.svg?style=flat-square)](https://packagist.org/packages/emgag/vg-wort-message-api)

A plugin to simplify the creation and submission of VG Wort METIS messages. Works with the official T.O.M. WebServices.

## Installation

```bash
composer require emgag/vg-wort-message-api
```

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
    $text, // Text of this message (plain text)
    $urls // URLs of this message
);
```
## URLs
It's possible to provide multiple URLs (or Webranges). The URLs ``$urls`` could be in one of these formats:
- As an simple array.
```PHP
$urls = [
    "http://example.com/path/to/file.html"
];
```
- As an multi-dimensional array. The keys will be ignored.
```PHP
$urls = [
    "page-1" => [
        "http://example-1.com/path/to/file.html"
    ],
    "page-2" => [
        "http://example-2.com/path/to/file.html"
    ]
];
```

## License

vg-wort-message-api is licensed under the [MIT License](http://opensource.org/licenses/MIT).