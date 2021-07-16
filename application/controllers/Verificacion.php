<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**

 *  class @author  Saul González & Karen González
 *  Fecha : Ultimo Cambio 26/03/2019 Hora 10:15 pm
 *  Fecha : Ultimo Cambio 03/04/2019 Hora 10:36 pm
 *  Fecha : Ultimo Cambio 20/07/2019 Hora 5:47 pm
 *  Fecha : Ultimo Cambio 30/07/2019 Hora 10:07 am
 *  Sistema de Control Robuspack.
 */
class Verificacion extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model("Verificacion/VerificacionModelo");
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
        $this->load->model('Verificacion/VerificacionModelo');
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
            $data['placa'] = $this->VerificacionModelo->query();
            $data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('Verificacion/listarVerificacion', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $data['placa'] = $this->VerificacionModelo->query();
            $data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/listarVerificacion', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['placa'] = $this->VerificacionModelo->query();
            $data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/listarVerificacion', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica") {
            $data['placa'] = $this->VerificacionModelo->query();
            $data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/listarVerificacion', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {
            $data['placa'] = $this->VerificacionModelo->query();
            $data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/listarVerificacion', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_mantenimiento") {
            $data['placa'] = $this->VerificacionModelo->query();
            $data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/listarVerificacion', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_jefe_mantenimiento") {
            $data['placa'] = $this->VerificacionModelo->query();
            $data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/listarVerificacion', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_servicio_a_clientes") {
            $data['placa'] = $this->VerificacionModelo->query();
            $data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/listarVerificacion', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $data['placa'] = $this->VerificacionModelo->query();
            $data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/listarVerificacion', $data);
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

        $data['data'] = $this->VerificacionModelo->get($batas, $offset, $search);

        $this->load->view('Verificacion/lista', $data);
    }

    // untuk menampilkan halaman tambah data
    public function agregar() {

        $data['css'] = $this->css;
        $data['base'] = $this->base;

        $this->load->model('Verificacion/VerificacionModelo');
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
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);


            $this->load->view('Verificacion/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $this->load->view('Verificacion/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica") {
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_mantenimiento") {
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_jefe_mantenimiento") {
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Verificacion/agregar');
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
        $empresa = $this->input->post('empresa');
        $serie = $this->input->post('serie');
        $cliente = $this->input->post('cliente');
        $cliente_temporal = $this->input->post('cliente_temporal');
        $pedimento = $this->input->post('pedimento');
        $num_factura = $this->input->post('num_factura');
        $comentario = $this->input->post('comentario');
        $observacion = $this->input->post('observacion');
        // get foto
        $config['upload_path'] = './assets/verificacion';
        $config['allowed_types'] = 'jpg|png|jpeg|gif|pdf';
        $config['overwrite'] = TRUE;
        /* $config['max_size'] = '2048';  //2MB max
          $config['max_width'] = '4480'; // pixel
          $config['max_height'] = '4480'; // pixel */
        $this->upload->initialize($config);



        /*
          $data['no_maqui'] = $no_maqui;
          $data['modelo'] = $modelo;
          $data['empresa'] = $empresa;
          $data['serie'] = $serie;
          $data['cliente'] = $cliente;
          $data['pedimento'] = $pedimento;



         */
        $data = array(
            'no_maqui' => $no_maqui,
            'modelo' => $modelo,
            'empresa' => $empresa,
            'serie' => $serie,
            'cliente' => $cliente,
            'cliente_temporal' => $cliente_temporal,
            'pedimento' => $pedimento,
            'num_factura' => $num_factura,
            'comentario' => $comentario,
            'observacion' => $observacion,
            'id' => $dataLevel = $this->userlevel->id($data['id'])
        );






        //pedimento
        $this->upload->do_upload('pedimentopdf');
        $pedimentopdf = $this->upload->data();

        if (!empty($_FILES['pedimentopdf']['name'])) {
            $data['pedimentopdf'] = $pedimentopdf['file_name'];
        }

        //foto placa
        $this->upload->do_upload('fotopostpdf');
        $fotopdf = $this->upload->data();

        $this->upload->do_upload('fotopost');
        $foto = $this->upload->data();
        if (!empty($_FILES['fotopost']['name'])) {
            $data['foto'] = $foto['file_name'];
        }



        $data['num_factura'] = $num_factura;


        $this->upload->do_upload('fotopostpdf');
        $fotopdf = $this->upload->data();

        if (!empty($_FILES['fotopostpdf']['name'])) {
            $data['factura'] = $fotopdf['file_name'];
        }

        //refacciones
        $this->upload->do_upload('refacciones');
        $refacciones = $this->upload->data();


        if (!empty($_FILES['refacciones']['name'])) {
            $data['refacciones'] = $refacciones['file_name'];
        }



          //contrato
        $this->upload->do_upload('contrato');
        $contrato = $this->upload->data();


        if (!empty($_FILES['contrato']['name'])) {
            $data['contrato'] = $contrato['file_name'];
        }





        /*
          if ($this->upload->do_upload('fotopost')) {
          $foto = $this->upload->data();
          $data = array(
          'no_maqui' => $no_maqui,
          'modelo' => $modelo,
          'empresa' => $empresa,
          'serie' => $serie,
          'cliente' => $cliente,
          'pedimento' => $pedimento,
          'foto' => $foto['file_name'],
          'num_factura' => $num_factura,
          'factura' => "",
          'id' => $dataLevel = $this->userlevel->id($data['id'])
          );
          $this->VerificacionModelo->insert($data);
          redirect('Verificacion');
          } else if ($this->upload->do_upload('fotopostpdf')) {

          $fotopdf = $this->upload->data();
          $data = array(
          'no_maqui' => $no_maqui,
          'modelo' => $modelo,
          'empresa' => $empresa,
          'serie' => $serie,
          'cliente' => $cliente,
          'pedimento' => $pedimento,
          'foto' => "",
          'num_factura' => $num_factura,
          'factura' => $fotopdf['file_name'],
          'id' => $dataLevel = $this->userlevel->id($data['id'])
          );
          $this->VerificacionModelo->insert($data);
          redirect('Verificacion');
          }






          else if ($this->upload->do_upload('pedimentopdf')) {

          $pedimentopdf = $this->upload->data();
          $data = array(
          'no_maqui' => $no_maqui,
          'modelo' => $modelo,
          'empresa' => $empresa,
          'serie' => $serie,
          'cliente' => $cliente,
          'pedimento' => $pedimento,
          'pedimentopdf' => $pedimentopdf['file_name'],
          'foto' => "",
          'num_factura' => $num_factura,
          'factura' => "",
          'id' => $dataLevel = $this->userlevel->id($data['id'])
          );
          $this->VerificacionModelo->insert($data);
          redirect('Verificacion');
          }


          else if ($this->upload->do_upload('refacciones')) {

          $refacciones= $this->upload->data();
          $data = array(
          'no_maqui' => $no_maqui,
          'modelo' => $modelo,
          'empresa' => $empresa,
          'serie' => $serie,
          'cliente' => $cliente,
          'pedimento' => $pedimento,
          'pedimentopdf' => "",
          'foto' => "",
          'num_factura' => $num_factura,
          'factura' => "",
          'refacciones' => $refacciones['file_name'],
          'id' => $dataLevel = $this->userlevel->id($data['id'])
          );
          $this->VerificacionModelo->insert($data);
          redirect('Verificacion');
          }
          else {


          $data = array(
          'no_maqui' => $no_maqui,
          'modelo' => $modelo,
          'empresa' => $empresa,
          'serie' => $serie,
          'cliente' => $cliente,
          'pedimento' => $pedimento,
          'pedimentopdf' => "",
          'foto' => "",
          'num_factura' =>  $num_factura,
          'factura' => "",
          'refacciones' => "",
          'id' => $dataLevel = $this->userlevel->id($data['id'])
          );
          $this->VerificacionModelo->insert($data);
          redirect('Verificacion');
          }
         */






        $this->VerificacionModelo->insert($data);
        redirect('Verificacion');
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
        $this->VerificacionModelo->delete($where);
        return redirect('Verificacion');
    }

    // edit
    public function actualizar($id) {
        $this->load->model('Verificacion/VerificacionModelo');








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
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo

            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->VerificacionModelo->get_by_id($kondisi);
            return $this->load->view('Verificacion/editar', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->VerificacionModelo->get_by_id($kondisi);
            return $this->load->view('Verificacion/editar', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->VerificacionModelo->get_by_id($kondisi);
            return $this->load->view('Verificacion/editar', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->VerificacionModelo->get_by_id($kondisi);
            return $this->load->view('Verificacion/editar', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->VerificacionModelo->get_by_id($kondisi);
            return $this->load->view('Verificacion/editar', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_mantenimiento") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->VerificacionModelo->get_by_id($kondisi);
            return $this->load->view('Verificacion/editar', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_jefe_mantenimiento") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->VerificacionModelo->get_by_id($kondisi);
            return $this->load->view('Verificacion/editar', $data);


            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $kondisi = array('id_verificacion' => $id);
            $data['data'] = $this->VerificacionModelo->get_by_id($kondisi);
            return $this->load->view('Verificacion/editar', $data);


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
        $empresa = $this->input->post('empresa');
        $serie = $this->input->post('serie');
        $cliente = $this->input->post('cliente');
        $cliente_temporal = $this->input->post('cliente_temporal');
        $pedimento = $this->input->post('pedimento');
        $factura = $this->input->post('factura');
        $foto = $this->input->post('old');
        $pedimentopdf = $this->input->post('pedimentopdf');
        $refacciones = $this->input->post('refacciones');
        $num_factura = $this->input->post('num_factura');
        $comentario = $this->input->post('comentario');
        $observacion = $this->input->post('observacion');

        $path = './assets/verificacion/';
        $id = $this->input->post('id');
        $kondisi = array('id_verificacion' => $id);
        // get fotoz


        $config['upload_path'] = './assets/verificacion';
        $config['allowed_types'] = '*';
        /* $config['max_size'] = '2048';  //2MB max
          $config['max_width'] = '4480'; // pixel
          $config['max_height'] = '4480'; // pixel */

        /*
          $config['file_name'] = $_FILES['fotopost']['name'];

          $config['file_name'] = $_FILES['fotopostpdf']['name'];
          $config['file_name'] = $_FILES['pedimentopdf']['name'];
          $config['file_name'] = $_FILES['refacciones']['name']; */
        $this->upload->initialize($config);









        $data['no_maqui'] = $no_maqui;
        $data['modelo'] = $modelo;
        $data['empresa'] = $empresa;
        $data['serie'] = $serie;
        $data['cliente'] = $cliente;
        $data['cliente_temporal'] = $cliente_temporal;
        $data['pedimento'] = $pedimento;

        //pedimento
        $this->upload->do_upload('pedimentopdf');
        $pedimentopdf = $this->upload->data();

        if (!empty($_FILES['pedimentopdf']['name'])) {
            $data['pedimentopdf'] = $pedimentopdf['file_name'];
        }

        //foto placa
        $this->upload->do_upload('fotopostpdf');
        $fotopdf = $this->upload->data();

        $this->upload->do_upload('fotopost');
        $foto = $this->upload->data();
        if (!empty($_FILES['fotopost']['name'])) {
            $data['foto'] = $foto['file_name'];
        }



        $data['num_factura'] = $num_factura;


        $this->upload->do_upload('fotopostpdf');
        $fotopdf = $this->upload->data();

        if (!empty($_FILES['fotopostpdf']['name'])) {
            $data['factura'] = $fotopdf['file_name'];
        }

        //refacciones
        $this->upload->do_upload('refacciones');
        $refacciones = $this->upload->data();


        if (!empty($_FILES['refacciones']['name'])) {
            $data['refacciones'] = $refacciones['file_name'];
        }


        $data['comentario'] = $comentario;
        $data['observacion'] = $observacion;
        
        
        
        //contrato
        $this->upload->do_upload('contrato');
        $contrato = $this->upload->data();


        if (!empty($_FILES['contrato']['name'])) {
            $data['contrato'] = $contrato['file_name'];
        }


       /* /* Para traerse el id del usuario 
        $data = $this->session->userdata;
        
        $data = array(
            'id' => $dataLevel = $this->userlevel->id($data['id'])
        ); Para traerse el id del usuario */
        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));
        $this->VerificacionModelo->update($data, $kondisi);
        redirect('Verificacion');
    }

}

// end class
