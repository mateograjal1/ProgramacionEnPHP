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
                <option value="suma">+</option>
                <option value="resta">-</option>
                <option value="multiplicacion">*</option>
                <option value="division">÷</option>
                <option value="potencia">^</option>
                <option value="radicacion">√</option>
            </select>
            <input type="number" name="valor2" required>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
