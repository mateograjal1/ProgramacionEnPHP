<?php

include_once "Operacion.php";

class Suma extends Operacion{
    
    public function __construct($valor1, $valor2)
    {
        parent::__construct($valor1, $valor2);
        parent::$resultado = $valor1 + $valor2;
    }
    
    public function imprimir()
    {
        echo "$this->valor1 + $this->valor2 = " . parent::$resultado;
    }
}
