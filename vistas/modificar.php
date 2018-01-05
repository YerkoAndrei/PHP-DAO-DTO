<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="controlador.php" method="post" name="formulario">
            <?php
                require_once '../dao/employeeDAO.php';
                require_once '../dao/shippersDAO.php';
                if(isset($_GET['employeeId']) && isset($_GET['orderId']) && isset($_GET['date']))
                {
                    $employeeId = $_GET['employeeId'];
                    $orderId = $_GET['orderId'];
                    $date = $_GET['date'];
                }
                $employeeDAO = new employeeDAO();
                $employee = $employeeDAO->getEmployeeById($employeeId);
                
                $shippersDAO = new shippersDAO();
                $lista = $shippersDAO->getShippers();
            ?>
            <h2>Modificar orden</h2>      
            
            <input type="hidden" value="<?php   echo $employeeId;?>" name="employeeId">
            <input type="hidden" value="<?php   echo $orderId;?>" name="orderId">
            
            <table border="1">
                <tr>
                    <td>Empleado:</td>
                    <td><?php   echo $employee->getFirstName().' '.$employee->getLastName();?></td>
                </tr>
                <tr>
                    <td>Codigo Empleado:</td>
                    <td><?php   echo $employeeId;?></td>
                </tr>
                <tr>
                    <td>Orden Nro:</td>
                    <td><?php   echo $orderId;?></td>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td><input type="text" name="txtFecha" value="<?php   echo $date;?>"/></td>
                </tr>
                <tr>
                    <td>Despachador:</td>
                        <td><select name="despachador">
                        <?php   
                        foreach ($lista as $shipper) {
                            echo "<option value=".$shipper->getShipperId().">";
                            echo $shipper->getCompanyName();
                            echo "</option>";
                        }?>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
