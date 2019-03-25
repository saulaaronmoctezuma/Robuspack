<?php

class Placa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        $this->load->model('Placa/PlacaModelo');
    }

    public function index() {
        $data['css'] = $this->css;
        $data['base'] = $this->base;
        $this->load->model('Placa/PlacaModelo');
        $data['title'] = 'Lista de Placa';

        $data['placa'] = $this->PlacaModelo->query();
        $this->load->view('Placa/listarPlaca', $data);
    }

    public function eliminar($id) {
        $this->load->model('Placa/PlacaModelo');
        $this->PlacaModelo->delete($id);
        redirect('Placa');
    }

    public function agregar() {
        $data['css'] = $this->css;
        $data['base'] = $this->base;
        $this->load->view('Placa/agregarPlaca', $data);
    }

    public function formularioAgregar() {


        $data = array(
            'no_maquina' => $_POST['no_maquina'],
            'modelo' => $_POST['modelo'],
            'serie' => $_POST['serie'],
            'placa' => $_POST['placa'],
            'factura' => $_POST['factura'],
            'cliente' => $_POST['cliente'],
            'pedimento' => $_POST['pedimento']
        );

        $this->load->model('Placa/PlacaModelo');
        $this->PlacaModelo->add($data);

        redirect('Placa');
    }

    public function modificar() {

        $datos = $this->input->post();
        if (isset($datos)) {
            $id_placa = $datos['id_placa'];
            $no_maquina = $datos['no_maquina'];
            $modelo = $datos['modelo'];
            $serie = $datos['serie'];
            $placa = $datos['placa'];
            $factura = $datos['factura'];
            $cliente = $datos['cliente'];
            $pedimento = $datos['pedimiento'];
            $this->CatalogoVenTecModelo->actualizar($id_placa, $no_maquina, $modelo, $serie, $placa, $factura, $cliente, $pedimento);
            redirect('');
            redirect('Placa');
        }
    }

    public function obtener($id_placa) {
        $this->load->model('Placa/PlacaModelo');
        $data = array();

        $data = $this->PlacaModelo->obtener($id_placa);
        $this->load->view('Placa/modificarPlaca', $data);
    }

    public function placaModificar() {
        $data = array(
            'id_placa' => $_POST['id_placa'],
            'no_maquina' => $_POST['no_maquina'],
            'modelo' => $_POST['modelo'],
            'serie' => $_POST['serie'],
            'placa' => $_POST['placa'],
            'factura' => $_POST['factura'],
            'cliente' => $_POST['cliente'],
            'pedimento' => $_POST['pedimento']
        );
        $this->load->model('Placa/PlacaModelo');
        $this->PlacaModelo->actualizar($data);
        redirect('Placa');
    }

    function do_upload() {

        $config['upload_path'] = "./assets/placa/";
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = FALSE;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        
        $this->upload->do_upload('placaArchivo');
        $data = $this->upload->data();
        
        
        
        
        $this->upload->do_upload('facturaArchivo');
        $facturaData = $this->upload->data();
        //Resize and Compress Image


        /*
          $config['image_library'] = 'gd2';
          $config['source_image'] = './assets/placa/' . $data['file_name']; 
         */



        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '100%';
        /*
         $config['width'] = 600;
          $config['height'] = 400;
          $config['new_image'] = './assets/documentos/' . $data['file_name'];
          $this->load->library('image_lib', $config);
          $this->image_lib->resize(); 
         */

        $title = $this->input->post('title');
        $modelo = $this->input->post('modelo');
        $serie = $this->input->post('serie');
        $placa = $data['file_name'];
        $factura = $facturaData['file_name'];
        $cliente = $this->input->post('cliente');
        $pedimento = $this->input->post('pedimento');
        $result = $this->PlacaModelo->save_upload($title, $modelo, $serie, $placa, $factura, $cliente, $pedimento);
        echo json_decode($result);
    }

}
