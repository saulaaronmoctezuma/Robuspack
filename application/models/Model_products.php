<?php
<<<<<<< HEAD
require 'Product/ProductPojo.php';
require 'Product/IModeloAbstracto.php';

class Model_products extends CI_Model  implements IModeloAbstracto {
=======

require 'Product/ProductPojo.php';
require 'IModeloAbstracto.php';

class Model_products extends CI_Model implements IModeloAbstracto {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
        //para que tenga el mismo header
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

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

    /* get the brand data */

    public function getProductData($id = null) {
        if ($id) {
            $sql = "SELECT * FROM products where id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

<<<<<<< HEAD
       // $sql = "SELECT * FROM products ORDER BY id DESC";
        //$sql = "SELECT * FROM products p INNER JOIN stores s on s.id=p.store_id WHERE s.id=6 ORDER BY p.id asc";
        $sql= "SELECT * FROM stores s INNER JOIN products p on p.store_id=s.id where s.id=2 and p.linea <> 'OBS' and p.linea <> ' OBS' order by p.id desc";
=======
        // $sql = "SELECT * FROM products ORDER BY id DESC";
        //$sql = "SELECT * FROM products p INNER JOIN stores s on s.id=p.store_id WHERE s.id=6 ORDER BY p.id asc";
        
         //$sql = "SELECT * FROM stores s INNER JOIN products p on p.store_id=s.id where s.id=2 and p.linea <> 'OBS' and p.linea <> ' OBS' order by p.id desc";
       
        $sql = "SELECT * FROM stores s INNER JOIN products p on p.store_id=s.id where s.id=2 order by p.id desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
     public function getProductDataInventory($id = null) {
        if ($id) {
            $sql = "SELECT * FROM products where id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM products ORDER BY id DESC";
        //$sql = "SELECT * FROM products p INNER JOIN stores s on s.id=p.store_id WHERE s.id=6 ORDER BY p.id asc";
        //$sql = "SELECT * FROM stores s INNER JOIN products p on p.store_id=s.id where s.id=2 and p.linea <> 'OBS' and p.linea <> ' OBS' order by p.id desc";
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $query = $this->db->query($sql);
        return $query->result_array();
    }

<<<<<<< HEAD
    public function getActiveProductData() {
        $sql = "SELECT * FROM products WHERE availability = ? ORDER BY id DESC";
        $query = $this->db->query($sql, array(1));
        return $query->result_array();
    }
=======
   public function getActiveProductData($sku = null) {
        $where = '';
        if(!is_null($sku)){
            $where = "where sku = '".$sku."'";
        }
        $sql = "SELECT * FROM products {$where} ORDER BY id DESC";
        $query = $this->db->query($sql, array(1));
        $arrayResult = $query->result_array();
        if(count($arrayResult)>0){
            if($arrayResult[0]["qty"]==0){
                return["success"=>false,"message" => "No hay stock"];
            }
            return $arrayResult;    
        }
        return ["success" =>false, "message" => "No existe el producto"];
    } /*
    public function getActiveProductData() {
        $sql = "SELECT * FROM products WHERE availability = ? ORDER BY id asc";
        $query = $this->db->query($sql, array(1));
        return $query->result_array();
    }*/
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

    public function create($data) {
        if ($data) {
            $insert = $this->db->insert('products', $data);
            return ($insert == true) ? true : false;
        }
    }

    public function update($data, $id) {
        if ($data && $id) {
            $this->db->where('id', $id);
            $update = $this->db->update('products', $data);
            return ($update == true) ? true : false;
        }
    }
<<<<<<< HEAD
=======
    
    
    public function updatePedimento($data, $id_pedimento) {
        if ($data && $id_pedimento) {
            $this->db->where('id_pedimento', $id_pedimento);
            $update = $this->db->update('pedimento', $data);
            return ($update == true) ? true : false;
        }
    }
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

    public function remove($id) {
        if ($id) {
            $this->db->where('id', $id);
            $delete = $this->db->delete('products');
            return ($delete == true) ? true : false;
        }
    }

    public function countTotalProducts() {
        $sql = "SELECT * FROM products";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

<<<<<<< HEAD
    
     
    public function actualizar() {
        
        /* $data = array(
            'sku' => $_POST['sku'],
            'qty' => $_POST['qty'],
              'tipo_de_documento' => $_POST['tipo_de_documento'],
               'numero_documento' => $_POST['numero_documento']  
        );

        
        
        $registros = $this->input->post('sku');
        $this->db->where('sku',$registros);
        $this->db->update('products',$data);
        
        
        
     
                $pedimentos = array(
                        
=======
    public function actualizar() {

        /* $data = array(
          'sku' => $_POST['sku'],
          'qty' => $_POST['qty'],
          'tipo_de_documento' => $_POST['tipo_de_documento'],
          'numero_documento' => $_POST['numero_documento']
          );



          $registros = $this->input->post('sku');
          $this->db->where('sku',$registros);
          $this->db->update('products',$data);




          $pedimentos = array(

          'numero' => $this->input->post('pedimento'),
          'cantidad' => $this->input->post('multiplicador'),
          'activo' => 'Activo',
          'id_producto' => $this->input->post('sidproducto')


          );
          $this->db->insert('pedimento',$pedimentos); */
        $pedimento = $this->input->post("pedimento");

        if ($pedimento != "") {
            $data = array(
                'sku' => $_POST['sku'],
                'qty' => $_POST['qty'],
                'tipo_de_documento' => $_POST['tipo_de_documento'],
                'numero_documento' => $_POST['numero_documento'],
                'pedimento' => $_POST['pedimento']
            );

            $registros = $this->input->post('sku');
            $this->db->where('sku', $registros);
            $this->db->update('products', $data);




            $pedimentos = array(
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                'numero' => $this->input->post('pedimento'),
                'cantidad' => $this->input->post('multiplicador'),
                'activo' => 'Activo',
                'id_producto' => $this->input->post('sidproducto')
<<<<<<< HEAD
               
                              
            );
                $this->db->insert('pedimento',$pedimentos);*/
                $pedimento = $this->input->post("pedimento");
         
         if($pedimento != "")
         {
         $data = array(
            'sku' => $_POST['sku'],
            'qty' => $_POST['qty'],
              'tipo_de_documento' => $_POST['tipo_de_documento'],
               'numero_documento' => $_POST['numero_documento'] , 
             'pedimento' => $_POST['pedimento'] 
        );

        $registros = $this->input->post('sku');
        $this->db->where('sku',$registros);
        $this->db->update('products',$data);
        
        
        
     
                $pedimentos = array(
                        
                'numero' => $this->input->post('pedimento'),
                'cantidad' => $this->input->post('multiplicador'),
                'activo' => 'Activo',
                'id_producto' => $this->input->post('sidproducto')
               
                              
            );
                $this->db->insert('pedimento',$pedimentos);
         }
         else
         {
                $data = array(
            'sku' => $_POST['sku'],
            'qty' => $_POST['qty'],
              'tipo_de_documento' => $_POST['tipo_de_documento'],
               'numero_documento' => $_POST['numero_documento']  ,
                     'pedimento' => $_POST['pedimento'] 
        );

        $registros = $this->input->post('sku');
        $this->db->where('sku',$registros);
        $this->db->update('products',$data);
        
         }
           
    }  

    public function updateBySku(){
       /* $ordered = $_POST['sku'];
        $pediment = $this->input->post("pediment");
        $stockPed = $this->db->query(" Select cantidad From pedimento where numero='$pediment' ")->row()->cantidad; 
        $stock = $this->db->query(" Select qty From products where sku='$ordered' ")->row()->qty;
        $data = array(
            'sku' => $_POST['sku'],
            'qty' => $stock -$_POST['qty']
              
        );
        $pedimentUpdate = array(
            "numero" => $pediment,
            "cantidad" => $stockPed - $_POST["qty"]

        );
        $registrosPedimento = $this->input->post('pediment');
        $this->db->where('numero',$registrosPedimento);
        $this->db->update('pedimento',$pedimentUpdate );

      //echo json_encode($data);      
        $registros = $this->input->post('sku');
        $this->db->where('sku',$registros);
       return  $this->db->update('products',$data);*/
       $pediment = $this->input->post("pediment");

       if ($pediment == "Sin Pedimento") {




           $ordered = $_POST['sku'];
           $pediment = $this->input->post("pediment");

           $stock = $this->db->query(" Select qty From products where sku='$ordered' ")->row()->qty;
           $data = array(
               'sku' => $_POST['sku'],
              // 'qty' => $stock - $_POST['qty']
             // 'qty' => $_POST['qty']

           );



           //echo json_encode($data);      
           $registros = $this->input->post('sku');
           $this->db->where('sku', $registros);
           return  $this->db->update('products', $data);
       } else {
           $ordered = $_POST['sku'];
           $pediment = $this->input->post("pediment");
          $id_producto = $this->input->post("id_producto");
           $stockPed = $this->db->query(" Select cantidad From pedimento where  id_producto='$id_producto' AND numero='$pediment' " )->row()->cantidad;
           $stock = $this->db->query(" Select qty From products where sku='$ordered' ")->row()->qty;
           $data = array(
               'sku' => $_POST['sku'],
               //'qty' => $stock - $_POST['qty']
               
             //  'qty' => $_POST['qty']

           );
           $pedimentUpdate = array(
               "numero" => $pediment,
               "cantidad" => $stockPed - $_POST["qty"]

           );
           $registrosPedimento = $this->input->post('pediment');
           $registrosID = $this->input->post('id_producto');
             $this->db->where('id_producto', $registrosID);
           $this->db->where('numero', $registrosPedimento);
           $this->db->update('pedimento', $pedimentUpdate);

           //echo json_encode($data);      
           $registros = $this->input->post('sku');
           $this->db->where('sku', $registros);
           return  $this->db->update('products', $data);
       }
    }

    public function updateBySkuRollback(){
=======
            );
            $this->db->insert('pedimento', $pedimentos);
        } else {
            $data = array(
                'sku' => $_POST['sku'],
                'qty' => $_POST['qty'],
                'tipo_de_documento' => $_POST['tipo_de_documento'],
                'numero_documento' => $_POST['numero_documento'],
                'pedimento' => $_POST['pedimento']
            );

            $registros = $this->input->post('sku');
            $this->db->where('sku', $registros);
            $this->db->update('products', $data);
        }
    }

    public function updateBySku() {
        /* $ordered = $_POST['sku'];
          $pediment = $this->input->post("pediment");
          $stockPed = $this->db->query(" Select cantidad From pedimento where numero='$pediment' ")->row()->cantidad;
          $stock = $this->db->query(" Select qty From products where sku='$ordered' ")->row()->qty;
          $data = array(
          'sku' => $_POST['sku'],
          'qty' => $stock -$_POST['qty']

          );
          $pedimentUpdate = array(
          "numero" => $pediment,
          "cantidad" => $stockPed - $_POST["qty"]

          );
          $registrosPedimento = $this->input->post('pediment');
          $this->db->where('numero',$registrosPedimento);
          $this->db->update('pedimento',$pedimentUpdate );

          //echo json_encode($data);
          $registros = $this->input->post('sku');
          $this->db->where('sku',$registros);
          return  $this->db->update('products',$data); */
        $pediment = $this->input->post("pediment");

        if ($pediment == "Sin Pedimento") {




            $ordered = $_POST['sku'];
            $pediment = $this->input->post("pediment");

            $stock = $this->db->query(" Select qty From products where sku='$ordered' ")->row()->qty;
            $data = array(
                'sku' => $_POST['sku'],
                'qty' => $stock - $_POST['qty']
            );

            //echo json_encode($data);      
            $registros = $this->input->post('sku');
            $this->db->where('sku', $registros);
            return $this->db->update('products', $data);



            /* $precio_compra = $this->db->query(" Select precio_compra From products where sku='$ordered' ")->row()->precio_compra;
              $data = array(
              'sku' => $_POST['sku'],
              'valor_almacen' => $precio_compra * $_POST['qty']

              );

              //echo json_encode($data);
              $act_valor_almacen = $this->input->post('sku');
              $this->db->where('sku', $act_valor_almacen);
              return  $this->db->update('products', $data);
             */
        } else {
            $ordered = $_POST['sku'];
            $pediment = $this->input->post("pediment");
          //  $ValorIdProduct = $this->input->post("ValorIdProduct");
            
            $id_producto = $this->input->post("id_producto");
            $stockPed = $this->db->query(" Select cantidad From pedimento where numero='$pediment' and id_producto='$id_producto'")->row()->cantidad;
            $stock = $this->db->query(" Select qty From products where sku='$ordered' ")->row()->qty;
            $data = array(
                'sku' => $_POST['sku'],
                'qty' => $stock - $_POST['qty']
            );
            $pedimentUpdate = array(
                "numero" => $pediment,
                "cantidad" => $stockPed - $_POST["qty"]
            );
            $registrosPedimento = $this->input->post('pediment');
            $this->db->where('numero', $registrosPedimento);
            $this->db->update('pedimento', $pedimentUpdate);

            //echo json_encode($data);      
            $registros = $this->input->post('sku');
            $this->db->where('sku', $registros);
            return $this->db->update('products', $data);
        }
    }

    public function updateBySkuRollback() {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $ordered = $_POST['sku'];
        $stock = $this->db->query(" Select qty From products where sku='$ordered' ")->row()->qty;
        $data = array(
            'sku' => $_POST['sku'],
<<<<<<< HEAD
            //'qty' => $stock  + $_POST['qty']
         //  'qty' =>  $_POST['qty']
              
        );
      //echo json_encode($data);      
        $registros = $this->input->post('sku');
        $this->db->where('sku',$registros);
       $this->db->update('products',$data);
       

       $pedimento = $_POST['numero'];
       $id_producto = $this->input->post("id_producto");
       $stockPedimento = $this->db->query(" Select cantidad From pedimento where numero='$pedimento' and id_producto='$id_producto'")->row()->cantidad;
       $updatePed = array(
           'numero' => $_POST['numero'],
           'cantidad' => $stockPedimento  + $_POST['qty']
             
       );
     //echo json_encode($data);      
       $this->db->where('numero',$pedimento);
   return $this->db->update('pedimento',$updatePed);
       
    }
    
    
    
     public function obtenerNofunciona($id_products) {
=======
            'qty' => $stock + $_POST['qty']
        );
        //echo json_encode($data);      
        $registros = $this->input->post('sku');
        $this->db->where('sku', $registros);
        $this->db->update('products', $data);


        $pedimento = $_POST['numero'];
        $stockPedimento = $this->db->query(" Select cantidad From pedimento where numero='$pedimento' ")->row()->cantidad;
        $updatePed = array(
            'numero' => $_POST['numero'],
            'cantidad' => $stockPedimento + $_POST['qty']
        );
        //echo json_encode($data);      
        $this->db->where('numero', $pedimento);
        return $this->db->update('pedimento', $updatePed);
    }

    public function obtenerNofunciona($id_products) {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $objj = $this->db->query(" Select * From products where id=$id_products");
        $obj = $objj->row();
        $dp = array('id' => $obj->id,
            'name' => $obj->name,
            'sku' => $obj->sku,
            'price' => $obj->price,
            'min' => $obj->min,
            'max' => $obj->max,
            'qty' => $obj->qty,
            'image' => $obj->image,
            'description' => $obj->description,
            'location' => $obj->location,
            'attribute_value_id' => $obj->attribute_value_id,
            'brand_id' => $obj->brand_id,
            'category_id' => $obj->category_id,
            'store_id' => $obj->store_id,
            'availability' => $obj->availability
        );
        return $dp;
    }

    public function add($objeto) {
        
    }

    public function delete($id) {
        
    }

    public function query() {
        
    }

    public function querybusqueda() {
        
    }

    public function refacciones() {
        
    }

<<<<<<< HEAD

 
  
  
  
   function getProducts(){

    $this->db->select('sku');
    $records = $this->db->get('products');
        $users = $records->result_array();
    return $users;
  }
  function getProductsDetails($postData=array()){
      
    $response = array();
 
    if(isset($postData['sku']) ){
 
      // Select record
      $this->db->select('*');
      $this->db->where('sku', $postData['sku']);
      $records = $this->db->get('products');
      $response = $records->result_array();
 
    }
 
    return $response;
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
      
        function getUsernames(){

    $this->db->select('numero');
    $records = $this->db->get('pedimento');
    $users = $records->result_array();
    return $users;
  }
  function getUserDetails($postData=array()){
 
    $response = array();
 
    if(isset($postData['numero']) ){
 
      // Select record
      $this->db->select('*');
      $this->db->where('numero', $postData['numero']);
      $records = $this->db->get('pedimento');
      $response = $records->result_array();
 
    }
 
    return $response;
  }
=======
    function getProducts() {

        $this->db->select('sku');
        $records = $this->db->get('products');
        $users = $records->result_array();
        return $users;
    }

    function getProductsDetails($postData = array()) {

        $response = array();

        if (isset($postData['sku'])) {

            // Select record
            $this->db->select('*');
            $this->db->where('sku', $postData['sku']);
            $records = $this->db->get('products');
            $response = $records->result_array();
        }

        return $response;
    }

    function getUsernames() {

        $this->db->select('numero');
        $records = $this->db->get('pedimento');
        $users = $records->result_array();
        return $users;
    }

    function getUserDetails($postData = array()) {

        $response = array();

        if (isset($postData['numero'])) {

            // Select record
            $this->db->select('*');
            $this->db->where('numero', $postData['numero']);
            $records = $this->db->get('pedimento');
            $response = $records->result_array();
        }

        return $response;
    }

    public function entradaInventario() {
        $user_id = $this->session->userdata('id');
        //$bill_no = 'ROBUSPACK-' . strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 25));
        $data = array(
            //'bill_no' => $bill_no,

            'numero_documento' => $this->input->post('bill_no'),
            'tipo_de_documento' => $this->input->post('tipo_de_documento'),
            // 'customer_name' => $this->input->post('customer_name'),
            'id_users' => $user_id,
        );

        $insert = $this->db->insert('entrada', $data);
        $id_entrada = $this->db->insert_id();

        $this->load->model('model_products');
        $this->load->model('model_orders');


        $count_sku = count($this->input->post('sku'));
        for ($x = 0; $x < $count_sku; $x++) {
            $items = array(
                //'id_product' => $_POST['sku'][$x],
                'stock' => $this->input->post('rate')[$x],
                'pieza_nuevas' => $this->input->post('nuevas_piezas')[$x],
                'total_de_piezas' => $this->input->post('total_de_piezas')[$x],
                'id_product' => $this->input->post('sku')[$x],
                'id_entradas' => $id_entrada,
                'pedimento' => $this->input->post('pedimento_')[$x]
            );

            $this->db->insert('entradas_por_producto', $items);

            // now decrease the stock from the product
            //$product_data = $this->model_products->getProductData($this->input->post('product')[$x]);
            //$qty = (int) $product_data['qty'] - (int) $this->input->post('qty')[$x];
            // $update_product = array('sku' => $qty);
            //$this->model_products->update($update_product, $this->input->post('product')[$x]);
        }

        return ($id_entrada) ? $id_entrada : false;
    }

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
}
