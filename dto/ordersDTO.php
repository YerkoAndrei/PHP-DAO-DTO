<?php

 class ordersDTO{
    
    private $orderId;
    private $employeeId;
    private $shipName;
    private $shippedDate;
    private $companyName;
    private $phone;
    
    function __construct() {
        
    }

    function getOrderId() {
        return $this->orderId;
    }
    function getEmployeeId() {
        return $this->employeeId;
    }
    function getShipName() {
        return $this->shipName;
    }
    function getShippedDate() {
        return $this->shippedDate;
    }
    function getCompanyName() {
        return $this->companyName;
    }
    function getPhone() {
        return $this->phone;
    }

    function setOrderId($orderId) {
        $this->orderId = $orderId;
    }
    function setEmployeeId($employeeId) {
        $this->employeeId = $employeeId;
    }
    function setShipName($shipName) {
        $this->shipName = $shipName;
    }
    function setShippedDate($shippedDate) {
        $this->shippedDate = $shippedDate;
    }
    function setCompanyName($companyName) {
        $this->companyName = $companyName;
    }
    function setPhone($phone) {
        $this->phone = $phone;
    }

}

