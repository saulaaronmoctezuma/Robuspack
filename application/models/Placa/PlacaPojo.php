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
class PlacaPojo {
    
     private $id_placa;
     private $no_maquina;
     private $modelo;
     private $serie;
     private $placa;
     private $factura;
     private $cliente;
     private $pedimento;
     
     
     function __construct($id_placa, $no_maquina, $modelo, $serie, $placa, $factura, $cliente, $pedimento) {
         $this->id_placa = $id_placa;
         $this->no_maquina = $no_maquina;
         $this->modelo = $modelo;
         $this->serie = $serie;
         $this->placa = $placa;
         $this->factura = $factura;
         $this->cliente = $cliente;
         $this->pedimento = $pedimento;
     }
     
     
     public function getId_placa() {
         return $this->id_placa;
     }

     public function getNo_maquina() {
         return $this->no_maquina;
     }

     public function getModelo() {
         return $this->modelo;
     }

     public function getSerie() {
         return $this->serie;
     }

     public function getPlaca() {
         return $this->placa;
     }

     public function getFactura() {
         return $this->factura;
     }

     public function getCliente() {
         return $this->cliente;
     }

     public function getPedimento() {
         return $this->pedimento;
     }

     public function setId_placa($id_placa) {
         $this->id_placa = $id_placa;
     }

     public function setNo_maquina($no_maquina) {
         $this->no_maquina = $no_maquina;
     }

     public function setModelo($modelo) {
         $this->modelo = $modelo;
     }

     public function setSerie($serie) {
         $this->serie = $serie;
     }

     public function setPlaca($placa) {
         $this->placa = $placa;
     }

     public function setFactura($factura) {
         $this->factura = $factura;
     }

     public function setCliente($cliente) {
         $this->cliente = $cliente;
     }

     public function setPedimento($pedimento) {
         $this->pedimento = $pedimento;
     }



}
