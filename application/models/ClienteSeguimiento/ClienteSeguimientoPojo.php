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
 */
class ClienteSeguimientoPojo {
    
    private $id_clienteseguimiento;
    private $grupo;
    private $cliente;
    private $prioridad;
    private $estatus;
    private $necesidad;
    private $fecha_cotizacion;
    private $archivo1;

    private $fecha_contactar;
    private $compromiso;
    private $notas;
    private $fecha_insercion;
    private $fecha_modificacion;
    private $first_name;
          
    function __construct($id_clienteseguimiento, $grupo, $cliente, $prioridad, $estatus, $necesidad, $fecha_cotizacion, $archivo1, $fecha_contactar, $compromiso, $notas, $fecha_insercion, $fecha_modificacion, $first_name) {
        $this->id_clienteseguimiento = $id_clienteseguimiento;
        $this->grupo = $grupo;
        $this->cliente = $cliente;
        $this->prioridad = $prioridad;
        $this->estatus = $estatus;
        $this->necesidad = $necesidad;
        $this->fecha_cotizacion = $fecha_cotizacion;
        $this->archivo1 = $archivo1;
        $this->fecha_contactar = $fecha_contactar;
        $this->compromiso = $compromiso;
        $this->notas = $notas;
        $this->fecha_insercion = $fecha_insercion;
        $this->fecha_modificacion = $fecha_modificacion;
        $this->first_name = $first_name;
    }

    function getId_clienteseguimiento() {
        return $this->id_clienteseguimiento;
    }

    function getGrupo() {
        return $this->grupo;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getPrioridad() {
        return $this->prioridad;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function getNecesidad() {
        return $this->necesidad;
    }

    function getFecha_cotizacion() {
        return $this->fecha_cotizacion;
    }

    function getArchivo1() {
        return $this->archivo1;
    }

    function getFecha_contactar() {
        return $this->fecha_contactar;
    }

    function getCompromiso() {
        return $this->compromiso;
    }

    function getNotas() {
        return $this->notas;
    }

    function getFecha_insercion() {
        return $this->fecha_insercion;
    }

    function getFecha_modificacion() {
        return $this->fecha_modificacion;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function setId_clienteseguimiento($id_clienteseguimiento) {
        $this->id_clienteseguimiento = $id_clienteseguimiento;
    }

    function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setPrioridad($prioridad) {
        $this->prioridad = $prioridad;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    function setNecesidad($necesidad) {
        $this->necesidad = $necesidad;
    }

    function setFecha_cotizacion($fecha_cotizacion) {
        $this->fecha_cotizacion = $fecha_cotizacion;
    }

    function setArchivo1($archivo1) {
        $this->archivo1 = $archivo1;
    }

    function setFecha_contactar($fecha_contactar) {
        $this->fecha_contactar = $fecha_contactar;
    }

    function setCompromiso($compromiso) {
        $this->compromiso = $compromiso;
    }

    function setNotas($notas) {
        $this->notas = $notas;
    }

    function setFecha_insercion($fecha_insercion) {
        $this->fecha_insercion = $fecha_insercion;
    }

    function setFecha_modificacion($fecha_modificacion) {
        $this->fecha_modificacion = $fecha_modificacion;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }


  
}
