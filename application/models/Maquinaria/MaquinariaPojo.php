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
    
    function __construct($id_maquinaria, $referencia, $fecha, $fabricante, $maquina, $precio1, $precio2, $precio3, $precio4, $precio5, $pcexwork, $pcfob, $pccif, $pccip, $ancho, $espesor, $diametro, $empresa_competencia_1, $empresa_competencia_2, $inventario, $piezas_recibir, $fecha_corte_rotacion) {
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

    
    function getId_maquinaria() {
        return $this->id_maquinaria;
    }

    function getReferencia() {
        return $this->referencia;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getFabricante() {
        return $this->fabricante;
    }

    function getMaquina() {
        return $this->maquina;
    }

    function getPrecio1() {
        return $this->precio1;
    }

    function getPrecio2() {
        return $this->precio2;
    }

    function getPrecio3() {
        return $this->precio3;
    }

    function getPrecio4() {
        return $this->precio4;
    }

    function getPrecio5() {
        return $this->precio5;
    }

    function getPcexwork() {
        return $this->pcexwork;
    }

    function getPcfob() {
        return $this->pcfob;
    }

    function getPccif() {
        return $this->pccif;
    }

    function getPccip() {
        return $this->pccip;
    }

    function getAncho() {
        return $this->ancho;
    }

    function getEspesor() {
        return $this->espesor;
    }

    function getDiametro() {
        return $this->diametro;
    }

    function getEmpresa_competencia_1() {
        return $this->empresa_competencia_1;
    }

    function getEmpresa_competencia_2() {
        return $this->empresa_competencia_2;
    }

    function getInventario() {
        return $this->inventario;
    }

    function getPiezas_recibir() {
        return $this->piezas_recibir;
    }

    function getFecha_corte_rotacion() {
        return $this->fecha_corte_rotacion;
    }

    function setId_maquinaria($id_maquinaria) {
        $this->id_maquinaria = $id_maquinaria;
    }

    function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    function setMaquina($maquina) {
        $this->maquina = $maquina;
    }

    function setPrecio1($precio1) {
        $this->precio1 = $precio1;
    }

    function setPrecio2($precio2) {
        $this->precio2 = $precio2;
    }

    function setPrecio3($precio3) {
        $this->precio3 = $precio3;
    }

    function setPrecio4($precio4) {
        $this->precio4 = $precio4;
    }

    function setPrecio5($precio5) {
        $this->precio5 = $precio5;
    }

    function setPcexwork($pcexwork) {
        $this->pcexwork = $pcexwork;
    }

    function setPcfob($pcfob) {
        $this->pcfob = $pcfob;
    }

    function setPccif($pccif) {
        $this->pccif = $pccif;
    }

    function setPccip($pccip) {
        $this->pccip = $pccip;
    }

    function setAncho($ancho) {
        $this->ancho = $ancho;
    }

    function setEspesor($espesor) {
        $this->espesor = $espesor;
    }

    function setDiametro($diametro) {
        $this->diametro = $diametro;
    }

    function setEmpresa_competencia_1($empresa_competencia_1) {
        $this->empresa_competencia_1 = $empresa_competencia_1;
    }

    function setEmpresa_competencia_2($empresa_competencia_2) {
        $this->empresa_competencia_2 = $empresa_competencia_2;
    }

    function setInventario($inventario) {
        $this->inventario = $inventario;
    }

    function setPiezas_recibir($piezas_recibir) {
        $this->piezas_recibir = $piezas_recibir;
    }

    function setFecha_corte_rotacion($fecha_corte_rotacion) {
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
    }


}