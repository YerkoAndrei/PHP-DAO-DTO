<?php

require_once '../conexion/conex.php';
require_once '../dto/shippersDTO.php';

class shippersDAO extends conexion {
    
   public function __construct()
    {
        parent::__construct();
    } 
    
    public function getShippers()
    {
        $query = "select * from shippers";
        $resultado = $this->conex->query($query);
        $lista = array();
        
        while($fila = $resultado->fetch_array())
        {
            $shippersDTO = new shippersDTO();
            $shippersDTO->setShipperId($fila["ShipperID"]);
            $shippersDTO->setCompanyName($fila["CompanyName"]);
            array_push($lista, $shippersDTO);
        }
        parent::cerrarConexion();
        return $lista;
    }
    
    
}

