<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

Class Bitacora extends CI_Controller {

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
        //para que tenga el mismo header
        $this->load->model("Bitacora/BitacoraModelo");
    }

    public function index() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('Bitacora/BitacoraModelo');
        $data['title'] = "Robuspack";



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
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $data['bitacora'] = $this->BitacoraModelo->query();
            $this->load->view('Bitacora/listarBitacoraMaquinaria', $data);
            $this->load->view('footer');
        }  else if ($dataLevel == "is_maquinaria") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $data['bitacora'] = $this->BitacoraModelo->query();
            $this->load->view('Bitacora/listarBitacoraMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $data['bitacora'] = $this->BitacoraModelo->query();
            $this->load->view('Bitacora/listarBitacoraMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $data['bitacora'] = $this->BitacoraModelo->query();
            $this->load->view('Bitacora/listarBitacoraMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $data['bitacora'] = $this->BitacoraModelo->query();
            $this->load->view('Bitacora/listarBitacoraMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $data['bitacora'] = $this->BitacoraModelo->query();
            $this->load->view('Bitacora/listarBitacoraMaquinaria', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function refacciones() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('Bitacora/BitacoraModelo');
        $data['title'] = "Robuspack";



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
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $data['bitacora'] = $this->BitacoraModelo->refacciones();
            $this->load->view('Bitacora/listarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $data['bitacora'] = $this->BitacoraModelo->refacciones();
            $this->load->view('Bitacora/listarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $data['bitacora'] = $this->BitacoraModelo->refacciones();
            $this->load->view('Bitacora/listarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $data['bitacora'] = $this->BitacoraModelo->refacciones();
            $this->load->view('Bitacora/listarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $data['bitacora'] = $this->BitacoraModelo->refacciones();
            $this->load->view('Bitacora/listarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $data['bitacora'] = $this->BitacoraModelo->refacciones();
            $this->load->view('Bitacora/listarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function eliminar($id) {
        $this->load->model('Bitacora/BitacoraModelo');
        $this->BitacoraModelo->delete($id);
        redirect('Bitacora');
    }

    public function agregar() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;

        $this->load->model('Bitacora/BitacoraModelo');
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
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/agregarBitacoraArchivos', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/agregarBitacoraArchivos', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/agregarBitacoraArchivos', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/agregarBitacoraArchivos', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();


            $this->load->view('Bitacora/agregarBitacoraArchivos', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    
    public function agregarRefacciones() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;

        $this->load->model('Bitacora/BitacoraModelo');
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
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/agregarBitacoraArchivosRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/agregarBitacoraArchivosRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/agregarBitacoraArchivosRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/agregarBitacoraArchivosRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();


            $this->load->view('Bitacora/agregarBitacoraArchivosRefacciones', $data);
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
            'descripcion' => $_POST['descripcion'],
            'archivo1' => $_POST['archivo1'],
            'observacion' => $_POST['observacion'],
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );


        $this->load->model('Bitacora/BitacoraModelo');
        $this->BitacoraModelo->add($data);


           //user data from session
        $data = $this->session->userdata;
    
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        
           if ($dataLevel == "is_admin") {
           redirect('Bitacora/refacciones/');
        } else if ($dataLevel == "is_Gerente_Ventas") {
           redirect('Bitacora/refacciones');
        }else if ($dataLevel == "is_maquinaria") {
          redirect('Bitacora/');
        }else if ($dataLevel == "is_refacciones") {
          redirect('Bitacora/refacciones34242');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
           redirect('Bitacora/');
        }else {
           
        }

       
    }

    public function modificar() {
        $datos = $this->input->post();
        if (isset($datos)) {
            $id_bitacora = $datos['id_bitacora'];
            $grupo = $datos['grupo'];
            $cliente = $datos['cliente'];
            $descripcion = $datos['descripcion'];
            $archivo1 = $datos['archivo1'];
            $observacion = $datos['observacion'];


            $this->BitacoraModelo->actualizar($id_bitacora, $grupo, $cliente, $descripcion, $archivo1, $observacion);
            //user data from session
        $data = $this->session->userdata;
    
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        
           if ($dataLevel == "is_admin") {
           redirect('Bitacora/refacciones/');
        } else if ($dataLevel == "is_Gerente_Ventas") {
           redirect('Bitacora/refacciones');
        }else if ($dataLevel == "is_maquinaria") {
          redirect('Bitacora/');
        }else if ($dataLevel == "is_refacciones") {
          redirect('Bitacora/refacciones');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
           redirect('Bitacora/');
        }else {
           
        }
        }
    }

    public function obtener($id_bitacora) {
        $this->load->model('Bitacora/BitacoraModelo');




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
            $data = array();
            $data = $this->BitacoraModelo->obtener($id_bitacora);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/modificarBitacora', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->BitacoraModelo->obtener($id_bitacora);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/modificarBitacora', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->BitacoraModelo->obtener($id_bitacora);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/modificarBitacora', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->BitacoraModelo->obtener($id_bitacora);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/modificarBitacora', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->BitacoraModelo->obtener($id_bitacora);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/modificarBitacora', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function obtener1($id_bitacora) {
        $this->load->model('Bitacora/BitacoraModelo');


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
            $data = array();
            $data = $this->BitacoraModelo->obtener($id_bitacora);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/modificarBitacoraComentario', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data = array();
            $data = $this->BitacoraModelo->obtener($id_bitacora);
            $data['grupoCombo'] = $this->BitacoraModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();

            $this->load->view('Bitacora/modificarBitacoraComentario', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function bitacoraModificar() {
        $data = array(
            'id_bitacora' => $_POST['id_bitacora'],
            'grupo' => $_POST['grupo'],
            'cliente' => $_POST['cliente'],
            'descripcion' => $_POST['descripcion'],
            'archivo1' => $_POST['archivo1'],
            'observacion' => $_POST['observacion']
        );

        $this->load->model('Bitacora/BitacoraModelo');
        $this->BitacoraModelo->actualizar($data);
        
        
        
        
        
         //user data from session
        $data = $this->session->userdata;
    
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        
         if ($dataLevel == "is_admin") {
           redirect('Bitacora/refacciones/');
        } else if ($dataLevel == "is_Gerente_Ventas") {
           redirect('Bitacora/refacciones');
        }else if ($dataLevel == "is_maquinaria") {
          redirect('Bitacora/');
        }else if ($dataLevel == "is_refacciones") {
          redirect('Bitacora/refacciones');
        } else if ($dataLevel == "is_maquinaria_refacciones") {
           redirect('Bitacora/');
        }else {
           
        }
        
        
        
        
        
    
    }

    public function subir() {

        //print_r($_FILES);
        $this->load->library("upload");
        $config = array(
            "upload_path" => "./assets/documentos",
            'allowed_types' => "jpg|png|pdf|docx|doc|xls|xlsx|xlsx|xlsx|html|mp3"
        );

        $variablefile = $_FILES;
        $info = array();
        $files = count($_FILES['archivo']['name']);
        for ($i = 0; $i < $files; $i++) {
            $_FILES['archivo']['name'] = $variablefile['archivo']['name'][$i];
            $_FILES['archivo']['type'] = $variablefile['archivo']['type'][$i];
            $_FILES['archivo']['tmp_name'] = $variablefile['archivo']['tmp_name'][$i];
            $_FILES['archivo']['error'] = $variablefile['archivo']['error'][$i];
            $_FILES['archivo']['size'] = $variablefile['archivo']['size'][$i];
            $this->upload->initialize($config);
            if ($this->upload->do_upload('archivo')) {
                $data = array("upload_data" => $this->upload->data());
                $datos = array(
                    "name" => $data['upload_data']['file_name'],
                        //aqui debe de traerte el usuario que esta en la sesion solo el 
                );
                if ($this->BitacoraModelo->guardar($datos)) {
                    //echo "Registro guardado";
                    $info[$i] = array(
                        "archivo" => $data['upload_data']['file_name'],
                        "mensaje" => "Archivo subido y guardado"
                    );
                } else {
                    //echo "Error al intentar guardar la informacion";
                    $info[$i] = array(
                        "archivo" => $data['upload_data']['file_name'],
                        "mensaje" => "Archivo subido pero no guardado guardado"
                    );
                }
            } else {
                //echo $this->upload->display_errors();
                $info[$i] = array(
                    "archivo" => $_FILES['archivo']['name'],
                    "mensaje" => "Archivo no subido ni guardado"
                );
            }
        }

        $envio = "";
        foreach ($info as $key) {
            $envio .= "Archivo : " . $key['archivo'] . " - " . $key["mensaje"] . "\n";
        }
        echo $envio;
    }

    function bitacoraAgregar() {
        $this->load->view('Bitacora/agregarBitacoraArchivos');
    }

    function do_upload() {

        $config['upload_path'] = "./assets/bitacora/";
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = FALSE;

        $this->load->library('upload', $config);
        $this->upload->do_upload("file");
        $data = $this->upload->data();

        //Resize and Compress Image
        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/bitacora/' . $data['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '100%';
        /* $config['width'] = 600;
          $config['height'] = 400;
          $config['new_image'] = './assets/documentos/' . $data['file_name'];
          $this->load->library('image_lib', $config);
          $this->image_lib->resize(); */

        $title = $this->input->post('title');
        $cliente = $this->input->post('cliente');
        $descripcion = $this->input->post('descripcion');
        $image = $data['file_name'];
        $observacion = $this->input->post('observacion');

        $result = $this->BitacoraModelo->save_upload($title, $cliente, $descripcion, $image, $observacion);

        echo json_decode($result);
    }

}
