<?php

namespace Emgag\VGWort\MessageService;

class MessageService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'newMessageRequest' => 'Emgag\\VGWort\\MessageService\\newMessageRequest',
      'newMessageResponse' => 'Emgag\\VGWort\\MessageService\\newMessageResponse',
      'newMessageFault' => 'Emgag\\VGWort\\MessageService\\newMessageFault',
      'addWebrangeRequest' => 'Emgag\\VGWort\\MessageService\\addWebrangeRequest',
      'addWebrangeResponse' => 'Emgag\\VGWort\\MessageService\\addWebrangeResponse',
      'addWebrangeFault' => 'Emgag\\VGWort\\MessageService\\addWebrangeFault',
      'qualityControlRequest' => 'Emgag\\VGWort\\MessageService\\qualityControlRequest',
      'qualityControlResponse' => 'Emgag\\VGWort\\MessageService\\qualityControlResponse',
      'qualityControlFault' => 'Emgag\\VGWort\\MessageService\\qualityControlFault',
      'checkAuthorRequest' => 'Emgag\\VGWort\\MessageService\\checkAuthorRequest',
      'checkAuthorResponse' => 'Emgag\\VGWort\\MessageService\\checkAuthorResponse',
      'checkAuthorFault' => 'Emgag\\VGWort\\MessageService\\checkAuthorFault',
      'researchMetisMessagesRequest' => 'Emgag\\VGWort\\MessageService\\researchMetisMessagesRequest',
      'researchMetisMessagesResponse' => 'Emgag\\VGWort\\MessageService\\researchMetisMessagesResponse',
      'researchMetisMessagesFault' => 'Emgag\\VGWort\\MessageService\\researchMetisMessagesFault',
      'getPixelsWithoutInvolvedMessageRequest' => 'Emgag\\VGWort\\MessageService\\getPixelsWithoutInvolvedMessageRequest',
      'getPixelsWithoutInvolvedMessageResponse' => 'Emgag\\VGWort\\MessageService\\getPixelsWithoutInvolvedMessageResponse',
      'getPixelsWithoutInvolvedMessageFault' => 'Emgag\\VGWort\\MessageService\\getPixelsWithoutInvolvedMessageFault',
      'ResearchedMetisMessage' => 'Emgag\\VGWort\\MessageService\\ResearchedMetisMessage',
      'MessageText' => 'Emgag\\VGWort\\MessageService\\MessageText',
      'QualityControlValues' => 'Emgag\\VGWort\\MessageService\\QualityControlValues',
      'Text' => 'Emgag\\VGWort\\MessageService\\Text',
      'Parties' => 'Emgag\\VGWort\\MessageService\\Parties',
      'Authors' => 'Emgag\\VGWort\\MessageService\\Authors',
      'Translators' => 'Emgag\\VGWort\\MessageService\\Translators',
      'Involved' => 'Emgag\\VGWort\\MessageService\\Involved',
      'InvolvedWithoutContract' => 'Emgag\\VGWort\\MessageService\\InvolvedWithoutContract',
      'Webranges' => 'Emgag\\VGWort\\MessageService\\Webranges',
      'Webrange' => 'Emgag\\VGWort\\MessageService\\Webrange',
      'tomFault' => 'Emgag\\VGWort\\MessageService\\tomFault',
      'okMessage' => 'Emgag\\VGWort\\MessageService\\okMessage',
      'PixelWithoutInvolvedMessage' => 'Emgag\\VGWort\\MessageService\\PixelWithoutInvolvedMessage',
      'Participant' => 'Emgag\\VGWort\\MessageService\\Participant',
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
