<?php
/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 * Fecha: 11-04-2019 10:19 am 
 */

class RecoleccionDatos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');

        //poner para el poner selet en un formulario
        $this->load->model('RecoleccionDatos/RecoleccionDatosModelo');
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
        $this->load->model('RecoleccionDatos/RecoleccionDatosModelo');
        $data['title'] = "Lista de RecoleccionDatos";

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
            $data['recolecciondatos'] = $this->RecoleccionDatosModelo->query();
            $data['totalRegistroEmpresaAlethia'] = $this->RecoleccionDatosModelo->totalRegistroEmpresaAlethia(1);
            $data['totalRegistroEmpresaBerenice'] = $this->RecoleccionDatosModelo->totalRegistroEmpresaBerenice(1);
            $data['totalRegistroEmpresaOscar'] = $this->RecoleccionDatosModelo->totalRegistroEmpresaOscar(1);
            $data['totalRegistroEmpresaAldo'] = $this->RecoleccionDatosModelo->totalRegistroEmpresaAldo(1);
            $data['totalRegistroEmpresaNadia'] = $this->RecoleccionDatosModelo->totalRegistroEmpresaNadia(1);
            
            $this->load->view('RecoleccionDatos/listarRecoleccionDatos', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['recolecciondatos'] = $this->RecoleccionDatosModelo->query();
            $this->load->view('RecoleccionDatos/listarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_logistica") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['recolecciondatos'] = $this->RecoleccionDatosModelo->query();
            $this->load->view('RecoleccionDatos/listarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_consultor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['recolecciondatos'] = $this->RecoleccionDatosModelo->query();
            $this->load->view('RecoleccionDatos/listarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_servicio_a_clientes") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['recolecciondatos'] = $this->RecoleccionDatosModelo->query();
            $this->load->view('RecoleccionDatos/listarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['recolecciondatos'] = $this->RecoleccionDatosModelo->query();
            $data['totalRegistroEmpresaAlethia'] = $this->RecoleccionDatosModelo->totalRegistroEmpresaAlethia(1);
            $data['totalRegistroEmpresaBerenice'] = $this->RecoleccionDatosModelo->totalRegistroEmpresaBerenice(1);
            $data['totalRegistroEmpresaOscar'] = $this->RecoleccionDatosModelo->totalRegistroEmpresaOscar(1);
            $data['totalRegistroEmpresaAldo'] = $this->RecoleccionDatosModelo->totalRegistroEmpresaAldo(1);
             $data['totalRegistroEmpresaNadia'] = $this->RecoleccionDatosModelo->totalRegistroEmpresaNadia(1);
            $this->load->view('RecoleccionDatos/listarRecoleccionDatos', $data);
            $this->load->view('footer');
        }  else {
            redirect(site_url() . 'main/');
        }
    }

    public function eliminar($id) {
        $this->load->model('RecoleccionDatos/RecoleccionDatosModelo');
        $this->RecoleccionDatosModelo->delete($id);
        redirect('RecoleccionDatos');
    }

    public function agregar() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('RecoleccionDatos/RecoleccionDatosModelo');
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
            $this->load->view('RecoleccionDatos/agregarRecoleccionDatos', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('RecoleccionDatos/agregarRecoleccionDatos', $data);
            $this->load->view('footer');
        }  else if ($dataLevel == "is_logistica") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('RecoleccionDatos/agregarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('RecoleccionDatos/agregarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_consultor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('RecoleccionDatos/agregarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_servicio_a_clientes") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('RecoleccionDatos/agregarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else {
            redirect(site_url() . 'main/');
        }
    }

    
    
    public function formularioAgregar() {
        /* Para traerse el id del usuario */
        $data = $this->session->userdata;
        /* Para traerse el id del usuario */
        $data = array(
            
            'identificador' => $_POST['identificador'],
            'nombre_empresa' => $_POST['nombre_empresa'],
            'estado' => $_POST['estado'],
            'ciudad' => $_POST['ciudad'],
            'domicilio' => $_POST['domicilio'],
            'nombre' => $_POST['nombre'],
            'cargo' => $_POST['cargo'],
            'email' => $_POST['email'],
            'tel' => $_POST['tel'],
            'nombre2' => $_POST['nombre2'],
            'cargo2' => $_POST['cargo2'],
            'email2' => $_POST['email2'],
            'tel2' => $_POST['tel2'],
            'comentarios' => $_POST['comentarios'],
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );

        $this->load->model('RecoleccionDatos/RecoleccionDatosModelo');
        $this->RecoleccionDatosModelo->add($data);

        redirect('RecoleccionDatos');
    }
    
    
    

    public function modificar() {
        $datos = $this->input->post();
        if (isset($datos)) {
            $id_recolecion_datos = $datos['id_recolecion_datos'];
            $identificador = $datos['identificador'];
            $nombre_empresa = $datos['nombre_empresa'];
            $estado = $datos['estado'];
            $ciudad = $datos['ciudad'];
            $domicilio = $datos['domicilio'];
            $nombre = $datos['nombre'];
            $cargo = $datos['cargo'];
            $email = $datos['email'];
            $tel = $datos['tel'];
            $nombre2 = $datos['nombre2'];
            $cargo2 = $datos['cargo2'];
            $email2 = $datos['email2'];
            $tel2 = $datos['tel2'];

            $comentarios = $datos['comentarios'];


            $this->RecoleccionDatosModelo->actualizar();
            redirect('');
            redirect('Cliente');
        }
    }
    
    

    public function obtener($id_recoleccion_datos) {
        $this->load->model('RecoleccionDatos/RecoleccionDatosModelo');
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
            $data = $this->RecoleccionDatosModelo->obtener($id_recoleccion_datos);
            $this->load->view('RecoleccionDatos/modificarRecoleccionDatos', $data);
             $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {
            $this->load->view('header', $data);

            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->RecoleccionDatosModelo->obtener($id_recoleccion_datos);
            $this->load->view('RecoleccionDatos/modificarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_logistica") {
            $this->load->view('header', $data);

            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->RecoleccionDatosModelo->obtener($id_recoleccion_datos);
            $this->load->view('RecoleccionDatos/modificarRecoleccionDatos', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);

            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->RecoleccionDatosModelo->obtener($id_recoleccion_datos);
            $this->load->view('RecoleccionDatos/modificarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_consultor") {
            $this->load->view('header', $data);

            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->RecoleccionDatosModelo->obtener($id_recoleccion_datos);
            $this->load->view('RecoleccionDatos/modificarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_consultor") {
            $this->load->view('header', $data);

            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->RecoleccionDatosModelo->obtener($id_recoleccion_datos);
            $this->load->view('RecoleccionDatos/modificarRecoleccionDatos', $data);
            $this->load->view('footer');
        }else {
            redirect(site_url() . 'main/');
        }
    }
    public function recoleccionDatosModificar() {
        $data = array(
            'id_recolecion_datos' => $_POST['id_recolecion_datos'],
            'identificador' => $_POST['identificador'],
            'nombre_empresa' => $_POST['nombre_empresa'],
            'estado' => $_POST['estado'],
            'ciudad' => $_POST['ciudad'],
            'domicilio' => $_POST['domicilio'],
            'nombre' => $_POST['nombre'],
            'cargo' => $_POST['cargo'],
            'email' => $_POST['email'],
            'tel' => $_POST['tel'],
            'nombre2' => $_POST['nombre2'],
            'cargo2' => $_POST['cargo2'],
            'email2' => $_POST['email2'],
            'tel2' => $_POST['tel2'],
            'comentarios' => $_POST['comentarios']
        );
        $this->load->model('RecoleccionDatos/RecoleccionDatosModelo');
        $this->RecoleccionDatosModelo->actualizar($data);
        redirect('RecoleccionDatos');
    }

}
