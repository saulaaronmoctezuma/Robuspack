<?php
require 'Product/ProductPojo.php';
<<<<<<< HEAD
//require 'IModeloAbstracto.php'; implements IModeloAbstracto 
require 'Product/IModeloAbstracto.php';
class Model_cubierta extends CI_Model implements IModeloAbstracto  {
=======
require 'IModeloAbstracto.php';

class Model_cubierta extends CI_Model  implements IModeloAbstracto {
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
        // no se utiliza$sql = "SELECT * FROM products ORDER BY id DESC";
        // si funciona $sql= "SELECT * FROM stores s INNER JOIN products p on p.store_id=s.id where s.id=1 order by p.id desc";
        
         $sql= "SELECT p.id, p.name, p.sku, 
p.price as price, 

p.price2 as price2,

p.price3 as price3,
 
p.price4 as price4,

p.price5 as price5,
if(p.fecha_actualizacion_precio > m.fecha_actualizacion_precio,p.fecha_actualizacion_precio,m.fecha_actualizacion_precio) as fecha_actualizacion_precio,
p.min, p.max, p.qty, p.image, p.description, p.location, p.area, p.attribute_value_id, p.brand_id, p.category_id, p.store_id, p.availability, p.linea, p.refacciones_consumibles, p.tiempo_surtido, p.fecha_ultima_venta, p.dias_ultima_venta, p.tipo_de_documento, p.numero_documento, p.traduccion, p.medidas_caracteristicas, p.serie_maquina, p.medida_maquina, p.modulo, p.tipo_maquina, p.proveedor_principal, p.proveedor_secundario, p.circunferencia, p.medidas_id, p.ancho, p.espesor, p.cue, p.dicar, p.pedimento, p.precio_de_compra, p.valor_almacen, p.indice_abc, p.cantidad_sugerida_a_solicitar, p.condicion, p.id_usuario, p.fecha_insercion, p.fecha_modificar FROM products p INNER join maquinaria m on TRIM(m.referencia)=TRIM(p.sku) WHERE p.store_id=1 order by p.id desc";
=======
        //$sql = "SELECT * FROM products ORDER BY id DESC";
         $sql= "SELECT * FROM stores s INNER JOIN products p on p.store_id=s.id where s.id=1 order by p.id desc";
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        
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
        
         $data = array(
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
                $this->db->insert('pedimento',$pedimentos);
           
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
