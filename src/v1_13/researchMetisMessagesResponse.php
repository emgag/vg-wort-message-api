<?php

namespace Emgag\VGWort\v1_13;

class researchMetisMessagesResponse
{

    /**
     * @var ResearchedMetisMessage $ResearchedMetisMessage
     */
    protected $ResearchedMetisMessage = null;

    /**
     * @var int_0MAX $offset
     */
    protected $offset = null;

    /**
     * @var int_0MAX $amount
     */
    protected $amount = null;

    /**
     * @param ResearchedMetisMessage $ResearchedMetisMessage
     * @param int_0MAX $offset
     * @param int_0MAX $amount
     */
    public function __construct($ResearchedMetisMessage, $offset, $amount)
    {
      $this->ResearchedMetisMessage = $ResearchedMetisMessage;
      $this->offset = $offset;
      $this->amount = $amount;
    }

    /**
     * @return ResearchedMetisMessage
     */
    public function getResearchedMetisMessage()
    {
      return $this->ResearchedMetisMessage;
    }

    /**
     * @param ResearchedMetisMessage $ResearchedMetisMessage
     * @return \Emgag\VGWort\v1_13\researchMetisMessagesResponse
     */
    public function setResearchedMetisMessage($ResearchedMetisMessage)
    {
      $this->ResearchedMetisMessage = $ResearchedMetisMessage;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int_0MAX $offset
     * @return \Emgag\VGWort\v1_13\researchMetisMessagesResponse
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param int_0MAX $amount
     * @return \Emgag\VGWort\v1_13\researchMetisMessagesResponse
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
