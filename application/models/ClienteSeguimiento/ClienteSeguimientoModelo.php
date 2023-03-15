<?php

require 'ClienteSeguimientoPojo.php';
require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 25-06-2019 10:30 am
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

    public function insert($data) {
        $this->db->insert('cliente_seguimiento', $data);
        return TRUE;
    }

    public function delete($where) {
        $this->db->where($where);
        $this->db->delete('cliente_seguimiento');
        return TRUE;
    }

    public function get($batas = NULL, $offset = NULL, $cari = NULL) {
        if ($batas != NULL) {
            $this->db->limit($batas, $offset);
        }
        if ($cari != NULL) {
            $this->db->or_like($cari);
        }
        $this->db->from('cliente_seguimiento');
        $query = $this->db->get();
        return $query->result();
    }

    public function jumlah_row($search) {
        $this->db->or_like($search);
        $query = $this->db->get('cliente_seguimiento');

        return $query->num_rows();
    }

    public function query() {

        //user data from session
        $data = $this->session->userdata;
        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
<<<<<<< HEAD
       // $id_usuario = $this->userlevel->checkLevel($data['id']);
=======
        $id_usuario = $this->userlevel->checkLevel($data['id']);
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
            $this->db->select('
                
                        cliente_seguimiento.id_clienteseguimiento,
                        cliente_seguimiento.cliente, 
                        cliente_seguimiento.nivel,
                        cliente_seguimiento.modelo_maquina,
                        cliente_seguimiento.numero_maquina,
                        cliente_seguimiento.valor_cotizacion,
                        cliente_seguimiento.fecha_ultima_visita,
                        cliente_seguimiento.necesidad, 
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.cotizacion,
                        cliente_seguimiento.pedido,
                         cliente_seguimiento.contrato,
<<<<<<< HEAD
                        users.first_name,cliente_seguimiento.fecha_prospeccion,
                       cliente_seguimiento.llamadas_cliente,
=======
                        users.first_name,  cliente_seguimiento.fecha_prospeccion,cliente_seguimiento.fecha_prospeccion,
                                             cliente_seguimiento.llamadas_cliente,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        cliente_seguimiento.fecha_contacto_cliente,
                        cliente_seguimiento.llamdas_hechas,
                        cliente_seguimiento.fecha_ult_llamada,
                        cliente_seguimiento.numero_visitas,
<<<<<<< HEAD
                       
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo
                        
                        ');
=======
                        cliente_seguimiento.fecha_ult_visita,
                        cliente_seguimiento.monto_cotizado,
                        cliente_seguimiento.modelo_cotizado,
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo

                        

');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
                $objeto = new ClienteSeguimientoPojo(
<<<<<<< HEAD
                        $value->id_clienteseguimiento, $value->cliente, $value->nivel, $value->necesidad, $value->compromiso, $value->notas, $value->modelo_maquina, $value->numero_maquina, $value->valor_cotizacion, $value->fecha_ultima_visita, $value->cotizacion, $value->pedido, $value->contrato, $value->first_name,
                             $value->fecha_prospeccion,
                            $value->llamadas_cliente,
                            $value->fecha_contacto_cliente,
                            $value->llamdas_hechas,
                            $value->fecha_ult_llamada,
                            $value->numero_visitas,
                            $value->ventas_cerrada,
                            $value->cliente_asignado,
                            $value->cliente_nuevo



=======
                        $value->id_clienteseguimiento, $value->cliente, $value->nivel, $value->necesidad, $value->compromiso, $value->notas, $value->modelo_maquina, $value->numero_maquina, $value->valor_cotizacion, $value->fecha_ultima_visita, $value->cotizacion, $value->pedido, $value->contrato, $value->first_name
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        } else if ($dataLevel == "is_admin") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,
               
                        cliente_seguimiento.cliente, 
                        cliente_seguimiento.nivel,
                         cliente_seguimiento.necesidad, 
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                         cliente_seguimiento.modelo_maquina,
                          cliente_seguimiento.numero_maquina,
                          cliente_seguimiento.valor_cotizacion,
                          cliente_seguimiento.fecha_ultima_visita,
                        cliente_seguimiento.cotizacion,
                        cliente_seguimiento.pedido,
                         cliente_seguimiento.contrato,
<<<<<<< HEAD
                        users.first_name,cliente_seguimiento.fecha_prospeccion,
                         cliente_seguimiento.llamadas_cliente,
=======
                        users.first_name,
                        cliente_seguimiento.fecha_prospeccion,
                        cliente_seguimiento.llamadas_cliente,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        cliente_seguimiento.fecha_contacto_cliente,
                        cliente_seguimiento.llamdas_hechas,
                        cliente_seguimiento.fecha_ult_llamada,
                        cliente_seguimiento.numero_visitas,
<<<<<<< HEAD
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo
                        ');
=======
                        cliente_seguimiento.fecha_ult_visita,
                        cliente_seguimiento.monto_cotizado,
                        cliente_seguimiento.modelo_cotizado,
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo
');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
                $objeto = new ClienteSeguimientoPojo(
<<<<<<< HEAD
                        $value->id_clienteseguimiento, $value->cliente, $value->nivel, $value->necesidad, $value->compromiso, $value->notas, $value->modelo_maquina, $value->numero_maquina, $value->valor_cotizacion, $value->fecha_ultima_visita, $value->cotizacion, $value->pedido, $value->contrato, $value->first_name
=======
                        $value->id_clienteseguimiento, $value->cliente, $value->nivel, $value->necesidad, $value->compromiso, $value->notas, 
                        
                        $value->modelo_maquina, $value->numero_maquina, $value->valor_cotizacion, $value->fecha_ultima_visita, $value->cotizacion, 
                        $value->pedido, $value->contrato, $value->first_name
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                         ,$value->fecha_prospeccion,
                            $value->llamadas_cliente,
                            $value->fecha_contacto_cliente,
                            $value->llamdas_hechas,
                            $value->fecha_ult_llamada,
                            $value->numero_visitas,
<<<<<<< HEAD
=======
                            $value->fecha_ult_visita,
                            $value->monto_cotizado,
                            $value->modelo_cotizado,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                            $value->ventas_cerrada,
                            $value->cliente_asignado,
                            $value->cliente_nuevo


<<<<<<< HEAD
=======

















>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        } else if ($dataLevel == "is_refacciones") {
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,
                        cliente_seguimiento.cliente, 
                         cliente_seguimiento.nivel,
                          cliente_seguimiento.modelo_maquina,
                          cliente_seguimiento.numero_maquina,
                          cliente_seguimiento.valor_cotizacion,
                          cliente_seguimiento.fecha_ultima_visita,
                        cliente_seguimiento.necesidad,
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.cotizacion,
                        cliente_seguimiento.pedido,
                        cliente_seguimiento.contrato,
<<<<<<< HEAD
                        users.first_name,
                        cliente_seguimiento.fecha_prospeccion,
                                                cliente_seguimiento.llamadas_cliente,
=======
                        users.first_name, cliente_seguimiento.fecha_prospeccion,
                        cliente_seguimiento.llamadas_cliente,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        cliente_seguimiento.fecha_contacto_cliente,
                        cliente_seguimiento.llamdas_hechas,
                        cliente_seguimiento.fecha_ult_llamada,
                        cliente_seguimiento.numero_visitas,
<<<<<<< HEAD
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo
                        
                        ');
=======
                        cliente_seguimiento.fecha_ult_visita,
                        cliente_seguimiento.monto_cotizado,
                        cliente_seguimiento.modelo_cotizado,
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo                        

');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
                $objeto = new ClienteSeguimientoPojo(
                        $value->id_clienteseguimiento, $value->cliente, $value->nivel, $value->necesidad, $value->compromiso, $value->notas, $value->modelo_maquina, $value->numero_maquina, $value->valor_cotizacion, $value->fecha_ultima_visita, $value->cotizacion, $value->pedido, $value->contrato, $value->first_name
<<<<<<< HEAD
                         ,$value->fecha_prospeccion,
                            $value->llamadas_cliente,
                            $value->fecha_contacto_cliente,
                            $value->llamdas_hechas,
                            $value->fecha_ult_llamada,
                            $value->numero_visitas,
                            $value->ventas_cerrada,
                            $value->cliente_asignado,
                            $value->cliente_nuevo


=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_maquinaria") { /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,
                        cliente_seguimiento.cliente, 
                         cliente_seguimiento.nivel,
                          cliente_seguimiento.modelo_maquina,
                          cliente_seguimiento.numero_maquina,
                          cliente_seguimiento.valor_cotizacion,
                          cliente_seguimiento.fecha_ultima_visita,
                        cliente_seguimiento.necesidad,
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.cotizacion,
                        cliente_seguimiento.pedido,
                        cliente_seguimiento.contrato,
<<<<<<< HEAD
                        users.first_name,
                        cliente_seguimiento.fecha_prospeccion,
=======
                        users.first_name, cliente_seguimiento.fecha_prospeccion,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                                cliente_seguimiento.llamadas_cliente,
                        cliente_seguimiento.fecha_contacto_cliente,
                        cliente_seguimiento.llamdas_hechas,
                        cliente_seguimiento.fecha_ult_llamada,
                        cliente_seguimiento.numero_visitas,
<<<<<<< HEAD
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo
                        
                        ');
=======
                        cliente_seguimiento.fecha_ult_visita,
                        cliente_seguimiento.monto_cotizado,
                        cliente_seguimiento.modelo_cotizado,
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
                $objeto = new ClienteSeguimientoPojo(
                        $value->id_clienteseguimiento, $value->cliente, $value->nivel, $value->necesidad, $value->compromiso, $value->notas, $value->modelo_maquina, $value->numero_maquina, $value->valor_cotizacion, $value->fecha_ultima_visita, $value->cotizacion, $value->pedido, $value->contrato, $value->first_name
<<<<<<< HEAD
                         ,$value->fecha_prospeccion,
                            $value->llamadas_cliente,
                            $value->fecha_contacto_cliente,
                            $value->llamdas_hechas,
                            $value->fecha_ult_llamada,
                            $value->numero_visitas,
                            $value->ventas_cerrada,
                            $value->cliente_asignado,
                            $value->cliente_nuevo


=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,
                        cliente_seguimiento.cliente, 
                         cliente_seguimiento.nivel,
                          cliente_seguimiento.modelo_maquina,
                          cliente_seguimiento.numero_maquina,
                          cliente_seguimiento.valor_cotizacion,
                          cliente_seguimiento.fecha_ultima_visita,
                        cliente_seguimiento.necesidad,
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.cotizacion,
                        cliente_seguimiento.pedido,
                        cliente_seguimiento.contrato,
<<<<<<< HEAD
                        users.first_name,cliente_seguimiento.fecha_prospeccion,
                                                cliente_seguimiento.llamadas_cliente,
=======
                        users.first_name,   cliente_seguimiento.fecha_prospeccion,                      cliente_seguimiento.llamadas_cliente,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        cliente_seguimiento.fecha_contacto_cliente,
                        cliente_seguimiento.llamdas_hechas,
                        cliente_seguimiento.fecha_ult_llamada,
                        cliente_seguimiento.numero_visitas,
<<<<<<< HEAD
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo
                        ');
=======
                        cliente_seguimiento.fecha_ult_visita,
                        cliente_seguimiento.monto_cotizado,
                        cliente_seguimiento.modelo_cotizado,
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
                $objeto = new ClienteSeguimientoPojo(
                        $value->id_clienteseguimiento, $value->cliente, $value->nivel, $value->necesidad, $value->compromiso, $value->notas, $value->modelo_maquina, $value->numero_maquina, $value->cotizacion, $value->pedido, $value->contrato, $value->first_name
<<<<<<< HEAD
                         ,$value->fecha_prospeccion,
                            $value->llamadas_cliente,
                            $value->fecha_contacto_cliente,
                            $value->llamdas_hechas,
                            $value->fecha_ult_llamada,
                            $value->numero_visitas,
                            $value->ventas_cerrada,
                            $value->cliente_asignado,
                            $value->cliente_nuevo


=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,
                        cliente_seguimiento.cliente, 
                         cliente_seguimiento.nivel,
                          cliente_seguimiento.modelo_maquina,
                          cliente_seguimiento.numero_maquina,
                          cliente_seguimiento.valor_cotizacion,
                          cliente_seguimiento.fecha_ultima_visita,
                        cliente_seguimiento.necesidad,
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.cotizacion,
                        cliente_seguimiento.pedido,
                        cliente_seguimiento.contrato,
<<<<<<< HEAD
                        users.first_name,cliente_seguimiento.fecha_prospeccion,
=======
                        users.first_name, cliente_seguimiento.fecha_prospeccion,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                                                cliente_seguimiento.llamadas_cliente,
                        cliente_seguimiento.fecha_contacto_cliente,
                        cliente_seguimiento.llamdas_hechas,
                        cliente_seguimiento.fecha_ult_llamada,
                        cliente_seguimiento.numero_visitas,
<<<<<<< HEAD
=======
                        cliente_seguimiento.fecha_ult_visita,
                        cliente_seguimiento.monto_cotizado,
                        cliente_seguimiento.modelo_cotizado,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo');
            $this->db->from('cliente_seguimiento');
            $this->db->join('users', 'cliente_seguimiento.id=users.id');
<<<<<<< HEAD
           $query = $this->db->where('users.id= ', $dataLevel);
           //$query = $this->db->where('users.id=6  or users.id= 7 or users.id= 4 or users.id= 12');
=======
            $query = $this->db->where('users.id= ', $dataLevel);
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            $query = $this->db->order_by("id_clienteseguimiento", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colClienteSeguimiento = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteSeguimientoPojo(
                        $value->id_clienteseguimiento, $value->cliente, $value->nivel, $value->necesidad, $value->compromiso, $value->notas, $value->modelo_maquina, $value->numero_maquina, $value->valor_cotizacion, $value->fecha_ultima_visita, $value->cotizacion, $value->pedido, $value->contrato, $value->first_name
<<<<<<< HEAD
                         ,$value->fecha_prospeccion,
                            $value->llamadas_cliente,
                            $value->fecha_contacto_cliente,
                            $value->llamdas_hechas,
                            $value->fecha_ult_llamada,
                            $value->numero_visitas,
                            $value->ventas_cerrada,
                            $value->cliente_asignado,
                            $value->cliente_nuevo


=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        } else if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,
               
                        cliente_seguimiento.cliente, 
                        cliente_seguimiento.nivel,
                         cliente_seguimiento.modelo_maquina,
                          cliente_seguimiento.numero_maquina,
                         cliente_seguimiento.necesidad, 
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.cotizacion,
                        cliente_seguimiento.pedido,
                         cliente_seguimiento.contrato,
<<<<<<< HEAD
                        users.first_name,cliente_seguimiento.fecha_prospeccion,
                                                cliente_seguimiento.llamadas_cliente,
=======
                        users.first_name,     cliente_seguimiento.fecha_prospeccion,                    cliente_seguimiento.llamadas_cliente,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                        cliente_seguimiento.fecha_contacto_cliente,
                        cliente_seguimiento.llamdas_hechas,
                        cliente_seguimiento.fecha_ult_llamada,
                        cliente_seguimiento.numero_visitas,
<<<<<<< HEAD
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo
                        
                        ');
=======
                        cliente_seguimiento.fecha_ult_visita,
                        cliente_seguimiento.monto_cotizado,
                        cliente_seguimiento.modelo_cotizado,
                        cliente_seguimiento.ventas_cerrada,
                        cliente_seguimiento.cliente_asignado,
                        cliente_seguimiento.cliente_nuevo');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
                $objeto = new ClienteSeguimientoPojo(
                        $value->id_clienteseguimiento, $value->cliente, $value->nivel, $value->necesidad, $value->compromiso, $value->notas, $value->modelo_maquina, $value->numero_maquina, $value->cotizacion, $value->pedido, $value->contrato, $value->first_name
<<<<<<< HEAD
                        
                         ,$value->fecha_prospeccion,
                            $value->llamadas_cliente,
                            $value->fecha_contacto_cliente,
                            $value->llamdas_hechas,
                            $value->fecha_ult_llamada,
                            $value->numero_visitas,
                            $value->ventas_cerrada,
                            $value->cliente_asignado,
                            $value->cliente_nuevo


=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                );

                array_push($colClienteSeguimiento, $objeto);
            }
            return $colClienteSeguimiento;
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function get_by_id($kondisi) {
        $this->db->from('cliente_seguimiento');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }

    public function update($data, $kondisi) {
        $this->db->update('cliente_seguimiento', $data, $kondisi);
        return TRUE;
    }

    //select referencia

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

    public function add($objeto) {
        
    }

    public function querybusqueda() {
        
    }

    public function refacciones() {
        
    }
/*
    function getCliente() {
        
        
        
        $data = $this->session->userdata;
        $data = array(
            //se lleva el valor del id del usuario
            $dataLevel = $this->userlevel->id($data['id']) 
        );

        $grupo = $this->db->select('empresa')
                ->where('id_usuario=' . $dataLevel)
                ->order_by("empresa", "asc")
                ->get('censo_maquinaria')
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

        foreach ($grupo as $option) {
            $options_arr[$option->empresa] = $option->empresa;
        }

        return $options_arr;
    }*/
    
      function getCliente() {
          $grupo = $this->db->select('nombre_empresa')
                  //->where('')
                  ->order_by("nombre_empresa", "asc")
<<<<<<< HEAD
                ->get('todas_las_empresas_v2')
=======
                ->get('todas_las_empresas')
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

        foreach ($grupo as $option) {
            $options_arr[$option->nombre_empresa] = $option->nombre_empresa;
        }

        return $options_arr;
    }

}
