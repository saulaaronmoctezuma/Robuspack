<?php

require 'ReporteFlexoPojo.php';
require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ReporteFlexoModelo extends CI_Model implements IModeloAbstracto {

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
        
    }

    public function delete($id) {
      
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
            $query = $this->db->query('SELECT * FROM reporte_censo ORDER BY id_censomaquinaria desc ');

           
        $colReporteFlexo = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new ReporteFlexoPojo(
                    $value->id_censomaquinaria, 
                    $value->empresa,
                    $value->empresa_temporal,
                    $value->empresa_concatenada,
                    $value->estado,
                    $value->municipio,
                    $value->troquel,
                    $value->total_de_flexos,
                    $value->id_usuario,
                    $value->nombre_usuario,
                    $value->cliente_robuspack,
                    $value->presencia
                  
              
                    );
            
            array_push($colReporteFlexo, $objeto);
        }
        return $colReporteFlexo;
        
        } else if ($dataLevel == "is_Gerente_Ventas") {
                /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $query = $this->db->query('SELECT * FROM reporte_censo ORDER BY id_censomaquinaria desc ');

           
        $colReporteFlexo = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new ReporteFlexoPojo(
                    $value->id_censomaquinaria, 
                    $value->empresa,
                    $value->empresa_temporal,
                    $value->empresa_concatenada,
                    $value->estado,
                    $value->municipio,
                    $value->troquel,
                    $value->total_de_flexos,
                    $value->id_usuario,
                    $value->nombre_usuario,
                    $value->cliente_robuspack,
                    $value->presencia
                  
              
                    );
            
            array_push($colReporteFlexo, $objeto);
        }
        return $colReporteFlexo;
        
        }else if ($dataLevel == "is_editor") {
               /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $query = $this->db->query('SELECT * FROM reporte_censo ORDER BY id_censomaquinaria desc ');

           
        $colReporteFlexo = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new ReporteFlexoPojo(
                    $value->id_censomaquinaria, 
                    $value->empresa,
                    $value->empresa_temporal,
                    $value->empresa_concatenada,
                    $value->estado,
                    $value->municipio,
                    $value->troquel,
                    $value->total_de_flexos,
                    $value->id_usuario,
                    $value->nombre_usuario,
                    $value->cliente_robuspack,
                    $value->presencia
                  
              
                    );
            
            array_push($colReporteFlexo, $objeto);
        }
        return $colReporteFlexo;
        
        } else {
            redirect(site_url() . 'main/');
        }
        
        
        
        
        
        
        
    }

    public function update($objeto) {
        
    }

    public function refacciones() {
    }
    
     public function totalRegistroFlexo() {
        $this->db->select('sum(total_de_flexos) as total_registros');
        $this->db->from('reporte_censo');
       // $this->db->where('bitacora_mtto.id= ', 24);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function totalRegistroTroquel() {
        $this->db->select('sum(troquel) as total_registros');
        $this->db->from('reporte_censo');
       // $this->db->where('bitacora_mtto.id= ', 24);
        $query = $this->db->get();
        return $query->result();
    }
    
    
     public function totalRegistroCliente() {
        $this->db->select('sum(cliente_robuspack) as total_registros');
        $this->db->from('reporte_censo');
       // $this->db->where('bitacora_mtto.id= ', 24);
        $query = $this->db->get();
        return $query->result();
    }

    
    public function totalPorcentajePresencia() {
        $this->db->select('round(((sum(cliente_robuspack) / sum(troquel))*100),2) as total_registros');
        $this->db->from('reporte_censo');
       // $this->db->where('bitacora_mtto.id= ', 24);
        $query = $this->db->get();
        return $query->result();
    }



    public function querybusqueda() {
        
    }

}
