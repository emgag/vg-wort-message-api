<?php

namespace VGWort\MessageService;

include_once('newMessageRequest.php');
include_once('newMessageResponse.php');
include_once('newMessageFault.php');
include_once('addWebrangeRequest.php');
include_once('addWebrangeResponse.php');
include_once('addWebrangeFault.php');
include_once('qualityControlRequest.php');
include_once('qualityControlResponse.php');
include_once('qualityControlFault.php');
include_once('checkAuthorRequest.php');
include_once('checkAuthorResponse.php');
include_once('checkAuthorFault.php');
include_once('researchMetisMessagesRequest.php');
include_once('researchMetisMessagesResponse.php');
include_once('researchMetisMessagesFault.php');
include_once('getPixelsWithoutInvolvedMessageRequest.php');
include_once('getPixelsWithoutInvolvedMessageResponse.php');
include_once('getPixelsWithoutInvolvedMessageFault.php');
include_once('ResearchedMetisMessage.php');
include_once('MessageText.php');
include_once('QualityControlValues.php');
include_once('Text.php');
include_once('Parties.php');
include_once('Authors.php');
include_once('Translators.php');
include_once('Involved.php');
include_once('InvolvedWithoutContract.php');
include_once('Webranges.php');
include_once('Webrange.php');
include_once('tomFault.php');
include_once('okMessage.php');
include_once('PixelWithoutInvolvedMessage.php');
include_once('Participant.php');
include_once('okType.php');

class MessageService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'newMessageRequest' => 'VGWort\MessageService\newMessageRequest',
      'newMessageResponse' => 'VGWort\MessageService\newMessageResponse',
      'newMessageFault' => 'VGWort\MessageService\newMessageFault',
      'addWebrangeRequest' => 'VGWort\MessageService\addWebrangeRequest',
      'addWebrangeResponse' => 'VGWort\MessageService\addWebrangeResponse',
      'addWebrangeFault' => 'VGWort\MessageService\addWebrangeFault',
      'qualityControlRequest' => 'VGWort\MessageService\qualityControlRequest',
      'qualityControlResponse' => 'VGWort\MessageService\qualityControlResponse',
      'qualityControlFault' => 'VGWort\MessageService\qualityControlFault',
      'checkAuthorRequest' => 'VGWort\MessageService\checkAuthorRequest',
      'checkAuthorResponse' => 'VGWort\MessageService\checkAuthorResponse',
      'checkAuthorFault' => 'VGWort\MessageService\checkAuthorFault',
      'researchMetisMessagesRequest' => 'VGWort\MessageService\researchMetisMessagesRequest',
      'researchMetisMessagesResponse' => 'VGWort\MessageService\researchMetisMessagesResponse',
      'researchMetisMessagesFault' => 'VGWort\MessageService\researchMetisMessagesFault',
      'getPixelsWithoutInvolvedMessageRequest' => 'VGWort\MessageService\getPixelsWithoutInvolvedMessageRequest',
      'getPixelsWithoutInvolvedMessageResponse' => 'VGWort\MessageService\getPixelsWithoutInvolvedMessageResponse',
      'getPixelsWithoutInvolvedMessageFault' => 'VGWort\MessageService\getPixelsWithoutInvolvedMessageFault',
      'ResearchedMetisMessage' => 'VGWort\MessageService\ResearchedMetisMessage',
      'MessageText' => 'VGWort\MessageService\MessageText',
      'QualityControlValues' => 'VGWort\MessageService\QualityControlValues',
      'Text' => 'VGWort\MessageService\Text',
      'Parties' => 'VGWort\MessageService\Parties',
      'Authors' => 'VGWort\MessageService\Authors',
      'Translators' => 'VGWort\MessageService\Translators',
      'Involved' => 'VGWort\MessageService\Involved',
      'InvolvedWithoutContract' => 'VGWort\MessageService\InvolvedWithoutContract',
      'Webranges' => 'VGWort\MessageService\Webranges',
      'Webrange' => 'VGWort\MessageService\Webrange',
      'tomFault' => 'VGWort\MessageService\tomFault',
      'okMessage' => 'VGWort\MessageService\okMessage',
      'PixelWithoutInvolvedMessage' => 'VGWort\MessageService\PixelWithoutInvolvedMessage',
      'Participant' => 'VGWort\MessageService\Participant');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://tom.vgwort.de/services/1.11/messageService.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * @param qualityControlRequest $qualityControlRequest
     * @access public
     * @return qualityControlResponse
     */
    public function qualityControl(qualityControlRequest $qualityControlRequest)
    {
      return $this->__soapCall('qualityControl', array($qualityControlRequest));
    }

    /**
     * @param newMessageRequest $newMessageRequest
     * @access public
     * @return newMessageResponse
     */
    public function newMessage(newMessageRequest $newMessageRequest)
    {
      return $this->__soapCall('newMessage', array($newMessageRequest));
    }

    /**
     * @param getPixelsWithoutInvolvedMessageRequest $getPixelsWithoutInvolvedMessageRequest
     * @access public
     * @return getPixelsWithoutInvolvedMessageResponse
     */
    public function getPixelsWithoutInvolvedMessage(getPixelsWithoutInvolvedMessageRequest $getPixelsWithoutInvolvedMessageRequest)
    {
      return $this->__soapCall('getPixelsWithoutInvolvedMessage', array($getPixelsWithoutInvolvedMessageRequest));
    }

    /**
     * @param researchMetisMessagesRequest $researchMetisMessagesRequest
     * @access public
     * @return researchMetisMessagesResponse
     */
    public function researchMetisMessages(researchMetisMessagesRequest $researchMetisMessagesRequest)
    {
      return $this->__soapCall('researchMetisMessages', array($researchMetisMessagesRequest));
    }

    /**
     * @param addWebrangeRequest $addWebrangeRequest
     * @access public
     * @return addWebrangeResponse
     */
    public function addWebrange(addWebrangeRequest $addWebrangeRequest)
    {
      return $this->__soapCall('addWebrange', array($addWebrangeRequest));
    }

    /**
     * @param checkAuthorRequest $checkAuthorRequest
     * @access public
     * @return checkAuthorResponse
     */
    public function checkAuthor(checkAuthorRequest $checkAuthorRequest)
    {
      return $this->__soapCall('checkAuthor', array($checkAuthorRequest));
    }

}
