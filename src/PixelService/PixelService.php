<?php

namespace Emgag\VGWort\PixelService;

class PixelService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'orderPixelRequest' => 'Emgag\VGWort\PixelService\orderPixelRequest',
      'orderPixelResponse' => 'Emgag\VGWort\PixelService\orderPixelResponse',
      'orderPixelFault' => 'Emgag\VGWort\PixelService\orderPixelFault',
      'pixelOverviewRequest' => 'Emgag\VGWort\PixelService\pixelOverviewRequest',
      'pixelOverviewResponse' => 'Emgag\VGWort\PixelService\pixelOverviewResponse',
      'pixelOverviewFault' => 'Emgag\VGWort\PixelService\pixelOverviewFault',
      'Pixels' => 'Emgag\VGWort\PixelService\Pixels',
      'Pixel' => 'Emgag\VGWort\PixelService\Pixel',
      'tomFault' => 'Emgag\VGWort\PixelService\tomFault');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://tom.vgwort.de/services/1.0/pixelService.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * @param orderPixelRequest $orderPixelRequest
     * @access public
     * @return orderPixelResponse
     */
    public function orderPixel(orderPixelRequest $orderPixelRequest)
    {
      return $this->__soapCall('orderPixel', array($orderPixelRequest));
    }

    /**
     * @param pixelOverviewRequest $pixelOverviewRequest
     * @access public
     * @return pixelOverviewResponse
     */
    public function pixelOverview(pixelOverviewRequest $pixelOverviewRequest)
    {
      return $this->__soapCall('pixelOverview', array($pixelOverviewRequest));
    }

}
