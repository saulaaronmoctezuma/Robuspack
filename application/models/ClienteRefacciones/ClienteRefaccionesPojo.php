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
    private $codigo_cuchilla;
    private $cantidad_cuchilla;
    private $precio_cuchilla;
    private $codigo_cubierta;
    private $cantidad_cubierta;
    private $precio_cubierta;
    private $codigo_llanta;
    private $cantidad_llanta;
    private $precio_llanta;
    private $codigo_rasqueta;
    private $cantidad_rasqueta;
    private $precio_rasqueta;
    private $codigo_inserto;
    private $cantidad_inserto;
    private $precio_inserto;
    private $codigo_inserto_2;
    private $cantidad_inserto_2;
    private $precio_inserto_2;
    private $codigo_inserto_3;
    private $cantidad_inserto_3;
    private $precio_inserto_3;
    private $codigo_inserto_4;
    private $cantidad_inserto_4;
    private $precio_inserto_4;
    private $codigo_cuchilla_2;
    private $cantidad_cuchilla_2;
    private $precio_cuchilla_2;
    private $codigo_cuchilla_3;
    private $cantidad_cuchilla_3;
    private $precio_cuchilla_3;
    private $codigo_cuchilla_4;
    private $cantidad_cuchilla_4;
    private $precio_cuchilla_4;
    private $codigo_cuchilla_5;
    private $cantidad_cuchilla_5;
    private $precio_cuchilla_5;
    private $codigo_cuchilla_6;
    private $cantidad_cuchilla_6;
    private $precio_cuchilla_6;
    private $codigo_cuchilla_7;
    private $cantidad_cuchilla_7;
    private $precio_cuchilla_7;
    private $codigo_cuchilla_8;
    private $cantidad_cuchilla_8;
    private $precio_cuchilla_8;
    private $codigo_cuchilla_9;
    private $cantidad_cuchilla_9;
    private $precio_cuchilla_9;
    private $codigo_cuchilla_10;
    private $cantidad_cuchilla_10;
    private $precio_cuchilla_10;
    private $codigo_cuchilla_11;
    private $cantidad_cuchilla_11;
    private $precio_cuchilla_11;

   
    function __construct($id_venta, $grupo, $cliente, $referencia, $cantidad_maxima, $precio_unitario, $vida_util_dias, $periodo_surtimiento, $periodo_surtimiento_vida_util, $cantidad_minima, $paqueteria, $tipo_entrega, $dias_credito, $pulgadas, $diametro_rod_ml, $maquina_cliente, $capacitacion, $capacitacion_fecha, $piezas_juego, $costo_juego, $juego_mensuales, $golpes_prom_comp, $golpes_prom_rodicut, $beneficio_golpes_prom, $tiempo_rot_com, $tiempo_rot_rodicut, $beneficio_rot_prom, $precio_golpe, $ciudad_planta, $observacion, $marca_maquina, $contacto, $tipo_maquina, $formato, $ancho, $troquel, $uso_de_cfdi, $metodo_pago, $fecha_visita, $fecha_seguimiento, $golpes_maquina, $confirmacion_orden_compra, $fecha_ultima_factura, $consumo_real, $archivo, $first_name, $codigo_cuchilla, $cantidad_cuchilla, $precio_cuchilla, $codigo_cubierta, $cantidad_cubierta, $precio_cubierta, $codigo_llanta, $cantidad_llanta, $precio_llanta, $codigo_rasqueta, $cantidad_rasqueta, $precio_rasqueta, $codigo_inserto, $cantidad_inserto, $precio_inserto, $codigo_inserto_2, $cantidad_inserto_2, $precio_inserto_2, $codigo_inserto_3, $cantidad_inserto_3, $precio_inserto_3, $codigo_inserto_4, $cantidad_inserto_4, $precio_inserto_4, $codigo_cuchilla_2, $cantidad_cuchilla_2, $precio_cuchilla_2, $codigo_cuchilla_3, $cantidad_cuchilla_3, $precio_cuchilla_3, $codigo_cuchilla_4, $cantidad_cuchilla_4, $precio_cuchilla_4, $codigo_cuchilla_5, $cantidad_cuchilla_5, $precio_cuchilla_5, $codigo_cuchilla_6, $cantidad_cuchilla_6, $precio_cuchilla_6, $codigo_cuchilla_7, $cantidad_cuchilla_7, $precio_cuchilla_7, $codigo_cuchilla_8, $cantidad_cuchilla_8, $precio_cuchilla_8, $codigo_cuchilla_9, $cantidad_cuchilla_9, $precio_cuchilla_9, $codigo_cuchilla_10, $cantidad_cuchilla_10, $precio_cuchilla_10, $codigo_cuchilla_11, $cantidad_cuchilla_11, $precio_cuchilla_11) {
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
        $this->codigo_cuchilla = $codigo_cuchilla;
        $this->cantidad_cuchilla = $cantidad_cuchilla;
        $this->precio_cuchilla = $precio_cuchilla;
        $this->codigo_cubierta = $codigo_cubierta;
        $this->cantidad_cubierta = $cantidad_cubierta;
        $this->precio_cubierta = $precio_cubierta;
        $this->codigo_llanta = $codigo_llanta;
        $this->cantidad_llanta = $cantidad_llanta;
        $this->precio_llanta = $precio_llanta;
        $this->codigo_rasqueta = $codigo_rasqueta;
        $this->cantidad_rasqueta = $cantidad_rasqueta;
        $this->precio_rasqueta = $precio_rasqueta;
        $this->codigo_inserto = $codigo_inserto;
        $this->cantidad_inserto = $cantidad_inserto;
        $this->precio_inserto = $precio_inserto;
        $this->codigo_inserto_2 = $codigo_inserto_2;
        $this->cantidad_inserto_2 = $cantidad_inserto_2;
        $this->precio_inserto_2 = $precio_inserto_2;
        $this->codigo_inserto_3 = $codigo_inserto_3;
        $this->cantidad_inserto_3 = $cantidad_inserto_3;
        $this->precio_inserto_3 = $precio_inserto_3;
        $this->codigo_inserto_4 = $codigo_inserto_4;
        $this->cantidad_inserto_4 = $cantidad_inserto_4;
        $this->precio_inserto_4 = $precio_inserto_4;
        $this->codigo_cuchilla_2 = $codigo_cuchilla_2;
        $this->cantidad_cuchilla_2 = $cantidad_cuchilla_2;
        $this->precio_cuchilla_2 = $precio_cuchilla_2;
        $this->codigo_cuchilla_3 = $codigo_cuchilla_3;
        $this->cantidad_cuchilla_3 = $cantidad_cuchilla_3;
        $this->precio_cuchilla_3 = $precio_cuchilla_3;
        $this->codigo_cuchilla_4 = $codigo_cuchilla_4;
        $this->cantidad_cuchilla_4 = $cantidad_cuchilla_4;
        $this->precio_cuchilla_4 = $precio_cuchilla_4;
        $this->codigo_cuchilla_5 = $codigo_cuchilla_5;
        $this->cantidad_cuchilla_5 = $cantidad_cuchilla_5;
        $this->precio_cuchilla_5 = $precio_cuchilla_5;
        $this->codigo_cuchilla_6 = $codigo_cuchilla_6;
        $this->cantidad_cuchilla_6 = $cantidad_cuchilla_6;
        $this->precio_cuchilla_6 = $precio_cuchilla_6;
        $this->codigo_cuchilla_7 = $codigo_cuchilla_7;
        $this->cantidad_cuchilla_7 = $cantidad_cuchilla_7;
        $this->precio_cuchilla_7 = $precio_cuchilla_7;
        $this->codigo_cuchilla_8 = $codigo_cuchilla_8;
        $this->cantidad_cuchilla_8 = $cantidad_cuchilla_8;
        $this->precio_cuchilla_8 = $precio_cuchilla_8;
        $this->codigo_cuchilla_9 = $codigo_cuchilla_9;
        $this->cantidad_cuchilla_9 = $cantidad_cuchilla_9;
        $this->precio_cuchilla_9 = $precio_cuchilla_9;
        $this->codigo_cuchilla_10 = $codigo_cuchilla_10;
        $this->cantidad_cuchilla_10 = $cantidad_cuchilla_10;
        $this->precio_cuchilla_10 = $precio_cuchilla_10;
        $this->codigo_cuchilla_11 = $codigo_cuchilla_11;
        $this->cantidad_cuchilla_11 = $cantidad_cuchilla_11;
        $this->precio_cuchilla_11 = $precio_cuchilla_11;
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

    public function getCodigo_cuchilla() {
        return $this->codigo_cuchilla;
    }

    public function getCantidad_cuchilla() {
        return $this->cantidad_cuchilla;
    }

    public function getPrecio_cuchilla() {
        return $this->precio_cuchilla;
    }

    public function getCodigo_cubierta() {
        return $this->codigo_cubierta;
    }

    public function getCantidad_cubierta() {
        return $this->cantidad_cubierta;
    }

    public function getPrecio_cubierta() {
        return $this->precio_cubierta;
    }

    public function getCodigo_llanta() {
        return $this->codigo_llanta;
    }

    public function getCantidad_llanta() {
        return $this->cantidad_llanta;
    }

    public function getPrecio_llanta() {
        return $this->precio_llanta;
    }

    public function getCodigo_rasqueta() {
        return $this->codigo_rasqueta;
    }

    public function getCantidad_rasqueta() {
        return $this->cantidad_rasqueta;
    }

    public function getPrecio_rasqueta() {
        return $this->precio_rasqueta;
    }

    public function getCodigo_inserto() {
        return $this->codigo_inserto;
    }

    public function getCantidad_inserto() {
        return $this->cantidad_inserto;
    }

    public function getPrecio_inserto() {
        return $this->precio_inserto;
    }

    public function getCodigo_inserto_2() {
        return $this->codigo_inserto_2;
    }

    public function getCantidad_inserto_2() {
        return $this->cantidad_inserto_2;
    }

    public function getPrecio_inserto_2() {
        return $this->precio_inserto_2;
    }

    public function getCodigo_inserto_3() {
        return $this->codigo_inserto_3;
    }

    public function getCantidad_inserto_3() {
        return $this->cantidad_inserto_3;
    }

    public function getPrecio_inserto_3() {
        return $this->precio_inserto_3;
    }

    public function getCodigo_inserto_4() {
        return $this->codigo_inserto_4;
    }

    public function getCantidad_inserto_4() {
        return $this->cantidad_inserto_4;
    }

    public function getPrecio_inserto_4() {
        return $this->precio_inserto_4;
    }

    public function getCodigo_cuchilla_2() {
        return $this->codigo_cuchilla_2;
    }

    public function getCantidad_cuchilla_2() {
        return $this->cantidad_cuchilla_2;
    }

    public function getPrecio_cuchilla_2() {
        return $this->precio_cuchilla_2;
    }

    public function getCodigo_cuchilla_3() {
        return $this->codigo_cuchilla_3;
    }

    public function getCantidad_cuchilla_3() {
        return $this->cantidad_cuchilla_3;
    }

    public function getPrecio_cuchilla_3() {
        return $this->precio_cuchilla_3;
    }

    public function getCodigo_cuchilla_4() {
        return $this->codigo_cuchilla_4;
    }

    public function getCantidad_cuchilla_4() {
        return $this->cantidad_cuchilla_4;
    }

    public function getPrecio_cuchilla_4() {
        return $this->precio_cuchilla_4;
    }

    public function getCodigo_cuchilla_5() {
        return $this->codigo_cuchilla_5;
    }

    public function getCantidad_cuchilla_5() {
        return $this->cantidad_cuchilla_5;
    }

    public function getPrecio_cuchilla_5() {
        return $this->precio_cuchilla_5;
    }

    public function getCodigo_cuchilla_6() {
        return $this->codigo_cuchilla_6;
    }

    public function getCantidad_cuchilla_6() {
        return $this->cantidad_cuchilla_6;
    }

    public function getPrecio_cuchilla_6() {
        return $this->precio_cuchilla_6;
    }

    public function getCodigo_cuchilla_7() {
        return $this->codigo_cuchilla_7;
    }

    public function getCantidad_cuchilla_7() {
        return $this->cantidad_cuchilla_7;
    }

    public function getPrecio_cuchilla_7() {
        return $this->precio_cuchilla_7;
    }

    public function getCodigo_cuchilla_8() {
        return $this->codigo_cuchilla_8;
    }

    public function getCantidad_cuchilla_8() {
        return $this->cantidad_cuchilla_8;
    }

    public function getPrecio_cuchilla_8() {
        return $this->precio_cuchilla_8;
    }

    public function getCodigo_cuchilla_9() {
        return $this->codigo_cuchilla_9;
    }

    public function getCantidad_cuchilla_9() {
        return $this->cantidad_cuchilla_9;
    }

    public function getPrecio_cuchilla_9() {
        return $this->precio_cuchilla_9;
    }

    public function getCodigo_cuchilla_10() {
        return $this->codigo_cuchilla_10;
    }

    public function getCantidad_cuchilla_10() {
        return $this->cantidad_cuchilla_10;
    }

    public function getPrecio_cuchilla_10() {
        return $this->precio_cuchilla_10;
    }

    public function getCodigo_cuchilla_11() {
        return $this->codigo_cuchilla_11;
    }

    public function getCantidad_cuchilla_11() {
        return $this->cantidad_cuchilla_11;
    }

    public function getPrecio_cuchilla_11() {
        return $this->precio_cuchilla_11;
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

    public function setCodigo_cuchilla($codigo_cuchilla) {
        $this->codigo_cuchilla = $codigo_cuchilla;
    }

    public function setCantidad_cuchilla($cantidad_cuchilla) {
        $this->cantidad_cuchilla = $cantidad_cuchilla;
    }

    public function setPrecio_cuchilla($precio_cuchilla) {
        $this->precio_cuchilla = $precio_cuchilla;
    }

    public function setCodigo_cubierta($codigo_cubierta) {
        $this->codigo_cubierta = $codigo_cubierta;
    }

    public function setCantidad_cubierta($cantidad_cubierta) {
        $this->cantidad_cubierta = $cantidad_cubierta;
    }

    public function setPrecio_cubierta($precio_cubierta) {
        $this->precio_cubierta = $precio_cubierta;
    }

    public function setCodigo_llanta($codigo_llanta) {
        $this->codigo_llanta = $codigo_llanta;
    }

    public function setCantidad_llanta($cantidad_llanta) {
        $this->cantidad_llanta = $cantidad_llanta;
    }

    public function setPrecio_llanta($precio_llanta) {
        $this->precio_llanta = $precio_llanta;
    }

    public function setCodigo_rasqueta($codigo_rasqueta) {
        $this->codigo_rasqueta = $codigo_rasqueta;
    }

    public function setCantidad_rasqueta($cantidad_rasqueta) {
        $this->cantidad_rasqueta = $cantidad_rasqueta;
    }

    public function setPrecio_rasqueta($precio_rasqueta) {
        $this->precio_rasqueta = $precio_rasqueta;
    }

    public function setCodigo_inserto($codigo_inserto) {
        $this->codigo_inserto = $codigo_inserto;
    }

    public function setCantidad_inserto($cantidad_inserto) {
        $this->cantidad_inserto = $cantidad_inserto;
    }

    public function setPrecio_inserto($precio_inserto) {
        $this->precio_inserto = $precio_inserto;
    }

    public function setCodigo_inserto_2($codigo_inserto_2) {
        $this->codigo_inserto_2 = $codigo_inserto_2;
    }

    public function setCantidad_inserto_2($cantidad_inserto_2) {
        $this->cantidad_inserto_2 = $cantidad_inserto_2;
    }

    public function setPrecio_inserto_2($precio_inserto_2) {
        $this->precio_inserto_2 = $precio_inserto_2;
    }

    public function setCodigo_inserto_3($codigo_inserto_3) {
        $this->codigo_inserto_3 = $codigo_inserto_3;
    }

    public function setCantidad_inserto_3($cantidad_inserto_3) {
        $this->cantidad_inserto_3 = $cantidad_inserto_3;
    }

    public function setPrecio_inserto_3($precio_inserto_3) {
        $this->precio_inserto_3 = $precio_inserto_3;
    }

    public function setCodigo_inserto_4($codigo_inserto_4) {
        $this->codigo_inserto_4 = $codigo_inserto_4;
    }

    public function setCantidad_inserto_4($cantidad_inserto_4) {
        $this->cantidad_inserto_4 = $cantidad_inserto_4;
    }

    public function setPrecio_inserto_4($precio_inserto_4) {
        $this->precio_inserto_4 = $precio_inserto_4;
    }

    public function setCodigo_cuchilla_2($codigo_cuchilla_2) {
        $this->codigo_cuchilla_2 = $codigo_cuchilla_2;
    }

    public function setCantidad_cuchilla_2($cantidad_cuchilla_2) {
        $this->cantidad_cuchilla_2 = $cantidad_cuchilla_2;
    }

    public function setPrecio_cuchilla_2($precio_cuchilla_2) {
        $this->precio_cuchilla_2 = $precio_cuchilla_2;
    }

    public function setCodigo_cuchilla_3($codigo_cuchilla_3) {
        $this->codigo_cuchilla_3 = $codigo_cuchilla_3;
    }

    public function setCantidad_cuchilla_3($cantidad_cuchilla_3) {
        $this->cantidad_cuchilla_3 = $cantidad_cuchilla_3;
    }

    public function setPrecio_cuchilla_3($precio_cuchilla_3) {
        $this->precio_cuchilla_3 = $precio_cuchilla_3;
    }

    public function setCodigo_cuchilla_4($codigo_cuchilla_4) {
        $this->codigo_cuchilla_4 = $codigo_cuchilla_4;
    }

    public function setCantidad_cuchilla_4($cantidad_cuchilla_4) {
        $this->cantidad_cuchilla_4 = $cantidad_cuchilla_4;
    }

    public function setPrecio_cuchilla_4($precio_cuchilla_4) {
        $this->precio_cuchilla_4 = $precio_cuchilla_4;
    }

    public function setCodigo_cuchilla_5($codigo_cuchilla_5) {
        $this->codigo_cuchilla_5 = $codigo_cuchilla_5;
    }

    public function setCantidad_cuchilla_5($cantidad_cuchilla_5) {
        $this->cantidad_cuchilla_5 = $cantidad_cuchilla_5;
    }

    public function setPrecio_cuchilla_5($precio_cuchilla_5) {
        $this->precio_cuchilla_5 = $precio_cuchilla_5;
    }

    public function setCodigo_cuchilla_6($codigo_cuchilla_6) {
        $this->codigo_cuchilla_6 = $codigo_cuchilla_6;
    }

    public function setCantidad_cuchilla_6($cantidad_cuchilla_6) {
        $this->cantidad_cuchilla_6 = $cantidad_cuchilla_6;
    }

    public function setPrecio_cuchilla_6($precio_cuchilla_6) {
        $this->precio_cuchilla_6 = $precio_cuchilla_6;
    }

    public function setCodigo_cuchilla_7($codigo_cuchilla_7) {
        $this->codigo_cuchilla_7 = $codigo_cuchilla_7;
    }

    public function setCantidad_cuchilla_7($cantidad_cuchilla_7) {
        $this->cantidad_cuchilla_7 = $cantidad_cuchilla_7;
    }

    public function setPrecio_cuchilla_7($precio_cuchilla_7) {
        $this->precio_cuchilla_7 = $precio_cuchilla_7;
    }

    public function setCodigo_cuchilla_8($codigo_cuchilla_8) {
        $this->codigo_cuchilla_8 = $codigo_cuchilla_8;
    }

    public function setCantidad_cuchilla_8($cantidad_cuchilla_8) {
        $this->cantidad_cuchilla_8 = $cantidad_cuchilla_8;
    }

    public function setPrecio_cuchilla_8($precio_cuchilla_8) {
        $this->precio_cuchilla_8 = $precio_cuchilla_8;
    }

    public function setCodigo_cuchilla_9($codigo_cuchilla_9) {
        $this->codigo_cuchilla_9 = $codigo_cuchilla_9;
    }

    public function setCantidad_cuchilla_9($cantidad_cuchilla_9) {
        $this->cantidad_cuchilla_9 = $cantidad_cuchilla_9;
    }

    public function setPrecio_cuchilla_9($precio_cuchilla_9) {
        $this->precio_cuchilla_9 = $precio_cuchilla_9;
    }

    public function setCodigo_cuchilla_10($codigo_cuchilla_10) {
        $this->codigo_cuchilla_10 = $codigo_cuchilla_10;
    }

    public function setCantidad_cuchilla_10($cantidad_cuchilla_10) {
        $this->cantidad_cuchilla_10 = $cantidad_cuchilla_10;
    }

    public function setPrecio_cuchilla_10($precio_cuchilla_10) {
        $this->precio_cuchilla_10 = $precio_cuchilla_10;
    }

    public function setCodigo_cuchilla_11($codigo_cuchilla_11) {
        $this->codigo_cuchilla_11 = $codigo_cuchilla_11;
    }

    public function setCantidad_cuchilla_11($cantidad_cuchilla_11) {
        $this->cantidad_cuchilla_11 = $cantidad_cuchilla_11;
    }

    public function setPrecio_cuchilla_11($precio_cuchilla_11) {
        $this->precio_cuchilla_11 = $precio_cuchilla_11;
    }


    
    
}