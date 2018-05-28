<?php

namespace Emgag\VGWort\v1_11;

class QualityControlValues
{

    /**
     * @var int_112 $month
     * @access public
     */
    public $month = null;

    /**
     * @var int_10009999 $year
     * @access public
     */
    public $year = null;

    /**
     * @var int_0MAX $orderedPixel
     * @access public
     */
    public $orderedPixel = null;

    /**
     * @var int_0MAX $startedPixel
     * @access public
     */
    public $startedPixel = null;

    /**
     * @var int_0MAX $minAccess
     * @access public
     */
    public $minAccess = null;

    /**
     * @var int_0MAX $minAccessNoMessage
     * @access public
     */
    public $minAccessNoMessage = null;

    /**
     * @param int_112 $month
     * @param int_10009999 $year
     * @param int_0MAX $orderedPixel
     * @param int_0MAX $startedPixel
     * @param int_0MAX $minAccess
     * @param int_0MAX $minAccessNoMessage
     * @access public
     */
    public function __construct($month, $year, $orderedPixel, $startedPixel, $minAccess, $minAccessNoMessage)
    {
      $this->month = $month;
      $this->year = $year;
      $this->orderedPixel = $orderedPixel;
      $this->startedPixel = $startedPixel;
      $this->minAccess = $minAccess;
      $this->minAccessNoMessage = $minAccessNoMessage;
    }

}
