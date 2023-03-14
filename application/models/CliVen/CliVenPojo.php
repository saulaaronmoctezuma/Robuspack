<?php


class CliVenPojo {
    
   
    private $cliente;
    private $vendedor;
   
    function __construct($cliente, $vendedor) {
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
    }


    function getCliente() {
        return $this->cliente;
    }

    function getVendedor() {
        return $this->vendedor;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }



}