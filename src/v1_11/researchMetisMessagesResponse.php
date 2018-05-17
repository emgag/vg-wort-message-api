<?php

namespace VGWort\MessageService;

class researchMetisMessagesResponse
{

    /**
     * @var ResearchedMetisMessage $ResearchedMetisMessage
     * @access public
     */
    public $ResearchedMetisMessage = null;

    /**
     * @var int_0MAX $offset
     * @access public
     */
    public $offset = null;

    /**
     * @var int_0MAX $amount
     * @access public
     */
    public $amount = null;

    /**
     * @param ResearchedMetisMessage $ResearchedMetisMessage
     * @param int_0MAX $offset
     * @param int_0MAX $amount
     * @access public
     */
    public function __construct($ResearchedMetisMessage, $offset, $amount)
    {
      $this->ResearchedMetisMessage = $ResearchedMetisMessage;
      $this->offset = $offset;
      $this->amount = $amount;
    }

}
