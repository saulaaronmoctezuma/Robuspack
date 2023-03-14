<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MaquinariaPojo {

    private $id_maquinaria;
    private $referencia;
    private $fecha;
    private $fabricante;
    private $maquina;
    private $precio1;
    private $precio2;
    private $precio3;
    private $precio4;
    private $precio5;
    private $fecha_actualizacion_precio;
    private $pcexwork;
    private $pcfob;
    private $pccif;
    private $pccip;
    private $ancho;
    private $espesor;
    private $diametro;
    private $empresa_competencia_1;
    private $empresa_competencia_2;
    private $inventario;
    private $piezas_recibir;
    private $fecha_corte_rotacion;
    
    
    function __construct($id_maquinaria, $referencia, $fecha, $fabricante, $maquina, $precio1, $precio2, $precio3, $precio4, $precio5, $fecha_actualizacion_precio, $pcexwork, $pcfob, $pccif, $pccip, $ancho, $espesor, $diametro, $empresa_competencia_1, $empresa_competencia_2, $inventario, $piezas_recibir, $fecha_corte_rotacion) {
        $this->id_maquinaria = $id_maquinaria;
        $this->referencia = $referencia;
        $this->fecha = $fecha;
        $this->fabricante = $fabricante;
        $this->maquina = $maquina;
        $this->precio1 = $precio1;
        $this->precio2 = $precio2;
        $this->precio3 = $precio3;
        $this->precio4 = $precio4;
        $this->precio5 = $precio5;
        $this->fecha_actualizacion_precio = $fecha_actualizacion_precio;
        $this->pcexwork = $pcexwork;
        $this->pcfob = $pcfob;
        $this->pccif = $pccif;
        $this->pccip = $pccip;
        $this->ancho = $ancho;
        $this->espesor = $espesor;
        $this->diametro = $diametro;
        $this->empresa_competencia_1 = $empresa_competencia_1;
        $this->empresa_competencia_2 = $empresa_competencia_2;
        $this->inventario = $inventario;
        $this->piezas_recibir = $piezas_recibir;
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
    }

    public function getId_maquinaria() {
        return $this->id_maquinaria;
    }

    public function getReferencia() {
        return $this->referencia;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function getMaquina() {
        return $this->maquina;
    }

    public function getPrecio1() {
        return $this->precio1;
    }

    public function getPrecio2() {
        return $this->precio2;
    }

    public function getPrecio3() {
        return $this->precio3;
    }

    public function getPrecio4() {
        return $this->precio4;
    }

    public function getPrecio5() {
        return $this->precio5;
    }

    public function getFecha_actualizacion_precio() {
        return $this->fecha_actualizacion_precio;
    }

    public function getPcexwork() {
        return $this->pcexwork;
    }

    public function getPcfob() {
        return $this->pcfob;
    }

    public function getPccif() {
        return $this->pccif;
    }

    public function getPccip() {
        return $this->pccip;
    }

    public function getAncho() {
        return $this->ancho;
    }

    public function getEspesor() {
        return $this->espesor;
    }

    public function getDiametro() {
        return $this->diametro;
    }

    public function getEmpresa_competencia_1() {
        return $this->empresa_competencia_1;
    }

    public function getEmpresa_competencia_2() {
        return $this->empresa_competencia_2;
    }

    public function getInventario() {
        return $this->inventario;
    }

    public function getPiezas_recibir() {
        return $this->piezas_recibir;
    }

    public function getFecha_corte_rotacion() {
        return $this->fecha_corte_rotacion;
    }

    public function setId_maquinaria($id_maquinaria) {
        $this->id_maquinaria = $id_maquinaria;
    }

    public function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    public function setMaquina($maquina) {
        $this->maquina = $maquina;
    }

    public function setPrecio1($precio1) {
        $this->precio1 = $precio1;
    }

    public function setPrecio2($precio2) {
        $this->precio2 = $precio2;
    }

    public function setPrecio3($precio3) {
        $this->precio3 = $precio3;
    }

    public function setPrecio4($precio4) {
        $this->precio4 = $precio4;
    }

    public function setPrecio5($precio5) {
        $this->precio5 = $precio5;
    }

    public function setFecha_actualizacion_precio($fecha_actualizacion_precio) {
        $this->fecha_actualizacion_precio = $fecha_actualizacion_precio;
    }

    public function setPcexwork($pcexwork) {
        $this->pcexwork = $pcexwork;
    }

    public function setPcfob($pcfob) {
        $this->pcfob = $pcfob;
    }

    public function setPccif($pccif) {
        $this->pccif = $pccif;
    }

    public function setPccip($pccip) {
        $this->pccip = $pccip;
    }

    public function setAncho($ancho) {
        $this->ancho = $ancho;
    }

    public function setEspesor($espesor) {
        $this->espesor = $espesor;
    }

    public function setDiametro($diametro) {
        $this->diametro = $diametro;
    }

    public function setEmpresa_competencia_1($empresa_competencia_1) {
        $this->empresa_competencia_1 = $empresa_competencia_1;
    }

    public function setEmpresa_competencia_2($empresa_competencia_2) {
        $this->empresa_competencia_2 = $empresa_competencia_2;
    }

    public function setInventario($inventario) {
        $this->inventario = $inventario;
    }

    public function setPiezas_recibir($piezas_recibir) {
        $this->piezas_recibir = $piezas_recibir;
    }

    public function setFecha_corte_rotacion($fecha_corte_rotacion) {
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
    }


}