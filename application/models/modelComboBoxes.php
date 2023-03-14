<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
class modelComboBoxes extends CI_Model{
    //put your code here
    public function getEstados() {
        $this->db->order_by('nombreEstado', 'asc');
        $estados = $this->db->get('Estados');
        
        if($estados->num_rows() > 0){
            return $estados->result();
        }
    }
    
    public function getCiudades($idEstado) {
        $this->db->where('idEstado', $idEstado);
        $this->db->order_by('nombreCiudad', 'asc');
        $ciudades = $this->db->get('Ciudades');
        
        if($ciudades->num_rows() > 0){
            return $ciudades->result();
        }
    }
}
