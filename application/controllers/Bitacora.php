<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* * zz

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 25/06/2019 Hora 10:26 am
 * Fecha : 
 * Sistema de Control Robuspack.
 */

class Bitacora extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model("Bitacora/BitacoraModelo");
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
        $this->load->model('Bitacora/BitacoraModelo');
        $data['title'] = 'Bitacora';
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
            $data['bitacora'] = $this->BitacoraModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Bitacora/listarBitacora', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
          $data['bitacora'] = $this->BitacoraModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Bitacora/listarBitacora', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['bitacora'] = $this->BitacoraModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Bitacora/listarBitacora', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $data['bitacora'] = $this->BitacoraModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Bitacora/listarBitacora', $data);
            $this->load->view('footer');
        }  else {
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

        $data['data'] = $this->ClienteSeguimientoModelo->get($batas, $offset, $search);

        $this->load->view('ClienteSeguimiento/lista', $data);
    }

    // untuk menampilkan halaman tambah data
    public function agregar() {

        $data['css'] = $this->css;
        $data['base'] = $this->base;

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
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            //$data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();

            $this->load->view('Bitacora/agregarBitacora');
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            //$data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();

            $this->load->view('Bitacora/agregarBitacora');
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $this->load->view('ClienteSeguimiento/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteSeguimiento/agregar');
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
        $grupo = $this->input->post('grupo');
        $cliente = $this->input->post('cliente');
        $descripcion = $this->input->post('descripcion');
        $archivo1 = $this->input->post('archivo1');
        $observacion = $this->input->post('observacion');


        // get foto
        $config['upload_path'] = './assets/bitacora';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;


        /* $config['max_size'] = '2048';  //2MB max
          $config['max_width'] = '4480'; // pixel
          $config['max_height'] = '4480'; // pixel */
        $this->upload->initialize($config);


        $data = array(
            'grupo' => $grupo,
            'cliente' => $cliente,
            'descripcion' => $descripcion,
            'archivo1' => $archivo1,
            'observacion' => $observacion,
            'id' => $dataLevel = $this->userlevel->id($data['id'])
        );

        $this->upload->do_upload('archivo1');
        $archivo1 = $this->upload->data();
        if (!empty($_FILES['archivo1']['name'])) {
            $data['archivo1'] = $archivo1['file_name'];
        }








        $this->BitacoraModelo->insert($data);
        redirect('Bitacora');
    }

    public function eliminar($id) {

        $where = array('id_bitacora' => $id);
        $this->BitacoraModelo->delete($where);
        return redirect('Bitacora');
    }

    // edit
    public function actualizar($id) {
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
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->BitacoraModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraModelo->get_by_id($kondisi);
            return $this->load->view('Bitacora/editarBitacora', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraModelo->get_by_id($kondisi);
            return $this->load->view('Bitacora/editarBitacora', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo

            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraModelo->get_by_id($kondisi);
            return $this->load->view('Bitacora/editarBitacora', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo

            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraModelo->get_by_id($kondisi);
            return $this->load->view('Bitacora/editarBitacora', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo

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

        $grupo = $this->input->post('grupo');
        $cliente = $this->input->post('cliente');
        $descripcion = $this->input->post('descripcion');
        $archivo1 = $this->input->post('archivo1');
        $observacion = $this->input->post('observacion');


        $path = './assets/bitacora/';
        $id = $this->input->post('id');
        $kondisi = array('id_bitacora' => $id);
        // get fotoz


        $config['upload_path'] = './assets/bitacora';
        $config['allowed_types'] = '*';
        /* $config['max_size'] = '2048';  //2MB max
          $config['max_width'] = '4480'; // pixel
          $config['max_height'] = '4480'; // pixel */

        $this->upload->initialize($config);








        $data['grupo'] = $grupo;
        $data['cliente'] = $cliente;
        $data['descripcion'] = $descripcion;

        $this->upload->do_upload('archivo1');
        $archivo1 = $this->upload->data();

        if (!empty($_FILES['archivo1']['name'])) {
            $data['archivo1'] = $archivo1['file_name'];
        }


        $data['observacion'] = $observacion;






        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));
        $this->BitacoraModelo->updatedata($data, $kondisi);
        redirect('Bitacora');
    }

}

// end class
