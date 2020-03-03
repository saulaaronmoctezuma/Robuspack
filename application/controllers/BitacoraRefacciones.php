<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* * zz

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 25/06/2019 Hora 10:26 am
 * Fecha : 
 * Sistema de Control Robuspack.
 */

class BitacoraRefacciones extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model("BitacoraRefacciones/BitacoraRefaccionesModelo");
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
        $this->load->model('BitacoraRefacciones/BitacoraRefaccionesModelo');
        $data['title'] = 'Bitacora Refacciones';
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
            $data['bitacora'] = $this->BitacoraRefaccionesModelo->query();
            $data['totalRegistroBitacoraCarlos'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraCarlos(1);
            $data['totalRegistroBitacoraAldo'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraAldo(1);
            $data['totalRegistroBitacoraElvira'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraElvira(1);
            $data['totalRegistroBitacoraOrlene'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraOrlene(1);
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('BitacoraRefacciones/listarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $data['bitacora'] = $this->BitacoraRefaccionesModelo->query();
            $data['totalRegistroBitacoraCarlos'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraCarlos(1);
            $data['totalRegistroBitacoraAldo'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraAldo(1);
            $data['totalRegistroBitacoraElvira'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraElvira(1);
            $data['totalRegistroBitacoraOrlene'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraOrlene(1);
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('BitacoraRefacciones/listarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
             $data['bitacora'] = $this->BitacoraRefaccionesModelo->query();
             $data['totalRegistroBitacoraCarlos'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraCarlos(1);
            $data['totalRegistroBitacoraAldo'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraAldo(1);
            $data['totalRegistroBitacoraElvira'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraElvira(1);
            $data['totalRegistroBitacoraOrlene'] = $this->BitacoraRefaccionesModelo->totalRegistroBitacoraOrlene(1);
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('BitacoraRefacciones/listarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
             $data['bitacora'] = $this->BitacoraRefaccionesModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('BitacoraRefacciones/listarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $data['bitacora'] = $this->BitacoraRefaccionesModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('BitacoraRefacciones/listarBitacoraRefacciones', $data);
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

        $data['data'] = $this->ClienteSeguimientoModelo->get($batas, $offset, $search);

        $this->load->view('ClienteSeguimiento/lista', $data);
    }

    // untuk menampilkan halaman tambah data
    public function agregar() {

        $data['css'] = $this->css;
        $data['base'] = $this->base;

        $this->load->model('BitacoraRefacciones/BitacoraRefaccionesModelo');
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
            $data['grupoCombo'] = $this->BitacoraRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraRefaccionesModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            //$data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();

            $this->load->view('BitacoraRefacciones/agregarBitacoraRefacciones');
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $data['grupoCombo'] = $this->BitacoraRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraRefaccionesModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            //$data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();

            $this->load->view('BitacoraRefacciones/agregarBitacoraRefacciones');
           
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['grupoCombo'] = $this->BitacoraRefaccionesModelo->getGrupo();
           $data['clienteCombo'] = $this->BitacoraRefaccionesModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            //$data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();

            $this->load->view('BitacoraRefacciones/agregarBitacoraRefacciones');
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $data['grupoCombo'] = $this->BitacoraRefaccionesModelo->getGrupo();
           $data['clienteCombo'] = $this->BitacoraRefaccionesModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            //$data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();

            $this->load->view('BitacoraRefacciones/agregarBitacoraRefacciones');
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $data['grupoCombo'] = $this->BitacoraRefaccionesModelo->getGrupo();
          $data['clienteCombo'] = $this->BitacoraRefaccionesModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            //$data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();

            $this->load->view('BitacoraRefacciones/agregarBitacoraRefacciones');
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
        $config['upload_path'] = './assets/bitacora_refacciones';
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








        $this->BitacoraRefaccionesModelo->insert($data);
        redirect('BitacoraRefacciones');
    }

    public function eliminar($id) {

        $where = array('id_bitacora' => $id);
        $this->BitacoraRefaccionesModelo->delete($where);
        return redirect('BitacoraRefacciones');
    }

    // edit
    public function actualizar($id) {
        $this->load->model('BitacoraRefacciones/BitacoraRefaccionesModelo');

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
            $data['grupoCombo'] = $this->BitacoraRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraRefaccionesModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraRefaccionesModelo->get_by_id($kondisi);
            return $this->load->view('BitacoraRefacciones/editarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {


            
              $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['grupoCombo'] = $this->BitacoraRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraRefaccionesModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraRefaccionesModelo->get_by_id($kondisi);
            return $this->load->view('BitacoraRefacciones/editarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {


            
              $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['grupoCombo'] = $this->BitacoraRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraRefaccionesModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraRefaccionesModelo->get_by_id($kondisi);
            return $this->load->view('BitacoraRefacciones/editarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {


          
              $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['grupoCombo'] = $this->BitacoraRefaccionesModelo->getGrupo();
            $data['clienteCombo'] = $this->BitacoraRefaccionesModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraRefaccionesModelo->get_by_id($kondisi);
            return $this->load->view('BitacoraRefacciones/editarBitacoraRefacciones', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
 
              $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->BitacoraRefaccionesModelo->getCliente();
            $kondisi = array('id_bitacora' => $id);
            $data['data'] = $this->BitacoraRefaccionesModelo->get_by_id($kondisi);
            return $this->load->view('BitacoraRefacciones/editarBitacoraRefacciones', $data);
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


        $path = './assets/bitacora_refacciones/';
        $id = $this->input->post('id');
        $kondisi = array('id_bitacora' => $id);
        // get fotoz


        $config['upload_path'] = './assets/bitacora_refacciones';
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
        $this->BitacoraRefaccionesModelo->updatedata($data, $kondisi);
        redirect('BitacoraRefacciones');
    }

}

// end class
