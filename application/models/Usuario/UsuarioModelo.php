<?php

require 'UsuarioPojo.php';
require 'IModeloAbstractoUsuario.php';
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

class UsuarioModelo extends CI_Model implements IModeloAbstractoUsuario {

<<<<<<< HEAD
   public function __construct() {
=======
    public function __construct() {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        parent::__construct();

        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
<<<<<<< HEAD
         $this->load->library('session');
         //poner para el poner selet en un formulario
         $this->load->model('Usuario/UsuarioModelo');
         //para que tenga el mismo header
          $this->load->model('User_model', 'User_model');
=======
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('Usuario/UsuarioModelo');
        //para que tenga el mismo header
        $this->load->model('User_model', 'User_model');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
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
    
    
    public function add($data) {
       
    }

    public function delete($id) {
      
    }

    public function query() {
   //user data from session
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

    public function add($data) {
        
    }

    public function delete($id) {
        
    }

    public function query() {
        //user data from session
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
            $query = $this->db->query('select first_name  ,email,last_login from users where users.id <> 1 and users.id <> 2 and users.id <> 3 and users.id <> 17 and users.id <> 10 and users.id <> 12 order by last_login desc');

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
            //$this->db->where("users.id='6' OR users.id='7'  OR users.id='8' OR users.id='28'");
            $this->db->where("users.id='7'");
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
        
        else if ($dataLevel == "is_jefe_mantenimiento"){
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            
            $this->db->select('users.first_name,users.email,users.last_login');
            $this->db->from('users');
            $this->db->where("users.id='21' OR users.id='22' OR users.id='23' OR users.id='24' OR users.id='25' OR users.id='26' OR users.id='27' OR users.id='30'");
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
        
        else if ($dataLevel == "is_director"){
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
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_editor"){
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $query = $this->db->query('
            select first_name  ,email,last_login from users where users.id  ');


/*
 $query = $this->db->query('
            select first_name  ,email,last_login from users where users.id <> 1 and users.id <> 2 and users.id <> 3 and users.id <> 9 and users.id <> 10 and users.id and users.id <> 17 order by last_login desc ');

*/

              $colUsuario = array();
        foreach ($query->result() as $key => $value) {
            
            $objeto = new UsuarioPojo($value->first_name,$value->email, $value->last_login
                    );
            
            array_push($colUsuario, $objeto);
        }
        return $colUsuario;
        }  
      
    }



  
 

=======
            $query = $this->db->query('select first_name  ,email,last_login from users where users.id <> 1 and users.id <> 2 and users.id <> 3 order by first_name asc ');

            $colUsuario = array();
            foreach ($query->result() as $key => $value) {

                $objeto = new UsuarioPojo($value->first_name, $value->email, $value->last_login
                );

                array_push($colUsuario, $objeto);
            }
            return $colUsuario;
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $query = $this->db->query('select first_name ,email,last_login from users where users.id <> 1 and users.id <> 2 and users.id <> 3 order by first_name asc ');

            $colUsuario = array();
            foreach ($query->result() as $key => $value) {

                $objeto = new UsuarioPojo($value->first_name, $value->email, $value->last_login
                );

                array_push($colUsuario, $objeto);
            }
            return $colUsuario;
        } else if ($dataLevel == "is_jefe_mantenimiento") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */

            $this->db->select('users.first_name,users.email,users.last_login');
            $this->db->from('users');
            $this->db->where("users.id='6' OR users.id='7'");
            $this->db->order_by("last_login", "desc");


            $query = $this->db->get();
            $data = $query->result_array();



            $colUsuario = array();
            foreach ($query->result() as $key => $value) {

                $objeto = new UsuarioPojo($value->first_name, $value->email, $value->last_login
                );

                array_push($colUsuario, $objeto);
            }
            return $colUsuario;
        } else if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */

            $this->db->select('users.first_name,users.email,users.last_login');
            $this->db->from('users');
            $this->db->where("users.id='6' OR users.id='7'  OR users.id='8' OR users.id='28' ");
            $this->db->order_by("last_login", "desc");


            $query = $this->db->get();
            $data = $query->result_array();



            $colUsuario = array();
            foreach ($query->result() as $key => $value) {

                $objeto = new UsuarioPojo($value->first_name, $value->email, $value->last_login
                );

                array_push($colUsuario, $objeto);
            }
            return $colUsuario;
        } else if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */

            $this->db->select('users.first_name,users.email,users.last_login');
            $this->db->from('users');
            $this->db->where("users.id=11 OR users.id=12 OR users.id=13");            $query = $this->db->get();

            $this->db->order_by("last_login", "desc");


            $data = $query->result_array();



            $colUsuario = array();
            foreach ($query->result() as $key => $value) {

                $objeto = new UsuarioPojo($value->first_name, $value->email, $value->last_login
                );

                array_push($colUsuario, $objeto);
            }
            return $colUsuario;
        } else {
            redirect(site_url() . 'main/');
        }
    }

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    public function update($objeto) {
        
    }

}
