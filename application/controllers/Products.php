<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        $this->not_logged_in();

        $this->data['page_title'] = 'Refacciones';
<<<<<<< HEAD

=======
        $this->load->model('model_orders');
        $this->load->model('model_products');
        $this->load->model('model_company');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $this->load->model('model_products');
        $this->load->model('model_brands');
        $this->load->model('model_category');
        $this->load->model('model_stores');
        $this->load->model('model_attributes');

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
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
     * It only redirects to the manage product page
     */

    public function getAllSettings() {
        $this->db->select('*');
        $this->db->from('settings');
        return $this->db->get()->row();
    }

    public function getUsers() {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->row();
    }

    public function ejemplo() {
        $users = $this->model_products->getUsernames();

        $data['users'] = $users;

        $this->load->view('user_view', $data);
    }

    public function userDetails() {
        // POST data
        $postData = $this->input->post();

        // get data
        $data = $this->model_products->getUserDetails($postData);

        echo json_encode($data);
    }

<<<<<<< HEAD
    public function agregar() {
=======
    /* public function agregar() {




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
      //se trae los datos de la consulta del modelo
      $this->load->view('header', $data);
      // $this->load->view('navbar', $data);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/header_menu', $data);

      $this->load->view('templates/side_menubar', $data);
      $users = $this->model_products->getProducts();

      $data['users'] = $users;

      $this->load->view('products/entrada', $data);
      $this->load->view('footer');
      } else if ($dataLevel == "is_editor") {
      //se trae los datos de la consulta del modelo
      $this->load->view('header', $data);
      // $this->load->view('navbar', $data);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/header_menu', $data);

      $this->load->view('templates/side_menubar', $data);
      $users = $this->model_products->getProducts();

      $data['users'] = $users;

      $this->load->view('products/entrada', $data);
      $this->load->view('footer');
      } else if ($dataLevel == "is_almacen") {
      //se trae los datos de la consulta del modelo
      $this->load->view('header', $data);
      // $this->load->view('navbar', $data);
      $this->load->view('templates/header', $data);
      $this->load->view('templates/header_menu', $data);

      $this->load->view('templates/side_menubar', $data);
      $users = $this->model_products->getProducts();

      $data['users'] = $users;

      $this->load->view('products/entrada', $data);
      $this->load->view('footer');
      } else {
      redirect(site_url() . 'orders/');
      }
      }
     */

    public function agregar() {
        /* if(!in_array('createOrder', $this->permission)) {
          redirect('dashboard', 'refresh');
          } */

        $this->data['page_title'] = 'Agregar Orden';

        $this->form_validation->set_rules('sku[]', 'sku', 'trim|required');


        if ($this->form_validation->run() == TRUE) {
            
            //$this->load->model('model_orders');
            
            $id_entrada = $this->model_products->entradaInventario();

            if ($id_entrada) {
                $this->session->set_flashdata('success', 'Creado Correctamente');
                //redirect('orders/update/'.$order_id, 'ref resh');
                redirect('products/', 'refresh');
            } else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('products/agregar/', 'refresh');
            }
        } else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606




<<<<<<< HEAD
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
            //se trae los datos de la consulta del modelo
            $this->load->view('header', $data);
            // $this->load->view('navbar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/header_menu', $data);

            $this->load->view('templates/side_menubar', $data);
            $users = $this->model_products->getProducts();

            $data['users'] = $users;

            $this->load->view('products/entrada', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            //se trae los datos de la consulta del modelo
            $this->load->view('header', $data);
            // $this->load->view('navbar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/header_menu', $data);

            $this->load->view('templates/side_menubar', $data);
            $users = $this->model_products->getProducts();

            $data['users'] = $users;

            $this->load->view('products/entrada', $data);
            $this->load->view('footer');
        }else if ($dataLevel == "is_almacen") {
            //se trae los datos de la consulta del modelo
            $this->load->view('header', $data);
            // $this->load->view('navbar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/header_menu', $data);

            $this->load->view('templates/side_menubar', $data);
            $users = $this->model_products->getProducts();

            $data['users'] = $users;

            $this->load->view('products/entrada', $data);
            $this->load->view('footer');
=======
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
                $data['category'] = $this->model_orders->get_category()->result();

                // false case
                $company = $this->model_company->getCompanyData(1);

                $this->data['products'] = $this->model_products->getActiveProductData();

                $data['clienteCombo'] = $this->model_orders->getCliente();
                $users = $this->model_orders->getProducts();

                $data['users'] = $users;
                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('products/entrada', $this->data);
            } else if ($dataLevel == "is_editor") {
                $data['category'] = $this->model_orders->get_category()->result();


                $this->data['products'] = $this->model_products->getActiveProductData();

                $data['clienteCombo'] = $this->model_orders->getCliente();
                $users = $this->model_orders->getProducts();

                $data['users'] = $users;
                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('orders/create', $this->data);
            } else if ($dataLevel == "is_almacen") {
                $data['category'] = $this->model_orders->get_category()->result();

                // false case
                $company = $this->model_company->getCompanyData(1);
                $this->data['company_data'] = $company;
                $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
                $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

                $this->data['products'] = $this->model_products->getActiveProductData();

                $data['clienteCombo'] = $this->model_orders->getCliente();
                $users = $this->model_orders->getProducts();

                $data['users'] = $users;
                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('orders/create', $this->data);
            } else if ($dataLevel == "is_servicio_a_clientes") {
                $data['category'] = $this->model_orders->get_category()->result();

                // false case
                $company = $this->model_company->getCompanyData(1);
                $this->data['company_data'] = $company;
                $this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
                $this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

                $this->data['products'] = $this->model_products->getActiveProductData();

                $data['clienteCombo'] = $this->model_orders->getCliente();
                $users = $this->model_orders->getProducts();

                $data['users'] = $users;
                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('orders/create', $this->data);
            } else {
                redirect(site_url() . 'products/');
            }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        }
    }

    public function productsDetails() {
        // POST data
        $postData = $this->input->post();

        // get data
        $data = $this->model_products->getProductsDetails($postData);

        echo json_encode($data);
    }

    /* public function obtener($id_cliente) {
      $this->load->model('Model_products');



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
      //se trae los datos de la consulta del modelo
      $this->load->view('header', $data);
      $this->load->view('navbar', $data);

      $data = array();
      $data = $this->Model_products->obtener($id_cliente);
      $this->load->view('products/actualizarInventario', $data);
      $this->load->view('footer');
      } else if ($dataLevel == "is_credito") {

      $this->load->view('header', $data);
      $this->load->view('navbar', $data);
      //agregar para el select de refacción de tabla maquinaria
      //se trae el arreglo de los datos seleccionados por el di

      $data = array();
      $data = $this->ClienteModelo->obtener($id_cliente);
      $this->load->view('Cliente/modificarCliente', $data);

      $this->load->view('footer');
      } else if ($dataLevel == "is_editor") {

      $this->load->view('header', $data);
      $this->load->view('navbar', $data);
      //agregar para el select de refacción de tabla maquinaria
      //se trae el arreglo de los datos seleccionados por el di

      $data = array();
      $data = $this->Model_products->obtener($id_cliente);
      $this->load->view('Cliente/modificarCliente', $data);

      $this->load->view('footer');
      } else if ($dataLevel == "is_servicio_a_clientes") {

      $this->load->view('header', $data);
      $this->load->view('navbar', $data);
      //agregar para el select de refacción de tabla maquinaria
      //se trae el arreglo de los datos seleccionados por el di

      $data = array();
      $data = $this->ClienteModel_productsModelo->obtener($id_cliente);
      $this->load->view('Cliente/modificarCliente', $data);

      $this->load->view('footer');
      } else {
      redirect(site_url() . 'main/');
      }
      } */

    public function productModificar() {

        $this->load->model('Model_products');
        $this->Model_products->actualizar();
        redirect('Products');
    }

    public function index() {
        /* {
          if(!in_array('viewProduct', $this->permission)) {
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
            $this->render_template('products/index', $this->data);
            /* } */
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('products/index', $this->data);
        } else if ($dataLevel == "is_almacen") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('products/index', $this->data);
        } else if ($dataLevel == "is_servicio_a_clientes") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('products/index', $this->data);
        } else if ($dataLevel == "is_mantenimiento") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('products/index', $this->data);
        } else if ($dataLevel == "is_jefe_mantenimiento") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('products/index', $this->data);
        } else if ($dataLevel == "is_maquinaria") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('products/index', $this->data);
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('products/index', $this->data);
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('products/index', $this->data);
<<<<<<< HEAD
        }else {
=======
        } else {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            redirect(site_url() . 'main/login/');
        }
    }

    /*
     * It Fetches the products data from the product table 
     * this function is called from the datatable ajax function
     */

    public function fetchProductData() {
        $result = array('data' => array());

        $data = $this->model_products->getProductData();

        foreach ($data as $key => $value) {

            $store_data = $this->model_stores->getStoresData($value['store_id']);

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
                $buttons .= '<a href="' . base_url('products/update/' . $value['id']) . '" class="btn btn-default"><i class="fa fa-pencil"></i></a>';

                $buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc(' . $value['id'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
            } else if ($dataLevel == "is_editor") {
                $buttons = '';
                $buttons .= '<a href="' . base_url('products/update/' . $value['id']) . '" class="btn btn-default"><i class="fa fa-pencil"></i></a>';

                $buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc(' . $value['id'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
<<<<<<< HEAD
            } else if ($dataLevel == "is_mantenimiento") {
                $buttons = '';
            } else if ($dataLevel == "is_servicio_a_clientes") {
                
                $buttons = '';
                $buttons .= '<a href="' . base_url('products/update/' . $value['id']) . '" class="btn btn-default"><i class="fa fa-pencil"></i></a>';

                
=======
            } elseif ($dataLevel == "is_mantenimiento") {
                $buttons = '';
            } elseif ($dataLevel == "is_servicio_a_clientes") {
                $buttons = '';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            } elseif ($dataLevel == "is_jefe_mantenimiento") {
                $buttons = '';
            } elseif ($dataLevel == "is_maquinaria") {
                $buttons = '';
            } elseif ($dataLevel == "is_refacciones") {
                $buttons = '';
            } elseif ($dataLevel == "is_almacen") {
                $buttons = '';
            } elseif ($dataLevel == "is_Gerente_Ventas") {
                $buttons = '';
            }
            $img = '<img src="' . base_url($value['image']) . '" alt="' . $value['name'] . '" class="img-circle" width="50" height="50" />';

            $availability = ($value['availability'] == 1) ? '<span class="label label-success">Active</span>' : '<span class="label label-warning">Inactive</span>';

            $qty_status = '';
            if ($value['qty'] <= 10) {
                $qty_status = '<!--<span class="label label-warning">Low !</span>-->';
            } else if ($value['qty'] <= 0) {
                $qty_status = '<!--<span class="label label-danger">Out of stock !</span>-->';
            }
<<<<<<< HEAD
=======
            
            
            $q11 = '';
              if($value['linea'] == "MEC") {
                       
               $q11 =       '<span class="label label-warning">Low !</span>';
                           
           
            } else if ($value['linea'] === "MANU") {
               
          $q11 =       '<span class="label label-warning">Low !</span>';
                           
                           
                             
            }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

            $data = $this->session->userdata;
            if (empty($data)) {
                redirect(site_url() . 'main/login/');
            }
            //check user level
            if (empty($data['role'])) {
                redirect(site_url() . 'main/login/');
            }

            if ($dataLevel == "is_admin") {
                $result['data'][$key] = array(
                    //mostrar imagen $img,
<<<<<<< HEAD
                    $value['sku'],
                    $value['description'],
                     $value['qty'] . ' ' . $qty_status,
=======
                     $value['sku'],
                    $value['description'],
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value['traduccion'],
                    $value['serie_maquina'],
                    $value['tipo_maquina'],
                    $value['modulo'],
<<<<<<< HEAD
                   
                    $value['medidas_caracteristicas'],
                    $value['medida_maquina'],
                    //$store_data['name'],
                    $value['linea'],
                    $value['refacciones_consumibles'],
                    $value['fecha_ultima_venta'],
                   '<center>$'. $value['precio_de_compra']  .'</center>',
                   '<center>$'. $value['valor_almacen']  .'</center>',
                  '<center>$'.  $value['price']  .'</center>',
                   '<center>$'. $value['price2']  .'</center>',
                   '<center>$'. $value['price3'] .'</center>',
                   $value['fecha_actualizacion_precio'],
=======
                    $value['qty'] . ' ' . $qty_status,
                    $value['medidas_caracteristicas'],
                    $value['medida_maquina'],
                    //$store_data['name'],
                    $value['linea']. ' ' . $q11,
                    $value['refacciones_consumibles'],
                    $value['fecha_ultima_venta'],
                   '<center>$'. $value['precio_de_compra'] .'</center>',
                   '<center>$'. $value['valor_almacen'].'</center>',
                   '<center>$'. $value['price'].'</center>',
                   '<center>$'. $value['price2'].'</center>',
                   '<center>$'. $value['price3'].'</center>',
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value['tiempo_surtido'],
                    $value['indice_abc'],
                    $value['min'],
                    $value['max'],
                    $value['cantidad_sugerida_a_solicitar'],
                    $value['condicion'],
                    $value['proveedor_principal'],
                    $value['proveedor_secundario'],
                    $value['location'],
                    //$availability,
                    $buttons
                );
            } else if ($dataLevel == "is_editor") {
                $result['data'][$key] = array(
                    //mostrar imagen $img,
<<<<<<< HEAD
                    $value['sku'],
                    $value['description'],
                    $value['traduccion'],
                    $value['serie_maquina'],
                    $value['tipo_maquina'],
                    $value['modulo'],
                    $value['qty'] . ' ' . $qty_status,
                    $value['medidas_caracteristicas'],
                    $value['medida_maquina'],
                    //$store_data['name'],
                    $value['linea'],
                    $value['refacciones_consumibles'],
                    $value['fecha_ultima_venta'],
                 '<center>$'.    $value['precio_de_compra']  .'</center>',
                 '<center>$'.    $value['valor_almacen']  .'</center>',
                 '<center>$'.    $value['price']  .'</center>',
                 '<center>$'.    $value['price2']  .'</center>',
                 '<center>$'.    $value['price3']  .'</center>',
                  $value['fecha_actualizacion_precio'],
                    $value['tiempo_surtido'],  
=======
                   $value['sku'],
                    $value['description'],
                    $value['traduccion'],
                    $value['serie_maquina'],
                    $value['medida_maquina'],
                    $value['modulo'],
                    $value['tipo_maquina'],
                    $value['medidas_caracteristicas'],
                    $value['linea'],
                    $value['refacciones_consumibles'],
                    $value['fecha_ultima_venta'],
                    $value['qty'] . ' ' . $qty_status,
                  '<center>$'.	  $value['precio_de_compra'] .'</center>',
                   '<center>$'.	 $value['valor_almacen'] .'</center>',
                   '<center>$'.	 $value['price'] .'</center>',
                   '<center>$'.	 $value['price2'] .'</center>',
                   '<center>$'.	 $value['price3'] .'</center>',
                    $value['tiempo_surtido'],
                    //$store_data['name'],
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value['indice_abc'],
                    $value['min'],
                    $value['max'],
                    $value['cantidad_sugerida_a_solicitar'],
                    $value['condicion'],
                    $value['proveedor_principal'],
                    $value['proveedor_secundario'],
                    $value['location'],
                    //$availability,
                    $buttons
                );
            } else if ($dataLevel == "is_almacen") {
                $result['data'][$key] = array(
                    //mostrar imagen $img,
                    $value['sku'],
                    $value['description'],
                    $value['location'],
                    $value['traduccion'],
                    $value['serie_maquina'],
                    $value['tipo_maquina'],
                    $value['modulo'],
                    $value['qty'] . ' ' . $qty_status,
                    $value['medidas_caracteristicas'],
                    $value['medida_maquina'],
                    //$store_data['name'],
                    $value['linea'],
                    $value['refacciones_consumibles'],
                    $value['fecha_ultima_venta'],
                    //  $value['precio_de_compra'],
                    //$value['valor_almacen'],
                    //$value['price'],
<<<<<<< HEAD
                    $value['price2'],
                    $value['price3'],
                     $value['fecha_actualizacion_precio'],
=======
                  '<center>$'.	  $value['price2'] .'</center>',
                  '<center>$'.	  $value['price3'] .'</center>',
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value['tiempo_surtido'],
                    $value['indice_abc'],
                    $value['min'],
                    $value['max'],
                    //$value['cantidad_sugerida_a_solicitar'],
                    //$value['condicion'],
                    $value['proveedor_principal'],
                    $value['proveedor_secundario'],
                    //$availability,
                    $buttons
                );
            } else if ($dataLevel == "is_servicio_a_clientes") {
                $result['data'][$key] = array(
                    //mostrar imagen $img,
                    $value['sku'],
                    $value['description'],
                    $value['traduccion'],
<<<<<<< HEAD
                     $value['qty'] . ' ' . $qty_status,
                      $value['price'],
                    $value['price2'],
                    $value['price3'],
                     $value['fecha_actualizacion_precio'],
                    $value['serie_maquina'],
                    $value['tipo_maquina'],
                    $value['modulo'],
                   
=======
                    $value['serie_maquina'],
                    $value['tipo_maquina'],
                    $value['modulo'],
                    $value['qty'] . ' ' . $qty_status,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value['medidas_caracteristicas'],
                    $value['medida_maquina'],
                    //$store_data['name'],
                    $value['linea'],
                    $value['refacciones_consumibles'],
                    $value['fecha_ultima_venta'],
<<<<<<< HEAD
                     $value['precio_de_compra'],
                    //$value['valor_almacen'],
                   
=======
                    //  $value['precio_de_compra'],
                    //$value['valor_almacen'],
                    //$value['price'],
                 '<center>$'.	   $value['price2'] .'</center>',
                 '<center>$'.	   $value['price3'] .'</center>',
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value['tiempo_surtido'],
                    //$value['indice_abc'],
                    //$value['min'],
                    //$value['max'],
                    //$value['cantidad_sugerida_a_solicitar'],
                    //$value['condicion'],
                    //$value['proveedor_principal'],
                    //$value['proveedor_secundario'],
                    $value['location'],
                    //$availability,
                    $buttons
                );
            } else if ($dataLevel == "is_jefe_mantenimiento") {
                $result['data'][$key] = array(
                    //mostrar imagen $img,
                    $value['sku'],
                    $value['description'],
                    $value['traduccion'],
                    $value['serie_maquina'],
                    $value['tipo_maquina'],
                    $value['modulo'],
                    $value['qty'] . ' ' . $qty_status,
                    $value['medidas_caracteristicas'],
                    $value['medida_maquina'],
                    //$store_data['name'],
                    $value['linea'],
                    //$value['refacciones_consumibles'],
                    //$value['fecha_ultima_venta'],
                    //  $value['precio_de_compra'],
                    //$value['valor_almacen'],
                    //$value['price'],
<<<<<<< HEAD
                    $value['price2'],
                    $value['price3'],
                     $value['fecha_actualizacion_precio'],
=======
                 '<center>$'.	   $value['price2'] .'</center>',
                 '<center>$'.	   $value['price3'] .'</center>',
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    // $value['tiempo_surtido'],
                    //$value['indice_abc'],
                    //$value['min'],
                    //$value['max'],
                    //$value['cantidad_sugerida_a_solicitar'],
                    //$value['condicion'],
                    //$value['proveedor_principal'],
                    //$value['proveedor_secundario'],
                    $value['location'],
                    //$availability,
                    $buttons
                );
            } else if ($dataLevel == "is_mantenimiento") {
                $result['data'][$key] = array(
                    //mostrar imagen $img,
                    $value['sku'],
                    $value['description'],
                    $value['traduccion'],
                    $value['serie_maquina'],
                    $value['tipo_maquina'],
                    $value['modulo'],
                    $value['qty'] . ' ' . $qty_status,
                    $value['medidas_caracteristicas'],
                    $value['medida_maquina'],
                    //$store_data['name'],
                    $value['linea'],
                    //$value['refacciones_consumibles'],
                    //$value['fecha_ultima_venta'],
                    //  $value['precio_de_compra'],
                    //$value['valor_almacen'],
                    //$value['price'],
<<<<<<< HEAD
                    $value['price2'],
                    $value['price3'],
                     $value['fecha_actualizacion_precio'],
=======
                   '<center>$'.	 $value['price2'] .'</center>',
                   '<center>$'.	 $value['price3'] .'</center>',
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    // $value['tiempo_surtido'],
                    //$value['indice_abc'],
                    //$value['min'],
                    //$value['max'],
                    //$value['cantidad_sugerida_a_solicitar'],
                    //$value['condicion'],
                    //$value['proveedor_principal'],
                    //$value['proveedor_secundario'],
                    $value['location'],
                    //$availability,
                    $buttons
                );
            } else if ($dataLevel == "is_refacciones") {
                $result['data'][$key] = array(
                    //mostrar imagen $img,
                    $value['sku'],
                    $value['description'],
                    $value['traduccion'],
                    $value['serie_maquina'],
                    $value['tipo_maquina'],
                    $value['modulo'],
                    $value['qty'] . ' ' . $qty_status,
                    $value['medidas_caracteristicas'],
                    $value['medida_maquina'],
                    //$store_data['name'],
                    $value['linea'],
                    $value['refacciones_consumibles'],
                    $value['fecha_ultima_venta'],
                    //  $value['precio_de_compra'],
                    //$value['valor_almacen'],
                    //$value['price'],
<<<<<<< HEAD
                    $value['price2'],
                    $value['price3'],
                     $value['fecha_actualizacion_precio'],
=======
                   '<center>$'.	 $value['price2'].'</center>',
                   '<center>$'.	 $value['price3'].'</center>',
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value['tiempo_surtido'],
                    $value['indice_abc'],
                    //$value['min'],
                    //$value['max'],
                    //$value['cantidad_sugerida_a_solicitar'],
                    //$value['condicion'],
                    //$value['proveedor_principal'],
                    //$value['proveedor_secundario'],
                    $value['location'],
                    //$availability,
                    $buttons
                );
            } else if ($dataLevel == "is_maquinaria") {
                $result['data'][$key] = array(
                    //mostrar imagen $img,
                    $value['sku'],
                    $value['description'],
                    $value['traduccion'],
                    $value['serie_maquina'],
                    $value['tipo_maquina'],
                    $value['modulo'],
                    $value['qty'] . ' ' . $qty_status,
                    $value['medidas_caracteristicas'],
                    $value['medida_maquina'],
                    //$store_data['name'],
                    $value['linea'],
                    $value['refacciones_consumibles'],
                    $value['fecha_ultima_venta'],
                    //  $value['precio_de_compra'],
                    //$value['valor_almacen'],
                    //$value['price'],
<<<<<<< HEAD
                    $value['price2'],
                    $value['price3'],
                     $value['fecha_actualizacion_precio'],
=======
                  '<center>$'.	  $value['price2'].'</center>',
                  '<center>$'.	  $value['price3'].'</center>',
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value['tiempo_surtido'],
                    $value['indice_abc'],
                    //$value['min'],
                    //$value['max'],
                    //$value['cantidad_sugerida_a_solicitar'],
                    //$value['condicion'],
                    //$value['proveedor_principal'],
                    //$value['proveedor_secundario'],
                    $value['location'],
                    //$availability,
                    $buttons
                );
<<<<<<< HEAD
            }else if ($dataLevel == "is_Gerente_Ventas") {
                  $result['data'][$key] = array(
=======
            } else if ($dataLevel == "is_Gerente_Ventas") {
                $result['data'][$key] = array(
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    //mostrar imagen $img,
                    $value['sku'],
                    $value['description'],
                    $value['traduccion'],
                    $value['serie_maquina'],
                    $value['tipo_maquina'],
                    $value['modulo'],
                    $value['qty'] . ' ' . $qty_status,
                    $value['medidas_caracteristicas'],
                    $value['medida_maquina'],
                    //$store_data['name'],
                    $value['linea'],
                    $value['refacciones_consumibles'],
                    $value['fecha_ultima_venta'],
                    //  $value['precio_de_compra'],
                    //$value['valor_almacen'],
<<<<<<< HEAD
                    $value['price'],
                    $value['price2'],
                    $value['price3'],
                     $value['fecha_actualizacion_precio'],
=======
                  '<center>$'.	  $value['price'].'</center>',
                  '<center>$'.	  $value['price2'].'</center>',
                  '<center>$'.	  $value['price3']  .'</center>',		 	
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value['tiempo_surtido'],
                    $value['indice_abc'],
                    //$value['min'],
                    //$value['max'],
                    //$value['cantidad_sugerida_a_solicitar'],
                    //$value['condicion'],
                    //$value['proveedor_principal'],
                    //$value['proveedor_secundario'],
                    $value['location'],
                    //$availability,
                    $buttons
<<<<<<< HEAD
                
                          
                          
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );
            }
        } // /foreach

        echo json_encode($result);
    }

    /*
     * If the validation is not valid, then it redirects to the create page.
     * If the validation for each input field is valid then it inserts the data into the database 
     * and it stores the operation message into the session flashdata and display on the manage product page
     */

    public function create() {
        /* if(!in_array('createProduct', $this->permission)) { */
        /* redirect('dashboard', 'refresh'); */
        /* } */
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

            /* $this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
              $this->form_validation->set_rules('sku', 'SKU', 'trim|required');
              $this->form_validation->set_rules('price', 'Price', 'trim|required');
              $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
              $this->form_validation->set_rules('store', 'Store', 'trim|required'); */
<<<<<<< HEAD
            $this->form_validation->set_rules('sku', 'Sku', 'trim|required|is_unique[products.sku]');
            
            
              $this->form_validation->set_message('required','<font size="4" color="red">El campo %s es obligatorio</font>');
            $this->form_validation->set_message('is_unique','<font size="4" color="red">Ya existe este sku registrado</font>');

=======
            $this->form_validation->set_rules('sku', 'Sku', 'trim|is_unique[products.sku]');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

            //$this->form_validation->set_rules('availability', 'Availability', 'trim|required');


            if ($this->form_validation->run() == TRUE) {
                // true case
                $upload_image = $this->upload_image();
<<<<<<< HEAD

=======
            $user_id = $this->session->userdata('id');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                $data = array(
                    'name' => $this->input->post('product_name'),
                    'sku' => $this->input->post('sku'),
                    'price' => $this->input->post('price'),
                    'price2' => $this->input->post('price2'),
                    'price3' => $this->input->post('price3'),
                    'price4' => $this->input->post('price4'),
<<<<<<< HEAD
                     'fecha_actualizacion_precio' => $this->input->post('fecha_actualizacion_precio'),
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    'min' => $this->input->post('min'),
                    'max' => $this->input->post('max'),
                    'qty' => $this->input->post('qty'),
                    'image' => $upload_image,
                    'description' => $this->input->post('description'),
                    'location' => $this->input->post('location'),
                    'area' => $this->input->post('area'),
                    'attribute_value_id' => json_encode($this->input->post('attributes_value_id')),
                    'brand_id' => json_encode($this->input->post('brands')),
                    'category_id' => json_encode($this->input->post('category')),
                    'store_id' => $this->input->post('store'),
                    'availability' => $this->input->post('availability'),
                    'linea' => $this->input->post('linea'),
                    'refacciones_consumibles' => $this->input->post('refacciones_consumibles'),
                    'tiempo_surtido' => $this->input->post('tiempo_surtido'),
                    'fecha_ultima_venta' => $this->input->post('fecha_ultima_venta'),
                    'dias_ultima_venta' => $this->input->post('dias_ultima_venta'),
                    'traduccion' => $this->input->post('traduccion'),
                    'medidas_caracteristicas' => $this->input->post('medidas_caracteristicas'),
                    'serie_maquina' => $this->input->post('serie_maquina'),
                    'medida_maquina' => $this->input->post('medida_maquina'),
                    'modulo' => $this->input->post('modulo'),
                    'tipo_maquina' => $this->input->post('tipo_maquina'),
                    'proveedor_principal' => $this->input->post('proveedor_principal'),
                    'proveedor_secundario' => $this->input->post('proveedor_secundario'),
                    'circunferencia' => $this->input->post('circunferencia'),
                    'medidas_id' => $this->input->post('medidas_id'),
                    'ancho' => $this->input->post('ancho'),
                    'espesor' => $this->input->post('espesor'),
                    'cue' => $this->input->post('cue'),
                    'precio_de_compra' => $this->input->post('precio_de_compra'),
                    'valor_almacen' => $this->input->post('valor_almacen'),
                    'indice_abc' => $this->input->post('indice_abc'),
                    'cantidad_sugerida_a_solicitar' => $this->input->post('cantidad_sugerida_a_solicitar'),
                    'condicion' => $this->input->post('condicion'),
<<<<<<< HEAD
                    
                        /* Es para traerse el id del usuario */
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
=======
                        /* Es para traerse el id del usuario */
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
                        
                       // 'id_users' => $user_id,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );

                $create = $this->model_products->create($data);
                if ($create == true) {
                    $this->session->set_flashdata('success', 'Guardado correctamente');
                    redirect('products/', 'refresh');
                } else {
                    $this->session->set_flashdata('errors', 'Error occurred!!');
                    redirect('products/create', 'refresh');
                }
            } else {
                // false case
                // attributes 
                $attribute_data = $this->model_attributes->getActiveAttributeData();

                $attributes_final_data = array();
                foreach ($attribute_data as $k => $v) {
                    $attributes_final_data[$k]['attribute_data'] = $v;

                    $value = $this->model_attributes->getAttributeValueData($v['id']);

                    $attributes_final_data[$k]['attribute_value'] = $value;
                }

                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();


                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('products/create', $this->data);

                /* } */
            }
<<<<<<< HEAD
        }else if ($dataLevel == "is_servicio_a_clientes") {

            /* $this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
              $this->form_validation->set_rules('sku', 'SKU', 'trim|required');
              $this->form_validation->set_rules('price', 'Price', 'trim|required');
              $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
              $this->form_validation->set_rules('store', 'Store', 'trim|required'); */
            $this->form_validation->set_rules('sku', 'Sku', 'trim|required|is_unique[products.sku]');
            
            
              $this->form_validation->set_message('required','<font size="4" color="red">El campo %s es obligatorio</font>');
            $this->form_validation->set_message('is_unique','<font size="4" color="red">Ya existe este sku registrado</font>');


            //$this->form_validation->set_rules('availability', 'Availability', 'trim|required');


            if ($this->form_validation->run() == TRUE) {
                // true case
                $upload_image = $this->upload_image();

                $data = array(
                    'name' => $this->input->post('product_name'),
                    'sku' => $this->input->post('sku'),
                    'price' => $this->input->post('price'),
                    'price2' => $this->input->post('price2'),
                    'price3' => $this->input->post('price3'),
                    'price4' => $this->input->post('price4'),
                     'fecha_actualizacion_precio' => $this->input->post('fecha_actualizacion_precio'),
                    'min' => $this->input->post('min'),
                    'max' => $this->input->post('max'),
                    'qty' => $this->input->post('qty'),
                    'image' => $upload_image,
                    'description' => $this->input->post('description'),
                    'location' => $this->input->post('location'),
                    'area' => $this->input->post('area'),
                    'attribute_value_id' => json_encode($this->input->post('attributes_value_id')),
                    'brand_id' => json_encode($this->input->post('brands')),
                    'category_id' => json_encode($this->input->post('category')),
                    'store_id' => $this->input->post('store'),
                    'availability' => $this->input->post('availability'),
                    'linea' => $this->input->post('linea'),
                    'refacciones_consumibles' => $this->input->post('refacciones_consumibles'),
                    'tiempo_surtido' => $this->input->post('tiempo_surtido'),
                    'fecha_ultima_venta' => $this->input->post('fecha_ultima_venta'),
                    'dias_ultima_venta' => $this->input->post('dias_ultima_venta'),
                    'traduccion' => $this->input->post('traduccion'),
                    'medidas_caracteristicas' => $this->input->post('medidas_caracteristicas'),
                    'serie_maquina' => $this->input->post('serie_maquina'),
                    'medida_maquina' => $this->input->post('medida_maquina'),
                    'modulo' => $this->input->post('modulo'),
                    'tipo_maquina' => $this->input->post('tipo_maquina'),
                    'proveedor_principal' => $this->input->post('proveedor_principal'),
                    'proveedor_secundario' => $this->input->post('proveedor_secundario'),
                    'circunferencia' => $this->input->post('circunferencia'),
                    'medidas_id' => $this->input->post('medidas_id'),
                    'ancho' => $this->input->post('ancho'),
                    'espesor' => $this->input->post('espesor'),
                    'cue' => $this->input->post('cue'),
                    'precio_de_compra' => $this->input->post('precio_de_compra'),
                    'valor_almacen' => $this->input->post('valor_almacen'),
                    'indice_abc' => $this->input->post('indice_abc'),
                    'cantidad_sugerida_a_solicitar' => $this->input->post('cantidad_sugerida_a_solicitar'),
                    'condicion' => $this->input->post('condicion'),
                    
                        /* Es para traerse el id del usuario */
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
                );

                $create = $this->model_products->create($data);
                if ($create == true) {
                    $this->session->set_flashdata('success', 'Guardado correctamente');
                    redirect('products/', 'refresh');
                } else {
                    $this->session->set_flashdata('errors', 'Error occurred!!');
                    redirect('products/create', 'refresh');
                }
            } else {
                // false case
                // attributes 
                $attribute_data = $this->model_attributes->getActiveAttributeData();

                $attributes_final_data = array();
                foreach ($attribute_data as $k => $v) {
                    $attributes_final_data[$k]['attribute_data'] = $v;

                    $value = $this->model_attributes->getAttributeValueData($v['id']);

                    $attributes_final_data[$k]['attribute_value'] = $value;
                }

                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();


                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('products/create', $this->data);

                /* } */
            }
        }  else if ($dataLevel == "is_editor") {
=======
        } else if ($dataLevel == "is_editor") {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            //*editor//

            /* $this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
              $this->form_validation->set_rules('sku', 'SKU', 'trim|required');
              $this->form_validation->set_rules('price', 'Price', 'trim|required');
              $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
              $this->form_validation->set_rules('store', 'Store', 'trim|required'); */
            $this->form_validation->set_rules('sku', 'Sku', 'trim|is_unique[products.sku]');

            //$this->form_validation->set_rules('availability', 'Availability', 'trim|required');


            if ($this->form_validation->run() == TRUE) {
                // true case
                $upload_image = $this->upload_image();

                $data = array(
                    'name' => $this->input->post('product_name'),
                    'sku' => $this->input->post('sku'),
                    'price' => $this->input->post('price'),
                    'price2' => $this->input->post('price2'),
                    'price3' => $this->input->post('price3'),
                    'price4' => $this->input->post('price4'),
<<<<<<< HEAD
                     'fecha_actualizacion_precio' => $this->input->post('fecha_actualizacion_precio'),
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    'min' => $this->input->post('min'),
                    'max' => $this->input->post('max'),
                    'qty' => $this->input->post('qty'),
                    'image' => $upload_image,
                    'description' => $this->input->post('description'),
                    'location' => $this->input->post('location'),
                    'area' => $this->input->post('area'),
                    'attribute_value_id' => json_encode($this->input->post('attributes_value_id')),
                    'brand_id' => json_encode($this->input->post('brands')),
                    'category_id' => json_encode($this->input->post('category')),
                    'store_id' => $this->input->post('store'),
                    'availability' => $this->input->post('availability'),
                    'linea' => $this->input->post('linea'),
                    'refacciones_consumibles' => $this->input->post('refacciones_consumibles'),
                    'tiempo_surtido' => $this->input->post('tiempo_surtido'),
                    'fecha_ultima_venta' => $this->input->post('fecha_ultima_venta'),
                    'dias_ultima_venta' => $this->input->post('dias_ultima_venta'),
                    'traduccion' => $this->input->post('traduccion'),
                    'medidas_caracteristicas' => $this->input->post('medidas_caracteristicas'),
                    'serie_maquina' => $this->input->post('serie_maquina'),
                    'medida_maquina' => $this->input->post('medida_maquina'),
                    'modulo' => $this->input->post('modulo'),
                    'tipo_maquina' => $this->input->post('tipo_maquina'),
                    'proveedor_principal' => $this->input->post('proveedor_principal'),
                    'proveedor_secundario' => $this->input->post('proveedor_secundario'),
                    'circunferencia' => $this->input->post('circunferencia'),
                    'medidas_id' => $this->input->post('medidas_id'),
                    'ancho' => $this->input->post('ancho'),
                    'espesor' => $this->input->post('espesor'),
                    'cue' => $this->input->post('cue'),
                    'dicar' => $this->input->post('dicar'),
                    'precio_de_compra' => $this->input->post('precio_de_compra'),
                    'valor_almacen' => $this->input->post('valor_almacen'),
                    'indice_abc' => $this->input->post('indice_abc'),
                    'cantidad_sugerida_a_solicitar' => $this->input->post('cantidad_sugerida_a_solicitar'),
                    'condicion' => $this->input->post('condicion'),
<<<<<<< HEAD
                        /* Es para traerse el id del usuario */
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
=======
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );

                $create = $this->model_products->create($data);
                if ($create == true) {
                    $this->session->set_flashdata('success', 'Successfully created');
                    redirect('products/', 'refresh');
                } else {
                    $this->session->set_flashdata('errors', 'Error occurred!!');
                    redirect('products/create', 'refresh');
                }
            } else {
                // false case
                // attributes 
                $attribute_data = $this->model_attributes->getActiveAttributeData();

                $attributes_final_data = array();
                foreach ($attribute_data as $k => $v) {
                    $attributes_final_data[$k]['attribute_data'] = $v;

                    $value = $this->model_attributes->getAttributeValueData($v['id']);

                    $attributes_final_data[$k]['attribute_value'] = $value;
                }

                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();


                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('products/create', $this->data);

                /* } */
            }



            //*termina editor//
        } else if ($dataLevel == "is_almacen") {
            //*inicia rol almacen//

            /* $this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
              $this->form_validation->set_rules('sku', 'SKU', 'trim|required');
              $this->form_validation->set_rules('price', 'Price', 'trim|required');
              $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
              $this->form_validation->set_rules('store', 'Store', 'trim|required'); */
            $this->form_validation->set_rules('sku', 'Sku', 'trim|is_unique[products.sku]');

            //$this->form_validation->set_rules('availability', 'Availability', 'trim|required');


            if ($this->form_validation->run() == TRUE) {
                // true case
                $upload_image = $this->upload_image();

                $data = array(
                    'name' => $this->input->post('product_name'),
                    'sku' => $this->input->post('sku'),
                    'price' => $this->input->post('price'),
                    'price2' => $this->input->post('price2'),
                    'price3' => $this->input->post('price3'),
                    'price4' => $this->input->post('price4'),
<<<<<<< HEAD
                     'fecha_actualizacion_precio' => $this->input->post('fecha_actualizacion_precio'),
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    'min' => $this->input->post('min'),
                    'max' => $this->input->post('max'),
                    'qty' => $this->input->post('qty'),
                    'image' => $upload_image,
                    'description' => $this->input->post('description'),
                    'location' => $this->input->post('location'),
                    'area' => $this->input->post('area'),
                    'attribute_value_id' => json_encode($this->input->post('attributes_value_id')),
                    'brand_id' => json_encode($this->input->post('brands')),
                    'category_id' => json_encode($this->input->post('category')),
                    'store_id' => $this->input->post('store'),
                    'availability' => $this->input->post('availability'),
                    'linea' => $this->input->post('linea'),
                    'refacciones_consumibles' => $this->input->post('refacciones_consumibles'),
                    'tiempo_surtido' => $this->input->post('tiempo_surtido'),
                    'fecha_ultima_venta' => $this->input->post('fecha_ultima_venta'),
                    'dias_ultima_venta' => $this->input->post('dias_ultima_venta'),
                    'traduccion' => $this->input->post('traduccion'),
                    'medidas_caracteristicas' => $this->input->post('medidas_caracteristicas'),
                    'serie_maquina' => $this->input->post('serie_maquina'),
                    'medida_maquina' => $this->input->post('medida_maquina'),
                    'modulo' => $this->input->post('modulo'),
                    'tipo_maquina' => $this->input->post('tipo_maquina'),
                    'proveedor_principal' => $this->input->post('proveedor_principal'),
                    'proveedor_secundario' => $this->input->post('proveedor_secundario'),
                    'circunferencia' => $this->input->post('circunferencia'),
                    'medidas_id' => $this->input->post('medidas_id'),
                    'ancho' => $this->input->post('ancho'),
                    'espesor' => $this->input->post('espesor'),
                    'cue' => $this->input->post('cue'),
                    'dicar' => $this->input->post('dicar'),
                    'precio_de_compra' => $this->input->post('precio_de_compra'),
                    'valor_almacen' => $this->input->post('valor_almacen'),
                    'indice_abc' => $this->input->post('indice_abc'),
                    'cantidad_sugerida_a_solicitar' => $this->input->post('cantidad_sugerida_a_solicitar'),
                    'condicion' => $this->input->post('condicion'),
<<<<<<< HEAD
                        /* Es para traerse el id del usuario */
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
=======
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );

                $create = $this->model_products->create($data);
                if ($create == true) {
                    $this->session->set_flashdata('success', 'Successfully created');
                    redirect('products/', 'refresh');
                } else {
                    $this->session->set_flashdata('errors', 'Error occurred!!');
                    redirect('products/create', 'refresh');
                }
            } else {
                // false case
                // attributes 
                $attribute_data = $this->model_attributes->getActiveAttributeData();

                $attributes_final_data = array();
                foreach ($attribute_data as $k => $v) {
                    $attributes_final_data[$k]['attribute_data'] = $v;

                    $value = $this->model_attributes->getAttributeValueData($v['id']);

                    $attributes_final_data[$k]['attribute_value'] = $value;
                }

                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();


                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('products/create', $this->data);

                /* } */
            }



            //termina rol almacen//
        } else {
            redirect(site_url() . 'main/login/');
        }
    }

    /*
     * This function is invoked from another function to upload the image into the assets folder
     * and returns the image path
     */

    public function upload_image() {
        // assets/images/product_image
        $config['upload_path'] = 'assets/images/product_image';
        $config['file_name'] = uniqid();
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['product_image']['name']);
            $type = $type[count($type) - 1];

            $path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
            return ($data == true) ? $path : false;
        }
    }

    /*
     * If the validation is not valid, then it redirects to the edit product page 
     * If the validation is successfully then it updates the data into the database 
     * and it stores the operation message into the session flashdata and display on the manage product page
     */

    public function update($product_id) {
        /* if(!in_array('updateProduct', $this->permission)) { */
        /* redirect('dashboard', 'refresh'); */
        /* } */



        //$this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
        //$this->form_validation->set_rules('sku', 'SKU', 'trim|required');
        // $this->form_validation->set_rules('price', 'Price', 'trim|required');
        // $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
        // $this->form_validation->set_rules('store', 'Store', 'trim|required');


        $this->form_validation->set_rules('availability', 'Availability', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            // true case

            $data = array(
                'name' => $this->input->post('product_name'),
                'sku' => $this->input->post('sku'),
                'price' => $this->input->post('price'),
                'price2' => $this->input->post('price2'),
                'price3' => $this->input->post('price3'),
                'price4' => $this->input->post('price4'),
<<<<<<< HEAD
                 'fecha_actualizacion_precio' => $this->input->post('fecha_actualizacion_precio'),
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                'qty' => $this->input->post('qty'),
                'min' => $this->input->post('min'),
                'max' => $this->input->post('max'),
                'description' => $this->input->post('description'),
                'location' => $this->input->post('location'),
                'area' => $this->input->post('area'),
                'attribute_value_id' => json_encode($this->input->post('attributes_value_id')),
                'brand_id' => json_encode($this->input->post('brands')),
                'category_id' => json_encode($this->input->post('category')),
                'store_id' => $this->input->post('store'),
                'availability' => $this->input->post('availability'),
                'refacciones_consumibles' => $this->input->post('refacciones_consumibles'),
                'linea' => $this->input->post('linea'),
                'tiempo_surtido' => $this->input->post('tiempo_surtido'),
                'fecha_ultima_venta' => $this->input->post('fecha_ultima_venta'),
                'dias_ultima_venta' => $this->input->post('dias_ultima_venta'),
                'traduccion' => $this->input->post('traduccion'),
                'medidas_caracteristicas' => $this->input->post('medidas_caracteristicas'),
                'serie_maquina' => $this->input->post('serie_maquina'),
                'medida_maquina' => $this->input->post('medida_maquina'),
                'modulo' => $this->input->post('modulo'),
                'tipo_maquina' => $this->input->post('tipo_maquina'),
                'proveedor_principal' => $this->input->post('proveedor_principal'),
                'proveedor_secundario' => $this->input->post('proveedor_secundario'),
                'circunferencia' => $this->input->post('circunferencia'),
                'medidas_id' => $this->input->post('medidas_id'),
                'ancho' => $this->input->post('ancho'),
                'espesor' => $this->input->post('espesor'),
                'cue' => $this->input->post('cue'),
                'dicar' => $this->input->post('dicar'),
                'precio_de_compra' => $this->input->post('precio_de_compra'),
                'valor_almacen' => $this->input->post('valor_almacen'),
                'indice_abc' => $this->input->post('indice_abc'),
                'cantidad_sugerida_a_solicitar' => $this->input->post('cantidad_sugerida_a_solicitar'),
                'condicion' => $this->input->post('condicion')
            );

//para subir imagenes
            /* if ($_FILES['product_image']['size'] > 0) {
              $upload_image = $this->upload_image();
              $upload_image = array('image' => $upload_image);

              $this->model_products->update($upload_image, $product_id);
              } */

            $update = $this->model_products->update($data, $product_id);
            if ($update == true) {
                $this->session->set_flashdata('success', 'Actualizado Correctamente');
                redirect('products/', 'refresh');
            } else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('products/update/' . $product_id, 'refresh');
            }
        } else {
            // attributes 
            $attribute_data = $this->model_attributes->getActiveAttributeData();

            $attributes_final_data = array();
            foreach ($attribute_data as $k => $v) {
                $attributes_final_data[$k]['attribute_data'] = $v;

                $value = $this->model_attributes->getAttributeValueData($v['id']);

                $attributes_final_data[$k]['attribute_value'] = $value;
            }





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


                /* } */





                // false case
                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();

                $product_data = $this->model_products->getProductData($product_id);
                $this->data['product_data'] = $product_data;






                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('products/edit', $this->data);
            } else if ($dataLevel == "is_editor") {
                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();

                $product_data = $this->model_products->getProductData($product_id);
                $this->data['product_data'] = $product_data;

                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('products/edit', $this->data);
            } else if ($dataLevel == "is_almacen") {
                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();

                $product_data = $this->model_products->getProductData($product_id);
                $this->data['product_data'] = $product_data;

                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('products/edit', $this->data);
<<<<<<< HEAD
            }else if ($dataLevel == "is_servicio_a_clientes") {
                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();

                $product_data = $this->model_products->getProductData($product_id);
                $this->data['product_data'] = $product_data;

                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('products/edit', $this->data);
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            }
        }
    }

    /*
     * If the validation is not valid, then it provides the validation error on the json format
     * If the validation for each input is valid then it updates the data into the database and 
      returns a n appropriate message in the json format.
     */

    public function fetchProductDataById($id) {
        if ($id) {
            $data = $this->model_products->getProductData($id);
            echo json_encode($data);
        }
    }

    public function updateStock($id) {
        /* if(!in_array('updateStore', $this->permission)) {
          redirect('dashboard', 'refresh');
          } */

        $response = array();

        if ($id) {
            $this->form_validation->set_rules('edit_store_name', 'Store name', 'trim|required');
            $this->form_validation->set_rules('edit_active', 'Active', 'trim|required');

            $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'name' => $this->input->post('edit_store_name'),
                    'active' => $this->input->post('edit_active'),
                );

                $update = $this->model_stores->update($data, $id);
                if ($update == true) {
                    $response['success'] = true;
                    $response['messages'] = 'Actualizado correctamente';
                } else {
                    $response['success'] = false;
                    $response['messages'] = 'Error al actualizar';
                }
            } else {
                $response['success'] = false;
                foreach ($_POST as $key => $value) {
                    $response['messages'][$key] = form_error($key);
                }
            }
        } else {
            $response['success'] = false;
            $response['messages'] = 'Error please refresh the page again!!';
        }

        echo json_encode($response);
    }

    public function updateProduct() {
        // $this->model_products->updateBySku();
        echo json_encode(["success" => $this->model_products->updateBySku(), "message" => "Stock actualizado"]);
    }

    public function updateProductRollback() {
        // $this->model_products->updateBySku();
        echo json_encode(["success" => $this->model_products->updateBySkuRollback(), "message" => "Stock actualizado"]);
    }

    /*
     * It removes the data from the database
     * and it returns the response into the json format
     */

    public function remove() {
        /* if(!in_array('deleteProduct', $this->permission)) { */
        /* redirect('dashboard', 'refresh'); */
        /* } */

        $product_id = $this->input->post('product_id');

        $response = array();
        if ($product_id) {
            $delete = $this->model_products->remove($product_id);
            if ($delete == true) {
                $response['success'] = true;
                $response['messages'] = "Eliminado correctamente";
            } else {
                $response['success'] = false;
                $response['messages'] = "Error en la base de datos";
            }
        } else {
            $response['success'] = false;
            $response['messages'] = "Refersh the page again!!";
        }

        echo json_encode($response);
    }

    /*

      public function userDetails(){
      // POST data
      $postData = $this->input->post();

      // get data
      $data = $this->model_products->getUserDetails($postData);

      echo json_encode($data);
      }
     */
}
