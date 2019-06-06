<?php

class ReporteMaximoMinimoPojo {

    private $codigo;
    private $fecha_corte_rotacion;
    private $fecha_ultimo_consumo;
    private $fecha_requiere_piezas;
    private $pedido_inteligente;
    private $suma_total_requerido_mensual;
    private $suma_total_requerido_trimestral;
    private $suma_total_requerido_mensual_con_oc_consignacion;
   private $suma_total_requerido_trimestral_con_oc_y_consignacion;
    private $inventario;
    private $piezas_a_recibir;
    private $disponibilidad_total;
    private $piezas_a_solicitar;
    private $meses_cubiertos;
    private $fecha_cubierta;
    private $pc_fob;
    private $vendedor;

    function __construct($codigo, $fecha_corte_rotacion, $fecha_ultimo_consumo, $fecha_requiere_piezas, $pedido_inteligente, $suma_total_requerido_mensual, $suma_total_requerido_trimestral, $suma_total_requerido_mensual_con_oc_consignacion, $suma_total_requerido_trimestral_con_oc_y_consignacion, $inventario, $piezas_a_recibir, $disponibilidad_total, $piezas_a_solicitar, $meses_cubiertos, $fecha_cubierta, $pc_fob, $vendedor) {
        $this->codigo = $codigo;
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
        $this->fecha_ultimo_consumo = $fecha_ultimo_consumo;
        $this->fecha_requiere_piezas = $fecha_requiere_piezas;
        $this->pedido_inteligente = $pedido_inteligente;
        $this->suma_total_requerido_mensual = $suma_total_requerido_mensual;
        $this->suma_total_requerido_trimestral = $suma_total_requerido_trimestral;
        $this->suma_total_requerido_mensual_con_oc_consignacion = $suma_total_requerido_mensual_con_oc_consignacion;
        $this->suma_total_requerido_trimestral_con_oc_y_consignacion = $suma_total_requerido_trimestral_con_oc_y_consignacion;
        $this->inventario = $inventario;
        $this->piezas_a_recibir = $piezas_a_recibir;
        $this->disponibilidad_total = $disponibilidad_total;
        $this->piezas_a_solicitar = $piezas_a_solicitar;
        $this->meses_cubiertos = $meses_cubiertos;
        $this->fecha_cubierta = $fecha_cubierta;
        $this->pc_fob = $pc_fob;
        $this->vendedor = $vendedor;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getFecha_corte_rotacion() {
        return $this->fecha_corte_rotacion;
    }

    public function getFecha_ultimo_consumo() {
        return $this->fecha_ultimo_consumo;
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

    public function getPc_fob() {
        return $this->pc_fob;
    }

    public function getVendedor() {
        return $this->vendedor;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setFecha_corte_rotacion($fecha_corte_rotacion) {
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
    }

    public function setFecha_ultimo_consumo($fecha_ultimo_consumo) {
        $this->fecha_ultimo_consumo = $fecha_ultimo_consumo;
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

    public function setPc_fob($pc_fob) {
        $this->pc_fob = $pc_fob;
    }

    public function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }


    
}