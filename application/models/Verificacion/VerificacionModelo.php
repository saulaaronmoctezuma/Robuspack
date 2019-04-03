<?php

require 'verificacionPojo.php';
require 'IModeloAbstracto.php';
/**
 *
 */
class verificacionModelo extends CI_Model implements IModeloAbstracto
{
    
    
    
     public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('verificacion/verificacionModelo');
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
        $query = $this->db->get('verificacion');
        $colPlaca = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new verificacionPojo($value->id_verificacion, $value->no_maqui, $value->modelo, $value->serie,$value->cliente, $value->pedimento, $value->foto, $value->factura 
            );

            array_push($colPlaca, $objeto);
        }
        return $colPlaca;
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

}
