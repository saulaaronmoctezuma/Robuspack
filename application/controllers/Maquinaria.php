<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

Class Maquinaria extends CI_Controller {
    public $status;
    public $roles;

    function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');

        //para que tenga el mismo header
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

    public function index() {
        $data['css'] = $this->css;
        $data['base'] = $this->base;
        $this->load->model('Maquinaria/MaquinariaModelo');
        $data['title'] = 'Lista de Maquinaria';
        //Procedimiento almacenado
        /* $query=$this->db->query('CALL Mayor');
          $resultado=$query->row();
          $data['Mayor']=$resultado->Mayor; */

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
            $data['busqueda'] = $this->MaquinariaModelo->querybusqueda();
            $data['maquinaria'] = $this->MaquinariaModelo->query();
            $this->load->view('Maquinaria/listarMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['busqueda'] = $this->MaquinariaModelo->querybusqueda();
            $data['maquinaria'] = $this->MaquinariaModelo->query();
            $this->load->view('Maquinaria/listarMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['busqueda'] = $this->MaquinariaModelo->querybusqueda();
            $data['maquinaria'] = $this->MaquinariaModelo->query();
            $this->load->view('Maquinaria/listarMaquinaria', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['busqueda'] = $this->MaquinariaModelo->querybusqueda();
            $data['maquinaria'] = $this->MaquinariaModelo->query();
            $this->load->view('Maquinaria/listarMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['busqueda'] = $this->MaquinariaModelo->querybusqueda();
            $data['maquinaria'] = $this->MaquinariaModelo->query();
            $this->load->view('Maquinaria/listarMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['busqueda'] = $this->MaquinariaModelo->querybusqueda();
            $data['maquinaria'] = $this->MaquinariaModelo->query();
            $this->load->view('Maquinaria/listarMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['busqueda'] = $this->MaquinariaModelo->querybusqueda();
            $data['maquinaria'] = $this->MaquinariaModelo->query();
            $this->load->view('Maquinaria/listarMaquinaria', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function eliminar($id) {
        $this->load->model('Maquinaria/MaquinariaModelo');
        $this->MaquinariaModelo->delete($id);
        redirect('Maquinaria');
    }

    public function agregar() {
        $data['css'] = $this->css;
        $data['base'] = $this->base;
        // $data['header']=$this->load->view('template/header.php',Null, TRUE);
        //$data['footer']=$this->load->view('template/footer.php',NULL, TRUE);
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
            $this->load->view('Maquinaria/agregarMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Maquinaria/agregarMaquinaria', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_logistica") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Maquinaria/agregarMaquinaria', $data);
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
            'referencia' => $_POST['referencia'],
            'fecha' => $_POST['fecha'],
            'fabricante' => $_POST['fabricante'],
            'maquina' => $_POST['maquina'],
            'precio1' => $_POST['precio1'],
            'precio2' => $_POST['precio2'],
            'precio3' => $_POST['precio3'],
            'precio4' => $_POST['precio4'],
            'precio5' => $_POST['precio5'],
            'fecha_actualizacion_precio' => $_POST['fecha_actualizacion_precio'],
            'pcexwork' => $_POST['pcexwork'],
            'pcfob' => $_POST['pcfob'],
            'pccif' => $_POST['pccif'],
            'pccip' => $_POST['pccip'],
            'ancho' => $_POST['ancho'],
            'espesor' => $_POST['espesor'],
            'diametro' => $_POST['diametro'],
            'empresa_competencia_1' => $_POST['empresa_competencia_1'],
            'empresa_competencia_2' => $_POST['empresa_competencia_2'],
            'inventario' => $_POST['inventario'],
            'piezas_recibir' => $_POST['piezas_recibir'],
             'fecha_corte_rotacion' => $_POST['fecha_corte_rotacion'],
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );

        $this->load->model('Maquinaria/MaquinariaModelo');
        $this->MaquinariaModelo->add($data);

        redirect('Maquinaria');
    }

    public function modificar() {

        $datos = $this->input->post();
        if (isset($datos)) {
            $id_maquinaria = $datos['id_maquinaria'];
            $referencia = $datos['referencia'];
            $fecha = $datos['fecha'];
            $fabricante = $datos['fabricante'];
            $maquina = $datos['maquina'];
            $precio1 = $datos['precio1'];
            $precio2 = $datos['precio2'];
            $precio3 = $datos['precio3'];
            $precio4 = $datos['precio4'];
            $precio5 = $datos['precio5'];
              $fecha_actualizacion_precio = $datos['fecha_actualizacion_precio'];
            $pcexwork = $datos['pcexwork'];
            $pcfob = $datos['pcfob'];
            $pccif = $datos['pccif'];
            $pccip = $datos['pccip'];
            $ancho = $datos['ancho'];
            $espesor = $datos['espesor'];
            $diametro = $datos['diametro'];
            $empresa_competencia_1 = $datos['empresa_competencia_1'];
            $empresa_competencia_2 = $datos['empresa_competencia_2'];
            $inventario = $datos['inventario'];
            $piezas_recibir = $datos['piezas_recibir'];
            $fecha_corte_rotacion = $datos['fecha_corte_rotacion'];
            $this->MaquinariaModelo->actualizar($id_maquinaria, $referencia, $fecha, $fabricante, $maquina, $precio1, $precio2, $precio3, $precio4, $precio5,$fecha_actualizacion_precio, $pcexwork, $pcfob, $pccif, $pccip, $ancho, $espesor, $diametro, $empresa_competencia_1, $empresa_competencia_2, $inventario,$piezas_recibir,$fecha_corte_rotacion );
            redirect('');
            redirect('Maquinaria');
        }
    }

    public function obtener($id_maquinaria) {
        $this->load->model('Maquinaria/MaquinariaModelo');






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
            //agregar para el select de refacción de tabla maquinaria        
            $data = array();
            $data = $this->MaquinariaModelo->obtener($id_maquinaria);
            $this->load->view('Maquinaria/modificarMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->MaquinariaModelo->obtener($id_maquinaria);
            $this->load->view('Maquinaria/modificarMaquinaria', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_logistica") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->MaquinariaModelo->obtener($id_maquinaria);
            $this->load->view('Maquinaria/modificarMaquinaria', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    
    
     public function actualiza($id_maquinaria) {
        $this->load->model('Maquinaria/MaquinariaModelo');


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
            //agregar para el select de refacción de tabla maquinaria        
            $data = array();
            $data = $this->MaquinariaModelo->obtener($id_maquinaria);
            $this->load->view('Maquinaria/modificarMaquinariaFechaCorte', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->MaquinariaModelo->obtener($id_maquinaria);
            $this->load->view('Maquinaria/modificarMaquinariaFechaCorte', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_logistica") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->MaquinariaModelo->obtener($id_maquinaria);
            $this->load->view('Maquinaria/modificarMaquinariaFechaCorte', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }



 public function rotacion($id_maquinaria) {
        $this->load->model('Maquinaria/MaquinariaModelo');

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
            //agregar para el select de refacción de tabla maquinaria        
            $data = array();
            $data = $this->MaquinariaModelo->obtener($id_maquinaria);
            $this->load->view('Maquinaria/modificarMaquinariaRotacion', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->MaquinariaModelo->obtener($id_maquinaria);
            $this->load->view('Maquinaria/modificarMaquinariaRotacion', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function maquinariaModificar() {
        $data = array(
            'id_maquinaria' => $_POST['id_maquinaria'],
            'referencia' => $_POST['referencia'],
            'fecha' => $_POST['fecha'],
            'fabricante' => $_POST['fabricante'],
            'maquina' => $_POST['maquina'],
            'precio1' => $_POST['precio1'],
            'precio2' => $_POST['precio2'],
            'precio3' => $_POST['precio3'],
            'precio4' => $_POST['precio4'],
            'precio5' => $_POST['precio5'],
             'fecha_actualizacion_precio' => $_POST['fecha_actualizacion_precio'],
            'pcexwork' => $_POST['pcexwork'],
            'pcfob' => $_POST['pcfob'],
            'pccif' => $_POST['pccif'],
            'pccip' => $_POST['pccip'],
            'ancho' => $_POST['ancho'],
            'espesor' => $_POST['espesor'],
            'diametro' => $_POST['diametro'],
            'empresa_competencia_1' => $_POST['empresa_competencia_1'],
            'empresa_competencia_2' => $_POST['empresa_competencia_2'],
            'inventario' => $_POST['inventario'],
             'piezas_recibir' => $_POST['piezas_recibir'],
            'fecha_corte_rotacion' => $_POST['fecha_corte_rotacion']
        );
        $this->load->model('Maquinaria/MaquinariaModelo');
        $this->MaquinariaModelo->actualizar($data);
        redirect('Maquinaria');
    }
    
    
    
    public function maquinariaModificarRotacion() {
        $data = array(
            'id_maquinaria' => $_POST['id_maquinaria'],
            'referencia' => $_POST['referencia'],
            'fecha' => $_POST['fecha'],
            'fabricante' => $_POST['fabricante'],
            'maquina' => $_POST['maquina'],
            'precio1' => $_POST['precio1'],
            'precio2' => $_POST['precio2'],
            'precio3' => $_POST['precio3'],
            'precio4' => $_POST['precio4'],
            'precio5' => $_POST['precio5'],
            'fecha_actualizacion_precio' => $_POST['fecha_actualizacion_precio'],
            'pcexwork' => $_POST['pcexwork'],
            'pcfob' => $_POST['pcfob'],
            'pccif' => $_POST['pccif'],
            'pccip' => $_POST['pccip'],
            'ancho' => $_POST['ancho'],
            'espesor' => $_POST['espesor'],
            'diametro' => $_POST['diametro'],
            'empresa_competencia_1' => $_POST['empresa_competencia_1'],
            'empresa_competencia_2' => $_POST['empresa_competencia_2'],
            'inventario' => $_POST['inventario'],
             'piezas_recibir' => $_POST['piezas_recibir'],
            'fecha_corte_rotacion' => $_POST['fecha_corte_rotacion']
        );
        $this->load->model('Maquinaria/MaquinariaModelo');
        $this->MaquinariaModelo->actualizar($data);
        redirect('MaxMin');
    }
    
     public function maquinariaModificarFechaCorteRotacion() {
        $data = array(
            'id_maquinaria' => $_POST['id_maquinaria'],
            'referencia' => $_POST['referencia'],
            'fecha' => $_POST['fecha'],
            'fabricante' => $_POST['fabricante'],
            'maquina' => $_POST['maquina'],
            'precio1' => $_POST['precio1'],
            'precio2' => $_POST['precio2'],
            'precio3' => $_POST['precio3'],
            'precio4' => $_POST['precio4'],
            'precio5' => $_POST['precio5'],
            'fecha_actualizacion_precio' => $_POST['fecha_actualizacion_precio'],
            'pcexwork' => $_POST['pcexwork'],
            'pcfob' => $_POST['pcfob'],
            'pccif' => $_POST['pccif'],
            'pccip' => $_POST['pccip'],
            'ancho' => $_POST['ancho'],
            'espesor' => $_POST['espesor'],
            'diametro' => $_POST['diametro'],
            'empresa_competencia_1' => $_POST['empresa_competencia_1'],
            'empresa_competencia_2' => $_POST['empresa_competencia_2'],
            'inventario' => $_POST['inventario'],
             'piezas_recibir' => $_POST['piezas_recibir'],
            'fecha_corte_rotacion' => $_POST['fecha_corte_rotacion']
        );
        $this->load->model('Maquinaria/MaquinariaModelo');
        $this->MaquinariaModelo->actualizar($data);
        redirect('MaxMin');
    }

}
