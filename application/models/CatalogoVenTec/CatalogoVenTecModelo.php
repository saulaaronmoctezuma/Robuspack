<?php

require 'CatalogoVenTecPojo.php';
require 'IModeloAbstracto.php';


/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
 
class CatalogoVenTecModelo extends CI_Model implements IModeloAbstracto {
    public function __construct() {
        parent::__construct();

        $this->load->database();
    }
    public function add($data) {
        $this->db->insert('catalogo_ven_tec',$data);
    }

    public function delete($id) {
        $this->db->delete('catalogo_ven_tec', array('id_catalogo'=>$id));
    }

    public function query() {
        $query=  $this->db->get('catalogo_ven_tec');
        $colCatalogoVenTec=array();
        
        foreach ($query->result() as $key => $value) {
            $objeto=new CatalogoVenTecPojo($value->id_catalogo,$value->nombre,$value->rol,$value->area,$value->comision,$value->correo);
        
            array_push($colCatalogoVenTec, $objeto);
            
            
        }
        return $colCatalogoVenTec;
    }

    public function update($catalogoventec) {
            $datos = array(
                "nombre" => $catalogoventec->getNombre(),
                "rol" => $catalogoventec->getRol(),
                "area" => $catalogoventec->getArea(),
                "comision" => $catalogoventec->getComision(),
                "correo" => $catalogoventec->getCorreo()
            );
            $this->db->where("id_correo", $catalogoventec->getId_catalogo());
            $this->db->update("catalogo_ven_tec", $datos);
                          
        }
    
    
     public function obtener($id_catalogo) {
        $objj = $this->db->query(" Select * From catalogo_ven_tec where id_catalogo= $id_catalogo");
        $obj=$objj->row();
        $dp = array('id_catalogo'=>  $obj->id_catalogo,
                'nombre' => $obj->nombre,
                'rol' => $obj->rol,
                'area' => $obj->area,
                'comision' => $obj->comision,
                'correo' => $obj->correo
                );
        return $dp;
    }
    
    public function actualizar($data) {
        $this->db->where('id_catalogo',$data['id_catalogo']);
        return $this->db->update('catalogo_ven_tec',$data);
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
    }
