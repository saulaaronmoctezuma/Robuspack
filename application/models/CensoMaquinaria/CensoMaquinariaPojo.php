<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteSeguimientoPojo
 *
 * @author Desarrollo.robus
 * 25-06-2019 10:31 am
 */
class ClienteSeguimientoPojo {

    private $id_clienteseguimiento;
    private $cliente;
    private $nivel;
    private $necesidad;
    private $compromiso;
    private $notas;
    private $cotizacion;
    private $pedido;
    private $contrato;
    private $first_name;

    function __construct($id_clienteseguimiento, $cliente, $nivel, $necesidad, $compromiso, $notas, $cotizacion, $pedido, $contrato, $first_name) {
        $this->id_clienteseguimiento = $id_clienteseguimiento;
        $this->cliente = $cliente;
        $this->nivel = $nivel;
        $this->necesidad = $necesidad;
        $this->compromiso = $compromiso;
        $this->notas = $notas;
        $this->cotizacion = $cotizacion;
        $this->pedido = $pedido;
        $this->contrato = $contrato;
        $this->first_name = $first_name;
    }

    
    public function getId_clienteseguimiento() {
        return $this->id_clienteseguimiento;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function getNecesidad() {
        return $this->necesidad;
    }

    public function getCompromiso() {
        return $this->compromiso;
    }

    public function getNotas() {
        return $this->notas;
    }

    public function getCotizacion() {
        return $this->cotizacion;
    }

    public function getPedido() {
        return $this->pedido;
    }

    public function getContrato() {
        return $this->contrato;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function setId_clienteseguimiento($id_clienteseguimiento) {
        $this->id_clienteseguimiento = $id_clienteseguimiento;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function setNecesidad($necesidad) {
        $this->necesidad = $necesidad;
    }

    public function setCompromiso($compromiso) {
        $this->compromiso = $compromiso;
    }

    public function setNotas($notas) {
        $this->notas = $notas;
    }

    public function setCotizacion($cotizacion) {
        $this->cotizacion = $cotizacion;
    }

    public function setPedido($pedido) {
        $this->pedido = $pedido;
    }

    public function setContrato($contrato) {
        $this->contrato = $contrato;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }


}
