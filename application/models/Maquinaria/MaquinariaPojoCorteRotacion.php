<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MaquinariaPojoCorteRotacion {

    private $id_maquinaria;
    private $fecha_corte_rotacion;
    
    function __construct($id_maquinaria, $fecha_corte_rotacion) {
        $this->id_maquinaria = $id_maquinaria;
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
    }

    public function getId_maquinaria() {
        return $this->id_maquinaria;
    }

    public function getFecha_corte_rotacion() {
        return $this->fecha_corte_rotacion;
    }

    public function setId_maquinaria($id_maquinaria) {
        $this->id_maquinaria = $id_maquinaria;
    }

    public function setFecha_corte_rotacion($fecha_corte_rotacion) {
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
    }



}