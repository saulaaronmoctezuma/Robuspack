<?php

require 'ClienteRefaccionesPojo.php';

require 'IModeloAbstracto.php';

/**
 * @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 16/11/2018 Hora 2:34 pm
 * Sistema de Control Robuspack
 */
class ClienteRefaccionesModelo extends CI_Model implements IModeloAbstracto {

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
<<<<<<< HEAD
        
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    }

    public function getAllSettings() {
        $this->db->select('*');
        $this->db->from('settings');
        return $this->db->get()->row();
<<<<<<< HEAD
        
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    }

    public function getUsers() {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->row();
    }

    public function add($data) {
        $this->db->insert('venta', $data);
    }

    public function delete($id) {
        $this->db->delete('venta', array('id_venta' => $id));
    }
<<<<<<< HEAD
        public function Mayor1()
        {
            $this->db->query("call Mayor1()"); 

            
        }
        
        
          public function queryCorreo() {


        //user data from session
        $data = $this->session->userdata;
        

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
       
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //$query = $this->db->query('SELECT * FROM Venta order by id_venta desc');
            
       
            
            $this->db->select('*');
            $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->where('venta.id_venta= ', 1);
            $this->db->order_by('venta.id_venta', 'desc');

            $query = $this->db->get();
            $data = $query->result_array();
            
            
            
            
            
            
            
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
                $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina,$value->formato,$value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra
                        ,$value->fecha_ultima_factura,$value->consumo_real, $value->archivo
                        ,$value->first_name, $value->codigo_cuchilla,
                        $value->cantidad_cuchilla,
                        $value->precio_cuchilla,
                        $value->codigo_cubierta,
                        $value->cantidad_cubierta,
                        $value->precio_cubierta,
                        $value->codigo_llanta,
                        $value->cantidad_llanta,
                        $value->precio_llanta,
                        $value->codigo_rasqueta,
                        $value->cantidad_rasqueta,
                        $value->precio_rasqueta,
                        $value->codigo_inserto,
                        $value->cantidad_inserto,
                        $value->precio_inserto   ,$value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
                        $value->precio_inserto_3, $value->codigo_inserto_4, $value->cantidad_inserto_4, $value->precio_inserto_4, $value->codigo_cuchilla_2,
                        $value->cantidad_cuchilla_2, $value->precio_cuchilla_2, $value->codigo_cuchilla_3, $value->cantidad_cuchilla_3, $value->precio_cuchilla_3,
                        $value->codigo_cuchilla_4, $value->cantidad_cuchilla_4, $value->precio_cuchilla_4, $value->codigo_cuchilla_5, $value->cantidad_cuchilla_5,
                        $value->precio_cuchilla_5, $value->codigo_cuchilla_6, $value->cantidad_cuchilla_6, $value->precio_cuchilla_6, $value->codigo_cuchilla_7,
                        $value->cantidad_cuchilla_7, $value->precio_cuchilla_7, $value->codigo_cuchilla_8, $value->cantidad_cuchilla_8, $value->precio_cuchilla_8, 
                        $value->codigo_cuchilla_9, $value->cantidad_cuchilla_9, $value->precio_cuchilla_9, $value->codigo_cuchilla_10, $value->cantidad_cuchilla_10,
                        $value->precio_cuchilla_10, $value->codigo_cuchilla_11, $value->cantidad_cuchilla_11, $value->precio_cuchilla_11
                
);

                array_push($colVentas, $objeto);
            }
            return $colVentas;
        
              
              
          }
=======

    public function Mayor1() {
        $this->db->query("call Mayor1()");
    }

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    public function query() {


        //user data from session
        $data = $this->session->userdata;
<<<<<<< HEAD
        
=======

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //$query = $this->db->query('SELECT * FROM Venta order by id_venta desc');
<<<<<<< HEAD
            
       
            
=======



>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            $this->db->select('*');
            $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('venta.id_venta', 'desc');

            $query = $this->db->get();
            $data = $query->result_array();
<<<<<<< HEAD
            
            
            
            
            
            
            
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
                $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina,$value->formato,$value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra
                        ,$value->fecha_ultima_factura,$value->consumo_real, $value->archivo
                        ,$value->first_name, $value->codigo_cuchilla,
                        $value->cantidad_cuchilla,
                        $value->precio_cuchilla,
                        $value->codigo_cubierta,
                        $value->cantidad_cubierta,
                        $value->precio_cubierta,
                        $value->codigo_llanta,
                        $value->cantidad_llanta,
                        $value->precio_llanta,
                        $value->codigo_rasqueta,
                        $value->cantidad_rasqueta,
                        $value->precio_rasqueta,
                        $value->codigo_inserto,
                        $value->cantidad_inserto,
                        $value->precio_inserto   ,$value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
=======







            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
                        $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario, $value->vida_util_dias, $value->periodo_surtimiento, $value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas, $value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion, $value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->formato, $value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina, $value->confirmacion_orden_compra
                        , $value->fecha_ultima_factura, $value->consumo_real, $value->archivo
                        , $value->first_name, 
                        $value->codigo_cuchilla, $value->cantidad_cuchilla, $value->precio_cuchilla, $value->codigo_cubierta,
                        $value->cantidad_cubierta, $value->precio_cubierta, $value->codigo_llanta, $value->cantidad_rasqueta,
                        $value->cantidad_llanta, $value->precio_llanta, $value->codigo_rasqueta, $value->precio_rasqueta, 
                        $value->codigo_inserto, $value->cantidad_inserto, $value->precio_inserto, 
                        
                        
                        $value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        $value->precio_inserto_3, $value->codigo_inserto_4, $value->cantidad_inserto_4, $value->precio_inserto_4, $value->codigo_cuchilla_2,
                        $value->cantidad_cuchilla_2, $value->precio_cuchilla_2, $value->codigo_cuchilla_3, $value->cantidad_cuchilla_3, $value->precio_cuchilla_3,
                        $value->codigo_cuchilla_4, $value->cantidad_cuchilla_4, $value->precio_cuchilla_4, $value->codigo_cuchilla_5, $value->cantidad_cuchilla_5,
                        $value->precio_cuchilla_5, $value->codigo_cuchilla_6, $value->cantidad_cuchilla_6, $value->precio_cuchilla_6, $value->codigo_cuchilla_7,
                        $value->cantidad_cuchilla_7, $value->precio_cuchilla_7, $value->codigo_cuchilla_8, $value->cantidad_cuchilla_8, $value->precio_cuchilla_8, 
                        $value->codigo_cuchilla_9, $value->cantidad_cuchilla_9, $value->precio_cuchilla_9, $value->codigo_cuchilla_10, $value->cantidad_cuchilla_10,
                        $value->precio_cuchilla_10, $value->codigo_cuchilla_11, $value->cantidad_cuchilla_11, $value->precio_cuchilla_11
<<<<<<< HEAD
                
);
=======
                );
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                array_push($colVentas, $objeto);
            }
            return $colVentas;
