<?php


require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TotBitModelo extends CI_Model implements IModeloAbstracto {

   public function __construct() {
        parent::__construct();

        $this->load->database();
    }
    
      public function getAllSettings()
    {
        $this->db->select('*');
        $this->db->from('settings');
        return $this->db->get()->row();

    }
       public function getUsers()
    {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->row();

    }
    
    

    public function add($data) {
   
    }

    public function delete($id) {
       
    }

    public function query() {
     
        
        
        
        
        
        
        
        
    }

    public function update($objeto) {
        
    }

    public function refacciones() {
        
    }
    
    
    
      public function totalRegistroBitacoraCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('bitacora');
           $this->db->where('bitacora.id= ', 6);
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroBitacoraAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('bitacora');
           $this->db->where('bitacora.id= ', 7);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroBitacoraElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('bitacora');
           $this->db->where('bitacora.id= ', 8);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroBitacoraOrlene()
    {
            $this->db->select('COUNT(*) as total_registros_orlene');
            $this->db->from('bitacora');
           $this->db->where('bitacora.id= ', 9);
            $query = $this->db->get();
             return $query->result();
        }

}
