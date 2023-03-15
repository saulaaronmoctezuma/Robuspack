<?php

require 'MaxMinPojo.php';
require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MaxMinModelo extends CI_Model implements IModeloAbstracto {

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
            $query = $this->db->query("select r.codigo,
<<<<<<< HEAD
DATE_FORMAT(r.fecha_corte_rotacion, '%d-%m-%Y') fecha_corte_rotacion
,
DATE_FORMAT(r.pedido_inteligente, '%d-%m-%Y') pedido_inteligente
=======
DATE_FORMAT(r.fecha_corte_rotacion, '%d/%m/%Y') fecha_corte_rotacion
,
DATE_FORMAT(r.pedido_inteligente, '%d/%m%Y') pedido_inteligente
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
,
r.suma_total_requerido_mensual_con_oc_y_consignacion
, r.suma_total_requerido_trimestral_con_oc_y_consignacion,
r.inventario,r.piezas_a_recibir,
<<<<<<< HEAD
r.piezas_requeridas_con_oc_consig_trimestral, r.meses_cubiertos,
DATE_FORMAT(r.fecha_cubierta, '%d-%m-%Y' ) fecha_cubierta,
=======
r.piezas_requeridas_con_oc_consig_trimestral, 
r.meses_cubiertos,
DATE_FORMAT(r.fecha_cubierta, '%d/%m%Y' ) fecha_cubierta,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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

<<<<<<< HEAD
from rotacion_inventario_rodrigo r");
=======
from entrega_rotacion_inventario r group by r.codigo");
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new MaxMinPojo(
                        
                        
                        
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
            $query = $this->db->query('SELECT * from rotacion_inventario_rodrigo ');


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new MaxMinPojo(
                        
                        
                        
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
        } else if ($dataLevel == "is_Gerente_Ventas") {
             /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $query = $this->db->query('SELECT * from rotacion_inventario_rodrigo ');


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new MaxMinPojo(
                        
                        
                        
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
        } else if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $query = $this->db->query('SELECT * from rotacion_inventario_rodrigo ');


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new MaxMinPojo(
                        
                        
                        
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

    public function add($objeto) {
        
    }

    public function delete($id) {
        
    }

    public function update($objeto) {
        
    }

    public function refacciones() {
        
    }

    public function totalRequeridoMensual() {
        $this->db->select('SUM(total_mensual_sin_oc) total_requerido_mensual');
<<<<<<< HEAD
        $this->db->from('rotacion_inventario_rodrigo');
=======
        $this->db->from('entrega_rotacion_inventario');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRequeridoTrimestrual() {
        $this->db->select('SUM(informativo_prospectacion_mercado) as total_requerido_trimestral');
<<<<<<< HEAD
        $this->db->from('rotacion_inventario_rodrigo');
=======
        $this->db->from('entrega_rotacion_inventario');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRequeridoMensualOcyCons() {
        $this->db->select('SUM(suma_total_requerido_mensual_con_oc_y_consignacion ) as total_requerido_mensual_con_or_cons');
<<<<<<< HEAD
        $this->db->from('rotacion_inventario_rodrigo');
=======
        $this->db->from('entrega_rotacion_inventario');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRequeridoTrimestrualOcyCons() {
        $this->db->select('SUM(suma_total_requerido_trimestral_con_oc_y_consignacion) as total_requerido_trimestral_con_or_cons');
<<<<<<< HEAD
        $this->db->from('rotacion_inventario_rodrigo');
=======
        $this->db->from('entrega_rotacion_inventario');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $query = $this->db->get();
        return $query->result();
    }

    public function totalInventario() {
        $this->db->select('SUM(inventario) as inventario');
<<<<<<< HEAD
        $this->db->from('rotacion_inventario_rodrigo');
=======
        $this->db->from('entrega_rotacion_inventario');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $query = $this->db->get();
        return $query->result();
    }

    public function totalPiezasRecibir() {
        $this->db->select('SUM(piezas_a_recibir) as piezas_a_recibir');
<<<<<<< HEAD
        $this->db->from('rotacion_inventario_rodrigo');
=======
        $this->db->from('entrega_rotacion_inventario');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $query = $this->db->get();
        return $query->result();
    }

    public function totalDisponibilidadTotal() {
        $this->db->select('SUM(piezas_requeridas_con_oc_consig_mensual) as disponibilidad_total');
<<<<<<< HEAD
        $this->db->from('rotacion_inventario_rodrigo');
=======
        $this->db->from('entrega_rotacion_inventario');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $query = $this->db->get();
        return $query->result();
    }

    public function totalPiezasSolicitar() {
        $this->db->select('SUM(	piezas_requeridas_con_oc_consig_trimestral) as piezas_a_solicitar');
<<<<<<< HEAD
        $this->db->from('rotacion_inventario_rodrigo');
=======
        $this->db->from('entrega_rotacion_inventario');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $query = $this->db->get();
        return $query->result();
    }

    public function querybusqueda() {
        
    }

}
