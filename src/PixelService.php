<?php

namespace Emgag\VGWort;

use Emgag\VGWort\PixelService\pixelOverviewRequest as Request;
use Emgag\VGWort\PixelService\pixelOverviewType as Type;

/**
 * Service for using the VG Wort Pixel API
 */
class PixelService
{
    public const TYPE_MINDESTZUGRIFF = Type::MINDESTZUGRIFF;
    public const TYPE_ANTEILIGER_MINDESTZUGRIFF = Type::ANTEILIGER_MINDESTZUGRIFF;

    protected $pixelService;

    /**
     * PixelService constructor.
     *
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
        $this->pixelService = new \Emgag\VGWort\PixelService\PixelService([
            "authentication"     => SOAP_AUTHENTICATION_BASIC,
            "login"              => $username,
            "password"           => $password,
            "connection_timeout" => 60
        ]);
    }

    /**
     * Gets an overview (list) of pixels/ids.
     *
     * @param string $type
     * @return array|null
     * @throws \Exception
     */
    public function overview(string $type): array
    {
        if (!in_array($type, [Type::MINDESTZUGRIFF, Type::ANTEILIGER_MINDESTZUGRIFF])) {
            throw new \InvalidArgumentException("Invalid type");
        }

        $pixels = [];
        $offset = 0;

        while ($offset % 100 == 0) {
            $request  = new Request($offset, $type);
            $response = $this->pixelService->pixelOverview($request);

            if ($response->amount < 1 || !is_array($response->privateIdentificationId)) {
                break;
            }

            $pixels = array_merge($pixels, $response->privateIdentificationId);
            $offset += $response->amount;
        }

        return $pixels;
    }
}
