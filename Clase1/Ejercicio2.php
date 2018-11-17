<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Constructores</title>
    </head>
    <body>
        <form method="POST">
            <label>
                Titulo
            </label>
            <input type="text" name="txtTitulo" required>
            <br>
            <label>
                Alineación
            </label>
            <select name="cbAlineacion">
                <option value=""></option>
                <option value="left">Izquierda</option>
                <option value="center">Centro</option>
                <option value="right">Derecha</option>
            </select>
            <br>
            <label>
                Tamaño
            </label>
            <input type="number" name="numTamano" min="8" max="100">
            <br>            
            <input type="submit" value="Enviar" name="butEnviar">
        </form>
        <?php
        include "MensajePagina.PHP";
        if (!is_null(filter_input(INPUT_POST, "butEnviar")) && filter_input(INPUT_POST, "butEnviar") != FALSE)
        {
            $titulo = filter_input(INPUT_POST, "txtTitulo");
            $tamano = filter_input(INPUT_POST, "numTamano");
            $ubicacion = filter_input(INPUT_POST, "cbAlineacion");
            $mensajePagina;
            if ($ubicacion == "") {
                echo "<p>Solo tenemos el titulo</p>";
                $mensajePagina = new MensajePagina($titulo);
            } else if ($tamano == "")
            {
                echo "<p>Solo tenemos el titulo y la ubicacion</p>";
                $mensajePagina = new MensajePagina($titulo, $ubicacion);
            } else {
                echo "<p>Tenemos todo</p>";
                $mensajePagina = new MensajePagina($titulo, $ubicacion, $tamano);
            }
            $mensajePagina->mostrar();
        }
        ?>
    </body>
</html>
