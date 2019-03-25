<?php


class MaqCliPojo {
    
    private $grupo;
    private $cliente;
    private $maquinas_por_cliente;
   
    function __construct($grupo, $cliente, $maquinas_por_cliente) {
        $this->grupo = $grupo;
        $this->cliente = $cliente;
        $this->maquinas_por_cliente = $maquinas_por_cliente;
    }

    

    function getGrupo() {
        return $this->grupo;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getMaquinas_por_cliente() {
        return $this->maquinas_por_cliente;
    }

    function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setMaquinas_por_cliente($maquinas_por_cliente) {
        $this->maquinas_por_cliente = $maquinas_por_cliente;
    }



}