<?php

namespace VGWort\MessageService;

class qualityControlResponse
{

    /**
     * @var QualityControlValues $qualityControlValues
     * @access public
     */
    public $qualityControlValues = null;

    /**
     * @var int_0MAX $orderedPixelTillToday
     * @access public
     */
    public $orderedPixelTillToday = null;

    /**
     * @var int_0MAX $startedPixelTillToday
     * @access public
     */
    public $startedPixelTillToday = null;

    /**
     * @param QualityControlValues $qualityControlValues
     * @param int_0MAX $orderedPixelTillToday
     * @param int_0MAX $startedPixelTillToday
     * @access public
     */
    public function __construct($qualityControlValues, $orderedPixelTillToday, $startedPixelTillToday)
    {
      $this->qualityControlValues = $qualityControlValues;
      $this->orderedPixelTillToday = $orderedPixelTillToday;
      $this->startedPixelTillToday = $startedPixelTillToday;
    }

}
