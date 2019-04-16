<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación
 * Fecha: 11-04-2019 10:19 am"
 */


class RecoleccionDatosPojo {

    private $id_recolecion_datos;
    private $identificador;
    private $nombre_empresa;
    private $estado;
    private $ciudad;
    private $domicilio;
    private $nombre;
    private $cargo;
    private $email;
    private $tel;
    private $nombre2;
    private $cargo2;
    private $email2;
    private $tel2;
    private $comentarios;
    private $first_name;
    
    function __construct($id_recolecion_datos, $identificador, $nombre_empresa, $estado, $ciudad, $domicilio, $nombre, $cargo, $email, $tel, $nombre2, $cargo2, $email2, $tel2, $comentarios, $first_name) {
        $this->id_recolecion_datos = $id_recolecion_datos;
        $this->identificador = $identificador;
        $this->nombre_empresa = $nombre_empresa;
        $this->estado = $estado;
        $this->ciudad = $ciudad;
        $this->domicilio = $domicilio;
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->email = $email;
        $this->tel = $tel;
        $this->nombre2 = $nombre2;
        $this->cargo2 = $cargo2;
        $this->email2 = $email2;
        $this->tel2 = $tel2;
        $this->comentarios = $comentarios;
        $this->first_name = $first_name;
    }

    public function getId_recolecion_datos() {
        return $this->id_recolecion_datos;
    }

    public function getIdentificador() {
        return $this->identificador;
    }

    public function getNombre_empresa() {
        return $this->nombre_empresa;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getNombre2() {
        return $this->nombre2;
    }

    public function getCargo2() {
        return $this->cargo2;
    }

    public function getEmail2() {
        return $this->email2;
    }

    public function getTel2() {
        return $this->tel2;
    }

    public function getComentarios() {
        return $this->comentarios;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function setId_recolecion_datos($id_recolecion_datos) {
        $this->id_recolecion_datos = $id_recolecion_datos;
    }

    public function setIdentificador($identificador) {
        $this->identificador = $identificador;
    }

    public function setNombre_empresa($nombre_empresa) {
        $this->nombre_empresa = $nombre_empresa;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }

    public function setNombre2($nombre2) {
        $this->nombre2 = $nombre2;
    }

    public function setCargo2($cargo2) {
        $this->cargo2 = $cargo2;
    }

    public function setEmail2($email2) {
        $this->email2 = $email2;
    }

    public function setTel2($tel2) {
        $this->tel2 = $tel2;
    }

    public function setComentarios($comentarios) {
        $this->comentarios = $comentarios;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }



    
}
