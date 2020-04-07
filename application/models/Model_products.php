<?php
require 'Product/ProductPojo.php';
require 'IModeloAbstracto.php';

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

        $sql = "SELECT * FROM products ORDER BY id DESC";
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

    
     
    public function actualizar($data) {
        $registros = $this->input->post('sku');
        $this->db->where('sku',$registros);
        return $this->db->update('products',$data);
    }  
    
    
     public function obtener($id_products) {
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

  function getUsernames(){

    $this->db->select('email');
    $records = $this->db->get('users');
    $users = $records->result_array();
    return $users;
  }
  function getUserDetails($postData=array()){
 
    $response = array();
 
    if(isset($postData['email']) ){
 
      // Select record
      $this->db->select('*');
      $this->db->where('email', $postData['email']);
      $records = $this->db->get('users');
      $response = $records->result_array();
 
    }
 
    return $response;
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
  
}
