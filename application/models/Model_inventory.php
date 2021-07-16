<?php

class Model_inventory extends CI_Model {

    public function __construct() {
        parent::__construct();


        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('Model_inventory');
        //para que tenga el mismo header
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

    /* get the orders data */

    public function getInventoryData($id = null) {
        if ($id) {
            $sql = "SELECT * FROM products p INNER JOIN entradas_por_producto ep on p.id=ep.id_product INNER JOIN entrada e on ep.id_entradas=e.id_entrada group by e.id_entrada HAVING e.id_entrada = ?";
            //    $sql = "SELECT * FROM orders WHERE id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        // $sql = "SELECT * FROM orders ORDER BY id DESC";
        //$sql = "SELECT * FROM orders o INNER JOIN clientes_robuspack c ON c.clave=o.customer_name ORDER BY id DESC";
        //$sql ="SELECT * FROM orders as o INNER JOIN orders_item as oi ON o.id=oi.order_id INNER JOIN products p ON oi.product_id=p.id INNER JOIN clientes_robuspack c ON c.clave=o.customer_address ORDER BY o.id desc";


        /* $sql = "SELECT * FROM products p "
          . "INNER JOIN entradas_por_producto ep on p.id=ep.id_product "
          . "INNER JOIN entrada e on ep.id_entradas=e.id_entrada "
          . " group by e.id_entrada"
          . " ORDER BY p.id asc"; */
        $sql = "select*from entrada order by entrada.id_entrada DESC";



        $query = $this->db->query($sql);
        return $query->result_array();
    }

    // get the orders item data
    public function getInventoryItemData($order_id = null) {
        if (!$order_id) {
            return false;
        }

        $sql = "SELECT * FROM entradas_por_producto WHERE id_entradas = ?";
        $query = $this->db->query($sql, array($order_id));
        return $query->result_array();
    }

    public function create() {
        $user_id = $this->session->userdata('id');
        
        //$bill_no = 'ROBUSPACK-' . strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 25));
        $data = array(
            //'bill_no' => $bill_no,
            'tipo_de_documento' => $this->input->post('tipo_de_documento'),
            'numero_documento' => $this->input->post('numero_documento'),
            /* 'customer_name' => $this->input->post('customer_name'),
              'customer_address' => $this->input->post('customer_address'),
              'customer_phone' => $this->input->post('customer_phone'),
             */ 'date_time' => strtotime(date('Y-m-d h:i:s a')),
            /*  'gross_amount' => $this->input->post('gross_amount_value'),
              'service_charge_rate' => $this->input->post('service_charge_rate'),
              'service_charge' => ($this->input->post('service_charge_value') > 0) ? $this->input->post('service_charge_value') : 0,
              'vat_charge_rate' => $this->input->post('vat_charge_rate'),
              'vat_charge' => ($this->input->post('vat_charge_value') > 0) ? $this->input->post('vat_charge_value') : 0,
              'net_amount' => $this->input->post('net_amount_value'),
              'discount' => $this->input->post('discount'),
              'paid_status' => 2, */
            'id_users' => $user_id,
            
            'consecutivo' => $this->input->post('consecutivo'),
        );

        $insert = $this->db->insert('entrada', $data);
        $order_id = $this->db->insert_id();

        $this->load->model('model_products');

        $count_product = count($this->input->post('product'));
        for ($x = 0; $x < $count_product; $x++) {








            $pedimento1 = $this->input->post("numero_de_pedimento");
            if ($pedimento1 != "") {


                $items = array(
                    'id_entradas' => $order_id,
                    'id_product' => $this->input->post('product')[$x],
                    'pieza_nuevas' => $this->input->post('qty')[$x],
                    'stock' => $this->input->post('rate')[$x],
                    'total_de_piezas' => $this->input->post('qty')[$x] + $this->input->post('rate')[$x],
                    'pedimento' => $this->input->post('numero_de_pedimento'),
                );

                $this->db->insert('entradas_por_producto', $items);
            } else {
                  $items = array(
                    'id_entradas' => $order_id,
                    'id_product' => $this->input->post('product')[$x],
                    'pieza_nuevas' => $this->input->post('qty')[$x],
                    'stock' => $this->input->post('rate')[$x],
                    'total_de_piezas' => $this->input->post('qty')[$x] + $this->input->post('rate')[$x],
                    'pedimento' => 'Sin Pedimento',
                );

                $this->db->insert('entradas_por_producto', $items);
            }






























            // now decrease the stock from the product
            $product_data = $this->model_products->getProductData($this->input->post('product')[$x]);
            $qty = (int) $product_data['qty'] + (int) $this->input->post('qty')[$x];

            $update_product = array('qty' => $qty);


            $this->model_products->update($update_product, $this->input->post('product')[$x]);

            /*

              // actualizamos el valor en almacen
              $product_data = $this->model_products->getProductData($this->input->post('product')[$x]);
              $valor_almacen = (float) $product_data['precio_de_compra'] * (int) $product_data['qty'];

              $product_data = array('valor_almacen' => $valor_almacen);
              $this->model_products->update($product_data, $this->input->post('product')[$x]);



             */


            /*

              // actualizamos el valor de la fecha de ultima venta
              $result = $this->User_model->getAllSettings();
              date_default_timezone_set("America/Mexico_City");
              $tz = $result->timezone;

              $now = new DateTime();
              $now->setTimezone(new DateTimezone($tz));
              $fechaActual = $now->format('Y-m-d');

              $product_data = $this->model_products->getProductData($this->input->post('product')[$x]);
              $fecha_ultima_venta = $fechaActual;

              $product_data = array('fecha_ultima_venta' => $fecha_ultima_venta);


              $this->model_products->update($product_data, $this->input->post('product')[$x]);
             */
            $pedimento = $this->input->post("numero_de_pedimento");
            if ($pedimento != "") {
                $pedimento = array(
                    //'order_id' => $order_id,
                    'id_producto' => $this->input->post('product')[$x],
                    'numero' => $this->input->post('numero_de_pedimento'),
                    // 'numero' => $this->input->post('numero_de_pedimento'),
                    'cantidad' => $this->input->post('qty')[$x],
                    'activo' => 'Activo',
                    'id_entradas' => $order_id,
                );

                $this->db->insert('pedimento', $pedimento);
            } else {
                $pedimento = array(
                    //'order_id' => $order_id,
                    'id_producto' => $this->input->post('product')[$x],
                    'numero' => 'Sin Pedimento',
                    'cantidad' => $this->input->post('qty')[$x],
                    'activo' => 'Activo',
                    'id_entradas' => $order_id,
                );

                $this->db->insert('pedimento', $pedimento);
            }
        }

        return ($order_id) ? $order_id : false;
    }

    public function countOrderItem($order_id) {
        if ($order_id) {
            $sql = "SELECT * FROM orders_item WHERE order_id = ?";
            $query = $this->db->query($sql, array($order_id));
            return $query->num_rows();
        }
    }

    public function update($id) {
        if ($id) {
            $user_id = $this->session->userdata('id');
            // fetch the order data 

            $data = array(
                'bill_no' => $this->input->post('bill_no'),
                'customer_name' => $this->input->post('customer_name'),
                'customer_address' => $this->input->post('customer_address'),
                'customer_phone' => $this->input->post('customer_phone'),
                'gross_amount' => $this->input->post('gross_amount_value'),
                'service_charge_rate' => $this->input->post('service_charge_rate'),
                'service_charge' => ($this->input->post('service_charge_value') > 0) ? $this->input->post('service_charge_value') : 0,
                'vat_charge_rate' => $this->input->post('vat_charge_rate'),
                'vat_charge' => ($this->input->post('vat_charge_value') > 0) ? $this->input->post('vat_charge_value') : 0,
                'net_amount' => $this->input->post('net_amount_value'),
                'discount' => $this->input->post('discount'),
                'paid_status' => $this->input->post('paid_status'),
                'user_id' => $user_id
            );

            $this->db->where('id', $id);
            $update = $this->db->update('orders', $data);

            // now the order item 
            // first we will replace the product qty to original and subtract the qty again
            $this->load->model('model_products');
            $get_order_item = $this->getOrdersItemData($id);
            foreach ($get_order_item as $k => $v) {
                $product_id = $v['product_id'];
                $qty = $v['qty'];
                // get the product 
                $product_data = $this->model_products->getProductDataInventorygetInventoryData($product_id);
                $update_qty = $qty + $product_data['qty'];
                $update_product_data = array('qty' => $update_qty);

                // update the product qty
                $this->model_products->update($update_product_data, $product_id);
            }

            // now remove the order item data 
            $this->db->where('order_id', $id);
            $this->db->delete('orders_item');

            // now decrease the product qty
            $count_product = count($this->input->post('product'));
            for ($x = 0; $x < $count_product; $x++) {
                $items = array(
                    'order_id' => $id,
                    'product_id' => $this->input->post('product')[$x],
                    'qty' => $this->input->post('qty')[$x],
                    'rate' => $this->input->post('rate_value')[$x],
                    'amount' => $this->input->post('amount_value')[$x],
                );
                $this->db->insert('orders_item', $items);

                // now decrease the stock from the product
                $product_data = $this->model_products->getProductData($this->input->post('product')[$x]);
                $qty = (int) $product_data['qty'] - (int) $this->input->post('qty')[$x];

                $update_product = array('qty' => $qty);
                $this->model_products->update($update_product, $this->input->post('product')[$x]);
            }

            return true;
        }
    }

    public function remove($id) {
        if ($id) {
            $this->db->where('id', $id);
            $delete = $this->db->delete('orders');

            $this->db->where('order_id', $id);
            $delete_item = $this->db->delete('orders_item');
            return ($delete == true && $delete_item) ? true : false;
        }
    }

    public function countTotalPaidInventory() {
        $sql = "SELECT * FROM orders WHERE paid_status = ?";
        $query = $this->db->query($sql, array(1));
        return $query->num_rows();
    }

    //
    function getCliente() {
        $grupo = $this->db->select('id_cliente, cliente')->where('id_cliente <> 248')->order_by("cliente", "asc")
                ->get('cliente')
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

        foreach ($grupo as $option) {
            $options_arr[$option->cliente] = $option->cliente;
        }

        return $options_arr;
    }

    function getProducts() {

        $this->db->select('clave');
        $records = $this->db->get('clientes_robuspack');
        $users = $records->result_array();
        return $users;
    }

    function getProductsDetails($postData = array()) {

        $response = array();

        if (isset($postData['clave'])) {

            // Select record
            $this->db->select('*');
            $this->db->where('clave', $postData['clave']);
            $records = $this->db->get('clientes_robuspack');
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
            $this->db->join('products', 'pedimento.id_producto=products.id');
            $this->db->where('pedimento.numero', $postData['numero']);
            $this->db->where('products.sku', $postData['sku']);
            $this->db->order_by('products.id', 'asc');
            //$this->db->where('id_producto','SELECT id FROM products WHERE products.sku'.$postData['id_sku'].')');
            $records = $this->db->get('pedimento');
            $response = $records->result_array();
        }

        return $response;
    }

    function get_category() {
        //$query = $this->db->get('products');
        $query = $this->db->query("SELECT * FROM products order by id asc");
        return $query;
    }

    function get_sub_category($category_id) {
       
        $query = $this->db->order_by('numero', 'asc')->get_where('pedimento', array('id_producto =' => $category_id));
        return $query;
    }

    /*
      $nulo = 0;
      //$query = $this->db->order_by('numero', 'asc')->get_where('pedimento', array('id_producto =' =>  $category_id, 'cantidad >' => $nulo  ));
      $registros = $this->input->post('sku');

      $query = $this->db->query("SELECT * FROM pedimento pe inner join products pro on pro.id=pe.id_producto where pe.id_producto = $category_id and pe.cantidad > $nulo");
      return $query; */

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
                'id_entradas' => $id_entrada,
                //'id_product' => $_POST['sku'][$x],
                'id_product' => $count_sku,
                'stock' => $this->input->post('rate')[$x],
                'pieza_nuevas' => $this->input->post('nuevas_piezas')[$x],
                'total_de_piezas' => $this->input->post('total_de_piezas')[$x],
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

}
