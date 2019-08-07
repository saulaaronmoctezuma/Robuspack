<?php


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
            $query = $this->db->select('*')->from('cliente')->get();
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
