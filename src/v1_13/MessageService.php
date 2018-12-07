<?php

namespace Emgag\VGWort\v1_13;

class MessageService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'newMessageRequest' => 'Emgag\\VGWort\\v1_13\\newMessageRequest',
      'newMessageResponse' => 'Emgag\\VGWort\\v1_13\\newMessageResponse',
      'newMessageFault' => 'Emgag\\VGWort\\v1_13\\newMessageFault',
      'addWebrangeRequest' => 'Emgag\\VGWort\\v1_13\\addWebrangeRequest',
      'addWebrangeResponse' => 'Emgag\\VGWort\\v1_13\\addWebrangeResponse',
      'addWebrangeFault' => 'Emgag\\VGWort\\v1_13\\addWebrangeFault',
      'qualityControlRequest' => 'Emgag\\VGWort\\v1_13\\qualityControlRequest',
      'qualityControlResponse' => 'Emgag\\VGWort\\v1_13\\qualityControlResponse',
      'qualityControlFault' => 'Emgag\\VGWort\\v1_13\\qualityControlFault',
      'checkAuthorRequest' => 'Emgag\\VGWort\\v1_13\\checkAuthorRequest',
      'checkAuthorResponse' => 'Emgag\\VGWort\\v1_13\\checkAuthorResponse',
      'checkAuthorFault' => 'Emgag\\VGWort\\v1_13\\checkAuthorFault',
      'researchMetisMessagesRequest' => 'Emgag\\VGWort\\v1_13\\researchMetisMessagesRequest',
      'researchMetisMessagesResponse' => 'Emgag\\VGWort\\v1_13\\researchMetisMessagesResponse',
      'researchMetisMessagesFault' => 'Emgag\\VGWort\\v1_13\\researchMetisMessagesFault',
      'getPixelsWithoutInvolvedMessageRequest' => 'Emgag\\VGWort\\v1_13\\getPixelsWithoutInvolvedMessageRequest',
      'getPixelsWithoutInvolvedMessageResponse' => 'Emgag\\VGWort\\v1_13\\getPixelsWithoutInvolvedMessageResponse',
      'getPixelsWithoutInvolvedMessageFault' => 'Emgag\\VGWort\\v1_13\\getPixelsWithoutInvolvedMessageFault',
      'ResearchedMetisMessage' => 'Emgag\\VGWort\\v1_13\\ResearchedMetisMessage',
      'MessageText' => 'Emgag\\VGWort\\v1_13\\MessageText',
      'QualityControlValues' => 'Emgag\\VGWort\\v1_13\\QualityControlValues',
      'Text' => 'Emgag\\VGWort\\v1_13\\Text',
      'Parties' => 'Emgag\\VGWort\\v1_13\\Parties',
      'Authors' => 'Emgag\\VGWort\\v1_13\\Authors',
      'Translators' => 'Emgag\\VGWort\\v1_13\\Translators',
      'Involved' => 'Emgag\\VGWort\\v1_13\\Involved',
      'InvolvedWithoutContract' => 'Emgag\\VGWort\\v1_13\\InvolvedWithoutContract',
      'Webranges' => 'Emgag\\VGWort\\v1_13\\Webranges',
      'Webrange' => 'Emgag\\VGWort\\v1_13\\Webrange',
      'tomFault' => 'Emgag\\VGWort\\v1_13\\tomFault',
      'okMessage' => 'Emgag\\VGWort\\v1_13\\okMessage',
      'PixelWithoutInvolvedMessage' => 'Emgag\\VGWort\\v1_13\\PixelWithoutInvolvedMessage',
      'Participant' => 'Emgag\\VGWort\\v1_13\\Participant',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://tom.vgwort.de/services/1.13/messageService.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param qualityControlRequest $qualityControlRequest
     * @return qualityControlResponse
     */
    public function qualityControl(qualityControlRequest $qualityControlRequest)
    {
      return $this->__soapCall('qualityControl', array($qualityControlRequest));
    }

    /**
     * @param researchMetisMessagesRequest $researchMetisMessagesRequest
     * @return researchMetisMessagesResponse
     */
    public function researchMetisMessages(researchMetisMessagesRequest $researchMetisMessagesRequest)
    {
      return $this->__soapCall('researchMetisMessages', array($researchMetisMessagesRequest));
    }

    /**
     * @param newMessageRequest $newMessageRequest
     * @return newMessageResponse
     */
    public function newMessage(newMessageRequest $newMessageRequest)
    {
      return $this->__soapCall('newMessage', array($newMessageRequest));
    }

    /**
     * @param getPixelsWithoutInvolvedMessageRequest $getPixelsWithoutInvolvedMessageRequest
     * @return getPixelsWithoutInvolvedMessageResponse
     */
    public function getPixelsWithoutInvolvedMessage(getPixelsWithoutInvolvedMessageRequest $getPixelsWithoutInvolvedMessageRequest)
    {
      return $this->__soapCall('getPixelsWithoutInvolvedMessage', array($getPixelsWithoutInvolvedMessageRequest));
    }

    /**
     * @param addWebrangeRequest $addWebrangeRequest
     * @return addWebrangeResponse
     */
    public function addWebrange(addWebrangeRequest $addWebrangeRequest)
    {
      return $this->__soapCall('addWebrange', array($addWebrangeRequest));
    }

    /**
     * @param checkAuthorRequest $checkAuthorRequest
     * @return checkAuthorResponse
     */
    public function checkAuthor(checkAuthorRequest $checkAuthorRequest)
    {
      return $this->__soapCall('checkAuthor', array($checkAuthorRequest));
    }

}
