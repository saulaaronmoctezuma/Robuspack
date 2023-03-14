<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
class Upload_model extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    function save_upload($title, $cliente, $descripcion, $image) {
        /* Para traerse el id del usuario */
        $data = $this->session->userdata;
        /* Para traerse el id del usuario */
        $data = array(
            'grupo' => $title,
            'cliente' => $cliente,  
            'descripcion' => $descripcion,
            'archivo1' => $image,
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );
        $result = $this->db->insert('bitacora', $data);
        return $result;
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
