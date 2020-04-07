<?php

require 'BitacoraRefaccionesPojo.php';
//require 'IModeloAbstracto.php';
/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

class BitacoraRefaccionesModelo extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('BitacoraRefacciones/BitacoraRefaccionesModelo');
        //para que tenga el mismo header
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

   public function insert($data)
  {
      $this->db->insert('bitacora_refacciones',$data);
      return TRUE;
  }
  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('bitacora_refacciones');
      return TRUE;
  }
    
    public function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('bitacora_refacciones');
      $query = $this->db->get();
      return $query->result();
  }
  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('bitacora_refacciones');

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
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            // $query = $this->db->query('SELECT * FROM listaclientes order by id_bitacora desc');

            /*$this->db->select('bitacora_refacciones.id_bitacora,bitacora_refacciones.grupo,bitacora_refacciones.grupo, bitacora_refacciones.cliente, bitacora_refacciones.descripcion, bitacora_refacciones.archivo1,bitacora_refacciones.observacion, bitacora_refacciones.fecha_insercion, bitacora_refacciones.fecha_modificar, users.first_name');
            $this->db->from('bitacora_refacciones');
           // $this->db->where("users.id='11'  OR users.id='12'  OR users.id='13'");
            $this->db->order_by("id_bitacora", "desc");
            $this->db->join('users', 'bitacora_refacciones.id=users.id');*/
            
            $query = $this->db->query('SELECT b.id_bitacora,b.grupo,b.cliente,b.descripcion, b.archivo1, b.observacion, DATE_ADD(b.fecha_insercion, INTERVAL -5 HOUR) as fecha_insercion , DATE_ADD(b.fecha_modificar, INTERVAL -5 HOUR) as fecha_modificar , u.first_name FROM bitacora_refacciones AS b INNER JOIN users u ON u.id=b.id Where u.id=6 or u.id=7 or u.id=28 or u.id=32 or u.id=5 order by b.id_bitacora desc');

           // $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraRefaccionesPojo(
                        $value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );
                array_push($colBitacora, $objeto);
            }
            return $colBitacora;
        
        } else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            // $query = $this->db->query('SELECT * FROM listaclientes order by id_bitacora desc');

            $this->db->select('bitacora_refacciones.id_bitacora,bitacora_refacciones.grupo,bitacora_refacciones.grupo, bitacora_refacciones.cliente, bitacora_refacciones.descripcion, bitacora_refacciones.archivo1,bitacora_refacciones.observacion, bitacora_refacciones.fecha_insercion, bitacora_refacciones.fecha_modificar, users.first_name');
            $this->db->from('bitacora_refacciones');
           // $this->db->where("users.id='11'  OR users.id='12'  OR users.id='13'");
            $this->db->order_by("id_bitacora", "desc");
            $this->db->join('users', 'bitacora_refacciones.id=users.id');

            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraRefaccionesPojo(
                        $value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );
                array_push($colBitacora, $objeto);
            }
            return $colBitacora;
        }


        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_Gerente_Ventas") {
               /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            // $query = $this->db->query('SELECT * FROM listaclientes order by id_bitacora desc');

            $this->db->select('bitacora_refacciones.id_bitacora,bitacora_refacciones.grupo,bitacora_refacciones.grupo, bitacora_refacciones.cliente, bitacora_refacciones.descripcion, bitacora_refacciones.archivo1,bitacora_refacciones.observacion, bitacora_refacciones.fecha_insercion, bitacora_refacciones.fecha_modificar, users.first_name');
            $this->db->from('bitacora_refacciones');
           // $this->db->where("users.id='11'  OR users.id='12'  OR users.id='13'");
            $this->db->order_by("id_bitacora", "desc");
            $this->db->join('users', 'bitacora_refacciones.id=users.id');

            $query = $this->db->get();
            $data = $query->result_array();

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraRefaccionesPojo(
                        $value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
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

            //consulta la tabla venta
            $this->db->select('bitacora_refacciones.id_bitacora,bitacora_refacciones.grupo,bitacora_refacciones.grupo, bitacora_refacciones.cliente, bitacora_refacciones.descripcion, bitacora_refacciones.archivo1,bitacora_refacciones.observacion, bitacora_refacciones.fecha_insercion, bitacora_refacciones.fecha_modificar, users.first_name');
            $this->db->from('bitacora_refacciones');
            $this->db->join('users', 'bitacora_refacciones.id=users.id');


            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_bitacora", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            /*$data = $query->result_array();*/

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraRefaccionesPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );
                array_push($colBitacora, $objeto);
            }

            return $colBitacora;
        } else if ($dataLevel == "is_freelance") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
            $this->db->select('bitacora_refacciones.id_bitacora,bitacora_refacciones.grupo,bitacora_refacciones.grupo, bitacora_refacciones.cliente, bitacora_refacciones.descripcion, bitacora_refacciones.archivo1,bitacora_refacciones.observacion, bitacora_refacciones.fecha_insercion, bitacora_refacciones.fecha_modificar, users.first_name');
            $this->db->from('bitacora_refacciones');
            $this->db->join('users', 'bitacora_refacciones.id=users.id');


            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_bitacora", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            /*$data = $query->result_array();*/

            $colBitacora = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new BitacoraRefaccionesPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
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
                $objeto = new BitacoraRefaccionesPojo($value->id_bitacora, $value->grupo, $value->cliente, $value->descripcion, $value->archivo1, $value->observacion, $value->fecha_insercion, $value->fecha_modificar, $value->first_name
                );

                array_push($colBitacora, $objeto);
            }

            return $colBitacora;
        } else {
            redirect(site_url() . 'main/');
        }
    }

   
      public function get_by_id($kondisi)
  {
      $this->db->from('bitacora_refacciones');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }
    
       public function updatedata($data,$kondisi)
  {
      $this->db->update('bitacora_refacciones',$data,$kondisi);
      return TRUE;
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
                /* Es para traezrse el id del usuario */
        );
        $result = $this->db->insert('cliente_seguimiento', $data);
        return $result;
    }

    public function add($objeto) {
        
    }

    public function querybusqueda() {
        
    }

  
     function getCliente() {
          $grupo = $this->db->select('cliente')
                  //->where('')
                  ->order_by("cliente", "asc")
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
    
      public function totalRegistroBitacoraCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('bitacora_refacciones');
           $this->db->where('bitacora_refacciones.id= ', 4);
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroBitacoraAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('bitacora_refacciones');
           $this->db->where('bitacora_refacciones.id= ', 7);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroBitacoraElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('bitacora_refacciones');
           $this->db->where('bitacora_refacciones.id= ', 36);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroBitacoraOrlene()
    {
            $this->db->select('COUNT(*) as total_registros_orlene');
            $this->db->from('bitacora_refacciones');
           $this->db->where('bitacora_refacciones.id= ', 9);
            $query = $this->db->get();
             return $query->result();
        }

        

}
