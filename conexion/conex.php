<?php

define ("DB_HOST", "localhost");
define ("DB_USER", "root"); 
define ("DB_PASS", "123456"); 
define ("DB_NAME", "northwind"); 


class conexion{
 
    protected $conex;
    
    
    public function __construct() {
      $this->conex = new mysqli();
      $this->conex->connect(DB_HOST, DB_USER, DB_PASS,DB_NAME );

        if ( $this->conex->connect_errno )
        {
            echo "Fallo al conectar a MySQL: ". $this->conex->connect_error;
            return;    
        }

        $this->conex->set_charset("UTF-8"); 
    }

    public function cerrarConexion(){
        $this->conex->close();
        
    }
     
    

    
    
    
}

