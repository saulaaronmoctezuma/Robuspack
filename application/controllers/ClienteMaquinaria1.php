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
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
 */

Class ClienteMaquinaria extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
    }

    public function index() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('ClienteMaquinaria/ClienteMaquinariaModelo');
        $data['title'] = "Lista de Clientes";

        $data['cliente_maquinaria'] = $this->ClienteMaquinariaModelo->query();



        $this->load->view('ClienteMaquinaria/listarClienteMaquinaria', $data);
    }

    public function eliminar($id) {
        $this->load->model('ClienteMaquinaria/ClienteMaquinariaModelo');
        $this->ClienteMaquinariaModelo->delete($id);
        redirect('ClienteMaquinaria');
    }

    public function agregar() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;

        $this->load->view('ClienteMaquinaria/agregarClienteMaquinaria', $data);
    }

    public function formularioAgregar() {

        $data = array(
            'prioridad' => $_POST['prioridad'],
            'empresa' => $_POST['empresa'],
            'estado' => $_POST['estado'],
            'ciudad' => $_POST['ciudad'],
            'nombre' => $_POST['nombre'],
            'estatus' => $_POST['estatus'],
            'correo1' => $_POST['correo1'],
            'correo2' => $_POST['correo2'],
            'tel_movil' => $_POST['tel_movil'],
            'tel_oficina' => $_POST['tel_oficina'],
            'extension' => $_POST['extension'],
            'necesidad' => $_POST['necesidad'],
            'compromiso' => $_POST['compromiso'],
            'fecha' => $_POST['fecha'],
            'fecha_modificacion' => $_POST['fecha_modificacion']
        );

        $this->load->model('ClienteMaquinaria/ClienteMaquinariaModelo');
        $this->ClienteMaquinariaModelo->add($data);

        redirect('ClienteMaquinaria');
    }

    public function modificar() {
        $datos = $this->input->post();
        if (isset($datos)) {
            $prioridad = $datos['prioridad'];
            $empresa = $datos['empresa'];
            $estado = $datos['estado'];
            $ciudad = $datos['ciudad'];
            $nombre = $datos['nombre'];
            $estatus = $datos['estatus'];
            $correo1 = $datos['correo1'];
            $correo2 = $datos['correo2'];
            $tel_movil = $datos['tel_movil'];
            $tel_oficina = $datos['tel_oficina'];
            $extension = $datos['extension'];
            $necesidad = $datos['necesidad'];
            $compromiso = $datos['compromiso'];
            $fecha = $datos['fecha'];
            $fecha_modificacion = $datos['fecha_modificacion'];
            $this->ClienteMaquinariaModelo->actualizar($prioridad, $empresa, $estado, $ciudad, $nombre, $estatus, $correo1, $correo2, $tel_movil, $tel_oficina, $extension, $necesidad, $compromiso, $fecha, $fecha_modificacion);
            redirect('');
            redirect('ClienteMaquinaria');
        }
    }

    public function obtener($id_cliente) {
        $this->load->model('ClienteMaquinaria/ClienteMaquinariaModelo');
        $data = array();

        $data = $this->ClienteMaquinariaModelo->obtener($id_cliente);
        $this->load->view('ClienteMaquinaria/modificarClienteMaquinaria', $data);
    }

    public function clienteMaquinariaModificar() {
        $data = array(
            'prioridad' => $_POST['prioridad'],
            'empresa' => $_POST['empresa'],
            'estado' => $_POST['estado'],
            'ciudad' => $_POST['ciudad'],
            'nombre' => $_POST['nombre'],
            'estatus' => $_POST['estatus'],
            'correo1' => $_POST['correo1'],
            'correo2' => $_POST['correo2'],
            'tel_movil' => $_POST['tel_movil'],
            'tel_oficina' => $_POST['tel_oficina'],
            'extension' => $_POST['extension'],
            'necesidad' => $_POST['necesidad'],
            'compromiso' => $_POST['compromiso'],
            'fecha' => $_POST['fecha'],
            'fecha_modificacion' => $_POST['fecha_modificacion']
        );

        $this->load->model('ClienteMaquinaria/ClienteMaquinariaModelo');
        $this->ClienteMaquinariaModelo->actualizar($data);
        redirect('ClienteMaquinaria');
    }

}
