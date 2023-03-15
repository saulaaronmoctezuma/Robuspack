<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class MaqCli extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
        //para que tenga el mismo header
        $this->load->model("MaqCli/MaqCliModelo");
    }

    public function index() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('MaqCli/MaqCliModelo');
        $data['title'] = "Robuspack";


        $data = $this->session->userdata;
        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['resumen'] = $this->MaqCliModelo->query();
<<<<<<< HEAD
             $data['totalRegistroMaquinaPorCliente'] = $this->MaqCliModelo->totalRegistroMaquinaPorCliente(1);
            
=======
            $data['totalRegistroMaquinaPorCliente'] = $this->MaqCliModelo->totalRegistroMaquinaPorCliente(1);
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            $this->load->view('MaqCli/listarMaqCli', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['resumen'] = $this->MaqCliModelo->query();
             $data['totalRegistroMaquinaPorCliente'] = $this->MaqCliModelo->totalRegistroMaquinaPorCliente(1);
            $this->load->view('MaqCli/listarMaqCli', $data);
            $this->load->view('footer');
<<<<<<< HEAD
        } 
         else if ($dataLevel == "is_Gerente_Ventas") {
=======
        }else if ($dataLevel == "is_Gerente_Ventas") {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['resumen'] = $this->MaqCliModelo->query();
             $data['totalRegistroMaquinaPorCliente'] = $this->MaqCliModelo->totalRegistroMaquinaPorCliente(1);
            $this->load->view('MaqCli/listarMaqCli', $data);
            $this->load->view('footer');
        }
        else {
            redirect(site_url() . 'main/');
        }
    }
    
    

  
    

}
