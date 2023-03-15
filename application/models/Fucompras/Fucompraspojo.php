<?php

/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 11/10/2019 Hora 10:20 am
 */

class FucomprasPojo {

    private $id_fucompras;
    private $cantidad_registros;
    private $ref;
    private $estatus;
    private $compania_importadora;
    private $cliente_proveedor;
    private $awb;
    private $courier;
    private $clave;
    private $tipo_de_prod;
    private $descripcion;
    private $factura;
    private $imn;
    private $ocv;
    private $qty;
    private $pu_usd;
    private $total_usd;
    private $tipo_de_embarque;
    private $tc_pedimento;
    private $importacion_por_partida_pz_mxn;
    private $importacion_por_partida_pz_usd;
    private $impx_unidad;
    private $costo_total_compra_usd_lab_qro;
    private $costo_unitario_compra_usd_lab_qro;
    private $com;
    private $cm;
    private $cm_c;
    private $ent;
    private $pedimento;
    private $fecha_pedimento;
    private $valor_aduana;
    private $arancel_igi;
    private $arancel;
    private $dta;
    private $iva_del_pedimento;
    private $costo_del_flete_mxn;
    private $honorarios_courier;
    private $costo_del_flete_usd;
    private $pv_extra_bajo_ref_x_pz;
    private $utilidad_refx_pz;
    private $utilidad;
    private $observaciones;
    private $fecha_pi;
    private $codigo_arancelario;
    private $factura_proveedor;
    private $pedimentopdf;
    private $honorarios_importacion;
    
    
    function __construct($id_fucompras, $cantidad_registros, $ref, $estatus, $compania_importadora, $cliente_proveedor, $awb, $courier, $clave, $tipo_de_prod, $descripcion, $factura, $imn, $ocv, $qty, $pu_usd, $total_usd, $tipo_de_embarque, $tc_pedimento, $importacion_por_partida_pz_mxn, $importacion_por_partida_pz_usd, $impx_unidad, $costo_total_compra_usd_lab_qro, $costo_unitario_compra_usd_lab_qro, $com, $cm, $cm_c, $ent, $pedimento, $fecha_pedimento, $valor_aduana, $arancel_igi, $arancel, $dta, $iva_del_pedimento, $costo_del_flete_mxn, $honorarios_courier, $costo_del_flete_usd, $pv_extra_bajo_ref_x_pz, $utilidad_refx_pz, $utilidad, $observaciones, $fecha_pi, $codigo_arancelario, $factura_proveedor, $pedimentopdf, $honorarios_importacion) {
        $this->id_fucompras = $id_fucompras;
        $this->cantidad_registros = $cantidad_registros;
        $this->ref = $ref;
        $this->estatus = $estatus;
        $this->compania_importadora = $compania_importadora;
        $this->cliente_proveedor = $cliente_proveedor;
        $this->awb = $awb;
        $this->courier = $courier;
        $this->clave = $clave;
        $this->tipo_de_prod = $tipo_de_prod;
        $this->descripcion = $descripcion;
        $this->factura = $factura;
        $this->imn = $imn;
        $this->ocv = $ocv;
        $this->qty = $qty;
        $this->pu_usd = $pu_usd;
        $this->total_usd = $total_usd;
        $this->tipo_de_embarque = $tipo_de_embarque;
        $this->tc_pedimento = $tc_pedimento;
        $this->importacion_por_partida_pz_mxn = $importacion_por_partida_pz_mxn;
        $this->importacion_por_partida_pz_usd = $importacion_por_partida_pz_usd;
        $this->impx_unidad = $impx_unidad;
        $this->costo_total_compra_usd_lab_qro = $costo_total_compra_usd_lab_qro;
        $this->costo_unitario_compra_usd_lab_qro = $costo_unitario_compra_usd_lab_qro;
        $this->com = $com;
        $this->cm = $cm;
        $this->cm_c = $cm_c;
        $this->ent = $ent;
        $this->pedimento = $pedimento;
        $this->fecha_pedimento = $fecha_pedimento;
        $this->valor_aduana = $valor_aduana;
        $this->arancel_igi = $arancel_igi;
        $this->arancel = $arancel;
        $this->dta = $dta;
        $this->iva_del_pedimento = $iva_del_pedimento;
        $this->costo_del_flete_mxn = $costo_del_flete_mxn;
        $this->honorarios_courier = $honorarios_courier;
        $this->costo_del_flete_usd = $costo_del_flete_usd;
        $this->pv_extra_bajo_ref_x_pz = $pv_extra_bajo_ref_x_pz;
        $this->utilidad_refx_pz = $utilidad_refx_pz;
        $this->utilidad = $utilidad;
        $this->observaciones = $observaciones;
        $this->fecha_pi = $fecha_pi;
        $this->codigo_arancelario = $codigo_arancelario;
        $this->factura_proveedor = $factura_proveedor;
        $this->pedimentopdf = $pedimentopdf;
        $this->honorarios_importacion = $honorarios_importacion;
    }


