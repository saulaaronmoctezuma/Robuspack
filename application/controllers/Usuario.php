<?php

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

Class Usuario extends CI_Controller {

    public $status;
    public $roles;

    function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('Cliente/ClienteModelo');
        //poner para el poner selet en un formulario
        //para que tenga el mismo header y trearse el usuario para dar permisos
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

    public function index() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('Usuario/UsuarioModelo');
        $data['title'] = "Lista de Clientes";



        $data = $this->session->userdata;

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            $data['usuario'] = $this->UsuarioModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Usuario/listar', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
           $data['usuario'] = $this->UsuarioModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Usuario/listar', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_Gerente_Ventas") {
           $data['usuario'] = $this->UsuarioModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Usuario/listar', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_director") {
           $data['usuario'] = $this->UsuarioModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Usuario/listar', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_jefe_mantenimiento") {
           $data['usuario'] = $this->UsuarioModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Usuario/listar', $data);
            $this->load->view('footer');
<<<<<<< HEAD
        }   else {
            redirect(site_url() . 'main/');
        }
    }
=======
        }  else {
            redirect(site_url() . 'main/');
        }
    }

   

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
}
