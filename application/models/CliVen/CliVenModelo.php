<?php

require 'CliVenPojo.php';
require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CliVenModelo extends CI_Model implements IModeloAbstracto {

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
            $query = $this->db->query('SELECT * FROM cliente_por_vendedor ORDER BY vendedor');

           
        $colMaqCli = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new CliVenPojo(
                    $value->cliente, 
                    $value->vendedor
                    );
            
            array_push($colMaqCli, $objeto);
        }
        return $colMaqCli;
        
        }else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            
            //consulta la tabla venta
            $query = $this->db->from('cliente_por_vendedor');

            $query = $this->db->order_by("cliente", "asc");

            //tree los datos de la consulta
            $query = $this->db->get();


           $colMaqCli = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new CliVenPojo(
                    
                    $value->cliente,
                    $value->vendedor
                    );
            
            array_push($colMaqCli, $objeto);
        }
        return $colMaqCli;
        }
        
        else if ($dataLevel == "is_credito") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            
            //consulta la tabla venta
            $query = $this->db->from('cliente_por_vendedor');

            $query = $this->db->order_by("cliente", "asc");

            //tree los datos de la consulta
            $query = $this->db->get();


           $colMaqCli = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new CliVenPojo(
                    
                    $value->cliente,
                    $value->vendedor
                    );
            
            array_push($colMaqCli, $objeto);
        }
        return $colMaqCli;
        }
        
        
        else if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            
            //consulta la tabla venta
            $query = $this->db->from('cliente_por_vendedor');

            $query = $this->db->order_by("vendedor", "asc");

            //tree los datos de la consulta
            $query = $this->db->get();


           $colMaqCli = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new CliVenPojo(
                    
                    $value->cliente,
                    $value->vendedor
                    );
            
            array_push($colMaqCli, $objeto);
        }
        return $colMaqCli;
        }
        else {
            redirect(site_url() . 'main/');
        }
        
        
        
        
        
        
        
    }

    public function update($objeto) {
        
    }

    public function refacciones() {
    }

}
