<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
class BitacoraRefaccionesPojo {
    
    private $id_bitacora;
    private $grupo;
    private $cliente;
    private $descripcion;
    private $archivo1;
    private $observacion;
   
    private $fecha_insercion;
    private $fecha_modificar;
    private $first_name;
            
    function __construct($id_bitacora, $grupo, $cliente, $descripcion, $archivo1, $observacion, $fecha_insercion, $fecha_modificar, $first_name) {
        $this->id_bitacora = $id_bitacora;
        $this->grupo = $grupo;
        $this->cliente = $cliente;
        $this->descripcion = $descripcion;
        $this->archivo1 = $archivo1;
        $this->observacion = $observacion;
        $this->fecha_insercion = $fecha_insercion;
        $this->fecha_modificar = $fecha_modificar;
        $this->first_name = $first_name;
    }
    function getId_bitacora() {
        return $this->id_bitacora;
    }

    function getGrupo() {
        return $this->grupo;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getArchivo1() {
        return $this->archivo1;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function getFecha_insercion() {
        return $this->fecha_insercion;
    }

    function getFecha_modificar() {
        return $this->fecha_modificar;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function setId_bitacora($id_bitacora) {
        $this->id_bitacora = $id_bitacora;
    }

    function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setArchivo1($archivo1) {
        $this->archivo1 = $archivo1;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    function setFecha_insercion($fecha_insercion) {
        $this->fecha_insercion = $fecha_insercion;
    }

    function setFecha_modificar($fecha_modificar) {
        $this->fecha_modificar = $fecha_modificar;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }



}