<<<<<<< HEAD
        }else if ($dataLevel == "is_editor") {
=======
        } else if ($dataLevel == "is_editor") {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //$query = $this->db->query('SELECT * FROM Venta order by id_venta desc');
<<<<<<< HEAD
            
       
            
=======



>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            $this->db->select('*');
            $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('venta.id_venta', 'desc');

            $query = $this->db->get();
            $data = $query->result_array();
<<<<<<< HEAD
            
            
            
            
            
            
            
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
                $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina,$value->formato,$value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra
                        ,$value->fecha_ultima_factura,$value->consumo_real, $value->archivo
                        ,$value->first_name,
                        
                         $value->codigo_cuchilla,
                        $value->cantidad_cuchilla,
                        $value->precio_cuchilla,
                        $value->codigo_cubierta,
                        $value->cantidad_cubierta,
                        $value->precio_cubierta,
                        $value->codigo_llanta,
                        $value->cantidad_llanta,
                        $value->precio_llanta,
                        $value->codigo_rasqueta,
                        $value->cantidad_rasqueta,
                        $value->precio_rasqueta,
                        $value->codigo_inserto,
                        $value->cantidad_inserto,
                        $value->precio_inserto   ,$value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
=======







            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
                        $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario, $value->vida_util_dias, $value->periodo_surtimiento, $value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas, $value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion, $value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->formato, $value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina, $value->confirmacion_orden_compra
                        , $value->fecha_ultima_factura, $value->consumo_real, $value->archivo
                        , $value->first_name, $value->codigo_cuchilla, $value->cantidad_cuchilla, $value->precio_cuchilla, $value->codigo_cubierta, $value->cantidad_cubierta, $value->precio_cubierta, $value->codigo_llanta, $value->cantidad_llanta, $value->precio_llanta, $value->codigo_rasqueta, $value->cantidad_rasqueta, $value->precio_rasqueta, $value->codigo_inserto, $value->cantidad_inserto, $value->precio_inserto
                        
                           ,$value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        $value->precio_inserto_3, $value->codigo_inserto_4, $value->cantidad_inserto_4, $value->precio_inserto_4, $value->codigo_cuchilla_2,
                        $value->cantidad_cuchilla_2, $value->precio_cuchilla_2, $value->codigo_cuchilla_3, $value->cantidad_cuchilla_3, $value->precio_cuchilla_3,
                        $value->codigo_cuchilla_4, $value->cantidad_cuchilla_4, $value->precio_cuchilla_4, $value->codigo_cuchilla_5, $value->cantidad_cuchilla_5,
                        $value->precio_cuchilla_5, $value->codigo_cuchilla_6, $value->cantidad_cuchilla_6, $value->precio_cuchilla_6, $value->codigo_cuchilla_7,
                        $value->cantidad_cuchilla_7, $value->precio_cuchilla_7, $value->codigo_cuchilla_8, $value->cantidad_cuchilla_8, $value->precio_cuchilla_8, 
                        $value->codigo_cuchilla_9, $value->cantidad_cuchilla_9, $value->precio_cuchilla_9, $value->codigo_cuchilla_10, $value->cantidad_cuchilla_10,
                        $value->precio_cuchilla_10, $value->codigo_cuchilla_11, $value->cantidad_cuchilla_11, $value->precio_cuchilla_11
                
<<<<<<< HEAD

                        
                        
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        );
                array_push($colVentas, $objeto);
            }
            return $colVentas;
