<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

Class BitacoraMtto extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
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
<<<<<<< HEAD
=======
        } else if ($dataLevel == "is_servicio_a_clientes") {
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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        }else if ($dataLevel == "is_refacciones") {
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
<<<<<<< HEAD
        }
        
        
        
        
        else if ($dataLevel == "is_servicio_a_clientes") {
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
        }
        
        
        
        
        else {
=======
        }  else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
            'motivo_asistencia' => $_POST['motivo_asistencia'],
            'tipo' => $_POST['tipo'],
            'mantenimiento' => $_POST['mantenimiento'],
            'consecutivo' => $_POST['consecutivo'],
            'des_acti1' => $_POST['des_acti1'],
            'des_acti2' => $_POST['des_acti2'],
            'des_acti3' => $_POST['des_acti3'],
            'des_acti4' => $_POST['des_acti4'],
            'des_acti5' => $_POST['des_acti5'],
            'des_acti6' => $_POST['des_acti6'],
            'des_acti7' => $_POST['des_acti7'],
            'des_acti8' => $_POST['des_acti8'],
            'des_acti9' => $_POST['des_acti9'],
            'des_acti10' => $_POST['des_acti10'],
            'des_acti11' => $_POST['des_acti11'],
            'des_acti12' => $_POST['des_acti12'],
            'des_acti13' => $_POST['des_acti13'],
            'des_acti14' => $_POST['des_acti14'],
            'des_acti15' => $_POST['des_acti15'],
            'reporto' => $_POST['reporto'],
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
            'capacitacion' => $_POST['capacitacion'],
            'aceptacion_capacitacion' => $_POST['aceptacion_capacitacion'],
            'recomendaciones' => $_POST['recomendaciones'],
            'proxima_inter' => $_POST['proxima_inter'],
            'foto' => $_POST['foto'],
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
            $motivo_asistencia = $datos['motivo_asistencia'];
            $tipo = $datos['tipo'];
            $mantenimiento = $datos['mantenimiento'];

            $consecutivo = $datos['consecutivo'];
            $reporto = $datos['reporto'];
            $des_acti1 = $datos['des_acti1'];
            $des_acti2 = $datos['des_acti2'];
            $des_acti3 = $datos['des_acti3'];
            $des_acti4 = $datos['des_acti4'];
            $des_acti5 = $datos['des_acti5'];
            $des_acti6 = $datos['des_acti6'];
            $des_acti7 = $datos['des_acti7'];
            $des_acti8 = $datos['des_acti8'];
            $des_acti9 = $datos['des_acti9'];
            $des_acti10 = $datos['des_acti10'];
            $des_acti11 = $datos['des_acti11'];
            $des_acti12 = $datos['des_acti12'];
            $des_acti13 = $datos['des_acti13'];
            $des_acti14 = $datos['des_acti14'];
            $des_acti15 = $datos['des_acti15'];

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
            $capacitacion = $datos['capacitacion'];
            $aceptacion_capacitacion = $datos['aceptacion_capacitacion'];
            $recomendaciones = $datos['recomendaciones'];
            $proxima_inter = $datos['proxima_inter'];
            $foto = $datos['foto'];


            $this->BitacoraMttoModelo->actualizar($id_bitacora, $planta, $modelo, $maquina, $fecha, $motivo_asistencia, $tipo, $mantenimiento, $consecutivo, $des_acti1, $des_acti2, $des_acti3, $des_acti4, $des_acti5, $des_acti6, $des_acti7, $des_acti8, $des_acti9, $des_acti10, $des_acti11, $des_acti12, $des_acti13, $des_acti14, $des_acti15, $reporto, $des_acti, $ref_usadas1, $ref_usadas2, $ref_usadas3, $ref_usadas4, $ref_usadas5, $ref_usadas6, $ref_usadas7, $ref_usadas8, $ref_usadas9, $ref_usadas10, $ref_usadas11, $ref_usadas12, $ref_usadas13, $ref_usadas14, $ref_usadas15, $ref_usadas16, $ref_usadas17, $ref_usadas18, $ref_usadas19, $ref_usadas20, $ref_usadas21, $ref_usadas22, $ref_usadas23, $ref_usadas24, $ref_usadas25, $ref_usadas26, $ref_usadas27, $ref_usadas28, $ref_usadas29, $ref_usadas30, $ref_recomen1, $ref_recomen2, $ref_recomen3, $ref_recomen4, $ref_recomen5, $ref_recomen6, $ref_recomen7, $ref_recomen8, $ref_recomen9, $ref_recomen10, $ref_recomen11, $ref_recomen12, $ref_recomen13, $ref_recomen14, $ref_recomen15, $ref_recomen16, $ref_recomen17, $ref_recomen18, $ref_recomen19, $ref_recomen20, $ref_recomen21, $ref_recomen22, $ref_recomen23, $ref_recomen24, $ref_recomen25, $ref_recomen26, $ref_recomen27, $ref_recomen28, $ref_recomen29, $ref_recomen30, $capacitacion, $aceptacion_capacitacion, $recomendaciones, $foto);
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
            'motivo_asistencia' => $_POST['motivo_asistencia'],
            'tipo' => $_POST['tipo'],
            'mantenimiento' => $_POST['mantenimiento'],
            'consecutivo' => $_POST['consecutivo'],
            'des_acti1' => $_POST['des_acti1'],
            'des_acti2' => $_POST['des_acti2'],
            'des_acti3' => $_POST['des_acti3'],
            'des_acti4' => $_POST['des_acti4'],
            'des_acti5' => $_POST['des_acti5'],
            'des_acti6' => $_POST['des_acti6'],
            'des_acti7' => $_POST['des_acti7'],
            'des_acti8' => $_POST['des_acti8'],
            'des_acti9' => $_POST['des_acti9'],
            'des_acti10' => $_POST['des_acti10'],
            'des_acti11' => $_POST['des_acti11'],
            'des_acti12' => $_POST['des_acti12'],
            'des_acti13' => $_POST['des_acti13'],
            'des_acti14' => $_POST['des_acti14'],
            'des_acti15' => $_POST['des_acti15'],
            'reporto' => $_POST['reporto'],
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
            'capacitacion' => $_POST['capacitacion'],
            'aceptacion_capacitacion' => $_POST['aceptacion_capacitacion'],
            'recomendaciones' => $_POST['recomendaciones'],
            'proxima_inter' => $_POST['proxima_inter'],
            'foto' => $_POST['foto'],
        );

        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
        $this->BitacoraMttoModelo->actualizar($data);
        redirect('BitacoraMtto');
    }

    public function actualizar($id) {
        $this->load->model('BitacoraMtto/BitacoraMttoModelo');

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
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraMttoModelo->get_by_id($kondisi);
            return $this->load->view('BitacoraMtto/modificarBitacoraMtto_1', $data);
            $this->load->view('footer');
        }  else if ($dataLevel == "is_director") {


        $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraMttoModelo->get_by_id($kondisi);
            return $this->load->view('BitacoraMtto/modificarBitacoraMtto_1', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {


             $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraMttoModelo->get_by_id($kondisi);
            return $this->load->view('BitacoraMtto/modificarBitacoraMtto_1', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_jefe_mantenimiento") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraMttoModelo->get_by_id($kondisi);
            return $this->load->view('BitacoraMtto/modificarBitacoraMtto_1', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_mantenimiento") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->BitacoraMttoModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraMttoModelo->get_by_id($kondisi);
            return $this->load->view('BitacoraMtto/modificarBitacoraMtto_1', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function updatedata() {


        $planta = $this->input->post('planta');
        $modelo = $this->input->post('modelo');
        $maquina = $this->input->post('maquina');
        $fecha = $this->input->post('fecha');
        $motivo_asistencia = $this->input->post('motivo_asistencia');
        $tipo = $this->input->post('tipo');
        $mantenimiento = $this->input->post('mantenimineto');
        $consecutivo = $this->input->post('consecutivo');
        $reporto = $this->input->post('reporto');
        $des_acti1 = $this->input->post('des_acti1');
        $des_acti2 = $this->input->post('des_acti2');
        $des_acti3 = $this->input->post('des_acti3');
        $des_acti4 = $this->input->post('des_acti4');
        $des_acti5 = $this->input->post('des_acti5');
        $des_acti6 = $this->input->post('des_acti6');
        $des_acti7 = $this->input->post('des_acti7');
        $des_acti8 = $this->input->post('des_acti8');
        $des_acti9 = $this->input->post('des_acti9');
        $des_acti10 = $this->input->post('des_acti10');
        $des_acti11 = $this->input->post('des_acti11');
        $des_acti12 = $this->input->post('des_acti12');
        $des_acti13 = $this->input->post('des_acti13');
        $des_acti14 = $this->input->post('des_acti14');
        $des_acti15 = $this->input->post('des_acti15');
        $ref_usadas1 = $this->input->post('ref_usadas1');
        $ref_usadas2 = $this->input->post('ref_usadas2');
        $ref_usadas3 = $this->input->post('ref_usadas3');
        $ref_usadas4 = $this->input->post('ref_usadas4');
        $ref_usadas5 = $this->input->post('ref_usadas5');
        $ref_usadas6 = $this->input->post('ref_usadas6');
        $ref_usadas7 = $this->input->post('ref_usadas7');
        $ref_usadas8 = $this->input->post('ref_usadas8');
        $ref_usadas9 = $this->input->post('ref_usadas9');
        $ref_usadas10 = $this->input->post('ref_usadas10');
        $ref_usadas11 = $this->input->post('ref_usadas11');
        $ref_usadas12 = $this->input->post('ref_usadas12');
        $ref_usadas13 = $this->input->post('ref_usadas13');
        $ref_usadas14 = $this->input->post('ref_usadas14');
        $ref_usadas15 = $this->input->post('ref_usadas15');
        $ref_usadas16 = $this->input->post('ref_usadas16');
        $ref_usadas17 = $this->input->post('ref_usadas17');
        $ref_usadas18 = $this->input->post('ref_usadas18');
        $ref_usadas19 = $this->input->post('ref_usadas19');
        $ref_usadas20 = $this->input->post('ref_usadas20');
        $ref_usadas21 = $this->input->post('ref_usadas21');
        $ref_usadas22 = $this->input->post('ref_usadas22');
        $ref_usadas23 = $this->input->post('ref_usadas23');
        $ref_usadas24 = $this->input->post('ref_usadas24');
        $ref_usadas25 = $this->input->post('ref_usadas25');
        $ref_usadas26 = $this->input->post('ref_usadas26');
        $ref_usadas27 = $this->input->post('ref_usadas27');
        $ref_usadas28 = $this->input->post('ref_usadas28');
        $ref_usadas29 = $this->input->post('ref_usadas29');
        $ref_usadas30 = $this->input->post('ref_usadas30');


        $ref_recomen1 = $this->input->post('ref_recomen1');
        $ref_recomen2 = $this->input->post('ref_recomen2');
        $ref_recomen3 = $this->input->post('ref_recomen3');
        $ref_recomen4 = $this->input->post('ref_recomen4');
        $ref_recomen5 = $this->input->post('ref_recomen5');
        $ref_recomen6 = $this->input->post('ref_recomen6');
        $ref_recomen7 = $this->input->post('ref_recomen7');
        $ref_recomen8 = $this->input->post('ref_recomen8');
        $ref_recomen9 = $this->input->post('ref_recomen9');
        $ref_recomen10 = $this->input->post('ref_recomen10');
        $ref_recomen11 = $this->input->post('ref_recomen11');
        $ref_recomen12 = $this->input->post('ref_recomen12');
        $ref_recomen13 = $this->input->post('ref_recomen13');
        $ref_recomen14 = $this->input->post('ref_recomen14');
        $ref_recomen15 = $this->input->post('ref_recomen15');
        $ref_recomen16 = $this->input->post('ref_recomen16');
        $ref_recomen17 = $this->input->post('ref_recomen17');
        $ref_recomen18 = $this->input->post('ref_recomen18');
        $ref_recomen19 = $this->input->post('ref_recomen19');
        $ref_recomen20 = $this->input->post('ref_recomen20');
        $ref_recomen21 = $this->input->post('ref_recomen21');
        $ref_recomen22 = $this->input->post('ref_recomen22');
        $ref_recomen23 = $this->input->post('ref_recomen23');
        $ref_recomen24 = $this->input->post('ref_recomen24');
        $ref_recomen25 = $this->input->post('ref_recomen25');
        $ref_recomen26 = $this->input->post('ref_recomen26');
        $ref_recomen27 = $this->input->post('ref_recomen27');
        $ref_recomen28 = $this->input->post('ref_recomen28');
        $ref_recomen29 = $this->input->post('ref_recomen29');
        $ref_recomen30 = $this->input->post('ref_recomen30');
        $capacitacion = $this->input->post('capacitacion');
        $aceptacion_capacitacion = $this->input->post('aceptacion_capacitacion');
        $recomendaciones = $this->input->post('recomendaciones');
        $proxima_inter = $this->input->post('proxima_inter');
        $foto = $this->input->post('foto');























        $path = './assets/bitacora_mtto/';
        $id = $this->input->post('id');
        $kondisi = array('id_bitacora' => $id);
        // get fotoz


        $config['upload_path'] = './assets/bitacora_mtto';
        $config['allowed_types'] = '*';
<<<<<<< HEAD
      // $config['allowed_types'] = 'jpeg|jpg|png';
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $config['max_size'] = '20480';  //2MB max
          $config['max_width'] = '44800'; // pixel
          $config['max_height'] = '44800'; // pixel 

        $this->upload->initialize($config);


        $data['planta'] = $planta;
        $data['modelo'] = $modelo;
        $data['maquina'] = $maquina;
        $data['fecha'] = $fecha;
        $data['motivo_asistencia'] = $motivo_asistencia;
        $data['tipo'] = $tipo;
        $data['mantenimiento'] = $mantenimiento;
        $data['consecutivo'] = $consecutivo;
        $data['reporto'] = $reporto;
        $data['des_acti1'] = $des_acti1;
        $data['des_acti2'] = $des_acti2;
        $data['des_acti3'] = $des_acti3;
        $data['des_acti4'] = $des_acti4;
        $data['des_acti5'] = $des_acti5;
        $data['des_acti6'] = $des_acti6;
        $data['des_acti7'] = $des_acti7;
        $data['des_acti8'] = $des_acti8;
        $data['des_acti9'] = $des_acti9;
        $data['des_acti10'] = $des_acti10;
        $data['des_acti11'] = $des_acti11;
        $data['des_acti12'] = $des_acti12;
        $data['des_acti13'] = $des_acti13;
        $data['des_acti14'] = $des_acti14;
        $data['des_acti15'] = $des_acti15;
        $data['ref_usadas1'] = $ref_usadas1;
        $data['ref_usadas2'] = $ref_usadas2;
        $data['ref_usadas3'] = $ref_usadas3;
        $data['ref_usadas4'] = $ref_usadas4;
        $data['ref_usadas5'] = $ref_usadas5;
        $data['ref_usadas6'] = $ref_usadas6;
        $data['ref_usadas7'] = $ref_usadas7;
        $data['ref_usadas8'] = $ref_usadas8;
        $data['ref_usadas9'] = $ref_usadas9;
        $data['ref_usadas10'] = $ref_usadas10;
        $data['ref_usadas11'] = $ref_usadas11;
        $data['ref_usadas12'] = $ref_usadas12;
        $data['ref_usadas13'] = $ref_usadas13;
        $data['ref_usadas14'] = $ref_usadas14;
        $data['ref_usadas15'] = $ref_usadas15;
        $data['ref_usadas16'] = $ref_usadas16;
        $data['ref_usadas17'] = $ref_usadas17;
        $data['ref_usadas18'] = $ref_usadas18;
        $data['ref_usadas19'] = $ref_usadas19;
        $data['ref_usadas20'] = $ref_usadas20;
        $data['ref_usadas21'] = $ref_usadas21;
        $data['ref_usadas22'] = $ref_usadas22;
        $data['ref_usadas23'] = $ref_usadas23;
        $data['ref_usadas24'] = $ref_usadas24;
        $data['ref_usadas25'] = $ref_usadas25;
        $data['ref_usadas26'] = $ref_usadas26;
        $data['ref_usadas27'] = $ref_usadas27;
        $data['ref_usadas28'] = $ref_usadas28;
        $data['ref_usadas29'] = $ref_usadas29;
        $data['ref_usadas30'] = $ref_usadas30;
        $data['ref_recomen1'] = $ref_recomen1;
        $data['ref_recomen2'] = $ref_recomen2;
        $data['ref_recomen3'] = $ref_recomen3;
        $data['ref_recomen4'] = $ref_recomen4;
        $data['ref_recomen5'] = $ref_recomen5;
        $data['ref_recomen6'] = $ref_recomen6;
        $data['ref_recomen7'] = $ref_recomen7;
        $data['ref_recomen8'] = $ref_recomen8;
        $data['ref_recomen9'] = $ref_recomen9;
        $data['ref_recomen10'] = $ref_recomen10;
        $data['ref_recomen11'] = $ref_recomen11;
        $data['ref_recomen12'] = $ref_recomen12;
        $data['ref_recomen13'] = $ref_recomen13;
        $data['ref_recomen14'] = $ref_recomen14;
        $data['ref_recomen15'] = $ref_recomen15;
        $data['ref_recomen16'] = $ref_recomen16;
        $data['ref_recomen17'] = $ref_recomen17;
        $data['ref_recomen18'] = $ref_recomen18;
        $data['ref_recomen19'] = $ref_recomen19;
        $data['ref_recomen20'] = $ref_recomen20;
        $data['ref_recomen21'] = $ref_recomen21;
        $data['ref_recomen22'] = $ref_recomen22;
        $data['ref_recomen23'] = $ref_recomen23;
        $data['ref_recomen24'] = $ref_recomen24;
        $data['ref_recomen25'] = $ref_recomen25;
        $data['ref_recomen26'] = $ref_recomen26;
        $data['ref_recomen27'] = $ref_recomen27;
        $data['ref_recomen28'] = $ref_recomen28;
        $data['ref_recomen29'] = $ref_recomen29;
        $data['ref_recomen30'] = $ref_recomen30;
        $data['capacitacion'] = $capacitacion;
        $data['aceptacion_capacitacion'] = $aceptacion_capacitacion;
        $data['recomendaciones'] = $recomendaciones;
        $data['proxima_inter'] = $proxima_inter;





        $this->upload->do_upload('foto');
        $foto = $this->upload->data();

        if (!empty($_FILES['foto']['name'])) {
            $data['foto'] = $foto['file_name'];
        }







        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));
        $this->BitacoraMttoModelo->updatedata($data, $kondisi);
        redirect('BitacoraMtto');
    }

}
