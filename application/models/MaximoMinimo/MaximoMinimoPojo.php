<?php


class MaximoMinimoPojo {
    
    private $descripcion;
    private $codigo;
    private $fecha_corte_rotacion;
    private $grupo;
    private $cliente;
    private $cantidad_maxima;
    private $total_requerido_mensual;
    private $total_requerido_trimestral;
    private $total_requerido_mensual_con_or_cons;
    private $total_requerido_trimestral_con_or_cons;
    private $inventario;
    private $piezas_a_recibir;
    private $disponibilidad_total;
    private $piezas_a_solicitar;
    private $meses_cubiertos;
    private $fecha_cubierta;
    private $vendedor;
    
    function __construct($descripcion, $codigo, $fecha_corte_rotacion, $grupo, $cliente, $cantidad_maxima, $total_requerido_mensual, $total_requerido_trimestral, $total_requerido_mensual_con_or_cons, $total_requerido_trimestral_con_or_cons, $inventario, $piezas_a_recibir, $disponibilidad_total, $piezas_a_solicitar, $meses_cubiertos, $fecha_cubierta, $vendedor) {
        $this->descripcion = $descripcion;
        $this->codigo = $codigo;
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
        $this->grupo = $grupo;
        $this->cliente = $cliente;
        $this->cantidad_maxima = $cantidad_maxima;
        $this->total_requerido_mensual = $total_requerido_mensual;
        $this->total_requerido_trimestral = $total_requerido_trimestral;
        $this->total_requerido_mensual_con_or_cons = $total_requerido_mensual_con_or_cons;
        $this->total_requerido_trimestral_con_or_cons = $total_requerido_trimestral_con_or_cons;
        $this->inventario = $inventario;
        $this->piezas_a_recibir = $piezas_a_recibir;
        $this->disponibilidad_total = $disponibilidad_total;
        $this->piezas_a_solicitar = $piezas_a_solicitar;
        $this->meses_cubiertos = $meses_cubiertos;
        $this->fecha_cubierta = $fecha_cubierta;
        $this->vendedor = $vendedor;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getFecha_corte_rotacion() {
        return $this->fecha_corte_rotacion;
    }

    function getGrupo() {
        return $this->grupo;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getCantidad_maxima() {
        return $this->cantidad_maxima;
    }

    function getTotal_requerido_mensual() {
        return $this->total_requerido_mensual;
    }

    function getTotal_requerido_trimestral() {
        return $this->total_requerido_trimestral;
    }

    function getTotal_requerido_mensual_con_or_cons() {
        return $this->total_requerido_mensual_con_or_cons;
    }

    function getTotal_requerido_trimestral_con_or_cons() {
        return $this->total_requerido_trimestral_con_or_cons;
    }

    function getInventario() {
        return $this->inventario;
    }

    function getPiezas_a_recibir() {
        return $this->piezas_a_recibir;
    }

    function getDisponibilidad_total() {
        return $this->disponibilidad_total;
    }

    function getPiezas_a_solicitar() {
        return $this->piezas_a_solicitar;
    }

    function getMeses_cubiertos() {
        return $this->meses_cubiertos;
    }

    function getFecha_cubierta() {
        return $this->fecha_cubierta;
    }

    function getVendedor() {
        return $this->vendedor;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setFecha_corte_rotacion($fecha_corte_rotacion) {
        $this->fecha_corte_rotacion = $fecha_corte_rotacion;
    }

    function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setCantidad_maxima($cantidad_maxima) {
        $this->cantidad_maxima = $cantidad_maxima;
    }

    function setTotal_requerido_mensual($total_requerido_mensual) {
        $this->total_requerido_mensual = $total_requerido_mensual;
    }

    function setTotal_requerido_trimestral($total_requerido_trimestral) {
        $this->total_requerido_trimestral = $total_requerido_trimestral;
    }

    function setTotal_requerido_mensual_con_or_cons($total_requerido_mensual_con_or_cons) {
        $this->total_requerido_mensual_con_or_cons = $total_requerido_mensual_con_or_cons;
    }

    function setTotal_requerido_trimestral_con_or_cons($total_requerido_trimestral_con_or_cons) {
        $this->total_requerido_trimestral_con_or_cons = $total_requerido_trimestral_con_or_cons;
    }

    function setInventario($inventario) {
        $this->inventario = $inventario;
    }

    function setPiezas_a_recibir($piezas_a_recibir) {
        $this->piezas_a_recibir = $piezas_a_recibir;
    }

    function setDisponibilidad_total($disponibilidad_total) {
        $this->disponibilidad_total = $disponibilidad_total;
    }

    function setPiezas_a_solicitar($piezas_a_solicitar) {
        $this->piezas_a_solicitar = $piezas_a_solicitar;
    }

    function setMeses_cubiertos($meses_cubiertos) {
        $this->meses_cubiertos = $meses_cubiertos;
    }

    function setFecha_cubierta($fecha_cubierta) {
        $this->fecha_cubierta = $fecha_cubierta;
    }

    function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }


}