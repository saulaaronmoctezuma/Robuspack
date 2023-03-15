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
 */

/**
 * Description of Empresa
 * bjm+ZH6@sk
 *
 * @author 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
 */
class Empresa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');

        //poner para el poner selet en un formulario
        $this->load->model('Empresa/EmpresaModelo');
        //poner para el poner selet en un formulario
        //para que tenga el mismo header y trearse el usuario para dar permisos
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
        //para que tenga el mismo header
    }

    public function index() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('Empresa/EmpresaModelo');
        $data['title'] = "Lista de Empresas";

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
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['empresa'] = $this->EmpresaModelo->query();
            $this->load->view('Empresa/listarEmpresa', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_consultor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['empresa'] = $this->EmpresaModelo->query();
            $this->load->view('Empresa/listarEmpresa', $data);
            $this->load->view('footer');
<<<<<<< HEAD
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['empresa'] = $this->EmpresaModelo->query();
            $this->load->view('Empresa/listarEmpresa', $data);
            $this->load->view('footer');
        }else {
=======
        } else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            redirect(site_url() . 'main/');
        }
    }

    public function eliminar($id) {
        $this->load->model('Empresa/EmpresaModelo');
        $this->EmpresaModelo->delete($id);
        redirect('Empresa');
    }

    public function agregar() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('Empresa/EmpresaModelo');
        $data['title'] = 'Robuspack';



        //user data from session
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
            $this->load->view('Empresa/agregarEmpresa', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_consultor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Empresa/agregarEmpresa', $data);
            $this->load->view('footer');
<<<<<<< HEAD
        }else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Empresa/agregarEmpresa', $data);
            $this->load->view('footer');
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function formularioAgregar() {

        $data = array(
            'estado' => $_POST['estado'],
            'ciudad' => $_POST['ciudad'],
            'nombre_empresa' => $_POST['nombre_empresa'],
            'estatus' => $_POST['estatus'],
            'vendedor' => $_POST['vendedor'],
            'nombre' => $_POST['nombre'],
            'cargo' => $_POST['cargo'],
            'email' => $_POST['email'],
            'email2' => $_POST['email2'],
            'email3' => $_POST['email3'],
            'pag_web' => $_POST['pag_web'],
            'marketing' => $_POST['marketing'],
            'tel1' => $_POST['tel1'],
            'tel2' => $_POST['tel2'],
            'tel3' => $_POST['tel3'],
            'direccion' => $_POST['direccion'],
            'dom_secundario' => $_POST['dom_secundario'],
            'cp' => $_POST['cp'],
            'integrados' => $_POST['integrados'],
            'corrugadora' => $_POST['corrugadora'],
            'sheet' => $_POST['sheet'],
            'single' => $_POST['single'],
            'comercializadora' => $_POST['comercializadora'],
            'litografia' => $_POST['litografia'],
            'flexos' => $_POST['flexos'],
            'volumen' => $_POST['volumen'],
            'comentarios' => $_POST['comentarios']
        );

        $this->load->model('Empresa/EmpresaModelo');
        $this->EmpresaModelo->add($data);

        redirect('Empresa');
    }

    public function modificar() {
        $datos = $this->input->post();
        if (isset($datos)) {
            $id_empresa = $datos['id_empresa'];
            $estado = $datos['estado'];
            $ciudad = $datos['ciudad'];
            $nombre_empresa = $datos['nombre_empresa'];
            $estatus = $datos['estatus'];
            $vendedor = $datos['vendedor'];
            $nombre = $datos['nombre'];
            $cargo = $datos['cargo'];
            $email = $datos['email'];
            $email2 = $datos['email2'];
            $email3 = $datos['email3'];
            $pag_web = $datos['pag_web'];
            $marketing = $datos['marketing'];
            $tel1 = $datos['tel1'];
            $tel2 = $datos['tel2'];
            $tel3 = $datos['tel3'];
            $direccion = $datos['direccion'];
            $dom_secundario = $datos['dom_secundario'];
            $cp = $datos['cp'];
            $integrados = $datos['integrados'];
            $corrugadora = $datos['corrugadora'];
            $sheet = $datos['sheet'];
            $single = $datos['single'];
            $comercializadora = $datos['comercializadora'];
            $litografia = $datos['litografia'];
            $flexos = $datos['flexos'];
            $volumen = $datos['volumen'];
            $comentarios = $datos['comentarios'];


            $this->ClienteModelo->actualizar();
            redirect('');
            redirect('Cliente');
        }
    }

    public function obtener($id_empresa) {
        $this->load->model('Empresa/EmpresaModelo');



        //user data from session
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


            $data = array();
            $data = $this->EmpresaModelo->obtener($id_empresa);
            $this->load->view('Empresa/modificarEmpresa', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_consultor") {
            $this->load->view('header', $data);

            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->EmpresaModelo->obtener($id_empresa);
            $this->load->view('Empresa/modificarEmpresa', $data);
            $this->load->view('footer');
<<<<<<< HEAD
        }  else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);

            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->EmpresaModelo->obtener($id_empresa);
            $this->load->view('Empresa/modificarEmpresa', $data);
            $this->load->view('footer');
        }else {
=======
        } else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            redirect(site_url() . 'main/');
        }
    }

    public function empresaModificar() {
        $data = array(
            'id_empresa' => $_POST['id_empresa'],
            'estado' => $_POST['estado'],
            'ciudad' => $_POST['ciudad'],
            'nombre_empresa' => $_POST['nombre_empresa'],
            'estatus' => $_POST['estatus'],
            'vendedor' => $_POST['vendedor'],
            'nombre' => $_POST['nombre'],
            'cargo' => $_POST['cargo'],
            'email' => $_POST['email'],
            'email2' => $_POST['email2'],
            'email3' => $_POST['email3'],
            'pag_web' => $_POST['pag_web'],
            'marketing' => $_POST['marketing'],
            'tel1' => $_POST['tel1'],
            'tel2' => $_POST['tel2'],
            'tel3' => $_POST['tel3'],
            'direccion' => $_POST['direccion'],
            'dom_secundario' => $_POST['dom_secundario'],
            'cp' => $_POST['cp'],
            'integrados' => $_POST['integrados'],
            'corrugadora' => $_POST['corrugadora'],
            'sheet' => $_POST['sheet'],
            'single' => $_POST['single'],
            'comercializadora' => $_POST['comercializadora'],
            'litografia' => $_POST['litografia'],
            'flexos' => $_POST['flexos'],
            'volumen' => $_POST['volumen'],
            'comentarios' => $_POST['comentarios'],
        );


        $this->load->model('Empresa/EmpresaModelo');
        $this->EmpresaModelo->actualizar($data);
        redirect('Empresa');
    }
<<<<<<< HEAD
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
}
