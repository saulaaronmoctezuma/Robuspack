<?php

require 'ReporteMaximoMinimoPojo.php';
require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ReporteMaximoMinimoModelo extends CI_Model implements IModeloAbstracto {

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
            $query = $this->db->query('SELECT * from rotacion_inventario_prueba order by codigo desc');


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ReporteMaximoMinimoPojo(
                        $value->codigo, $value->fecha_corte_rotacion, $value->total_requerido_mensual, $value->total_requerido_trimestral, $value->total_requerido_mensual_con_or_cons, $value->total_requerido_trimestral_con_or_cons, $value->inventario, $value->piezas_a_recibir, $value->disponibilidad_total, $value->piezas_a_solicitar, $value->meses_cubiertos, $value->fecha_cubierta, $value->pcfob, $value->vendedor
                );

                array_push($colMaximoMinimo, $objeto);
            }
            return $colMaximoMinimo;
        } else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;

            //consulta la tabla venta
            $query = $this->db->from('rotacion_inventario_prueba');

            $query = $this->db->order_by("codigo", "asc");

            //tree los datos de la consulta
            $query = $this->db->get();


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ReporteMaximoMinimoPojo(
                        $value->codigo, $value->fecha_corte_rotacion, $value->total_requerido_mensual, $value->total_requerido_trimestral, $value->total_requerido_mensual_con_or_cons, $value->total_requerido_trimestral_con_or_cons, $value->inventario, $value->piezas_a_recibir, $value->disponibilidad_total, $value->piezas_a_solicitar, $value->meses_cubiertos, $value->fecha_cubierta, $value->pcfob, $value->vendedor
                );

                array_push($colMaximoMinimo, $objeto);
            }
            return $colMaximoMinimo;
        } else if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;

            //consulta la tabla venta
            $query = $this->db->from('rotacion_inventario_prueba');

            $query = $this->db->order_by("codigo", "asc");

            //tree los datos de la consulta
            $query = $this->db->get();


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ReporteMaximoMinimoPojo(
                        $value->codigo, $value->fecha_corte_rotacion, $value->total_requerido_mensual, $value->total_requerido_trimestral, $value->total_requerido_mensual_con_or_cons, $value->total_requerido_trimestral_con_or_cons, $value->inventario, $value->piezas_a_recibir, $value->disponibilidad_total, $value->piezas_a_solicitar, $value->meses_cubiertos, $value->fecha_cubierta, $value->pcfob, $value->vendedor
                );

                array_push($colMaximoMinimo, $objeto);
            }
            return $colMaximoMinimo;
        } else if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;

            //consulta la tabla venta
            $query = $this->db->from('rotacion_inventario_prueba');

            $query = $this->db->order_by("codigo", "asc");

            //tree los datos de la consulta
            $query = $this->db->get();


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ReporteMaximoMinimoPojo(
                        $value->codigo, $value->fecha_corte_rotacion, $value->total_requerido_mensual, $value->total_requerido_trimestral, $value->total_requerido_mensual_con_or_cons, $value->total_requerido_trimestral_con_or_cons, $value->inventario, $value->piezas_a_recibir, $value->disponibilidad_total, $value->piezas_a_solicitar, $value->meses_cubiertos, $value->fecha_cubierta, $value->pcfob, $value->vendedor
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
        $this->db->select('SUM(total_requerido_mensual) total_requerido_mensual');
        $this->db->from('rotacion_inventario_prueba');
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRequeridoTrimestrual() {
        $this->db->select('SUM(total_requerido_trimestral) as total_requerido_trimestral');
        $this->db->from('rotacion_inventario_prueba');
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRequeridoMensualOcyCons() {
        $this->db->select('SUM(total_requerido_mensual_con_or_cons) as total_requerido_mensual_con_or_cons');
        $this->db->from('rotacion_inventario_prueba');
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRequeridoTrimestrualOcyCons() {
        $this->db->select('SUM(total_requerido_trimestral_con_or_cons) as total_requerido_trimestral_con_or_cons');
        $this->db->from('rotacion_inventario_prueba');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalInventario() {
        $this->db->select('SUM(inventario) as inventario');
        $this->db->from('rotacion_inventario_prueba');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalPiezasRecibir() {
        $this->db->select('SUM(piezas_a_recibir) as piezas_a_recibir');
        $this->db->from('rotacion_inventario_prueba');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalDisponibilidadTotal() {
        $this->db->select('SUM(disponibilidad_total) as disponibilidad_total');
        $this->db->from('rotacion_inventario_prueba');
        $query = $this->db->get();
        return $query->result();
    }
    public function totalPiezasSolicitar() {
        $this->db->select('SUM(piezas_a_solicitar) as piezas_a_solicitar');
        $this->db->from('rotacion_inventario_prueba');
        $query = $this->db->get();
        return $query->result();
    }

}
