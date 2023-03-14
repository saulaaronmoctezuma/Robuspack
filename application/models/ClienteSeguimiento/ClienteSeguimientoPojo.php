<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteSeguimientoPojo
 *
 * @author Desarrollo.robus
 * 25-06-2019 10:31 am
 */
class ClienteSeguimientoPojo {

     private $id_clienteseguimiento;
    private $cliente;
    private $nivel;
    private $necesidad;
    private $compromiso;
    private $notas;
    private $modelo_maquina;
    private $numero_maquina;
    private $valor_cotizacion;
    private $fecha_ultima_visita;
    private $cotizacion;
    private $pedido;
    private $contrato;
    private $first_name;
    private $fecha_prospeccion;
    private $llamadas_cliente;
    private $fecha_contacto_cliente;
    private $llamdas_hechas;
    private $fecha_ult_llamada;
    private $numero_visitas;
   
    private $ventas_cerrada;
    private $cliente_asignado;
    private $cliente_nuevo;
    
    
    
    
  function __construct($id_clienteseguimiento, $cliente, $nivel, $necesidad, $compromiso, $notas, $modelo_maquina, $numero_maquina, $valor_cotizacion, $fecha_ultima_visita, $cotizacion, $pedido, $contrato, $first_name, $fecha_prospeccion, $llamadas_cliente, $fecha_contacto_cliente, $llamdas_hechas, $fecha_ult_llamada, $numero_visitas, $ventas_cerrada, $cliente_asignado, $cliente_nuevo) {
        $this->id_clienteseguimiento = $id_clienteseguimiento;
        $this->cliente = $cliente;
        $this->nivel = $nivel;
        $this->necesidad = $necesidad;
        $this->compromiso = $compromiso;
        $this->notas = $notas;
        $this->modelo_maquina = $modelo_maquina;
        $this->numero_maquina = $numero_maquina;
        $this->valor_cotizacion = $valor_cotizacion;
        $this->fecha_ultima_visita = $fecha_ultima_visita;
        $this->cotizacion = $cotizacion;
        $this->pedido = $pedido;
        $this->contrato = $contrato;
        $this->first_name = $first_name;
        $this->fecha_prospeccion = $fecha_prospeccion;
        $this->llamadas_cliente = $llamadas_cliente;
        $this->fecha_contacto_cliente = $fecha_contacto_cliente;
        $this->llamdas_hechas = $llamdas_hechas;
        $this->fecha_ult_llamada = $fecha_ult_llamada;
        $this->numero_visitas = $numero_visitas;
        $this->ventas_cerrada = $ventas_cerrada;
        $this->cliente_asignado = $cliente_asignado;
        $this->cliente_nuevo = $cliente_nuevo;
    }
    
    public function getId_clienteseguimiento() {
        return $this->id_clienteseguimiento;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function getNecesidad() {
        return $this->necesidad;
    }

    public function getCompromiso() {
        return $this->compromiso;
    }

    public function getNotas() {
        return $this->notas;
    }

    public function getModelo_maquina() {
        return $this->modelo_maquina;
    }

    public function getNumero_maquina() {
        return $this->numero_maquina;
    }

    public function getValor_cotizacion() {
        return $this->valor_cotizacion;
    }

    public function getFecha_ultima_visita() {
        return $this->fecha_ultima_visita;
    }

    public function getCotizacion() {
        return $this->cotizacion;
    }

    public function getPedido() {
        return $this->pedido;
    }

    public function getContrato() {
        return $this->contrato;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function getFecha_prospeccion() {
        return $this->fecha_prospeccion;
    }

    public function getLlamadas_cliente() {
        return $this->llamadas_cliente;
    }

    public function getFecha_contacto_cliente() {
        return $this->fecha_contacto_cliente;
    }

    public function getLlamdas_hechas() {
        return $this->llamdas_hechas;
    }

    public function getFecha_ult_llamada() {
        return $this->fecha_ult_llamada;
    }

    public function getNumero_visitas() {
        return $this->numero_visitas;
    }

    public function getVentas_cerrada() {
        return $this->ventas_cerrada;
    }

    public function getCliente_asignado() {
        return $this->cliente_asignado;
    }

    public function getCliente_nuevo() {
        return $this->cliente_nuevo;
    }

    public function setId_clienteseguimiento($id_clienteseguimiento) {
        $this->id_clienteseguimiento = $id_clienteseguimiento;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function setNecesidad($necesidad) {
        $this->necesidad = $necesidad;
    }

    public function setCompromiso($compromiso) {
        $this->compromiso = $compromiso;
    }

    public function setNotas($notas) {
        $this->notas = $notas;
    }

    public function setModelo_maquina($modelo_maquina) {
        $this->modelo_maquina = $modelo_maquina;
    }

    public function setNumero_maquina($numero_maquina) {
        $this->numero_maquina = $numero_maquina;
    }

    public function setValor_cotizacion($valor_cotizacion) {
        $this->valor_cotizacion = $valor_cotizacion;
    }

    public function setFecha_ultima_visita($fecha_ultima_visita) {
        $this->fecha_ultima_visita = $fecha_ultima_visita;
    }

    public function setCotizacion($cotizacion) {
        $this->cotizacion = $cotizacion;
    }

    public function setPedido($pedido) {
        $this->pedido = $pedido;
    }

    public function setContrato($contrato) {
        $this->contrato = $contrato;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    public function setFecha_prospeccion($fecha_prospeccion) {
        $this->fecha_prospeccion = $fecha_prospeccion;
    }

    public function setLlamadas_cliente($llamadas_cliente) {
        $this->llamadas_cliente = $llamadas_cliente;
    }

    public function setFecha_contacto_cliente($fecha_contacto_cliente) {
        $this->fecha_contacto_cliente = $fecha_contacto_cliente;
    }

    public function setLlamdas_hechas($llamdas_hechas) {
        $this->llamdas_hechas = $llamdas_hechas;
    }

    public function setFecha_ult_llamada($fecha_ult_llamada) {
        $this->fecha_ult_llamada = $fecha_ult_llamada;
    }

    public function setNumero_visitas($numero_visitas) {
        $this->numero_visitas = $numero_visitas;
    }

    public function setVentas_cerrada($ventas_cerrada) {
        $this->ventas_cerrada = $ventas_cerrada;
    }

    public function setCliente_asignado($cliente_asignado) {
        $this->cliente_asignado = $cliente_asignado;
    }

    public function setCliente_nuevo($cliente_nuevo) {
        $this->cliente_nuevo = $cliente_nuevo;
    }




}
