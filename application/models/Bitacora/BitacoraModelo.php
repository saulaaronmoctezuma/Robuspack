<?php

require 'BitacoraPojo.php';
require 'IModeloAbstracto.php';
/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

class BitacoraModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();

        $this->load->database();
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
        $this->db->insert('Bitacora', $data);
    }

    public function delete($id) {
        $this->db->delete('Bitacora', array('id_bitacora' => $id));
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
            // $query = $this->db->query('SELECT * FROM listaclientes order by id_bitacora desc');

            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora. descripcion, bitacora.archivo1,bitacora.observacion, bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');
            $this->db->where("users.id='11' OR users.id='12'  OR users.id='13'");
            $this->db->order_by("id_bitacora", "desc");

            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );

                array_push($colBitacora, $objeto);
            }
            return $colBitacora;
        } else if ($dataLevel == "is_admin") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            // $query = $this->db->query('SELECT * FROM listaclientes order by id_bitacora desc');

            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora. descripcion, bitacora.archivo1,bitacora.observacion, bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->where("users.id='11'  OR users.id='12'  OR users.id='13'");
            $this->db->order_by("id_bitacora", "desc");
            $this->db->join('users', 'bitacora.id=users.id');

            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );
                array_push($colBitacora, $objeto);
            }
            return $colBitacora;
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
            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora. descripcion, bitacora.archivo1,bitacora.observacion,bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');


            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_bitacora", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );

                array_push($colBitacora, $objeto);
            }



            return $colBitacora;
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora. descripcion, bitacora.archivo1,bitacora.observacion,bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');


            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_bitacora", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );
                array_push($colBitacora, $objeto);
            }

            return $colBitacora;
        } else if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora. descripcion, bitacora.archivo1,bitacora.observacion,bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');


            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $this->db->where("users.id='11' OR  users.id='12' OR users.id='13'");

            $this->db->order_by("id_bitacora", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );

                array_push($colBitacora, $objeto);
            }

            return $colBitacora;
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function refacciones() {
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
            // $query = $this->db->query('SELECT * FROM listaclientes order by id_bitacora desc');

            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora.descripcion, bitacora.archivo1, bitacora.observacion, bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');
            $this->db->where("users.id='5' OR users.id='6' OR users.id='7' OR  users.id='8' OR users.id='9' OR users.id='10'");
            $this->db->order_by("id_bitacora", "desc");

            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );

                array_push($colBitacora, $objeto);
            }
            return $colBitacora;
        } else if ($dataLevel == "is_admin") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            // $query = $this->db->query('SELECT * FROM listaclientes order by id_bitacora desc');

            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora.descripcion, bitacora.archivo1,bitacora.observacion ,bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');
            $this->db->where("users.id='5' OR users.id='6' OR users.id='7' OR  users.id='8' OR users.id='9' OR users.id='10'");
            $this->db->order_by("id_bitacora", "desc");
            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );

                array_push($colBitacora, $objeto);
            }
            return $colBitacora;
        } else if ($dataLevel == "is_refacciones") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora. descripcion, bitacora.archivo1,bitacora.observacion, bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');


            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_bitacora", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();


            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );

                array_push($colBitacora, $objeto);
            }



            return $colBitacora;
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
            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora. descripcion, bitacora.archivo1,bitacora.observacion,bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');


            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_bitacora", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );

                array_push($colBitacora, $objeto);
            }



            return $colBitacora;
        } else if ($dataLevel == "is_maquinaria_refacciones") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora. descripcion, bitacora.archivo1,bitacora.observacion,bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');


            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_bitacora", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );
                array_push($colBitacora, $objeto);
            }



            return $colBitacora;
        } else if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora. descripcion, bitacora.archivo1,bitacora.observacion,bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');


            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $query = $this->db->where("users.id='5' OR users.id='6' OR users.id='7' OR  users.id='8' OR users.id='9' OR users.id='10'");

            $query = $this->db->order_by("id_bitacora", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );

                array_push($colBitacora, $objeto);
            }



            return $colBitacora;
        } else if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('bitacora.id_bitacora,bitacora.grupo, bitacora.cliente, bitacora. descripcion, bitacora.archivo1,bitacora.fecha_insercion, bitacora.fecha_modificar, users.first_name');
            $this->db->from('bitacora');
            $this->db->join('users', 'bitacora.id=users.id');


            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $query = $this->db->where("users.id='11' OR  users.id='12' OR users.id='13'");

            $query = $this->db->order_by("id_bitacora", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );

                array_push($colBitacora, $objeto);
            }



            return $colBitacora;
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function update($bitacora) {
        if ($bitacora instanceof BitacoraPojo) {
            $datos = array(
                "grupo" => $bitacora->getGrupo(),
                "cliente" => $bitacora->getCliente(),
                "descripcion" => $bitacora->getDescripcion(),
                "archivo1" => $bitacora->getArchivo1(),
                "observacion" => $bitacora->getObservacion(),
                "fecha_insercion" => $bitacora->getFecha_insercion(),
                "fecha_modificar" => $bitacora->getFecha_modificar()
            );
            $this->db->where("id_bitacora", $bitacora->getId_bitacora());
            $this->db->update("Bitacora", $datos);
        }
    }

    public function obtener($id_bitacora) {
        $objj = $this->db->query(" Select * From bitacora where id_bitacora=$id_bitacora");
        $obj = $objj->row();
        $dp = array('id_bitacora' => $obj->id_bitacora,
            'grupo' => $obj->grupo,
            'cliente' => $obj->cliente,
            'descripcion' => $obj->descripcion,
            'archivo1' => $obj->archivo1,
            'observacion' => $obj->observacion
        );
        return $dp;
    }

    public function actualizar($data) {
        $this->db->where('id_bitacora', $data['id_bitacora']);
        return $this->db->update('Bitacora', $data);
    }

    public function guardar($datos) {
        return $this->db->insert("documentos", $datos);
    }

    function save_upload($title, $cliente, $descripcion, $image,$observacion) {
        /* Para traerse el id del usuario */
        $data = $this->session->userdata;
        /* Para traerse el id del usuario */
        $data = array(
            'grupo' => $title,
            'cliente' => $cliente,
            'descripcion' => $descripcion,
            'archivo1' => $image,
            'observacion' =>$observacion ,
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );
        if ($result = $this->db->insert('bitacora', $data)) {
            
            return $result;
        }
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

}
