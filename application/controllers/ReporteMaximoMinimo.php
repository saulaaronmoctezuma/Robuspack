<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

Class ReporteMaximoMinimo extends CI_Controller {

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
        $this->load->model("ReporteMaximoMinimo/ReporteMaximoMinimoModelo");
    }

     public function index() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('ReporteMaximoMinimo/ReporteMaximoMinimoModelo');
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
            $data['maximominimo'] = $this->ReporteMaximoMinimoModelo->query();


            $data['totalRequeridoMensual'] = $this->ReporteMaximoMinimoModelo->totalRequeridoMensual(1);
            $data['totalRequeridoTrimestrual'] = $this->ReporteMaximoMinimoModelo->totalRequeridoTrimestrual(1);
            $data['totalRequeridoMensualOcyCons'] = $this->ReporteMaximoMinimoModelo->totalRequeridoMensualOcyCons(1);
            $data['totalRequeridoTrimestrualOcyCons'] = $this->ReporteMaximoMinimoModelo->totalRequeridoTrimestrualOcyCons(1);
            $data['totalInventario'] = $this->ReporteMaximoMinimoModelo->totalInventario(1);
            $data['totalPiezasRecibir'] = $this->ReporteMaximoMinimoModelo->totalPiezasRecibir(1);
            $data['totalDisponibilidadTotal'] = $this->ReporteMaximoMinimoModelo->totalDisponibilidadTotal(1);
            $data['totalPiezasSolicitar'] = $this->ReporteMaximoMinimoModelo->totalPiezasSolicitar(1);


            $this->load->view('ReporteMaximoMinimo/listarMaximoMinimo', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['maximominimo'] = $this->ReporteMaximoMinimoModelo->query();
            $data['totalRequeridoMensual'] = $this->ReporteMaximoMinimoModelo->totalRequeridoMensual(1);
            $data['totalRequeridoTrimestrual'] = $this->ReporteMaximoMinimoModelo->totalRequeridoTrimestrual(1);
            $data['totalRequeridoMensualOcyCons'] = $this->ReporteMaximoMinimoModelo->totalRequeridoMensualOcyCons(1);
            $data['totalRequeridoTrimestrualOcyCons'] = $this->ReporteMaximoMinimoModelo->totalRequeridoTrimestrualOcyCons(1);
            $data['totalInventario'] = $this->ReporteMaximoMinimoModelo->totalInventario(1);
            $data['totalPiezasRecibir'] = $this->ReporteMaximoMinimoModelo->totalPiezasRecibir(1);
            $data['totalDisponibilidadTotal'] = $this->ReporteMaximoMinimoModelo->totalDisponibilidadTotal(1);
            $data['totalPiezasSolicitar'] = $this->ReporteMaximoMinimoModelo->totalPiezasSolicitar(1);
            $this->load->view('ReporteMaximoMinimo/listarMaximoMinimo', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['totalRequeridoMensual'] = $this->ReporteMaximoMinimoModelo->totalRequeridoMensual(1);
            $data['totalRequeridoTrimestrual'] = $this->ReporteMaximoMinimoModelo->totalRequeridoTrimestrual(1);
            $data['totalRequeridoMensualOcyCons'] = $this->ReporteMaximoMinimoModelo->totalRequeridoMensualOcyCons(1);
            $data['totalRequeridoTrimestrualOcyCons'] = $this->ReporteMaximoMinimoModelo->totalRequeridoTrimestrualOcyCons(1);
            $data['totalInventario'] = $this->ReporteMaximoMinimoModelo->totalInventario(1);
            $data['totalPiezasRecibir'] = $this->ReporteMaximoMinimoModelo->totalPiezasRecibir(1);
            $data['totalDisponibilidadTotal'] = $this->ReporteMaximoMinimoModelo->totalDisponibilidadTotal(1);
            $data['totalPiezasSolicitar'] = $this->ReporteMaximoMinimoModelo->totalPiezasSolicitar(1);
            $data['maximominimo'] = $this->ReporteMaximoMinimoModelo->query();
            $this->load->view('ReporteMaximoMinimo/listarMaximoMinimo', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['totalRequeridoMensual'] = $this->ReporteMaximoMinimoModelo->totalRequeridoMensual(1);
            $data['totalRequeridoTrimestrual'] = $this->ReporteMaximoMinimoModelo->totalRequeridoTrimestrual(1);
            $data['totalRequeridoMensualOcyCons'] = $this->ReporteMaximoMinimoModelo->totalRequeridoMensualOcyCons(1);
            $data['totalRequeridoTrimestrualOcyCons'] = $this->ReporteMaximoMinimoModelo->totalRequeridoTrimestrualOcyCons(1);
            $data['totalInventario'] = $this->ReporteMaximoMinimoModelo->totalInventario(1);
            $data['totalPiezasRecibir'] = $this->ReporteMaximoMinimoModelo->totalPiezasRecibir(1);
            $data['totalDisponibilidadTotal'] = $this->ReporteMaximoMinimoModelo->totalDisponibilidadTotal(1);
            $data['totalPiezasSolicitar'] = $this->ReporteMaximoMinimoModelo->totalPiezasSolicitar(1);
            
            $data['maximominimo'] = $this->ReporteMaximoMinimoModelo->query();
            $this->load->view('ReporteMaximoMinimo/listarMaximoMinimo', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }
}
