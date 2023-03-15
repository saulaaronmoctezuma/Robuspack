<?php

/*
<<<<<<< HEAD
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
=======
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
 */

/**
 * Description of EmpresaPojo
 *
 * @author Desarrollo.robus
 */
class EmpresaPojo {
    
    private $id_empresa;
    private $estado;
    private $ciudad;
    private $nombre_empresa;
    private $estatus;
    private $vendedor;
    private $nombre;
    private $cargo;
    private $email;
    private $email2;
    private $email3;
    private $pag_web;
    private $marketing;
    private $tel1;
    private $tel2;
    private $tel3;
    private $direccion;
    private $dom_secundario;
    private $cp;
    private $integrados;
    private $corrugadora;
    private $sheet;
    private $single;
    private $comercializadora;
    private $litografia;
    private $flexos;
    private $volumen;
    private $comentarios;
    private $fech_insercion;
    private $fech_modificacion;
    
    
    function __construct($id_empresa, $estado, $ciudad, $nombre_empresa, $estatus, $vendedor, $nombre, $cargo, $email, $email2, $email3, $pag_web, $marketing, $tel1, $tel2, $tel3, $direccion, $dom_secundario, $cp, $integrados, $corrugadora, $sheet, $single, $comercializadora, $litografia, $flexos, $volumen, $comentarios, $fech_insercion, $fech_modificacion) {
        $this->id_empresa = $id_empresa;
        $this->estado = $estado;
        $this->ciudad = $ciudad;
        $this->nombre_empresa = $nombre_empresa;
        $this->estatus = $estatus;
        $this->vendedor = $vendedor;
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->email = $email;
        $this->email2 = $email2;
        $this->email3 = $email3;
        $this->pag_web = $pag_web;
        $this->marketing = $marketing;
        $this->tel1 = $tel1;
        $this->tel2 = $tel2;
        $this->tel3 = $tel3;
        $this->direccion = $direccion;
        $this->dom_secundario = $dom_secundario;
        $this->cp = $cp;
        $this->integrados = $integrados;
        $this->corrugadora = $corrugadora;
        $this->sheet = $sheet;
        $this->single = $single;
        $this->comercializadora = $comercializadora;
        $this->litografia = $litografia;
        $this->flexos = $flexos;
        $this->volumen = $volumen;
        $this->comentarios = $comentarios;
        $this->fech_insercion = $fech_insercion;
        $this->fech_modificacion = $fech_modificacion;
    }
    
    function getId_empresa() {
        return $this->id_empresa;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getNombre_empresa() {
        return $this->nombre_empresa;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function getVendedor() {
        return $this->vendedor;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getEmail() {
        return $this->email;
    }

    function getEmail2() {
        return $this->email2;
    }

    function getEmail3() {
        return $this->email3;
    }

    function getPag_web() {
        return $this->pag_web;
    }

    function getMarketing() {
        return $this->marketing;
    }

    function getTel1() {
        return $this->tel1;
    }

    function getTel2() {
        return $this->tel2;
    }

    function getTel3() {
        return $this->tel3;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getDom_secundario() {
        return $this->dom_secundario;
    }

    function getCp() {
        return $this->cp;
    }

    function getIntegrados() {
        return $this->integrados;
    }

    function getCorrugadora() {
        return $this->corrugadora;
    }

    function getSheet() {
        return $this->sheet;
    }

    function getSingle() {
        return $this->single;
    }

    function getComercializadora() {
        return $this->comercializadora;
    }

    function getLitografia() {
        return $this->litografia;
    }

    function getFlexos() {
        return $this->flexos;
    }

    function getVolumen() {
        return $this->volumen;
    }

    function getComentarios() {
        return $this->comentarios;
    }

    function getFech_insercion() {
        return $this->fech_insercion;
    }

    function getFech_modificacion() {
        return $this->fech_modificacion;
    }

    function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setNombre_empresa($nombre_empresa) {
        $this->nombre_empresa = $nombre_empresa;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    function setVendedor($vendedor) {
        $this->vendedor = $vendedor;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setEmail2($email2) {
        $this->email2 = $email2;
    }

    function setEmail3($email3) {
        $this->email3 = $email3;
    }

    function setPag_web($pag_web) {
        $this->pag_web = $pag_web;
    }

    function setMarketing($marketing) {
        $this->marketing = $marketing;
    }

    function setTel1($tel1) {
        $this->tel1 = $tel1;
    }

    function setTel2($tel2) {
        $this->tel2 = $tel2;
    }

    function setTel3($tel3) {
        $this->tel3 = $tel3;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setDom_secundario($dom_secundario) {
        $this->dom_secundario = $dom_secundario;
    }

    function setCp($cp) {
        $this->cp = $cp;
    }

    function setIntegrados($integrados) {
        $this->integrados = $integrados;
    }

    function setCorrugadora($corrugadora) {
        $this->corrugadora = $corrugadora;
    }

    function setSheet($sheet) {
        $this->sheet = $sheet;
    }

    function setSingle($single) {
        $this->single = $single;
    }

    function setComercializadora($comercializadora) {
        $this->comercializadora = $comercializadora;
    }

    function setLitografia($litografia) {
        $this->litografia = $litografia;
    }

    function setFlexos($flexos) {
        $this->flexos = $flexos;
    }

    function setVolumen($volumen) {
        $this->volumen = $volumen;
    }

    function setComentarios($comentarios) {
        $this->comentarios = $comentarios;
    }

    function setFech_insercion($fech_insercion) {
        $this->fech_insercion = $fech_insercion;
    }

    function setFech_modificacion($fech_modificacion) {
        $this->fech_modificacion = $fech_modificacion;
    }

}
