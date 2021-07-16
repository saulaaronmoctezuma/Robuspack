<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ClientesRefa extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        $this->not_logged_in();

        $this->data['page_title'] = 'Clientes Refacciones , Cubiertas y cuchillas';

        $this->load->model('model_clientesrefa');
    }

    /*
     * It only redirects to the manage stores page
     */

    public function index() {

        $this->load->model('model_clientesrefa');
        $data['title'] = 'Refacciones';
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
            //$this->load->view('navbar', $data);
            $this->render_template('clientesrefa/index', $this->data);
            /* } */
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('clientesrefa/index', $this->data);
            /* } */
        } else if ($dataLevel == "is_almacen") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('clientesrefa/index', $this->data);
            /* } */
        }
    }

    /*
     * It retrieve the specific store information via a store id
     * and returns the data in json format.
     */

    public function fetchStoresDataById($id_cliente) {
        if ($id_cliente) {
            $data = $this->model_clientesrefa->getStoresData($id_cliente);
            echo json_encode($data);
        }
    }

    /*
     * It retrieves all the store data from the database 
     * This function is called from the datatable ajax function
     * The data is return based on the json format.
     */

    public function fetchStoresData() {
        $result = array('data' => array());

        $data = $this->model_clientesrefa->getStoresData();

        foreach ($data as $key => $value) {


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
                $buttons = '';
                $buttons = '<button type="button" class="btn btn-default" onclick="editFunc(' . $value['id_cliente'] . ')" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button>';
                $buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc(' . $value['id_cliente'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';

                $result['data'][$key] = array(
                    $value['clave'],
                    $value['nombre'],
                    $buttons
                );

                /* } */
            } else if ($dataLevel == "is_editor") {
                $buttons = '';
                $buttons = '<button type="button" class="btn btn-default" onclick="editFunc(' . $value['id_cliente'] . ')" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button>';

                $result['data'][$key] = array(
                    $value['clave'],
                    $value['nombre'],
                    $buttons
                );
            } else if ($dataLevel == "is_almacen") {

                $result['data'][$key] = array(
                    $value['clave'],
                    $value['nombre'],
                );
            }
        }

        echo json_encode($result);
    }

    /*
     * If the validation is not valid, then it provides the validation error on the json format
     * If the validation for each input is valid then it inserts the data into the database and 
      returns the appropriate message in the json format.
     */

    public function create() {
        /* if(!in_array('createStore', $this->permission)) {
          redirect('dashboard', 'refresh');
          } */







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
            $response = array();

         //   $this->form_validation->set_rules('clave', 'Clave', 'trim|required');
            $this->form_validation->set_rules('clave', 'Clave', 'trim|required|is_unique[clientes_robuspack.clave]');
            $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
            $this->form_validation->set_message('required','El campo %s es obligatorio');
             $this->form_validation->set_message('is_unique','Ya esta registrado esa %s ');
            $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
            
            if ($this->form_validation->run() == TRUE) {
                 $id_usuario = $this->session->userdata('id');
                $data = array(
                    'clave' => $this->input->post('clave'),
                    'nombre' => $this->input->post('nombre'),
                    'id_usuario' => $id_usuario,
                    
                );

                $create = $this->model_clientesrefa->create($data);
                if ($create == true) {
                    $response['success'] = true;
                    $response['messages'] = 'Creado correctamente';
                } else {
                    $response['success'] = false;
                    $response['messages'] = 'Error in the database while creating the brand information';
                }
            } else {
                $response['success'] = false;
                foreach ($_POST as $key => $value) {
                    $response['messages'][$key] = form_error($key);
                }
            }

            echo json_encode($response);
        } else if ($dataLevel == "is_editor") {
            $response = array();

            $this->form_validation->set_rules('clave', 'Clave', 'trim|required');
            $this->form_validation->set_rules('clave', 'clave', 'trim|is_unique[clientes_robuspack.clave]');
            $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');

            $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

            if ($this->form_validation->run() == TRUE) {
                $id_usuario= $this->session->userdata('id');
                $data = array(
                    'clave' => $this->input->post('clave'),
                    'nombre' => $this->input->post('nombre'),
                    'id_usuario' => $id_usuario,
                );

                $create = $this->model_clientesrefa->create($data);
                if ($create == true) {
                    $response['success'] = true;
                    $response['messages'] = 'Creado correctamente';
                } else {
                    $response['success'] = false;
                    $response['messages'] = 'Error in the database while creating the brand information';
                }
            } else {
                $response['success'] = false;
                foreach ($_POST as $key => $value) {
                    $response['messages'][$key] = form_error($key);
                }
            }

            echo json_encode($response);
        } else {
            redirect(site_url() . '/clientesrefa/');
        }
    }

    /*
     * If the validation is not valid, then it provides the validation error on the json format
     * If the validation for each input is valid then it updates the data into the database and 
      returns a n appropriate message in the json format.
     */

    public function update($id) {
        /* if(!in_array('updateStore', $this->permission)) {
          redirect('dashboard', 'refresh');
          } */

        $response = array();

        if ($id) {
            $this->form_validation->set_rules('edit_clave', 'Clave', 'trim|required');
            $this->form_validation->set_rules('edit_clave', 'Nombre', 'trim|required');

            $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

            if ($this->form_validation->run() == TRUE) {
                   $id_usuario= $this->session->userdata('id');
                $data = array(
                    'clave' => $this->input->post('edit_clave'),
                    'nombre' => $this->input->post('edit_nombre'),
                    'id_usuario' => $id_usuario
                );

                $update = $this->model_clientesrefa->update($data, $id);
                if ($update == true) {
                    $response['success'] = true;
                    $response['messages'] = 'Actualizado correctamente';
                } else {
                    $response['success'] = false;
                    $response['messages'] = 'Error al actualizar';
                }
            } else {

                $response['success'] = false;
                foreach ($_POST as $key => $value) {
                    $response['messages'][$key] = form_error($key);
                }
            }
        } else {
            $response['success'] = false;
            $response['messages'] = 'Error please refresh the page again!!';
        }

        echo json_encode($response);
    }

    /*
     * If checks if the store id is provided on the function, if not then an appropriate message 
      is return on the json format
     * If the validation is valid then it removes the data into the database and returns an appropriate 
      message in the json format.
     */

    public function remove() {
        /* if(!in_array('deleteStore', $this->permission)) {
          redirect('dashboard', 'refresh');
          } */

        $store_id = $this->input->post('store_id');

        $response = array();
        if ($store_id) {
            $delete = $this->model_clientesrefa->remove($store_id);
            if ($delete == true) {
                $response['success'] = true;
                $response['messages'] = "Eliminado correctamente";
            } else {
                $response['success'] = false;
                $response['messages'] = "Error en la base de datos";
            }
        } else {
            $response['success'] = false;
            $response['messages'] = "Actualizar la página nuevamente!!";
        }

        echo json_encode($response);
    }

}
