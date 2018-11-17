<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MensajePagina
 *
 * @author 702-1
 */
class MensajePagina {
    private $titulo;
    private $ubicacion = "left";
    private $tamano = 100;
    
    public function __construct() {
        $argv = func_get_args();
        switch (func_num_args())
        {
            case 1:
                $this->__construct1($argv[0]);
                break;
            case 2:
                $this->__construct2($argv[0], $argv[1]);
                break;
            case 3:
                $this->__construct3($argv[0], $argv[1], $argv[2]);
                break;
            default:
                break;
        }
    }
    
    function __construct1($titulo)
    {
        $this->titulo = $titulo;
    }
    
    function __construct2($titulo, $alineacion)
    {
        $this->titulo = $titulo;
        $this->ubicacion = $alineacion;
    }
    
    function __construct3($titulo, $alineacion, $tamano)
    {
        $this->titulo = $titulo;
        $this->ubicacion = $alineacion;
        $this->tamano = $tamano;
    }
    
    public function mostrar()
    {
        echo "<div style='font-size:".$this->tamano."px;text-align:$this->ubicacion'>$this->titulo</div>";
    }
}
