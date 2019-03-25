<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CatalogoVenTec
 *
 * @author Desarrollo.robus
 */

class CatalogoVenTec extends CI_Controller {

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
        $this->load->model("CatalogoVenTec/CatalogoVenTecModelo");
    }

    public function index() {

        $data['css'] = $this->css;
        $data['base'] = $this->base;
        $this->load->model('CatalogoVenTec/CatalogoVenTecModelo');
        $data['title'] = 'Lista de Catálogo Vendedor y Técnicos';






        //user data from session
        $data = $this->session->userdata;
        /* if (empty($data)) {
          redirect(site_url() . 'main/login/');
          } */

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
            $data['catalogoventec'] = $this->CatalogoVenTecModelo->query();
            $this->load->view('CatalogoVenTec/listarCatalogoVenTec', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['catalogoventec'] = $this->CatalogoVenTecModelo->query();
            $this->load->view('CatalogoVenTec/listarCatalogoVenTec', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function eliminar($id) {
        $this->load->model('CatalogoVenTec/CatalogoVenTecModelo');
        $this->CatalogoVenTecModelo->delete($id);
        redirect('CatalogoVenTec');
    }

    public function agregar() {
        $data['css'] = $this->css;
        $data['base'] = $this->base;

        //user data from session
        $data = $this->session->userdata;
        /* if (empty($data)) {
          redirect(site_url() . 'main/login/');
          } */

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
            $this->load->view('CatalogoVenTec/agregarCatalogoVenTec', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CatalogoVenTec/agregarCatalogoVenTec', $data);
            
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function formularioAgregar() {


        $data = array(
            'nombre' => $_POST['nombre'],
            'rol' => $_POST['rol'],
            'area' => $_POST['area'],
            'comision' => $_POST['comision'],
            'correo' => $_POST['correo']
        );

        $this->load->model('CatalogoVenTec/CatalogoVenTecModelo');
        $this->CatalogoVenTecModelo->add($data);

        redirect('CatalogoVenTec');
    }

    public function modificar() {

        $datos = $this->input->post();
        if (isset($datos)) {
            $id_catalogo = $datos['id_catalogo'];
            $nombre = $datos['nombre'];
            $rol = $datos['rol'];
            $area = $datos['area'];
            $comision = $datos['comision'];
            $correo = $datos['correo'];
            $this->CatalogoVenTecModelo->actualizar($id_catalogo, $nombre, $rol, $area, $comision, $correo);
            redirect('');
            redirect('CatalogoVenTec');
        }
    }

    public function obtener($id_catalogo) {
        $this->load->model('CatalogoVenTec/CatalogoVenTecModelo');
        
       
        
        
         //user data from session
        $data = $this->session->userdata;
        /* if (empty($data)) {
          redirect(site_url() . 'main/login/');
          } */

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
             $data = array();
        $data = $this->CatalogoVenTecModelo->obtener($id_catalogo);
        $this->load->view('CatalogoVenTec/modificarCatalogoVenTec', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
           $data = array();
        $data = $this->CatalogoVenTecModelo->obtener($id_catalogo);
        $this->load->view('CatalogoVenTec/modificarCatalogoVenTec', $data);
            
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }
 public function catalogoVenTecModificar() {
        $data = array(
            'id_catalogo' => $_POST['id_catalogo'],
            'nombre' => $_POST['nombre'],
            'rol' => $_POST['rol'],
            'area' => $_POST['area'],
            'comision' => $_POST['comision'],
            'correo' => $_POST['correo']
        );
        $this->load->model('CatalogoVenTec/CatalogoVenTecModelo');
        $this->CatalogoVenTecModelo->actualizar($data);
        redirect('CatalogoVenTec');
    }

}
