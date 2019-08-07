<?php

/**
 * @author  Saul González & Karen González
 * Fecha :  
 * Cambio 16/11/2018 Hora 2:34 pm
 * Ultimo Cambio 04/12/2018 Hora 10:26 pm
 * Sistema de Control Robuspack
 */
class ClienteRefaccionesPojo {

    //Atributos
    private $id_venta;
    private $grupo;
    private $cliente;
    private $referencia;
    private $cantidad_maxima;
    private $precio_unitario;
    private $vida_util_dias;
    private $periodo_surtimiento;
    private $periodo_surtimiento_vida_util;
    private $cantidad_minima;
    private $paqueteria;
    private $tipo_entrega;
    private $dias_credito;
    private $pulgadas;
    private $diametro_rod_ml;
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
    private $marca_maquina;
    private $contacto;
    private $tipo_maquina;
    private $formato;
    private $ancho;
    private $troquel;
    private $uso_de_cfdi;
    private $metodo_pago;
    private $fecha_visita;
    private $fecha_seguimiento;
    private $golpes_maquina;
    private $confirmacion_orden_compra;
   
    private $fecha_ultima_factura;
     private $consumo_real;
     private $archivo;
    private $first_name;

    /* Constructor con campos 
     * 
     */
    function __construct($id_venta, $grupo, $cliente, $referencia, $cantidad_maxima, $precio_unitario, $vida_util_dias, $periodo_surtimiento, $periodo_surtimiento_vida_util, $cantidad_minima, $paqueteria, $tipo_entrega, $dias_credito, $pulgadas, $diametro_rod_ml, $maquina_cliente, $capacitacion, $capacitacion_fecha, $piezas_juego, $costo_juego, $juego_mensuales, $golpes_prom_comp, $golpes_prom_rodicut, $beneficio_golpes_prom, $tiempo_rot_com, $tiempo_rot_rodicut, $beneficio_rot_prom, $precio_golpe, $ciudad_planta, $observacion, $marca_maquina, $contacto, $tipo_maquina, $formato, $ancho, $troquel, $uso_de_cfdi, $metodo_pago, $fecha_visita, $fecha_seguimiento, $golpes_maquina, $confirmacion_orden_compra, $fecha_ultima_factura, $consumo_real, $archivo, $first_name) {
        $this->id_venta = $id_venta;
        $this->grupo = $grupo;
        $this->cliente = $cliente;
        $this->referencia = $referencia;
        $this->cantidad_maxima = $cantidad_maxima;
        $this->precio_unitario = $precio_unitario;
        $this->vida_util_dias = $vida_util_dias;
        $this->periodo_surtimiento = $periodo_surtimiento;
        $this->periodo_surtimiento_vida_util = $periodo_surtimiento_vida_util;
        $this->cantidad_minima = $cantidad_minima;
        $this->paqueteria = $paqueteria;
        $this->tipo_entrega = $tipo_entrega;
        $this->dias_credito = $dias_credito;
        $this->pulgadas = $pulgadas;
        $this->diametro_rod_ml = $diametro_rod_ml;
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
        $this->marca_maquina = $marca_maquina;
        $this->contacto = $contacto;
        $this->tipo_maquina = $tipo_maquina;
        $this->formato = $formato;
        $this->ancho = $ancho;
        $this->troquel = $troquel;
        $this->uso_de_cfdi = $uso_de_cfdi;
        $this->metodo_pago = $metodo_pago;
        $this->fecha_visita = $fecha_visita;
        $this->fecha_seguimiento = $fecha_seguimiento;
        $this->golpes_maquina = $golpes_maquina;
        $this->confirmacion_orden_compra = $confirmacion_orden_compra;
        $this->fecha_ultima_factura = $fecha_ultima_factura;
        $this->consumo_real = $consumo_real;
        $this->archivo = $archivo;
        $this->first_name = $first_name;
    }

    public function getId_venta() {
        return $this->id_venta;
    }

