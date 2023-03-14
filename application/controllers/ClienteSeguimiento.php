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
        } else if ($dataLevel == "is_refacciones") {
            $data['clienteseguimiento'] = $this->ClienteSeguimientoModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteSeguimiento/listarClienteSeguimiento', $data);
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
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('ClienteSeguimiento/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
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

        $cliente = $this->input->post('cliente');
        $nivel = $this->input->post('nivel');
        $necesidad = $this->input->post('necesidad');
        $compromiso = $this->input->post('compromiso');
        $notas = $this->input->post('notas');
        $modelo_maquina = $this->input->post('modelo_maquina');
        $numero_maquina = $this->input->post('numero_maquina');
        $valor_cotizacion = $this->input->post('valor_cotizacion');
        $fecha_ultima_visita = $this->input->post('fecha_ultima_visita');


        $cotizacion = $this->input->post('cotizacion');
        $pedido = $this->input->post('pedido');
        $contrato = $this->input->post('contrato');
        
        
        
        
          $fecha_prospeccion = $this->input->post('fecha_prospeccion');
        $llamadas_cliente = $this->input->post('llamadas_cliente');
        $fecha_contacto_cliente = $this->input->post('fecha_contacto_cliente');
        $llamdas_hechas = $this->input->post('llamdas_hechas');
        $fecha_ult_llamada = $this->input->post('fecha_ult_llamada');
        $numero_visitas = $this->input->post('numero_visitas');
       // $fecha_ult_visita = $this->input->post('fecha_ult_visita');
        //$monto_cotizado = $this->input->post('monto_cotizado');
       // $modelo_cotizado = $this->input->post('modelo_cotizado');
        $ventas_cerrada = $this->input->post('ventas_cerrada');
        $cliente_asignado = $this->input->post('cliente_asignado');
        $cliente_nuevo = $this->input->post('cliente_nuevo');


        // get foto
        $config['upload_path'] = './assets/clienteseguimiento';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;
        /* $config['file_name'] = $_FILES['cotizacion']['name'];
          $config['file_name'] = $_FILES['pedido']['name'];
          $config['file_name'] = $_FILES['contrato']['name']; */

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
            'modelo_maquina' => $modelo_maquina,
            'numero_maquina' => $numero_maquina,
            'valor_cotizacion' => $valor_cotizacion,
            'fecha_ultima_visita' => $fecha_ultima_visita,
            'id' => $dataLevel = $this->userlevel->id($data['id']),
            
            'fecha_prospeccion' => $fecha_prospeccion,
            'llamadas_cliente' => $llamadas_cliente,
            'fecha_contacto_cliente' => $fecha_contacto_cliente,
            'llamdas_hechas' => $llamdas_hechas,
            'fecha_ult_llamada' => $fecha_ult_llamada,
            'numero_visitas' => $numero_visitas,
           // 'fecha_ult_visita' => $fecha_ult_visita,
            //'monto_cotizado' => $monto_cotizado,
           // 'modelo_cotizado' => $modelo_cotizado,
            'ventas_cerrada' => $ventas_cerrada,
            'cliente_asignado' => $cliente_asignado,
            'cliente_nuevo' => $cliente_nuevo

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
        } else if ($dataLevel == "is_director") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $kondisi = array('id_clienteseguimiento' => $id);
            $data['data'] = $this->ClienteSeguimientoModelo->get_by_id($kondisi);
            return $this->load->view('ClienteSeguimiento/editar', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {


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
        } else if ($dataLevel == "is_refacciones") {


            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();
            $kondisi = array('id_clienteseguimiento' => $id);
            $data['data'] = $this->ClienteSeguimientoModelo->get_by_id($kondisi);
            return $this->load->view('ClienteSeguimiento/editar', $data);
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

        $cliente = $this->input->post('cliente');
        $nivel = $this->input->post('nivel');
        $necesidad = $this->input->post('necesidad');
        $compromiso = $this->input->post('compromiso');

        $notas = $this->input->post('notas');
        $modelo_maquina = $this->input->post('modelo_maquina');
        $numero_maquina = $this->input->post('numero_maquina');
        $valor_cotizacion = $this->input->post('valor_cotizacion');
        $fecha_ultima_visita = $this->input->post('fecha_ultima_visita');
        $cotizacion = $this->input->post('cotizacion');
        $pedido = $this->input->post('pedido');
        $contrato = $this->input->post('contrato');
        
        $fecha_prospeccion = $this->input->post('fecha_prospeccion');
$llamadas_cliente = $this->input->post('llamadas_cliente');
$fecha_contacto_cliente = $this->input->post('fecha_contacto_cliente');
$llamdas_hechas = $this->input->post('llamdas_hechas');
$fecha_ult_llamada = $this->input->post('fecha_ult_llamada');
$numero_visitas = $this->input->post('numero_visitas');
//$fecha_ult_visita = $this->input->post('fecha_ult_visita');
//$monto_cotizado = $this->input->post('monto_cotizado');
//$modelo_cotizado = $this->input->post('modelo_cotizado');
$ventas_cerrada = $this->input->post('ventas_cerrada');
$cliente_asignado = $this->input->post('cliente_asignado');
$cliente_nuevo = $this->input->post('cliente_nuevo');



        $path = './assets/clienteseguimiento/';
        $id = $this->input->post('id');
        $kondisi = array('id_clienteseguimiento' => $id);
        // get fotoz


        $config['upload_path'] = './assets/clienteseguimiento';
        $config['allowed_types'] = '*';
        /* $config['max_size'] = '2048';  //2MB max
          $config['max_width'] = '4480'; // pixel
          $config['max_height'] = '4480'; // pixel */


        /* $config['file_name'] = $_FILES['cotizacion']['name'];
          $config['file_name'] = $_FILES['pedido']['name'];
          $config['file_name'] = $_FILES['contrato']['name']; */






        $this->upload->initialize($config);
        $this->upload->do_upload('cotizacion');
        $cotizacion = $this->upload->data();







        $data['cliente'] = $cliente;
        $data['nivel'] = $nivel;
        $data['necesidad'] = $necesidad;
        $data['compromiso'] = $compromiso;
        $data['notas'] = $notas;
        $data['modelo_maquina'] = $modelo_maquina;
        $data['numero_maquina'] = $numero_maquina;
        $data['valor_cotizacion'] = $valor_cotizacion;
        $data['fecha_ultima_visita'] = $fecha_ultima_visita;



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
        
        
        
             $data['fecha_prospeccion'] = $fecha_prospeccion;
 $data['llamadas_cliente'] = $llamadas_cliente;
 $data['fecha_contacto_cliente'] = $fecha_contacto_cliente;
 $data['llamdas_hechas'] = $llamdas_hechas;
 $data['fecha_ult_llamada'] = $fecha_ult_llamada;
 $data['numero_visitas'] = $numero_visitas;
 //$data['fecha_ult_visita'] = $fecha_ult_visita;
 //$data['monto_cotizado'] = $monto_cotizado;
// $data['modelo_cotizado'] = $modelo_cotizado;
 $data['ventas_cerrada'] = $ventas_cerrada;
 $data['cliente_asignado'] = $cliente_asignado;
 $data['cliente_nuevo'] = $cliente_nuevo;


        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));
        $this->ClienteSeguimientoModelo->update($data, $kondisi);
        redirect('ClienteSeguimiento');
    }

}

