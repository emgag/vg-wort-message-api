<?php

namespace Emgag\VGWort\v1_13;

class InvolvedWithoutContract
{

    /**
     * @var string_240 $firstName
     */
    protected $firstName = null;

    /**
     * @var string_2255 $surName
     */
    protected $surName = null;

    /**
     * @var dateString $birthday
     */
    protected $birthday = null;

    /**
     * @var string_1249 $street
     */
    protected $street = null;

    /**
     * @var string_15 $houseNumber
     */
    protected $houseNumber = null;

    /**
     * @var string_19 $postCode
     */
    protected $postCode = null;

    /**
     * @var string_160 $city
     */
    protected $city = null;

    /**
     * @var countryType $countryCode
     */
    protected $countryCode = null;

    /**
     * @var boolean $transferOfRights
     */
    protected $transferOfRights = null;

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

    /**
     * @return string_240
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string_240 $firstName
     * @return \Emgag\VGWort\v1_13\InvolvedWithoutContract
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string_2255
     */
    public function getSurName()
    {
      return $this->surName;
    }

    /**
     * @param string_2255 $surName
     * @return \Emgag\VGWort\v1_13\InvolvedWithoutContract
     */
    public function setSurName($surName)
    {
      $this->surName = $surName;
      return $this;
    }

    /**
     * @return dateString
     */
    public function getBirthday()
    {
      return $this->birthday;
    }

    /**
     * @param dateString $birthday
     * @return \Emgag\VGWort\v1_13\InvolvedWithoutContract
     */
    public function setBirthday($birthday)
    {
      $this->birthday = $birthday;
      return $this;
    }

    /**
     * @return string_1249
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param string_1249 $street
     * @return \Emgag\VGWort\v1_13\InvolvedWithoutContract
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @return string_15
     */
    public function getHouseNumber()
    {
      return $this->houseNumber;
    }

    /**
     * @param string_15 $houseNumber
     * @return \Emgag\VGWort\v1_13\InvolvedWithoutContract
     */
    public function setHouseNumber($houseNumber)
    {
      $this->houseNumber = $houseNumber;
      return $this;
    }

    /**
     * @return string_19
     */
    public function getPostCode()
    {
      return $this->postCode;
    }

    /**
     * @param string_19 $postCode
     * @return \Emgag\VGWort\v1_13\InvolvedWithoutContract
     */
    public function setPostCode($postCode)
    {
      $this->postCode = $postCode;
      return $this;
    }

    /**
     * @return string_160
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string_160 $city
     * @return \Emgag\VGWort\v1_13\InvolvedWithoutContract
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return countryType
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param countryType $countryCode
     * @return \Emgag\VGWort\v1_13\InvolvedWithoutContract
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTransferOfRights()
    {
      return $this->transferOfRights;
    }

    /**
     * @param boolean $transferOfRights
     * @return \Emgag\VGWort\v1_13\InvolvedWithoutContract
     */
    public function setTransferOfRights($transferOfRights)
    {
      $this->transferOfRights = $transferOfRights;
      return $this;
    }

}
