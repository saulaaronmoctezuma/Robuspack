<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class verificacion extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model("verificacion/verificacionModelo");
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
        $data['css'] = $this->css;
        $data['base'] = $this->base;
        $this->load->model('verificacion/verificacionModelo');
        $data['title'] = 'Lista de Placa';







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
            $data['placa'] = $this->verificacionModelo->query();

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('verificacion/listarVerificacion', $data);

            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $data['placa'] = $this->verificacionModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('verificacion/listarVerificacion', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['placa'] = $this->verificacionModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('verificacion/listarVerificacion', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica") {
            $data['placa'] = $this->verificacionModelo->query();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('verificacion/listarVerificacion', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }

        //sesion

        /* } else {//Si el usuario no está¡ logueado lo manda a registrarse
          redirect('main/logeo');
          } */
    }

    // fungsi untuk mengambil data
    public function lista() {

        $cari = $this->input->get('cari');
        $page = $this->input->get('per_page');

        $search = array('serie' => $cari);

        $batas = 9; // 9 data per page
        if (!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;

        $config['page_query_string'] = TRUE;
        $config['base_url'] = base_url() . 'index.php/home/?cari=' . $cari;
        // $config['total_rows'] = $this->modelcrud->jumlah_row($search);

        /* $config['per_page'] = $batas;
          $config['uri_segment'] = $page;

          $config['full_tag_open'] = '<ul class="pagination">';
          $config['full_tag_close'] = '<ul>';

          $config['first_link'] = 'first';
          $config['first_tag_open'] = '<li><a>';
          $config['first_tag_close'] = '</a></li>';

          $config['last_link'] = 'last';
          $config['last_tag_open'] = '<li><a>';
          $config['last_tag_close'] = '</a></li>';

          $config['next_link'] = '&raquo;';
          $config['next_tag_open'] = '<li><a>';
          $config['next_tag_close'] = '</a></li>';

          $config['prev_link'] = '&laquo;';
          $config['prev_tag_open'] = '<li><a>';
          $config['prev_tag_close'] = '</a></li>';

          $config['cur_tag_open'] = '<li class="active"><a>';
          $config['cur_tag_close'] = '</a></li>';

          $config['num_tag_open'] = '<li><a>';
          $config['num_tag_close'] = '</a></li>'; */

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['jumlah_page'] = $page;

        $data['data'] = $this->verificacionModelo->get($batas, $offset, $search);

        $this->load->view('verificacion/lista', $data);
    }

    // untuk menampilkan halaman tambah data
    public function agregar() {

        $data['css'] = $this->css;
        $data['base'] = $this->base;

        $this->load->model('verificacion/verificacionModelo');
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


            $this->load->view('verificacion/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('verificacion/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('verificacion/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('verificacion/agregar');
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    // untuk memasukan data ke database
    /* public function insertdata()
      {
      $name   = $this->input->post('name');
      $alamat = $this->input->post('alamat');

      // get foto
      $config['upload_path'] = './assets/picture';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

      if (!empty($_FILES['fotopost']['name'])) {
      if ( $this->upload->do_upload('fotopost') ) {
      $foto = $this->upload->data();
      $data = array(
      'name'       => $name,
      'foto'       => $foto['file_name'],
      'alamat'     => $alamat,
      );
      $this->modelcrud->insert($data);
      redirect('');
      }else {
      die("gagal upload");
      }
      }else {
      echo "tidak masuk";
      }

      } */





    public function insertdata() {

        /* Para traerse el id del usuario */
        $data = $this->session->userdata;
        /* Para traerse el id del usuario */

        $no_maqui = $this->input->post('no_maqui');
        $modelo = $this->input->post('modelo');
        $serie = $this->input->post('serie');
        $cliente = $this->input->post('cliente');
        $pedimento = $this->input->post('pedimento');
        $factura = $this->input->post('factura');

        // get foto
        $config['upload_path'] = './assets/verificacion';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel



        $this->upload->initialize($config);



        if ($this->upload->do_upload('fotopost')) {
            $this->upload->do_upload("fotopost");

            $foto = $this->upload->data();
            $data = array(
                'no_maqui' => $no_maqui,
                'modelo' => $modelo,
                'serie' => $serie,
                'cliente' => $cliente,
                'pedimento' => $pedimento,
                'foto' => $foto['file_name'],
                'factura' => "",
                'id' => $dataLevel = $this->userlevel->id($data['id'])
            );
            $this->verificacionModelo->insert($data);
            redirect('verificacion');
        } else if ($this->upload->do_upload('fotopostpdf')) {

            $fotopdf = $this->upload->data();
            $data = array(
                'no_maqui' => $no_maqui,
                'modelo' => $modelo,
                'serie' => $serie,
                'cliente' => $cliente,
                'pedimento' => $pedimento,
                'foto' => "",
                'factura' => $fotopdf['file_name'],
                'id' => $dataLevel = $this->userlevel->id($data['id'])
            );
            $this->verificacionModelo->insert($data);
            redirect('verificacion');
        } else {

            $this->upload->do_upload('fotopost');
            $foto = $this->upload->data();


            $this->upload->do_upload('fotopostpdf');
            $fotopdf = $this->upload->data();
            $data = array(
                'no_maqui' => $no_maqui,
                'modelo' => $modelo,
                'serie' => $serie,
                'cliente' => $cliente,
                'pedimento' => $pedimento,
                'foto' => $foto['file_name'],
                'factura' => $fotopdf['file_name'],
                'id' => $dataLevel = $this->userlevel->id($data['id'])
            );
            $this->verificacionModelo->insert($data);
            redirect('verificacion');
        }$this->verificacionModelo->insert($data);
        redirect('verificacion');
    }

    // delete
    /* public function deletedata($id,$foto)
      {
      $path = './assets/picture/';
      @unlink($path.$foto);

      $where = array('id' => $id );
      $this->modelcrud->delete($where);
      return redirect('');
      } */
    public function eliminar($id) {

        $where = array('id_verificacion' => $id);
        $this->verificacionModelo->delete($where);
        return redirect('verificacion');
    }

    // edit
    public function actualizar($id) {
        $this->load->model('verificacion/verificacionModelo');








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

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->verificacionModelo->get_by_id($kondisi);
            return $this->load->view('verificacion/editar', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->verificacionModelo->get_by_id($kondisi);
            return $this->load->view('verificacion/editar', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->verificacionModelo->get_by_id($kondisi);
            return $this->load->view('verificacion/editar', $data);


            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    // update

    /*
      public function updatedata()
      {
      $id   = $this->input->post('id');
      $name = $this->input->post('name');
      $alamat = $this->input->post('alamat');

      $path = './assets/picture/';

      $kondisi = array('id' => $id );

      // get foto
      $config['upload_path'] = './assets/picture';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

      if (!empty($_FILES['fotopost']['name'])) {
      if ( $this->upload->do_upload('fotopost') ) {
      $foto = $this->upload->data();
      $data = array(
      'name'       => $name,
      'foto'       => $foto['file_name'],
      'alamat'     => $alamat,
      );
      // hapus foto pada direktori
      @unlink($path.$this->input->post('filelama'));

      $this->modelcrud->update($data,$kondisi);
      redirect('');
      }else {
      die("gagal update");
      }
      }else {
      echo "tidak masuk";
      }

      } */



    public function updatedata() {

        $no_maqui = $this->input->post('no_maqui');
        $modelo = $this->input->post('modelo');
        $serie = $this->input->post('serie');
        $cliente = $this->input->post('cliente');
        $pedimento = $this->input->post('pedimento');
        $factura = $this->input->post('factura');
        $foto = $this->input->post('old');

        $path = './assets/picture/';
        $id = $this->input->post('id');
        $kondisi = array('id_verificacion' => $id);
        // get fotoz


        $config['upload_path'] = './assets/verificacion';
        $config['allowed_types'] = '*';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['fotopost']['name'];

        $config['file_name'] = $_FILES['fotopostpdf']['name'];
        $this->upload->initialize($config);
        $this->upload->do_upload('fotopost');
        $foto = $this->upload->data();


        $this->upload->do_upload('fotopostpdf');
        $fotopdf = $this->upload->data();
        $data['no_maqui'] = $no_maqui;
        $data['modelo'] = $modelo;
        $data['serie'] = $serie;
        $data['cliente'] = $cliente;
        $data['pedimento'] = $pedimento;
        if (!empty($_FILES['fotopost']['name'])) {
            $data['foto'] = $foto['file_name'];
        }

        if (!empty($_FILES['fotopostpdf']['name'])) {
            $data['factura'] = $fotopdf['file_name'];
        }



        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));
        $this->verificacionModelo->update($data, $kondisi);
        redirect('verificacion');
    }

}

// end class
