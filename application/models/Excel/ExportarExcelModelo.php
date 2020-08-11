f<?php


class ExportarExcelModelo extends CI_Model {

    
        public function __construct() {
        parent::__construct();

        $this->load->database();
          $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
         $this->load->library('session');
         //poner para el poner selet en un formulario
         $this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');
         //para que tenga el mismo header
          $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
        
    }

    
    // Descargar Excel de Control SIC
    public function ListaClienteRefacciones() {

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
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*')->from('venta')->join('users', 'venta.id=users.id')->order_by('users.first_name', 'asc')->get();
            return $query->result();
        }
        else   if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*')->from('venta')->join('users', 'venta.id=users.id')->order_by('users.first_name', 'asc')->get();
            return $query->result();
        }
        else   if ($dataLevel == "is_servicio_a_clientes") {
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*')->from('venta')->join('users', 'venta.id=users.id')->order_by('users.first_name', 'asc')->get();
            return $query->result();
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_refacciones") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*')->from('venta')->join('users', 'venta.id=users.id')->where('users.id= ', $dataLevel)->get();
            return $query->result();
        }else if ($dataLevel == "is_maquinaria_refacciones") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*')->from('venta')->join('users', 'venta.id=users.id')->where('id=', $dataLevel)->get();
            return $query->result();
        } else    if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*')->from('venta')->join('users', 'venta.id=users.id')->get();
            return $query->result();
        }
        else {
            redirect(site_url() . 'main/');
        }
    }
    
    
      public function ListaConsumibles() {

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
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select(['referencia', 'fecha', 'fabricante', 'maquina',
                        'precio1','precio2','precio3','precio4','precio5','pcexwork','pcfob','pccif','pccip', 'ancho', 'espesor','diametro', 'empresa_competencia_1',
                        'empresa_competencia_2', 'inventario','fecha_corte_rotacion'
                    ])->from('maquinaria')->get();
            return $query->result();
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_editor") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select(['referencia', 'fecha', 'fabricante', 'maquina',
                        'precio1','precio2','precio3','precio4','precio5','pcexwork','pcfob','pccif','pccip', 'ancho', 'espesor','diametro', 'empresa_competencia_1',
                        'empresa_competencia_2', 'inventario','fecha_corte_rotacion'
                    ])->from('maquinaria')->get();
             // ])->from('maquinaria')->where('id= ', $dataLevel)->get();
            return $query->result();
        } else if ($dataLevel == "is_refacciones") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select(['referencia', 'fecha', 'fabricante', 'maquina',
                        'precio1','precio2','precio3','precio4','precio5','pcexwork','pcfob','pccif','pccip', 'ancho', 'espesor','diametro', 'empresa_competencia_1',
                        'empresa_competencia_2', 'inventario','fecha_corte_rotacion'
                    ])->from('maquinaria')->get();
             // ])->from('maquinaria')->where('id= ', $dataLevel)->get();
            return $query->result();
        }
        else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    public function ListaEmpresa() {
        //consulta de los datos que va a descargar en excel
            $query = $this->db->select(['estado', 'ciudad', 'nombre_empresa', 'estatus',
                        'vendedor', 'nombre', 'cargo','email', 'email2',
                        'email3', 'pag_web','marketing','tel1','tel2','tel3','direccion','dom_secundario','cp','integrados',
                        'corrugadora','sheet','single','comercializadora','litografia',
                        'flexos','volumen','comentarios'
                    ])->from('empresa')->get();
            return $query->result();
        }
        
        
           public function ListaCalendario() {

    

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
           //consulta de los datos que va a descargar en excel
         
            
            $query = $this->db->query("SELECT events.title, events.description, DATE_FORMAT(events.start, '%d/%m/%Y') AS start, DATE_FORMAT(events.end, '%d/%m/%Y') AS end FROM events order by events.start asc");
            
            return $query->result(); 
           /* $query = $this->db->select('*'
                    )->from('events')->order_by("start", "asc")->get();
            return $query->result();*/
        } else if ($dataLevel == "is_editor") {
           //consulta de los datos que va a descargar en excel
            $query = $this->db->query("SELECT events.title, events.description, DATE_FORMAT(events.start, '%d/%m/%Y') AS start, DATE_FORMAT(events.end, '%d/%m/%Y') AS end FROM events order by events.start asc");
            
            return $query->result(); 
        } else if ($dataLevel == "is_refacciones") {
           //consulta de los datos que va a descargar en excel
            $query = $this->db->query("SELECT events.title, events.description, DATE_FORMAT(events.start, '%d/%m/%Y') AS start, DATE_FORMAT(events.end, '%d/%m/%Y') AS end FROM events order by events.start asc");
            
            return $query->result(); 
        }else if ($dataLevel == "is_Gerente_Ventas") {
           //consulta de los datos que va a descargar en excel
            $query = $this->db->query("SELECT events.title, events.description, DATE_FORMAT(events.start, '%d/%m/%Y') AS start, DATE_FORMAT(events.end, '%d/%m/%Y') AS end FROM events order by events.start asc");
            
            return $query->result(); 
        }else {
            redirect(site_url() . 'Calendario/');
        }
        
        
          
        } 
       
    
     public function ListaFuventas() {

        
        
         /*  //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*'
                    )->from('fuventas')->get();
            return $query->result();
        }
        */
         $query = $this->db->query("SELECT f.ref,f.cliente,f.direccion, f.codigo, f.tipo_de_prod, f.rfc, f.factura, f.facturapdf, f.remision,
fecha_de_remision
, f.orden_compra, f.cantidad, f.pu_usd, f.subtotal, f.iva, f.total_usd,
 DATE_FORMAT(f.fecha , '%d/%m/%Y') AS fecha , 

f.pedimento, 

fecha_pedimento, 

f.dias_de_credito, 

 DATE_FORMAT(f.fecha_vencimiento, '%d/%m/%Y') AS fecha_vencimiento,

 DATE_FORMAT(f.fecha_de_pago, '%d/%m/%Y') AS fecha_de_pago, 

f.status_de_pago, 
f.refacturacion, f.nueva, f.observaciones, f.vendedor ,
 DATE_FORMAT(f.fecha_de_cobro_de_comisiones, '%d/%m/%Y') AS fecha_de_cobro_de_comisiones,
f.fecha_insercion, 
f.fecha_modificacion,f.id from fuventas f");
            
     return $query->result();}
     
        
          public function ListaFucompras() {

        
        
           //consulta de los datos que va a descargar en excel
          //  $query = $this->db->select('*' )->from('fucompras')->get();
            
            
            
            $query = $this->db->query("SELECT id_fucompras, ref, estatus, compania_importadora, cliente_proveedor, awb, courier, clave, tipo_de_prod, descripcion, factura, imn, ocv, qty, pu_usd, total_usd, tipo_de_embarque, tc_pedimento, importacion_por_partida_pz_mxn, importacion_por_partida_pz_usd, impx_unidad, costo_total_compra_usd_lab_qro, costo_unitario_compra_usd_lab_qro, (com/100) as com,cm, cm_c, "
                    . "ent, pedimento, fecha_pedimento, valor_aduana, (arancel_igi/100) as  arancel_igi, arancel, dta, iva_del_pedimento, costo_del_flete_mxn, honorarios_courier, costo_del_flete_usd, pv_extra_bajo_ref_x_pz, utilidad_refx_pz, (utilidad/100) as utilidad, observaciones, fecha_pi, codigo_arancelario, factura_proveedor, pedimentopdf, honorarios_importacion, fecha_insercion, fecha_modificacion, id from fucompras");
            
            return $query->result();
        }
        
         public function ListaFuvservicio() {

           //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*'
                    )->from('fuvservicio')->get();
            return $query->result();
        }
     
          // get employee list
    public function ListaClienteSeguimiento() {

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
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select(['grupo', 'cliente', 'prioridad', 'estatus',
                        'necesidad', 'fecha_cotizacion', 'fecha_contactar','compromiso', 'notas'
                    ])->from('cliente_seguimiento')->get();
            return $query->result();
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_refacciones") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select(['grupo', 'cliente', 'prioridad', 'estatus',
                        'necesidad', 'fecha_cotizacion', 'fecha_contactar','compromiso', 'notas'
                    ])->from('cliente_seguimiento')->where('id= ', $dataLevel)->get();
            return $query->result();
        }//condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_maquinaria") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select(['grupo', 'cliente', 'prioridad', 'estatus',
                        'necesidad', 'fecha_cotizacion', 'fecha_contactar','compromiso', 'notas'
                    ])->from('cliente_seguimiento')->where('id= ', $dataLevel)->get();
            return $query->result();
        }  else if ($dataLevel == "is_maquinaria_refacciones") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select(['grupo', 'cliente', 'prioridad', 'estatus',
                        'necesidad', 'fecha_cotizacion', 'fecha_contactar','compromiso', 'notas'
                    ])->from('cliente_seguimiento')->where('id= ', $dataLevel)->get();
            return $query->result();
        }//condicions que realice la consulta solo si es refacciones

//condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_medicion") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select(['grupo', 'cliente', 'prioridad', 'estatus',
                        'necesidad', 'fecha_cotizacion', 'fecha_contactar','compromiso', 'notas'
                    ])->from('cliente_seguimiento')->where('id= ', $dataLevel)->get();
            return $query->result();
        }else if ($dataLevel == "is_editor") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select(['grupo', 'cliente', 'prioridad', 'estatus',
                        'necesidad', 'fecha_cotizacion', 'fecha_contactar','compromiso', 'notas'
                    ])->from('cliente_seguimiento')->get();
            return $query->result();
        } else  if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select(['grupo', 'cliente', 'prioridad', 'estatus',
                        'necesidad', 'fecha_cotizacion', 'fecha_contactar','compromiso', 'notas'
                    ])->from('cliente_seguimiento')->get();
            return $query->result();
        } else  if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select(['grupo', 'cliente', 'prioridad', 'estatus',
                        'necesidad', 'fecha_cotizacion', 'fecha_contactar','compromiso', 'notas'
                    ])->from('cliente_seguimiento')->join('users', 'cliente_seguimiento.id=users.id')->where("users.id='11' OR  users.id='12' OR users.id='13'")->get();
            return $query->result();
        }
        
        
        else {
            redirect(site_url() . 'main/');
        }
    }
    
    // Descargar Excel de Cliente
    public function ListaCliente() {

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
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*')->from('cliente')->order_by('cliente.grupo','asc')->get();
             /* $query = $this->db->query('SELECT * from Cliente');*/
            return $query->result();
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_editor") {

        //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*')->from('cliente')->get();
            return $query->result();
        
        }else if ($dataLevel == "is_credito") {

          //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*')->from('cliente')->get();
            return $query->result();
        } 
        else {
            redirect(site_url() . 'main/');
        }
    }
    
    public function ListaMaximoMinimo() {

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
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*')->from('mayo_2019_maximo_minimo')->get();
            return $query->result();
        }
       
        else if ($dataLevel == "is_editor") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*')->from('mayo_2019_maximo_minimo')->get();
            return $query->result();
        }//
        
        else {
            redirect(site_url() . 'main/');
        }
    }
    
        public function ListaMaximoMinimo2() {

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
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*')->from('max_min_prueba_beta_a_entregar')->get();
            return $query->result();
        }
       
        else if ($dataLevel == "is_editor") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*')->from('max_min_prueba_beta_a_entregar')->get();
            return $query->result();
        }//
        
        else {
            redirect(site_url() . 'main/');
        }
    }
    
     public function ListaRotacionInventario2() {

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
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select( '*'
                    )->from('rotacion_inventario_prueba')->get();
            return $query->result();
        }
       //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_editor") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*'
                    )->from('rotacion_inventario_prueba')->get();
            return $query->result();
        }//
        else if ($dataLevel == "is_Gerente_Ventas") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*'
                    )->from('rotacion_inventario_prueba')->get();
            return $query->result();
        }else if ($dataLevel == "is_director") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*'
                    )->from('rotacion_inventario_prueba')->get();
            return $query->result();
        }
        else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    public function ListaRotacionInventario() {

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
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            $query = $this->db->select( '*'
                    )->from('mayo_2019_rotacion_inventario')->get();
            return $query->result();
        }
       //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "mayo_2019_rotacion_inventario") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*'
                    )->from('mayo_2019_rotacion_inventario')->get();
            return $query->result();
        }//
        else if ($dataLevel == "is_Gerente_Ventas") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*'
                    )->from('mayo_2019_rotacion_inventario')->get();
            return $query->result();
        }else if ($dataLevel == "is_director") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*'
                    )->from('mayo_2019_rotacion_inventario')->get();
            return $query->result();
        }
        else {
            redirect(site_url() . 'main/');
        }
    }
                   
    
    
    
    public function ListaRotacionInventarioR() {

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
            /* Para traerse el id del usuario */

            //consulta de los datos que va a descargar en excel
            /*$query = $this->db->select( '*'
                    )->from('rotacion_inventario_rodrigo')->get();*/
             $query = $this->db->query("select r.codigo,
DATE_FORMAT(r.fecha_corte_rotacion, '%d/%m/%Y') fecha_corte_rotacion
,
DATE_FORMAT(r.pedido_inteligente, '%d/%m/%Y') pedido_inteligente
,
r.suma_total_requerido_mensual_con_oc_y_consignacion
, r.suma_total_requerido_trimestral_con_oc_y_consignacion,
r.inventario,r.piezas_a_recibir,
r.piezas_requeridas_con_oc_consig_trimestral, 
r.meses_cubiertos,
DATE_FORMAT(r.fecha_cubierta, '%d/%m/%Y' ) fecha_cubierta,
r.total_mensual_sin_oc, r.informativo_prospectacion_mercado, r.pc_fob ,
r.descripcion,r.grupo,r.cliente, r.cantidad_maxima,r.fecha_ultimo_consumo,

r.periodo_surtimiento,
r.fecha_requiere_piezas,
r.suma_total_requerido_mensual,
r.suma_total_requerido_trimestral,
r.piezas_requeridas_con_oc_consig_mensual,
r.disponibilidad_total,
r.piezas_a_solicitar,
r.vendedor,
r.id_usuario, r.id_maquinaria

from rotacion_inventario_rodrigo1 r");

            return $query->result();
        }
       //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "rotacion_inventario_rodrigo ") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*'
                    )->from('rotacion_inventario_rodrigo')->get();
            return $query->result();
        }//
        else if ($dataLevel == "is_Gerente_Ventas") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*'
                    )->from('rotacion_inventario_rodrigo ')->get();
            return $query->result();
        }else if ($dataLevel == "is_director") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*'
                    )->from('rotacion_inventario_rodrigo ')->get();
            return $query->result();
        }
        else {
            redirect(site_url() . 'main/');
        }
    }
             
    
        // Descargar Excel de Recoleccion de Datos
    public function ListaRecoleccionDatos() {

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
            /* Para traerse el id del usuario */

             //consulta de los datos que va a descargar en exce
            
            
           $query = $this->db->query('SELECT r.id_recolecion_datos,r.vendedor,r.identificador,r.nombre_empresa, r.estado, r.ciudad, r.domicilio, r.nombre, r.cargo, r.email, r.tel,r.nombre2,r.cargo2, r.email2, r.tel2, r.comentarios, u.first_name, DATE_ADD(r.fecha_insercion, INTERVAL -5 HOUR),DATE_ADD(r.fecha_modificacion, INTERVAL -5 HOUR) FROM recoleccion_datos AS r INNER JOIN users AS u ON r.id=u.id order by u.first_name');
           /* $query = $this->db->select('*')->from('recoleccion_datos')->join('users', 'recoleccion_datos.id=users.id')
                    ->order_by('users.first_name', 'asc')->get();*/
            return $query->result();
            
            
            
            
            
        }
        else   if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */

           
            
           $query = $this->db->query('SELECT r.id_recolecion_datos,r.vendedor,r.identificador,r.nombre_empresa, r.estado, r.ciudad, r.domicilio, r.nombre, r.cargo, r.email, r.tel,r.nombre2,r.cargo2, r.email2, r.tel2, r.comentarios, u.first_name, DATE_ADD(r.fecha_insercion, INTERVAL -5 HOUR),DATE_ADD(r.fecha_modificacion, INTERVAL -5 HOUR) FROM recoleccion_datos AS r INNER JOIN users AS u ON r.id=u.id order by u.first_name');
           /* $query = $this->db->select('*')->from('recoleccion_datos')->join('users', 'recoleccion_datos.id=users.id')
                    ->order_by('users.first_name', 'asc')->get();*/
            return $query->result();
            
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_refacciones") {

            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            
            
           $query = $this->db->query('SELECT r.id_recolecion_datos,r.vendedor,r.identificador,r.nombre_empresa, r.estado, r.ciudad, r.domicilio, r.nombre, r.cargo, r.email, r.tel,r.nombre2,r.cargo2, r.email2, r.tel2, r.comentarios, u.first_name, DATE_ADD(r.fecha_insercion, INTERVAL -5 HOUR),DATE_ADD(r.fecha_modificacion, INTERVAL -5 HOUR) FROM recoleccion_datos AS r INNER JOIN users AS u ON r.id=u.id');
           /* $query = $this->db->select('*')->from('recoleccion_datos')->join('users', 'recoleccion_datos.id=users.id')
                    ->order_by('users.first_name', 'asc')->get();*/
            return $query->result();
        }else if ($dataLevel == "is_maquinaria_refacciones") {

             /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */);
            /* consulta los datos de excel */

            $query = $this->db->select('*')->from('recoleecion_datos')->join('users', 'recoleccion_datos.id=users.id')->where('recoleccion_datos.id= ', $dataLevel)->get();
            return $query->result();
        } else    if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */

             //consulta de los datos que va a descargar en excel
            $query = $this->db->select('*')->from('recoleecion_datos')->join('users', 'recoleccion_datos.id=users.id')->order_by('users.first_name', 'asc')->get();
            return $query->result();
        }
        else {
            redirect(site_url() . 'main/');
        }
    }
        
}
