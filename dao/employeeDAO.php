<?php

require_once '../conexion/conex.php';
require_once '../dto/employeeDTO.php';

class employeeDAO extends conexion {
    
   public function __construct()
    {
        parent::__construct();
    } 
    
    public function getEmployee()
    {
        $query = "select * from employees";
        $resultado = $this->conex->query($query);
        $lista = array();
        
        while($fila = $resultado->fetch_array())
        {
            $employeeDTO = new employeeDTO();
            $employeeDTO->setEmployeeId($fila["EmployeeID"]);
            $employeeDTO->setLastName($fila["LastName"]);
            $employeeDTO->setFirstName($fila["FirstName"]);
            array_push($lista, $employeeDTO);
        }
        parent::cerrarConexion();
        return $lista;
    }
    public function getEmployeeById($id)
    {
        $query = "select * from employees where EmployeeID = '".$id."'";
        $resultado = $this->conex->query($query);
        
        while($fila = $resultado->fetch_array())
        {
            $employeeDTO = new employeeDTO();
            $employeeDTO->setEmployeeId($fila["EmployeeID"]);
            $employeeDTO->setLastName($fila["LastName"]);
            $employeeDTO->setFirstName($fila["FirstName"]);
            parent::cerrarConexion();
            return $employeeDTO;
        }
    }
}

