<?php

require 'RecoleccionDatosPojo.php';
require 'IModeloAbstracto.php';
/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 * Versión 1 Fecha: 11-04-2019 10:19 am 
 * Versión 2 Fecha: 18-04-2019 10:30 am 
 * Fecha: 26-06-2019 10:40 am 
 * Fecha: 27-06-2019 12:40 Pm 
 */
class RecoleccionDatosModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('RecoleccionDatos/RecoleccionDatosModelo');
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
        $this->db->insert('recoleccion_datos', $data);
    }

    public function delete($id) {
        $this->db->delete('recoleccion_datos', array('id_recolecion_datos' => $id));
    }

    /* public function query() {
      $query = $this->db->query('SELECT * FROM recoleccion_datos order by id_recolecion_datos desc');
      $colDatos = array();

      foreach ($query->result() as $key => $value) {
      $objeto = new RecoleccionDatosPojo(
      $value->id_recolecion_datos,
      $value->identificador,
      $value->nombre_empresa,
      $value->estado,
      $value->ciudad,
      $value->domicilio,
      $value->nombre,
      $value->cargo,
      $value->email,
      $value->tel,
      $value->nombre2,
      $value->cargo2,
      $value->email2,
      $value->tel2,
      $value->comentarios
      );

      array_push($colDatos, $objeto);
      }
      return $colDatos;
      }

     */

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

            $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
            
            
            
            //$this->db->where('users.id= ', 15);
            
            
            
            
            
            
            
            
            $this->db->order_by('recoleccion_datos.identificador', 'asc');

            $query = $this->db->get();
            $data = $query->result_array();
            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor, $value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );

                array_push($colDatos, $objeto);
            }
            return $colDatos;
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_logistica") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");
            //tree los datos de la consulta
            $query = $this->db->get();


            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                 $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor, $value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );

                array_push($colDatos, $objeto);
            }
            return $colDatos;
        }   //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_refacciones") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");
            //tree los datos de la consulta
            $query = $this->db->get();


            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                 $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor,$value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );

                array_push($colDatos, $objeto);
            }
            return $colDatos;
        }else if ($dataLevel == "is_maquinaria") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where('users.id= ', $dataLevel);
            //$this->db->where('recoleccion_datos.vendedor= ', 'Gerardo López Martinez');
            //$query = $this->db->order_by("id_venta", "desc");
            //tree los datos de la consulta
            $query = $this->db->get();


            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                 $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor, $value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );

                array_push($colDatos, $objeto);
            }
            return $colDatos;
        }else if ($dataLevel == "is_credito") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");
            //tree los datos de la consulta
            $query = $this->db->get();


            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                 $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor, $value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );

                array_push($colDatos, $objeto);
            }
            return $colDatos;
        }else if ($dataLevel == "is_consultor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
           $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
           // $this->db->order_by('users.first_name', 'asc');
           $this->db->order_by('recoleccion_datos.identificador', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");
            //tree los datos de la consulta
            $query = $this->db->get();


            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                 $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor, $value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );

                array_push($colDatos, $objeto);
            }
            return $colDatos;
        } else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            //$this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");
            //tree los datos de la consulta
            $query = $this->db->get();


            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                 $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor, $value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );

                array_push($colDatos, $objeto);
            }
            return $colDatos;
        }else if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            //$this->db->where('users.id= ', $dataLevel);
            //$this->db->where('recoleccion_datos.vendedor= ', 'César Alberto Cantú Omaña');
            //$query = $this->db->order_by("id_venta", "desc");
            //tree los datos de la consulta
            $query = $this->db->get();


            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                 $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor, $value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );

                array_push($colDatos, $objeto);
            }
            return $colDatos;
        }else if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            //$this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");
            //tree los datos de la consulta
            $query = $this->db->get();


            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                 $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor , $value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );

                array_push($colDatos, $objeto);
            }
            return $colDatos;
        }else if ($dataLevel == "is_servicio_a_clientes") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
     $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->order_by("id_venta", "desc");
            //tree los datos de la consulta
            $query = $this->db->get();


            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                 $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor, $value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );
                array_push($colDatos, $objeto);
            }
            return $colDatos;
        }else if ($dataLevel == "is_freelance") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('recoleccion_datos.id_recolecion_datos,recoleccion_datos.vendedor,recoleccion_datos.identificador, recoleccion_datos.nombre_empresa, recoleccion_datos.estado,'
                    . 'recoleccion_datos.ciudad, recoleccion_datos.domicilio, recoleccion_datos.nombre, recoleccion_datos.cargo, recoleccion_datos.email, recoleccion_datos.tel, '
                    . 'recoleccion_datos.nombre2,recoleccion_datos.cargo2,recoleccion_datos.email2, recoleccion_datos.tel2, recoleccion_datos.comentarios, users.first_name');
            $this->db->from('recoleccion_datos');
            $this->db->join('users', 'recoleccion_datos.id=users.id');
            $this->db->order_by('users.first_name', 'asc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            
            
        $this->db->where('users.id= ', $dataLevel);
            
            
            
            //$query = $this->db->order_by("id_venta", "desc");
            //tree los datos de la consulta
            $query = $this->db->get();


            $colDatos = array();

            foreach ($query->result() as $key => $value) {
                 $objeto = new RecoleccionDatosPojo(
                        $value->id_recolecion_datos,$value->vendedor, $value->identificador, $value->nombre_empresa, $value->estado, $value->ciudad, $value->domicilio, $value->nombre, 
                        $value->cargo, $value->email, $value->tel, $value->nombre2, $value->cargo2, $value->email2, $value->tel2, $value->comentarios,$value->first_name
                );

                array_push($colDatos, $objeto);
            }
            return $colDatos;
        }  else {
            redirect(site_url() . 'main/');
        }
    }

    public function update($recoleccion_datos) {
        if ($recoleccion_datos instanceof RecoleccionDatosPojo) {
            $datos = array(
                "vendedor" => $recoleccion_datos->getVendedor(),
                 
                "identificador" => $recoleccion_datos->getIdentificador(),
                "nombre_empresa" => $recoleccion_datos->getNombre_empresa(),
                "estado" => $recoleccion_datos->getEstado(),
                "ciudad" => $recoleccion_datos->getCiudad(),
                "domicilio" => $recoleccion_datos->getDomicilio(),
                "nombre" => $recoleccion_datos->getNombre(),
                "cargo" => $recoleccion_datos->getCargo(),
                "email" => $recoleccion_datos->getEmail(),
                "tel" => $recoleccion_datos->getTel(),
                "nombre2" => $recoleccion_datos->getNombre2(),
                "cargo2" => $recoleccion_datos->getCargo2(),
                "email2" => $recoleccion_datos->getEmail2(),
                "tel2" => $recoleccion_datos->getTel2(),
                "comentarios" => $recoleccion_datos->getComentarios()
            );
            $this->db->where("id_recolecion_datos", $recoleccion_datos->sgetId_recolecion_datos());
            $this->db->update("recoleccion_datos", $datos);
        }
    }

    public function obtener($id_recolecion_datos) {
        $objj = $this->db->query("Select * from recoleccion_datos where id_recolecion_datos=$id_recolecion_datos");
        $obj = $objj->row();
        $dp = array('id_recolecion_datos' => $obj->id_recolecion_datos,
              'vendedor' => $obj->vendedor,
            
            
            'identificador' => $obj->identificador,
            'nombre_empresa' => $obj->nombre_empresa,
            'estado' => $obj->estado,
            'ciudad' => $obj->ciudad,
            'domicilio' => $obj->domicilio,
            'nombre' => $obj->nombre,
            'cargo' => $obj->cargo,
            'email' => $obj->email,
            'tel' => $obj->tel,
            'nombre2' => $obj->nombre2,
            'cargo2' => $obj->cargo2,
            'email2' => $obj->email2,
            'tel2' => $obj->tel2,
            'comentarios' => $obj->comentarios
        );
        return $dp;
    }

    public function actualizar($data) {
        $this->db->where('id_recolecion_datos', $data['id_recolecion_datos']);
        return $this->db->update('recoleccion_datos', $data);
    }

    public function refacciones() {
        
    }
    
    
     /*  public function totalRegistroEmpresaAlethia()
    {
            $this->db->select('COUNT(*) as total_registros_alethia');
            $this->db->from('recoleccion_datos');
           $this->db->where('recoleccion_datos.id= ', 15);
            $query = $this->db->get();
             return $query->result();
        }*/
        
        
        
        
         public function totalRegistroEmpresaAlethia()
    {
           
             $query = $this->db->query('SELECT COUNT(*) as total_registros_alethia FROM recoleccion_datos r  where r.id=15 and r.identificador <> "Información compartida"');
          /* $this->db->select('COUNT(*) as total_registros_alethia');
            $this->db->from('recoleccion_datos');
           $this->db->where('recoleccion_datos.id= ', 15);
            $query = $this->db->get();*/
             return $query->result();
        }
        
        
        
        
               public function totalRegistroEmpresaAlehiaExistente()
    {
                   
                   
                   
                    $query = $this->db->query('SELECT COUNT(*) as total_registros_alethia_existente FROM recoleccion_datos r  where r.id=15 and r.identificador="Información compartida"');
            /*$this->db->select('COUNT(*) as total_registros_alethia_existente');
            $this->db->from('recoleccion_datos');
           $this->db->where('recoleccion_datos.id= ', 15);
            $this->db->where('recoleccion_datos.identificador= ', '');
            $query = $this->db->get();*/
             return $query->result();
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
           public function totalRegistroEmpresaBerenice()
    {
            $this->db->select('COUNT(*) as total_registros_berenice');
            $this->db->from('recoleccion_datos');
           $this->db->where('recoleccion_datos.id= ', 29);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroEmpresaOscar()
    {
            $this->db->select('COUNT(*) as total_registros_oscar');
            $this->db->from('recoleccion_datos');
           $this->db->where('recoleccion_datos.id= ', 18);
            $query = $this->db->get();
             return $query->result();
        }
        
        
        
         public function totalRegistroEmpresaAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('recoleccion_datos');
           $this->db->where('recoleccion_datos.id= ', 7);
            $query = $this->db->get();
             return $query->result();
        }
        
            public function totalRegistroEmpresaNadia()
    {
            $this->db->select('COUNT(*) as total_registros_nadia');
            $this->db->from('recoleccion_datos');
           $this->db->where('recoleccion_datos.id= ', 31);
            $query = $this->db->get();
             return $query->result();
        }
        
        
            public function totalRegistroEmpresaKaren()
    {
            $this->db->select('COUNT(*) as total_registros_karen');
            $this->db->from('recoleccion_datos');
           $this->db->where('recoleccion_datos.id= ', 2);
            $query = $this->db->get();
             return $query->result();
        }

        
               public function totalRegistroEmpresaSaul()
    {
            $this->db->select('COUNT(*) as total_registros_saul');
            $this->db->from('recoleccion_datos');
           $this->db->where('recoleccion_datos.id= ', 1);
            $query = $this->db->get();
             return $query->result();
        }
    public function querybusqueda() {
        
    }

}
