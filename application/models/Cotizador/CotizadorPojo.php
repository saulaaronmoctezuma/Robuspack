<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CotizadorPojo
 *
 * @author 
 */
class CotizadorPojo {

    private $id_cotizador;
    private $cliente;
    private $dir_fiscal;
    private $contacto;
    private $tel;
    private $email;
    private $no_refacc;
    private $no_cotizacion;
    private $fech_solicitud;
    private $no_item;
    private $descri_esp;
    private $descri_ingles;
    private $observaciones;
    private $cod_refacc;
    private $modelo_maq;
    private $qty;
    private $pre_uni;
    private $pre_total;
    private $moneda;

    function __construct($id_cotizador, $cliente, $dir_fiscal, $contacto, $tel, $email, $no_refacc, $no_cotizacion, $fech_solicitud, $no_item, $descri_esp, $descri_ingles, $observaciones, $cod_refacc, $modelo_maq, $qty, $pre_uni, $pre_total, $moneda) {
        $this->id_cotizador = $id_cotizador;
        $this->cliente = $cliente;
        $this->dir_fiscal = $dir_fiscal;
        $this->contacto = $contacto;
        $this->tel = $tel;
        $this->email = $email;
        $this->no_refacc = $no_refacc;
        $this->no_cotizacion = $no_cotizacion;
        $this->fech_solicitud = $fech_solicitud;
        $this->no_item = $no_item;
        $this->descri_esp = $descri_esp;
        $this->descri_ingles = $descri_ingles;
        $this->observaciones = $observaciones;
        $this->cod_refacc = $cod_refacc;
        $this->modelo_maq = $modelo_maq;
        $this->qty = $qty;
        $this->pre_uni = $pre_uni;
        $this->pre_total = $pre_total;
        $this->moneda = $moneda;
    }
    function getId_cotizador() {
        return $this->id_cotizador;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getDir_fiscal() {
        return $this->dir_fiscal;
    }

    function getContacto() {
        return $this->contacto;
    }

    function getTel() {
        return $this->tel;
    }

    function getEmail() {
        return $this->email;
    }

    function getNo_refacc() {
        return $this->no_refacc;
    }

    function getNo_cotizacion() {
        return $this->no_cotizacion;
    }

    function getFech_solicitud() {
        return $this->fech_solicitud;
    }

    function getNo_item() {
        return $this->no_item;
    }

    function getDescri_esp() {
        return $this->descri_esp;
    }

    function getDescri_ingles() {
        return $this->descri_ingles;
    }

    function getObservaciones() {
        return $this->observaciones;
    }

    function getCod_refacc() {
        return $this->cod_refacc;
    }

    function getModelo_maq() {
        return $this->modelo_maq;
    }

    function getQty() {
        return $this->qty;
    }

    function getPre_uni() {
        return $this->pre_uni;
    }

    function getPre_total() {
        return $this->pre_total;
    }

    function getMoneda() {
        return $this->moneda;
    }

    function setId_cotizador($id_cotizador) {
        $this->id_cotizador = $id_cotizador;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setDir_fiscal($dir_fiscal) {
        $this->dir_fiscal = $dir_fiscal;
    }

    function setContacto($contacto) {
        $this->contacto = $contacto;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNo_refacc($no_refacc) {
        $this->no_refacc = $no_refacc;
    }

    function setNo_cotizacion($no_cotizacion) {
        $this->no_cotizacion = $no_cotizacion;
    }

    function setFech_solicitud($fech_solicitud) {
        $this->fech_solicitud = $fech_solicitud;
    }

    function setNo_item($no_item) {
        $this->no_item = $no_item;
    }

    function setDescri_esp($descri_esp) {
        $this->descri_esp = $descri_esp;
    }

    function setDescri_ingles($descri_ingles) {
        $this->descri_ingles = $descri_ingles;
    }

    function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    function setCod_refacc($cod_refacc) {
        $this->cod_refacc = $cod_refacc;
    }

    function setModelo_maq($modelo_maq) {
        $this->modelo_maq = $modelo_maq;
    }

    function setQty($qty) {
        $this->qty = $qty;
    }

    function setPre_uni($pre_uni) {
        $this->pre_uni = $pre_uni;
    }

    function setPre_total($pre_total) {
        $this->pre_total = $pre_total;
    }

    function setMoneda($moneda) {
        $this->moneda = $moneda;
    }


}
