<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Error</h2>
        <?php
            session_start();
            echo $_SESSION["error"];
        ?>
        <br>
        <a href="index.php">Volver</a>
    </body>
</html>
