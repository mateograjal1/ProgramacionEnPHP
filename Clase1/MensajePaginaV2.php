<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MensajePaginaV2
 *
 * @author 702-1
 */
class MensajePaginaV2 {
    private $titulo;
    private $ubicacion;
    private $tamano;
    
    public function __construct($titulo, $ubicacion="left", $tamano=100) {
        $this->titulo = $titulo;
        $this->tamano = $tamano;
        $this->ubicacion = $ubicacion;
    }
    
    public function mostrar()
    {
        echo "<div style='font-size:".$this->tamano."px;text-align:$this->ubicacion'>$this->titulo</div>";
    }
}
