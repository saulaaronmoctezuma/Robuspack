<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cotizador
 *
 * @author Desarrollo.robus
 */
class Cotizador extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
    }

    public function index() {
        $data['css'] = $this->css;
        $data['base'] = $this->base;
        $this->load->model('Cotizador/CotizadorModelo');
        $data['title'] = 'Lista de Catálogo Vendedor y Técnicos';

        $data['cotizador'] = $this->CotizadorModelo->query();
        $this->load->view('Cotizador/listarCotizador', $data);
    }

    public function eliminar($id) {
        $this->load->model('Cotizador/CotizadorModelo');
        $this->CotizadorModelo->delete($id);
        redirect('Cotizador');
    }

    public function agregar() {
        $data['css'] = $this->css;
        $data['base'] = $this->base;
        $this->load->view('Cotizador/agregarCotizador', $data);
    }

    public function formularioAgregar() {


        $data = array(
            'cliente' => $_POST['cliente'],
            'dir_fiscal' => $_POST['dir_fiscal'],
            'contacto' => $_POST['contacto'],
            'tel' => $_POST['tel'],
            'email' => $_POST['email'],
            'no_refacc' => $_POST['no_refacc'],
            'no_cotizacion' => $_POST['no_cotizacion'],
            'fech_solicitud' => $_POST['fech_solicitud'],
            'no_item' => $_POST['no_item'],
            'descri_esp' => $_POST['descri_esp'],
            'descri_ingles' => $_POST['descri_ingles'],
            'observaciones' => $_POST['observaciones'],
            'cod_refacc' => $_POST['cod_refacc'],
            'qty' => $_POST['qty'],
            'qty' => $_POST['qty'],
            'pre_total' => $_POST['pre_total'],
            'moneda' => $_POST['moneda']
        );

        $this->load->model('Cotizador/CotizadorModelo');
        $this->CotizadorModelo->add($data);

        redirect('Cotizador');
    }

    public function modificar() {

        $datos = $this->input->post();
        if (isset($datos)) {
            $id_cotizador = $datos['id_cotizador'];
            $cliente= $datos['cliente'];
            $dir_fiscal = $datos['dir_fiscal '];
            $contacto= $datos['contacto'];
            $tel = $datos['tel'];
            $email= $datos['email'];
            $no_refacc = $datos['o_refacc '];
            $no_cotizacion= $datos['no_cotizacion'];
            $fech_solicitud = $datos['fech_solicitud'];
            $no_item = $datos['no_item'];
            $desc_esp = $datos['esc_esp'];
            $desc_ingles = $datos['desc_ingles'];
            $observacciones = $datos['observacciones'];
            $cod_refacc= $datos['cod_refacc'];
            $modelo_maq = $datos['modelo_maq'];
            $qty = $datos['qty'];
            $pre_uni = $datos['pre_uni'];
            $pre_total= $datos['pre_total'];
            $moneda = $datos['moneda'];
           
            $this->CotizadorModelo->actualizar($id_cotizador ,$cliente,$dir_fiscal,$contacto,$tel,$email
                    ,$no_refacc,$no_cotizacion,$fech_solicitud,$no_item,$desc_esp,$desc_ingles,$observacciones
                    ,$cod_refacc,$modelo_maq,$qty,$pre_uni,$pre_total,$moneda);
            redirect('');
            redirect('Cotizador');
        }
    }

    public function obtener($id_cotizador) {
        $this->load->model('Cotizador/CotizadorModelo');
        $data = array();

        $data = $this->CotizadorModelo->obtener($id_cotizador);
        $this->load->view('Cotizador/modificarCotizador', $data);
    }

    public function cotizadorModificar() {
        $data = array(
            'id_cotizador' => $_POST['id_cotizador'],
            'cliente' => $_POST['cliente'],
            'dir_fiscal' => $_POST['dir_fiscal'],
            'contacto' => $_POST['contacto'],
            'tel' => $_POST['tel'],
            'email' => $_POST['email'],
            'no_refacc' => $_POST['no_refacc'],
            'no_cotizacion' => $_POST['no_cotizacion'],
            'fech_solicitud' => $_POST['fech_solicitud'],
            'no_item' => $_POST['no_item'],
            'descri_esp' => $_POST['descri_esp'],
            'descri_ingles' => $_POST['descri_ingles'],
            'observaciones' => $_POST['observaciones'],
            'cod_refacc' => $_POST['cod_refacc'],
            'modelo_maq' => $_POST['modelo_maq'],
            'qty' => $_POST['qty'],
            'pre_uni' => $_POST['pre_uni'],
            'pre_total' => $_POST['pre_total'],
            'moneda' => $_POST['moneda']
        );
        $this->load->model('Cotizador/CotizadorModelo');
        $this->CotizadorModelo->actualizar($data);
        redirect('Cotizador');
    }

}
