<?php

require 'EmpresaPojo.php';
require 'IModeloAbstracto.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpresaModelo
 *
 * @author Desarrollo.robus
 */
class EmpresaModelo extends CI_Model implements IModeloAbstracto {
    
    public function __construct() {
        parent::__construct();

        $this->load->database();
         $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('Empresa/EmpresaModelo');
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
    
    public function add($data) {
        $this->db->insert('Empresa', $data);
    }

    public function delete($id) {
        $this->db->delete('Empresa', array('id_empresa' => $id));
    }

    public function query() {
       $query = $this->db->query('SELECT * FROM empresa order by id_empresa asc');
        $colEmpresa = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new EmpresaPojo($value->id_empresa, $value->estado, 
                    $value->ciudad, $value->nombre_empresa, $value->estatus, 
                    $value->vendedor, $value->nombre, $value->cargo, 
                    $value->email, $value->email2, $value->email3, 
                    $value->pag_web, $value->marketing, $value->tel1, 
                    $value->tel2, $value->tel3, $value->direccion, 
                    $value->dom_secundario, $value->cp, $value->integrados, 
                    $value->corrugadora, $value->sheet, $value->single, 
                    $value->comercializadora, $value->litografia, $value->flexos,
                    $value->volumen, $value->comentarios, $value->fech_insercion, 
                    $value->fech_modificacion
                    );
            
            array_push($colEmpresa, $objeto);
        }
        return $colEmpresa;
    }

    public function update($empresa) {
        if ($empresa instanceof EmpresaPojo) {
            $datos = array(
               
                "estado" => $empresa->getEstado(),
                "ciudad" => $empresa->getCiudad(),
                "nombre_empresa" => $empresa->getNombre_empresa(),
                "estatus" => $empresa->getEstatus(),
                "vendedor" => $empresa->getVendedor(),
                "nombre" => $empresa->getNombre(),
                "cargo" => $empresa->getCargo(),
                "email1" => $empresa->getEmail(),
                "email2" => $empresa->getEmail2(),
                "email3" => $empresa->getEmail3(),
                "pag_web" => $empresa->getPag_web(),
                "marketing" => $empresa->getMarketing(),
                "tel1" => $empresa->getTel1(),
                "tel2" => $empresa->getTel2(),
                "tel3" => $empresa->getTel3(),
                "direccion" => $empresa->getDireccion(),
                "dom_secundario" => $empresa->getDom_secundario(),
                "cp" => $empresa->getCp(),
                "integrados" => $empresa->getIntegrados(),
                "corrugadora" => $empresa->getCorrugadora(),
                "sheet" => $empresa->getSheet(),
                "single" => $empresa->getSingle(),
                "comercializadora" => $empresa->getComercializadora(),
                "litografia" => $empresa->getLitografia(),
                "flexos" => $empresa->getFlexos(),
                "volumen" => $empresa->getVolumen(),
                "comentarios" => $empresa->getComentarios()
                
               
               
            );
            $this->db->where("id_empresa", $empresa->getId_empresa());
            $this->db->update("Empresa", $datos);
        }
    }

    public function obtener($id_empresa) {
        $objj = $this->db->query(" Select * From empresa where id_empresa=$id_empresa");
        $obj = $objj->row();
        $dp = array('id_empresa' => $obj->id_empresa,
            
            'estado' => $obj->estado,
            'ciudad' => $obj->ciudad,
            'nombre_empresa' => $obj->nombre_empresa,
            'estatus' => $obj->estatus,
            'vendedor' => $obj->vendedor,
            'nombre' => $obj->nombre,
            'cargo' => $obj->cargo,
            'email' => $obj->email,
            'email2' => $obj->email2,
            'email3' => $obj->email3,
            'pag_web' => $obj->pag_web,
            'marketing' => $obj->marketing,
            'tel1' => $obj->tel1,
            'tel2' => $obj->tel2,
            'tel3' => $obj->tel3,
            'direccion' => $obj->direccion,
            'dom_secundario' => $obj->dom_secundario,
            'cp' => $obj->cp,
            'integrados' => $obj->integrados,
            'corrugadora' => $obj->corrugadora,
            'sheet' => $obj->sheet,
            'single' => $obj->single,
            'comercializadora' => $obj->comercializadora,
            'litografia' => $obj->litografia,
            'flexos' => $obj->flexos,
            'volumen' => $obj->volumen,
            'comentarios' => $obj->comentarios
            
        );
        return $dp;
    }

    public function actualizar($data) {
        $this->db->where('id_empresa', $data['id_empresa']);
        return $this->db->update('Empresa', $data);
    }

    public function refacciones() {
        
    }

}

  