<<<<<<< HEAD
        }else if ($dataLevel == "is_servicio_a_clientes") {
=======
        } else if ($dataLevel == "is_servicio_a_clientes") {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //$query = $this->db->query('SELECT * FROM Venta order by id_venta desc');
<<<<<<< HEAD
            
       
            
=======



>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            $this->db->select('*');
            $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('venta.referencia', 'asc');

            $query = $this->db->get();
            $data = $query->result_array();
<<<<<<< HEAD
            
            
            
            
            
            
            
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
                $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina,$value->formato,$value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra
                        ,$value->fecha_ultima_factura,$value->consumo_real, $value->archivo
                        ,$value->first_name, $value->codigo_cuchilla,
                        $value->cantidad_cuchilla,
                        $value->precio_cuchilla,
                        $value->codigo_cubierta,
                        $value->cantidad_cubierta,
                        $value->precio_cubierta,
                        $value->codigo_llanta,
                        $value->cantidad_llanta,
                        $value->precio_llanta,
                        $value->codigo_rasqueta,
                        $value->cantidad_rasqueta,
                        $value->precio_rasqueta,
                        $value->codigo_inserto,
                        $value->cantidad_inserto,
                        $value->precio_inserto   ,$value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
=======







            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
                        $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario, $value->vida_util_dias, $value->periodo_surtimiento, $value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas, $value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion, $value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->formato, $value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina, $value->confirmacion_orden_compra
                        , $value->fecha_ultima_factura, $value->consumo_real, $value->archivo, $value->codigo_cuchilla, $value->cantidad_cuchilla, $value->precio_cuchilla, $value->codigo_cubierta, $value->cantidad_cubierta, $value->precio_cubierta, $value->codigo_llanta, $value->cantidad_llanta, $value->precio_llanta, $value->codigo_rasqueta, $value->cantidad_rasqueta, $value->precio_rasqueta, $value->codigo_inserto, $value->cantidad_inserto, $value->precio_inserto
                             ,$value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        $value->precio_inserto_3, $value->codigo_inserto_4, $value->cantidad_inserto_4, $value->precio_inserto_4, $value->codigo_cuchilla_2,
                        $value->cantidad_cuchilla_2, $value->precio_cuchilla_2, $value->codigo_cuchilla_3, $value->cantidad_cuchilla_3, $value->precio_cuchilla_3,
                        $value->codigo_cuchilla_4, $value->cantidad_cuchilla_4, $value->precio_cuchilla_4, $value->codigo_cuchilla_5, $value->cantidad_cuchilla_5,
                        $value->precio_cuchilla_5, $value->codigo_cuchilla_6, $value->cantidad_cuchilla_6, $value->precio_cuchilla_6, $value->codigo_cuchilla_7,
                        $value->cantidad_cuchilla_7, $value->precio_cuchilla_7, $value->codigo_cuchilla_8, $value->cantidad_cuchilla_8, $value->precio_cuchilla_8, 
                        $value->codigo_cuchilla_9, $value->cantidad_cuchilla_9, $value->precio_cuchilla_9, $value->codigo_cuchilla_10, $value->cantidad_cuchilla_10,
                        $value->precio_cuchilla_10, $value->codigo_cuchilla_11, $value->cantidad_cuchilla_11, $value->precio_cuchilla_11
                
<<<<<<< HEAD
);
=======
                        , $value->first_name);
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                array_push($colVentas, $objeto);
            }
            return $colVentas;
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_refacciones") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('*');
<<<<<<< HEAD
             $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
           $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");

=======
            $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            //tree los datos de la consulta
            $query = $this->db->get();


            $colVentas = array();
            foreach ($query->result() as $key => $value) {
<<<<<<< HEAD
                 $objeto = new ClienteRefaccionesPojo(
                $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina,$value->formato,$value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra
                        ,$value->fecha_ultima_factura,$value->consumo_real, $value->archivo
                        ,$value->first_name, $value->codigo_cuchilla,
                        $value->cantidad_cuchilla,
                        $value->precio_cuchilla,
                        $value->codigo_cubierta,
                        $value->cantidad_cubierta,
                        $value->precio_cubierta,
                        $value->codigo_llanta,
                        $value->cantidad_llanta,
                        $value->precio_llanta,
                        $value->codigo_rasqueta,
                        $value->cantidad_rasqueta,
                        $value->precio_rasqueta,
                        $value->codigo_inserto,
                        $value->cantidad_inserto,
                        $value->precio_inserto   ,$value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
=======
                $objeto = new ClienteRefaccionesPojo(
                        $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario, $value->vida_util_dias, $value->periodo_surtimiento, $value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas, $value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion, $value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->formato, $value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina, $value->confirmacion_orden_compra
                        , $value->fecha_ultima_factura, $value->consumo_real, $value->archivo, $value->cantidad_cuchilla, $value->precio_cuchilla, $value->codigo_cubierta, $value->cantidad_cubierta, $value->precio_cubierta, $value->codigo_llanta, $value->cantidad_llanta, $value->precio_llanta, $value->codigo_rasqueta, $value->cantidad_rasqueta, $value->precio_rasqueta, $value->codigo_inserto, $value->cantidad_inserto, $value->precio_inserto
                           ,$value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        $value->precio_inserto_3, $value->codigo_inserto_4, $value->cantidad_inserto_4, $value->precio_inserto_4, $value->codigo_cuchilla_2,
                        $value->cantidad_cuchilla_2, $value->precio_cuchilla_2, $value->codigo_cuchilla_3, $value->cantidad_cuchilla_3, $value->precio_cuchilla_3,
                        $value->codigo_cuchilla_4, $value->cantidad_cuchilla_4, $value->precio_cuchilla_4, $value->codigo_cuchilla_5, $value->cantidad_cuchilla_5,
                        $value->precio_cuchilla_5, $value->codigo_cuchilla_6, $value->cantidad_cuchilla_6, $value->precio_cuchilla_6, $value->codigo_cuchilla_7,
                        $value->cantidad_cuchilla_7, $value->precio_cuchilla_7, $value->codigo_cuchilla_8, $value->cantidad_cuchilla_8, $value->precio_cuchilla_8, 
                        $value->codigo_cuchilla_9, $value->cantidad_cuchilla_9, $value->precio_cuchilla_9, $value->codigo_cuchilla_10, $value->cantidad_cuchilla_10,
                        $value->precio_cuchilla_10, $value->codigo_cuchilla_11, $value->cantidad_cuchilla_11, $value->precio_cuchilla_11
<<<<<<< HEAD
                
);
=======
                , $value->first_name);
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                array_push($colVentas, $objeto);
            }
            return $colVentas;
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('*');
<<<<<<< HEAD
             $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
           $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");

=======
            $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            //tree los datos de la consulta
            $query = $this->db->get();


            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
