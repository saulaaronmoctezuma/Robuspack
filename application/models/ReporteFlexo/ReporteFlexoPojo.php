<?php


class ReporteFlexoPojo {
    
    private $id_censomaquinaria;
    private $empresa;
    private $empresa_temporal;
    private $empresa_concatenada;
    private $estado;
    private $municipio;
    private $troquel;
    private $total_flexos;
    private $id_usuario;
    private $nombre_usuario;
    private $cliente_robuspack;
    private $presencia;
            
            
  
    
    function __construct($id_censomaquinaria, $empresa, $empresa_temporal, $empresa_concatenada, $estado, $municipio, $troquel, $total_flexos, $id_usuario, $nombre_usuario, $cliente_robuspack, $presencia) {
        $this->id_censomaquinaria = $id_censomaquinaria;
        $this->empresa = $empresa;
        $this->empresa_temporal = $empresa_temporal;
        $this->empresa_concatenada = $empresa_concatenada;
        $this->estado = $estado;
        $this->municipio = $municipio;
        $this->troquel = $troquel;
        $this->total_flexos = $total_flexos;
        $this->id_usuario = $id_usuario;
        $this->nombre_usuario = $nombre_usuario;
        $this->cliente_robuspack = $cliente_robuspack;
        $this->presencia = $presencia;
    }

    
    public function getId_censomaquinaria() {
        return $this->id_censomaquinaria;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function getEmpresa_temporal() {
        return $this->empresa_temporal;
    }

    public function getEmpresa_concatenada() {
        return $this->empresa_concatenada;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getMunicipio() {
        return $this->municipio;
    }

    public function getTroquel() {
        return $this->troquel;
    }

    public function getTotal_flexos() {
        return $this->total_flexos;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getNombre_usuario() {
        return $this->nombre_usuario;
    }

    public function getCliente_robuspack() {
        return $this->cliente_robuspack;
    }

    public function getPresencia() {
        return $this->presencia;
    }

    public function setId_censomaquinaria($id_censomaquinaria) {
        $this->id_censomaquinaria = $id_censomaquinaria;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setEmpresa_temporal($empresa_temporal) {
        $this->empresa_temporal = $empresa_temporal;
    }

    public function setEmpresa_concatenada($empresa_concatenada) {
        $this->empresa_concatenada = $empresa_concatenada;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    public function setTroquel($troquel) {
        $this->troquel = $troquel;
    }

    public function setTotal_flexos($total_flexos) {
        $this->total_flexos = $total_flexos;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setNombre_usuario($nombre_usuario) {
        $this->nombre_usuario = $nombre_usuario;
    }

    public function setCliente_robuspack($cliente_robuspack) {
        $this->cliente_robuspack = $cliente_robuspack;
    }

    public function setPresencia($presencia) {
        $this->presencia = $presencia;
    }


    


}