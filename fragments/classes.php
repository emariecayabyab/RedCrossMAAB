<?php

class Member {
    private $orNum, $IDNum, $lastName, $firstName, $middleName, $address, $contactNumber, $validDate, $expiryDate;

    public function __construct($orNum, $IDNum, $lastName, $firstName, $middleName, $address, $contactNumber, $validDate, $expiryDate)
    {
        $this->orNum = $orNum;
        $this->IDNum = $IDNum;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->address = $address;
        $this->contactNumber = $contactNumber;
        $this->validDate = $validDate;
        $this->expiryDate = $expiryDate;
    }

    public function getOrNum()
    {
        return $this->orNum;
    }

    public function getIdNum()
    {
        return $this->IDNum;
    }

    public function getlName()
    {
        return $this->lastName;
    }

    public function getfName()
    {
        return $this->firstName;
    }

    public function getmName()
    {
        return $this->middleName;
    }

    public function getaddress()
    {
        return $this->address;
    }

    public function getconNum()
    {
        return $this->contactNumber;
    }

    public function getvalDate()
    {
        return $this->validDate;
    }

  public function geteDate()
    {
        return $this->expiryDate;
    }
}
?>