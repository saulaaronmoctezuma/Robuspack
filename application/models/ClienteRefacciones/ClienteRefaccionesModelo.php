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

    public function add($data) {
        $this->db->insert('venta', $data);
    }

    public function delete($id) {
        $this->db->delete('venta', array('id_venta' => $id));
    }
        public function Mayor1()
        {
            $this->db->query("call Mayor1()"); 

            
        }
    public function query() {


        //user data from session
        $data = $this->session->userdata;
        

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
            
       
            
            $this->db->select('*');
            $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('venta.referencia', 'asc');

            $query = $this->db->get();
            $data = $query->result_array();
            
            
            
            
            
            
            
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
            $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra,$value->fecha_ultima_factura, $value->first_name);

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
             $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
           $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();


            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
                   $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra,$value->fecha_ultima_factura, $value->first_name);

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
             $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
           $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();


            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
                     $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra,$value->fecha_ultima_factura, $value->first_name);

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
             $this->db->from('venta');
            $this->db->join('users', 'venta.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
           //$this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();


            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteRefaccionesPojo(
                   $value->id_venta, $value->grupo, $value->cliente, $value->referencia, $value->cantidad_maxima, $value->precio_unitario,$value->vida_util_dias, $value->periodo_surtimiento,$value->periodo_surtimiento_vida_util, $value->cantidad_minima, $value->paqueteria, $value->tipo_entrega, $value->dias_credito, $value->pulgadas,$value->diametro_rod_ml, $value->maquina_cliente, $value->capacitacion, $value->capacitacion_fecha, $value->piezas_juego, $value->costo_juego, $value->juego_mensuales, $value->golpes_prom_comp, $value->golpes_prom_rodicut, $value->beneficio_golpes_prom, $value->tiempo_rot_com, $value->tiempo_rot_rodicut, $value->beneficio_rot_prom, $value->precio_golpe, $value->ciudad_planta, $value->observacion,$value->marca_maquina, $value->contacto, $value->tipo_maquina, $value->troquel, $value->uso_de_cfdi, $value->metodo_pago, $value->fecha_visita, $value->fecha_seguimiento, $value->golpes_maquina,$value->confirmacion_orden_compra,$value->fecha_ultima_factura, $value->first_name);

                array_push($colVentas, $objeto);
            }
            return $colVentas;
        } else {
            redirect(site_url() . 'main/');
        }
    }

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
                 "marca_maquina" => $venta->getMarca_maquina(),
                "contacto" => $venta->getContacto(),
                "tipo_maquina" => $venta->getTipo_maquina(),
                "troquel" => $venta->getTroquel(),
                "uso_de_cfdi" => $venta->getUso_de_cfdi(),
                "metodo_pago" => $venta->getMetodo_pago(),
                "fecha_visita" => $venta->getFecha_visita(),
                "fecha_seguimiento" => $venta->getFecha_seguimiento(),
                "golpes_maquina" => $venta->getGolpes_maquina(),
                "confirmacion_orden_compra" => $venta->getConfirmacion_orden_compra(),
                "fecha_ultima_factura" => $venta->getfecha_ultima_factura()
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
            'troquel' => $obj->troquel,
            'uso_de_cfdi' => $obj->uso_de_cfdi,
            'metodo_pago' => $obj->metodo_pago,
            'fecha_visita' => $obj->fecha_visita,
            'fecha_seguimiento' => $obj->fecha_seguimiento,
            'golpes_maquina' => $obj->golpes_maquina,
            'confirmacion_orden_compra' => $obj->confirmacion_orden_compra,
            'fecha_ultima_factura' => $obj->fecha_ultima_factura
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
    
           
     //select grupo
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
    
    //select grupo
    function getCliente() {
        $grupo = $this->db->select('id_cliente, cliente')->order_by("cliente", "asc")
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

    public function refacciones() {
        
    }

    
}
