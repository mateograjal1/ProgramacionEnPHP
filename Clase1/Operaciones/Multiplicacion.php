<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Multiplicacion
 *
 * @author 702-1
 */
include "Operacion.php";

class Multiplicacion extends Operacion{
    public function __construct($valor1, $valor2)
    {
        parent::__construct($valor1, $valor2);
        parent::$resultado = $valor1 * $valor2;
    }
    
    public function imprimir()
    {
        echo "$this->valor1 * $this->valor2 = " . parent::$resultado;
    }
}
