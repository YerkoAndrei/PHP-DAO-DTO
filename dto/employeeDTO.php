<?php

 class employeeDTO{
    
    private $employeeId;
    private $lastName;
    private $firstName;
    
    function __construct() {
        
    }

    function getEmployeeId() {
        return $this->employeeId;
    }
    function getLastName() {
        return $this->lastName;
    }
    function getFirstName() {
        return $this->firstName;
    }

    function setEmployeeId($employeeId) {
        $this->employeeId = $employeeId;
    }
    function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

}

