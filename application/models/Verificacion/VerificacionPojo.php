<?php

/**
<!--
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 26/03/2018 Hora 10:15 pm
 * Fecha : Ultimo Cambio 03/0/2019 Hora 10:36 pm
 * Sistema de Control Robuspack
 */

class verificacionPojo {

    private $id;
    private $no_maqui;
    private $modelo;
    private $empresa;
    private $serie;
    private $cliente;
    private $pedimento;
    private $pedimentoodf;
    private $placa;
    private $num_factura;
    private $factura;
    private $refacciones;

    function __construct($id, $no_maqui, $modelo, $empresa, $serie, $cliente, $pedimento, $pedimentoodf, $placa, $num_factura, $factura, $refacciones) {
        $this->id = $id;
        $this->no_maqui = $no_maqui;
        $this->modelo = $modelo;
        $this->empresa = $empresa;
        $this->serie = $serie;
        $this->cliente = $cliente;
        $this->pedimento = $pedimento;
        $this->pedimentoodf = $pedimentoodf;
        $this->placa = $placa;
        $this->num_factura = $num_factura;
        $this->factura = $factura;
        $this->refacciones = $refacciones;
    }

    public function getId() {
        return $this->id;
    }

    public function getNo_maqui() {
        return $this->no_maqui;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function getSerie() {
        return $this->serie;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getPedimento() {
        return $this->pedimento;
    }

    public function getPedimentoodf() {
        return $this->pedimentoodf;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getNum_factura() {
        return $this->num_factura;
    }

    public function getFactura() {
        return $this->factura;
    }

    public function getRefacciones() {
        return $this->refacciones;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNo_maqui($no_maqui) {
        $this->no_maqui = $no_maqui;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setPedimento($pedimento) {
        $this->pedimento = $pedimento;
    }

    public function setPedimentoodf($pedimentoodf) {
        $this->pedimentoodf = $pedimentoodf;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function setNum_factura($num_factura) {
        $this->num_factura = $num_factura;
    }

    public function setFactura($factura) {
        $this->factura = $factura;
    }

    public function setRefacciones($refacciones) {
        $this->refacciones = $refacciones;
    }

}
