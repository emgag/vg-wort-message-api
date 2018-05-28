<?php

namespace Emgag\VGWort\v1_11;

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
      'newMessageRequest' => 'Emgag\VGWort\v1_11\newMessageRequest',
      'newMessageResponse' => 'Emgag\VGWort\v1_11\newMessageResponse',
      'newMessageFault' => 'Emgag\VGWort\v1_11\newMessageFault',
      'addWebrangeRequest' => 'Emgag\VGWort\v1_11\addWebrangeRequest',
      'addWebrangeResponse' => 'Emgag\VGWort\v1_11\addWebrangeResponse',
      'addWebrangeFault' => 'Emgag\VGWort\v1_11\addWebrangeFault',
      'qualityControlRequest' => 'Emgag\VGWort\v1_11\qualityControlRequest',
      'qualityControlResponse' => 'Emgag\VGWort\v1_11\qualityControlResponse',
      'qualityControlFault' => 'Emgag\VGWort\v1_11\qualityControlFault',
      'checkAuthorRequest' => 'Emgag\VGWort\v1_11\checkAuthorRequest',
      'checkAuthorResponse' => 'Emgag\VGWort\v1_11\checkAuthorResponse',
      'checkAuthorFault' => 'Emgag\VGWort\v1_11\checkAuthorFault',
      'researchMetisMessagesRequest' => 'Emgag\VGWort\v1_11\researchMetisMessagesRequest',
      'researchMetisMessagesResponse' => 'Emgag\VGWort\v1_11\researchMetisMessagesResponse',
      'researchMetisMessagesFault' => 'Emgag\VGWort\v1_11\researchMetisMessagesFault',
      'getPixelsWithoutInvolvedMessageRequest' => 'Emgag\VGWort\v1_11\getPixelsWithoutInvolvedMessageRequest',
      'getPixelsWithoutInvolvedMessageResponse' => 'Emgag\VGWort\v1_11\getPixelsWithoutInvolvedMessageResponse',
      'getPixelsWithoutInvolvedMessageFault' => 'Emgag\VGWort\v1_11\getPixelsWithoutInvolvedMessageFault',
      'ResearchedMetisMessage' => 'Emgag\VGWort\v1_11\ResearchedMetisMessage',
      'MessageText' => 'Emgag\VGWort\v1_11\MessageText',
      'QualityControlValues' => 'Emgag\VGWort\v1_11\QualityControlValues',
      'Text' => 'Emgag\VGWort\v1_11\Text',
      'Parties' => 'Emgag\VGWort\v1_11\Parties',
      'Authors' => 'Emgag\VGWort\v1_11\Authors',
      'Translators' => 'Emgag\VGWort\v1_11\Translators',
      'Involved' => 'Emgag\VGWort\v1_11\Involved',
      'InvolvedWithoutContract' => 'Emgag\VGWort\v1_11\InvolvedWithoutContract',
      'Webranges' => 'Emgag\VGWort\v1_11\Webranges',
      'Webrange' => 'Emgag\VGWort\v1_11\Webrange',
      'tomFault' => 'Emgag\VGWort\v1_11\tomFault',
      'okMessage' => 'Emgag\VGWort\v1_11\okMessage',
      'PixelWithoutInvolvedMessage' => 'Emgag\VGWort\v1_11\PixelWithoutInvolvedMessage',
      'Participant' => 'Emgag\VGWort\v1_11\Participant');

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
