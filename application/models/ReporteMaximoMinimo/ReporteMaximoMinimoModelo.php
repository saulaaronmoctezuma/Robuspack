<?php

require 'ReporteMaximoMinimoPojo.php';
require 'IModeloAbstracto.php';
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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
 */

class ReporteMaximoMinimoModelo extends CI_Model implements IModeloAbstracto {

<<<<<<< HEAD
   public function __construct() {
=======
    public function __construct() {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        parent::__construct();

        $this->load->database();
    }
<<<<<<< HEAD
    
      public function getAllSettings()
    {
        $this->db->select('*');
        $this->db->from('settings');
        return $this->db->get()->row();

    }
       public function getUsers()
    {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->row();

    }
    
   
     public function query() {
=======

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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


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
<<<<<<< HEAD
           // $query = $this->db->query('SELECT * from mayo_2019_rotacion_inventario order by codigo desc');
     $query = $this->db->query('SELECT * from rotacion_inventario_propuesta order by codigo desc');

=======
            $query = $this->db->query('SELECT * from mayo_2019_rotacion_inventario order by codigo desc');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ReporteMaximoMinimoPojo(
                        $value->codigo,
                        $value->fecha_corte_rotacion,
                        $value->fecha_ultimo_consumo,
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
                        $value->pc_fob, 
                        $value->vendedor
                );

                array_push($colMaximoMinimo, $objeto);
            }
            return $colMaximoMinimo;
        } else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;

            //consulta la tabla venta
            $query = $this->db->from('mayo_2019_rotacion_inventario');

            $query = $this->db->order_by("codigo", "asc");

            //tree los datos de la consulta
            $query = $this->db->get();


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ReporteMaximoMinimoPojo(
                 $value->codigo,
                        $value->fecha_corte_rotacion,
                        $value->fecha_ultimo_consumo,
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
                        $value->pc_fob, 
                        $value->vendedor);

                array_push($colMaximoMinimo, $objeto);
            }
            return $colMaximoMinimo;
        } else if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;

            //consulta la tabla venta
            $query = $this->db->from('mayo_2019_rotacion_inventario');

            $query = $this->db->order_by("codigo", "asc");

            //tree los datos de la consulta
            $query = $this->db->get();


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ReporteMaximoMinimoPojo(
               $value->codigo,
                        $value->fecha_corte_rotacion,
                        $value->fecha_ultimo_consumo,
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
                        $value->pc_fob, 
                        $value->vendedor );

                array_push($colMaximoMinimo, $objeto);
            }
            return $colMaximoMinimo;
        } else if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;

            //consulta la tabla venta
            $query = $this->db->from('mayo_2019_rotacion_inventario');

            $query = $this->db->order_by("codigo", "asc");

            //tree los datos de la consulta
            $query = $this->db->get();


            $colMaximoMinimo = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ReporteMaximoMinimoPojo(
               $value->codigo,
                        $value->fecha_corte_rotacion,
                        $value->fecha_ultimo_consumo,
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
                        $value->pc_fob, 
                        $value->vendedor);

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
        $this->db->select('SUM(suma_total_requerido_mensual) total_requerido_mensual');
        $this->db->from('mayo_2019_rotacion_inventario');
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRequeridoTrimestrual() {
        $this->db->select('SUM(suma_total_requerido_trimestral) as total_requerido_trimestral');
        $this->db->from('mayo_2019_rotacion_inventario');
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRequeridoMensualOcyCons() {
        $this->db->select('SUM(suma_total_requerido_mensual_con_oc_y_consignacion ) as total_requerido_mensual_con_or_cons');
        $this->db->from('mayo_2019_rotacion_inventario');
        //$this->db->where('venta.id= ', 6);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRequeridoTrimestrualOcyCons() {
        $this->db->select('SUM(suma_total_requerido_trimestral_con_oc_y_consignacion) as total_requerido_trimestral_con_or_cons');
        $this->db->from('mayo_2019_rotacion_inventario');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalInventario() {
        $this->db->select('SUM(inventario) as inventario');
        $this->db->from('mayo_2019_rotacion_inventario');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalPiezasRecibir() {
        $this->db->select('SUM(piezas_a_recibir) as piezas_a_recibir');
        $this->db->from('mayo_2019_rotacion_inventario');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalDisponibilidadTotal() {
        $this->db->select('SUM(disponibilidad_total) as disponibilidad_total');
        $this->db->from('mayo_2019_rotacion_inventario');
        $query = $this->db->get();
        return $query->result();
    }
    public function totalPiezasSolicitar() {
        $this->db->select('SUM(piezas_a_solicitar) as piezas_a_solicitar');
        $this->db->from('mayo_2019_rotacion_inventario');
        $query = $this->db->get();
        return $query->result();
    }

    public function querybusqueda() {
        
    }
<<<<<<< HEAD
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
}
