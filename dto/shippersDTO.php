<?php

 class shippersDTO{
    
    private $shipperId;
    private $companyName;
    
    function __construct() {
        
    }

    function getShipperId() {
        return $this->shipperId;
    }
    function getCompanyName() {
        return $this->companyName;
    }

    function setShipperId($shipperId) {
        $this->shipperId = $shipperId;
    }
    function setCompanyName($companyName) {
        $this->companyName = $companyName;
    }

}