//
//// end class
//<?php
//
//defined('BASEPATH') OR exit('No direct script access allowed');
//
//class Excel_import extends CI_Controller {
//
//    public function __construct() {
//        parent::__construct();
//
//        $this->load->library('form_validation');
//        $this->load->helper('url');
//    }
//
//    public function index() {
//        $data['num_rows'] = $this->db->get('fuventas')->num_rows();
//
//        $this->load->view('excel_import', $data);
//    }
//
//    public function import_data() {
//        $config = array(
//            'upload_path' => FCPATH . 'upload/',
//            'allowed_types' => '*'
//        );
//        $this->load->library('upload', $config);
//        if ($this->upload->do_upload('file')) {
//            $data = $this->upload->data();
//            @chmod($data['full_path'], 0777);
//
//            $this->load->library('Spreadsheet_Excel_Reader');
//            $this->spreadsheet_excel_reader->setOutputEncoding('CP1251');
//
//            $this->spreadsheet_excel_reader->read($data['full_path']);
//            $sheets = $this->spreadsheet_excel_reader->sheets[0];
//            error_reporting(0);
//
//            $data_excel = array();
//            for ($i = 2; $i <= $sheets['numRows']; $i++) {
//                if ($sheets['cells'][$i][1] == '')
//                    break;
//
//                $data_excel[$i - 1]['ref'] = $sheets['cells'][$i][1];
//                $data_excel[$i - 1]['cliente'] = $sheets['cells'][$i][2];
//                $data_excel[$i - 1]['direccion'] = $sheets['cells'][$i][3];
//                $data_excel[$i - 1]['codigo'] = $sheets['cells'][$i][4];
//                $data_excel[$i - 1]['tipo_de_prod'] = $sheets['cells'][$i][5];
//                $data_excel[$i - 1]['rfc'] = $sheets['cells'][$i][6];
//                $data_excel[$i - 1]['factura'] = $sheets['cells'][$i][7];
//                $data_excel[$i - 1]['remision'] = $sheets['cells'][$i][8];
//                $data_excel[$i - 1]['fecha_de_remision'] = $sheets['cells'][$i][9];
//                $data_excel[$i - 1]['orden_compra'] = $sheets['cells'][$i][10];
//                $data_excel[$i - 1]['cantidad'] = $sheets['cells'][$i][11];
//                $data_excel[$i - 1]['pu_usd'] = $sheets['cells'][$i][12];
//                $data_excel[$i - 1]['subtotal'] = $sheets['cells'][$i][13];
//                $data_excel[$i - 1]['iva'] = $sheets['cells'][$i][14];
//                $data_excel[$i - 1]['total_usd'] = $sheets['cells'][$i][15];
//                $data_excel[$i - 1]['fecha'] = $sheets['cells'][$i][16];
//                $data_excel[$i - 1]['pedimento'] = $sheets['cells'][$i][17];
//                $data_excel[$i - 1]['fecha_pedimento'] = $sheets['cells'][$i][18];
//                $data_excel[$i - 1]['dias_de_credito'] = $sheets['cells'][$i][19];
//                $data_excel[$i - 1]['fecha_vencimiento'] = $sheets['cells'][$i][20];
//                $data_excel[$i - 1]['fecha_de_pago'] = $sheets['cells'][$i][21];
//                $data_excel[$i - 1]['status_de_pago'] = $sheets['cells'][$i][22];
//                $data_excel[$i - 1]['refacturacion'] = $sheets['cells'][$i][23];
//                $data_excel[$i - 1]['nueva'] = $sheets['cells'][$i][24];
//                $data_excel[$i - 1]['observaciones'] = $sheets['cells'][$i][25];
//                $data_excel[$i - 1]['vendedor'] = $sheets['cells'][$i][26];
//                $data_excel[$i - 1]['fecha_de_cobro_de_comisiones'] = $sheets['cells'][$i][27];
//                $data_excel[$i - 1]['id'] = $sheets['cells'][$i][28];
//            }
//
//            $this->db->insert_batch('fuventas', $data_excel);
//             @unlink($data['full_path']);
//            redirect('excel-import');
//        }
//    }
//
//}
