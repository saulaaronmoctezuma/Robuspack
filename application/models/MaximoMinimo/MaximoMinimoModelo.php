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
            $query = $this->db->query('SELECT * from julio_2019_maximo_minimo order by codigo asc');


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
                        $value->inventario,
                        $value->piezas_a_recibir,
                        $value->disponibilidad_total,
                        $value->piezas_a_solicitar, 
                        $value->meses_cubiertos,
                        $value->fecha_cubierta,
                        $value->vendedor
                );

                array_push($colMaximoMinimo, $objeto);
            }
            return $colMaximoMinimo;
        } else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;

            //consulta la tabla venta
            $query = $this->db->from('mayo_2019_maximo_minimo');

            $query = $this->db->order_by("codigo", "asc");

            //tree los datos de la consulta
            $query = $this->db->get();


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
                        $value->inventario,
                        $value->piezas_a_recibir,
                        $value->disponibilidad_total,
                        $value->piezas_a_solicitar, 
                        $value->meses_cubiertos,
                        $value->fecha_cubierta,
                        $value->vendedor
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
        $this->db->from('julio_2019_maximo_minimo');
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function querybusqueda() {
        
    }

}
