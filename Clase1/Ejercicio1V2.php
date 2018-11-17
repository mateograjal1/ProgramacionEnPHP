<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include "Enlace.php";
session_start();
if (empty($_SESSION["direccion"])) {
    $_SESSION["direccion"] = "VERTICAL";
}
?>

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
        <?php
        //$_SESSION["direccion"] = "HORIZONTAL";
        $enlaces = [];
        $vinculo = "";
        $mostrar = "";
        if (!empty($_SESSION["enlaces"])) {
            $enlaces = $_SESSION["enlaces"];
        }
        if (!empty($_REQUEST["butNuevo"])) {
            $nuevoEnlace = new Enlace($_REQUEST["txtVinculo"], $_REQUEST["txtMostrar"]);
            $enlaces[count($enlaces)] = $nuevoEnlace;
        } else if (!empty($_REQUEST["butDireccion"])) {
            $_SESSION["direccion"] = $_REQUEST["cbDireccion"];
        }
        echo "<h1>Vinculos</h1>";
        if (count($enlaces) == 0) {
            echo "<p>No hay enlaces!</p>";
        } else if ($_SESSION["direccion"] == "VERTICAL") {
            echo "<ul>";
            foreach ($enlaces as $value) {
                echo "<li>";
                $value->mostrarEnlace();
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>";
            $guion = FALSE;
            foreach ($enlaces as $value) {
                if ($guion)
                {
                    echo " - ";
                } else {
                    $guion = TRUE;
                }
                $value->mostrarEnlace();
            }
            echo "</p>";
        }

        $_SESSION["enlaces"] = $enlaces;
        ?>
        <form method="POST">
            <label>
                Como desea ver los enlaces?
            </label>
            <select name="cbDireccion">
                <option value="HORIZONTAL">Horizontal</option>
                <option value="VERTICAL">Vertical</option>
            </select>
            <input type="submit" name="butDireccion" value="Cambiar">
        </form>

    </body>
</html>
