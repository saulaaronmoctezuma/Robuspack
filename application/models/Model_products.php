<?php
require 'Product/ProductPojo.php';
require 'Product/IModeloAbstracto.php';

class Model_products extends CI_Model  implements IModeloAbstracto {

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

       // $sql = "SELECT * FROM products ORDER BY id DESC";
        //$sql = "SELECT * FROM products p INNER JOIN stores s on s.id=p.store_id WHERE s.id=6 ORDER BY p.id asc";
        $sql= "SELECT * FROM stores s INNER JOIN products p on p.store_id=s.id where s.id=2 and p.linea <> 'OBS' and p.linea <> ' OBS' order by p.id desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getActiveProductData() {
        $sql = "SELECT * FROM products WHERE availability = ? ORDER BY id DESC";
        $query = $this->db->query($sql, array(1));
        return $query->result_array();
    }

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
        $ordered = $_POST['sku'];
        $stock = $this->db->query(" Select qty From products where sku='$ordered' ")->row()->qty;
        $data = array(
            'sku' => $_POST['sku'],
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
}
