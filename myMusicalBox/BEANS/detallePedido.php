<?php

class detallePedido {
    
    public $num;
    public $codpro;
    public $cant;
    
    function __construct($num, $codpro, $cant) {
        $this->num = $num;
        $this->codpro = $codpro;
        $this->cant = $cant;
    }
    
    function getNum() {
        return $this->num;
    }

    function getCodpro() {
        return $this->codpro;
    }

    function getCant() {
        return $this->cant;
    }

    function setNum($num) {
        $this->num = $num;
    }

    function setCodpro($codpro) {
        $this->codpro = $codpro;
    }

    function setCant($cant) {
        $this->cant = $cant;
    }



    
}
