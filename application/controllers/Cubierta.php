<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cubierta extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        $this->not_logged_in();

        $this->data['page_title'] = 'Refacciones';

        $this->load->model('model_cubierta');
        $this->load->model('model_brands');
        $this->load->model('model_category');
        $this->load->model('model_stores');
        $this->load->model('model_attributes');
    }

    /*
     * It only redirects to the manage product page
     */

    public function ejemplo() {
        $users = $this->model_cubierta->getUsernames();

        $data['users'] = $users;

        $this->load->view('user_view', $data);
    }

    public function userDetails() {
        // POST data
        $postData = $this->input->post();

        // get data
        $data = $this->model_cubierta->getUserDetails($postData);

        echo json_encode($data);
    }

    public function agregar() {




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
            $users = $this->model_cubierta->getProducts();

            $data['users'] = $users;

            $this->load->view('cubierta/entrada', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            //se trae los datos de la consulta del modelo
            $this->load->view('header', $data);
            // $this->load->view('navbar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/header_menu', $data);

            $this->load->view('templates/side_menubar', $data);
            $users = $this->model_cubierta->getProducts();

            $data['users'] = $users;

            $this->load->view('cubierta/entrada', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_almacen") {
            //se trae los datos de la consulta del modelo
            $this->load->view('header', $data);
            // $this->load->view('navbar', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/header_menu', $data);

            $this->load->view('templates/side_menubar', $data);
            $users = $this->model_cubierta->getProducts();

            $data['users'] = $users;

            $this->load->view('cubierta/entrada', $data);
            $this->load->view('footer');
        }
    }

    public function productsDetails() {
        // POST data
        $postData = $this->input->post();

        // get data
        $data = $this->model_cubierta->getProductsDetails($postData);

        echo json_encode($data);
    }

    /*
      public function obtener($id_cliente) {
      $this->load->model('Model_cubierta');



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
      $data = $this->Model_cubierta->obtener($id_cliente);
      $this->load->view('cubierta/actualizarInventario', $data);
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
      $data = $this->Model_cubierta->obtener($id_cliente);
      $this->load->view('Cliente/modificarCliente', $data);

      $this->load->view('footer');
      } else if ($dataLevel == "is_servicio_a_clientes") {

      $this->load->view('header', $data);
      $this->load->view('navbar', $data);
      //agregar para el select de refacción de tabla maquinaria
      //se trae el arreglo de los datos seleccionados por el di

      $data = array();
      $data = $this->Model_cubierta->obtener($id_cliente);
      $this->load->view('Cliente/modificarCliente', $data);

      $this->load->view('footer');
      } else {
      redirect(site_url() . 'main/');
      }
      } */

    public function productModificar() {

        $this->load->model('Model_cubierta');
        $this->Model_cubierta->actualizar();
        redirect('Cubierta');
    }

    public function index() {
        /* {
          if(!in_array('viewProduct', $this->permission)) {
          redirect('dashboard', 'refresh');
          } */


        $this->load->model('Model_cubierta');
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
            $this->render_template('cubierta/index', $this->data);
            /* } */
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('cubierta/index', $this->data);
        } else if ($dataLevel == "is_almacen") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('cubierta/index', $this->data);
        }   else if ($dataLevel == "is_servicio_a_clientes") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('cubierta/index', $this->data);
        }else if ($dataLevel == "is_mantenimiento") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('cubierta/index', $this->data);
        }else if ($dataLevel == "is_jefe_mantenimiento") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('cubierta/index', $this->data);
            }else if ($dataLevel == "is_maquinaria") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('cubierta/index', $this->data);
        }else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('cubierta/index', $this->data);
        }else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
            $this->render_template('cubierta/index', $this->data);
        }
        
    }

    /*
     * It Fetches the cubierta data from the product table 
     * this function is called from the datatable ajax function
     */

    public function fetchProductData() {
        $result = array('data' => array());

        $data = $this->model_cubierta->getProductData();

        foreach ($data as $key => $value) {

            $store_data = $this->model_stores->getStoresData($value['store_id']);
            // button
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
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
            
            
            
            
            
            $buttons = '';
            /* if(in_array('updateProduct', $this->permission)) { */
            $buttons .= '<a href="' . base_url('cubierta/update/' . $value['id']) . '" class="btn btn-default"><i class="fa fa-pencil"></i></a>';
            /* } */

            /* if(in_array('deleteProduct', $this->permission)) { */
            $buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc(' . $value['id'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
            /* } */
        }elseif ($dataLevel == "is_editor") {
                $buttons = '';
            /* if(in_array('updateProduct', $this->permission)) { */
            $buttons .= '<a href="' . base_url('cubierta/update/' . $value['id']) . '" class="btn btn-default"><i class="fa fa-pencil"></i></a>';
            /* } */

            /* if(in_array('deleteProduct', $this->permission)) { */
            $buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc(' . $value['id'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
            /* } */ 
            }elseif ($dataLevel == "is_almacen") {
                $buttons = '';
            /* if(in_array('updateProduct', $this->permission)) { */
            $buttons .= '<a href="' . base_url('cubierta/update/' . $value['id']) . '" class="btn btn-default"><i class="fa fa-pencil"></i></a>';
            /* } */

            /* if(in_array('deleteProduct', $this->permission)) { */
            $buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc(' . $value['id'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
            /* } */ 
            }elseif ($dataLevel == "is_mantenimiento") {
                $buttons = '';
             }elseif ($dataLevel == "is_servicio_a_clientes") {
                 $buttons = '';
            /* if(in_array('updateProduct', $this->permission)) { */
            $buttons .= '<a href="' . base_url('cubierta/update/' . $value['id']) . '" class="btn btn-default"><i class="fa fa-pencil"></i></a>';
            /* } */

           
             }elseif ($dataLevel == "is_jefe_mantenimiento") {
                $buttons = '';
             }elseif ($dataLevel == "is_maquinaria") {
                $buttons = '';
             }elseif ($dataLevel == "is_refacciones") {
                $buttons = '';
             }elseif ($dataLevel == "is_Gerente_Ventas") {
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
            
            
            
              $data = $this->session->userdata;
        if (empty($data)) {
            redirect(site_url() . 'main/login/');
        }
        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
       
       $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
              $result['data'][$key] = array(
                //mostrar imagen $img,
                $value['sku'],
                $value['description'],
                //$value['linea'],
                $value['medida_maquina'],
                $value['tiempo_surtido'],
                 $value['fecha_ultima_venta'],
                $value['qty'] . ' ' . $qty_status,
               // $store_data['name'],
                $value['price'],
                $value['price2'],
                $value['price3'],
                $value['price4'],
                $value['price5'],
                $value['fecha_actualizacion_precio'],
                $value['circunferencia'],
                $value['medidas_id'],
                $value['ancho'],
                $value['espesor'],
                $value['cue'],
                $value['dicar'],
                $value['location'],
                
                //$availability,
                $buttons
            );
        }elseif ($dataLevel == "is_editor") {
                  $result['data'][$key] = array(
                //mostrar imagen $img,
                $value['sku'],
                $value['description'],
               // $value['linea'],
                $value['medida_maquina'],
                $value['tiempo_surtido'],
                 $value['fecha_ultima_venta'],
                $value['qty'] . ' ' . $qty_status,
               // $store_data['name'],
                $value['price'],
                $value['price2'],
                $value['price3'],
                $value['price4'],
                $value['price5'],
                $value['fecha_actualizacion_precio'],
                $value['circunferencia'],
                $value['medidas_id'],
                $value['ancho'],
                $value['espesor'],
                $value['cue'],
                $value['dicar'],
                $value['location'],
                
                //$availability,
                $buttons
            );
            }elseif ($dataLevel == "is_servicio_a_clientes") {
                  $result['data'][$key] = array(
                //mostrar imagen $img,
                $value['sku'],
                $value['description'],
                $value['qty'] . ' ' . $qty_status,
                 $value['price'],
                //$value['linea'],
                $value['medida_maquina'],
                $value['tiempo_surtido'],
                 $value['fecha_ultima_venta'],
                
               // $store_data['name'],
              
                $value['price2'],
                $value['price3'],
                $value['price4'],
                $value['price5'],
                $value['fecha_actualizacion_precio'],
                $value['circunferencia'],
                $value['medidas_id'],
                $value['ancho'],
                $value['espesor'],
                $value['cue'],
                $value['dicar'],
                $value['location'],
                
                //$availability,
                $buttons
            );
            }elseif ($dataLevel == "is_maquinaria") {
                  $result['data'][$key] = array(
                //mostrar imagen $img,
                $value['sku'],
                $value['description'],
                $value['linea'],
                $value['medida_maquina'],
                $value['tiempo_surtido'],
                 $value['fecha_ultima_venta'],
                $value['qty'] . ' ' . $qty_status,
               // $store_data['name'],
                $value['price2'],
                $value['price3'],
                $value['price4'],
                $value['fecha_actualizacion_precio'],
                $value['circunferencia'],
                $value['medidas_id'],
                $value['ancho'],
                $value['espesor'],
                $value['cue'],
                $value['dicar'],
                $value['location'],
                
                //$availability,
                $buttons
            );
            }elseif ($dataLevel == "is_refacciones") {
                  $result['data'][$key] = array(
                //mostrar imagen $img,
                $value['sku'],
                $value['description'],
               // $value['linea'],
                $value['medida_maquina'],
                $value['tiempo_surtido'],
                 $value['fecha_ultima_venta'],
                $value['qty'] . ' ' . $qty_status,
               // $store_data['name'],
                $value['price2'],
                $value['price3'],
                $value['price4'],
                $value['price5'],
                $value['fecha_actualizacion_precio'],
                $value['circunferencia'],
                $value['medidas_id'],
                $value['ancho'],
                $value['espesor'],
                $value['cue'],
                $value['dicar'],
                $value['location'],
                
                //$availability,
                $buttons
            );
            }elseif ($dataLevel == "is_mantenimiento") {
                  $result['data'][$key] = array(
                //mostrar imagen $img,
                $value['sku'],
                $value['description'],
               // $value['linea'],
                $value['medida_maquina'],
                $value['tiempo_surtido'],
                 $value['fecha_ultima_venta'],
                $value['qty'] . ' ' . $qty_status,
               // $store_data['name'],
                $value['price2'],
                $value['price3'],
                $value['price4'],
                $value['price5'],
                $value['fecha_actualizacion_precio'],
                $value['circunferencia'],
                $value['medidas_id'],
                $value['ancho'],
                $value['espesor'],
                $value['cue'],
                $value['dicar'],
                $value['location'],
                
                //$availability,
                $buttons
            );
            }
            elseif ($dataLevel == "is_jefe_mantenimiento") {
                  $result['data'][$key] = array(
                //mostrar imagen $img,
                $value['sku'],
                $value['description'],
               // $value['linea'],
                $value['medida_maquina'],
                $value['tiempo_surtido'],
                 $value['fecha_ultima_venta'],
                $value['qty'] . ' ' . $qty_status,
               // $store_data['name'],
                $value['price2'],
                $value['price3'],
                $value['price4'],
                $value['price5'],
                $value['fecha_actualizacion_precio'],
                $value['circunferencia'],
                $value['medidas_id'],
                $value['ancho'],
                $value['espesor'],
                $value['cue'],
                $value['dicar'],
                $value['location'],
                
                //$availability,
                $buttons
            );
            } elseif ($dataLevel == "is_almacen") {
                  $result['data'][$key] = array(
                //mostrar imagen $img,
                $value['sku'],
                $value['description'],
                        $value['location'],
                //$value['linea'],
                $value['medida_maquina'],
                $value['tiempo_surtido'],
                 $value['fecha_ultima_venta'],
                $value['qty'] . ' ' . $qty_status,
               // $store_data['name'],
                $value['price2'],
                $value['price3'],
                $value['price4'],
                $value['price5'],
                $value['fecha_actualizacion_precio'],
                $value['circunferencia'],
                $value['medidas_id'],
                $value['ancho'],
                $value['espesor'],
                $value['cue'],
                $value['dicar'],
              
                
                //$availability,
                $buttons
            );
            }elseif ($dataLevel == "is_Gerente_Ventas") {
                  $result['data'][$key] = array(
                //mostrar imagen $img,
                $value['sku'],
                $value['description'],
                //$value['linea'],
                $value['medida_maquina'],
                $value['tiempo_surtido'],
                 $value['fecha_ultima_venta'],
                $value['qty'] . ' ' . $qty_status,
               // $store_data['name'],
                      $value['price'],
                   $value['price2'],
                $value['price3'],
                $value['price4'],
                $value['price5'],
                $value['fecha_actualizacion_precio'],
                $value['circunferencia'],
                $value['medidas_id'],
                $value['ancho'],
                $value['espesor'],
                $value['cue'],
                $value['dicar'],
                $value['location'],
                
                //$availability,
                $buttons
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
        $this->load->model('Model_cubierta');
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
                    'price5' => $this->input->post('price5'),
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
                    'tiempo_surtido' => $this->input->post('tiempo_surtido'),
                    'fecha_ultima_venta' => $this->input->post('fecha_ultima_venta'),
                    'dias_ultima_venta' => $this->input->post('dias_ultima_venta'),
                    'traduccion' => $this->input->post('traduccion'),
                    'medidas_caracteristicas' => $this->input->post('medidas_caracteristicas'),
                    'serie_maquina' => $this->input->post('serie_maquina'),
                    'medida_maquina' => $this->input->post('medida_maquina'),
                    'modulo' => $this->input->post('modulo'),
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
                     /* Es para traerse el id del usuario */
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
                );

                $create = $this->model_cubierta->create($data);
                if ($create == true) {
                    $this->session->set_flashdata('success', 'Agregado correctamente');
                    redirect('cubierta/', 'refresh');
                } else {
                    $this->session->set_flashdata('errors', 'Error occurred!!');
                    redirect('cubierta/create', 'refresh');
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
                $this->render_template('cubierta/create', $this->data);

                /* } */
            }
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
                    'price5' => $this->input->post('price5'),
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
                    'tiempo_surtido' => $this->input->post('tiempo_surtido'),
                    'fecha_ultima_venta' => $this->input->post('fecha_ultima_venta'),
                    'dias_ultima_venta' => $this->input->post('dias_ultima_venta'),
                    'traduccion' => $this->input->post('traduccion'),
                    'medidas_caracteristicas' => $this->input->post('medidas_caracteristicas'),
                    'serie_maquina' => $this->input->post('serie_maquina'),
                    'medida_maquina' => $this->input->post('medida_maquina'),
                    'modulo' => $this->input->post('modulo'),
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
                     /* Es para traerse el id del usuario */
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
                );

                $create = $this->model_cubierta->create($data);
                if ($create == true) {
                    $this->session->set_flashdata('success', 'Agregado correctamente');
                    redirect('cubierta/', 'refresh');
                } else {
                    $this->session->set_flashdata('errors', 'Error occurred!!');
                    redirect('cubierta/create', 'refresh');
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
                $this->render_template('cubierta/create', $this->data);

                /* } */
            }
        }  else if ($dataLevel == "is_editor") {
            //*editor//

            /* $this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
              $this->form_validation->set_rules('sku', 'SKU', 'trim|required');
              $this->form_validation->set_rules('price', 'Price', 'trim|required');
              $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
              $this->form_validation->set_rules('store', 'Store', 'trim|required'); */
            $this->form_validation->set_rules('sku', 'Sku', 'trim|is_unique[cubierta.sku]');

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
                    'price5' => $this->input->post('price5'),
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
                    'tiempo_surtido' => $this->input->post('tiempo_surtido'),
                    'fecha_ultima_venta' => $this->input->post('fecha_ultima_venta'),
                    'dias_ultima_venta' => $this->input->post('dias_ultima_venta'),
                    'traduccion' => $this->input->post('traduccion'),
                    'medidas_caracteristicas' => $this->input->post('medidas_caracteristicas'),
                    'serie_maquina' => $this->input->post('serie_maquina'),
                    'medida_maquina' => $this->input->post('medida_maquina'),
                    'modulo' => $this->input->post('modulo'),
                    'proveedor_principal' => $this->input->post('proveedor_principal'),
                    'proveedor_secundario' => $this->input->post('proveedor_secundario')
                    ,
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
                        /* Es para traerse el id del usuario */
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
                );

                $create = $this->model_cubierta->create($data);
                if ($create == true) {
                    $this->session->set_flashdata('success', 'Successfully created');
                    redirect('cubierta/', 'refresh');
                } else {
                    $this->session->set_flashdata('errors', 'Error occurred!!');
                    redirect('cubierta/create', 'refresh');
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
                $this->render_template('cubierta/create', $this->data);

                /* } */
            }



            //*terima rol editor//
        } else if ($dataLevel == "is_almacen") {
            //*inicia rol almacen//

            /* $this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
              $this->form_validation->set_rules('sku', 'SKU', 'trim|required');
              $this->form_validation->set_rules('price', 'Price', 'trim|required');
              $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
              $this->form_validation->set_rules('store', 'Store', 'trim|required'); */
            $this->form_validation->set_rules('sku', 'Sku', 'trim|is_unique[cubierta.sku]');

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
                    'price5' => $this->input->post('price5'),
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
                    'tiempo_surtido' => $this->input->post('tiempo_surtido'),
                    'fecha_ultima_venta' => $this->input->post('fecha_ultima_venta'),
                    'dias_ultima_venta' => $this->input->post('dias_ultima_venta'),
                    'traduccion' => $this->input->post('traduccion'),
                    'medidas_caracteristicas' => $this->input->post('medidas_caracteristicas'),
                    'serie_maquina' => $this->input->post('serie_maquina'),
                    'medida_maquina' => $this->input->post('medida_maquina'),
                    'modulo' => $this->input->post('modulo'),
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
                    /* Es para traerse el id del usuario */
                     'id_usuario' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
                );

                $create = $this->model_cubierta->create($data);
                if ($create == true) {
                    $this->session->set_flashdata('success', 'Successfully created');
                    redirect('cubierta/', 'refresh');
                } else {
                    $this->session->set_flashdata('errors', 'Error occurred!!');
                    redirect('cubierta/create', 'refresh');
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
                $this->render_template('cubierta/create', $this->data);

                /* } */
            }



            //*termuna rol almacen//
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
                'fecha_actualizacion_precio' => $this->input->post('fecha_actualizacion_precio'),
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

            $update = $this->model_cubierta->update($data, $product_id);
            if ($update == true) {
                $this->session->set_flashdata('success', 'Actualizado Correctamente');
                redirect('cubierta/', 'refresh');
            } else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('cubierta/update/' . $product_id, 'refresh');
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





            $this->load->model('Model_cubierta');
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

                $product_data = $this->model_cubierta->getProductData($product_id);
                $this->data['product_data'] = $product_data;






                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('cubierta/edit', $this->data);
            } else if ($dataLevel == "is_editor") {
                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();

                $product_data = $this->model_cubierta->getProductData($product_id);
                $this->data['product_data'] = $product_data;

                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('cubierta/edit', $this->data);
            } else if ($dataLevel == "is_almacen") {
                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();

                $product_data = $this->model_cubierta->getProductData($product_id);
                $this->data['product_data'] = $product_data;

                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('cubiertas/edit', $this->data);
            }else if ($dataLevel == "is_servicio_a_clientes") {
                $this->data['attributes'] = $attributes_final_data;
                $this->data['brands'] = $this->model_brands->getActiveBrands();
                $this->data['category'] = $this->model_category->getActiveCategroy();
                $this->data['stores'] = $this->model_stores->getActiveStore();

                $product_data = $this->model_cubierta->getProductData($product_id);
                $this->data['product_data'] = $product_data;

                $this->load->view('header', $data);
                //$this->load->view('navbar', $data);
                $this->render_template('cubierta/edit', $this->data);
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
            $data = $this->model_cubierta->getProductData($id);
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
            $delete = $this->model_cubierta->remove($product_id);
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
      $data = $this->model_cubierta->getUserDetails($postData);

      echo json_encode($data);
      }
     */
}
