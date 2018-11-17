<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST">
            <label>Ingrese el vinculo que desea guardar</label><br>
            <label>Vinculo</label>
            <input type="url" name="txtVinculo" required><br>
            <label>Texto a mostrar</label>
            <input type="text" name="txtMostrar" required>
            <input type="submit" name="butNuevo" value="Nuevo enlace">
        </form>
        <br>
        <ul>
            <?php
            include "Enlace.php";
            $enlace = "";
            $mostrar = "";
            $cookies_a_eliminar = 0;
            $cookies = count($_COOKIE);
            $machetazo = FALSE;
            if (count($_REQUEST) > 0) {
                if (array_key_exists($_REQUEST["txtVinculo"], $_COOKIE)) {
                    echo "Ya tengo esa llave!<br>";
                } else {
                    setcookie($_REQUEST["txtVinculo"], $_REQUEST["txtMostrar"], time() + 3600);
                    $enlace = $_REQUEST["txtVinculo"];
                    $mostrar = $_REQUEST["txtMostrar"];
                    $machetazo = TRUE;
                    $cookies++;
                }
            }
            echo "La cantidad de cookies es: " . $cookies . "<br>";
            if ($cookies >= 6)
            {
                $cookies_a_eliminar = $cookies - 6;
                echo "La cantidad de cookies a eliminar es: $cookies_a_eliminar<br>";
            }
            foreach ($_COOKIE as $key => $value) {
                if ($cookies_a_eliminar-- <= 0)
                {
                    echo "<li><a href='$key'>$value</a></li>";
                }
            }
            if ($machetazo) echo "<li><a href='$enlace'>$mostrar</a></li>";
            ?>
        </ul>

    </body>
</html>
