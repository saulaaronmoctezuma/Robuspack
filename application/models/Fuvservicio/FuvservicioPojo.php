<?php

/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 00/00/0000 Hora 00:00 am/pm
 * Sistema de Control Robuspack
 */

class FuvservicioPojo {

    private $id_fuvservicio;
    private $ref;
    private $cliente;
    private $direccion;
     private $referencia;
    private $codigo;
    private $tipo_de_prod;
    private $rfc;
    private $factura;
    private $facturapdf;
  //  private $remision;
   // private $fecha_de_remision;
    private $orden_compra;
    private $cantidad;
    private $pu_usd;
    private $subtotal;
    private $iva;
    private $total_usd;
    private $fecha;
   // private $pedimento;
   // private $fecha_pedimento;
    private $dias_de_credito;
    private $fecha_vencimiento;
    private $fecha_de_pago;
    private $status_de_pago;
    private $refacturacion;
    private $nueva;
    private $observaciones;
    private $vendedor;
    private $fecha_de_cobro_de_comisiones;
    
    function __construct($id_fuvservicio, $ref, $cliente, $direccion, $referencia, $codigo, $tipo_de_prod, $rfc, $factura, $facturapdf, $orden_compra, $cantidad, $pu_usd, $subtotal, $iva, $total_usd, $fecha, $dias_de_credito, $fecha_vencimiento, $fecha_de_pago, $status_de_pago, $refacturacion, $nueva, $observaciones, $vendedor, $fecha_de_cobro_de_comisiones) {
        $this->id_fuvservicio = $id_fuvservicio;
        $this->ref = $ref;
        $this->cliente = $cliente;
        $this->direccion = $direccion;
        $this->referencia = $referencia;
        $this->codigo = $codigo;
        $this->tipo_de_prod = $tipo_de_prod;
        $this->rfc = $rfc;
        $this->factura = $factura;
        $this->facturapdf = $facturapdf;
        $this->orden_compra = $orden_compra;
        $this->cantidad = $cantidad;
        $this->pu_usd = $pu_usd;
        $this->subtotal = $subtotal;
        $this->iva = $iva;
        $this->total_usd = $total_usd;
        $this->fecha = $fecha;
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

    public function getId_fuvservicio() {
        return $this->id_fuvservicio;
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

    public function getReferencia() {
        return $this->referencia;
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

    public function getOrden_compra() {
        return $this->orden_compra;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getPu_usd() {
        return $this->pu_usd;
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

    public function setId_fuvservicio($id_fuvservicio) {
        $this->id_fuvservicio = $id_fuvservicio;
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

    public function setReferencia($referencia) {
        $this->referencia = $referencia;
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

    public function setOrden_compra($orden_compra) {
        $this->orden_compra = $orden_compra;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setPu_usd($pu_usd) {
        $this->pu_usd = $pu_usd;
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