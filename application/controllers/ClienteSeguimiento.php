    <?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteSeguimiento
 *
 * @author Desarrollo.robus
 */
class ClienteSeguimiento extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
        //para que tenga el mismo header
        $this->load->model('ClienteSeguimiento/ClienteSeguimientoModelo');
    }

    public function index() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('ClienteSeguimiento/ClienteSeguimientoModelo');
        $data['title'] = "Robuspack";




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
            $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);

            $this->load->view('footer');
        }else if ($dataLevel == "is_maquinaria_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);

            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function eliminar($id) {
        $this->load->model('ClienteSeguimiento/ClienteSeguimientoModelo');
        $this->ClienteSeguimientoModelo->delete($id);
        redirect('ClienteSeguimiento');
    }

    public function agregar() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $data = $this->session->userdata;




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
            $data['grupoCombo'] = $this->ClienteSeguimientoModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('ClienteSeguimiento/agregarClienteSeguimientoArchivos', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->ClienteSeguimientoModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('ClienteSeguimiento/agregarClienteSeguimientoArchivos', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->ClienteSeguimientoModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('ClienteSeguimiento/agregarClienteSeguimientoArchivos', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->ClienteSeguimientoModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('ClienteSeguimiento/agregarClienteSeguimientoArchivos', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_maquinaria_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->ClienteSeguimientoModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('ClienteSeguimiento/agregarClienteSeguimientoArchivos', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function formularioAgregar() {
        /* Para traerse el id del usuario */
        $data = $this->session->userdata;
        /* Para traerse el id del usuario */
        $data = array(
            'grupo' => $_POST['grupo'],
            'cliente' => $_POST['cliente'],
            'prioridad' => $_POST['prioridad'],
            'estatus' => $_POST['estatus'],
            'necesidad' => $_POST['necesidad'],
            'fecha_cotizacion' => $_POST['fecha_cotizacion'],
            'archivo1' => $_POST['archivo1'],
            'fecha_contactar' => $_POST['fecha_contactar'],
            'compromiso' => $_POST['compromiso'],
            'notas' => $_POST['notas'],
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );

        $this->load->model('ClienteSeguimiento/ClienteSeguimientoModelo');
        $this->ClienteSeguimientoModelo->add($data);

        redirect('ClienteSeguimiento');
    }

    public function modificar() {
        $datos = $this->input->post();
        if (isset($datos)) {
            $id_clienteseguimiento = $datos['id_clienteseguimiento'];
            $grupo = $datos['grupo'];
            $cliente = $datos['cliente'];
            $prioridad = $datos['prioridad'];
            $estatus = $datos['estatus'];
            $necesidad = $datos['necesidad'];
            $fecha_cotizacion = $datos['fecha_cotizacion'];
            $archivo1 = $datos['archivo1'];

            $fecha_contactar = $datos['fecha_contactar'];
            $compromiso = $datos['compromiso'];
            $notas = $datos['notas'];


            $this->ClienteSeguimientoModelo->actualizar($id_clienteseguimiento, $grupo, $cliente, $prioridad, $estatus, $necesidad, $fecha_cotizacion, $archivo1, $fecha_contactar, $compromiso, $notas);
            redirect('');
            redirect('ClienteSeguimiento');
        }
    }

    public function obtener($id_clienteseguimiento) {
        $this->load->model('ClienteSeguimiento/ClienteSeguimientoModelo');




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
            $data = $this->ClienteSeguimientoModelo->obtener($id_clienteseguimiento);
            $data['options'] = $this->ClienteSeguimientoModelo->getOptions();
            $data['grupoCombo'] = $this->ClienteSeguimientoModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('ClienteSeguimiento/modificarClienteSeguimiento', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->ClienteSeguimientoModelo->obtener($id_clienteseguimiento);
            $data['options'] = $this->ClienteSeguimientoModelo->getOptions();
            $data['grupoCombo'] = $this->ClienteSeguimientoModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('ClienteSeguimiento/modificarClienteSeguimiento', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->ClienteSeguimientoModelo->obtener($id_clienteseguimiento);
            $data['options'] = $this->ClienteSeguimientoModelo->getOptions();
            $data['grupoCombo'] = $this->ClienteSeguimientoModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('ClienteSeguimiento/modificarClienteSeguimiento', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->ClienteSeguimientoModelo->obtener($id_clienteseguimiento);
            $data['options'] = $this->ClienteSeguimientoModelo->getOptions();
            $data['grupoCombo'] = $this->ClienteSeguimientoModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('ClienteSeguimiento/modificarClienteSeguimiento', $data);

            $this->load->view('footer');
        }else {
            redirect(site_url() . 'main/');
        }
    }

    public function clienteSeguimientoModificar() {
        $data = array(
            'id_clienteseguimiento' => $_POST['id_clienteseguimiento'],
            'grupo' => $_POST['grupo'],
            'cliente' => $_POST['cliente'],
            'prioridad' => $_POST['prioridad'],
            'estatus' => $_POST['estatus'],
            'necesidad' => $_POST['necesidad'],
            'fecha_cotizacion' => $_POST['fecha_cotizacion'],
            'archivo1' => $_POST['archivo1'],
            'fecha_contactar' => $_POST['fecha_contactar'],
            'compromiso' => $_POST['compromiso'],
            'notas' => $_POST['notas']
        );

        $this->load->model('ClienteSeguimiento/ClienteSeguimientoModelo');
        $this->ClienteSeguimientoModelo->actualizar($data);
        redirect('ClienteSeguimiento');
    }

    function ClieteSeguimientoAgregar() {
        $this->load->view('ClienteSeguimiento/agregarClienteSeguimientoArchivos');
    }

    function do_upload() {
        $config['upload_path'] = "./assets/clienteseguimiento";
        $config['allowed_types'] = 'gif|jpg|png|pdf|zip|rar|doc|docx';
        $config['encrypt_name'] = false;

        $this->load->library('upload', $config);
        $this->upload->do_upload("file");
        $data = $this->upload->data();

        //Resize and Compress Image
        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/clienteseguimiento/' . $data['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '100%';
        /*$config['width'] = 600;
        $config['height'] = 400;
        $config['new_image'] = './assets/clienteseguimiento/' . $data['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();*/

        $title = $this->input->post('title');
        $cliente = $this->input->post('cliente');
        $prioridad = $this->input->post('prioridad');
        $estatus = $this->input->post('estatus');
        $necesidad = $this->input->post('necesidad');
        $fecha_cotizacion = $this->input->post('fecha_cotizacion');
        $image = $data['file_name'];
        $fecha_contactar = $this->input->post('fecha_contactar');
        $compromiso = $this->input->post('compromiso');
        $notas = $this->input->post('notas');

        $result = $this->ClienteSeguimientoModelo->save_upload($title, $cliente, $prioridad, $estatus, $necesidad, $fecha_cotizacion, $image, $fecha_contactar, $compromiso, $notas);
        echo json_decode($result);
    }

}
