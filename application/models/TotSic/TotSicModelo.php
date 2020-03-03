<?php


require 'IModeloAbstracto.php';

class TotSicModelo extends CI_Model implements IModeloAbstracto {

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
    
    
    
      public function totalRegistroSicCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('venta');
           $this->db->where('venta.id= ', 6);
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('venta');
           $this->db->where('venta.id= ', 7);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('venta');
           $this->db->where('venta.id= ',33);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicJaime()
    {
            $this->db->select('COUNT(*) as total_registros_jaime');
            $this->db->from('venta');
           $this->db->where('venta.id= ', 28);
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicNoTroquelaCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('venta');
          $this->db->where('venta.id=6 and venta.troquel="No"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicNoTroquelaAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('venta');
           $this->db->where('venta.id=7 and venta.troquel="No"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicNoTroquelaElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('venta');
           $this->db->where('venta.id=33 and venta.troquel="No"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicNoTroquelaJaime()
    {
            $this->db->select('COUNT(*) as total_registros_jaime');
            $this->db->from('venta');
           $this->db->where('venta.id=28 and venta.troquel="No"');
            $query = $this->db->get();
             return $query->result();
        }
        
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        public function totalRegistroSicConfirmacionCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('venta');
            $this->db->where('venta.id=6 and venta.confirmacion_orden_compra="Consignación"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicConfirmacionAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('venta');
           $this->db->where('venta.id=7 and venta.confirmacion_orden_compra="Consignación"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicConfirmacionElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('venta');
          $this->db->where('venta.id=33 and venta.confirmacion_orden_compra="Consignación"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicConfirmacionJaime()
    {
            $this->db->select('COUNT(*) as total_registros_jaime');
            $this->db->from('venta');
            $this->db->where('venta.id=28 and venta.confirmacion_orden_compra="Consignación"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
           public function totalRegistroSicOrdenCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('venta');
          $this->db->where('venta.id=6 and venta.confirmacion_orden_compra="Orden de Compra"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicOrdenAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('venta');
           $this->db->where('venta.id=7 and venta.confirmacion_orden_compra="Orden de Compra"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicOrdenElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('venta');
           $this->db->where('venta.id=33 and venta.confirmacion_orden_compra="Orden de Compra"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicOrdenJaime()
    {
            $this->db->select('COUNT(*) as total_registros_jaime');
            $this->db->from('venta');
           $this->db->where('venta.id=28 and venta.confirmacion_orden_compra="Orden de Compra"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
              
           public function totalRegistroSicSinPedidoCarlos()
    {
            $this->db->select('COUNT(*) as total_registros_carlos');
            $this->db->from('venta');
          $this->db->where('venta.id=6 and venta.confirmacion_orden_compra="Sin Pedido"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicSinPedidoAldo()
    {
            $this->db->select('COUNT(*) as total_registros_aldo');
            $this->db->from('venta');
           $this->db->where('venta.id=7 and venta.confirmacion_orden_compra="Sin Pedido"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicSinPedidoElvira()
    {
            $this->db->select('COUNT(*) as total_registros_elvira');
            $this->db->from('venta');
           $this->db->where('venta.id=33 and venta.confirmacion_orden_compra="Sin Pedido"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicSinPedidoJaime()
    {
            $this->db->select('COUNT(*) as total_registros_jaime');
            $this->db->from('venta');
           $this->db->where('venta.id=28 and venta.confirmacion_orden_compra="Sin Pedido"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
               public function totalRegistroSic()
        {
            $this->db->select('COUNT(*) as total_registros_sic');
            $this->db->from('venta');
          $this->db->where('venta.id=6 OR venta.id=7 OR venta.id=8 OR venta.id=28');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicNoTroquela()
    {
            $this->db->select('COUNT(*) as total_registros_no_troquela');
            $this->db->from('venta');
           $this->db->where('venta.troquel="No"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicSConsignacion()
    {
            $this->db->select('COUNT(*) as total_consignacion');
            $this->db->from('venta');
           $this->db->where('venta.confirmacion_orden_compra="Consignación"');
            $query = $this->db->get();
             return $query->result();
        }
        
           public function totalRegistroSicOrdenCompra()
    {
            $this->db->select('COUNT(*) as total_registros_orden_compra');
            $this->db->from('venta');
           $this->db->where('venta.confirmacion_orden_compra="Orden de Compra"');
            $query = $this->db->get();
             return $query->result();
        }
        
        
           public function totalRegistroSicSinPedido()
    {
            $this->db->select('COUNT(*) as total_registros_sin_pedido');
            $this->db->from('venta');
           $this->db->where('venta.confirmacion_orden_compra="Sin Pedido"');
            $query = $this->db->get();
             return $query->result();
        }

    public function querybusqueda() {
        
    }

}