<<<<<<< HEAD
                     $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra,$value->fecha_ultima_factura, $value->first_name, $value->codigo_cuchilla,
                        $value->cantidad_cuchilla,
                        $value->precio_cuchilla,
                        $value->codigo_cubierta,
                        $value->cantidad_cubierta,
                        $value->precio_cubierta,
                        $value->codigo_llanta,
                        $value->cantidad_llanta,
                        $value->precio_llanta,
                        $value->codigo_rasqueta,
                        $value->cantidad_rasqueta,
                        $value->precio_rasqueta,
                        $value->codigo_inserto,
                        $value->cantidad_inserto,
                        $value->precio_inserto   ,$value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
                        $value->precio_inserto_3, $value->codigo_inserto_4, $value->cantidad_inserto_4, $value->precio_inserto_4, $value->codigo_cuchilla_2,
                        $value->cantidad_cuchilla_2, $value->precio_cuchilla_2, $value->codigo_cuchilla_3, $value->cantidad_cuchilla_3, $value->precio_cuchilla_3,
                        $value->codigo_cuchilla_4, $value->cantidad_cuchilla_4, $value->precio_cuchilla_4, $value->codigo_cuchilla_5, $value->cantidad_cuchilla_5,
                        $value->precio_cuchilla_5, $value->codigo_cuchilla_6, $value->cantidad_cuchilla_6, $value->precio_cuchilla_6, $value->codigo_cuchilla_7,
                        $value->cantidad_cuchilla_7, $value->precio_cuchilla_7, $value->codigo_cuchilla_8, $value->cantidad_cuchilla_8, $value->precio_cuchilla_8, 
                        $value->codigo_cuchilla_9, $value->cantidad_cuchilla_9, $value->precio_cuchilla_9, $value->codigo_cuchilla_10, $value->cantidad_cuchilla_10,
                        $value->precio_cuchilla_10, $value->codigo_cuchilla_11, $value->cantidad_cuchilla_11, $value->precio_cuchilla_11
                
);
=======
                        $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario, $value->vida_util_dias
                        , $value->periodo_surtimiento, $value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas, $value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion, $value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina, $value->confirmacion_orden_compra, $value->fecha_ultima_factura, $value->cantidad_cuchilla, $value->precio_cuchilla, $value->codigo_cubierta, $value->cantidad_cubierta, $value->precio_cubierta, $value->codigo_llanta, $value->cantidad_llanta, $value->precio_llanta, $value->codigo_rasqueta, $value->cantidad_rasqueta, $value->precio_rasqueta, $value->codigo_inserto, $value->cantidad_inserto, $value->precio_inserto, $value->first_name);
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

                array_push($colVentas, $objeto);
            }
            return $colVentas;
        } else if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('*');
<<<<<<< HEAD
             $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
           //$this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");

=======
            $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            //$this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            //tree los datos de la consulta
            $query = $this->db->get();


            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
<<<<<<< HEAD
                $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina,$value->formato,$value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra
                        ,$value->fecha_ultima_factura,$value->consumo_real, $value->archivo
                        ,$value->first_name, $value->codigo_cuchilla,
                        $value->cantidad_cuchilla,
                        $value->precio_cuchilla,
                        $value->codigo_cubierta,
                        $value->cantidad_cubierta,
                        $value->precio_cubierta,
                        $value->codigo_llanta,
                        $value->cantidad_llanta,
                        $value->precio_llanta,
                        $value->codigo_rasqueta,
                        $value->cantidad_rasqueta,
                        $value->precio_rasqueta,
                        $value->codigo_inserto,
                        $value->cantidad_inserto,
                        $value->precio_inserto   ,$value->codigo_inserto_2,    $value->cantidad_inserto_2, $value->precio_inserto_2, $value->codigo_inserto_3, $value->cantidad_inserto_3, 
                        $value->precio_inserto_3, $value->codigo_inserto_4, $value->cantidad_inserto_4, $value->precio_inserto_4, $value->codigo_cuchilla_2,
                        $value->cantidad_cuchilla_2, $value->precio_cuchilla_2, $value->codigo_cuchilla_3, $value->cantidad_cuchilla_3, $value->precio_cuchilla_3,
                        $value->codigo_cuchilla_4, $value->cantidad_cuchilla_4, $value->precio_cuchilla_4, $value->codigo_cuchilla_5, $value->cantidad_cuchilla_5,
                        $value->precio_cuchilla_5, $value->codigo_cuchilla_6, $value->cantidad_cuchilla_6, $value->precio_cuchilla_6, $value->codigo_cuchilla_7,
                        $value->cantidad_cuchilla_7, $value->precio_cuchilla_7, $value->codigo_cuchilla_8, $value->cantidad_cuchilla_8, $value->precio_cuchilla_8, 
                        $value->codigo_cuchilla_9, $value->cantidad_cuchilla_9, $value->precio_cuchilla_9, $value->codigo_cuchilla_10, $value->cantidad_cuchilla_10,
                        $value->precio_cuchilla_10, $value->codigo_cuchilla_11, $value->cantidad_cuchilla_11, $value->precio_cuchilla_11
                
);
=======
                        $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario, $value->vida_util_dias, $value->periodo_surtimiento, $value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas, $value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion, $value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->formato, $value->ancho, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina, $value->confirmacion_orden_compra
                        , $value->fecha_ultima_factura, $value->consumo_real, $value->archivo, $value->cantidad_cuchilla, $value->precio_cuchilla, $value->codigo_cubierta, $value->cantidad_cubierta, $value->precio_cubierta, $value->codigo_llanta, $value->cantidad_llanta, $value->precio_llanta, $value->codigo_rasqueta, $value->cantidad_rasqueta, $value->precio_rasqueta, $value->codigo_inserto, $value->cantidad_inserto, $value->precio_inserto
                        , $value->first_name);
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                array_push($colVentas, $objeto);
            }
            return $colVentas;
        } else {
            redirect(site_url() . 'main/');
        }
    }
