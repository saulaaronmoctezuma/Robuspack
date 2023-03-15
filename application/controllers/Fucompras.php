<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 11/10/2019 Hora 10:20 am
 *  
 */
class Fucompras extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model("Fucompras/FucomprasModelo");
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
        $this->load->model('Fucompras/FucomprasModelo');
        $data['title'] = 'Lista de Fu Ventas';
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
            $data['fucompras'] = $this->FucomprasModelo->query();
            //$data['totalRegistros'] = $this->FucomprasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FucomprasModelo->getCliente();
            $this->load->view('Fucompras/listarFucompras', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['fucompras'] = $this->FucomprasModelo->query();
            //$data['totalRegistros'] = $this->FucomprasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FucomprasModelo->getCliente();
            $this->load->view('Fucompras/listarFucompras', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_servicio_a_clientes") {
            $data['fucompras'] = $this->FucomprasModelo->query();
            //$data['totalRegistros'] = $this->FucomprasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FucomprasModelo->getCliente();
            $this->load->view('Fucompras/listarFucompras', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica") {
            $data['fucompras'] = $this->FucomprasModelo->query();
            //$data['totalRegistros'] = $this->FucomprasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FucomprasModelo->getCliente();
            $this->load->view('Fucompras/listarFucompras', $data);
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

        $this->load->model('Fucompras/FucomprasModelo');
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
            $data['clienteCombo'] = $this->FucomprasModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Fucompras/agregarFucompras');
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Fucompras/agregarFucompras');
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function insertdata() {

        /* Para traerse el id del usuario */
        $data = $this->session->userdata;
        /* Para traerse el id del usuario */
<<<<<<< HEAD

=======
        $cantidad_registros = $this->input->post('cantidad_registros');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $ref = $this->input->post('ref');
        $estatus = $this->input->post('estatus');
        $compania_importadora = $this->input->post('compania_importadora');
        $cliente_proveedor = $this->input->post('cliente_proveedor');
        $awb = $this->input->post('awb');
        $courier = $this->input->post('courier');
        $clave = $this->input->post('clave');
        $tipo_de_prod = $this->input->post('tipo_de_prod');
        $descripcion = $this->input->post('descripcion');
        $factura = $this->input->post('factura');
        $imn = $this->input->post('imn');
        $ocv = $this->input->post('ocv');
        $qty = $this->input->post('qty');
        $pu_usd = $this->input->post('pu_usd');
        $total_usd = $this->input->post('total_usd');
        $tipo_de_embarque = $this->input->post('tipo_de_embarque');
        $tc_pedimento = $this->input->post('tc_pedimento');
        $importacion_por_partida_pz_mxn = $this->input->post('importacion_por_partida_pz_mxn');
        $importacion_por_partida_pz_usd = $this->input->post('importacion_por_partida_pz_usd');
        $impx_unidad = $this->input->post('impx_unidad');
        $costo_total_compra_usd_lab_qro = $this->input->post('costo_total_compra_usd_lab_qro');
        $costo_unitario_compra_usd_lab_qro = $this->input->post('costo_unitario_compra_usd_lab_qro');
        $com = $this->input->post('com');
        $cm = $this->input->post('cm');
        $cm_c = $this->input->post('cm_c');
        $ent = $this->input->post('ent');
        $pedimento = $this->input->post('pedimento');
        $fecha_pedimento = $this->input->post('fecha_pedimento');
        $valor_aduana = $this->input->post('valor_aduana');
        $arancel_igi = $this->input->post('arancel_igi');
        $arancel = $this->input->post('arancel');
        $dta = $this->input->post('dta');
        $iva_del_pedimento = $this->input->post('iva_del_pedimento');
        $costo_del_flete_mxn = $this->input->post('costo_del_flete_mxn');
        $honorarios_courier = $this->input->post('honorarios_courier');
        $costo_del_flete_usd = $this->input->post('costo_del_flete_usd');
        $pv_extra_bajo_ref_x_pz = $this->input->post('pv_extra_bajo_ref_x_pz');
        $utilidad_refx_pz = $this->input->post('utilidad_refx_pz');
        $utilidad = $this->input->post('utilidad');
        $observaciones = $this->input->post('observaciones');
        $fecha_pi = $this->input->post('fecha_pi');
        $codigo_arancelario = $this->input->post('codigo_arancelario');
        $factura_proveedor = $this->input->post('factura_proveedor');
        $pedimentopdf = $this->input->post('pedimentopdf');
        $honorarios_importacion = $this->input->post('honorarios_importacion');
        


        // get foto
        $config['upload_path'] = './assets/fucompras';
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
<<<<<<< HEAD
=======
             'cantidad_registros' => $cantidad_registros,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            'ref' => $ref,
            'estatus' => $estatus,
            'compania_importadora' => $compania_importadora,
            'cliente_proveedor' => $cliente_proveedor,
            'awb' => $awb,
            'courier' => $courier,
            'clave' => $clave,
            'tipo_de_prod' => $tipo_de_prod,
            'descripcion' => $descripcion,
            'factura' => $factura,
            'imn' => $imn,
            'ocv' => $ocv,
            'qty' => $qty,
            'pu_usd' => $pu_usd,
            'total_usd' => $total_usd,
            'tipo_de_embarque' => $tipo_de_embarque,
            'tc_pedimento' => $tc_pedimento,
            'importacion_por_partida_pz_mxn' => $importacion_por_partida_pz_mxn,
            'importacion_por_partida_pz_usd' => $importacion_por_partida_pz_usd,
            'impx_unidad' => $impx_unidad,
            'costo_total_compra_usd_lab_qro' => $costo_total_compra_usd_lab_qro,
            'costo_unitario_compra_usd_lab_qro' => $costo_unitario_compra_usd_lab_qro,
            'com' => $com,
            'cm' => $cm,
            'cm_c' => $cm_c,
            'ent' => $ent,
            'pedimento' => $pedimento,
            'fecha_pedimento' => $fecha_pedimento,
            'valor_aduana' => $valor_aduana,
            'arancel_igi' => $arancel_igi,
            'arancel' => $arancel,
            'dta' => $dta,
            'iva_del_pedimento' => $iva_del_pedimento,
            'costo_del_flete_mxn' => $costo_del_flete_mxn,
            'honorarios_courier' => $honorarios_courier,
            'costo_del_flete_usd' => $costo_del_flete_usd,
            'pv_extra_bajo_ref_x_pz' => $pv_extra_bajo_ref_x_pz,
            'utilidad_refx_pz' => $utilidad_refx_pz,
            'utilidad' => $utilidad,
            'observaciones' => $observaciones,
            'fecha_pi' => $fecha_pi,
            'codigo_arancelario' => $codigo_arancelario,
            'id' => $dataLevel = $this->userlevel->id($data['id'])
        );


         //factura proveedor pdf
          $this->upload->do_upload('factura_proveedor');
          $factura_proveedor = $this->upload->data();

          if (!empty($_FILES['factura_proveedor']['name'])) {
          $data['factura_proveedor'] = $factura_proveedor['file_name'];
          }
          
          
          
          //pedimento pdf
          $this->upload->do_upload('pedimentopdf');
          $pedimentopdf = $this->upload->data();

          if (!empty($_FILES['pedimentopdf']['name'])) {
          $data['pedimentopdf'] = $pedimentopdf['file_name'];
          }
          
          
           //honorarios pedimento pdf
          $this->upload->do_upload('honorarios_importacion');
          $honorarios_importacion = $this->upload->data();

          if (!empty($_FILES['honorarios_importacion']['name'])) {
          $data['honorarios_importacion'] = $honorarios_importacion['file_name'];
          }
          
          
          $this->FucomprasModelo->insert($data);
<<<<<<< HEAD
=======
         // $this->session->set_flashdata('msg','<div class="alert alert-success">Product Saved</div>');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
          redirect('Fucompras'); 
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

        $where = array('id_fucompras' => $id);
        $this->FucomprasModelo->delete($where);
        return redirect('Fucompras');
<<<<<<< HEAD
=======
        
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    }

    // edit
    public function actualizar($id) {
        $this->load->model('Fucompras/FucomprasModelo');








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
            //$data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $kondisi = array('id_Fucompras' => $id);
            $data['data'] = $this->FucomprasModelo->get_by_id($kondisi);
            return $this->load->view('Fucompras/editarFucompras', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $kondisi = array('id_Fucompras' => $id);
            $data['data'] = $this->FucomprasModelo->get_by_id($kondisi);
            return $this->load->view('Fucompras/editarFucompras', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $kondisi = array('id_Fucompras' => $id);
            $data['data'] = $this->FucomprasModelo->get_by_id($kondisi);
            return $this->load->view('Fucompras/editarFucompras', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function updatedata() {
<<<<<<< HEAD

=======
$cantidad_registros = $this->input->post('cantidad_registros');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $ref = $this->input->post('ref');
        $estatus = $this->input->post('estatus');
        $compania_importadora = $this->input->post('compania_importadora');
        $cliente_proveedor = $this->input->post('cliente_proveedor');
        $awb = $this->input->post('awb');
        $courier = $this->input->post('courier');
        $clave = $this->input->post('clave');
        $tipo_de_prod = $this->input->post('tipo_de_prod');
        $descripcion = $this->input->post('descripcion');
        $factura = $this->input->post('factura');
        $imn = $this->input->post('imn');
        $ocv = $this->input->post('ocv');
        $qty = $this->input->post('qty');
        $pu_usd = $this->input->post('pu_usd');
        $total_usd = $this->input->post('total_usd');
        $tipo_de_embarque = $this->input->post('tipo_de_embarque');
        $tc_pedimento = $this->input->post('tc_pedimento');
        $importacion_por_partida_pz_mxn = $this->input->post('importacion_por_partida_pz_mxn');
        $importacion_por_partida_pz_usd = $this->input->post('importacion_por_partida_pz_usd');
        $impx_unidad = $this->input->post('impx_unidad');
        $costo_total_compra_usd_lab_qro = $this->input->post('costo_total_compra_usd_lab_qro');
        $costo_unitario_compra_usd_lab_qro = $this->input->post('costo_unitario_compra_usd_lab_qro');
        $com = $this->input->post('com');
        $cm = $this->input->post('cm');
        $cm_c = $this->input->post('cm_c');
        $ent = $this->input->post('ent');
        $pedimento = $this->input->post('pedimento');
        $fecha_pedimento = $this->input->post('fecha_pedimento');
        $valor_aduana = $this->input->post('valor_aduana');
        $arancel_igi = $this->input->post('arancel_igi');
        $arancel = $this->input->post('arancel');
        $dta = $this->input->post('dta');
        $iva_del_pedimento = $this->input->post('iva_del_pedimento');
        $costo_del_flete_mxn = $this->input->post('costo_del_flete_mxn');
        $honorarios_courier = $this->input->post('honorarios_courier');
        $costo_del_flete_usd = $this->input->post('costo_del_flete_usd');
        $pv_extra_bajo_ref_x_pz = $this->input->post('pv_extra_bajo_ref_x_pz');
        $utilidad_refx_pz = $this->input->post('utilidad_refx_pz');
        $utilidad = $this->input->post('utilidad');
        $observaciones = $this->input->post('observaciones');
        $fecha_pi = $this->input->post('fecha_pi');
        $codigo_arancelario = $this->input->post('codigo_arancelario');
        $factura_proveedor = $this->input->post('factura_proveedor');
        $pedimentopdf = $this->input->post('pedimentopdf');
        $honorarios_importacion = $this->input->post('honorarios_importacion');


        $path = './assets/verificacion/';
        $id = $this->input->post('id');
        $kondisi = array('id_Fucompras' => $id);
        // get fotoz


        $config['upload_path'] = './assets/fucompras';
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








<<<<<<< HEAD

=======
$data['cantidad_registros'] = $cantidad_registros;
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $data['ref'] = $ref;
        $data['estatus'] = $estatus;
        $data['compania_importadora'] = $compania_importadora;
        $data['cliente_proveedor'] = $cliente_proveedor;
        $data['awb'] = $awb;
        $data['courier'] = $courier;
        $data['clave'] = $clave;
        

        $data['tipo_de_prod'] = $tipo_de_prod;
        $data['descripcion'] = $descripcion;
        $data['factura'] = $factura;
        $data['imn'] = $imn;
        $data['descripcion'] = $descripcion;
        $data['factura'] = $factura;
        $data['imn'] = $imn;
        $data['ocv'] = $ocv;
        $data['qty'] = $qty;
        $data['pu_usd'] = $pu_usd;
        $data['total_usd'] = $total_usd;
        $data['tipo_de_embarque'] = $tipo_de_embarque;
        $data['tc_pedimento'] = $tc_pedimento;
        $data['importacion_por_partida_pz_mxn'] = $importacion_por_partida_pz_mxn;
        $data['importacion_por_partida_pz_usd'] = $importacion_por_partida_pz_usd;
        $data['impx_unidad'] = $impx_unidad;
        $data['costo_total_compra_usd_lab_qro'] = $costo_total_compra_usd_lab_qro;
        $data['costo_unitario_compra_usd_lab_qro'] = $costo_unitario_compra_usd_lab_qro;
        $data['com'] = $com;
        $data['cm'] = $cm;
        $data['cm_c'] = $cm_c;
        $data['ent'] = $ent;
        $data['pedimento'] = $pedimento;
        $data['fecha_pedimento'] = $fecha_pedimento;
        $data['valor_aduana'] = $valor_aduana;
        $data['arancel_igi'] = $arancel_igi;
        $data['arancel'] = $arancel;
        $data['dta'] = $dta;
        $data['iva_del_pedimento '] = $iva_del_pedimento;
        $data['costo_del_flete_mxn'] = $costo_del_flete_mxn;
        $data['honorarios_courier'] = $honorarios_courier;
        $data['costo_del_flete_usd'] = $costo_del_flete_usd;
        $data['pv_extra_bajo_ref_x_pz'] = $pv_extra_bajo_ref_x_pz;
        $data['utilidad_refx_pz'] = $utilidad_refx_pz;
        $data['utilidad'] = $utilidad;
        $data['observaciones'] = $observaciones;
        $data['fecha_pi'] = $fecha_pi;
        $data['codigo_arancelario'] = $codigo_arancelario;
   
        //factura proveedor pdf
          $this->upload->do_upload('factura_proveedor');
          $factura_proveedor = $this->upload->data();

          if (!empty($_FILES['factura_proveedor']['name'])) {
          $data['factura_proveedor'] = $factura_proveedor['file_name'];
          }

         
          
           //pedimento pdf
          $this->upload->do_upload('pedimentopdf');
          $pedimentopdf = $this->upload->data();

          if (!empty($_FILES['pedimentopdf']['name'])) {
          $data['pedimentopdf'] = $pedimentopdf['file_name'];
          }
          
          
             //honorarios de importacion
           $this->upload->do_upload('honorarios_importacion');
          $honorarios_importacion = $this->upload->data();

          if (!empty($_FILES['honorarios_importacion']['name'])) {
          $data['honorarios_importacion'] = $honorarios_importacion['file_name'];
          }
          

        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));
        $this->FucomprasModelo->update($data, $kondisi);
        redirect('Fucompras');
    }

}

// end class
