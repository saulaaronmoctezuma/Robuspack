<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        $this->not_logged_in();

        $this->data['page_title'] = 'Inventory';

        $this->load->model('model_inventory');
        $this->load->model('model_products');
        $this->load->model('model_company');

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        //poner para el poner selet en un formulario
        //para que tenga el mismo header y trearse el usuario para dar permisos
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

    /*
     * It only redirects to the manage order page
     */

    public function index() {
        /* 	if(!in_array('viewOrder', $this->permission)) {
          redirect('dashboard', 'refresh');
          } */
        $this->load->model('Model_products');
        $data['title'] = 'Refacciones';
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
            //$this->load->view('navbar', $data);
            $this->data['page_title'] = 'Administrar Entradas';
            $this->render_template('inventory/index', $this->data);
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->data['page_title'] = 'Administrar Entradas';
            $this->render_template('inventory/index', $this->data);
        } else if ($dataLevel == "is_almacen") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->data['page_title'] = 'Administrar Entradas';
            $this->render_template('inventory/index', $this->data);
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->data['page_title'] = 'Administrar Entradas';
            $this->render_template('inventory/index', $this->data);
        } else if ($dataLevel == "is_servicio_a_clientes") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->data['page_title'] = 'Manage Inventory';
            $this->render_template('inventory/index', $this->data);
        } else {
            redirect(site_url() . 'main/login/');
        }
    }

    /*
     * Fetches the orders data from the orders table 
     * this function is called from the datatable ajax function
     */

    public function fetchInventoryData() {
        $result = array('data' => array());

        $data = $this->model_inventory->getInventoryData();

        foreach ($data as $key => $value) {

          //  $count_total_item = $this->model_inventory->countOrderItem($value['id']);
          //  $date = date('d-m-Y', $value['date_time']);
          //  $time = date('h:i a', $value['date_time']);

           // $date_time = $date . ' ' . $time;

            // button
            /* if(in_array('viewOrder', $this->permission)) { */
            /* $buttons .= '<a target="__blank" href="'.base_url('orders/printDiv/'.$value['id']).'" class="btn btn-default"><i class="fa fa-print"></i></a>';
              /*} */







            $data = $this->session->userdata;
            if (empty($data)) {
                redirect(site_url() . 'main/login/');
            }
            //check user level
            if (empty($data['role'])) {
                redirect(site_url() . 'main/login/');
            } $dataLevel = $this->userlevel->checkLevel($data['role']);
            if ($dataLevel == "is_admin") {
                $buttons = '';
                $buttons .= ' <a href="' . base_url('inventory/update/' . $value['id_entrada']) . '" class="btn btn-default"><i class="fa fa-list"></i></a>';
                $buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc(' . $value['id_entrada'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
                $buttons .= '<a target="__blank" href="'.base_url('inventory/printDiv/'.$value['id_entrada']).'" class="btn btn-default"><i class="fa fa-print"></i></a>';
                     $buttons .= '<a target="__blank" href="'.base_url('Reporte/entradaAlmacen/'.$value['id_entrada']).'" class="btn btn-default"><i class="fa fa-print"></i></a>';
           
                
            } else if ($dataLevel == "is_editor") {
                $buttons = '';
                $buttons .= ' <a href="' . base_url('inventory/update/' . $value['id_entrada']) . '" class="btn btn-default"><i class="fa fa-list"></i></a>';
                // $buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc(' . $value['id'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
            
                 $buttons .= '<a target="__blank" href="'.base_url('inventory/printDiv/'.$value['id_entrada']).'" class="btn btn-default"><i class="fa fa-print"></i></a>';
                  
            }  elseif ($dataLevel == "is_servicio_a_clientes") {
                $buttons = '';
                $buttons .= ' <a href="' . base_url('inventory/update/' . $value['id_entrada']) . '" class="btn btn-default"><i class="fa fa-list"></i></a>';
                 $buttons .= '<a target="__blank" href="'.base_url('inventory/printDiv/'.$value['id_entrada']).'" class="btn btn-default"><i class="fa fa-print"></i></a>';
                  
                } elseif ($dataLevel == "is_almacen") {
                $buttons = '';
                $buttons .= ' <a href="' . base_url('inventory/update/' . $value['id_entrada']) . '" class="btn btn-default"><i class="fa fa-list"></i></a>';
                   $buttons .= '<a target="__blank" href="'.base_url('inventory/printDiv/'.$value['id_entrada']).'" class="btn btn-default"><i class="fa fa-print"></i></a>';
                  $buttons .= '<a target="__blank" href="'.base_url('inventory/printDiv/'.$value['id_entrada']).'" class="btn btn-default"><i class="fa fa-print"></i></a>';
                  
            } elseif ($dataLevel == "is_Gerente_Ventas") {
                $buttons = '';
                $buttons .= ' <a href="' . base_url('inventory/update/' . $value['id_entrada']) . '" class="btn btn-default"><i class="fa fa-list"></i></a>';
            }



            /*if ($value['paid_status'] == 1) {
                $paid_status = '<span class="label label-success">Paid</span>';
            } else {
                $paid_status = '<span class="label label-warning">Not Paid</span>';
            }*/

            $result['data'][$key] = array(
               
                $value['tipo_de_documento'],
                 $value['numero_documento'],
                $value['consecutivo'],
               $value['fecha_insercion'],
                //$value['customer_phone'],
                ///$date_time,
                //$count_total_item,
                //$value['net_amount'],
                //$paid_status,
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }

    /*
     * If the validation is not valid, then it redirects to the create page.
     * If the validation for each input field is valid then it inserts the data into the database 
     * and it stores the operation message into the session flashdata and display on the manage group page
     */

    public function create() {
        /* if(!in_array('createOrder', $this->permission)) {
          redirect('dashboard', 'refresh');
          } */

        $this->data['page_title'] = 'Agregar Orden';

        $this->form_validation->set_rules('product[]', 'Product name', 'trim|required');


        if ($this->form_validation->run() == TRUE) {

            $order_id = $this->model_inventory->create();

            if ($order_id) {
                $this->session->set_flashdata('success', 'Creado Correctamente');
                //redirect('orders/update/'.$order_id, 'ref resh');
                redirect('inventory/', 'refresh');
            } else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('inventory/create/', 'refresh');
            }
        } else {




            $this->load->model('Model_products');
            $data['title'] = 'Refacciones';
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
                $data['category'] = $this->model_inventory->get_category()->result();

                // false case
                $company = $this->model_company->getCompanyData(1);
                $this->data['company_data'] = $company;
                $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
                $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

                $this->data['products'] = $this->model_products->getActiveProductData();

                $data['clienteCombo'] = $this->model_inventory->getCliente();
                $users = $this->model_inventory->getProducts();

                $data['users'] = $users;
                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('inventory/create', $this->data);
            } else  if ($dataLevel == "is_almacen") {
                $data['category'] = $this->model_inventory->get_category()->result();

                // false case
                $company = $this->model_company->getCompanyData(1);
                $this->data['company_data'] = $company;
                $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
                $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

                $this->data['products'] = $this->model_products->getActiveProductData();

                $data['clienteCombo'] = $this->model_inventory->getCliente();
                $users = $this->model_inventory->getProducts();

                $data['users'] = $users;
                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('inventory/create', $this->data);
            }else  if ($dataLevel == "is_servicio_a_aclientes") {
                $data['category'] = $this->model_inventory->get_category()->result();

                // false case
                $company = $this->model_company->getCompanyData(1);
                $this->data['company_data'] = $company;
                $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
                $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

                $this->data['products'] = $this->model_products->getActiveProductData();

                $data['clienteCombo'] = $this->model_inventory->getCliente();
                $users = $this->model_inventory->getProducts();

                $data['users'] = $users;
                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('inventory/create', $this->data);
            } else if ($dataLevel == "is_editor") {
                $data['category'] = $this->model_inventory->get_category()->result();

                // false case
                $company = $this->model_company->getCompanyData(1);
                $this->data['company_data'] = $company;
                $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
                $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

                $this->data['products'] = $this->model_products->getActiveProductData();

                $data['clienteCombo'] = $this->model_inventory->getCliente();
                $users = $this->model_inventory->getProducts();

                $data['users'] = $users;
                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('inventory/create', $this->data);
            } else {
                redirect(site_url() . 'inventory/');
            }
        }
    }

    /*
     * It gets the product id passed from the ajax method.
     * It checks retrieves the particular product data from the product id 
     * and return the data into the json format.
     */

    public function getProductValueById() {
        $product_id = $this->input->post('product_id');
        if ($product_id) {
            $product_data = $this->model_products->getProductData($product_id);
            echo json_encode($product_data);
        }
    }

    /*
     * It gets the all the active product inforamtion from the product table 
     * This function is used in the order page, for the product selection in the table
     * The response is return on the json format.
     */

    public function getTableProductRow() {
        $sku = $this->input->post("sku"); 
        if($sku){
            $products = $this->model_products->getActiveProductData($sku);

        }else{
            $products = $this->model_products->getActiveProductData();
        }
       
        echo json_encode($products);
    }

    /*
     * If the validation is not valid, then it redirects to the edit orders page 
     * If the validation is successfully then it updates the data into the database 
     * and it stores the operation message into the session flashdata and display on the manage group page
     */

    public function update($id) {
        /* if(!in_array('updateOrder', $this->permission)) {
          redirect('dashboard', 'refresh');
          }
         */
        if (!$id) {
            redirect('dashboard', 'refresh');
        }

        $this->data['page_title'] = 'Update Order';

        $this->form_validation->set_rules('product[]', 'Product name', 'trim|required');


        if ($this->form_validation->run() == TRUE) {

            $update = $this->model_inventory->update($id);

            if ($update == true) {
                $this->session->set_flashdata('success', 'Agregado Correctamente');
                //redirect('orders/update/'.$id, 'refresh');
                redirect('inventory/', 'refresh');
            } else {
                $this->session->set_flashdata('errors', 'Error al agregar!');
                redirect('inventory/update/' . $id, 'refresh');
            }
        } else {



            $this->load->model('Model_products');
            $data['title'] = 'Refacciones';
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


                //este es para que se lleve el valor del select que esta seleciconado
                $data['clienteCombo'] = $this->model_inventory->getCliente();

                // false case
                $company = $this->model_company->getCompanyData(1);
                $this->data['company_data'] = $company;
                $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
                $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

                $result = array();
                $inventory_data = $this->model_inventory->getInventoryData($id);

                $result['order'] = $inventory_data;
                $inventory_item = $this->model_inventory->getInventoryItemData($inventory_data['id_entrada']);

                foreach ($inventory_item as $k => $v) {
                    $result['order_item'][] = $v;
                }

                $this->data['order_data'] = $result;

                $this->data['products'] = $this->model_products->getActiveProductData();

                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);

                $this->render_template('inventory/edit', $this->data);
            } else if ($dataLevel == "is_almacen") {


                //este es para que se lleve el valor del select que esta seleciconado
                $data['clienteCombo'] = $this->model_inventory->getCliente();

                // false case
                $company = $this->model_company->getCompanyData(1);
                $this->data['company_data'] = $company;
                $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
                $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

                $result = array();
                $inventory_data = $this->model_inventory->getInventoryData($id);

                $result['order'] = $inventory_data;
                $inventory_item = $this->model_inventory->getInventoryItemData($inventory_data['id_entrada']);

                foreach ($inventory_item as $k => $v) {
                    $result['order_item'][] = $v;
                }

                $this->data['order_data'] = $result;

                $this->data['products'] = $this->model_products->getActiveProductData();

                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);

                $this->render_template('inventory/edit', $this->data);
            }  else if ($dataLevel == "is_editor") {


                //este es para que se lleve el valor del select que esta seleciconado
                $data['clienteCombo'] = $this->model_inventory->getCliente();

                // false case
                $company = $this->model_company->getCompanyData(1);
                $this->data['company_data'] = $company;
                $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
                $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

                $result = array();
                $inventory_data = $this->model_inventory->getInventoryData($id);

                $result['order'] = $inventory_data;
                $inventory_item = $this->model_inventory->getInventoryItemData($inventory_data['id_entrada']);

                foreach ($inventory_item as $k => $v) {
                    $result['order_item'][] = $v;
                }

                $this->data['order_data'] = $result;

                $this->data['products'] = $this->model_products->getActiveProductData();

                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);

                $this->render_template('inventory/edit', $this->data);
            }  else if ($dataLevel == "is_servicio_a_clientes") {


                //este es para que se lleve el valor del select que esta seleciconado
                $data['clienteCombo'] = $this->model_inventory->getCliente();

                // false case
                $company = $this->model_company->getCompanyData(1);
                $this->data['company_data'] = $company;
                $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
                $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

                $result = array();
                $inventory_data = $this->model_inventory->getInventoryData($id);

                $result['order'] = $inventory_data;
                $inventory_item = $this->model_inventory->getInventoryItemData($inventory_data['id_entrada']);

                foreach ($inventory_item as $k => $v) {
                    $result['order_item'][] = $v;
                }

                $this->data['order_data'] = $result;

                $this->data['products'] = $this->model_products->getActiveProductData();

                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);

                $this->render_template('inventory/edit', $this->data);
            }  
               
              
            else {
                redirect(site_url() . 'products/');
            }
        }
    }

    /*
     * It removes the data from the database
     * and it returns the response into the json format
     */

    public function remove() {
        /* if(!in_array('deleteOrder', $this->permission)) {
          redirect('dashboard', 'refresh');
          } */

        $order_id = $this->input->post('order_id');

        $response = array();
        if ($order_id) {
            $delete = $this->model_inventory->remove($order_id);
            if ($delete == true) {
                $response['success'] = true;
                $response['messages'] = "Eliminado correctamente";
            } else {
                $response['success'] = false;
                $response['messages'] = "Error in the database while removing the product information";
            }
        } else {
            $response['success'] = false;
            $response['messages'] = "Refersh the page again!!";
        }

        echo json_encode($response);
    }

    /*
     * It gets the product id and fetch the order data. 
     * The order print logic is done here 
     */

    public function printDiv($id) {
        /* if(!in_array('viewOrder', $this->permission)) {
          redirect('dashboard', 'refresh');
          } */

        if ($id) {
            $order_data = $this->model_inventory->getInventoryData($id);
            $inventory_items = $this->model_inventory->getInventoryItemData($id);
            $company_info = $this->model_company->getCompanyData(1);

            $order_date = date('d/m/Y', $order_data['date_time']);
            //$paid_status = ($order_data['paid_status'] == 1) ? "Paid" : "Unpaid";

            $html = '<!-- Main content -->
			<!DOCTYPE html>
			<html>
			<head>
			  <meta charset="utf-8">
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			  <title>Robuspack</title>
			  <!-- Tell the browser to be responsive to screen width -->
			  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
			  <!-- Bootstrap 3.3.7 -->
			  <link rel="stylesheet" href="' . base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') . '">
			  <!-- Font Awesome -->
			  <link rel="stylesheet" href="' . base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') . '">
			 
                           <!--<link rel="stylesheet" href="' . base_url('assets/dist/css/AdminLTE.min.css') . '">
                              -->

			</head>
                        
			<body onload="window.print();">
			<img scr="https://image.freepik.com/vector-gratis/almacen-inventario-trabajadores-entrega-ilustracion-vector-estilo-plano-moderno-aislado-sobre-fondo-blanco_61384-29.jpg">

			<div class="wrapper">
			  <section class="invoice">
			    <!-- title row -->
			
			    <!-- info row -->
			    <div class="row invoice-info">
			    <center>  <h1>Entradas</h1></center>
                            <img src="">
			      <div class="col-sm-4 invoice-col">
			        <table border="1">
			        <b>No Documento:</b> ' . $order_data['numero_documento'] . '<br>
			        <b>Tipo de entrada</b> ' . $order_data['tipo_de_documento'] . '<br>
                               <b>Consecutivo</b> ' . $order_data['consecutivo'] . '<br>
                               <b>Pedimento</b> ' . $order_data['pedimento'] . '<br>
                              </table>

			      </div>
			      <!-- /.col -->
			    </div>
			    <!-- /.row -->

			    <!-- Table row -->
			    <div class="row">
			      <div class="col-xs-12 table-responsive">
			        <table class="table table-striped">
			          <thead>
			          <tr>
			            <th>Sku</th>
			            <th>Descripcion</th>
			            <th>Piezas</th>
			          
			          </tr>
			          </thead>
			          <tbody>';

            foreach ($inventory_items as $k => $v) {

                $product_data = $this->model_products->getProductData($v['id_product']);

                $html .= '<tr>                <td>' . $product_data['sku'] . '</td>
                                              <td>' . $product_data['description'] . '</td>
				             
				            <td>' . $v['pieza_nuevas'] . '</td>
                                               
				       
				           
			          	</tr>';
            }

            $html .= '</tbody>
			        </table>
			   
			      
			      </body>
	</html>'
			    ;

           


           

            echo $html;
        }
    }

    public function productsDetails() {
        // POST data
        $postData = $this->input->post();

        // get data
        $data = $this->model_inventory->getProductsDetails($postData);

        echo json_encode($data);
    }

    public function userDetails() {
        // POST data
        $postData = $this->input->post();

        // get data
        $data = $this->model_inventory->getUserDetails($postData);

        echo json_encode($data);
    }

// get sub category by category_id
    function get_sub_category() {
        $category_id = $this->input->post('id_input', TRUE);
        $data = $this->model_inventory->get_sub_category($category_id)->result();
        echo json_encode($data);
    }

    /*
      function ajaxResta(){
      $totalresta  = 100;
      $compra = 10;

      $valor = $totalresta - $compra;
      $html = '<h1>hola mundo</h1>';
      $html.= '<input type="text">';
      $html.= '<input type="text" value="'.$valor.'">';

      echo $html;
      }
     */
}
