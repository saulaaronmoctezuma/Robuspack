<?php


class MaqVenPojo {
    
    private $maquinas_por_vendedor;
    private $vendedor;
  
    function __construct($maquinas_por_vendedor, $vendedor) {
        $this->maquinas_por_vendedor = $maquinas_por_vendedor;
        $this->vendedor = $vendedor;
    }

    function getMaquinas_por_vendedor() {
        return $this->maquinas_por_vendedor;
    }

    function getVendedor() {
        return $this->vendedor;
    }

    function setMaquinas_por_vendedor($maquinas_por_vendedor) {
        $this->maquinas_por_vendedor = $maquinas_por_vendedor;
    }

    function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }




}