    public function getGrupo() {
        return $this->grupo;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getReferencia() {
        return $this->referencia;
    }

    public function getCantidad_maxima() {
        return $this->cantidad_maxima;
    }

    public function getPrecio_unitario() {
        return $this->precio_unitario;
    }

    public function getVida_util_dias() {
        return $this->vida_util_dias;
    }

    public function getPeriodo_surtimiento() {
        return $this->periodo_surtimiento;
    }

    public function getPeriodo_surtimiento_vida_util() {
        return $this->periodo_surtimiento_vida_util;
    }

    public function getCantidad_minima() {
        return $this->cantidad_minima;
    }

    public function getPaqueteria() {
        return $this->paqueteria;
    }

    public function getTipo_entrega() {
        return $this->tipo_entrega;
    }

    public function getDias_credito() {
        return $this->dias_credito;
    }

    public function getPulgadas() {
        return $this->pulgadas;
    }

    public function getDiametro_rod_ml() {
        return $this->diametro_rod_ml;
    }

    public function getMaquina_cliente() {
        return $this->maquina_cliente;
    }

    public function getCapacitacion() {
        return $this->capacitacion;
    }

    public function getCapacitacion_fecha() {
        return $this->capacitacion_fecha;
    }

    public function getPiezas_juego() {
        return $this->piezas_juego;
    }

    public function getCosto_juego() {
        return $this->costo_juego;
    }

    public function getJuego_mensuales() {
        return $this->juego_mensuales;
    }

    public function getGolpes_prom_comp() {
        return $this->golpes_prom_comp;
    }

    public function getGolpes_prom_rodicut() {
        return $this->golpes_prom_rodicut;
    }

    public function getBeneficio_golpes_prom() {
        return $this->beneficio_golpes_prom;
    }

    public function getTiempo_rot_com() {
        return $this->tiempo_rot_com;
    }

    public function getTiempo_rot_rodicut() {
        return $this->tiempo_rot_rodicut;
    }

    public function getBeneficio_rot_prom() {
        return $this->beneficio_rot_prom;
    }

    public function getPrecio_golpe() {
        return $this->precio_golpe;
    }

    public function getCiudad_planta() {
        return $this->ciudad_planta;
    }

    public function getObservacion() {
        return $this->observacion;
    }

    public function getMarca_maquina() {
        return $this->marca_maquina;
    }

    public function getContacto() {
        return $this->contacto;
    }

    public function getTipo_maquina() {
        return $this->tipo_maquina;
    }

    public function getFormato() {
        return $this->formato;
    }

    public function getAncho() {
        return $this->ancho;
    }

    public function getTroquel() {
        return $this->troquel;
    }

    public function getUso_de_cfdi() {
        return $this->uso_de_cfdi;
    }

    public function getMetodo_pago() {
        return $this->metodo_pago;
    }

    public function getFecha_visita() {
        return $this->fecha_visita;
    }

    public function getFecha_seguimiento() {
        return $this->fecha_seguimiento;
    }

    public function getGolpes_maquina() {
        return $this->golpes_maquina;
    }

    public function getConfirmacion_orden_compra() {
        return $this->confirmacion_orden_compra;
    }

    public function getFecha_ultima_factura() {
        return $this->fecha_ultima_factura;
    }

    public function getConsumo_real() {
        return $this->consumo_real;
    }

    public function getArchivo() {
        return $this->archivo;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function setId_venta($id_venta) {
        $this->id_venta = $id_venta;
    }

    public function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    public function setCantidad_maxima($cantidad_maxima) {
        $this->cantidad_maxima = $cantidad_maxima;
    }

    public function setPrecio_unitario($precio_unitario) {
        $this->precio_unitario = $precio_unitario;
    }

    public function setVida_util_dias($vida_util_dias) {
        $this->vida_util_dias = $vida_util_dias;
    }

    public function setPeriodo_surtimiento($periodo_surtimiento) {
        $this->periodo_surtimiento = $periodo_surtimiento;
    }

    public function setPeriodo_surtimiento_vida_util($periodo_surtimiento_vida_util) {
        $this->periodo_surtimiento_vida_util = $periodo_surtimiento_vida_util;
    }

    public function setCantidad_minima($cantidad_minima) {
        $this->cantidad_minima = $cantidad_minima;
    }

    public function setPaqueteria($paqueteria) {
        $this->paqueteria = $paqueteria;
    }

    public function setTipo_entrega($tipo_entrega) {
        $this->tipo_entrega = $tipo_entrega;
    }

    public function setDias_credito($dias_credito) {
        $this->dias_credito = $dias_credito;
    }

    public function setPulgadas($pulgadas) {
        $this->pulgadas = $pulgadas;
    }

    public function setDiametro_rod_ml($diametro_rod_ml) {
        $this->diametro_rod_ml = $diametro_rod_ml;
    }

    public function setMaquina_cliente($maquina_cliente) {
        $this->maquina_cliente = $maquina_cliente;
    }

    public function setCapacitacion($capacitacion) {
        $this->capacitacion = $capacitacion;
    }

    public function setCapacitacion_fecha($capacitacion_fecha) {
        $this->capacitacion_fecha = $capacitacion_fecha;
    }

    public function setPiezas_juego($piezas_juego) {
        $this->piezas_juego = $piezas_juego;
    }

    public function setCosto_juego($costo_juego) {
        $this->costo_juego = $costo_juego;
    }

    public function setJuego_mensuales($juego_mensuales) {
        $this->juego_mensuales = $juego_mensuales;
    }

    public function setGolpes_prom_comp($golpes_prom_comp) {
        $this->golpes_prom_comp = $golpes_prom_comp;
    }

    public function setGolpes_prom_rodicut($golpes_prom_rodicut) {
        $this->golpes_prom_rodicut = $golpes_prom_rodicut;
    }

    public function setBeneficio_golpes_prom($beneficio_golpes_prom) {
        $this->beneficio_golpes_prom = $beneficio_golpes_prom;
    }

    public function setTiempo_rot_com($tiempo_rot_com) {
        $this->tiempo_rot_com = $tiempo_rot_com;
    }

    public function setTiempo_rot_rodicut($tiempo_rot_rodicut) {
        $this->tiempo_rot_rodicut = $tiempo_rot_rodicut;
    }

    public function setBeneficio_rot_prom($beneficio_rot_prom) {
        $this->beneficio_rot_prom = $beneficio_rot_prom;
    }

    public function setPrecio_golpe($precio_golpe) {
        $this->precio_golpe = $precio_golpe;
    }

    public function setCiudad_planta($ciudad_planta) {
        $this->ciudad_planta = $ciudad_planta;
    }

    public function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    public function setMarca_maquina($marca_maquina) {
        $this->marca_maquina = $marca_maquina;
    }

    public function setContacto($contacto) {
        $this->contacto = $contacto;
    }

    public function setTipo_maquina($tipo_maquina) {
        $this->tipo_maquina = $tipo_maquina;
    }

    public function setFormato($formato) {
        $this->formato = $formato;
    }

    public function setAncho($ancho) {
        $this->ancho = $ancho;
    }

    public function setTroquel($troquel) {
        $this->troquel = $troquel;
    }

    public function setUso_de_cfdi($uso_de_cfdi) {
        $this->uso_de_cfdi = $uso_de_cfdi;
    }

    public function setMetodo_pago($metodo_pago) {
        $this->metodo_pago = $metodo_pago;
    }

    public function setFecha_visita($fecha_visita) {
        $this->fecha_visita = $fecha_visita;
    }

    public function setFecha_seguimiento($fecha_seguimiento) {
        $this->fecha_seguimiento = $fecha_seguimiento;
    }

    public function setGolpes_maquina($golpes_maquina) {
        $this->golpes_maquina = $golpes_maquina;
    }

    public function setConfirmacion_orden_compra($confirmacion_orden_compra) {
        $this->confirmacion_orden_compra = $confirmacion_orden_compra;
    }

    public function setFecha_ultima_factura($fecha_ultima_factura) {
        $this->fecha_ultima_factura = $fecha_ultima_factura;
    }

    public function setConsumo_real($consumo_real) {
        $this->consumo_real = $consumo_real;
    }

    public function setArchivo($archivo) {
        $this->archivo = $archivo;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }


}