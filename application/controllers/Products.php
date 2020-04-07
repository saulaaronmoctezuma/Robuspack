    <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        $this->not_logged_in();

        $this->data['page_title'] = 'Refacciones';

        $this->load->model('model_products');
        $this->load->model('model_brands');
        $this->load->model('model_category');
        $this->load->model('model_stores');
        $this->load->model('model_attributes');
    }

    /*
     * It only redirects to the manage product page
     */

    
    
    public function ejemplo(){
    $users = $this->model_products->getUsernames();

    $data['users'] = $users;

    $this->load->view('user_view',$data);
  }

  public function userDetails(){
    // POST data
    $postData = $this->input->post();

    // get data
    $data = $this->model_products->getUserDetails($postData);

    echo json_encode($data);
  }
    
    
  public function agregar(){
      
      
      
      
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

          $users = $this->model_products->getProducts();

    $data['users'] = $users;

    $this->load->view('products/entrada',$data);  
            $this->load->view('footer');
        }
      
      
      
      
   
    
    
  }

  
   public function productsDetails(){
    // POST data
    $postData = $this->input->post();

    // get data
    $data = $this->model_products->getProductsDetails($postData);

    echo json_encode($data);
  }
  

    
  
     
    public function obtener($id_cliente) {
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
        }else if ($dataLevel == "is_editor") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            //se trae el arreglo de los datos seleccionados por el di

            $data = array();
            $data = $this->Model_products->obtener($id_cliente);
            $this->load->view('Cliente/modificarCliente', $data);

            $this->load->view('footer');
        }else if ($dataLevel == "is_servicio_a_clientes") {

            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            //agregar para el select de refacción de tabla maquinaria
            //se trae el arreglo de los datos seleccionados por el di

            $data = array();
            $data = $this->ClienteModel_productsModelo->obtener($id_cliente);
            $this->load->view('Cliente/modificarCliente', $data);

            $this->load->view('footer');
        }else {
            redirect(site_url() . 'main/');
        }
    }

    
        public function productModificar() {
        $data = array(
            
            'sku' => $_POST['sku'],
           
            'qty' => $_POST['qty']
           
        );

        $this->load->model('Model_products');
        $this->Model_products->actualizar($data);
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
            $this->load->view('navbar', $data);
            $this->render_template('products/index', $this->data);
            /* } */
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
            // button
            $buttons = '';
            /* if(in_array('updateProduct', $this->permission)) { */
            $buttons .= '<a href="' . base_url('products/update/' . $value['id']) . '" class="btn btn-default"><i class="fa fa-pencil"></i></a>';
            /* } */

            /* if(in_array('deleteProduct', $this->permission)) { */
            $buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc(' . $value['id'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
            /* } */


            $img = '<img src="' . base_url($value['image']) . '" alt="' . $value['name'] . '" class="img-circle" width="50" height="50" />';

            $availability = ($value['availability'] == 1) ? '<span class="label label-success">Active</span>' : '<span class="label label-warning">Inactive</span>';

            $qty_status = '';
            if ($value['qty'] <= 10) {
                $qty_status = '<!--<span class="label label-warning">Low !</span>-->';
            } else if ($value['qty'] <= 0) {
                $qty_status = '<!--<span class="label label-danger">Out of stock !</span>-->';
            }


            $result['data'][$key] = array(
                $img,
                $value['sku'],
                $value['name'],
                    $value['price'],
                $value['qty'] . ' ' . $qty_status,
                $store_data['name'],
                $value['area'],
                //$availability,
                $buttons
            );
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

            /*$this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
            $this->form_validation->set_rules('sku', 'SKU', 'trim|required');
            $this->form_validation->set_rules('price', 'Price', 'trim|required');
            $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
            $this->form_validation->set_rules('store', 'Store', 'trim|required');*/
            $this->form_validation->set_rules('sku', 'Sku', 'trim|is_unique[products.sku]');
     
            //$this->form_validation->set_rules('availability', 'Availability', 'trim|required');


            if ($this->form_validation->run() == TRUE) {
                // true case
                $upload_image = $this->upload_image();

                $data = array(
                    'name' => $this->input->post('product_name'),
                    'sku' => $this->input->post('sku'),
                    'price' => $this->input->post('price'),
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
                $this->load->view('navbar', $data);
                $this->render_template('products/create', $this->data);

                /* } */
            }
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

        if (!$product_id) {
            redirect('dashboard', 'refresh');
        }

        $this->form_validation->set_rules('product_name', 'Product name', 'trim|required');
        $this->form_validation->set_rules('sku', 'SKU', 'trim|required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required');
        $this->form_validation->set_rules('qty', 'Qty', 'trim|required');
        $this->form_validation->set_rules('store', 'Store', 'trim|required');
        
        
        // $this->form_validation->set_rules('availability', 'Availability', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            // true case

            $data = array(
                'name' => $this->input->post('product_name'),
                'sku' => $this->input->post('sku'),
                'price' => $this->input->post('price'),
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
            );


            if ($_FILES['product_image']['size'] > 0) {
                $upload_image = $this->upload_image();
                $upload_image = array('image' => $upload_image);

                $this->model_products->update($upload_image, $product_id);
            }

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
            $this->load->view('navbar', $data);
            $this->render_template('products/edit', $this->data);
            
            }
        }
    }
    
    
  	/*
    * If the validation is not valid, then it provides the validation error on the json format
    * If the validation for each input is valid then it updates the data into the database and 
    returns a n appropriate message in the json format.
    */
    
    
    public function fetchProductDataById($id) 
	{
		if($id) {
			$data = $this->model_products->getProductData($id);
			echo json_encode($data);
		}
	}
        
        
	public function updateStock($id)
	{
		/*if(!in_array('updateStore', $this->permission)) {
			redirect('dashboard', 'refresh');
		}*/

		$response = array();

		if($id) {
			$this->form_validation->set_rules('edit_store_name', 'Store name', 'trim|required');
			$this->form_validation->set_rules('edit_active', 'Active', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
	        	$data = array(
	        		'name' => $this->input->post('edit_store_name'),
	        		'active' => $this->input->post('edit_active'),	
	        	);

	        	$update = $this->model_stores->update($data, $id);
	        	if($update == true) {
	        		$response['success'] = true;
	        		$response['messages'] = 'Actualizado correctamente';
	        	}
	        	else {
	        		$response['success'] = false;
	        		$response['messages'] = 'Error al actualizar';			
	        	}
	        }
	        else {
	        	$response['success'] = false;
	        	foreach ($_POST as $key => $value) {
	        		$response['messages'][$key] = form_error($key);
	        	}
	        }
		}
		else {
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
    
    
    
    
    
    
    
    
    
    
    
    



    

}
