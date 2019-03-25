<?php

require 'VentaPojo.php';
require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VentaModelo
 *
 * @author 
 */
class VentaModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function add($data) {
        $this->db->insert('venta', $data);
    }

    public function delete($id) {
        $this->db->delete('venta', array('id_venta' => $id));
    }

    public function query() {
        $query = $this->db->get('venta');
        $colVentas = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new VentaPojo(
                    $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario, $value->periodo_surtimiento, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion, $value->contacto, $value->tipo_maquina, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->forma_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina);

            array_push($colVentas, $objeto);
        }
        return $colVentas;
    }

    public function update($venta) {
        if ($venta instanceof VentaPojo) {
            $datos = array(
                "id_venta" => $venta->getId_venta(),
                "grupo" => $venta->getGrupo(),
                "cliente" => $venta->getCliente(),
                "referencia" => $venta->getReferencia(),
                "cantidad_maxima" => $venta->getCantidad_maxima(),
                "precio_unitario" => $venta->getPrecio_unitario(),
                "periodo_surtimiento" => $venta->getPeriodo_surtimiento(),
                "cantidad_minima" => $venta->getCantidad_minima(),
                "paqueteria" => $venta->getPaqueteria(),
                "tipo_entrega" => $venta->getTipo_entrega(),
                "dias_credito" => $venta->getDias_credito(),
                "pulgadas" => $venta->getPulgadas(),
                "maquina_cliente" => $venta->getMaquina_cliente(),
                "capacitacion" => $venta->getCapacitacion(),
                "capacitacion_fecha" => $venta->getCapacitacion_fecha(),
                "piezas_juego" => $venta->getPiezas_juego(),
                "costo_juego" => $venta->getCosto_juego(),
                "juego_mensuales" => $venta->getJuego_mensuales(),
                "golpes_prom_comp" => $venta->getGolpes_prom_comp(),
                "golpes_prom_rodicut" => $venta->getGolpes_prom_rodicut(),
                "beneficio_golpes_prom" => $venta->getBeneficio_golpes_prom(),
                "tiempo_rot_com" => $venta->getTiempo_rot_com(),
                "tiempo_rot_rodicut" => $venta->getTiempo_rot_rodicut(),
                "beneficio_rot_prom" => $venta->getBeneficio_rot_prom(),
                "precio_golpe" => $venta->getPrecio_golpe(),
                "ciudad_planta" => $venta->getCiudad_planta(),
                "observacion" => $venta->getObservacion(),
                "contacto" => $venta->getContacto(),
                "tipo_maquina" => $venta->getTipo_maquina(),
                "troquel" => $venta->getTroquel(),
                "uso_de_cfdi" => $venta->getUso_de_cfdi(),
                "metodo_pago" => $venta->getMetodo_pago(),
                "forma_pago" => $venta->getForma_pago(),
                "fecha_visita" => $venta->getFecha_visita(),
                "fecha_seguimiento" => $venta->getFecha_seguimiento(),
                "golpes_maquina" => $venta->getGolpes_maquina()
            );
            $this->db->where("id_venta", $venta->getId_venta());
            $this->db->update("venta", $datos);
        }
    }

    public function obtener($id_venta) {
        $objj = $this->db->query(" Select * from venta where id_venta = $id_venta ");
        $obj = $objj->row();
        $dp = array('id_venta' => $obj->id_venta,
            'grupo' => $obj->grupo,
            'cliente' => $obj->cliente,
            'referencia' => $obj->referencia,
            'cantidad_maxima' => $obj->cantidad_maxima,
            'precio_unitario' => $obj->precio_unitario,
            'periodo_surtimiento' => $obj->periodo_surtimiento,
            'cantidad_minima' => $obj->cantidad_minima,
            'paqueteria' => $obj->paqueteria,
            'tipo_entrega' => $obj->tipo_entrega,
            'dias_credito' => $obj->dias_credito,
            'pulgadas' => $obj->pulgadas,
            'maquina_cliente' => $obj->maquina_cliente,
            'capacitacion' => $obj->capacitacion,
            'capacitacion_fecha' => $obj->capacitacion_fecha,
            'piezas_juego' => $obj->piezas_juego,
            'costo_juego' => $obj->costo_juego,
            'juego_mensuales' => $obj->juego_mensuales,
            'golpes_prom_comp' => $obj->golpes_prom_comp,
            'golpes_prom_rodicut' => $obj->golpes_prom_rodicut,
            'beneficio_golpes_prom' => $obj->beneficio_golpes_prom,
            'tiempo_rot_com' => $obj->tiempo_rot_com,
            'tiempo_rot_rodicut' => $obj->tiempo_rot_rodicut,
            'beneficio_rot_prom' => $obj->beneficio_rot_prom,
            'precio_golpe' => $obj->precio_golpe,
            'ciudad_planta' => $obj->ciudad_planta,
            'observacion' => $obj->observacion,
            'contacto' => $obj->contacto,
            'tipo_maquina' => $obj->tipo_maquina,
            'troquel' => $obj->troquel,
            'uso_de_cfdi' => $obj->uso_de_cfdi,
            'metodo_pago' => $obj->metodo_pago,
            'forma_pago' => $obj->forma_pago,
            'fecha_visita' => $obj->fecha_visita,
            'fecha_seguimiento' => $obj->fecha_seguimiento,
            'golpes_maquina' => $obj->golpes_maquina
        );
        return $dp;
    }

    public function actualizar($data) {

        $this->db->where('id_venta', $data['id_venta']);
        return $this->db->update('venta', $data);
    }

}
