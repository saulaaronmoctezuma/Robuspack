<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 25/06/2019 Hora 10:26 am
 * Fecha : 26/06/2019 12:34 PM
 * Sistema de Control Robuspack.
 */
class ClienteSeguimiento extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model("ClienteSeguimiento/ClienteSeguimientoModelo");
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
        $this->load->model('ClienteSeguimiento/ClienteSeguimientoModelo');
        $data['title'] = 'Lista de SIM';
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
            $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
    $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
           $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
           $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);
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

        $this->load->model('ClienteSeguimiento/ClienteSeguimientoModelo');
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
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            //$data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();

            $this->load->view('ClienteSeguimiento/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
           $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteSeguimiento/agregar');
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
        }  else if ($dataLevel == "is_Gerente_Ventas") {
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteSeguimiento/agregar');
            $this->load->view('footer');
        }  else {
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

        $cliente = $this->input->post('cliente');
        $nivel = $this->input->post('nivel');
        $necesidad = $this->input->post('necesidad');
        $compromiso = $this->input->post('compromiso');
        $notas = $this->input->post('notas');
        $cotizacion = $this->input->post('cotizacion');
        $pedido = $this->input->post('pedido');
        $contrato = $this->input->post('contrato');

        // get foto
        $config['upload_path'] = './assets/clienteseguimiento';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;
        /*$config['file_name'] = $_FILES['cotizacion']['name'];
        $config['file_name'] = $_FILES['pedido']['name'];
        $config['file_name'] = $_FILES['contrato']['name'];*/

        /* $config['max_size'] = '2048';  //2MB max
          $config['max_width'] = '4480'; // pixel
          $config['max_height'] = '4480'; // pixel */
        $this->upload->initialize($config);
        
        $this->upload->do_upload('cotizacion');
        $cotizacion = $this->upload->data();
             $data = array(
                'cliente' => $cliente,
                 'nivel' => $nivel,
                'necesidad' => $necesidad,
                'compromiso' => $compromiso,
                'notas' => $notas,
                'id' => $dataLevel = $this->userlevel->id($data['id'])
                
            );
             
            
         if (!empty($_FILES['cotizacion']['name'])) {
            $data['cotizacion'] = $cotizacion['file_name'];
        }

        $this->upload->do_upload('pedido');
        $pedido = $this->upload->data();



        if (!empty($_FILES['pedido']['name'])) {
            $data['pedido'] = $pedido['file_name'];
        }
        
        
        
        
        $this->upload->do_upload('contrato');
        $contrato = $this->upload->data();



        if (!empty($_FILES['contrato']['name'])) {
            $data['contrato'] = $contrato['file_name'];
        }

       
        /*
        if ($this->upload->do_upload('cotizacion')) {
            $cotizacion = $this->upload->data();
            $data = array(
                'cliente' => $cliente,
                'necesidad' => $necesidad,
                'compromiso' => $compromiso,
                'notas' => $notas,
                'cotizacion' => $cotizacion['file_name'],
                'pedido' => "",
                'contrato' => "",
                'id' => $dataLevel = $this->userlevel->id($data['id'])
            );
            $this->ClienteSeguimientoModelo->insert($data);
            redirect('ClienteSeguimiento');
        } else if ($this->upload->do_upload('pedido')) {

            $pedido = $this->upload->data();
            $data = array(
                'cliente' => $cliente,
                'necesidad' => $necesidad,
                'compromiso' => $compromiso,
                'notas' => $notas,
                'cotizacion' => "",
                'pedido' => $pedido['file_name'],
                'contrato' => "",
                'id' => $dataLevel = $this->userlevel->id($data['id'])
            );
            $this->ClienteSeguimientoModelo->insert($data);
            redirect('Verificacion');
        } else if ($this->upload->do_upload('contrato')) {

            $contrato = $this->upload->data();
            $data = array(
                'cliente' => $cliente,
                'necesidad' => $necesidad,
                'compromiso' => $compromiso,
                'notas' => $notas,
                'cotizacion' => "",
                'pedido' => "",
                'contrato' => $contrato['file_name'],
                'id' => $dataLevel = $this->userlevel->id($data['id'])
            );
            $this->ClienteSeguimientoModelo->insert($data);
            redirect('ClienteSeguimiento');
        } else if ($this->upload->do_upload('contrato')) {

            $contrato = $this->upload->data();
            $data = array(
                'cliente' => $cliente,
                'necesidad' => $necesidad,
                'compromiso' => $compromiso,
                'notas' => $notas,
                'cotizacion' => "",
                'pedido' => "",
                'contrato' => $contrato['file_name'],
                'id' => $dataLevel = $this->userlevel->id($data['id'])
            );
            $this->ClienteSeguimientoModelo->insert($data);
            redirect('ClienteSeguimiento');
        } else {


            $data = array(
                'cliente' => $cliente,
                'necesidad' => $necesidad,
                'compromiso' => $compromiso,
                'notas' => $notas,
                'cotizacion' => "",
                'pedido' => "",
                'contrato' => "",
                'id' => $dataLevel = $this->userlevel->id($data['id'])
            );
            $this->ClienteSeguimientoModelo->insert($data);
            redirect('ClienteSeguimiento');
        }
*/






        $this->ClienteSeguimientoModelo->insert($data);
        redirect('ClienteSeguimiento');
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

        $where = array('id_clienteseguimiento' => $id);
        $this->ClienteSeguimientoModelo->delete($where);
        return redirect('ClienteSeguimiento');
    }

    // edit
    public function actualizar($id) {
        $this->load->model('ClienteSeguimiento/ClienteSeguimientoModelo');








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
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $kondisi = array('id_clienteseguimiento' => $id);
            $data['data'] = $this->ClienteSeguimientoModelo->get_by_id($kondisi);
            return $this->load->view('ClienteSeguimiento/editar', $data);
            $this->load->view('footer');
            
        } else if ($dataLevel == "is_maquinaria") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $kondisi = array('id_clienteseguimiento' => $id);
            $data['data'] = $this->ClienteSeguimientoModelo->get_by_id($kondisi);
            return $this->load->view('ClienteSeguimiento/editar', $data);
            $this->load->view('footer');
        }  else if ($dataLevel == "is_director") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
           $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $kondisi = array('id_clienteseguimiento' => $id);
            $data['data'] = $this->ClienteSeguimientoModelo->get_by_id($kondisi);
            return $this->load->view('ClienteSeguimiento/editar', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_editor") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $kondisi = array('id_clienteseguimiento' => $id);
            $data['data'] = $this->ClienteSeguimientoModelo->get_by_id($kondisi);
            return $this->load->view('ClienteSeguimiento/editar', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $kondisi = array('id_clienteseguimiento' => $id);
            $data['data'] = $this->ClienteSeguimientoModelo->get_by_id($kondisi);
            return $this->load->view('ClienteSeguimiento/editar', $data);
            $this->load->view('footer');
        }  else {
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

        $cliente = $this->input->post('cliente');
         $nivel = $this->input->post('nivel');
        $necesidad = $this->input->post('necesidad');
        $compromiso = $this->input->post('compromiso');
        $notas = $this->input->post('notas');
        $cotizacion = $this->input->post('cotizacion');
        $pedido = $this->input->post('pedido');
        $contrato = $this->input->post('contrato');


        $path = './assets/clienteseguimiento/';
        $id = $this->input->post('id');
        $kondisi = array('id_clienteseguimiento' => $id);
        // get fotoz


        $config['upload_path'] = './assets/clienteseguimiento';
        $config['allowed_types'] = '*';
        /* $config['max_size'] = '2048';  //2MB max
          $config['max_width'] = '4480'; // pixel
          $config['max_height'] = '4480'; // pixel */
          
          
        /*$config['file_name'] = $_FILES['cotizacion']['name'];
        $config['file_name'] = $_FILES['pedido']['name'];
        $config['file_name'] = $_FILES['contrato']['name'];*/
        
        
        
        
        

        $this->upload->initialize($config);
        $this->upload->do_upload('cotizacion');
        $cotizacion = $this->upload->data();







        $data['cliente'] = $cliente;
         $data['nivel'] = $nivel;
        $data['necesidad'] = $necesidad;
        $data['compromiso'] = $compromiso;
        $data['notas'] = $notas;


        if (!empty($_FILES['cotizacion']['name'])) {
            $data['cotizacion'] = $cotizacion['file_name'];
        }

        $this->upload->do_upload('pedido');
        $pedido = $this->upload->data();



        if (!empty($_FILES['pedido']['name'])) {
            $data['pedido'] = $pedido['file_name'];
        }
        $this->upload->do_upload('contrato');
        $contrato = $this->upload->data();



        if (!empty($_FILES['contrato']['name'])) {
            $data['contrato'] = $contrato['file_name'];
        }

        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));
        $this->ClienteSeguimientoModelo->update($data, $kondisi);
        redirect('ClienteSeguimiento');
    }

}

// end class
