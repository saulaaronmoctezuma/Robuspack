<?php


/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
 
class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
         $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
        $this->load->model('upload_model');
    }

    function index() {
        $this->load->view('upload_view');
    }

    function do_upload() {
        $config['upload_path'] = "./assets/images";
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|xlx|xlxs|zip|rar';
        $config['encrypt_name'] = false;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("file") && $this->upload->do_upload("file2")) {
            $data = $this->upload->data();

            //Resize and Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './documentos/images/' . $data['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            $config['width'] = 600;
            $config['height'] = 400;
            $config['new_image'] = './documentos/images/' . $data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $title = $this->input->post('title');
            $cliente = $this->input->post('cliente');
            $descripcion = $this->input->post('descripcion');
            $image = $data['file_name'];
            
            
            $result = $this->upload_model->save_upload($title, $cliente, $descripcion, $image);
            echo json_decode($result);
        } else {
            $data = $this->upload->data();

            //Resize and Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/documentos/' . $data['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            $config['width'] = 600;
            $config['height'] = 400;
            $config['new_image'] = './documentos/images/' . $data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $title = $this->input->post('title');
            $cliente = $this->input->post('cliente');
            $descripcion = $this->input->post('descripcion');
            $image = $data['file_name'];
           
            $result = $this->upload_model->save_upload($title, $cliente, $descripcion, $image);
            echo json_decode($result);
        }
    }
}
