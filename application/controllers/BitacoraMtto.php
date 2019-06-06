<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class BitacoraMtto extends CI_Controller {

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
        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
        $data['title'] = "Lista de Bitácora";




        $data = $this->session->userdata;

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            $data['bitacora_mtto'] = $this->BitacoraMttoModelo->query();
            $data['totalRegistroBitacoraMantenimientoAlejandro'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoAlejandro(1);
            $data['totalRegistroBitacoraMantenimientoCarlos'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoCarlos(1);
            $data['totalRegistroBitacoraMantenimientoJorge'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoJorge(1);
            $data['totalRegistroBitacoraMantenimientoMiguel'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoMiguel(1);
            $data['totalRegistroBitacoraMantenimientoPablo'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoPablo(1);
            $data['totalRegistroBitacoraMantenimientoRodrigo'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoRodrigo(1);
            $data['totalRegistroBitacoraMantenimientoVeronica'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoVeronica(1);
            $data['totalRegistroBitacoraMantenimientoVicente'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoVicente(1);
            
            
            
            
            
            $data['fechaUltimoRegistroVeronica'] = $this->BitacoraMttoModelo->fechaUltimoRegistroVeronica(1);
            $data['fechaUltimoRegistroRodrigo'] = $this->BitacoraMttoModelo->fechaUltimoRegistroRodrigo(1);
            $data['fechaUltimoRegistroJorge'] = $this->BitacoraMttoModelo->fechaUltimoRegistroJorge(1);
            $data['fechaUltimoRegistroPablo'] = $this->BitacoraMttoModelo->fechaUltimoRegistroPablo(1);
            $data['fechaUltimoRegistroAlejandro'] = $this->BitacoraMttoModelo->fechaUltimoRegistroAlejandro(1);
            $data['fechaUltimoRegistroMiguel'] = $this->BitacoraMttoModelo->fechaUltimoRegistroMiguel(1);
            $data['fechaUltimoRegistroVicente'] = $this->BitacoraMttoModelo->fechaUltimoRegistroVicente(1);
            $data['fechaUltimoRegistroCarlos'] = $this->BitacoraMttoModelo->fechaUltimoRegistroCarlos(1);



            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('BitacoraMtto/listarBitacoraMtto', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_mantenimiento") {
            $data['bitacora_mtto'] = $this->BitacoraMttoModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('BitacoraMtto/listarBitacoraMtto', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['bitacora_mtto'] = $this->BitacoraMttoModelo->query();
            $data['totalRegistroBitacoraMantenimientoAlejandro'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoAlejandro(1);
            $data['totalRegistroBitacoraMantenimientoCarlos'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoCarlos(1);
            $data['totalRegistroBitacoraMantenimientoJorge'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoJorge(1);
            $data['totalRegistroBitacoraMantenimientoMiguel'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoMiguel(1);
            $data['totalRegistroBitacoraMantenimientoPablo'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoPablo(1);
            $data['totalRegistroBitacoraMantenimientoRodrigo'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoRodrigo(1);
            $data['totalRegistroBitacoraMantenimientoVeronica'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoVeronica(1);
            $data['totalRegistroBitacoraMantenimientoVicente'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoVicente(1);



            $data['fechaUltimoRegistroVeronica'] = $this->BitacoraMttoModelo->fechaUltimoRegistroVeronica(1);
            $data['fechaUltimoRegistroRodrigo'] = $this->BitacoraMttoModelo->fechaUltimoRegistroRodrigo(1);
            $data['fechaUltimoRegistroJorge'] = $this->BitacoraMttoModelo->fechaUltimoRegistroJorge(1);
            $data['fechaUltimoRegistroPablo'] = $this->BitacoraMttoModelo->fechaUltimoRegistroPablo(1);
            $data['fechaUltimoRegistroAlejandro'] = $this->BitacoraMttoModelo->fechaUltimoRegistroAlejandro(1);
            $data['fechaUltimoRegistroMiguel'] = $this->BitacoraMttoModelo->fechaUltimoRegistroMiguel(1);
            $data['fechaUltimoRegistroVicente'] = $this->BitacoraMttoModelo->fechaUltimoRegistroVicente(1);
            $data['fechaUltimoRegistroCarlos'] = $this->BitacoraMttoModelo->fechaUltimoRegistroCarlos(1);



            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('BitacoraMtto/listarBitacoraMtto', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_jefe_mantenimiento") {
            $data['bitacora_mtto'] = $this->BitacoraMttoModelo->query();
            $data['totalRegistroBitacoraMantenimientoAlejandro'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoAlejandro(1);
            $data['totalRegistroBitacoraMantenimientoCarlos'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoCarlos(1);
            $data['totalRegistroBitacoraMantenimientoJorge'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoJorge(1);
            $data['totalRegistroBitacoraMantenimientoMiguel'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoMiguel(1);
            $data['totalRegistroBitacoraMantenimientoPablo'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoPablo(1);
            $data['totalRegistroBitacoraMantenimientoRodrigo'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoRodrigo(1);
            $data['totalRegistroBitacoraMantenimientoVeronica'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoVeronica(1);
            $data['totalRegistroBitacoraMantenimientoVicente'] = $this->BitacoraMttoModelo->totalRegistroBitacoraMantenimientoVicente(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('BitacoraMtto/listarBitacoraMtto', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function eliminar($id) {
        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
        $this->BitacoraMttoModelo->delete($id);
        redirect('BitacoraMtto');
    }

    public function agregar() {









        $data ['css'] = $this->css;
        $data ['base'] = $this->base;

        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
        $data['title'] = 'Robuspack';
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
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $this->load->view('BitacoraMtto/agregarBitacoraMtto', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_mantenimiento") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $this->load->view('BitacoraMtto/agregarBitacoraMtto', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $this->load->view('BitacoraMtto/agregarBitacoraMtto', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_jefe_mantenimiento") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $this->load->view('BitacoraMtto/agregarBitacoraMtto', $data);
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
            'planta' => $_POST['planta'],
            'modelo' => $_POST['modelo'],
            'maquina' => $_POST['maquina'],
            'fecha' => $_POST['fecha'],
            'oc' => $_POST['oc'],
            'tipo' => $_POST['tipo'],
            'mantenimiento' => $_POST['mantenimiento'],
            'reporto' => $_POST['reporto'],
            'des_acti' => $_POST['des_acti'],
            'ref_usadas1' => $_POST['ref_usadas1'],
            'ref_usadas2' => $_POST['ref_usadas2'],
            'ref_usadas3' => $_POST['ref_usadas3'],
            'ref_usadas4' => $_POST['ref_usadas4'],
            'ref_usadas5' => $_POST['ref_usadas5'],
            'ref_usadas6' => $_POST['ref_usadas6'],
            'ref_usadas7' => $_POST['ref_usadas7'],
            'ref_usadas8' => $_POST['ref_usadas8'],
            'ref_usadas9' => $_POST['ref_usadas9'],
            'ref_usadas10' => $_POST['ref_usadas10'],
            'ref_usadas11' => $_POST['ref_usadas11'],
            'ref_usadas12' => $_POST['ref_usadas12'],
            'ref_usadas13' => $_POST['ref_usadas13'],
            'ref_usadas14' => $_POST['ref_usadas14'],
            'ref_usadas15' => $_POST['ref_usadas15'],
            'ref_usadas16' => $_POST['ref_usadas16'],
            'ref_usadas17' => $_POST['ref_usadas17'],
            'ref_usadas18' => $_POST['ref_usadas18'],
            'ref_usadas19' => $_POST['ref_usadas19'],
            'ref_usadas20' => $_POST['ref_usadas20'],
            'ref_usadas21' => $_POST['ref_usadas21'],
            'ref_usadas22' => $_POST['ref_usadas22'],
            'ref_usadas23' => $_POST['ref_usadas23'],
            'ref_usadas24' => $_POST['ref_usadas24'],
            'ref_usadas25' => $_POST['ref_usadas25'],
            'ref_usadas26' => $_POST['ref_usadas26'],
            'ref_usadas27' => $_POST['ref_usadas27'],
            'ref_usadas28' => $_POST['ref_usadas28'],
            'ref_usadas29' => $_POST['ref_usadas29'],
            'ref_usadas30' => $_POST['ref_usadas30'],
            'ref_recomen1' => $_POST['ref_recomen1'],
            'ref_recomen2' => $_POST['ref_recomen2'],
            'ref_recomen3' => $_POST['ref_recomen3'],
            'ref_recomen4' => $_POST['ref_recomen4'],
            'ref_recomen5' => $_POST['ref_recomen5'],
            'ref_recomen6' => $_POST['ref_recomen6'],
            'ref_recomen7' => $_POST['ref_recomen7'],
            'ref_recomen8' => $_POST['ref_recomen8'],
            'ref_recomen9' => $_POST['ref_recomen9'],
            'ref_recomen10' => $_POST['ref_recomen10'],
            'ref_recomen11' => $_POST['ref_recomen11'],
            'ref_recomen12' => $_POST['ref_recomen12'],
            'ref_recomen13' => $_POST['ref_recomen13'],
            'ref_recomen14' => $_POST['ref_recomen14'],
            'ref_recomen15' => $_POST['ref_recomen15'],
            'ref_recomen16' => $_POST['ref_recomen16'],
            'ref_recomen17' => $_POST['ref_recomen17'],
            'ref_recomen18' => $_POST['ref_recomen18'],
            'ref_recomen19' => $_POST['ref_recomen19'],
            'ref_recomen20' => $_POST['ref_recomen20'],
            'ref_recomen21' => $_POST['ref_recomen21'],
            'ref_recomen22' => $_POST['ref_recomen22'],
            'ref_recomen23' => $_POST['ref_recomen23'],
            'ref_recomen24' => $_POST['ref_recomen24'],
            'ref_recomen25' => $_POST['ref_recomen25'],
            'ref_recomen26' => $_POST['ref_recomen26'],
            'ref_recomen27' => $_POST['ref_recomen27'],
            'ref_recomen28' => $_POST['ref_recomen28'],
            'ref_recomen29' => $_POST['ref_recomen29'],
            'ref_recomen30' => $_POST['ref_recomen30'],
            'recomendaciones' => $_POST['recomendaciones'],
            'proxima_inter' => $_POST['proxima_inter'],
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );

        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
        $this->BitacoraMttoModelo->add($data);

        redirect('BitacoraMtto');
    }

    public function modificar() {
        $datos = $this->input->post();
        if (isset($datos)) {
            $id_bitacora = $datos['id_bitacora'];
            $planta = $datos['planta'];
            $modelo = $datos['modelo'];
            $maquina = $datos['maquina'];
            $fecha = $datos['fecha'];
            $oc = $datos['oc'];
            $tipo = $datos['tipo'];
            $mantenimiento = $datos['mantenimiento'];
            $reporto = $datos['reporto'];
            $des_acti = $datos['des_acti'];
            $ref_usadas1 = $datos['ref_usadas1'];
            $ref_usadas2 = $datos['ref_usadas2'];
            $ref_usadas3 = $datos['ref_usadas3'];
            $ref_usadas4 = $datos['ref_usadas4'];
            $ref_usadas5 = $datos['ref_usadas5'];
            $ref_usadas6 = $datos['ref_usadas6'];
            $ref_usadas7 = $datos['ref_usadas7'];
            $ref_usadas8 = $datos['ref_usadas8'];
            $ref_usadas9 = $datos['ref_usadas9'];
            $ref_usadas10 = $datos['ref_usadas10'];

            $ref_usadas11 = $datos['ref_usadas11'];
            $ref_usadas12 = $datos['ref_usadas12'];
            $ref_usadas13 = $datos['ref_usadas13'];
            $ref_usadas14 = $datos['ref_usadas14'];
            $ref_usadas15 = $datos['ref_usadas15'];
            $ref_usadas16 = $datos['ref_usadas16'];
            $ref_usadas17 = $datos['ref_usadas17'];
            $ref_usadas18 = $datos['ref_usadas18'];
            $ref_usadas19 = $datos['ref_usadas19'];
            $ref_usadas20 = $datos['ref_usadas20'];


            $ref_usadas21 = $datos['ref_usadas21'];
            $ref_usadas22 = $datos['ref_usadas22'];
            $ref_usadas23 = $datos['ref_usadas23'];
            $ref_usadas24 = $datos['ref_usadas24'];
            $ref_usadas25 = $datos['ref_usadas25'];
            $ref_usadas26 = $datos['ref_usadas26'];
            $ref_usadas27 = $datos['ref_usadas27'];
            $ref_usadas28 = $datos['ref_usadas28'];
            $ref_usadas29 = $datos['ref_usadas29'];
            $ref_usadas30 = $datos['ref_usadas30'];

            $ref_recomen1 = $datos['ref_recomen1'];
            $ref_recomen2 = $datos['ref_recomen'];
            $ref_recomen3 = $datos['ref_recomen'];
            $ref_recomen4 = $datos['ref_recomen'];
            $ref_recomen5 = $datos['ref_recomen'];
            $ref_recomen6 = $datos['ref_recomen'];
            $ref_recomen7 = $datos['ref_recomen'];
            $ref_recomen8 = $datos['ref_recomen'];
            $ref_recomen9 = $datos['ref_recomen'];
            $ref_recomen10 = $datos['ref_recomen'];

            $ref_recomen11 = $datos['ref_recomen11'];
            $ref_recomen12 = $datos['ref_recomen12'];
            $ref_recomen13 = $datos['ref_recomen13'];
            $ref_recomen14 = $datos['ref_recomen14'];
            $ref_recomen15 = $datos['ref_recomen15'];
            $ref_recomen16 = $datos['ref_recomen16'];
            $ref_recomen17 = $datos['ref_recomen17'];
            $ref_recomen18 = $datos['ref_recomen18'];
            $ref_recomen19 = $datos['ref_recomen19'];
            $ref_recomen20 = $datos['ref_recomen20'];

            $ref_recomen21 = $datos['ref_recomen21'];
            $ref_recomen22 = $datos['ref_recomen22'];
            $ref_recomen23 = $datos['ref_recomen23'];
            $ref_recomen24 = $datos['ref_recomen24'];
            $ref_recomen25 = $datos['ref_recomen25'];
            $ref_recomen26 = $datos['ref_recomen26'];
            $ref_recomen27 = $datos['ref_recomen27'];
            $ref_recomen28 = $datos['ref_recomen28'];
            $ref_recomen29 = $datos['ref_recomen29'];
            $ref_recomen30 = $datos['ref_recomen30'];

            $recomendaciones = $datos['recomendaciones'];
            $proxima_inter = $datos['proxima_inter'];

            $this->BitacoraMttoModelo->actualizar($id_bitacora, $planta, $modelo, $maquina, $fecha, $oc, $tipo, $mantenimiento, $reporto, $des_acti, $ref_usadas1, $ref_usadas2, $ref_usadas3, $ref_usadas4, $ref_usadas5, $ref_usadas6, $ref_usadas7, $ref_usadas8, $ref_usadas9, $ref_usadas10, $ref_usadas11, $ref_usadas12, $ref_usadas13, $ref_usadas14, $ref_usadas15, $ref_usadas16, $ref_usadas17, $ref_usadas18, $ref_usadas19, $ref_usadas20, $ref_usadas21, $ref_usadas22, $ref_usadas23, $ref_usadas24, $ref_usadas25, $ref_usadas26, $ref_usadas27, $ref_usadas28, $ref_usadas29, $ref_usadas30, $ref_recomen1, $ref_recomen2, $ref_recomen3, $ref_recomen4, $ref_recomen5, $ref_recomen6, $ref_recomen7, $ref_recomen8, $ref_recomen9, $ref_recomen10, $ref_recomen11, $ref_recomen12, $ref_recomen13, $ref_recomen14, $ref_recomen15, $ref_recomen16, $ref_recomen17, $ref_recomen18, $ref_recomen19, $ref_recomen20, $ref_recomen21, $ref_recomen22, $ref_recomen23, $ref_recomen24, $ref_recomen25, $ref_recomen26, $ref_recomen27, $ref_recomen28, $ref_recomen29, $ref_recomen30, $recomendaciones, $proxima_inter);
            redirect('');
            redirect('BitacoraMtto');
        }
    }

    public function obtener($id_bitacora) {

        $this->load->model('BitacoraMtto/BitacoraMttoModelo');


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
            //se trae los datos de la consulta del modelo
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $data = array();
            $data = $this->BitacoraMttoModelo->obtener($id_bitacora);
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $this->load->view('BitacoraMtto/modificarBitacoraMtto', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_mantenimiento") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            //se trae el arreglo de los datos seleccionados por el di

            $data = array();
            $data = $this->BitacoraMttoModelo->obtener($id_bitacora);
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $this->load->view('BitacoraMtto/modificarBitacoraMtto', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            //se trae el arreglo de los datos seleccionados por el di

            $data = array();
            $data = $this->BitacoraMttoModelo->obtener($id_bitacora);
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $this->load->view('BitacoraMtto/modificarBitacoraMtto', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_jefe_mantenimiento") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            //se trae el arreglo de los datos seleccionados por el di

            $data = array();
            $data = $this->BitacoraMttoModelo->obtener($id_bitacora);
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $this->load->view('BitacoraMtto/modificarBitacoraMtto', $data);

            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function bitacoraMttoModificar() {
        $data = array(
            'id_bitacora' => $_POST['id_bitacora'],
            'planta' => $_POST['planta'],
            'modelo' => $_POST['modelo'],
            'maquina' => $_POST['maquina'],
            'fecha' => $_POST['fecha'],
            'oc' => $_POST['oc'],
            'tipo' => $_POST['tipo'],
            'mantenimiento' => $_POST['mantenimiento'],
            'reporto' => $_POST['reporto'],
            'des_acti' => $_POST['des_acti'],
            'ref_usadas1' => $_POST['ref_usadas1'],
            'ref_usadas2' => $_POST['ref_usadas2'],
            'ref_usadas3' => $_POST['ref_usadas3'],
            'ref_usadas4' => $_POST['ref_usadas4'],
            'ref_usadas5' => $_POST['ref_usadas5'],
            'ref_usadas6' => $_POST['ref_usadas6'],
            'ref_usadas7' => $_POST['ref_usadas7'],
            'ref_usadas8' => $_POST['ref_usadas8'],
            'ref_usadas9' => $_POST['ref_usadas9'],
            'ref_usadas10' => $_POST['ref_usadas10'],
            'ref_usadas11' => $_POST['ref_usadas11'],
            'ref_usadas12' => $_POST['ref_usadas12'],
            'ref_usadas13' => $_POST['ref_usadas13'],
            'ref_usadas14' => $_POST['ref_usadas14'],
            'ref_usadas15' => $_POST['ref_usadas15'],
            'ref_usadas16' => $_POST['ref_usadas16'],
            'ref_usadas17' => $_POST['ref_usadas17'],
            'ref_usadas18' => $_POST['ref_usadas18'],
            'ref_usadas19' => $_POST['ref_usadas19'],
            'ref_usadas20' => $_POST['ref_usadas20'],
            'ref_usadas21' => $_POST['ref_usadas21'],
            'ref_usadas22' => $_POST['ref_usadas22'],
            'ref_usadas23' => $_POST['ref_usadas23'],
            'ref_usadas24' => $_POST['ref_usadas24'],
            'ref_usadas25' => $_POST['ref_usadas25'],
            'ref_usadas26' => $_POST['ref_usadas26'],
            'ref_usadas27' => $_POST['ref_usadas27'],
            'ref_usadas28' => $_POST['ref_usadas28'],
            'ref_usadas29' => $_POST['ref_usadas29'],
            'ref_usadas30' => $_POST['ref_usadas30'],
            'ref_recomen1' => $_POST['ref_recomen1'],
            'ref_recomen2' => $_POST['ref_recomen2'],
            'ref_recomen3' => $_POST['ref_recomen3'],
            'ref_recomen4' => $_POST['ref_recomen4'],
            'ref_recomen5' => $_POST['ref_recomen5'],
            'ref_recomen6' => $_POST['ref_recomen6'],
            'ref_recomen7' => $_POST['ref_recomen7'],
            'ref_recomen8' => $_POST['ref_recomen8'],
            'ref_recomen9' => $_POST['ref_recomen9'],
            'ref_recomen10' => $_POST['ref_recomen10'],
            'ref_recomen11' => $_POST['ref_recomen11'],
            'ref_recomen12' => $_POST['ref_recomen12'],
            'ref_recomen13' => $_POST['ref_recomen13'],
            'ref_recomen14' => $_POST['ref_recomen14'],
            'ref_recomen15' => $_POST['ref_recomen15'],
            'ref_recomen16' => $_POST['ref_recomen16'],
            'ref_recomen17' => $_POST['ref_recomen17'],
            'ref_recomen18' => $_POST['ref_recomen18'],
            'ref_recomen19' => $_POST['ref_recomen19'],
            'ref_recomen20' => $_POST['ref_recomen20'],
            'ref_recomen21' => $_POST['ref_recomen21'],
            'ref_recomen22' => $_POST['ref_recomen22'],
            'ref_recomen23' => $_POST['ref_recomen23'],
            'ref_recomen24' => $_POST['ref_recomen24'],
            'ref_recomen25' => $_POST['ref_recomen25'],
            'ref_recomen26' => $_POST['ref_recomen26'],
            'ref_recomen27' => $_POST['ref_recomen27'],
            'ref_recomen28' => $_POST['ref_recomen28'],
            'ref_recomen29' => $_POST['ref_recomen29'],
            'ref_recomen30' => $_POST['ref_recomen30'],
            'recomendaciones' => $_POST['recomendaciones'],
            'proxima_inter' => $_POST['proxima_inter']
        );

        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
        $this->BitacoraMttoModelo->actualizar($data);
        redirect('BitacoraMtto');
    }

}
