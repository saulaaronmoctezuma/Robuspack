<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

Class Cliente extends CI_Controller {

    public $status;
    public $roles;

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
        $this->load->model('Cliente/ClienteModelo');
        $data['title'] = "Lista de Clientes";



        $data = $this->session->userdata;

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            $data['cliente'] = $this->ClienteModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Cliente/listarCliente', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {
            $data['cliente'] = $this->ClienteModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Cliente/listarCliente', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_editor") {
            $data['cliente'] = $this->ClienteModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Cliente/listarCliente', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_servicio_a_clientes") {
            $data['cliente'] = $this->ClienteModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Cliente/listarCliente', $data);
            $this->load->view('footer');
<<<<<<< HEAD
        }else if ($dataLevel == "is_Gerente_Ventas") {
            $data['cliente'] = $this->ClienteModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Cliente/listarCliente', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_almacen") {
            $data['cliente'] = $this->ClienteModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Cliente/listarCliente', $data);
            $this->load->view('footer');
        } else {
=======
        }  else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            redirect(site_url() . 'main/');
        }
    }

    public function eliminar($id) {
        $this->load->model('Cliente/ClienteModelo');
        $this->ClienteModelo->delete($id);
        redirect('Cliente');
    }

    public function agregar() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;



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

            $this->load->view('Cliente/agregarCliente', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $this->load->view('Cliente/agregarCliente', $data);
            $this->load->view('footer');
        }  else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $this->load->view('Cliente/agregarCliente', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_servicio_a_clientes") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $this->load->view('Cliente/agregarCliente', $data);
            $this->load->view('footer');
<<<<<<< HEAD
        }else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $this->load->view('Cliente/agregarCliente', $data);
            $this->load->view('footer');
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        }else {
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
            'cliente_sae' => $_POST['cliente_sae'],
            'cliente_sae_dolares' => $_POST['cliente_sae_dolares'],
            'razon_soc' => $_POST['razon_soc'],
            'rfc' => $_POST['rfc'],
            'direccion' => $_POST['direccion'],
            'tel_cel' => $_POST['tel_cel'],
            'extension' => $_POST['extension'],
            'correo' => $_POST['correo'],
            'correo1' => $_POST['correo1'],
            'correo2' => $_POST['correo2'],
            'correo3' => $_POST['correo3'],
            'moneda' => $_POST['moneda'],
            'cta_banc' => $_POST['cta_banc'],
            'cta_banc_dolares' => $_POST['cta_banc_dolares'],
            'vendedor_refacciones' => $_POST['vendedor_refacciones'],
            'vendedor_maquinaria' => $_POST['vendedor_maquinaria'],
            'forma_pago' => $_POST['forma_pago'],
            'metodo_pago' => $_POST['metodo_pago'],
            
            'uso_de_cfdi' => $_POST['uso_de_cfdi'],
             'direccion_entrega' => $_POST['direccion_entrega'],
            'empresa' => $_POST['empresa'],
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );

        $this->load->model('Cliente/ClienteModelo');
        $this->ClienteModelo->add($data);

        redirect('Cliente');
    }

    public function modificar() {
        $datos = $this->input->post();
        if (isset($datos)) {
            $id_cliente = $datos['id_cliente'];
            $grupo = $datos['grupo'];
            $cliente = $datos['cliente'];
            $cliente_sae = $datos['cliente_sae'];
             $cliente_sae_dolares = $datos['cliente_sae_dolares'];
            $razon_soc = $datos['razon_soc'];
            $rfc = $datos['rfc'];
            $direccion = $datos['direccion'];
            $tel_cel = $datos['tel_cel'];

            $extension = $datos['extension'];

            $correo = $datos['correo'];
            $correo1 = $datos['correo1'];
            $correo2 = $datos['correo2'];
            $correo3 = $datos['correo3'];
            $moneda = $datos['moneda'];
            $cta_banc = $datos['cta_banc'];
            $cta_banc_dolares = $datos['cta_banc_dolares'];
            $vendedor_refacciones = $datos['vendedor_refacciones'];
            $vendedor_maquinaria = $datos['vendedor_maquinaria'];
            $forma_pago = $datos['metodo_pago'];
            $metodo_pago = $datos['forma_pago'];
            $uso_de_cfdi= $datos['uso_de_cfdi'];
            $direccion_entrega = $datos['direccion_entrega'];
            $empresa= $datos['empresa'];
            $this->ClienteModelo->actualizar($id_cliente, $grupo, $cliente, $cliente_sae,$cliente_sae_dolares, $razon_soc, $rfc, $direccion, $tel_cel, 
                    $extension, $correo,$correo1,$correo2,$correo3, $moneda, $cta_banc, $cta_banc_dolares ,$vendedor_refacciones, $vendedor_maquinaria,$forma_pago,$metodo_pago,$uso_de_cfdi,$direccion_entrega, $empresa);
            redirect('');
            redirect('Cliente');
        }
    }

    public function obtener($id_cliente) {
        $this->load->model('Cliente/ClienteModelo');



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
            $data = $this->ClienteModelo->obtener($id_cliente);
            $this->load->view('Cliente/modificarCliente', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            //se trae el arreglo de los datos seleccionados por el di

            $data = array();
            $data = $this->ClienteModelo->obtener($id_cliente);
            $this->load->view('Cliente/modificarCliente', $data);

            $this->load->view('footer');
        }else if ($dataLevel == "is_editor") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            //se trae el arreglo de los datos seleccionados por el di

            $data = array();
            $data = $this->ClienteModelo->obtener($id_cliente);
            $this->load->view('Cliente/modificarCliente', $data);

            $this->load->view('footer');
        }else if ($dataLevel == "is_servicio_a_clientes") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            //se trae el arreglo de los datos seleccionados por el di

            $data = array();
            $data = $this->ClienteModelo->obtener($id_cliente);
            $this->load->view('Cliente/modificarCliente', $data);

            $this->load->view('footer');
