<?php

/**
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 16/11/2018 Hora 2:34 pm
 * Sistema de Control Robuspack
 */
class ClienteRefacciones extends CI_Controller {

    public $status;
    public $roles;

    public function __construct() {
        parent::__construct();

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');
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
        $data['css'] = $this->css;
        $data['base'] = $this->base;

        $this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');
        $data['title'] = 'Robuspack';
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
            $data['ventas'] = $this->ClienteRefaccionesModelo->query();

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            $data['totalRegistroSicCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicCarlos(1);
            $data['totalRegistroSicAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicAldo(1);
            $data['totalRegistroSicElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicElvira(1);
            $data['totalRegistroSicJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicJaime(1);


            $data['totalRegistroSicNoTroquelaCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaCarlos(1);
            $data['totalRegistroSicNoTroquelaAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaAldo(1);
            $data['totalRegistroSicNoTroquelaElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaElvira(1);
            $data['totalRegistroSicNoTroquelaJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaJaime(1);


            $data['totalRegistroSicConfirmacionCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionCarlos(1);
            $data['totalRegistroSicConfirmacionAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionAldo(1);
            $data['totalRegistroSicConfirmacionElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionElvira(1);
            $data['totalRegistroSicConfirmacionJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionJaime(1);


            $data['totalRegistroSicOrdenCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenCarlos(1);
            $data['totalRegistroSicOrdenAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenAldo(1);
            $data['totalRegistroSicOrdenElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenElvira(1);
            $data['totalRegistroSicOrdenJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenJaime(1);


            $data['totalRegistroSicSinPedidoCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoCarlos(1);
            $data['totalRegistroSicSinPedidoAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoAldo(1);
            $data['totalRegistroSicSinPedidoElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoElvira(1);
            $data['totalRegistroSicSinPedidoJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoJaime(1);


            $data['totalRegistroSic'] = $this->ClienteRefaccionesModelo->totalRegistroSic(1);
            $data['totalRegistroSicNoTroquela'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquela(1);
            $data['totalRegistroSicSConsignacion'] = $this->ClienteRefaccionesModelo->totalRegistroSicSConsignacion(1);
            $data['totalRegistroSicOrdenCompra'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenCompra(1);
            $data['totalRegistroSicSinPedido'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedido(1);


            $data['totalRegistroSicCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicCarlos(1);
            $data['totalRegistroSicAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicAldo(1);
            $data['totalRegistroSicElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicElvira(1);
            $data['totalRegistroSicJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicJaime(1);


            $data['totalRegistroSicNoTroquelaCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaCarlos(1);
            $data['totalRegistroSicNoTroquelaAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaAldo(1);
            $data['totalRegistroSicNoTroquelaElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaElvira(1);
            $data['totalRegistroSicNoTroquelaJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaJaime(1);


            $data['totalRegistroSicConfirmacionCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionCarlos(1);
            $data['totalRegistroSicConfirmacionAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionAldo(1);
            $data['totalRegistroSicConfirmacionElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionElvira(1);
            $data['totalRegistroSicConfirmacionJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionJaime(1);


            $data['totalRegistroSicOrdenCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenCarlos(1);
            $data['totalRegistroSicOrdenAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenAldo(1);
            $data['totalRegistroSicOrdenElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenElvira(1);
            $data['totalRegistroSicOrdenJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenJaime(1);


            $data['totalRegistroSicSinPedidoCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoCarlos(1);
            $data['totalRegistroSicSinPedidoAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoAldo(1);
            $data['totalRegistroSicSinPedidoElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoElvira(1);
            $data['totalRegistroSicSinPedidoJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoJaime(1);


            $data['totalRegistroSic'] = $this->ClienteRefaccionesModelo->totalRegistroSic(1);
            $data['totalRegistroSicNoTroquela'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquela(1);
            $data['totalRegistroSicSConsignacion'] = $this->ClienteRefaccionesModelo->totalRegistroSicSConsignacion(1);
            $data['totalRegistroSicOrdenCompra'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenCompra(1);
            $data['totalRegistroSicSinPedido'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedido(1);
            
            
            
            
            
            
            $this->load->view('ClienteRefacciones/listarClienteRefacciones', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['ventas'] = $this->ClienteRefaccionesModelo->query();

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            
            
            
            
            
            $data['totalRegistroSicCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicCarlos(1);
            $data['totalRegistroSicAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicAldo(1);
            $data['totalRegistroSicElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicElvira(1);
            $data['totalRegistroSicJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicJaime(1);


            $data['totalRegistroSicNoTroquelaCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaCarlos(1);
            $data['totalRegistroSicNoTroquelaAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaAldo(1);
            $data['totalRegistroSicNoTroquelaElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaElvira(1);
            $data['totalRegistroSicNoTroquelaJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaJaime(1);


            $data['totalRegistroSicConfirmacionCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionCarlos(1);
            $data['totalRegistroSicConfirmacionAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionAldo(1);
            $data['totalRegistroSicConfirmacionElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionElvira(1);
            $data['totalRegistroSicConfirmacionJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionJaime(1);


            $data['totalRegistroSicOrdenCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenCarlos(1);
            $data['totalRegistroSicOrdenAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenAldo(1);
            $data['totalRegistroSicOrdenElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenElvira(1);
            $data['totalRegistroSicOrdenJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenJaime(1);


            $data['totalRegistroSicSinPedidoCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoCarlos(1);
            $data['totalRegistroSicSinPedidoAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoAldo(1);
            $data['totalRegistroSicSinPedidoElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoElvira(1);
            $data['totalRegistroSicSinPedidoJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoJaime(1);


            $data['totalRegistroSic'] = $this->ClienteRefaccionesModelo->totalRegistroSic(1);
            $data['totalRegistroSicNoTroquela'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquela(1);
            $data['totalRegistroSicSConsignacion'] = $this->ClienteRefaccionesModelo->totalRegistroSicSConsignacion(1);
            $data['totalRegistroSicOrdenCompra'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenCompra(1);
            $data['totalRegistroSicSinPedido'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedido(1);


            $data['totalRegistroSicCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicCarlos(1);
            $data['totalRegistroSicAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicAldo(1);
            $data['totalRegistroSicElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicElvira(1);
            $data['totalRegistroSicJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicJaime(1);


            $data['totalRegistroSicNoTroquelaCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaCarlos(1);
            $data['totalRegistroSicNoTroquelaAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaAldo(1);
            $data['totalRegistroSicNoTroquelaElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaElvira(1);
            $data['totalRegistroSicNoTroquelaJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquelaJaime(1);


            $data['totalRegistroSicConfirmacionCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionCarlos(1);
            $data['totalRegistroSicConfirmacionAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionAldo(1);
            $data['totalRegistroSicConfirmacionElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionElvira(1);
            $data['totalRegistroSicConfirmacionJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicConfirmacionJaime(1);


            $data['totalRegistroSicOrdenCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenCarlos(1);
            $data['totalRegistroSicOrdenAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenAldo(1);
            $data['totalRegistroSicOrdenElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenElvira(1);
            $data['totalRegistroSicOrdenJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenJaime(1);


            $data['totalRegistroSicSinPedidoCarlos'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoCarlos(1);
            $data['totalRegistroSicSinPedidoAldo'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoAldo(1);
            $data['totalRegistroSicSinPedidoElvira'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoElvira(1);
            $data['totalRegistroSicSinPedidoJaime'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedidoJaime(1);


            $data['totalRegistroSic'] = $this->ClienteRefaccionesModelo->totalRegistroSic(1);
            $data['totalRegistroSicNoTroquela'] = $this->ClienteRefaccionesModelo->totalRegistroSicNoTroquela(1);
            $data['totalRegistroSicSConsignacion'] = $this->ClienteRefaccionesModelo->totalRegistroSicSConsignacion(1);
            $data['totalRegistroSicOrdenCompra'] = $this->ClienteRefaccionesModelo->totalRegistroSicOrdenCompra(1);
            $data['totalRegistroSicSinPedido'] = $this->ClienteRefaccionesModelo->totalRegistroSicSinPedido(1);
            
            
            $this->load->view('ClienteRefacciones/listarClienteRefacciones', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $data['ventas'] = $this->ClienteRefaccionesModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteRefacciones/listarClienteRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $data['ventas'] = $this->ClienteRefaccionesModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteRefacciones/listarClienteRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            $data['ventas'] = $this->ClienteRefaccionesModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteRefacciones/listarClienteRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_servicio_a_clientes") {
            $data['ventas'] = $this->ClienteRefaccionesModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteRefacciones/listarClienteRefacciones', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }

        //sesion

        /* } else {//Si el usuario no está¡ logueado lo manda a registrarse
          redirect('main/logeo');
          } */
    }

    public function eliminar($id) {
        $this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');
        $this->ClienteRefaccionesModelo->delete($id);
        $this->index();
        redirect('ClienteRefacciones');
    }

    public function agregar() {

        $data['css'] = $this->css;
        $data['base'] = $this->base;

        $this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');
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
            $data['ventas'] = $this->ClienteRefaccionesModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            $this->load->view('ClienteRefacciones/agregarClienteRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            $this->load->view('ClienteRefacciones/agregarClienteRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            $this->load->view('ClienteRefacciones/agregarClienteRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria_refacciones") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            $this->load->view('ClienteRefacciones/agregarClienteRefacciones', $data);
            $this->load->view('footer');
        }  else if ($dataLevel == "is_editor") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            $this->load->view('ClienteRefacciones/agregarClienteRefacciones', $data);
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
            'referencia' => $_POST['referencia'],
            'cantidad_maxima' => $_POST['cantidad_maxima'],
            'precio_unitario' => $_POST['precio_unitario'],
            'vida_util_dias' => $_POST['vida_util_dias'],
            'periodo_surtimiento' => $_POST['periodo_surtimiento'],
            'periodo_surtimiento_vida_util' => $_POST['periodo_surtimiento_vida_util'],
            'cantidad_minima' => $_POST['cantidad_minima'],
            'paqueteria' => $_POST['paqueteria'],
            'tipo_entrega' => $_POST['tipo_entrega'],
            'dias_credito' => $_POST['dias_credito'],
            'diametro_rod_ml' => $_POST['diametro_rod_ml'],
            'pulgadas' => $_POST['pulgadas'],
            'maquina_cliente' => $_POST['maquina_cliente'],
            'capacitacion' => $_POST['capacitacion'],
            'capacitacion_fecha' => $_POST['capacitacion_fecha'],
            'piezas_juego' => $_POST['piezas_juego'],
            'costo_juego' => $_POST['costo_juego'],
            'juego_mensuales' => $_POST['juego_mensuales'],
            'golpes_prom_comp' => $_POST['golpes_prom_comp'],
            'golpes_prom_rodicut' => $_POST['golpes_prom_rodicut'],
            'beneficio_golpes_prom' => $_POST['beneficio_golpes_prom'],
            'tiempo_rot_com' => $_POST['tiempo_rot_com'],
            'tiempo_rot_rodicut' => $_POST['tiempo_rot_rodicut'],
            'beneficio_rot_prom' => $_POST['beneficio_rot_prom'],
            'precio_golpe' => $_POST['precio_golpe'],
            'ciudad_planta' => $_POST['ciudad_planta'],
            'observacion' => $_POST['observacion'],
            'marca_maquina' => $_POST['marca_maquina'],
            'contacto' => $_POST['contacto'],
            'tipo_maquina' => $_POST['tipo_maquina'],
            'formato' => $_POST['formato'],
            'ancho' => $_POST['ancho'],
            'troquel' => $_POST['troquel'],
            'uso_de_cfdi' => $_POST['uso_de_cfdi'],
            'metodo_pago' => $_POST['metodo_pago'],
            'fecha_visita' => $_POST['fecha_visita'],
            'fecha_seguimiento' => $_POST['fecha_seguimiento'],
            'golpes_maquina' => $_POST['golpes_maquina'],
            'confirmacion_orden_compra' => $_POST['confirmacion_orden_compra'],
            'fecha_ultima_factura' => $_POST['fecha_ultima_factura'],
            'consumo_real' => $_POST['consumo_real'],
            'archivo' => $_POST['archivo'],
            
            
            
            'codigo_cuchilla' => $_POST['codigo_cuchilla'],
            'cantidad_cuchilla' => $_POST['cantidad_cuchilla'],
            'precio_cuchilla' => $_POST['precio_cuchilla'],
            'codigo_cuchilla_2' => $_POST['codigo_cuchilla_2'],
            'cantidad_cuchilla_2' => $_POST['cantidad_cuchilla_2'],
            'precio_cuchilla_2' => $_POST['precio_cuchilla_2'],
            'codigo_cuchilla_3' => $_POST['codigo_cuchilla_3'],
            'cantidad_cuchilla_3' => $_POST['cantidad_cuchilla_3'],
            'precio_cuchilla_3' => $_POST['precio_cuchilla_3'],
            'codigo_cuchilla_4' => $_POST['codigo_cuchilla_4'],
            'cantidad_cuchilla_4' => $_POST['cantidad_cuchilla_4'],
            'precio_cuchilla_4' => $_POST['precio_cuchilla_4'],
            'codigo_cuchilla_5' => $_POST['codigo_cuchilla_5'],
            'cantidad_cuchilla_5' => $_POST['cantidad_cuchilla_5'],
            'precio_cuchilla_5' => $_POST['precio_cuchilla_5'],
            'codigo_cuchilla_6' => $_POST['codigo_cuchilla_6'],
            'cantidad_cuchilla_6' => $_POST['cantidad_cuchilla_6'],
            'precio_cuchilla_6' => $_POST['precio_cuchilla_6'],
            'codigo_cuchilla_7' => $_POST['codigo_cuchilla_7'],
            'cantidad_cuchilla_7' => $_POST['cantidad_cuchilla_7'],
            'precio_cuchilla_7' => $_POST['precio_cuchilla_7'],
            'codigo_cuchilla_8' => $_POST['codigo_cuchilla_8'],
            'cantidad_cuchilla_8' => $_POST['cantidad_cuchilla_8'],
            'precio_cuchilla_8' => $_POST['precio_cuchilla_8'],
            'codigo_cuchilla_9' => $_POST['codigo_cuchilla_9'],
            'cantidad_cuchilla_9' => $_POST['cantidad_cuchilla_9'],
            'precio_cuchilla_9' => $_POST['precio_cuchilla_9'],
            'codigo_cuchilla_10' => $_POST['codigo_cuchilla_10'],
            'cantidad_cuchilla_10' => $_POST['cantidad_cuchilla_10'],
            'precio_cuchilla_10' => $_POST['precio_cuchilla_10'],
            'codigo_cuchilla_11' => $_POST['codigo_cuchilla_11'],
            'cantidad_cuchilla_11' => $_POST['cantidad_cuchilla_11'],
            'precio_cuchilla_11' => $_POST['precio_cuchilla_11'],
            
            
            'codigo_cubierta' => $_POST['codigo_cubierta'],
            'cantidad_cubierta' => $_POST['cantidad_cubierta'],
            'precio_cubierta' => $_POST['precio_cubierta'],
            'codigo_llanta' => $_POST['codigo_llanta'],
            'cantidad_llanta' => $_POST['cantidad_llanta'],
            'precio_llanta' => $_POST['precio_llanta'],
            'codigo_rasqueta' => $_POST['codigo_rasqueta'],
            'cantidad_rasqueta' => $_POST['cantidad_rasqueta'],
            'precio_rasqueta' => $_POST['precio_rasqueta'],
            
            'codigo_inserto' => $_POST['codigo_inserto'],
            'cantidad_inserto' => $_POST['cantidad_inserto'],
            'precio_inserto' => $_POST['precio_inserto'],
              'codigo_inserto_2' => $_POST['codigo_inserto_2'],
            'cantidad_inserto_2' => $_POST['cantidad_inserto_2'],
            'precio_inserto_2' => $_POST['precio_inserto_2'],
            'codigo_inserto_3' => $_POST['codigo_inserto_3'],
            'cantidad_inserto_3' => $_POST['cantidad_inserto_3'],
            'precio_inserto_3' => $_POST['precio_inserto_3'],
            'codigo_inserto_4' => $_POST['codigo_inserto_4'],
            'cantidad_inserto_4' => $_POST['cantidad_inserto_4'],
            'precio_inserto_4' => $_POST['precio_inserto_4'],
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );

        $this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');
        $this->ClienteRefaccionesModelo->add($data);
        $this->index();
        redirect('ClienteRefacciones');
    }

    public function modificar() {

        $datos = $this->input->post();
        if (isset($datos)) {
            $id_venta = $datos['id_venta'];
            $grupo = $datos['grupo'];
            $cliente = $datos['cliente'];
            $referencia = $datos['referencia'];
            $cantidad_maxima = $datos['cantidad_maxima'];
            $precio_unitario = $datos['precio_unitario'];
            $vida_util_dias = $datos['vida_util_dias'];
            $periodo_surtimiento = $datos['periodo_surtimiento'];
            $periodo_surtimiento_vida_util = $datos['periodo_surtimiento_vida_util'];
            $cantidad_minima = $datos['cantidad_minima'];
            $paqueteria = $datos['paqueteria'];
            $tipo_entrega = $datos['tipo_entrega'];
            $dias_credito = $datos['dias_credito'];
            $pulgadas = $datos['pulgadas'];
            $diametro_rod_ml = $datos['diametro_rod_ml'];
            $maquina_cliente = $datos['maquina_cliente'];
            $capacitacion = $datos['capacitacion'];
            $capacitacion_fecha = $datos['capacitacion_fecha'];
            $piezas_juego = $datos['piezas_juego'];
            $costo_juego = $datos['costo_juego'];
            $juego_mensuales = $datos['juego_mensuales'];
            $golpes_prom_comp = $datos['golpes_prom_comp'];
            /**/
            $golpes_prom_rodicut = $datos['golpes_prom_rodicut'];
            /**/
            $beneficio_golpes_prom = $datos['beneficio_golpes_prom'];
            $tiempo_rot_com = $datos['tiempo_rot_com'];
            $tiempo_rot_rodicut = $datos['tiempo_rot_rodicut'];
            $beneficio_rot_prom = $datos['beneficio_rot_prom'];
            $precio_golpe = $datos['precio_golpe'];
            $ciudad_planta = $datos['ciudad_planta'];
            $observacion = $datos['observacion'];
            $marca_maquina = $datos['marca_maquina'];
            $contacto = $datos['contacto'];
            $tipo_maquina = $datos['tipo_maquina'];
            $formato = $datos['formato'];
            $ancho = $datos['ancho'];
            $troquel = $datos['troquel'];
            $uso_de_cfdi = $datos['uso_de_cfdi'];
            $metodo_pago = $datos['metodo_pago'];

            $fecha_visita = $datos['fecha_visita'];
            $fecha_seguimiento = $datos['fecha_seguimiento'];
            $golpes_maquina = $datos['golpes_maquina'];

            $confirmacion_orden_compra = $datos['confirmacion_orden_compra'];
            $fecha_ultima_factura = $datos['fecha_ultima_factura'];
            $consumo_real = $datos['consumo_real'];
            $archivo = $datos['archivo'];
            $this->ClienteRefaccionesModelo->actualizar(
                    $id_venta, $grupo, $cliente, $referencia, $cantidad_maxima, $precio_unitario, $vida_util_dias, $periodo_surtimiento, $periodo_surtimiento_vida_util, $cantidad_minima, $paqueteria, $tipo_entrega, $dias_credito, $pulgadas, $diametro_rod_ml, $maquina_cliente, $capacitacion, $capacitacion_fecha, $piezas_juego, $costo_juego, $juego_mensuales, $golpes_prom_comp, $golpes_prom_rodicut, $beneficio_golpes_prom, $tiempo_rot_com, $tiempo_rot_rodicut, $beneficio_rot_prom, $precio_golpe, $ciudad_planta, $observacion, $marca_maquina, $contacto, $tipo_maquina, $formato, $ancho, $troquel, $uso_de_cfdi, $metodo_pago, $fecha_visita, $fecha_seguimiento, $golpes_maquina, $confirmacion_orden_compra, $fecha_ultima_factura, $consumo_real, $archivo);
            redirect('');
            redirect('ClienteRefacciones');
        }
    }

    public function obtener($id_venta) {

        $this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');





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
            //se trae los datos de la consulta del modelo
            $data['ventas'] = $this->ClienteRefaccionesModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data = $this->ClienteRefaccionesModelo->obtener($id_venta);
            //agregar para el select de refacción de tabla maquinaria
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            $this->load->view('ClienteRefacciones/modificarClienteRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {

            $data['ventas'] = $this->ClienteRefaccionesModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            //se trae el arreglo de los datos seleccionados por el di
            $data = array();
            $data = $this->ClienteRefaccionesModelo->obtener($id_venta);
            //agregar para el select de refacción de tabla maquinaria
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            $this->load->view('ClienteRefacciones/modificarClienteRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {

            $data['ventas'] = $this->ClienteRefaccionesModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            //se trae el arreglo de los datos seleccionados por el di
            $data = array();
            $data = $this->ClienteRefaccionesModelo->obtener($id_venta);
            //agregar para el select de refacción de tabla maquinaria
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            $this->load->view('ClienteRefacciones/modificarClienteRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {

            $data['ventas'] = $this->ClienteRefaccionesModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            //se trae el arreglo de los datos seleccionados por el di
            $data = array();
            $data = $this->ClienteRefaccionesModelo->obtener($id_venta);
            //agregar para el select de refacción de tabla maquinaria
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            $this->load->view('ClienteRefacciones/modificarClienteRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_servicio_a_clientes") {

            $data['ventas'] = $this->ClienteRefaccionesModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            //se trae el arreglo de los datos seleccionados por el di
            $data = array();
            $data = $this->ClienteRefaccionesModelo->obtener($id_venta);
            //agregar para el select de refacción de tabla maquinaria
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            $this->load->view('ClienteRefacciones/modificarClienteRefaccionesServicioAClientes', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function clienteRefaccionesModificar() {
        $data = array(
            'id_venta' => $_POST['id_venta'],
            'grupo' => $_POST['grupo'],
            'cliente' => $_POST['cliente'],
            'referencia' => $_POST['referencia'],
            'cantidad_maxima' => $_POST['cantidad_maxima'],
            'precio_unitario' => $_POST['precio_unitario'],
            'vida_util_dias' => $_POST['vida_util_dias'],
            'periodo_surtimiento' => $_POST['periodo_surtimiento'],
            'periodo_surtimiento_vida_util' => $_POST['periodo_surtimiento_vida_util'],
            'cantidad_minima' => $_POST['cantidad_minima'],
            'paqueteria' => $_POST['paqueteria'],
            'tipo_entrega' => $_POST['tipo_entrega'],
            'dias_credito' => $_POST['dias_credito'],
            'pulgadas' => $_POST['pulgadas'],
            'diametro_rod_ml' => $_POST['diametro_rod_ml'],
            'maquina_cliente' => $_POST['maquina_cliente'],
            'capacitacion' => $_POST['capacitacion'],
            'capacitacion_fecha' => $_POST['capacitacion_fecha'],
            'piezas_juego' => $_POST['piezas_juego'],
            'costo_juego' => $_POST['costo_juego'],
            'juego_mensuales' => $_POST['juego_mensuales'],
            'golpes_prom_comp' => $_POST['golpes_prom_comp'],
            'golpes_prom_rodicut' => $_POST['golpes_prom_rodicut'],
            'beneficio_golpes_prom' => $_POST['beneficio_golpes_prom'],
            'tiempo_rot_com' => $_POST['tiempo_rot_com'],
            'tiempo_rot_rodicut' => $_POST['tiempo_rot_rodicut'],
            'beneficio_rot_prom' => $_POST['beneficio_rot_prom'],
            'precio_golpe' => $_POST['precio_golpe'],
            'ciudad_planta' => $_POST['ciudad_planta'],
            'observacion' => $_POST['observacion'],
            'marca_maquina' => $_POST['marca_maquina'],
            'contacto' => $_POST['contacto'],
            'tipo_maquina' => $_POST['tipo_maquina'],
            'formato' => $_POST['formato'],
            'ancho' => $_POST['ancho'],
            'troquel' => $_POST['troquel'],
            'uso_de_cfdi' => $_POST['uso_de_cfdi'],
            'metodo_pago' => $_POST['metodo_pago'],
            'fecha_visita' => $_POST['fecha_visita'],
            'fecha_seguimiento' => $_POST['fecha_seguimiento'],
            'golpes_maquina' => $_POST['golpes_maquina'],
            'confirmacion_orden_compra' => $_POST['confirmacion_orden_compra'],
            'fecha_ultima_factura' => $_POST['fecha_ultima_factura'],
            'consumo_real' => $_POST['consumo_real'],
            'archivo' => $_POST['archivo'],
            
            
                 'codigo_cuchilla' => $_POST['codigo_cuchilla'],
            'cantidad_cuchilla' => $_POST['cantidad_cuchilla'],
            'precio_cuchilla' => $_POST['precio_cuchilla'],
            'codigo_cuchilla_2' => $_POST['codigo_cuchilla_2'],
'cantidad_cuchilla_2' => $_POST['cantidad_cuchilla_2'],
'precio_cuchilla_2' => $_POST['precio_cuchilla_2'],
'codigo_cuchilla_3' => $_POST['codigo_cuchilla_3'],
'cantidad_cuchilla_3' => $_POST['cantidad_cuchilla_3'],
'precio_cuchilla_3' => $_POST['precio_cuchilla_3'],
'codigo_cuchilla_4' => $_POST['codigo_cuchilla_4'],
'cantidad_cuchilla_4' => $_POST['cantidad_cuchilla_4'],
'precio_cuchilla_4' => $_POST['precio_cuchilla_4'],
'codigo_cuchilla_5' => $_POST['codigo_cuchilla_5'],
'cantidad_cuchilla_5' => $_POST['cantidad_cuchilla_5'],
'precio_cuchilla_5' => $_POST['precio_cuchilla_5'],
'codigo_cuchilla_6' => $_POST['codigo_cuchilla_6'],
'cantidad_cuchilla_6' => $_POST['cantidad_cuchilla_6'],
'precio_cuchilla_6' => $_POST['precio_cuchilla_6'],
'codigo_cuchilla_7' => $_POST['codigo_cuchilla_7'],
'cantidad_cuchilla_7' => $_POST['cantidad_cuchilla_7'],
'precio_cuchilla_7' => $_POST['precio_cuchilla_7'],
'codigo_cuchilla_8' => $_POST['codigo_cuchilla_8'],
'cantidad_cuchilla_8' => $_POST['cantidad_cuchilla_8'],
'precio_cuchilla_8' => $_POST['precio_cuchilla_8'],
'codigo_cuchilla_9' => $_POST['codigo_cuchilla_9'],
'cantidad_cuchilla_9' => $_POST['cantidad_cuchilla_9'],
'precio_cuchilla_9' => $_POST['precio_cuchilla_9'],
'codigo_cuchilla_10' => $_POST['codigo_cuchilla_10'],
'cantidad_cuchilla_10' => $_POST['cantidad_cuchilla_10'],
'precio_cuchilla_10' => $_POST['precio_cuchilla_10'],
'codigo_cuchilla_11' => $_POST['codigo_cuchilla_11'],
'cantidad_cuchilla_11' => $_POST['cantidad_cuchilla_11'],
'precio_cuchilla_11' => $_POST['precio_cuchilla_11'],
            
            
            'codigo_cubierta' => $_POST['codigo_cubierta'],
            'cantidad_cubierta' => $_POST['cantidad_cubierta'],
            'precio_cubierta' => $_POST['precio_cubierta'],
            'codigo_llanta' => $_POST['codigo_llanta'],
            'cantidad_llanta' => $_POST['cantidad_llanta'],
            'precio_llanta' => $_POST['precio_llanta'],
            'codigo_rasqueta' => $_POST['codigo_rasqueta'],
            'cantidad_rasqueta' => $_POST['cantidad_rasqueta'],
            'precio_rasqueta' => $_POST['precio_rasqueta'],
            'codigo_inserto' => $_POST['codigo_inserto'],
            'cantidad_inserto' => $_POST['cantidad_inserto'],
            'precio_inserto' => $_POST['precio_inserto']     ,
            'codigo_inserto_2' => $_POST['codigo_inserto_2'],
            'cantidad_inserto_2' => $_POST['cantidad_inserto_2'],
            'precio_inserto_2' => $_POST['precio_inserto_2'],
            'codigo_inserto_3' => $_POST['codigo_inserto_3'],
            'cantidad_inserto_3' => $_POST['cantidad_inserto_3'],
            'precio_inserto_3' => $_POST['precio_inserto_3'],
            'codigo_inserto_4' => $_POST['codigo_inserto_4'],
            'cantidad_inserto_4' => $_POST['cantidad_inserto_4'],
             'precio_inserto_4' => $_POST['precio_inserto_4'],
        );
        $this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');
        $this->ClienteRefaccionesModelo->actualizar($data);
        $this->index();
        redirect('ClienteRefacciones');
    }

    public function updatedata() {

        $grupo = $this->input->post('grupo');
        $cliente = $this->input->post('cliente');
        $referencia = $this->input->post('referencia');
        $cantidad_maxima = $this->input->post('cantidad_maxima');
        $precio_unitario = $this->input->post('precio_unitario');
        $vida_util_dias = $this->input->post('vida_util_dias');
        $periodo_surtimiento = $this->input->post('periodo_surtimiento');
        $periodo_surtimiento_vida_util = $this->input->post('periodo_surtimiento_vida_util');
        $cantidad_minima = $this->input->post('cantidad_minima');
        $paqueteria = $this->input->post('paqueteria');
        $tipo_entrega = $this->input->post('tipo_entrega');
        $dias_credito = $this->input->post('dias_credito');
        $pulgadas = $this->input->post('pulgadas');
        $diametro_rod_ml = $this->input->post('diametro_rod_ml');
        $maquina_cliente = $this->input->post('maquina_cliente');
        $capacitacion = $this->input->post('capacitacion');
        $capacitacion_fecha = $this->input->post('capacitacion_fecha');
        $piezas_juego = $this->input->post('piezas_juego');
        $costo_juego = $this->input->post('costo_juego');
        $juego_mensuales = $this->input->post('juego_mensuales');
        $golpes_prom_comp = $this->input->post('golpes_prom_comp');
        $golpes_prom_rodicut = $this->input->post('golpes_prom_rodicut');
        $beneficio_golpes_prom = $this->input->post('beneficio_golpes_prom');

        $tiempo_rot_com = $this->input->post('tiempo_rot_com');
        $tiempo_rot_rodicut = $this->input->post('tiempo_rot_rodicut');
        $beneficio_rot_prom = $this->input->post('beneficio_rot_prom');
        $precio_golpe = $this->input->post('precio_golpe');
        $ciudad_planta = $this->input->post('ciudad_planta');
        $observacion = $this->input->post('observacion');
        $marca_maquina = $this->input->post('marca_maquina');
        $contacto = $this->input->post('contacto');
        $tipo_maquina = $this->input->post('tipo_maquina');
        $formato = $this->input->post('formato');
        $ancho = $this->input->post('ancho');
        $troquel = $this->input->post('troquel');
        $uso_de_cfdi = $this->input->post('uso_de_cfdi');
        $metodo_pago = $this->input->post('metodo_pago');
        $fecha_visita = $this->input->post('fecha_visita');
        $fecha_seguimiento = $this->input->post('fecha_seguimiento');
        $golpes_maquina = $this->input->post('golpes_maquina');
        $confirmacion_orden_compra = $this->input->post('confirmacion_orden_compra');
        $fecha_ultima_factura = $this->input->post('fecha_ultima_factura');
        $consumo_real = $this->input->post('consumo_real');



       $codigo_cuchilla = $this->input->post('codigo_cuchilla');
        $cantidad_cuchilla = $this->input->post('cantidad_cuchilla');
        $precio_cuchilla = $this->input->post('precio_cuchilla');
         $codigo_cuchilla_2 = $this->input->post('codigo_cuchilla_2');
$cantidad_cuchilla_2 = $this->input->post('cantidad_cuchilla_2');
$precio_cuchilla_2 = $this->input->post('precio_cuchilla_2');
$codigo_cuchilla_3 = $this->input->post('codigo_cuchilla_3');
$cantidad_cuchilla_3 = $this->input->post('cantidad_cuchilla_3');
$precio_cuchilla_3 = $this->input->post('precio_cuchilla_3');
$codigo_cuchilla_4 = $this->input->post('codigo_cuchilla_4');
$cantidad_cuchilla_4 = $this->input->post('cantidad_cuchilla_4');
$precio_cuchilla_4 = $this->input->post('precio_cuchilla_4');
$codigo_cuchilla_5 = $this->input->post('codigo_cuchilla_5');
$cantidad_cuchilla_5 = $this->input->post('cantidad_cuchilla_5');
$precio_cuchilla_5 = $this->input->post('precio_cuchilla_5');
$codigo_cuchilla_6 = $this->input->post('codigo_cuchilla_6');
$cantidad_cuchilla_6 = $this->input->post('cantidad_cuchilla_6');
$precio_cuchilla_6 = $this->input->post('precio_cuchilla_6');
$codigo_cuchilla_7 = $this->input->post('codigo_cuchilla_7');
$cantidad_cuchilla_7 = $this->input->post('cantidad_cuchilla_7');
$precio_cuchilla_7 = $this->input->post('precio_cuchilla_7');
$codigo_cuchilla_8 = $this->input->post('codigo_cuchilla_8');
$cantidad_cuchilla_8 = $this->input->post('cantidad_cuchilla_8');
$precio_cuchilla_8 = $this->input->post('precio_cuchilla_8');
$codigo_cuchilla_9 = $this->input->post('codigo_cuchilla_9');
$cantidad_cuchilla_9 = $this->input->post('cantidad_cuchilla_9');
$precio_cuchilla_9 = $this->input->post('precio_cuchilla_9');
$codigo_cuchilla_10 = $this->input->post('codigo_cuchilla_10');
$cantidad_cuchilla_10 = $this->input->post('cantidad_cuchilla_10');
$precio_cuchilla_10 = $this->input->post('precio_cuchilla_10');
$codigo_cuchilla_11 = $this->input->post('codigo_cuchilla_11');
$cantidad_cuchilla_11 = $this->input->post('cantidad_cuchilla_11');
$precio_cuchilla_11 = $this->input->post('precio_cuchilla_11');

        
        
        $codigo_cubierta = $this->input->post('codigo_cubierta');
        $cantidad_cubierta = $this->input->post('cantidad_cubierta');
        $precio_cubierta = $this->input->post('precio_cubierta');
        $codigo_llanta = $this->input->post('codigo_llanta');
        $cantidad_llanta = $this->input->post('cantidad_llanta');
        $precio_llanta = $this->input->post('precio_llanta');
        $codigo_rasqueta = $this->input->post('codigo_rasqueta');
        $cantidad_rasqueta = $this->input->post('cantidad_rasqueta');
        $precio_rasqueta = $this->input->post('precio_rasqueta');
        
        $codigo_inserto = $this->input->post('codigo_inserto');
        $cantidad_inserto = $this->input->post('cantidad_inserto');
        $precio_inserto = $this->input->post('precio_inserto');
          $codigo_inserto_2 = $this->input->post('codigo_inserto_2');
        $cantidad_inserto_2 = $this->input->post('cantidad_inserto_2');
        $precio_inserto_2 = $this->input->post('precio_inserto_2');
        $codigo_inserto_3 = $this->input->post('codigo_inserto_3');
        $cantidad_inserto_3 = $this->input->post('cantidad_inserto_3');
        $precio_inserto_3 = $this->input->post('precio_inserto_3');
        $codigo_inserto_4 = $this->input->post('codigo_inserto_4');
        $cantidad_inserto_4 = $this->input->post('cantidad_inserto_4');
        $precio_inserto_4 = $this->input->post('precio_inserto_4');



        
        
        
        $archivo = $this->input->post('archivo');

        $path = './assets/ClienteRefacciones/';
        $id = $this->input->post('id');
        $kondisi = array('id_venta' => $id);
        // get fotoz


        $config['upload_path'] = './assets/ClienteRefacciones';
        $config['allowed_types'] = '*';
        /* $config['max_size'] = '2048';  //2MB max
          $config['max_width'] = '4480'; // pixel
          $config['max_height'] = '4480'; // pixel */

        /*
          $config['file_name'] = $_FILES['fotopost']['name'];

          $config['file_name'] = $_FILES['fotopostpdf']['name'];
          $config['file_name'] = $_FILES['pedimentopdf']['name'];
          $config['file_name'] = $_FILES['refacciones']['name']; */
        $this->upload->initialize($config);









        $data['grupo'] = $grupo;
        $data['cliente'] = $cliente;
        $data['referencia'] = $referencia;
        $data['cantidad_maxima'] = $cantidad_maxima;
        $data['precio_unitario'] = $precio_unitario;
        $data['vida_util_dias'] = $vida_util_dias;
        $data['periodo_surtimiento'] = $periodo_surtimiento;
        $data['periodo_surtimiento_vida_util'] = $periodo_surtimiento_vida_util;
        $data['cantidad_minima'] = $cantidad_minima;
        $data['paqueteria'] = $paqueteria;
        $data['tipo_entrega'] = $tipo_entrega;
        $data['dias_credito'] = $dias_credito;
        $data['pulgadas'] = $pulgadas;
        $data['diametro_rod_ml'] = $diametro_rod_ml;
        $data['maquina_cliente'] = $maquina_cliente;
        $data['capacitacion'] = $capacitacion;
        $data['capacitacion_fecha'] = $capacitacion_fecha;
        $data['piezas_juego'] = $piezas_juego;
        $data['costo_juego'] = $costo_juego;
        $data['juego_mensuales'] = $juego_mensuales;
        $data['golpes_prom_comp'] = $golpes_prom_comp;
        $data['golpes_prom_rodicut'] = $golpes_prom_rodicut;

        $data['beneficio_golpes_prom'] = $beneficio_golpes_prom;
        $data['tiempo_rot_com'] = $tiempo_rot_com;
        $data['tiempo_rot_rodicut'] = $tiempo_rot_rodicut;
        $data['beneficio_rot_prom'] = $beneficio_rot_prom;

        $data['precio_golpe'] = $precio_golpe;
        $data['ciudad_planta'] = $ciudad_planta;
        $data['observacion'] = $observacion;
        $data['marca_maquina'] = $marca_maquina;
        $data['contacto'] = $contacto;
        $data['tipo_maquina'] = $tipo_maquina;
        $data['formato'] = $formato;
        $data['ancho'] = $ancho;
        $data['troquel'] = $troquel;
        $data['uso_de_cfdi'] = $uso_de_cfdi;
        $data['metodo_pago'] = $metodo_pago;
        $data['fecha_visita'] = $fecha_visita;
        $data['fecha_seguimiento'] = $fecha_seguimiento;
        $data['golpes_maquina'] = $golpes_maquina;
        $data['confirmacion_orden_compra'] = $confirmacion_orden_compra;
        $data['fecha_ultima_factura'] = $fecha_ultima_factura;
        $data['consumo_real'] = $consumo_real;
        
        
          $data['codigo_cuchilla'] = $codigo_cuchilla;
        $data['cantidad_cuchilla'] = $cantidad_cuchilla;
        $data['precio_cuchilla'] = $precio_cuchilla;
        $data['codigo_cubierta'] = $codigo_cubierta;
          $data['codigo_cuchilla_2'] = $codigo_cuchilla_2;
 $data['cantidad_cuchilla_2'] = $cantidad_cuchilla_2;
 $data['precio_cuchilla_2'] = $precio_cuchilla_2;
 $data['codigo_cuchilla_3'] = $codigo_cuchilla_3;
 $data['cantidad_cuchilla_3'] = $cantidad_cuchilla_3;
 $data['precio_cuchilla_3'] = $precio_cuchilla_3;
 $data['codigo_cuchilla_4'] = $codigo_cuchilla_4;
 $data['cantidad_cuchilla_4'] = $cantidad_cuchilla_4;
 $data['precio_cuchilla_4'] = $precio_cuchilla_4;
 $data['codigo_cuchilla_5'] = $codigo_cuchilla_5;
 $data['cantidad_cuchilla_5'] = $cantidad_cuchilla_5;
 $data['precio_cuchilla_5'] = $precio_cuchilla_5;
 $data['codigo_cuchilla_6'] = $codigo_cuchilla_6;
 $data['cantidad_cuchilla_6'] = $cantidad_cuchilla_6;
 $data['precio_cuchilla_6'] = $precio_cuchilla_6;
 $data['codigo_cuchilla_7'] = $codigo_cuchilla_7;
 $data['cantidad_cuchilla_7'] = $cantidad_cuchilla_7;
 $data['precio_cuchilla_7'] = $precio_cuchilla_7;
 $data['codigo_cuchilla_8'] = $codigo_cuchilla_8;
 $data['cantidad_cuchilla_8'] = $cantidad_cuchilla_8;
 $data['precio_cuchilla_8'] = $precio_cuchilla_8;
 $data['codigo_cuchilla_9'] = $codigo_cuchilla_9;
 $data['cantidad_cuchilla_9'] = $cantidad_cuchilla_9;
 $data['precio_cuchilla_9'] = $precio_cuchilla_9;
 $data['codigo_cuchilla_10'] = $codigo_cuchilla_10;
 $data['cantidad_cuchilla_10'] = $cantidad_cuchilla_10;
 $data['precio_cuchilla_10'] = $precio_cuchilla_10;
 $data['codigo_cuchilla_11'] = $codigo_cuchilla_11;
 $data['cantidad_cuchilla_11'] = $cantidad_cuchilla_11;
 $data['precio_cuchilla_11'] = $precio_cuchilla_11;
        
        $data['cantidad_cubierta'] = $cantidad_cubierta;
        $data['precio_cubierta'] = $precio_cubierta;
        $data['codigo_llanta'] = $codigo_llanta;
        $data['cantidad_llanta'] = $cantidad_llanta;
        $data['precio_llanta'] = $precio_llanta;
        $data['codigo_rasqueta'] = $codigo_rasqueta;
        $data['cantidad_rasqueta'] = $cantidad_rasqueta;
        $data['precio_rasqueta'] = $precio_rasqueta;
        $data['codigo_inserto'] = $codigo_inserto;
        $data['cantidad_inserto'] = $cantidad_inserto;
        $data['precio_inserto'] = $precio_inserto;
          $data['codigo_inserto_2'] = $codigo_inserto_2;
        $data['cantidad_inserto_2'] = $cantidad_inserto_2;
        $data['precio_inserto_2'] = $precio_inserto_2;
        $data['codigo_inserto_3'] = $codigo_inserto_3;
        $data['cantidad_inserto_3'] = $cantidad_inserto_3;
        $data['precio_inserto_3'] = $precio_inserto_3;
        $data['codigo_inserto_4'] = $codigo_inserto_4;
        $data['cantidad_inserto_4'] = $cantidad_inserto_4;
        $data['precio_inserto_4'] = $precio_inserto_4;

        //pedimento
        //refacciones
        /* $this->upload->do_upload('consumo_real');
          $consumo_real = $this->upload->data();


          if (!empty($_FILES['consumo_real']['name'])) {
          $data['consumo_real'] = $consumo_real['file_name'];
          } */


       

        //$data['archivo'] = $archivo;

        $this->upload->do_upload('archivo');
        $archivo = $this->upload->data();


        if (!empty($_FILES['archivo']['name'])) {
            $data['archivo'] = $archivo['file_name'];
        }











        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));
        $this->ClienteRefaccionesModelo->modificarClienteRefacciones($data, $kondisi);
        redirect('ClienteRefacciones');
    }

    public function actualizar($id) {
        $this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');








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
            //se trae los datos de la consulta del modelo
            //       $data['clienteCombo'] = $this->clienteRefaccionesModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo

            $kondisi = array('id_venta' => $id);
            $data['data'] = $this->ClienteRefaccionesModelo->get_by_id($kondisi);
            $this->load->view('ClienteRefacciones/modificarClienteRefaccionesPrueba', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo

            $kondisi = array('id_venta' => $id);
            $data['data'] = $this->ClienteRefaccionesModelo->get_by_id($kondisi);
            $this->load->view('ClienteRefacciones/modificarClienteRefaccionesPrueba', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_servicio_a_clientes") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo

            $kondisi = array('id_venta' => $id);
            $data['data'] = $this->ClienteRefaccionesModelo->get_by_id($kondisi);
            return $this->load->view('ClienteRefacciones/modificarClienteRefaccionesPrueba', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo

            $kondisi = array('id_venta' => $id);
            $data['data'] = $this->ClienteRefaccionesModelo->get_by_id($kondisi);
            $data['grupoCombo'] = $this->ClienteRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->ClienteRefaccionesModelo->getCliente();
            $data['options'] = $this->ClienteRefaccionesModelo->getOptions();
            return $this->load->view('ClienteRefacciones/modificarClienteRefaccionesArchivo', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->VerificacionModelo->get_by_id($kondisi);
            return $this->load->view('Verificacion/editar', $data);


            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

}
