<?php

namespace Emgag\VGWort\v1_13;

class qualityControlResponse
{

    /**
     * @var QualityControlValues $qualityControlValues
     */
    protected $qualityControlValues = null;

    /**
     * @var int_0MAX $orderedPixelTillToday
     */
    protected $orderedPixelTillToday = null;

    /**
     * @var int_0MAX $startedPixelTillToday
     */
    protected $startedPixelTillToday = null;

    /**
     * @var int_0MAX $startedPixelTillTodayFree
     */
    protected $startedPixelTillTodayFree = null;

    /**
     * @var int_0MAX $startedPixelTillTodayPaid
     */
    protected $startedPixelTillTodayPaid = null;

    /**
     * @param QualityControlValues $qualityControlValues
     * @param int_0MAX $orderedPixelTillToday
     * @param int_0MAX $startedPixelTillToday
     * @param int_0MAX $startedPixelTillTodayFree
     * @param int_0MAX $startedPixelTillTodayPaid
     */
    public function __construct($qualityControlValues, $orderedPixelTillToday, $startedPixelTillToday, $startedPixelTillTodayFree, $startedPixelTillTodayPaid)
    {
      $this->qualityControlValues = $qualityControlValues;
      $this->orderedPixelTillToday = $orderedPixelTillToday;
      $this->startedPixelTillToday = $startedPixelTillToday;
      $this->startedPixelTillTodayFree = $startedPixelTillTodayFree;
      $this->startedPixelTillTodayPaid = $startedPixelTillTodayPaid;
    }

    /**
     * @return QualityControlValues
     */
    public function getQualityControlValues()
    {
      return $this->qualityControlValues;
    }

    /**
     * @param QualityControlValues $qualityControlValues
     * @return \Emgag\VGWort\v1_13\qualityControlResponse
     */
    public function setQualityControlValues($qualityControlValues)
    {
      $this->qualityControlValues = $qualityControlValues;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getOrderedPixelTillToday()
    {
      return $this->orderedPixelTillToday;
    }

    /**
     * @param int_0MAX $orderedPixelTillToday
     * @return \Emgag\VGWort\v1_13\qualityControlResponse
     */
    public function setOrderedPixelTillToday($orderedPixelTillToday)
    {
      $this->orderedPixelTillToday = $orderedPixelTillToday;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getStartedPixelTillToday()
    {
      return $this->startedPixelTillToday;
    }

    /**
     * @param int_0MAX $startedPixelTillToday
     * @return \Emgag\VGWort\v1_13\qualityControlResponse
     */
    public function setStartedPixelTillToday($startedPixelTillToday)
    {
      $this->startedPixelTillToday = $startedPixelTillToday;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getStartedPixelTillTodayFree()
    {
      return $this->startedPixelTillTodayFree;
    }

    /**
     * @param int_0MAX $startedPixelTillTodayFree
     * @return \Emgag\VGWort\v1_13\qualityControlResponse
     */
    public function setStartedPixelTillTodayFree($startedPixelTillTodayFree)
    {
      $this->startedPixelTillTodayFree = $startedPixelTillTodayFree;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getStartedPixelTillTodayPaid()
    {
      return $this->startedPixelTillTodayPaid;
    }

    /**
     * @param int_0MAX $startedPixelTillTodayPaid
     * @return \Emgag\VGWort\v1_13\qualityControlResponse
     */
    public function setStartedPixelTillTodayPaid($startedPixelTillTodayPaid)
    {
      $this->startedPixelTillTodayPaid = $startedPixelTillTodayPaid;
      return $this;
    }

}
