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
            $query = $this->db->query('SELECT * from maximo_minimo order by codigo asc');

           
        $colMaximoMinimo = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new MaximoMinimoPojo(
                    $value->descripcion, 
                    $value->codigo,
                    $value->fecha_corte_rotacion,
                    $value->grupo,
                    $value->cliente, 
                    $value->cantidad_maxima, 
                    $value->total_requerido_mensual,
                    $value->total_requerido_trimestral,
                    $value->total_requerido_mensual_con_or_cons,
                    $value->total_requerido_trimestral_con_or_cons, 
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
        
        }else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            
            //consulta la tabla venta
            $query = $this->db->from('maximo_minimo');

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
                    $value->total_requerido_mensual,
                    $value->total_requerido_trimestral,
                    $value->total_requerido_mensual_con_or_cons,
                    $value->total_requerido_trimestral_con_or_cons, 
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
    
    
      public function totalRegistroCodigo()
    {
            $this->db->select('count(codigo) as  codigo');
            $this->db->from('rotacion_inventario1');
            //$this->db->where('venta.id= ', 6);
            $query = $this->db->get();
             return $query->result();
        }

}
