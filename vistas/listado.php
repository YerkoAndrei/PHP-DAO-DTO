<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Ordenes del empleado</h2>
        <table border="1">
            <thead>
                <th>OrderID</th>
                <th>EmployeeID</th>
                <th>ShipName</th>
                <th>ShippedDate</th>
                <th>CompanyName</th>
                <th>Phone</th>
            </thead>
            <?php 
                require_once '../dao/ordersDAO.php';
                require_once '../dto/ordersDTO.php';
                if(isset($_GET['id']))
                {
                    $employeeId = $_GET['id'];
                }
                $ordersDAO = new ordersDAO();
                $lista = $ordersDAO->getOrdersByEmployeeId($employeeId);
                foreach ($lista as $order) {
                    echo "<tr>";
                    echo "<td><a href='modificar.php?orderId=".$order->getOrderId()."&employeeId=".$order->getEmployeeId()."&date=".$order->getShippedDate()."'>".$order->getOrderId()."</a></td>";
                    echo "<td>".$order->getEmployeeId()."</td>";
                    echo "<td>".$order->getShipName()."</td>";
                    echo "<td>".$order->getShippedDate()."</td>";
                    echo "<td>".$order->getCompanyName()."</td>";
                    echo "<td>".$order->getPhone()."</td>";
                    echo "</tr>";
                }
            ?>
            </table>
    </body>
</html>
