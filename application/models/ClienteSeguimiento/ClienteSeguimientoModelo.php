<?php

require 'ClienteSeguimientoPojo.php';
require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ClienteSeguimientoModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();

        $this->load->database();

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('ClienteSeguimiento/ClienteSeguimientoModelo');
        //para que tenga el mismo header
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

    public function add($data) {
        $this->db->insert('Cliente_Seguimiento', $data);
    }

    public function delete($id) {
        $this->db->delete('Cliente_Seguimiento', array('id_clienteseguimiento' => $id));
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
        if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            // $query = $this->db->query('SELECT * FROM cliente_seguimiento order by id_clienteseguimiento desc');

            $this->db->select('cliente_seguimiento.id_clienteseguimiento,cliente_seguimiento.grupo,
                        cliente_seguimiento.cliente, 
                        cliente_seguimiento.prioridad,
                        cliente_seguimiento.estatus,
                        cliente_seguimiento.necesidad,
                        cliente_seguimiento.fecha_cotizacion,
                        cliente_seguimiento.archivo1,
                       
                        cliente_seguimiento.fecha_contactar,
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.fecha_insercion,
                        cliente_seguimiento.fecha_modificacion,
                        users.first_name');
            $this->db->from('cliente_seguimiento');
            $this->db->join('users', 'cliente_seguimiento.id=users.id');
            $query = $this->db->get();
            $data = $query->result_array();

            $colClienteSeguimiento = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteSeguimientoPojo($value->id_clienteseguimiento, $value->grupo, $value->cliente, $value->prioridad, $value->estatus, $value->necesidad, $value->fecha_cotizacion, $value->archivo1, $value->fecha_contactar, $value->compromiso, $value->notas, $value->fecha_insercion, $value->fecha_modificacion, $value->first_name
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        } else if ($dataLevel == "is_admin") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,cliente_seguimiento.grupo,
                                cliente_seguimiento.cliente, 
                                cliente_seguimiento.prioridad,
                                cliente_seguimiento.estatus,
                                cliente_seguimiento.necesidad,
                                cliente_seguimiento.fecha_cotizacion,
                                cliente_seguimiento.archivo1,
                               
                                cliente_seguimiento.fecha_contactar,
                                cliente_seguimiento.compromiso,
                                cliente_seguimiento.notas,
                                cliente_seguimiento.fecha_insercion,
                                cliente_seguimiento.fecha_modificacion,
                                users.first_name');
            $this->db->from('cliente_seguimiento');
            $this->db->join('users', 'cliente_seguimiento.id=users.id');
            //$query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_clienteseguimiento", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado


            $colClienteSeguimiento = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteSeguimientoPojo($value->id_clienteseguimiento, $value->grupo, $value->cliente, $value->prioridad, $value->estatus, $value->necesidad, $value->fecha_cotizacion, $value->archivo1, $value->fecha_contactar, $value->compromiso, $value->notas, $value->fecha_insercion, $value->fecha_modificacion, $value->first_name
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        } else if ($dataLevel == "is_refacciones") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,cliente_seguimiento.grupo,
                            cliente_seguimiento.cliente, 
                            cliente_seguimiento.prioridad,
                            cliente_seguimiento.estatus,
                            cliente_seguimiento.necesidad,
                            cliente_seguimiento.fecha_cotizacion,
                            cliente_seguimiento.archivo1,
                           
                            cliente_seguimiento.fecha_contactar,
                            cliente_seguimiento.compromiso,
                            cliente_seguimiento.notas,
                            cliente_seguimiento.fecha_insercion,
                            cliente_seguimiento.fecha_modificacion,
                            users.first_name');
            $this->db->from('cliente_seguimiento');
            $this->db->join('users', 'cliente_seguimiento.id=users.id');
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_clienteseguimiento", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colClienteSeguimiento = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteSeguimientoPojo($value->id_clienteseguimiento, $value->grupo, $value->cliente, $value->prioridad, $value->estatus, $value->necesidad, $value->fecha_cotizacion, $value->archivo1, $value->fecha_contactar, $value->compromiso, $value->notas, $value->fecha_insercion, $value->fecha_modificacion, $value->first_name
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        }



        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_maquinaria") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,cliente_seguimiento.grupo,
                cliente_seguimiento.cliente, 
                cliente_seguimiento.prioridad,
                cliente_seguimiento.estatus,
                cliente_seguimiento.necesidad,
                cliente_seguimiento.fecha_cotizacion,
                cliente_seguimiento.archivo1,
               
                cliente_seguimiento.fecha_contactar,
                cliente_seguimiento.compromiso,
                cliente_seguimiento.notas,
                cliente_seguimiento.fecha_insercion,
                cliente_seguimiento.fecha_modificacion,
                users.first_name');
            $this->db->from('cliente_seguimiento');
            $this->db->join('users', 'cliente_seguimiento.id=users.id');
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_clienteseguimiento", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colClienteSeguimiento = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteSeguimientoPojo($value->id_clienteseguimiento, $value->grupo, $value->cliente, $value->prioridad, $value->estatus, $value->necesidad, $value->fecha_cotizacion, $value->archivo1, $value->fecha_contactar, $value->compromiso, $value->notas, $value->fecha_insercion, $value->fecha_modificacion, $value->first_name
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        }  //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_maquinaria_refacciones") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,cliente_seguimiento.grupo,
                cliente_seguimiento.cliente, 
                cliente_seguimiento.prioridad,
                cliente_seguimiento.estatus,
                cliente_seguimiento.necesidad,
                cliente_seguimiento.fecha_cotizacion,
                cliente_seguimiento.archivo1,
               
                cliente_seguimiento.fecha_contactar,
                cliente_seguimiento.compromiso,
                cliente_seguimiento.notas,
                cliente_seguimiento.fecha_insercion,
                cliente_seguimiento.fecha_modificacion,
                users.first_name');
            $this->db->from('cliente_seguimiento');
            $this->db->join('users', 'cliente_seguimiento.id=users.id');
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_clienteseguimiento", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colClienteSeguimiento = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteSeguimientoPojo($value->id_clienteseguimiento, $value->grupo, $value->cliente, $value->prioridad, $value->estatus, $value->necesidad, $value->fecha_cotizacion, $value->archivo1, $value->fecha_contactar, $value->compromiso, $value->notas, $value->fecha_insercion, $value->fecha_modificacion, $value->first_name
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        } else  if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            // $query = $this->db->query('SELECT * FROM cliente_seguimiento order by id_clienteseguimiento desc');

            $this->db->select('cliente_seguimiento.id_clienteseguimiento,cliente_seguimiento.grupo,
                        cliente_seguimiento.cliente, 
                        cliente_seguimiento.prioridad,
                        cliente_seguimiento.estatus,
                        cliente_seguimiento.necesidad,
                        cliente_seguimiento.fecha_cotizacion,
                        cliente_seguimiento.archivo1,
                       
                        cliente_seguimiento.fecha_contactar,
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.fecha_insercion,
                        cliente_seguimiento.fecha_modificacion,
                        users.first_name');
            $this->db->from('cliente_seguimiento');
            $this->db->join('users', 'cliente_seguimiento.id=users.id');
            $query = $this->db->where("users.id='6' OR  users.id='8' OR users.id='9' OR users.id='10'");
            $query = $this->db->get();
            $data = $query->result_array();

            $colClienteSeguimiento = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteSeguimientoPojo($value->id_clienteseguimiento, $value->grupo, $value->cliente, $value->prioridad, $value->estatus, $value->necesidad, $value->fecha_cotizacion, $value->archivo1, $value->fecha_contactar, $value->compromiso, $value->notas, $value->fecha_insercion, $value->fecha_modificacion, $value->first_name
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        }
        
        
        
        
        
        
        
        
        else  if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            // $query = $this->db->query('SELECT * FROM cliente_seguimiento order by id_clienteseguimiento desc');

            $this->db->select('cliente_seguimiento.id_clienteseguimiento,cliente_seguimiento.grupo,
                        cliente_seguimiento.cliente, 
                        cliente_seguimiento.prioridad,
                        cliente_seguimiento.estatus,
                        cliente_seguimiento.necesidad,
                        cliente_seguimiento.fecha_cotizacion,
                        cliente_seguimiento.archivo1,
                       
                        cliente_seguimiento.fecha_contactar,
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.fecha_insercion,
                        cliente_seguimiento.fecha_modificacion,
                        users.first_name');
            $this->db->from('cliente_seguimiento');
            $this->db->join('users', 'cliente_seguimiento.id=users.id');
            $query = $this->db->where("users.id='11' OR  users.id='12' OR users.id='13'");
            $query = $this->db->get();
            $data = $query->result_array();

            $colClienteSeguimiento = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteSeguimientoPojo($value->id_clienteseguimiento, $value->grupo, $value->cliente, $value->prioridad, $value->estatus, $value->necesidad, $value->fecha_cotizacion, $value->archivo1, $value->fecha_contactar, $value->compromiso, $value->notas, $value->fecha_insercion, $value->fecha_modificacion, $value->first_name
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        else {
            redirect(site_url() . 'main/');
        }
    }

    public function update($clienteseguimiento) {
        if ($clienteseguimiento instanceof ClienteSeguimientoPojo) {
            $datos = array(
                "grupo" => $clienteseguimiento->getGrupo(),
                "cliente" => $clienteseguimiento->getCliente(),
                "prioridad" => $clienteseguimiento->getPrioridad(),
                "estatus" => $clienteseguimiento->getEstatus(),
                "necesidad" => $clienteseguimiento->getNecesidad(),
                "fecha_cotizacion" => $clienteseguimiento->getFecha_cotizacion(),
                "archivo1" => $clienteseguimiento->getArchivo1(),
                "fecha_contactar" => $clienteseguimiento->getFecha_contactar(),
                "compromiso" => $clienteseguimiento->getCompromiso(),
                "notas" => $clienteseguimiento->getNotas(),
                "fecha_insercion" => $clienteseguimiento->getFecha_insercion(),
                "fecha_modificar" => $clienteseguimiento->getFecha_modificacion()
            );
            $this->db->where("id_clienteseguimiento", $clienteseguimiento->getId_clienteseguimiento());
            $this->db->update("cliente_seguimento", $datos);
        }
    }

    public function obtener($id_clienteseguimiento) {
        $objj = $this->db->query(" Select * From cliente_seguimiento where id_clienteseguimiento=$id_clienteseguimiento");
        $obj = $objj->row();
        $dp = array('id_clienteseguimiento' => $obj->id_clienteseguimiento,
            'grupo' => $obj->grupo,
            'cliente' => $obj->cliente,
            'prioridad' => $obj->prioridad,
            'estatus' => $obj->estatus,
            'necesidad' => $obj->necesidad,
            'fecha_cotizacion' => $obj->fecha_cotizacion,
            'archivo1' => $obj->archivo1,
            'fecha_contactar' => $obj->fecha_contactar,
            'compromiso' => $obj->compromiso,
            'notas' => $obj->notas
        );
        return $dp;
    }

    public function actualizar($data) {
        $this->db->where('id_clienteseguimiento', $data['id_clienteseguimiento']);
        return $this->db->update('cliente_seguimiento', $data);
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

    //select referencia
    function getOptions() {
        $options = $this->db->select('id_maquinaria, referencia')->order_by("referencia", "asc")
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
 
    function save_upload($title, $cliente, $prioridad, $estatus, $necesidad, $fecha_cotizacion, $image, $fecha_contactar, $compromiso, $notas) {
        /* Para traerse el id del usuario */
        $data = $this->session->userdata;
        /* Para traerse el id del usuario */
        $data = array(  
            'grupo' => $title,
            'cliente' => $cliente,
            'prioridad' => $prioridad,
            'estatus' => $estatus,
            'necesidad' => $necesidad,
            'fecha_cotizacion' => $fecha_cotizacion,
            'archivo1' => $image,
            'fecha_contactar' => $fecha_contactar,
            'compromiso' => $compromiso,
            'notas' => $notas,
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );
        $result = $this->db->insert('cliente_seguimiento', $data);
        return $result;
    }

}
