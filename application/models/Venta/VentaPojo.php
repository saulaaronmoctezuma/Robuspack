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
 */

/**
 * Description of VentaPojo
 *
 * @author 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
 */
class VentaPojo {
  private $id_venta;
  private $grupo;
  private $cliente;
  private $referencia;
  private $cantidad_maxima;
  private $precio_unitario;
  private $periodo_surtimiento;
  private $cantidad_minima;
  private $paqueteria;
  private $tipo_entrega;
  private $dias_credito;
  private $pulgadas;
  private $maquina_cliente;
  private $capacitacion;
  private $capacitacion_fecha;
  private $piezas_juego;
  private $costo_juego;
  private $juego_mensuales;
  private $golpes_prom_comp;
  private $golpes_prom_rodicut;
  private $beneficio_golpes_prom;
  private $tiempo_rot_com;
  private $tiempo_rot_rodicut;
  private $beneficio_rot_prom;
  private $precio_golpe;
  private $ciudad_planta;
  private $observacion;
  private $contacto;
  private $tipo_maquina;
  private $troquel;
  private $uso_de_cfdi;
  private $metodo_pago;
  private $forma_pago;
  private $fecha_visita;
  private $fecha_seguimiento;
  private $golpes_maquina;
 
<<<<<<< HEAD
  function __construct($id_venta, $grupo, $cliente, $referencia, $cantidad_maxima, $precio_unitario, $periodo_surtimiento, $cantidad_minima, $paqueteria, $tipo_entrega, $dias_credito, $pulgadas, $maquina_cliente, $capacitacion, $capacitacion_fecha, $piezas_juego, $costo_juego, $juego_mensuales, $golpes_prom_comp, $golpes_prom_rodicut, $beneficio_golpes_prom, $tiempo_rot_com, $tiempo_rot_rodicut, $beneficio_rot_prom, $precio_golpe, $ciudad_planta, $observacion, $contacto, $tipo_maquina, $troquel, $uso_de_cfdi, $metodo_pago, $forma_pago, $fecha_visita, $fecha_seguimiento, $golpes_maquina) {
      $this->id_venta = $id_venta;
      $this->grupo = $grupo;
      $this->cliente = $cliente;
      $this->referencia = $referencia;
      $this->cantidad_maxima = $cantidad_maxima;
      $this->precio_unitario = $precio_unitario;
      $this->periodo_surtimiento = $periodo_surtimiento;
      $this->cantidad_minima = $cantidad_minima;
      $this->paqueteria = $paqueteria;
      $this->tipo_entrega = $tipo_entrega;
      $this->dias_credito = $dias_credito;
      $this->pulgadas = $pulgadas;
      $this->maquina_cliente = $maquina_cliente;
      $this->capacitacion = $capacitacion;
      $this->capacitacion_fecha = $capacitacion_fecha;
      $this->piezas_juego = $piezas_juego;
      $this->costo_juego = $costo_juego;
      $this->juego_mensuales = $juego_mensuales;
      $this->golpes_prom_comp = $golpes_prom_comp;
      $this->golpes_prom_rodicut = $golpes_prom_rodicut;
      $this->beneficio_golpes_prom = $beneficio_golpes_prom;
      $this->tiempo_rot_com = $tiempo_rot_com;
      $this->tiempo_rot_rodicut = $tiempo_rot_rodicut;
      $this->beneficio_rot_prom = $beneficio_rot_prom;
      $this->precio_golpe = $precio_golpe;
      $this->ciudad_planta = $ciudad_planta;
      $this->observacion = $observacion;
      $this->contacto = $contacto;
      $this->tipo_maquina = $tipo_maquina;
      $this->troquel = $troquel;
      $this->uso_de_cfdi = $uso_de_cfdi;
      $this->metodo_pago = $metodo_pago;
      $this->forma_pago = $forma_pago;
      $this->fecha_visita = $fecha_visita;
      $this->fecha_seguimiento = $fecha_seguimiento;
      $this->golpes_maquina = $golpes_maquina;
  }

  function getId_venta() {
      return $this->id_venta;
  }

  function getGrupo() {
      return $this->grupo;
  }

  function getCliente() {
      return $this->cliente;
  }

  function getReferencia() {
      return $this->referencia;
  }

  function getCantidad_maxima() {
      return $this->cantidad_maxima;
  }

  function getPrecio_unitario() {
      return $this->precio_unitario;
  }

  function getPeriodo_surtimiento() {
      return $this->periodo_surtimiento;
  }

  function getCantidad_minima() {
      return $this->cantidad_minima;
  }

  function getPaqueteria() {
      return $this->paqueteria;
  }

  function getTipo_entrega() {
      return $this->tipo_entrega;
  }

  function getDias_credito() {
      return $this->dias_credito;
  }

  function getPulgadas() {
      return $this->pulgadas;
  }

  function getMaquina_cliente() {
      return $this->maquina_cliente;
  }

  function getCapacitacion() {
      return $this->capacitacion;
  }

  function getCapacitacion_fecha() {
      return $this->capacitacion_fecha;
  }

  function getPiezas_juego() {
      return $this->piezas_juego;
  }

  function getCosto_juego() {
      return $this->costo_juego;
  }

  function getJuego_mensuales() {
      return $this->juego_mensuales;
  }

  function getGolpes_prom_comp() {
      return $this->golpes_prom_comp;
  }

  function getGolpes_prom_rodicut() {
      return $this->golpes_prom_rodicut;
  }

