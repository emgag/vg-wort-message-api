<?php

namespace Emgag\VGWort\MessageService;

class QualityControlValues
{

    /**
     * @var int_112 $month
     */
    protected $month = null;

    /**
     * @var int_10009999 $year
     */
    protected $year = null;

    /**
     * @var int_0MAX $orderedPixel
     */
    protected $orderedPixel = null;

    /**
     * @var int_0MAX $startedPixel
     */
    protected $startedPixel = null;

    /**
     * @var int_0MAX $startedPixelFree
     */
    protected $startedPixelFree = null;

    /**
     * @var int_0MAX $startedPixelPaid
     */
    protected $startedPixelPaid = null;

    /**
     * @var int_0MAX $minAccess
     */
    protected $minAccess = null;

    /**
     * @var int_0MAX $minAccessFree
     */
    protected $minAccessFree = null;

    /**
     * @var int_0MAX $minAccessPaid
     */
    protected $minAccessPaid = null;

    /**
     * @var int_0MAX $minAccessNoMessage
     */
    protected $minAccessNoMessage = null;

    /**
     * @var int_0MAX $minAccessNoMessageFree
     */
    protected $minAccessNoMessageFree = null;

    /**
     * @var int_0MAX $minAccessNoMessagePaid
     */
    protected $minAccessNoMessagePaid = null;

    /**
     * @param int_112 $month
     * @param int_10009999 $year
     * @param int_0MAX $orderedPixel
     * @param int_0MAX $startedPixel
     * @param int_0MAX $startedPixelFree
     * @param int_0MAX $startedPixelPaid
     * @param int_0MAX $minAccess
     * @param int_0MAX $minAccessFree
     * @param int_0MAX $minAccessPaid
     * @param int_0MAX $minAccessNoMessage
     * @param int_0MAX $minAccessNoMessageFree
     * @param int_0MAX $minAccessNoMessagePaid
     */
    public function __construct($month, $year, $orderedPixel, $startedPixel, $startedPixelFree, $startedPixelPaid, $minAccess, $minAccessFree, $minAccessPaid, $minAccessNoMessage, $minAccessNoMessageFree, $minAccessNoMessagePaid)
    {
      $this->month = $month;
      $this->year = $year;
      $this->orderedPixel = $orderedPixel;
      $this->startedPixel = $startedPixel;
      $this->startedPixelFree = $startedPixelFree;
      $this->startedPixelPaid = $startedPixelPaid;
      $this->minAccess = $minAccess;
      $this->minAccessFree = $minAccessFree;
      $this->minAccessPaid = $minAccessPaid;
      $this->minAccessNoMessage = $minAccessNoMessage;
      $this->minAccessNoMessageFree = $minAccessNoMessageFree;
      $this->minAccessNoMessagePaid = $minAccessNoMessagePaid;
    }

    /**
     * @return int_112
     */
    public function getMonth()
    {
      return $this->month;
    }

    /**
     * @param int_112 $month
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setMonth($month)
    {
      $this->month = $month;
      return $this;
    }

    /**
     * @return int_10009999
     */
    public function getYear()
    {
      return $this->year;
    }

    /**
     * @param int_10009999 $year
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setYear($year)
    {
      $this->year = $year;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getOrderedPixel()
    {
      return $this->orderedPixel;
    }

    /**
     * @param int_0MAX $orderedPixel
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setOrderedPixel($orderedPixel)
    {
      $this->orderedPixel = $orderedPixel;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getStartedPixel()
    {
      return $this->startedPixel;
    }

    /**
     * @param int_0MAX $startedPixel
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setStartedPixel($startedPixel)
    {
      $this->startedPixel = $startedPixel;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getStartedPixelFree()
    {
      return $this->startedPixelFree;
    }

    /**
     * @param int_0MAX $startedPixelFree
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setStartedPixelFree($startedPixelFree)
    {
      $this->startedPixelFree = $startedPixelFree;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getStartedPixelPaid()
    {
      return $this->startedPixelPaid;
    }

    /**
     * @param int_0MAX $startedPixelPaid
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setStartedPixelPaid($startedPixelPaid)
    {
      $this->startedPixelPaid = $startedPixelPaid;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getMinAccess()
    {
      return $this->minAccess;
    }

    /**
     * @param int_0MAX $minAccess
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setMinAccess($minAccess)
    {
      $this->minAccess = $minAccess;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getMinAccessFree()
    {
      return $this->minAccessFree;
    }

    /**
     * @param int_0MAX $minAccessFree
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setMinAccessFree($minAccessFree)
    {
      $this->minAccessFree = $minAccessFree;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getMinAccessPaid()
    {
      return $this->minAccessPaid;
    }

    /**
     * @param int_0MAX $minAccessPaid
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setMinAccessPaid($minAccessPaid)
    {
      $this->minAccessPaid = $minAccessPaid;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getMinAccessNoMessage()
    {
      return $this->minAccessNoMessage;
    }

    /**
     * @param int_0MAX $minAccessNoMessage
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setMinAccessNoMessage($minAccessNoMessage)
    {
      $this->minAccessNoMessage = $minAccessNoMessage;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getMinAccessNoMessageFree()
    {
      return $this->minAccessNoMessageFree;
    }

    /**
     * @param int_0MAX $minAccessNoMessageFree
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setMinAccessNoMessageFree($minAccessNoMessageFree)
    {
      $this->minAccessNoMessageFree = $minAccessNoMessageFree;
      return $this;
    }

    /**
     * @return int_0MAX
     */
    public function getMinAccessNoMessagePaid()
    {
      return $this->minAccessNoMessagePaid;
    }

    /**
     * @param int_0MAX $minAccessNoMessagePaid
     * @return \Emgag\VGWort\MessageService\QualityControlValues
     */
    public function setMinAccessNoMessagePaid($minAccessNoMessagePaid)
    {
      $this->minAccessNoMessagePaid = $minAccessNoMessagePaid;
      return $this;
    }

}
