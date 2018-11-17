<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Operacion
 *
 * @author 702-1
 */
class Operacion {
    protected $valor1;
    protected $valor2;
    protected $resultado;
    
    protected function __construct($valor1, $valor2) {
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }
    
    public function getValor1()
    {
        return $this->valor1;
    }
    
    public function getValor2()
    {
        return $this->valor2;
    }
    
    public function getResultado()
    {
        return $this->resultado;
    }
}
