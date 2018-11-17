<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Enlace
 *
 * @author 702-1
 */
class Enlace {
    
    private $enlace="";
    private $mostrar="";
    
    public function __construct($enlace, $mostrar) {
        $this->enlace = $enlace;
        $this->mostrar = $mostrar;
    }
    
    public function mostrarEnlace()
    {
        echo "<a href='$this->enlace'>$this->mostrar</a>";
    }
}
