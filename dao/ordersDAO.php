<?php

require_once '../conexion/conex.php';
require_once '../dto/ordersDTO.php';

class ordersDAO extends conexion {
    
   public function __construct()
    {
        parent::__construct();
    } 
    
    public function getOrdersByEmployeeId($employeeId)
    {
        $query = "select * from orders inner join shippers on orders.ShipVia = shippers.ShipperID where EmployeeID = '".$employeeId."'";
        $resultado = $this->conex->query($query);
        $lista = array();
        
        while($fila = $resultado->fetch_array())
        {
            $ordersDTO = new ordersDTO();
            $ordersDTO->setOrderId($fila["OrderID"]);
            $ordersDTO->setEmployeeId($fila["EmployeeID"]);
            $ordersDTO->setShipName($fila["ShipName"]);
            $ordersDTO->setShippedDate($fila["ShippedDate"]);
            $ordersDTO->setCompanyName($fila["CompanyName"]);
            $ordersDTO->setPhone($fila["Phone"]);
            array_push($lista, $ordersDTO);
        }
        parent::cerrarConexion();
        return $lista;
    }
    public function updateOrder($fecha, $despachador, $orderId)
    {
        $query = "update orders set ShippedDate = '".$fecha."', ShipVia = '".$despachador."' where OrderID = '".$orderId."'";
        $res = $this->conex->query($query);
        
        return $res;
    }
    
}