<<<<<<< HEAD
    
    
    
    
    
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606

    public function update($venta) {
        if ($venta instanceof ClienteRefaccionesPojo) {
            $datos = array(
                "id_venta" => $venta->getId_venta(),
                "grupo" => $venta->getGrupo(),
                "cliente" => $venta->getCliente(),
                "referencia" => $venta->getReferencia(),
                "cantidad_maxima" => $venta->getCantidad_maxima(),
                "precio_unitario" => $venta->getPrecio_unitario(),
                "vida_util_dias" => $venta->getVida_util_dias(),
                "periodo_surtimiento" => $venta->getPeriodo_surtimiento(),
                "periodo_surtimiento_vida_util" => $venta->getPeriodo_surtimiento_vida_util(),
                "cantidad_minima" => $venta->getCantidad_minima(),
                "paqueteria" => $venta->getPaqueteria(),
                "tipo_entrega" => $venta->getTipo_entrega(),
                "dias_credito" => $venta->getDias_credito(),
                "pulgadas" => $venta->getPulgadas(),
                "diametro_rod_ml" => $venta->getDiametro_rod_ml(),
                "maquina_cliente" => $venta->getMaquina_cliente(),
                "capacitacion" => $venta->getCapacitacion(),
                "capacitacion_fecha" => $venta->getCapacitacion_fecha(),
                "piezas_juego" => $venta->getPiezas_juego(),
                "costo_juego" => $venta->getCosto_juego(),
                "juego_mensuales" => $venta->getJuego_mensuales(),
                "golpes_prom_comp" => $venta->getGolpes_prom_comp(),
                "golpes_prom_rodicut" => $venta->getGolpes_prom_rodicut(),
                "beneficio_golpes_prom" => $venta->getBeneficio_golpes_prom(),
                "tiempo_rot_com" => $venta->getTiempo_rot_com(),
                "tiempo_rot_rodicut" => $venta->getTiempo_rot_rodicut(),
                "beneficio_rot_prom" => $venta->getBeneficio_rot_prom(),
                "precio_golpe" => $venta->getPrecio_golpe(),
                "ciudad_planta" => $venta->getCiudad_planta(),
                "observacion" => $venta->getObservacion(),
<<<<<<< HEAD
                 "marca_maquina" => $venta->getMarca_maquina(),
=======
                "marca_maquina" => $venta->getMarca_maquina(),
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                "contacto" => $venta->getContacto(),
                "tipo_maquina" => $venta->getTipo_maquina(),
                "formato" => $venta->formato(),
                "ancho" => $venta->ancho(),
                "troquel" => $venta->getTroquel(),
                "uso_de_cfdi" => $venta->getUso_de_cfdi(),
                "metodo_pago" => $venta->getMetodo_pago(),
                "fecha_visita" => $venta->getFecha_visita(),
                "fecha_seguimiento" => $venta->getFecha_seguimiento(),
                "golpes_maquina" => $venta->getGolpes_maquina(),
                "confirmacion_orden_compra" => $venta->getConfirmacion_orden_compra(),
                "fecha_ultima_factura" => $venta->getfecha_ultima_factura(),
                "consumo_real" => $venta->getConsumo_real(),
                "archivo" => $venta->getArchivo(),
<<<<<<< HEAD
                
                
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                "codigo_cuchilla" => getcodigo_cuchilla(),
                "cantidad_cuchilla" => getcantidad_cuchilla(),
                "precio_cuchilla" => getprecio_cuchilla(),
                "codigo_cubierta" => getcodigo_cubierta(),
                "cantidad_cubierta" => getcantidad_cubierta(),
                "precio_cubierta" => getprecio_cubierta(),
                "codigo_llanta" => getcodigo_llanta(),
                "cantidad_llanta" => getcantidad_llanta(),
                "precio_llanta" => getprecio_llanta(),
                "codigo_rasqueta" => getcodigo_rasqueta(),
                "cantidad_rasqueta" => getcantidad_rasqueta(),
                "precio_rasqueta" => getprecio_rasqueta(),
                "codigo_inserto" => getcodigo_inserto(),
                "cantidad_inserto" => getcantidad_inserto(),
<<<<<<< HEAD
                "precio_inserto" => getprecio_inserto()
                
=======
                "precio_inserto" => getprecio_inserto(),
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            );
            $this->db->where("id_venta", $venta->getId_venta());
            $this->db->update("venta", $datos);
        }
    }

    public function obtener($id_venta) {
        $objj = $this->db->query(" Select * from venta where id_venta = $id_venta ");
        $obj = $objj->row();
        $dp = array('id_venta' => $obj->id_venta,
            'grupo' => $obj->grupo,
            'cliente' => $obj->cliente,
            'referencia' => $obj->referencia,
            'cantidad_maxima' => $obj->cantidad_maxima,
            'precio_unitario' => $obj->precio_unitario,
            'vida_util_dias' => $obj->vida_util_dias,
            'periodo_surtimiento' => $obj->periodo_surtimiento,
            'periodo_surtimiento_vida_util' => $obj->periodo_surtimiento_vida_util,
            'cantidad_minima' => $obj->cantidad_minima,
            'paqueteria' => $obj->paqueteria,
            'tipo_entrega' => $obj->tipo_entrega,
            'dias_credito' => $obj->dias_credito,
            'pulgadas' => $obj->pulgadas,
            'diametro_rod_ml' => $obj->diametro_rod_ml,
            'maquina_cliente' => $obj->maquina_cliente,
            'capacitacion' => $obj->capacitacion,
            'capacitacion_fecha' => $obj->capacitacion_fecha,
            'piezas_juego' => $obj->piezas_juego,
            'costo_juego' => $obj->costo_juego,
            'juego_mensuales' => $obj->juego_mensuales,
            'golpes_prom_comp' => $obj->golpes_prom_comp,
            'golpes_prom_rodicut' => $obj->golpes_prom_rodicut,
            'beneficio_golpes_prom' => $obj->beneficio_golpes_prom,
            'tiempo_rot_com' => $obj->tiempo_rot_com,
            'tiempo_rot_rodicut' => $obj->tiempo_rot_rodicut,
            'beneficio_rot_prom' => $obj->beneficio_rot_prom,
            'precio_golpe' => $obj->precio_golpe,
            'ciudad_planta' => $obj->ciudad_planta,
            'observacion' => $obj->observacion,
            'marca_maquina' => $obj->marca_maquina,
            'contacto' => $obj->contacto,
            'tipo_maquina' => $obj->tipo_maquina,
<<<<<<< HEAD
             'formato' => $obj->formato,
=======
            'formato' => $obj->formato,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            'ancho' => $obj->ancho,
            'troquel' => $obj->troquel,
            'uso_de_cfdi' => $obj->uso_de_cfdi,
            'metodo_pago' => $obj->metodo_pago,
            'fecha_visita' => $obj->fecha_visita,
            'fecha_seguimiento' => $obj->fecha_seguimiento,
            'golpes_maquina' => $obj->golpes_maquina,
            'confirmacion_orden_compra' => $obj->confirmacion_orden_compra,
            'fecha_ultima_factura' => $obj->fecha_ultima_factura,
            'consumo_real' => $obj->consumo_real,
            'archivo' => $obj->archivo,
<<<<<<< HEAD
            
            
            
                   
            'codigo_cuchilla' => $obj->codigo_cuchilla,
            'cantidad_cuchilla' => $obj->cantidad_cuchilla,
            'precio_cuchilla' => $obj->precio_cuchilla,
             'codigo_cuchilla_2' => $obj->codigo_cuchilla_2,
=======
            'codigo_cuchilla' => $obj->codigo_cuchilla,
            'cantidad_cuchilla' => $obj->cantidad_cuchilla,
            'precio_cuchilla' => $obj->precio_cuchilla,
            'codigo_cubierta' => $obj->codigo_cubierta,
            'cantidad_cubierta' => $obj->cantidad_cubierta,
            'precio_cubierta' => $obj->precio_cubierta,
            'codigo_cuchilla_2' => $obj->codigo_cuchilla_2,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
'cantidad_cuchilla_2' => $obj->cantidad_cuchilla_2,
'precio_cuchilla_2' => $obj->precio_cuchilla_2,
'codigo_cuchilla_3' => $obj->codigo_cuchilla_3,
'cantidad_cuchilla_3' => $obj->cantidad_cuchilla_3,
'precio_cuchilla_3' => $obj->precio_cuchilla_3,
'codigo_cuchilla_4' => $obj->codigo_cuchilla_4,
'cantidad_cuchilla_4' => $obj->cantidad_cuchilla_4,
'precio_cuchilla_4' => $obj->precio_cuchilla_4,
'codigo_cuchilla_5' => $obj->codigo_cuchilla_5,
'cantidad_cuchilla_5' => $obj->cantidad_cuchilla_5,
'precio_cuchilla_5' => $obj->precio_cuchilla_5,
'codigo_cuchilla_6' => $obj->codigo_cuchilla_6,
'cantidad_cuchilla_6' => $obj->cantidad_cuchilla_6,
'precio_cuchilla_6' => $obj->precio_cuchilla_6,
'codigo_cuchilla_7' => $obj->codigo_cuchilla_7,
'cantidad_cuchilla_7' => $obj->cantidad_cuchilla_7,
'precio_cuchilla_7' => $obj->precio_cuchilla_7,
'codigo_cuchilla_8' => $obj->codigo_cuchilla_8,
'cantidad_cuchilla_8' => $obj->cantidad_cuchilla_8,
'precio_cuchilla_8' => $obj->precio_cuchilla_8,
'codigo_cuchilla_9' => $obj->codigo_cuchilla_9,
'cantidad_cuchilla_9' => $obj->cantidad_cuchilla_9,
'precio_cuchilla_9' => $obj->precio_cuchilla_9,
'codigo_cuchilla_10' => $obj->codigo_cuchilla_10,
'cantidad_cuchilla_10' => $obj->cantidad_cuchilla_10,
'precio_cuchilla_10' => $obj->precio_cuchilla_10,
'codigo_cuchilla_11' => $obj->codigo_cuchilla_11,
'cantidad_cuchilla_11' => $obj->cantidad_cuchilla_11,
'precio_cuchilla_11' => $obj->precio_cuchilla_11,
<<<<<<< HEAD
            'codigo_cubierta' => $obj->codigo_cubierta,
            'cantidad_cubierta' => $obj->cantidad_cubierta,
            'precio_cubierta' => $obj->precio_cubierta,
=======

            
            
            
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            'codigo_llanta' => $obj->codigo_llanta,
            'cantidad_llanta' => $obj->cantidad_llanta,
            'precio_llanta' => $obj->precio_llanta,
            'codigo_rasqueta' => $obj->codigo_rasqueta,
            'cantidad_rasqueta' => $obj->cantidad_rasqueta,
            'precio_rasqueta' => $obj->precio_rasqueta,
            'codigo_inserto' => $obj->codigo_inserto,
            'cantidad_inserto' => $obj->cantidad_inserto,
            'precio_inserto' => $obj->precio_inserto,
<<<<<<< HEAD
=======
            
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
              'codigo_inserto_2' => $obj->codigo_inserto_2,
            'cantidad_inserto_2' => $obj->cantidad_inserto_2,
            'precio_inserto_2' => $obj->precio_inserto_2,
            
            
              'codigo_inserto_3' => $obj->codigo_inserto_3,
            'cantidad_inserto_3' => $obj->cantidad_inserto_3,
            'precio_inserto_3' => $obj->precio_inserto_3,
            
            
              'codigo_inserto_4' => $obj->codigo_inserto_4,
            'cantidad_inserto_4' => $obj->cantidad_inserto_4,
            'precio_inserto_4' => $obj->precio_inserto_4,
<<<<<<< HEAD
            
            
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        );
        return $dp;
    }

    public function actualizar($data) {

        $this->db->where('id_venta', $data['id_venta']);
        return $this->db->update('venta', $data);
    }

    /* / */

    function buscar_referencia($id_maquinaria) {
        $this->db->where('id_maquinaria', $id_maquinaria);
        $this->db->order_by('referencia', 'ASC');
        $query = $this->db->get('maquinaria');
        $output = '<option value="">Selecta una maquinaria</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id_maquinaria . '">' . $row->referencia . '</option>';
        }
        return $output;
    }

    //select referencia
    function getOptions() {
        $options = $this->db->select('id_maquinaria, referencia')->order_by("referencia", "desc")
                ->get('maquinaria')
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

        foreach ($options as $option) {
            $options_arr[$option->referencia] = $option->referencia;
        }

        return $options_arr;
    }
