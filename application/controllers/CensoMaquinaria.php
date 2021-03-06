<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 25/06/2019 Hora 10:26 am
 * Fecha : 26/06/2019 12:34 PM
 * Sistema de Control Robuspack.
 */
class CensoMaquinaria extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model("CensoMaquinaria/CensoMaquinariaModelo");
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
        $this->load->model('CensoMaquinaria/CensoMaquinariaModelo');
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
            $data['censomaquinaria'] = $this->CensoMaquinariaModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CensoMaquinaria/listarCensoMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $data['censomaquinaria'] = $this->CensoMaquinariaModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CensoMaquinaria/listarCensoMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['censomaquinaria'] = $this->CensoMaquinariaModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CensoMaquinaria/listarCensoMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $data['censomaquinaria'] = $this->CensoMaquinariaModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CensoMaquinaria/listarCensoMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $data['censomaquinaria'] = $this->CensoMaquinariaModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CensoMaquinaria/listarCensoMaquinaria', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $data['censomaquinaria'] = $this->CensoMaquinariaModelo->query();
            //$data['totalRegistroPlacas'] = $this->VerificacionModelo->totalRegistroPlacas(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CensoMaquinaria/listarCensoMaquinaria', $data);
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

        $data['data'] = $this->CensoMaquinariaModelo->get($batas, $offset, $search);

        $this->load->view('CensoMaquinaria/lista', $data);
    }

    // untuk menampilkan halaman tambah data
    public function agregar() {

        $data['css'] = $this->css;
        $data['base'] = $this->base;

        $this->load->model('CensoMaquinaria/CensoMaquinariaModelo');
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
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            //$data['clienteCombo'] = $this->ClienteSeguimientoModelo->getCliente();

            $this->load->view('CensoMaquinaria/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CensoMaquinaria/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $this->load->view('CensoMaquinaria/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->vModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CensoMaquinaria/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CensoMaquinaria/agregar');
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('CensoMaquinaria/agregar');
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
        $empresa = $this->input->post('empresa');
        $grupo_temporal = $this->input->post('grupo_temporal');
        $empresa_temporal = $this->input->post('empresa_temporal');
        $estado = $this->input->post('estado');
        $ciudad_municipio = $this->input->post('ciudad_municipio');
        $nombre_dueno = $this->input->post('nombre_dueno');
        $celular_dueno = $this->input->post('celular_dueno');
        $correo_empresarial_dueno = $this->input->post('correo_empresarial_dueno');
        $correo_personal_dueno = $this->input->post('correo_personal_dueno');
        $nombre_ceo = $this->input->post('nombre_ceo');
        $celular_ceo = $this->input->post('celular_ceo');
        $correo_empresarial_ceo = $this->input->post('correo_empresarial_ceo');
        $correo_personal_ceo = $this->input->post('correo_personal_ceo');
        $nombre_gerente = $this->input->post('nombre_gerente');
        $celular_gerente = $this->input->post('celular_gerente');
        $correo_empresarial_gerente = $this->input->post('correo_empresarial_gerente');
        $correo_personal_gerente = $this->input->post('correo_personal_gerente');
        $nombre_produccion = $this->input->post('nombre_produccion');
        $celular_produccion = $this->input->post('celular_produccion');
        $correo_empresarial_produccion = $this->input->post('correo_empresarial_produccion');
        $correo_personal_produccion = $this->input->post('correo_personal_produccion');
        $nombre_mtto = $this->input->post('nombre_mtto');
        $celular_mtto = $this->input->post('celular_mtto');
        $correo_empresarial_mtto = $this->input->post('correo_empresarial_mtto');
        $correo_personal_mtto = $this->input->post('correo_personal_mtto');
        $nombre_compras = $this->input->post('nombre_compras');
        $celular_compras = $this->input->post('celular_compras');
        $correo_empresarial_compras = $this->input->post('correo_empresarial_compras');
        $correo_personal_compras = $this->input->post('correo_personal_compras');
        $nombre_ventas = $this->input->post('nombre_ventas');
        $celular_ventas = $this->input->post('celular_ventas');
        $correo_empresarial_ventas = $this->input->post('correo_empresarial_ventas');
        $correo_personal_ventas = $this->input->post('correo_personal_ventas');
        $nombre_otros = $this->input->post('nombre_otros');
        $celular_otros = $this->input->post('celular_otros');
        $correo_empresarial_otros = $this->input->post('correo_empresarial_otros');
        $correo_personal_otros = $this->input->post('correo_personal_otros');
        $tipo_de_cliente = $this->input->post('tipo_de_cliente');
        $asesor = $this->input->post('asesor');
        $estatus_cliente = $this->input->post('estatus_cliente');
        $tamano_cliente = $this->input->post('tamano_cliente');
        $tipo_mercado = $this->input->post('tipo_mercado');
        $volumen_produccion = $this->input->post('volumen_produccion');
        $necesidad = $this->input->post('necesidad');
        $compromiso = $this->input->post('compromiso');
        $notas = $this->input->post('notas');
        $info_maquina_1 = $this->input->post('info_maquina_1');
        $info_maquina_2 = $this->input->post('info_maquina_2');
        $info_maquina_3 = $this->input->post('info_maquina_3');
        $info_maquina_4 = $this->input->post('info_maquina_4');
        $info_maquina_5 = $this->input->post('info_maquina_5');
        $info_maquina_6 = $this->input->post('info_maquina_6');
        $info_maquina_7 = $this->input->post('info_maquina_7');
        $refacciones = $this->input->post('refacciones');
        $corrugadora = $this->input->post('corrugadora');

        // get foto
        $config['upload_path'] = './assets/censomaquinaria';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;
        /* $config['file_name'] = $_FILES['cotizacion']['name'];
          $config['file_name'] = $_FILES['pedido']['name'];
          $config['file_name'] = $_FILES['contrato']['name']; */

        /* $config['max_size'] = '2048';  //2MB max
          $config['max_width'] = '4480'; // pixel
          $config['max_height'] = '4480'; // pixel */
        $this->upload->initialize($config);

        /* $this->upload->do_upload('cotizacion');
          $cotizacion = $this->upload->data(); */
        $data = array(
            'grupo' => $grupo,
            'grupo_temporal' => $grupo_temporal,
            'empresa' => $empresa,
            'empresa_temporal' => $empresa_temporal,
            'estado' => $estado,
            'ciudad_municipio' => $ciudad_municipio,
            'nombre_dueno' => $nombre_dueno,
            'celular_dueno' => $celular_dueno,
            'correo_empresarial_dueno' => $correo_empresarial_dueno,
            'correo_personal_dueno' => $correo_personal_dueno,
            'nombre_ceo' => $nombre_ceo,
            'celular_ceo' => $celular_ceo,
            'correo_empresarial_ceo' => $correo_empresarial_ceo,
            'correo_personal_ceo' => $correo_personal_ceo,
            'nombre_gerente' => $nombre_gerente,
            'celular_gerente' => $celular_gerente,
            'correo_empresarial_gerente' => $correo_empresarial_gerente,
            'correo_personal_gerente' => $correo_personal_gerente,
            'nombre_produccion' => $nombre_produccion,
            'celular_produccion' => $celular_produccion,
            'correo_empresarial_produccion' => $correo_empresarial_produccion,
            'correo_personal_produccion' => $correo_personal_produccion,
            'nombre_mtto' => $nombre_mtto,
            'celular_mtto' => $celular_mtto,
            'correo_empresarial_mtto' => $correo_empresarial_mtto,
            'correo_personal_mtto' => $correo_personal_mtto,
            'nombre_compras' => $nombre_compras,
            'celular_compras' => $celular_compras,
            'correo_empresarial_compras' => $correo_empresarial_compras,
            'correo_personal_compras' => $correo_personal_compras,
            'nombre_ventas' => $nombre_ventas,
            'celular_ventas' => $celular_ventas,
            'correo_empresarial_ventas' => $correo_empresarial_ventas,
            'correo_personal_ventas' => $correo_personal_ventas,
            'nombre_otros' => $nombre_otros,
            'celular_otros' => $celular_otros,
            'correo_empresarial_otros' => $correo_empresarial_otros,
            'correo_personal_otros' => $correo_personal_otros,
            'tipo_de_cliente' => $tipo_de_cliente,
            'asesor' => $asesor,
            'estatus_cliente' => $estatus_cliente,
            'tamano_cliente' => $tamano_cliente,
            'tipo_mercado' => $tipo_mercado,
            'volumen_produccion' => $volumen_produccion,
            'necesidad' => $necesidad,
            'compromiso' => $compromiso,
            'notas' => $notas,
            'info_maquina_1' => $info_maquina_1,
            'info_maquina_2' => $info_maquina_2,
            'info_maquina_3' => $info_maquina_3,
            'info_maquina_4' => $info_maquina_4,
            'info_maquina_5' => $info_maquina_5,
            'info_maquina_6' => $info_maquina_6,
            'info_maquina_7' => $info_maquina_7,
            'refacciones' => $refacciones,
            'corrugadora' => $corrugadora,
            'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])



                //   'id' => $dataLevel = $this->userlevel->id($data['id'])
        );


        /* if (!empty($_FILES['cotizacion']['name'])) {
          $data['cotizacion'] = $cotizacion['file_name'];
          } */








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






        $this->CensoMaquinariaModelo->insert($data);
        redirect('CensoMaquinaria');
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

        $where = array('id_censomaquinaria' => $id);
        $this->CensoMaquinariaModelo->delete($where);
        return redirect('CensoMaquinaria');
    }

    // edit
    public function actualizar($id) {
        $this->load->model('CensoMaquinaria/CensoMaquinariaModelo');








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
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $kondisi = array('id_censomaquinaria' => $id);
            $data['data'] = $this->CensoMaquinariaModelo->get_by_id($kondisi);
            $this->load->view('CensoMaquinaria/editar', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_maquinaria") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $kondisi = array('id_censomaquinaria' => $id);
            $data['data'] = $this->CensoMaquinariaModelo->get_by_id($kondisi);
            $this->load->view('CensoMaquinaria/editar', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_director") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $kondisi = array('id_censomaquinaria' => $id);
            $data['data'] = $this->CensoMaquinariaModelo->get_by_id($kondisi);
            $this->load->view('CensoMaquinaria/editar', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $kondisi = array('id_censomaquinaria' => $id);
            $data['data'] = $this->CensoMaquinariaModelo->get_by_id($kondisi);
            $this->load->view('CensoMaquinaria/editar', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $kondisi = array('id_censomaquinaria' => $id);
            $data['data'] = $this->CensoMaquinariaModelo->get_by_id($kondisi);
            $this->load->view('CensoMaquinaria/editar', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $data['grupoCombo'] = $this->CensoMaquinariaModelo->getGrupo();
            $data['clienteCombo'] = $this->CensoMaquinariaModelo->getCliente();
            $kondisi = array('id_censomaquinaria' => $id);
            $data['data'] = $this->CensoMaquinariaModelo->get_by_id($kondisi);
            $this->load->view('CensoMaquinaria/editar', $data);
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
        $empresa = $this->input->post('empresa');
         $grupo_temporal = $this->input->post('grupo_temporal');
        $empresa_temporal = $this->input->post('empresa_temporal');
        $estado = $this->input->post('estado');
        $ciudad_municipio = $this->input->post('ciudad_municipio');
        $nombre_dueno = $this->input->post('nombre_dueno');
        $celular_dueno = $this->input->post('celular_dueno');
        $correo_empresarial_dueno = $this->input->post('correo_empresarial_dueno');
        $correo_personal_dueno = $this->input->post('correo_personal_dueno');
        $nombre_ceo = $this->input->post('nombre_ceo');
        $celular_ceo = $this->input->post('celular_ceo');
        $correo_empresarial_ceo = $this->input->post('correo_empresarial_ceo');
        $correo_personal_ceo = $this->input->post('correo_personal_ceo');
        $nombre_gerente = $this->input->post('nombre_gerente');
        $celular_gerente = $this->input->post('celular_gerente');
        $correo_empresarial_gerente = $this->input->post('correo_empresarial_gerente');
        $correo_personal_gerente = $this->input->post('correo_personal_gerente');
        $nombre_produccion = $this->input->post('nombre_produccion');
        $celular_produccion = $this->input->post('celular_produccion');
        $correo_empresarial_produccion = $this->input->post('correo_empresarial_produccion');
        $correo_personal_produccion = $this->input->post('correo_personal_produccion');
        $nombre_mtto = $this->input->post('nombre_mtto');
        $celular_mtto = $this->input->post('celular_mtto');
        $correo_empresarial_mtto = $this->input->post('correo_empresarial_mtto');
        $correo_personal_mtto = $this->input->post('correo_personal_mtto');
        $nombre_compras = $this->input->post('nombre_compras');
        $celular_compras = $this->input->post('celular_compras');
        $correo_empresarial_compras = $this->input->post('correo_empresarial_compras');
        $correo_personal_compras = $this->input->post('correo_personal_compras');
        $nombre_ventas = $this->input->post('nombre_ventas');
        $celular_ventas = $this->input->post('celular_ventas');
        $correo_empresarial_ventas = $this->input->post('correo_empresarial_ventas');
        $correo_personal_ventas = $this->input->post('correo_personal_ventas');
        $nombre_otros = $this->input->post('nombre_otros');
        $celular_otros = $this->input->post('celular_otros');
        $correo_empresarial_otros = $this->input->post('correo_empresarial_otros');
        $correo_personal_otros = $this->input->post('correo_personal_otros');
        $tipo_de_cliente = $this->input->post('tipo_de_cliente');
        $asesor = $this->input->post('asesor');
        $estatus_cliente = $this->input->post('estatus_cliente');
        $tamano_cliente = $this->input->post('tamano_cliente');
        $tipo_mercado = $this->input->post('tipo_mercado');
        $volumen_produccion = $this->input->post('volumen_produccion');
        $necesidad = $this->input->post('necesidad');
        $compromiso = $this->input->post('compromiso');
        $notas = $this->input->post('notas');
        $info_maquina_1 = $this->input->post('info_maquina_1');
        $info_maquina_2 = $this->input->post('info_maquina_2');
        $info_maquina_3 = $this->input->post('info_maquina_3');
        $info_maquina_4 = $this->input->post('info_maquina_4');
        $info_maquina_5 = $this->input->post('info_maquina_5');
        $info_maquina_6 = $this->input->post('info_maquina_6');
        $info_maquina_7 = $this->input->post('info_maquina_7');
        $refacciones = $this->input->post('refacciones');
        $corrugadora = $this->input->post('corrugadora');

        $path = './assets/censomaquinaria';
        $id = $this->input->post('id');
        $kondisi = array('id_censomaquinaria' => $id);
        // get fotoz


        $config['upload_path'] = './assets/censomaquinaria';
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







        $data['grupo'] = $grupo;
        $data['empresa'] = $empresa;
        
        $data['grupo_temporal'] = $grupo_temporal;
        $data['empresa_temporal'] = $empresa_temporal;
        $data['estado'] = $estado;
        $data['ciudad_municipio'] = $ciudad_municipio;
        $data['nombre_dueno'] = $nombre_dueno;
        $data['celular_dueno'] = $celular_dueno;
        $data['correo_empresarial_dueno'] = $correo_empresarial_dueno;
        $data['correo_personal_dueno'] = $correo_personal_dueno;
        $data['nombre_ceo'] = $nombre_ceo;
        $data['celular_ceo'] = $celular_ceo;
        $data['correo_empresarial_ceo'] = $correo_empresarial_ceo;
        $data['correo_personal_ceo'] = $correo_personal_ceo;
        $data['nombre_gerente'] = $nombre_gerente;
        $data['celular_gerente'] = $celular_gerente;
        $data['correo_empresarial_gerente'] = $correo_empresarial_gerente;
        $data['correo_personal_gerente'] = $correo_personal_gerente;
        $data['nombre_produccion'] = $nombre_produccion;
        $data['celular_produccion'] = $celular_produccion;
        $data['correo_empresarial_produccion'] = $correo_empresarial_produccion;
        $data['correo_personal_produccion'] = $correo_personal_produccion;
        $data['nombre_mtto'] = $nombre_mtto;
        $data['celular_mtto'] = $celular_mtto;
        $data['correo_empresarial_mtto'] = $correo_empresarial_mtto;
        $data['correo_personal_mtto'] = $correo_personal_mtto;
        $data['nombre_compras'] = $nombre_compras;
        $data['celular_compras'] = $celular_compras;
        $data['correo_empresarial_compras'] = $correo_empresarial_compras;
        $data['correo_personal_compras'] = $correo_personal_compras;
        $data['nombre_ventas'] = $nombre_ventas;
        $data['celular_ventas'] = $celular_ventas;
        $data['correo_empresarial_ventas'] = $correo_empresarial_ventas;
        $data['correo_personal_ventas'] = $correo_personal_ventas;
        $data['nombre_otros'] = $nombre_otros;
        $data['celular_otros'] = $celular_otros;
        $data['correo_empresarial_otros'] = $correo_empresarial_otros;
        $data['correo_personal_otros'] = $correo_personal_otros;
        $data['tipo_de_cliente'] = $tipo_de_cliente;
        $data['asesor'] = $asesor;
        $data['estatus_cliente'] = $estatus_cliente;
        $data['tamano_cliente'] = $tamano_cliente;
        $data['tipo_mercado'] = $tipo_mercado;
        $data['volumen_produccion'] = $volumen_produccion;
        $data['necesidad'] = $necesidad;
        $data['compromiso'] = $compromiso;
        $data['notas'] = $notas;
        $data['info_maquina_1'] = $info_maquina_1;
        $data['info_maquina_2'] = $info_maquina_2;
        $data['info_maquina_3'] = $info_maquina_3;
        $data['info_maquina_4'] = $info_maquina_4;
        $data['info_maquina_5'] = $info_maquina_5;
        $data['info_maquina_6'] = $info_maquina_6;
        $data['info_maquina_7'] = $info_maquina_7;
        $data['refacciones'] = $refacciones;
        $data['corrugadora'] = $corrugadora;






        /* $this->upload->do_upload('pedido');
          $pedido = $this->upload->data();



          if (!empty($_FILES['pedido']['name'])) {
          $data['pedido'] = $pedido['file_name'];
          } */




        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));
        $this->CensoMaquinariaModelo->update($data, $kondisi);
        redirect('CensoMaquinaria');
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
