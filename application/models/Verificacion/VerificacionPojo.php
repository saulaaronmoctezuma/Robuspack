<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CatalogoVenTecPojo
 *
 * @author Desarrollo.robus
 */
class verificacionPojo {

    private $id;
    private $no_maqui;
    private $modelo;
    private $serie;
    private $cliente;
    private $pedimento;
    private $placa;
    private $factura;

    function __construct($id, $no_maqui, $modelo, $serie, $cliente, $pedimento, $placa, $factura) {
        $this->id = $id;
        $this->no_maqui = $no_maqui;
        $this->modelo = $modelo;
        $this->serie = $serie;
        $this->cliente = $cliente;
        $this->pedimento = $pedimento;
        $this->placa = $placa;
        $this->factura = $factura;
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

    public function getSerie() {
        return $this->serie;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getPedimento() {
        return $this->pedimento;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getFactura() {
        return $this->factura;
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

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setPedimento($pedimento) {
        $this->pedimento = $pedimento;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function setFactura($factura) {
        $this->factura = $factura;
    }


    
    

}