<<<<<<< HEAD
        }else if ($dataLevel == "is_Gerente_Ventas") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            //se trae el arreglo de los datos seleccionados por el di

            $data = array();
            $data = $this->ClienteModelo->obtener($id_cliente);
            $this->load->view('Cliente/modificarCliente', $data);

            $this->load->view('footer');
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        }else {
            redirect(site_url() . 'main/');
        }
    }

    public function clienteModificar() {
        $data = array(
            'id_cliente' => $_POST['id_cliente'],
            'grupo' => $_POST['grupo'],
            'cliente' => $_POST['cliente'],
            'cliente_sae_dolares' => $_POST['cliente_sae_dolares'],
            'cliente_sae' => $_POST['cliente_sae'],
            'razon_soc' => $_POST['razon_soc'],
            'rfc' => $_POST['rfc'],
            'direccion' => $_POST['direccion'],
            'tel_cel' => $_POST['tel_cel'],
            'extension' => $_POST['extension'],
            'correo' => $_POST['correo'],
            'correo1' => $_POST['correo1'],
            'correo2' => $_POST['correo2'],
            'correo3' => $_POST['correo3'],
            'moneda' => $_POST['moneda'],
            'cta_banc' => $_POST['cta_banc'],
            'cta_banc_dolares' => $_POST['cta_banc_dolares'],
            'vendedor_refacciones' => $_POST['vendedor_refacciones'],
            'vendedor_maquinaria' => $_POST['vendedor_maquinaria'],
             'forma_pago' => $_POST['forma_pago'],
            'metodo_pago' => $_POST['metodo_pago'],
            'uso_de_cfdi' => $_POST['uso_de_cfdi'],
             'direccion_entrega' => $_POST['direccion_entrega'],
            'empresa' => $_POST['empresa']
        );

        $this->load->model('Cliente/ClienteModelo');
        $this->ClienteModelo->actualizar($data);
        redirect('Cliente');
    }
}