  function getBeneficio_golpes_prom() {
      return $this->beneficio_golpes_prom;
  }

  function getTiempo_rot_com() {
      return $this->tiempo_rot_com;
  }

  function getTiempo_rot_rodicut() {
      return $this->tiempo_rot_rodicut;
  }

  function getBeneficio_rot_prom() {
      return $this->beneficio_rot_prom;
  }

  function getPrecio_golpe() {
      return $this->precio_golpe;
  }

  function getCiudad_planta() {
      return $this->ciudad_planta;
  }

  function getObservacion() {
      return $this->observacion;
  }

  function getContacto() {
      return $this->contacto;
  }

  function getTipo_maquina() {
      return $this->tipo_maquina;
  }

  function getTroquel() {
      return $this->troquel;
  }

  function getUso_de_cfdi() {
      return $this->uso_de_cfdi;
  }

  function getMetodo_pago() {
      return $this->metodo_pago;
  }

  function getForma_pago() {
      return $this->forma_pago;
  }

  function getFecha_visita() {
      return $this->fecha_visita;
  }

  function getFecha_seguimiento() {
      return $this->fecha_seguimiento;
  }

  function getGolpes_maquina() {
      return $this->golpes_maquina;
  }

  function setId_venta($id_venta) {
      $this->id_venta = $id_venta;
  }

  function setGrupo($grupo) {
      $this->grupo = $grupo;
  }

  function setCliente($cliente) {
      $this->cliente = $cliente;
  }

  function setReferencia($referencia) {
      $this->referencia = $referencia;
  }

  function setCantidad_maxima($cantidad_maxima) {
      $this->cantidad_maxima = $cantidad_maxima;
  }

  function setPrecio_unitario($precio_unitario) {
      $this->precio_unitario = $precio_unitario;
  }

  function setPeriodo_surtimiento($periodo_surtimiento) {
      $this->periodo_surtimiento = $periodo_surtimiento;
  }

  function setCantidad_minima($cantidad_minima) {
      $this->cantidad_minima = $cantidad_minima;
  }

  function setPaqueteria($paqueteria) {
      $this->paqueteria = $paqueteria;
  }

  function setTipo_entrega($tipo_entrega) {
      $this->tipo_entrega = $tipo_entrega;
  }

  function setDias_credito($dias_credito) {
      $this->dias_credito = $dias_credito;
  }

  function setPulgadas($pulgadas) {
      $this->pulgadas = $pulgadas;
  }

  function setMaquina_cliente($maquina_cliente) {
      $this->maquina_cliente = $maquina_cliente;
  }

  function setCapacitacion($capacitacion) {
      $this->capacitacion = $capacitacion;
  }

  function setCapacitacion_fecha($capacitacion_fecha) {
      $this->capacitacion_fecha = $capacitacion_fecha;
  }

  function setPiezas_juego($piezas_juego) {
      $this->piezas_juego = $piezas_juego;
  }

  function setCosto_juego($costo_juego) {
      $this->costo_juego = $costo_juego;
  }

  function setJuego_mensuales($juego_mensuales) {
      $this->juego_mensuales = $juego_mensuales;
  }

  function setGolpes_prom_comp($golpes_prom_comp) {
      $this->golpes_prom_comp = $golpes_prom_comp;
  }

  function setGolpes_prom_rodicut($golpes_prom_rodicut) {
      $this->golpes_prom_rodicut = $golpes_prom_rodicut;
  }

  function setBeneficio_golpes_prom($beneficio_golpes_prom) {
      $this->beneficio_golpes_prom = $beneficio_golpes_prom;
  }

  function setTiempo_rot_com($tiempo_rot_com) {
      $this->tiempo_rot_com = $tiempo_rot_com;
  }

  function setTiempo_rot_rodicut($tiempo_rot_rodicut) {
      $this->tiempo_rot_rodicut = $tiempo_rot_rodicut;
  }

  function setBeneficio_rot_prom($beneficio_rot_prom) {
      $this->beneficio_rot_prom = $beneficio_rot_prom;
  }

  function setPrecio_golpe($precio_golpe) {
      $this->precio_golpe = $precio_golpe;
  }

  function setCiudad_planta($ciudad_planta) {
      $this->ciudad_planta = $ciudad_planta;
  }

  function setObservacion($observacion) {
      $this->observacion = $observacion;
  }

  function setContacto($contacto) {
      $this->contacto = $contacto;
  }

  function setTipo_maquina($tipo_maquina) {
      $this->tipo_maquina = $tipo_maquina;
  }

  function setTroquel($troquel) {
      $this->troquel = $troquel;
  }

  function setUso_de_cfdi($uso_de_cfdi) {
      $this->uso_de_cfdi = $uso_de_cfdi;
  }

  function setMetodo_pago($metodo_pago) {
      $this->metodo_pago = $metodo_pago;
  }

  function setForma_pago($forma_pago) {
      $this->forma_pago = $forma_pago;
  }

  function setFecha_visita($fecha_visita) {
      $this->fecha_visita = $fecha_visita;
  }

  function setFecha_seguimiento($fecha_seguimiento) {
      $this->fecha_seguimiento = $fecha_seguimiento;
  }

  function setGolpes_maquina($golpes_maquina) {
      $this->golpes_maquina = $golpes_maquina;
  }

    
 public function __toString() {
        return "id_venta". $this->id_venta;
    }

=======
  
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

}
