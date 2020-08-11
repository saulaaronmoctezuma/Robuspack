<?php

/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 02/09/2019 Hora 11:14 am
 *  Fecha : Ultimo Cambio 12/09/2019 Hora 9:00 am
 *  Fecha : Ultimo Cambio 16/04/2020 Hora 5:19 pm
 */

class FuventasPojo {

    
    
    
    
    
    
    
    private $id_fuventas;
    private $cantidad_registros;
    private $ref;
    private $cliente;
    private $direccion;
    private $codigo;
    private $tipo_de_prod;
    private $rfc;
    private $factura;
    private $facturapdf;
    private $remision;
    private $fecha_de_remision;
    private $orden_compra;
    private $cantidad;
    private $pu_usd;
     private $descuento;
    private $subtotal;
    private $iva;
    private $total_usd;
    private $fecha;
    private $pedimento;
    private $fecha_pedimento;
    private $dias_de_credito;
    private $fecha_vencimiento;
    private $fecha_de_pago;
    private $status_de_pago;
    private $refacturacion;
    private $nueva;
    private $observaciones;
    private $vendedor;
    private $fecha_de_cobro_de_comisiones;

    function __construct($id_fuventas, $cantidad_registros, $ref, $cliente, $direccion, $codigo, $tipo_de_prod, $rfc, $factura, $facturapdf, $remision, $fecha_de_remision, $orden_compra, $cantidad, $pu_usd, $descuento, $subtotal, $iva, $total_usd, $fecha, $pedimento, $fecha_pedimento, $dias_de_credito, $fecha_vencimiento, $fecha_de_pago, $status_de_pago, $refacturacion, $nueva, $observaciones, $vendedor, $fecha_de_cobro_de_comisiones) {
        $this->id_fuventas = $id_fuventas;
        $this->cantidad_registros = $cantidad_registros;
        $this->ref = $ref;
        $this->cliente = $cliente;
        $this->direccion = $direccion;
        $this->codigo = $codigo;
        $this->tipo_de_prod = $tipo_de_prod;
        $this->rfc = $rfc;
        $this->factura = $factura;
        $this->facturapdf = $facturapdf;
        $this->remision = $remision;
        $this->fecha_de_remision = $fecha_de_remision;
        $this->orden_compra = $orden_compra;
        $this->cantidad = $cantidad;
        $this->pu_usd = $pu_usd;
        $this->descuento = $descuento;
        $this->subtotal = $subtotal;
        $this->iva = $iva;
        $this->total_usd = $total_usd;
        $this->fecha = $fecha;
        $this->pedimento = $pedimento;
        $this->fecha_pedimento = $fecha_pedimento;
        $this->dias_de_credito = $dias_de_credito;
        $this->fecha_vencimiento = $fecha_vencimiento;
        $this->fecha_de_pago = $fecha_de_pago;
        $this->status_de_pago = $status_de_pago;
        $this->refacturacion = $refacturacion;
        $this->nueva = $nueva;
        $this->observaciones = $observaciones;
        $this->vendedor = $vendedor;
        $this->fecha_de_cobro_de_comisiones = $fecha_de_cobro_de_comisiones;
    }


    
    public function getId_fuventas() {
        return $this->id_fuventas;
    }

    public function getCantidad_registros() {
        return $this->cantidad_registros;
    }

    public function getRef() {
        return $this->ref;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getTipo_de_prod() {
        return $this->tipo_de_prod;
    }

    public function getRfc() {
        return $this->rfc;
    }

    public function getFactura() {
        return $this->factura;
    }

    public function getFacturapdf() {
        return $this->facturapdf;
    }

    public function getRemision() {
        return $this->remision;
    }

    public function getFecha_de_remision() {
        return $this->fecha_de_remision;
    }

    public function getOrden_compra() {
        return $this->orden_compra;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getPu_usd() {
        return $this->pu_usd;
    }

    public function getDescuento() {
        return $this->descuento;
    }

    public function getSubtotal() {
        return $this->subtotal;
    }

    public function getIva() {
        return $this->iva;
    }

    public function getTotal_usd() {
        return $this->total_usd;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getPedimento() {
        return $this->pedimento;
    }

    public function getFecha_pedimento() {
        return $this->fecha_pedimento;
    }

    public function getDias_de_credito() {
        return $this->dias_de_credito;
    }

    public function getFecha_vencimiento() {
        return $this->fecha_vencimiento;
    }

    public function getFecha_de_pago() {
        return $this->fecha_de_pago;
    }

    public function getStatus_de_pago() {
        return $this->status_de_pago;
    }

    public function getRefacturacion() {
        return $this->refacturacion;
    }

    public function getNueva() {
        return $this->nueva;
    }

    public function getObservaciones() {
        return $this->observaciones;
    }

    public function getVendedor() {
        return $this->vendedor;
    }

    public function getFecha_de_cobro_de_comisiones() {
        return $this->fecha_de_cobro_de_comisiones;
    }

    public function setId_fuventas($id_fuventas) {
        $this->id_fuventas = $id_fuventas;
    }

    public function setCantidad_registros($cantidad_registros) {
        $this->cantidad_registros = $cantidad_registros;
    }

    public function setRef($ref) {
        $this->ref = $ref;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setTipo_de_prod($tipo_de_prod) {
        $this->tipo_de_prod = $tipo_de_prod;
    }

    public function setRfc($rfc) {
        $this->rfc = $rfc;
    }

    public function setFactura($factura) {
        $this->factura = $factura;
    }

    public function setFacturapdf($facturapdf) {
        $this->facturapdf = $facturapdf;
    }

    public function setRemision($remision) {
        $this->remision = $remision;
    }

    public function setFecha_de_remision($fecha_de_remision) {
        $this->fecha_de_remision = $fecha_de_remision;
    }

    public function setOrden_compra($orden_compra) {
        $this->orden_compra = $orden_compra;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setPu_usd($pu_usd) {
        $this->pu_usd = $pu_usd;
    }

    public function setDescuento($descuento) {
        $this->descuento = $descuento;
    }

    public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }

    public function setIva($iva) {
        $this->iva = $iva;
    }

    public function setTotal_usd($total_usd) {
        $this->total_usd = $total_usd;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setPedimento($pedimento) {
        $this->pedimento = $pedimento;
    }

    public function setFecha_pedimento($fecha_pedimento) {
        $this->fecha_pedimento = $fecha_pedimento;
    }

    public function setDias_de_credito($dias_de_credito) {
        $this->dias_de_credito = $dias_de_credito;
    }

    public function setFecha_vencimiento($fecha_vencimiento) {
        $this->fecha_vencimiento = $fecha_vencimiento;
    }

    public function setFecha_de_pago($fecha_de_pago) {
        $this->fecha_de_pago = $fecha_de_pago;
    }

    public function setStatus_de_pago($status_de_pago) {
        $this->status_de_pago = $status_de_pago;
    }

    public function setRefacturacion($refacturacion) {
        $this->refacturacion = $refacturacion;
    }

    public function setNueva($nueva) {
        $this->nueva = $nueva;
    }

    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    public function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }

    public function setFecha_de_cobro_de_comisiones($fecha_de_cobro_de_comisiones) {
        $this->fecha_de_cobro_de_comisiones = $fecha_de_cobro_de_comisiones;
    }


}