<<<<<<< HEAD
    
           
     //select grupo
=======

    //select grupo
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    function getGrupo() {
        $grupo = $this->db->select('id_cliente, grupo')->order_by("grupo", "asc")
                ->get('cliente')
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

        foreach ($grupo as $option) {
            $options_arr[$option->grupo] = $option->grupo;
        }

        return $options_arr;
    }
<<<<<<< HEAD
    
    //select grupo
    function getCliente() {
        $grupo = $this->db->select('id_cliente, cliente')->order_by("cliente", "asc")
                ->get('cliente')
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

=======

    //select grupo
    function getCliente() {
        $grupo = $this->db->select('id_cliente, cliente')->order_by("cliente", "asc")->get('cliente')->result();

        $options_arr;
        $options_arr[' '] = 'Selecciona una opción';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        foreach ($grupo as $option) {
            $options_arr[$option->cliente] = $option->cliente;
        }

        return $options_arr;
    }

    public function refacciones() {
        
    }

    public function querybusqueda() {
        
    }
<<<<<<< HEAD
    
    public function get_by_id($kondisi)
  {
      $this->db->from('venta');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

    
      public function modificarClienteRefacciones($data,$kondisi)
  {
      $this->db->update('venta',$data,$kondisi);
      return TRUE;
  }
  
  
  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
      public function totalRegistroSicCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('venta');
           $this->db->where('venta.id= ', 4);
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('venta');
           $this->db->where('venta.id= ', 7);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('venta');
           $this->db->where('venta.id= ',33);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicJaime()
    {
            $this->db->select('COUNT(*) as total_registros_jaime');
            $this->db->from('venta');
           $this->db->where('venta.id= ', 28);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicNoTroquelaCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('venta');
          $this->db->where('venta.id=4 and venta.troquel="No"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicNoTroquelaAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('venta');
           $this->db->where('venta.id=7 and venta.troquel="No"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicNoTroquelaElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('venta');
           $this->db->where('venta.id=33 and venta.troquel="No"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicNoTroquelaJaime()
    {
            $this->db->select('COUNT(*) as total_registros_jaime');
            $this->db->from('venta');
           $this->db->where('venta.id=28 and venta.troquel="No"');
            $query = $this->db->get();
             return $query->result();
        }
        
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        public function totalRegistroSicConfirmacionCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('venta');
            $this->db->where('venta.id=4 and venta.confirmacion_orden_compra="Consignación"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicConfirmacionAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('venta');
           $this->db->where('venta.id=7 and venta.confirmacion_orden_compra="Consignación"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicConfirmacionElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('venta');
          $this->db->where('venta.id=33 and venta.confirmacion_orden_compra="Consignación"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicConfirmacionJaime()
    {
            $this->db->select('COUNT(*) as total_registros_jaime');
            $this->db->from('venta');
            $this->db->where('venta.id=28 and venta.confirmacion_orden_compra="Consignación"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
           public function totalRegistroSicOrdenCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('venta');
          $this->db->where('venta.id=4 and venta.confirmacion_orden_compra="Orden de Compra"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicOrdenAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('venta');
           $this->db->where('venta.id=7 and venta.confirmacion_orden_compra="Orden de Compra"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicOrdenElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('venta');
           $this->db->where('venta.id=33 and venta.confirmacion_orden_compra="Orden de Compra"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicOrdenJaime()
    {
            $this->db->select('COUNT(*) as total_registros_jaime');
            $this->db->from('venta');
           $this->db->where('venta.id=28 and venta.confirmacion_orden_compra="Orden de Compra"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
              
           public function totalRegistroSicSinPedidoCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('venta');
          $this->db->where('venta.id=4 and venta.confirmacion_orden_compra="Sin Pedido"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicSinPedidoAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('venta');
           $this->db->where('venta.id=7 and venta.confirmacion_orden_compra="Sin Pedido"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicSinPedidoElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('venta');
           $this->db->where('venta.id=33 and venta.confirmacion_orden_compra="Sin Pedido"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicSinPedidoJaime()
    {
            $this->db->select('COUNT(*) as total_registros_jaime');
            $this->db->from('venta');
           $this->db->where('venta.id=28 and venta.confirmacion_orden_compra="Sin Pedido"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
               public function totalRegistroSic()
        {
            $this->db->select('COUNT(*) as total_registros_sic');
            $this->db->from('venta');
          $this->db->where('venta.id=6 OR venta.id=7 OR venta.id=8 OR venta.id=28');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicNoTroquela()
    {
            $this->db->select('COUNT(*) as total_registros_no_troquela');
            $this->db->from('venta');
           $this->db->where('venta.troquel="No"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicSConsignacion()
    {
            $this->db->select('COUNT(*) as total_consignacion');
            $this->db->from('venta');
           $this->db->where('venta.confirmacion_orden_compra="Consignación"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicOrdenCompra()
    {
            $this->db->select('COUNT(*) as total_registros_orden_compra');
            $this->db->from('venta');
           $this->db->where('venta.confirmacion_orden_compra="Orden de Compra"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicSinPedido()
    {
            $this->db->select('COUNT(*) as total_registros_sin_pedido');
            $this->db->from('venta');
           $this->db->where('venta.confirmacion_orden_compra="Sin Pedido"');
            $query = $this->db->get();
             return $query->result();
        }
  
  
  
  
  
  
=======

    public function get_by_id($kondisi) {
        $this->db->from('venta');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }

    public function modificarClienteRefacciones($data, $kondisi) {
        $this->db->update('venta', $data, $kondisi);
        return TRUE;
    }

    public function totalRegistroSicCarlos() {
        $this->db->select('COUNT(*) as total_registros_carlos');
        $this->db->from('venta');
        $this->db->where('venta.id= ', 4);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicAldo() {
        $this->db->select('COUNT(*) as total_registros_aldo');
        $this->db->from('venta');
        $this->db->where('venta.id= ', 7);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicElvira() {
        $this->db->select('COUNT(*) as total_registros_elvira');
        $this->db->from('venta');
        $this->db->where('venta.id= ', 33);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicJaime() {
        $this->db->select('COUNT(*) as total_registros_jaime');
        $this->db->from('venta');
        $this->db->where('venta.id= ', 28);
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicNoTroquelaCarlos() {
        $this->db->select('COUNT(*) as total_registros_carlos');
        $this->db->from('venta');
        $this->db->where('venta.id=4 and venta.troquel="No"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicNoTroquelaAldo() {
        $this->db->select('COUNT(*) as total_registros_aldo');
        $this->db->from('venta');
        $this->db->where('venta.id=7 and venta.troquel="No"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicNoTroquelaElvira() {
        $this->db->select('COUNT(*) as total_registros_elvira');
        $this->db->from('venta');
        $this->db->where('venta.id=33 and venta.troquel="No"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicNoTroquelaJaime() {
        $this->db->select('COUNT(*) as total_registros_jaime');
        $this->db->from('venta');
        $this->db->where('venta.id=28 and venta.troquel="No"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicConfirmacionCarlos() {
        $this->db->select('COUNT(*) as total_registros_carlos');
        $this->db->from('venta');
        $this->db->where('venta.id=4 and venta.confirmacion_orden_compra="Consignación"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicConfirmacionAldo() {
        $this->db->select('COUNT(*) as total_registros_aldo');
        $this->db->from('venta');
        $this->db->where('venta.id=7 and venta.confirmacion_orden_compra="Consignación"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicConfirmacionElvira() {
        $this->db->select('COUNT(*) as total_registros_elvira');
        $this->db->from('venta');
        $this->db->where('venta.id=33 and venta.confirmacion_orden_compra="Consignación"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicConfirmacionJaime() {
        $this->db->select('COUNT(*) as total_registros_jaime');
        $this->db->from('venta');
        $this->db->where('venta.id=28 and venta.confirmacion_orden_compra="Consignación"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicOrdenCarlos() {
        $this->db->select('COUNT(*) as total_registros_carlos');
        $this->db->from('venta');
        $this->db->where('venta.id=4 and venta.confirmacion_orden_compra="Orden de Compra"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicOrdenAldo() {
        $this->db->select('COUNT(*) as total_registros_aldo');
        $this->db->from('venta');
        $this->db->where('venta.id=7 and venta.confirmacion_orden_compra="Orden de Compra"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicOrdenElvira() {
        $this->db->select('COUNT(*) as total_registros_elvira');
        $this->db->from('venta');
        $this->db->where('venta.id=33 and venta.confirmacion_orden_compra="Orden de Compra"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicOrdenJaime() {
        $this->db->select('COUNT(*) as total_registros_jaime');
        $this->db->from('venta');
        $this->db->where('venta.id=28 and venta.confirmacion_orden_compra="Orden de Compra"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicSinPedidoCarlos() {
        $this->db->select('COUNT(*) as total_registros_carlos');
        $this->db->from('venta');
        $this->db->where('venta.id=4 and venta.confirmacion_orden_compra="Sin Pedido"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicSinPedidoAldo() {
        $this->db->select('COUNT(*) as total_registros_aldo');
        $this->db->from('venta');
        $this->db->where('venta.id=7 and venta.confirmacion_orden_compra="Sin Pedido"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicSinPedidoElvira() {
        $this->db->select('COUNT(*) as total_registros_elvira');
        $this->db->from('venta');
        $this->db->where('venta.id=33 and venta.confirmacion_orden_compra="Sin Pedido"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicSinPedidoJaime() {
        $this->db->select('COUNT(*) as total_registros_jaime');
        $this->db->from('venta');
        $this->db->where('venta.id=28 and venta.confirmacion_orden_compra="Sin Pedido"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSic() {
        $this->db->select('COUNT(*) as total_registros_sic');
        $this->db->from('venta');
        $this->db->where('venta.id=6 OR venta.id=7 OR venta.id=8 OR venta.id=28');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicNoTroquela() {
        $this->db->select('COUNT(*) as total_registros_no_troquela');
        $this->db->from('venta');
        $this->db->where('venta.troquel="No"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicSConsignacion() {
        $this->db->select('COUNT(*) as total_consignacion');
        $this->db->from('venta');
        $this->db->where('venta.confirmacion_orden_compra="Consignación"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicOrdenCompra() {
        $this->db->select('COUNT(*) as total_registros_orden_compra');
        $this->db->from('venta');
        $this->db->where('venta.confirmacion_orden_compra="Orden de Compra"');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalRegistroSicSinPedido() {
        $this->db->select('COUNT(*) as total_registros_sin_pedido');
        $this->db->from('venta');
        $this->db->where('venta.confirmacion_orden_compra="Sin Pedido"');
        $query = $this->db->get();
        return $query->result();
    }

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
}
