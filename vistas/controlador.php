<?php
    //Yerko Orellana Abello
    require_once '../dao/ordersDAO.php';
    
    if(isset($_POST['txtFecha']))
    {
        $fecha = $_POST['txtFecha'];
        $despachador = $_POST['despachador'];
        $employeeId = $_POST['employeeId'];
        $orderId = $_POST['orderId'];
    }
    $ordersDAO = new ordersDAO();
    
    $res = $ordersDAO->updateOrder($fecha, $despachador, $orderId);
    if($res > 0)
    {
        header("location:listado.php?id=$employeeId");
    }
    else
    {
        session_start();
        $_SESSION["error"] = "Error al modificar orden";
        header("location:error.php");
    }