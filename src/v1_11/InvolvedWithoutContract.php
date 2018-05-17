<?php

namespace VGWort\MessageService;

class InvolvedWithoutContract
{

    /**
     * @var string_240 $firstName
     * @access public
     */
    public $firstName = null;

    /**
     * @var string_2255 $surName
     * @access public
     */
    public $surName = null;

    /**
     * @var dateString $birthday
     * @access public
     */
    public $birthday = null;

    /**
     * @var string_1249 $street
     * @access public
     */
    public $street = null;

    /**
     * @var string_15 $houseNumber
     * @access public
     */
    public $houseNumber = null;

    /**
     * @var string_19 $postCode
     * @access public
     */
    public $postCode = null;

    /**
     * @var string_160 $city
     * @access public
     */
    public $city = null;

    /**
     * @var countryType $countryCode
     * @access public
     */
    public $countryCode = null;

    /**
     * @var boolean $transferOfRights
     * @access public
     */
    public $transferOfRights = null;

    /**
     * @param string_240 $firstName
     * @param string_2255 $surName
     * @param dateString $birthday
     * @param string_1249 $street
     * @param string_15 $houseNumber
     * @param string_19 $postCode
     * @param string_160 $city
     * @param countryType $countryCode
     * @param boolean $transferOfRights
     * @access public
     */
    public function __construct($firstName, $surName, $birthday, $street, $houseNumber, $postCode, $city, $countryCode, $transferOfRights)
    {
      $this->firstName = $firstName;
      $this->surName = $surName;
      $this->birthday = $birthday;
      $this->street = $street;
      $this->houseNumber = $houseNumber;
      $this->postCode = $postCode;
      $this->city = $city;
      $this->countryCode = $countryCode;
      $this->transferOfRights = $transferOfRights;
    }

}
