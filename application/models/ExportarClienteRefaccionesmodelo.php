<?php
/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

class ExportarClienteRefaccionesmodelo extends CI_Model {

    
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

    
    // get employee list
    public function ListaClienteRefacciones() {
 
    
    
    
    
    //user data from session
	    $data = $this->session->userdata;
	    if(empty($data)){
	        redirect(site_url().'main/login/');
	    }

	    //check user level
	     if(empty($data['role'])){
	        redirect(site_url().'main/login/');
	     }
	     $dataLevel = $this->userlevel->checkLevel($data['role']);
	    //check user level
	     $data['title'] = "Robuspack";
             if($dataLevel == "is_admin"){
               /*Para traerse el id del usuario*/
            
             /*Para traerse el id del usuario*/
               $query =$this->db->select([  'grupo', 'cliente', 'referencia', 'cantidad_maxima',
'precio_unitario', 'periodo_surtimiento', 'cantidad_minima', 'paqueteria', 
'tipo_entrega', 'dias_credito', 'pulgadas', 'maquina_cliente', 'capacitacion', 
'capacitacion_fecha', 'piezas_juego', 'costo_juego', 'juego_mensuales', 
'golpes_prom_comp', 'golpes_prom_rodicut', 'beneficio_golpes_prom', 
'tiempo_rot_com', 'tiempo_rot_rodicut', 'beneficio_rot_prom',
'precio_golpe', 'ciudad_planta', 'observacion', 'contacto', 'tipo_maquina',
'troquel','uso_de_cfdi', 'metodo_pago', 'forma_pago', 'fecha_visita',
'fecha_seguimiento', 'golpes_maquina'
            
            ])
                 ->from('venta')
                 ->get();
        return $query->result();
             }
             //condicions que realice la consulta solo si es refacciones
       else if($dataLevel == "is_refacciones"){
           
              /*Para traerse el id del usuario*/
          $data = $this->session->userdata;
        $data = array(
            //se lleva el valor del id del usuario
             $dataLevel = $this->userlevel->id($data['id'])  /*Es para traerse el id del usuario*/
        );
          /*Para traerse el id del usuario*/

            $query =$this->db->select([  'grupo', 'cliente', 'referencia', 'cantidad_maxima',
'precio_unitario', 'periodo_surtimiento', 'cantidad_minima', 'paqueteria', 
'tipo_entrega', 'dias_credito', 'pulgadas', 'maquina_cliente', 'capacitacion', 
'capacitacion_fecha', 'piezas_juego', 'costo_juego', 'juego_mensuales', 
'golpes_prom_comp', 'golpes_prom_rodicut', 'beneficio_golpes_prom', 
'tiempo_rot_com', 'tiempo_rot_rodicut', 'beneficio_rot_prom',
'precio_golpe', 'ciudad_planta', 'observacion', 'contacto', 'tipo_maquina',
'troquel','uso_de_cfdi', 'metodo_pago', 'forma_pago', 'fecha_visita',
'fecha_seguimiento', 'golpes_maquina'
            
            ])
                 ->from('venta')
                    ->where('id= ' ,$dataLevel )
                    
                    
                 ->get();
        return $query->result();
       }
             else{
             redirect(site_url().'main/');
             }
        
        
        
        
        
        
    
    
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
