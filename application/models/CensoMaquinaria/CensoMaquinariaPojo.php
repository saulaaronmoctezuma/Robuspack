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
class CensoMaquinariaPojo {

    private $id_censomaquinaria;
    private $grupo;
    private $grupo_temporal;
    private $empresa;
    private $empresa_temporal;
    private $estado;
    private $ciudad_municipio;
    private $nombre_dueno;
    private $celular_dueno;
    private $correo_empresarial_dueno;
    private $correo_personal_dueno;
    private $nombre_ceo;
    private $celular_ceo;
    private $correo_empresarial_ceo;
    private $correo_personal_ceo;
    private $nombre_gerente;
    private $celular_gerente;
    private $correo_empresarial_gerente;
    private $correo_personal_gerente;
    private $nombre_produccion;
    private $celular_produccion;
    private $correo_empresarial_produccion;
    private $correo_personal_produccion;
    private $nombre_mtto;
    private $celular_mtto;
    private $correo_empresarial_mmto;
    private $correo_personal_mtto;
    private $nombre_compras;
    private $celular_compras;
    private $correo_empresarial_compras;
    private $correo_personal_compras;
    private $nombre_ventas;
    private $celular_ventas;
    private $correo_empresarial_ventas;
    private $correo_personal_ventas;
    private $nombre_otros;
    private $celular_otros;
    private $correo_empresarial_otros;
    private $correo_personal_otros;
    private $tipo_de_cliente;
    private $asesor;
    private $estatus_cliente;
    private $tamano_cliente;
    private $tipo_mercado;
    private $volumen_produccion;
    private $necesidad;
    private $compromiso;
    private $notas;
    private $info_maquina_1;
    private $info_maquina_2;
    private $info_maquina_3;
    private $info_maquina_4;
    private $info_maquina_5;
    private $info_maquina_6;
    private $info_maquina_7;
    private $refacciones;
    private $corrugadora;
    private $first_name;


    
    
    
    function __construct($id_censomaquinaria, $grupo, $grupo_temporal, $empresa, $empresa_temporal, $estado, $ciudad_municipio, $nombre_dueno, $celular_dueno, $correo_empresarial_dueno, $correo_personal_dueno, $nombre_ceo, $celular_ceo, $correo_empresarial_ceo, $correo_personal_ceo, $nombre_gerente, $celular_gerente, $correo_empresarial_gerente, $correo_personal_gerente, $nombre_produccion, $celular_produccion, $correo_empresarial_produccion, $correo_personal_produccion, $nombre_mtto, $celular_mtto, $correo_empresarial_mmto, $correo_personal_mtto, $nombre_compras, $celular_compras, $correo_empresarial_compras, $correo_personal_compras, $nombre_ventas, $celular_ventas, $correo_empresarial_ventas, $correo_personal_ventas, $nombre_otros, $celular_otros, $correo_empresarial_otros, $correo_personal_otros, $tipo_de_cliente, $asesor, $estatus_cliente, $tamano_cliente, $tipo_mercado, $volumen_produccion, $necesidad, $compromiso, $notas, $info_maquina_1, $info_maquina_2, $info_maquina_3, $info_maquina_4, $info_maquina_5, $info_maquina_6, $info_maquina_7, $refacciones, $corrugadora, $first_name) {
        $this->id_censomaquinaria = $id_censomaquinaria;
        $this->grupo = $grupo;
        $this->grupo_temporal = $grupo_temporal;
        $this->empresa = $empresa;
        $this->empresa_temporal = $empresa_temporal;
        $this->estado = $estado;
        $this->ciudad_municipio = $ciudad_municipio;
        $this->nombre_dueno = $nombre_dueno;
        $this->celular_dueno = $celular_dueno;
        $this->correo_empresarial_dueno = $correo_empresarial_dueno;
        $this->correo_personal_dueno = $correo_personal_dueno;
        $this->nombre_ceo = $nombre_ceo;
        $this->celular_ceo = $celular_ceo;
        $this->correo_empresarial_ceo = $correo_empresarial_ceo;
        $this->correo_personal_ceo = $correo_personal_ceo;
        $this->nombre_gerente = $nombre_gerente;
        $this->celular_gerente = $celular_gerente;
        $this->correo_empresarial_gerente = $correo_empresarial_gerente;
        $this->correo_personal_gerente = $correo_personal_gerente;
        $this->nombre_produccion = $nombre_produccion;
        $this->celular_produccion = $celular_produccion;
        $this->correo_empresarial_produccion = $correo_empresarial_produccion;
        $this->correo_personal_produccion = $correo_personal_produccion;
        $this->nombre_mtto = $nombre_mtto;
        $this->celular_mtto = $celular_mtto;
        $this->correo_empresarial_mmto = $correo_empresarial_mmto;
        $this->correo_personal_mtto = $correo_personal_mtto;
        $this->nombre_compras = $nombre_compras;
        $this->celular_compras = $celular_compras;
        $this->correo_empresarial_compras = $correo_empresarial_compras;
        $this->correo_personal_compras = $correo_personal_compras;
        $this->nombre_ventas = $nombre_ventas;
        $this->celular_ventas = $celular_ventas;
        $this->correo_empresarial_ventas = $correo_empresarial_ventas;
        $this->correo_personal_ventas = $correo_personal_ventas;
        $this->nombre_otros = $nombre_otros;
        $this->celular_otros = $celular_otros;
        $this->correo_empresarial_otros = $correo_empresarial_otros;
        $this->correo_personal_otros = $correo_personal_otros;
        $this->tipo_de_cliente = $tipo_de_cliente;
        $this->asesor = $asesor;
        $this->estatus_cliente = $estatus_cliente;
        $this->tamano_cliente = $tamano_cliente;
        $this->tipo_mercado = $tipo_mercado;
        $this->volumen_produccion = $volumen_produccion;
        $this->necesidad = $necesidad;
        $this->compromiso = $compromiso;
        $this->notas = $notas;
        $this->info_maquina_1 = $info_maquina_1;
        $this->info_maquina_2 = $info_maquina_2;
        $this->info_maquina_3 = $info_maquina_3;
        $this->info_maquina_4 = $info_maquina_4;
        $this->info_maquina_5 = $info_maquina_5;
        $this->info_maquina_6 = $info_maquina_6;
        $this->info_maquina_7 = $info_maquina_7;
        $this->refacciones = $refacciones;
        $this->corrugadora = $corrugadora;
        $this->first_name = $first_name;
    }

    
    