    public function getId_fucompras() {
        return $this->id_fucompras;
    }

    public function getCantidad_registros() {
        return $this->cantidad_registros;
    }

    public function getRef() {
        return $this->ref;
    }

    public function getEstatus() {
        return $this->estatus;
    }

    public function getCompania_importadora() {
        return $this->compania_importadora;
    }

    public function getCliente_proveedor() {
        return $this->cliente_proveedor;
    }

    public function getAwb() {
        return $this->awb;
    }

    public function getCourier() {
        return $this->courier;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getTipo_de_prod() {
        return $this->tipo_de_prod;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getFactura() {
        return $this->factura;
    }

    public function getImn() {
        return $this->imn;
    }

    public function getOcv() {
        return $this->ocv;
    }

    public function getQty() {
        return $this->qty;
    }

    public function getPu_usd() {
        return $this->pu_usd;
    }

    public function getTotal_usd() {
        return $this->total_usd;
    }

    public function getTipo_de_embarque() {
        return $this->tipo_de_embarque;
    }

    public function getTc_pedimento() {
        return $this->tc_pedimento;
    }

    public function getImportacion_por_partida_pz_mxn() {
        return $this->importacion_por_partida_pz_mxn;
    }

    public function getImportacion_por_partida_pz_usd() {
        return $this->importacion_por_partida_pz_usd;
    }

    public function getImpx_unidad() {
        return $this->impx_unidad;
    }

    public function getCosto_total_compra_usd_lab_qro() {
        return $this->costo_total_compra_usd_lab_qro;
    }

    public function getCosto_unitario_compra_usd_lab_qro() {
        return $this->costo_unitario_compra_usd_lab_qro;
    }

    public function getCom() {
        return $this->com;
    }

    public function getCm() {
        return $this->cm;
    }

    public function getCm_c() {
        return $this->cm_c;
    }

    public function getEnt() {
        return $this->ent;
    }

    public function getPedimento() {
        return $this->pedimento;
    }

    public function getFecha_pedimento() {
        return $this->fecha_pedimento;
    }

    public function getValor_aduana() {
        return $this->valor_aduana;
    }

    public function getArancel_igi() {
        return $this->arancel_igi;
    }

    public function getArancel() {
        return $this->arancel;
    }

    public function getDta() {
        return $this->dta;
    }

    public function getIva_del_pedimento() {
        return $this->iva_del_pedimento;
    }

    public function getCosto_del_flete_mxn() {
        return $this->costo_del_flete_mxn;
    }

    public function getHonorarios_courier() {
        return $this->honorarios_courier;
    }

    public function getCosto_del_flete_usd() {
        return $this->costo_del_flete_usd;
    }

    public function getPv_extra_bajo_ref_x_pz() {
        return $this->pv_extra_bajo_ref_x_pz;
    }

    public function getUtilidad_refx_pz() {
        return $this->utilidad_refx_pz;
    }

    public function getUtilidad() {
        return $this->utilidad;
    }

    public function getObservaciones() {
        return $this->observaciones;
    }

    public function getFecha_pi() {
        return $this->fecha_pi;
    }

    public function getCodigo_arancelario() {
        return $this->codigo_arancelario;
    }

    public function getFactura_proveedor() {
        return $this->factura_proveedor;
    }

    public function getPedimentopdf() {
        return $this->pedimentopdf;
    }

    public function getHonorarios_importacion() {
        return $this->honorarios_importacion;
    }

    public function setId_fucompras($id_fucompras) {
        $this->id_fucompras = $id_fucompras;
    }

    public function setCantidad_registros($cantidad_registros) {
        $this->cantidad_registros = $cantidad_registros;
    }

    public function setRef($ref) {
        $this->ref = $ref;
    }

    public function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    public function setCompania_importadora($compania_importadora) {
        $this->compania_importadora = $compania_importadora;
    }

    public function setCliente_proveedor($cliente_proveedor) {
        $this->cliente_proveedor = $cliente_proveedor;
    }

    public function setAwb($awb) {
        $this->awb = $awb;
    }

    public function setCourier($courier) {
        $this->courier = $courier;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function setTipo_de_prod($tipo_de_prod) {
        $this->tipo_de_prod = $tipo_de_prod;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setFactura($factura) {
        $this->factura = $factura;
    }

    public function setImn($imn) {
        $this->imn = $imn;
    }

    public function setOcv($ocv) {
        $this->ocv = $ocv;
    }

    public function setQty($qty) {
        $this->qty = $qty;
    }

    public function setPu_usd($pu_usd) {
        $this->pu_usd = $pu_usd;
    }

    public function setTotal_usd($total_usd) {
        $this->total_usd = $total_usd;
    }

    public function setTipo_de_embarque($tipo_de_embarque) {
        $this->tipo_de_embarque = $tipo_de_embarque;
    }

    public function setTc_pedimento($tc_pedimento) {
        $this->tc_pedimento = $tc_pedimento;
    }

    public function setImportacion_por_partida_pz_mxn($importacion_por_partida_pz_mxn) {
        $this->importacion_por_partida_pz_mxn = $importacion_por_partida_pz_mxn;
    }

    public function setImportacion_por_partida_pz_usd($importacion_por_partida_pz_usd) {
        $this->importacion_por_partida_pz_usd = $importacion_por_partida_pz_usd;
    }

    public function setImpx_unidad($impx_unidad) {
        $this->impx_unidad = $impx_unidad;
    }

    public function setCosto_total_compra_usd_lab_qro($costo_total_compra_usd_lab_qro) {
        $this->costo_total_compra_usd_lab_qro = $costo_total_compra_usd_lab_qro;
    }

    public function setCosto_unitario_compra_usd_lab_qro($costo_unitario_compra_usd_lab_qro) {
        $this->costo_unitario_compra_usd_lab_qro = $costo_unitario_compra_usd_lab_qro;
    }

    public function setCom($com) {
        $this->com = $com;
    }

    public function setCm($cm) {
        $this->cm = $cm;
    }

    public function setCm_c($cm_c) {
        $this->cm_c = $cm_c;
    }

    public function setEnt($ent) {
        $this->ent = $ent;
    }

    public function setPedimento($pedimento) {
        $this->pedimento = $pedimento;
    }

    public function setFecha_pedimento($fecha_pedimento) {
        $this->fecha_pedimento = $fecha_pedimento;
    }

    public function setValor_aduana($valor_aduana) {
        $this->valor_aduana = $valor_aduana;
    }

    public function setArancel_igi($arancel_igi) {
        $this->arancel_igi = $arancel_igi;
    }

    public function setArancel($arancel) {
        $this->arancel = $arancel;
    }

    public function setDta($dta) {
        $this->dta = $dta;
    }

    public function setIva_del_pedimento($iva_del_pedimento) {
        $this->iva_del_pedimento = $iva_del_pedimento;
    }

    public function setCosto_del_flete_mxn($costo_del_flete_mxn) {
        $this->costo_del_flete_mxn = $costo_del_flete_mxn;
    }

    public function setHonorarios_courier($honorarios_courier) {
        $this->honorarios_courier = $honorarios_courier;
    }

    public function setCosto_del_flete_usd($costo_del_flete_usd) {
        $this->costo_del_flete_usd = $costo_del_flete_usd;
    }

    public function setPv_extra_bajo_ref_x_pz($pv_extra_bajo_ref_x_pz) {
        $this->pv_extra_bajo_ref_x_pz = $pv_extra_bajo_ref_x_pz;
    }

    public function setUtilidad_refx_pz($utilidad_refx_pz) {
        $this->utilidad_refx_pz = $utilidad_refx_pz;
    }

    public function setUtilidad($utilidad) {
        $this->utilidad = $utilidad;
    }

    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    public function setFecha_pi($fecha_pi) {
        $this->fecha_pi = $fecha_pi;
    }

    public function setCodigo_arancelario($codigo_arancelario) {
        $this->codigo_arancelario = $codigo_arancelario;
    }

    public function setFactura_proveedor($factura_proveedor) {
        $this->factura_proveedor = $factura_proveedor;
    }

    public function setPedimentopdf($pedimentopdf) {
        $this->pedimentopdf = $pedimentopdf;
    }

    public function setHonorarios_importacion($honorarios_importacion) {
        $this->honorarios_importacion = $honorarios_importacion;
    }


    
}