<?php

/**
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 16/11/2018 Hora 2:34 pm
 * Sistema de Control Robuspack
 */
class ClienteRefacciones extends CI_Controller {

    public $status;
    public $roles;

    function __construct() {
        parent::__construct();
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

    public function youControllerAction() {
        if ($this->input->post) {
            echo $this->input->post("troquel");
        }
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
            'troquel' => $_POST['troquel'],
            'uso_de_cfdi' => $_POST['uso_de_cfdi'],
            'metodo_pago' => $_POST['metodo_pago'],
            'fecha_visita' => $_POST['fecha_visita'],
            'fecha_seguimiento' => $_POST['fecha_seguimiento'],
            'golpes_maquina' => $_POST['golpes_maquina'],
            'confirmacion_orden_compra' => $_POST['confirmacion_orden_compra'],
            'fecha_ultima_factura' => $_POST['fecha_ultima_factura'],
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
            $troquel = $datos['troquel'];
            $uso_de_cfdi = $datos['uso_de_cfdi'];
            $metodo_pago = $datos['metodo_pago'];

            $fecha_visita = $datos['fecha_visita'];
            $fecha_seguimiento = $datos['fecha_seguimiento'];
            $golpes_maquina = $datos['golpes_maquina'];

            $confirmacion_orden_compra = $datos['confirmacion_orden_compra'];
            $fecha_ultima_factura = $datos['fecha_ultima_factura'];
            $this->ClienteRefaccionesModelo->actualizar(
                    $id_venta, $grupo, $cliente, $referencia, $cantidad_maxima, $precio_unitario, $vida_util_dias, $periodo_surtimiento, $periodo_surtimiento_vida_util, $cantidad_minima, $paqueteria, $tipo_entrega, $dias_credito, $pulgadas, $diametro_rod_ml, $maquina_cliente, $capacitacion, $capacitacion_fecha, $piezas_juego, $costo_juego, $juego_mensuales, $golpes_prom_comp, $golpes_prom_rodicut, $beneficio_golpes_prom, $tiempo_rot_com, $tiempo_rot_rodicut, $beneficio_rot_prom, $precio_golpe, $ciudad_planta, $observacion, $marca_maquina, $contacto, $tipo_maquina, $troquel, $uso_de_cfdi, $metodo_pago, $fecha_visita, $fecha_seguimiento, $golpes_maquina, $confirmacion_orden_compra,$fecha_ultima_factura);
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
        } else if ($dataLevel == "is_maquinaria_refacciones") {

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
            'troquel' => $_POST['troquel'],
            'uso_de_cfdi' => $_POST['uso_de_cfdi'],
            'metodo_pago' => $_POST['metodo_pago'],
            'fecha_visita' => $_POST['fecha_visita'],
            'fecha_seguimiento' => $_POST['fecha_seguimiento'],
            'golpes_maquina' => $_POST['golpes_maquina'],
            'confirmacion_orden_compra' => $_POST['confirmacion_orden_compra'],
            'fecha_ultima_factura' => $_POST['fecha_ultima_factura']
        );
        $this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');
        $this->ClienteRefaccionesModelo->actualizar($data);
        $this->index();
        redirect('ClienteRefacciones');
    }

}
