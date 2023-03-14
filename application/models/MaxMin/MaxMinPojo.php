<?php

class MaxMinPojo {

    
    
    
    
    
    
    private $descripcion;
    private $codigo;
    private $fecha_corte_rotacion;
    private $grupo;
    private $cliente;
    private $cantidad_maxima;
    private $fecha_ultimo_consumo;
    private $periodo_surtimiento;
    private $fecha_requiere_piezas;
    private $pedido_inteligente;
    private $suma_total_requerido_mensual;
    private $suma_total_requerido_trimestral;
    private $suma_total_requerido_mensual_con_oc_consignacion;
    private $suma_total_requerido_trimestral_con_oc_y_consignacion;
    private $piezas_requeridas_con_oc_consig_mensual;
    private $piezas_requeridas_con_oc_consig_trimestral;
    private $inventario;
    private $piezas_a_recibir;
    private $disponibilidad_total;
    private $piezas_a_solicitar;
    private $meses_cubiertos;
    private $fecha_cubierta;
    private $vendedor;
    private $id_usuario;
    private $total_mensual_sin_oc;
    private $informativo_prospectacion_mercado;
    private $pc_fob;
    private $id_maquinaria;

    function __construct($descripcion, $codigo, $fecha_corte_rotacion, $grupo, $cliente, $cantidad_maxima, $fecha_ultimo_consumo, $periodo_surtimiento, $fecha_requiere_piezas, $pedido_inteligente, $suma_total_requerido_mensual, $suma_total_requerido_trimestral, $suma_total_requerido_mensual_con_oc_consignacion, $suma_total_requerido_trimestral_con_oc_y_consignacion, $piezas_requeridas_con_oc_consig_mensual, $piezas_requeridas_con_oc_consig_trimestral, $inventario, $piezas_a_recibir, $disponibilidad_total, $piezas_a_solicitar, $meses_cubiertos, $fecha_cubierta, $vendedor, $id_usuario, $total_mensual_sin_oc, $informativo_prospectacion_mercado, $pc_fob, $id_maquinaria) {
        $this->descripcion = $descripcion;
        $this->codigo = $codigo;
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
        $this->grupo = $grupo;
        $this->cliente = $cliente;
        $this->cantidad_maxima = $cantidad_maxima;
        $this->fecha_ultimo_consumo = $fecha_ultimo_consumo;
        $this->periodo_surtimiento = $periodo_surtimiento;
        $this->fecha_requiere_piezas = $fecha_requiere_piezas;
        $this->pedido_inteligente = $pedido_inteligente;
        $this->suma_total_requerido_mensual = $suma_total_requerido_mensual;
        $this->suma_total_requerido_trimestral = $suma_total_requerido_trimestral;
        $this->suma_total_requerido_mensual_con_oc_consignacion = $suma_total_requerido_mensual_con_oc_consignacion;
        $this->suma_total_requerido_trimestral_con_oc_y_consignacion = $suma_total_requerido_trimestral_con_oc_y_consignacion;
        $this->piezas_requeridas_con_oc_consig_mensual = $piezas_requeridas_con_oc_consig_mensual;
        $this->piezas_requeridas_con_oc_consig_trimestral = $piezas_requeridas_con_oc_consig_trimestral;
        $this->inventario = $inventario;
        $this->piezas_a_recibir = $piezas_a_recibir;
        $this->disponibilidad_total = $disponibilidad_total;
        $this->piezas_a_solicitar = $piezas_a_solicitar;
        $this->meses_cubiertos = $meses_cubiertos;
        $this->fecha_cubierta = $fecha_cubierta;
        $this->vendedor = $vendedor;
        $this->id_usuario = $id_usuario;
        $this->total_mensual_sin_oc = $total_mensual_sin_oc;
        $this->informativo_prospectacion_mercado = $informativo_prospectacion_mercado;
        $this->pc_fob = $pc_fob;
        $this->id_maquinaria = $id_maquinaria;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getFecha_corte_rotacion() {
        return $this->fecha_corte_rotacion;
    }

    public function getGrupo() {
        return $this->grupo;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getCantidad_maxima() {
        return $this->cantidad_maxima;
    }

    public function getFecha_ultimo_consumo() {
        return $this->fecha_ultimo_consumo;
    }

    public function getPeriodo_surtimiento() {
        return $this->periodo_surtimiento;
    }

    public function getFecha_requiere_piezas() {
        return $this->fecha_requiere_piezas;
    }

    public function getPedido_inteligente() {
        return $this->pedido_inteligente;
    }

    public function getSuma_total_requerido_mensual() {
        return $this->suma_total_requerido_mensual;
    }

    public function getSuma_total_requerido_trimestral() {
        return $this->suma_total_requerido_trimestral;
    }

    public function getSuma_total_requerido_mensual_con_oc_consignacion() {
        return $this->suma_total_requerido_mensual_con_oc_consignacion;
    }

    public function getSuma_total_requerido_trimestral_con_oc_y_consignacion() {
        return $this->suma_total_requerido_trimestral_con_oc_y_consignacion;
    }

    public function getPiezas_requeridas_con_oc_consig_mensual() {
        return $this->piezas_requeridas_con_oc_consig_mensual;
    }

    public function getPiezas_requeridas_con_oc_consig_trimestral() {
        return $this->piezas_requeridas_con_oc_consig_trimestral;
    }

    public function getInventario() {
        return $this->inventario;
    }

    public function getPiezas_a_recibir() {
        return $this->piezas_a_recibir;
    }

    public function getDisponibilidad_total() {
        return $this->disponibilidad_total;
    }

    public function getPiezas_a_solicitar() {
        return $this->piezas_a_solicitar;
    }

    public function getMeses_cubiertos() {
        return $this->meses_cubiertos;
    }

    public function getFecha_cubierta() {
        return $this->fecha_cubierta;
    }

    public function getVendedor() {
        return $this->vendedor;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getTotal_mensual_sin_oc() {
        return $this->total_mensual_sin_oc;
    }

    public function getInformativo_prospectacion_mercado() {
        return $this->informativo_prospectacion_mercado;
    }

    public function getPc_fob() {
        return $this->pc_fob;
    }

    public function getId_maquinaria() {
        return $this->id_maquinaria;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setFecha_corte_rotacion($fecha_corte_rotacion) {
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
    }

    public function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setCantidad_maxima($cantidad_maxima) {
        $this->cantidad_maxima = $cantidad_maxima;
    }

    public function setFecha_ultimo_consumo($fecha_ultimo_consumo) {
        $this->fecha_ultimo_consumo = $fecha_ultimo_consumo;
    }

    public function setPeriodo_surtimiento($periodo_surtimiento) {
        $this->periodo_surtimiento = $periodo_surtimiento;
    }

    public function setFecha_requiere_piezas($fecha_requiere_piezas) {
        $this->fecha_requiere_piezas = $fecha_requiere_piezas;
    }

    public function setPedido_inteligente($pedido_inteligente) {
        $this->pedido_inteligente = $pedido_inteligente;
    }

    public function setSuma_total_requerido_mensual($suma_total_requerido_mensual) {
        $this->suma_total_requerido_mensual = $suma_total_requerido_mensual;
    }

    public function setSuma_total_requerido_trimestral($suma_total_requerido_trimestral) {
        $this->suma_total_requerido_trimestral = $suma_total_requerido_trimestral;
    }

    public function setSuma_total_requerido_mensual_con_oc_consignacion($suma_total_requerido_mensual_con_oc_consignacion) {
        $this->suma_total_requerido_mensual_con_oc_consignacion = $suma_total_requerido_mensual_con_oc_consignacion;
    }

    public function setSuma_total_requerido_trimestral_con_oc_y_consignacion($suma_total_requerido_trimestral_con_oc_y_consignacion) {
        $this->suma_total_requerido_trimestral_con_oc_y_consignacion = $suma_total_requerido_trimestral_con_oc_y_consignacion;
    }

    public function setPiezas_requeridas_con_oc_consig_mensual($piezas_requeridas_con_oc_consig_mensual) {
        $this->piezas_requeridas_con_oc_consig_mensual = $piezas_requeridas_con_oc_consig_mensual;
    }

    public function setPiezas_requeridas_con_oc_consig_trimestral($piezas_requeridas_con_oc_consig_trimestral) {
        $this->piezas_requeridas_con_oc_consig_trimestral = $piezas_requeridas_con_oc_consig_trimestral;
    }

    public function setInventario($inventario) {
        $this->inventario = $inventario;
    }

    public function setPiezas_a_recibir($piezas_a_recibir) {
        $this->piezas_a_recibir = $piezas_a_recibir;
    }

    public function setDisponibilidad_total($disponibilidad_total) {
        $this->disponibilidad_total = $disponibilidad_total;
    }

    public function setPiezas_a_solicitar($piezas_a_solicitar) {
        $this->piezas_a_solicitar = $piezas_a_solicitar;
    }

    public function setMeses_cubiertos($meses_cubiertos) {
        $this->meses_cubiertos = $meses_cubiertos;
    }

    public function setFecha_cubierta($fecha_cubierta) {
        $this->fecha_cubierta = $fecha_cubierta;
    }

    public function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setTotal_mensual_sin_oc($total_mensual_sin_oc) {
        $this->total_mensual_sin_oc = $total_mensual_sin_oc;
    }

    public function setInformativo_prospectacion_mercado($informativo_prospectacion_mercado) {
        $this->informativo_prospectacion_mercado = $informativo_prospectacion_mercado;
    }

    public function setPc_fob($pc_fob) {
        $this->pc_fob = $pc_fob;
    }

    public function setId_maquinaria($id_maquinaria) {
        $this->id_maquinaria = $id_maquinaria;
    }


    
}