    public function getId_censomaquinaria() {
        return $this->id_censomaquinaria;
    }

    public function getGrupo() {
        return $this->grupo;
    }

    public function getGrupo_temporal() {
        return $this->grupo_temporal;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function getEmpresa_temporal() {
        return $this->empresa_temporal;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCiudad_municipio() {
        return $this->ciudad_municipio;
    }

    public function getNombre_dueno() {
        return $this->nombre_dueno;
    }

    public function getCelular_dueno() {
        return $this->celular_dueno;
    }

    public function getCorreo_empresarial_dueno() {
        return $this->correo_empresarial_dueno;
    }

    public function getCorreo_personal_dueno() {
        return $this->correo_personal_dueno;
    }

    public function getNombre_ceo() {
        return $this->nombre_ceo;
    }

    public function getCelular_ceo() {
        return $this->celular_ceo;
    }

    public function getCorreo_empresarial_ceo() {
        return $this->correo_empresarial_ceo;
    }

    public function getCorreo_personal_ceo() {
        return $this->correo_personal_ceo;
    }

    public function getNombre_gerente() {
        return $this->nombre_gerente;
    }

    public function getCelular_gerente() {
        return $this->celular_gerente;
    }

    public function getCorreo_empresarial_gerente() {
        return $this->correo_empresarial_gerente;
    }

    public function getCorreo_personal_gerente() {
        return $this->correo_personal_gerente;
    }

    public function getNombre_produccion() {
        return $this->nombre_produccion;
    }

    public function getCelular_produccion() {
        return $this->celular_produccion;
    }

    public function getCorreo_empresarial_produccion() {
        return $this->correo_empresarial_produccion;
    }

    public function getCorreo_personal_produccion() {
        return $this->correo_personal_produccion;
    }

    public function getNombre_mtto() {
        return $this->nombre_mtto;
    }

    public function getCelular_mtto() {
        return $this->celular_mtto;
    }

    public function getCorreo_empresarial_mmto() {
        return $this->correo_empresarial_mmto;
    }

    public function getCorreo_personal_mtto() {
        return $this->correo_personal_mtto;
    }

    public function getNombre_compras() {
        return $this->nombre_compras;
    }

    public function getCelular_compras() {
        return $this->celular_compras;
    }

    public function getCorreo_empresarial_compras() {
        return $this->correo_empresarial_compras;
    }

    public function getCorreo_personal_compras() {
        return $this->correo_personal_compras;
    }

    public function getNombre_ventas() {
        return $this->nombre_ventas;
    }

    public function getCelular_ventas() {
        return $this->celular_ventas;
    }

    public function getCorreo_empresarial_ventas() {
        return $this->correo_empresarial_ventas;
    }

    public function getCorreo_personal_ventas() {
        return $this->correo_personal_ventas;
    }

    public function getNombre_otros() {
        return $this->nombre_otros;
    }

    public function getCelular_otros() {
        return $this->celular_otros;
    }

    public function getCorreo_empresarial_otros() {
        return $this->correo_empresarial_otros;
    }

    public function getCorreo_personal_otros() {
        return $this->correo_personal_otros;
    }

    public function getTipo_de_cliente() {
        return $this->tipo_de_cliente;
    }

    public function getAsesor() {
        return $this->asesor;
    }

    public function getEstatus_cliente() {
        return $this->estatus_cliente;
    }

    public function getTamano_cliente() {
        return $this->tamano_cliente;
    }

    public function getTipo_mercado() {
        return $this->tipo_mercado;
    }

    public function getVolumen_produccion() {
        return $this->volumen_produccion;
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

    public function getInfo_maquina_1() {
        return $this->info_maquina_1;
    }

    public function getInfo_maquina_2() {
        return $this->info_maquina_2;
    }

    public function getInfo_maquina_3() {
        return $this->info_maquina_3;
    }

    public function getInfo_maquina_4() {
        return $this->info_maquina_4;
    }

    public function getInfo_maquina_5() {
        return $this->info_maquina_5;
    }

    public function getInfo_maquina_6() {
        return $this->info_maquina_6;
    }

    public function getInfo_maquina_7() {
        return $this->info_maquina_7;
    }

    public function getRefacciones() {
        return $this->refacciones;
    }

    public function getCorrugadora() {
        return $this->corrugadora;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function setId_censomaquinaria($id_censomaquinaria) {
        $this->id_censomaquinaria = $id_censomaquinaria;
    }

    public function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    public function setGrupo_temporal($grupo_temporal) {
        $this->grupo_temporal = $grupo_temporal;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setEmpresa_temporal($empresa_temporal) {
        $this->empresa_temporal = $empresa_temporal;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setCiudad_municipio($ciudad_municipio) {
        $this->ciudad_municipio = $ciudad_municipio;
    }

    public function setNombre_dueno($nombre_dueno) {
        $this->nombre_dueno = $nombre_dueno;
    }

    public function setCelular_dueno($celular_dueno) {
        $this->celular_dueno = $celular_dueno;
    }

    public function setCorreo_empresarial_dueno($correo_empresarial_dueno) {
        $this->correo_empresarial_dueno = $correo_empresarial_dueno;
    }

    public function setCorreo_personal_dueno($correo_personal_dueno) {
        $this->correo_personal_dueno = $correo_personal_dueno;
    }

    public function setNombre_ceo($nombre_ceo) {
        $this->nombre_ceo = $nombre_ceo;
    }

    public function setCelular_ceo($celular_ceo) {
        $this->celular_ceo = $celular_ceo;
    }

    public function setCorreo_empresarial_ceo($correo_empresarial_ceo) {
        $this->correo_empresarial_ceo = $correo_empresarial_ceo;
    }

    public function setCorreo_personal_ceo($correo_personal_ceo) {
        $this->correo_personal_ceo = $correo_personal_ceo;
    }

    public function setNombre_gerente($nombre_gerente) {
        $this->nombre_gerente = $nombre_gerente;
    }

    public function setCelular_gerente($celular_gerente) {
        $this->celular_gerente = $celular_gerente;
    }

    public function setCorreo_empresarial_gerente($correo_empresarial_gerente) {
        $this->correo_empresarial_gerente = $correo_empresarial_gerente;
    }

    public function setCorreo_personal_gerente($correo_personal_gerente) {
        $this->correo_personal_gerente = $correo_personal_gerente;
    }

    public function setNombre_produccion($nombre_produccion) {
        $this->nombre_produccion = $nombre_produccion;
    }

    public function setCelular_produccion($celular_produccion) {
        $this->celular_produccion = $celular_produccion;
    }

    public function setCorreo_empresarial_produccion($correo_empresarial_produccion) {
        $this->correo_empresarial_produccion = $correo_empresarial_produccion;
    }

    public function setCorreo_personal_produccion($correo_personal_produccion) {
        $this->correo_personal_produccion = $correo_personal_produccion;
    }

    public function setNombre_mtto($nombre_mtto) {
        $this->nombre_mtto = $nombre_mtto;
    }

    public function setCelular_mtto($celular_mtto) {
        $this->celular_mtto = $celular_mtto;
    }

    public function setCorreo_empresarial_mmto($correo_empresarial_mmto) {
        $this->correo_empresarial_mmto = $correo_empresarial_mmto;
    }

    public function setCorreo_personal_mtto($correo_personal_mtto) {
        $this->correo_personal_mtto = $correo_personal_mtto;
    }

    public function setNombre_compras($nombre_compras) {
        $this->nombre_compras = $nombre_compras;
    }

    public function setCelular_compras($celular_compras) {
        $this->celular_compras = $celular_compras;
    }

    public function setCorreo_empresarial_compras($correo_empresarial_compras) {
        $this->correo_empresarial_compras = $correo_empresarial_compras;
    }

    public function setCorreo_personal_compras($correo_personal_compras) {
        $this->correo_personal_compras = $correo_personal_compras;
    }

    public function setNombre_ventas($nombre_ventas) {
        $this->nombre_ventas = $nombre_ventas;
    }

    public function setCelular_ventas($celular_ventas) {
        $this->celular_ventas = $celular_ventas;
    }

    public function setCorreo_empresarial_ventas($correo_empresarial_ventas) {
        $this->correo_empresarial_ventas = $correo_empresarial_ventas;
    }

    public function setCorreo_personal_ventas($correo_personal_ventas) {
        $this->correo_personal_ventas = $correo_personal_ventas;
    }

    public function setNombre_otros($nombre_otros) {
        $this->nombre_otros = $nombre_otros;
    }

    public function setCelular_otros($celular_otros) {
        $this->celular_otros = $celular_otros;
    }

    public function setCorreo_empresarial_otros($correo_empresarial_otros) {
        $this->correo_empresarial_otros = $correo_empresarial_otros;
    }

    public function setCorreo_personal_otros($correo_personal_otros) {
        $this->correo_personal_otros = $correo_personal_otros;
    }

    public function setTipo_de_cliente($tipo_de_cliente) {
        $this->tipo_de_cliente = $tipo_de_cliente;
    }

    public function setAsesor($asesor) {
        $this->asesor = $asesor;
    }

    public function setEstatus_cliente($estatus_cliente) {
        $this->estatus_cliente = $estatus_cliente;
    }

    public function setTamano_cliente($tamano_cliente) {
        $this->tamano_cliente = $tamano_cliente;
    }

    public function setTipo_mercado($tipo_mercado) {
        $this->tipo_mercado = $tipo_mercado;
    }

    public function setVolumen_produccion($volumen_produccion) {
        $this->volumen_produccion = $volumen_produccion;
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

    public function setInfo_maquina_1($info_maquina_1) {
        $this->info_maquina_1 = $info_maquina_1;
    }

    public function setInfo_maquina_2($info_maquina_2) {
        $this->info_maquina_2 = $info_maquina_2;
    }

    public function setInfo_maquina_3($info_maquina_3) {
        $this->info_maquina_3 = $info_maquina_3;
    }

    public function setInfo_maquina_4($info_maquina_4) {
        $this->info_maquina_4 = $info_maquina_4;
    }

    public function setInfo_maquina_5($info_maquina_5) {
        $this->info_maquina_5 = $info_maquina_5;
    }

    public function setInfo_maquina_6($info_maquina_6) {
        $this->info_maquina_6 = $info_maquina_6;
    }

    public function setInfo_maquina_7($info_maquina_7) {
        $this->info_maquina_7 = $info_maquina_7;
    }

    public function setRefacciones($refacciones) {
        $this->refacciones = $refacciones;
    }

    public function setCorrugadora($corrugadora) {
        $this->corrugadora = $corrugadora;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }


    
    
    
    
    }