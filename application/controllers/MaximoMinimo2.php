<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class MaximoMinimo2 extends CI_Controller {

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
        $this->load->model("MaximoMinimo2/MaximoMinimo2Modelo");
    }

    public function index() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('MaximoMinimo2/MaximoMinimo2Modelo');
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
            $data['maximominimo'] = $this->MaximoMinimo2Modelo->query();
            $data['totalRegistroCodigo'] = $this->MaximoMinimo2Modelo->totalRegistroCodigo(1);
            $this->load->view('MaximoMinimo2/listarMaximoMinimo', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['maximominimo'] = $this->MaximoMinimo2Modelo->query();
            $data['totalRegistroCodigo'] = $this->MaximoMinimo2Modelo->totalRegistroCodigo(1);
            $this->load->view('MaximoMinimo2/listarMaximoMinimo', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }
    
    

  
    

}
