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
            <p>Ingrese los numeros y seleccione la operacion</p>
            <input type="number" name="valor1" required>
            <select name="operador">
                <option value="SUMA">+</option>
                <option value="RESTA">-</option>
                <option value="MULTIPLICACION">×</option>
                <option value="DIVISION">÷</option>
                <option value="POTENCIA">^</option>
                <option value="RADICACION">√</option>
            </select>
            <input type="number" name="valor2" required>
            <br>
            <input type="submit" value="Operar">
        </form>
        <?php
        include_once "Operaciones/Suma.php";
        include_once "Operaciones/Resta.php";
        include_once "Operaciones/Multiplicacion.php";
        include_once "Operaciones/Division.php";
        include_once "Operaciones/Potenciacion.php";
        include_once "Operaciones/Radicacion.php";
        
        $valor1 = filter_input(INPUT_POST, "valor1");
        $valor2 = filter_input(INPUT_POST, "valor2");
        $operador = filter_input(INPUT_POST, "operador");
        $operacion;
        if (!is_null($valor1) && $valor1 != FALSE)
        {
            switch ($operador)
            {
                case "SUMA":
                    $operacion = new Suma($valor1, $valor2);
                    break;
                case "RESTA":
                    $operacion = new Resta($valor1, $valor2);
                    break;
                case "MULTIPLICACION":
                    $operacion = new Multiplicacion($valor1, $valor2);
                    break;
                case "DIVISION":
                    $operacion = new Division($valor1, $valor2);
                    break;
                case "POTENCIACION":
                    $operacion = new Potenciacion($valor1, $valor2);
                    break;
                case "RADICACION":
                    $operacion = new Radicacion($valor1, $valor2);
                    break;
            }
            echo "<p>Resultado:<br>" . $operacion->imprimir() . "<br>";
        }
        ?>
    </body>
</html>
