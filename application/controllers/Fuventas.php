<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 02/09/2019 Hora 11:14 am
 *  Fecha : Ultimo Cambio 12/09/2019 Hora 9:00 am
 */
class Fuventas extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model("Fuventas/FuventasModelo");
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
        $this->load->model('Fuventas/FuventasModelo');
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
            $data['fuventas'] = $this->FuventasModelo->query();
            //$data['totalRegistros'] = $this->FuventasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FuventasModelo->getCliente();
            $this->load->view('Fuventas/listarFuventas', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $data['fuventas'] = $this->FuventasModelo->query();
            //$data['totalRegistros'] = $this->FuventasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FuventasModelo->getCliente();
            $this->load->view('Fuventas/listarFuventas', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_servicio_a_clientes") {
            $data['fuventas'] = $this->FuventasModelo->query();
            //$data['totalRegistros'] = $this->FuventasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FuventasModelo->getCliente();
            $this->load->view('Fuventas/listarFuventas', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {
            $data['fuventas'] = $this->FuventasModelo->query();
            //$data['totalRegistros'] = $this->FuventasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FuventasModelo->getCliente();
            $this->load->view('Fuventas/listarFuventas', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_refacciones") {
            $data['fuventas'] = $this->FuventasModelo->query();
            //$data['totalRegistros'] = $this->FuventasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FuventasModelo->getCliente();
            $this->load->view('Fuventas/listarFuventas', $data);
            $this->load->view('footer');
        }  else if ($dataLevel == "is_logistica") {
            $data['fuventas'] = $this->FuventasModelo->query();
            //$data['totalRegistros'] = $this->FuventasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FuventasModelo->getCliente();
            $this->load->view('Fuventas/listarFuventas', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_Gerente_Ventas") {
            $data['fuventas'] = $this->FuventasModelo->query();
            //$data['totalRegistros'] = $this->FuventasModelo->totalRegistro(1);
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $data['clienteCombo'] = $this->FuventasModelo->getCliente();
            $this->load->view('Fuventas/listarFuventas', $data);
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

        $this->load->model('Fuventas/FuventasModelo');
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
            //$data['clienteCombo'] = $this->VerificacionModelo->getCliente();
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Fuventas/agregarFuventas');
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Fuventas/agregarFuventas');
            $this->load->view('footer');
        } else if ($dataLevel == "is_servicio_a_clientes") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Fuventas/agregarFuventas');
            $this->load->view('footer');
        } else if ($dataLevel == "is_credito ") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Fuventas/agregarFuventas');
            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica1") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Fuventas/agregarFuventas');
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

    

    public function insertdata() {

        /* Para traerse el id del usuario */
        $data = $this->session->userdata;
        /* Para traerse el id del usuario */
        $cantidad_registros = $this->input->post('cantidad_registros');
        
        $ref = $this->input->post('ref');
        $cliente = $this->input->post('cliente');
        $direccion = $this->input->post('direccion');
        $codigo = $this->input->post('codigo');
        $tipo_de_prod = $this->input->post('tipo_de_prod');
        $rfc = $this->input->post('rfc');
        $factura = $this->input->post('factura');
        $facturapdf = $this->input->post('facturapdf');
        $remision = $this->input->post('remision');
        $fecha_de_remision = $this->input->post('fecha_de_remision');
        $orden_compra = $this->input->post('orden_compra');
        $cantidad = $this->input->post('cantidad');
        $pu_usd = $this->input->post('pu_usd');
        $descuento = $this->input->post('descuento');
        $subtotal = $this->input->post('subtotal');
        $iva = $this->input->post('iva');
        $total_usd = $this->input->post('total_usd');
        $fecha = $this->input->post('fecha');
        $pedimento = $this->input->post('pedimento');
        $fecha_pedimento = $this->input->post('fecha_pedimento');
        $dias_de_credito = $this->input->post('dias_de_credito');
        $fecha_vencimiento = $this->input->post('fecha_vencimiento');
        $fecha_de_pago = $this->input->post('fecha_de_pago');
        $status_de_pago = $this->input->post('status_de_pago');
        $refacturacion = $this->input->post('refacturacion');
        $nueva = $this->input->post('nueva');
        $observaciones = $this->input->post('observaciones');
        $vendedor = $this->input->post('vendedor');
        



        // get foto
        $config['upload_path'] = './assets/fuventas';
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
           'cantidad_registros' => $cantidad_registros,
            'ref' => $ref,
            'cliente' => $cliente,
            'direccion' => $direccion,
            'codigo' => $codigo,
            'tipo_de_prod' => $tipo_de_prod,
            'rfc' => $rfc,
            'factura' => $factura,
            'remision' => $remision,
            'fecha_de_remision' => $fecha_de_remision,
            'orden_compra' => $orden_compra,
            'cantidad' => $cantidad,
            'pu_usd' => $pu_usd,
            'descuento' => $descuento,
            'subtotal' => $subtotal,
            'iva' => $iva,
            'total_usd' => $total_usd,
            'fecha' => $fecha,
            'pedimento' => $pedimento,
            'fecha_pedimento' => $fecha_pedimento,
            'dias_de_credito' => $dias_de_credito,
            'fecha_vencimiento' => $fecha_vencimiento,
            'fecha_de_pago' => $fecha_de_pago,
            'status_de_pago' => $status_de_pago,
            'refacturacion' => $refacturacion,
            'nueva' => $nueva,
            'observaciones' => $observaciones,
            'vendedor' => $vendedor,
            
            'id' => $dataLevel = $this->userlevel->id($data['id'])
        );

        
        //facturapdf
        $this->upload->do_upload('facturapdf');
        $facturapdf = $this->upload->data();
        
        if (!empty($_FILES['facturapdf']['name'])) {
            $data['facturapdf'] = $facturapdf['file_name'];
        }
        $this->FuventasModelo->insert($data);
        redirect('Fuventas');
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

        $where = array('id_fuventas' => $id);
        $this->FuventasModelo->delete($where);
        return redirect('Fuventas');
    }

    // edit
    public function actualizar($id) {
        $this->load->model('Fuventa/FuventasModelo');








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
            $kondisi = array('id_fuventas' => $id);
            $data['data'] = $this->FuventasModelo->get_by_id($kondisi);
            return $this->load->view('Fuventas/editarFuventa', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $kondisi = array('id_fuventas' => $id);
            $data['data'] = $this->FuventasModelo->get_by_id($kondisi);
            return $this->load->view('Fuventas/editarFuventa', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_servicio_a_clientes") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $kondisi = array('id_fuventas' => $id);
            $data['data'] = $this->FuventasModelo->get_by_id($kondisi);
            return $this->load->view('Fuventas/editarFuventa', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_credito") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $kondisi = array('id_fuventas' => $id);
            $data['data'] = $this->FuventasModelo->get_by_id($kondisi);
            return $this->load->view('Fuventas/editarFuventa', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_logistica1") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //se trae el id del  modelo ClientesRefaccionesModelo
            $kondisi = array('id_fuventas' => $id);
            $data['data'] = $this->FuventasModelo->get_by_id($kondisi);
            return $this->load->view('Fuventas/editarFuventa', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

   


    public function updatedata() {
$cantidad_registros = $this->input->post('cantidad_registros');
        $ref = $this->input->post('ref');
        $cliente = $this->input->post('cliente');
        $direccion = $this->input->post('direccion');
        $codigo = $this->input->post('codigo');
        $tipo_de_prod = $this->input->post('tipo_de_prod');
        $rfc = $this->input->post('rfc');
        $factura = $this->input->post('factura');
        $facturapdf = $this->input->post('facturapdf');
        $remision = $this->input->post('remision');
        $fecha_de_remision = $this->input->post('fecha_de_remision');
        $orden_compra = $this->input->post('orden_compra');
        $cantidad = $this->input->post('cantidad');
        $pu_usd = $this->input->post('pu_usd');
         $descuento = $this->input->post('descuento');
        $subtotal = $this->input->post('subtotal');
        $iva = $this->input->post('iva');
        $total_usd = $this->input->post('total_usd');
        $fecha = $this->input->post('fecha');
        $pedimento = $this->input->post('pedimento');
        $fecha_pedimento = $this->input->post('fecha_pedimento');
        $dias_de_credito = $this->input->post('dias_de_credito');
        $fecha_vencimiento = $this->input->post('fecha_vencimiento');
        $fecha_de_pago = $this->input->post('fecha_de_pago');
        $status_de_pago = $this->input->post('status_de_pago');
        $refacturacion = $this->input->post('refacturacion');
        $nueva = $this->input->post('nueva');
        $observaciones = $this->input->post('observaciones');
        $vendedor = $this->input->post('vendedor');
      
        $path = './assets/verificacion/';
        $id = $this->input->post('id');
        $kondisi = array('id_fuventas' => $id);
        // get fotoz


        $config['upload_path'] = './assets/fuventas';
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








$data['cantidad_registros'] = $cantidad_registros;
        $data['ref'] = $ref;
        $data['cliente'] = $cliente;
        $data['direccion'] = $direccion;
        $data['codigo'] = $codigo;
        $data['tipo_de_prod'] = $tipo_de_prod;
        $data['rfc'] = $rfc;
        $data['factura'] = $factura;
        //facturapdf
        $this->upload->do_upload('facturapdf');
        $facturapdf = $this->upload->data();
        
        if (!empty($_FILES['facturapdf']['name'])) {
            $data['facturapdf'] = $facturapdf['file_name'];
        }
        
        $data['remision'] = $remision;
        $data['fecha_de_remision'] = $fecha_de_remision;
        $data['orden_compra'] = $orden_compra;
        $data['cantidad'] = $cantidad;
        $data['pu_usd'] = $pu_usd;
        $data['descuento'] = $descuento;
        $data['subtotal'] = $subtotal;
        $data['iva'] = $iva;
        $data['total_usd'] = $total_usd;
        $data['fecha'] = $fecha;
        $data['pedimento'] = $pedimento;
        $data['fecha_pedimento'] = $fecha_pedimento;
        $data['dias_de_credito'] = $dias_de_credito;
        $data['fecha_vencimiento'] = $fecha_vencimiento;
        $data['fecha_de_pago'] = $fecha_de_pago;
        $data['status_de_pago'] = $status_de_pago;
        $data['refacturacion'] = $refacturacion;
        $data['nueva'] = $nueva;
        $data['observaciones'] = $observaciones;
        $data['vendedor'] = $vendedor;
       

      


        // hapus foto pada direktori
        @unlink($path . $this->input->post('filelama'));
        $this->FuventasModelo->update($data, $kondisi);
        redirect('Fuventas');
    }

}

// end class
