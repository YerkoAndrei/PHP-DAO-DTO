<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Empleados</h2>
        <table border="1">
            <thead>
                <th>EmployeeID</th>
                <th>LastName</th>
                <th>FirstName</th>
            </thead>
            <?php
                require_once '../dao/employeeDAO.php';
                $employeeDAO = new employeeDAO();
                $lista = $employeeDAO->getEmployee();
                foreach ($lista as $employee) {
                    echo "<tr>";
                    echo "<td><a href='listado.php?id=".$employee->getEmployeeID()."'>".$employee->getEmployeeID()."</a></td>";
                    echo "<td>".$employee->getLastName()."</td>";
                    echo "<td>".$employee->getFirstName()."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
