<?php

require 'UsuarioPojo.php';
require 'IModeloAbstractoUsuario.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UsuarioModelo extends CI_Model implements IModeloAbstractoUsuario {

   public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
         $this->load->library('session');
         //poner para el poner selet en un formulario
         $this->load->model('Usuario/UsuarioModelo');
         //para que tenga el mismo header
          $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
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
            $query = $this->db->query('select first_name  ,email,last_login from users where users.id <> 1 and users.id <> 2 and users.id <> 3 order by first_name asc ');

              $colUsuario = array();
        foreach ($query->result() as $key => $value) {
            
            $objeto = new UsuarioPojo($value->first_name,$value->email, $value->last_login
                    );
            
            array_push($colUsuario, $objeto);
        }
        return $colUsuario;
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_editor"){
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $query = $this->db->query('select first_name ,email,last_login from users where users.id <> 1 and users.id <> 2 and users.id <> 3 order by first_name asc ');

              $colUsuario = array();
        foreach ($query->result() as $key => $value) {
            
            $objeto = new UsuarioPojo($value->first_name,$value->email, $value->last_login
                    );
            
            array_push($colUsuario, $objeto);
        }
        return $colUsuario;
        }
        
        
        else if ($dataLevel == "is_Gerente_Ventas"){
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            
            $this->db->select('users.first_name,users.email,users.last_login');
            $this->db->from('users');
            $this->db->where("users.id='6' OR users.id='7'  OR users.id='8' OR users.id='9'  OR users.id='10'");
            $this->db->order_by("last_login", "desc");
           

            $query = $this->db->get();
            $data = $query->result_array();
            
            
            
              $colUsuario = array();
        foreach ($query->result() as $key => $value) {
            
            $objeto = new UsuarioPojo($value->first_name,$value->email, $value->last_login
                    );
            
            array_push($colUsuario, $objeto);
        }
        return $colUsuario;
        }  else if ($dataLevel == "is_director"){
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            
            $this->db->select('users.first_name,users.email,users.last_login');
            $this->db->from('users');
            $this->db->where("users.id=11 OR users.id=12 OR users.id=13");
            $this->db->order_by("last_login", "desc");
           

            $query = $this->db->get();
            $data = $query->result_array();
            
            
            
              $colUsuario = array();
        foreach ($query->result() as $key => $value) {
            
            $objeto = new UsuarioPojo($value->first_name,$value->email, $value->last_login
                    );
            
            array_push($colUsuario, $objeto);
        }
        return $colUsuario;
        }
             else{
             redirect(site_url().'main/');
             }
        
        
        
        
        
        
        
        
        
        
        
    }



  
 

    public function update($objeto) {
        
    }

}
