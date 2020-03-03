<?php

require 'MaximoMinimoPojo.php';
require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MaximoMinimoModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function getAllSettings() {
        $this->db->select('*');
        $this->db->from('settings');
        return $this->db->get()->row();
    }

    public function getUsers() {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->row();
    }

    public function add($data) {
        $this->db->insert('max_min', $data);
    }

    public function delete($id) {
        $this->db->delete('max_min', array('id_bitacora' => $id));
    }

    public function query() {





        //user data from session
        $data = $this->session->userdata;
        if (empty($data)) {
            redirect(site_url() . 'main/login/');
        }

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
           //$query = $this->db->query('SELECT * from rotacion_inventario_rodrigo1 order by codigo asc');
 //$query = $this->db->query('SELECT * from max_min_prueba_12_11_2019 order by codigo asc');
$query = $this->db->query("select r.codigo,
DATE_FORMAT(r.fecha_corte_rotacion, '%d/%m/%Y') fecha_corte_rotacion
,
DATE_FORMAT(r.pedido_inteligente, '%d/%m%Y') pedido_inteligente
,
r.suma_total_requerido_mensual_con_oc_y_consignacion
, r.suma_total_requerido_trimestral_con_oc_y_consignacion,
r.inventario,r.piezas_a_recibir,
r.piezas_requeridas_con_oc_consig_trimestral, 
r.meses_cubiertos,
DATE_FORMAT(r.fecha_cubierta, '%d/%m%Y' ) fecha_cubierta,
r.total_mensual_sin_oc, r.informativo_prospectacion_mercado, r.pc_fob ,
r.descripcion,r.grupo,r.cliente, r.cantidad_maxima,r.fecha_ultimo_consumo,

r.periodo_surtimiento,
r.fecha_requiere_piezas,
r.suma_total_requerido_mensual,
r.suma_total_requerido_trimestral,
r.piezas_requeridas_con_oc_consig_mensual,
r.disponibilidad_total,
r.piezas_a_solicitar,
r.vendedor,
r.id_usuario, r.id_maquinaria

from max_min_prueba_beta_a_entregar r");
 
            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new MaximoMinimoPojo(
                          $value->descripcion,
                        $value->codigo,
                        $value->fecha_corte_rotacion, 
                        $value->grupo,
                        $value->cliente,
                        $value->cantidad_maxima,
                        $value->fecha_ultimo_consumo,
                        $value->periodo_surtimiento, 
                        $value->fecha_requiere_piezas, 
                        $value->pedido_inteligente,
                        $value->suma_total_requerido_mensual, 
                        $value->suma_total_requerido_trimestral, 
                        $value->suma_total_requerido_mensual_con_oc_y_consignacion,
                        $value->suma_total_requerido_trimestral_con_oc_y_consignacion,
                        $value->piezas_requeridas_con_oc_consig_mensual,
                        $value->piezas_requeridas_con_oc_consig_trimestral,
                        $value->inventario,
                        $value->piezas_a_recibir, 
                        $value->disponibilidad_total,
                        $value->piezas_a_solicitar,
                        $value->meses_cubiertos,
                        $value->fecha_cubierta,
                        $value->vendedor, 
                        $value->id_usuario, 
                        $value->total_mensual_sin_oc, 
                        $value->informativo_prospectacion_mercado,
                        $value->pc_fob,
                        $value->id_maquinaria
                );

                array_push($colMaximoMinimo, $objeto);
            }
            return $colMaximoMinimo;
        } else if ($dataLevel == "is_editor") {
              /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
           //$query = $this->db->query('SELECT * from rotacion_inventario_rodrigo1 order by codigo asc');
 //$query = $this->db->query('SELECT * from max_min_prueba_12_11_2019 order by codigo asc');
$query = $this->db->query("select r.codigo,
DATE_FORMAT(r.fecha_corte_rotacion, '%d/%m/%Y') fecha_corte_rotacion
,
DATE_FORMAT(r.pedido_inteligente, '%d/%m%Y') pedido_inteligente
,
r.suma_total_requerido_mensual_con_oc_y_consignacion
, r.suma_total_requerido_trimestral_con_oc_y_consignacion,
r.inventario,r.piezas_a_recibir,
r.piezas_requeridas_con_oc_consig_trimestral, 
r.meses_cubiertos,
DATE_FORMAT(r.fecha_cubierta, '%d/%m%Y' ) fecha_cubierta,
r.total_mensual_sin_oc, r.informativo_prospectacion_mercado, r.pc_fob ,
r.descripcion,r.grupo,r.cliente, r.cantidad_maxima,r.fecha_ultimo_consumo,

r.periodo_surtimiento,
r.fecha_requiere_piezas,
r.suma_total_requerido_mensual,
r.suma_total_requerido_trimestral,
r.piezas_requeridas_con_oc_consig_mensual,
r.disponibilidad_total,
r.piezas_a_solicitar,
r.vendedor,
r.id_usuario, r.id_maquinaria

from max_min_prueba_beta_a_entregar r");
 
            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new MaximoMinimoPojo(
                          $value->descripcion,
                        $value->codigo,
                        $value->fecha_corte_rotacion, 
                        $value->grupo,
                        $value->cliente,
                        $value->cantidad_maxima,
                        $value->fecha_ultimo_consumo,
                        $value->periodo_surtimiento, 
                        $value->fecha_requiere_piezas, 
                        $value->pedido_inteligente,
                        $value->suma_total_requerido_mensual, 
                        $value->suma_total_requerido_trimestral, 
                        $value->suma_total_requerido_mensual_con_oc_y_consignacion,
                        $value->suma_total_requerido_trimestral_con_oc_y_consignacion,
                        $value->piezas_requeridas_con_oc_consig_mensual,
                        $value->piezas_requeridas_con_oc_consig_trimestral,
                        $value->inventario,
                        $value->piezas_a_recibir, 
                        $value->disponibilidad_total,
                        $value->piezas_a_solicitar,
                        $value->meses_cubiertos,
                        $value->fecha_cubierta,
                        $value->vendedor, 
                        $value->id_usuario, 
                        $value->total_mensual_sin_oc, 
                        $value->informativo_prospectacion_mercado,
                        $value->pc_fob,
                        $value->id_maquinaria
                );

                array_push($colMaximoMinimo, $objeto);
            }
            return $colMaximoMinimo;    
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function update($objeto) {
        
    }

    public function refacciones() {
        
    }

    public function totalRegistroCodigo() {
        $this->db->select('count(codigo) as  codigo');
        $this->db->from('max_min_prueba_beta_a_entregar');
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function querybusqueda() {
        
    }

}
