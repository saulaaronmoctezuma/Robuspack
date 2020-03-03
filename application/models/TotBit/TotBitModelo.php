<?php


require 'IModeloAbstracto.php';


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
            $this->db->from('bitacora_refacciones');
           $this->db->where('bitacora_refacciones.id= ', 6);
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
           $this->db->where('bitacora_refacciones.id= ', 33);
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
