<?php

require 'VerificacionPojo.php';
require 'IModeloAbstracto.php';

/**
 
 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 26/03/2019 Hora 10:15 pm
 * Fecha : Ultimo Cambio 03/04/2019 Hora 10:36 pm
 * * Fecha : Ultimo Cambio 20/07/2019 Hora 5:47 pm
 * Fecha : Ultimo Cambio 30/07/2019 Hora 10:07 am
 * Sistema de Control Robuspack.
 */
class VerificacionModelo extends CI_Model implements IModeloAbstracto
{
     public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('Verificacion/VerificacionModelo');
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
     
     
  public function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('verificacion');
      $query = $this->db->get();
      return $query->result();
  }
  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('verificacion');

    return $query->num_rows();
  }



  public function get_by_id($kondisi)
  {
      $this->db->from('verificacion');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('verificacion',$data);
      return TRUE;
  }
  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('verificacion');
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('verificacion',$data,$kondisi);
      return TRUE;
  }
  
    public function query() {
        
          $data = $this->session->userdata;


        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            //$query = $this->db->get('verificacion');
            $this->db->select('*');
            $this->db->from('verificacion');
               $this->db->where('verificacion.empresa=' , 'CARTONPACK S DE RL DE CV');
            $this->db->order_by('verificacion.no_maqui', 'desc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            // $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->get();
            
        $colPlaca = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new VerificacionPojo($value->id_verificacion, $value->no_maqui, $value->modelo,$value->empresa, $value->serie,
                    $value->cliente, $value->cliente_temporal, $value->pedimento, $value->pedimentopdf, $value->foto, $value->num_factura , $value->factura , $value->refacciones 
            );

            array_push($colPlaca, $objeto);
        }
        return $colPlaca;
    }
    
      else  {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            
             //$query = $this->db->get('verificacion');
            $this->db->select('*');
            $this->db->from('verificacion');
            $this->db->order_by('verificacion.no_maqui', 'desc');
            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            // $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->get();
            
        $colPlaca = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new VerificacionPojo($value->id_verificacion, $value->no_maqui, $value->modelo,$value->empresa, $value->serie,
                    $value->cliente, $value->cliente_temporal, $value->pedimento, $value->pedimentopdf, $value->foto, $value->num_factura , $value->factura , $value->refacciones 
            );

            array_push($colPlaca, $objeto);
        }
        return $colPlaca;
    
            
            
            
      }
    
    
    
    
    
      }
    public function add($objeto) {
        
    }

    public function refacciones() {
        
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

    public function querybusqueda() {
        
    }
    
    
       public function totalRegistroPlacas()
    {
            $this->db->select('COUNT(*) as total_registros_placas');
            $this->db->from('verificacion');
          // $this->db->where('venta.id= ', 1);
            $query = $this->db->get();
             return $query->result();
        }

}
