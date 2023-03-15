<?php

require 'MaquinariaPojo.php';
require 'MaquinariaPojoCorteRotacion.php';
require 'IModeloAbstracto.php';

<<<<<<< HEAD

/*
 * Desarrolladores : Saúl Aarón González Moctezuma 
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
=======
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
 */

class MaquinariaModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function add($data) {
        $this->db->insert('maquinaria', $data);
    }

    public function delete($id) {
        $this->db->delete('maquinaria', array('id_maquinaria' => $id));
    }

    public function query() {
        $query = $this->db->get('maquinaria');
        $colMaquinarias = array();

<<<<<<< HEAD
         foreach ($query->result() as $key => $value) {
            $objeto = new MaquinariaPojo($value->id_maquinaria, $value->referencia, $value->fecha
                    , $value->fabricante, $value->maquina, $value->precio1, $value->precio2, $value->precio3, $value->precio4, $value->precio5,$value->fecha_actualizacion_precio, $value->pcexwork, $value->pcfob, $value->pccif, $value->pccip, $value->ancho, $value->espesor, $value->diametro, $value->empresa_competencia_1, $value->empresa_competencia_2, $value->inventario,
=======
        foreach ($query->result() as $key => $value) {
            $objeto = new MaquinariaPojo($value->id_maquinaria, $value->referencia, $value->fecha
                    , $value->fabricante, $value->maquina, $value->precio1, $value->precio2, $value->precio3, $value->precio4, $value->precio5, 
                    $value->pcexwork, $value->pcfob, $value->pccif, $value->pccip, $value->ancho, $value->espesor, $value->diametro, $value->empresa_competencia_1,
                    $value->empresa_competencia_2, $value->inventario,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value->piezas_recibir,$value->fecha_corte_rotacion);

            array_push($colMaquinarias, $objeto);
        }
        return $colMaquinarias;
    }

    public function update($maquinaria) {
        if ($maquinaria instanceof MaquinariaPojo) {
            $datos = array(
                "referencia" => $maquinaria->getReferencia(),
                "fecha" => $maquinaria->getFecha(),
                "fabricante" => $maquinaria->getFabricante(),
                "maquina" => $maquinaria->getMaquina(),
                "precio1" => $maquinaria->getPrecio1(),
                "precio2" => $maquinaria->getPrecio2(),
                "precio3" => $maquinaria->getPrecio3(),
                "precio4" => $maquinaria->getPrecio4(),
                "precio5" => $maquinaria->getPrecio5(),
<<<<<<< HEAD
                "fecha_actualizacion_precio" => $maquinaria->getFecha_actualizacion_precio(),
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                "pcexwork" => $maquinaria->getPcexwork(),
                "pcfob" => $maquinaria->getPcfob(),
                "pccif" => $maquinaria->getPccif(),
                "pccip" => $maquinaria->getPccip(),
                "ancho" => $maquinaria->getAncho(),
                "espesor" => $maquinaria->getEspesor(),
                "diametro" => $maquinaria->getDiametro(),
                "empresa_competencia_1" => $maquinaria->getEmpresa_competencia_1(),
                "empresa_competencia_2" => $maquinaria->getEmpresa_competencia_2(),
                "inventario" => $maquinaria->getInventario(),
                "piezas_recibir" => $maquinaria->getPiezas_recibir(),
                "fecha_corte_rotacion" => $maquinaria->getFecha_corte_rotacion()
            );
            $this->db->where("id_maquinaria", $maquinaria->getId_maquinaria());
            $this->db->update("maquinaria", $datos);
        }
    }

    public function obtener($id_maquinaria) {
        $objj = $this->db->query(" Select * From maquinaria where id_maquinaria= $id_maquinaria");
        $obj = $objj->row();
        $dp = array('id_maquinaria' => $obj->id_maquinaria,
            'referencia' => $obj->referencia,
            'fecha' => $obj->fecha,
            'fabricante' => $obj->fabricante,
            'maquina' => $obj->maquina,
            'precio1' => $obj->precio1,
            'precio2' => $obj->precio2,
            'precio3' => $obj->precio3,
            'precio4' => $obj->precio4,
            'precio5' => $obj->precio5,
<<<<<<< HEAD
            'fecha_actualizacion_precio' => $obj->fecha_actualizacion_precio,
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            'pcexwork' => $obj->pcexwork,
            'pcfob' => $obj->pcfob,
            'pccif' => $obj->pccif,
            'pccip' => $obj->pccip,
            'ancho' => $obj->ancho,
            'espesor' => $obj->espesor,
            'diametro' => $obj->diametro,
            'empresa_competencia_1' => $obj->empresa_competencia_1,
            'empresa_competencia_2' => $obj->empresa_competencia_2,
            'inventario' => $obj->inventario,
<<<<<<< HEAD
             'piezas_recibir' => $obj->piezas_recibir,
=======
            'piezas_recibir' => $obj->piezas_recibir,
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            'fecha_corte_rotacion' => $obj->fecha_corte_rotacion
                );
        return $dp;
    }

    public function actualizar($data) {

        $this->db->where('id_maquinaria', $data['id_maquinaria']);
        return $this->db->update('maquinaria', $data);
    }
<<<<<<< HEAD
    
    
       public function querybusqueda() {
=======

    public function refacciones() {
        
    }
    
     public function querybusqueda() {
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606


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
            //$query = $this->db->query('SELECT * FROM Venta order by id_venta desc');
            
       
            
            $this->db->select('id_maquinaria,fecha_corte_rotacion');
            $this->db->from('maquinaria');
            //$this->db->join('users', 'maquinaria.id=users.id');
            $this->db->where('maquinaria.id_maquinaria=', '1');
            $this->db->order_by('maquinaria.id_maquinaria', 'asc');

            $query = $this->db->get();
            $data = $query->result_array();
            
            
            
            
            
            
            
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new MaquinariaPojoCorteRotacion(
           $value->id_maquinaria,$value->fecha_corte_rotacion);

                array_push($colVentas, $objeto);
            }
            return $colVentas;
        }
        //condicions que realice la consulta solo si es refacciones
         else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

             
            $this->db->select('id_maquinaria,fecha_corte_rotacion');
            $this->db->from('maquinaria');
            //$this->db->join('users', 'maquinaria.id=users.id');
            $this->db->where('maquinaria.id_maquinaria=', '1');
            $this->db->order_by('maquinaria.id_maquinaria', 'asc');

            $query = $this->db->get();
            $data = $query->result_array();
            
            
            
            
            
            
            
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new MaquinariaPojoCorteRotacion(
           $value->id_maquinaria,$value->fecha_corte_rotacion);

                array_push($colVentas, $objeto);
            }
            return $colVentas;
<<<<<<< HEAD
        }else if ($dataLevel == "is_logistica") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

             
            $this->db->select('id_maquinaria,fecha_corte_rotacion');
            $this->db->from('maquinaria');
            //$this->db->join('users', 'maquinaria.id=users.id');
            $this->db->where('maquinaria.id_maquinaria=', '1');
            $this->db->order_by('maquinaria.id_maquinaria', 'asc');

            $query = $this->db->get();
            $data = $query->result_array();
            
            
            
            
            
            
            
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new MaquinariaPojoCorteRotacion(
           $value->id_maquinaria,$value->fecha_corte_rotacion);

                array_push($colVentas, $objeto);
            }
            return $colVentas;
=======
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        }  //condicions que realice la consulta solo si es refacciones
         else if ($dataLevel == "is_refacciones") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

             
            $this->db->select('id_maquinaria,fecha_corte_rotacion');
            $this->db->from('maquinaria');
            //$this->db->join('users', 'maquinaria.id=users.id');
            $this->db->where('maquinaria.id_maquinaria=', '1');
            $this->db->order_by('maquinaria.id_maquinaria', 'asc');

            $query = $this->db->get();
            $data = $query->result_array();
<<<<<<< HEAD
            
            
            
            
            
            
            
=======
           
          
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new MaquinariaPojoCorteRotacion(
           $value->id_maquinaria,$value->fecha_corte_rotacion);

                array_push($colVentas, $objeto);
            }
            return $colVentas;
        } //condicions que realice la consulta solo si es refacciones
         else if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

             
            $this->db->select('id_maquinaria,fecha_corte_rotacion');
            $this->db->from('maquinaria');
            //$this->db->join('users', 'maquinaria.id=users.id');
            $this->db->where('maquinaria.id_maquinaria=', '1');
            $this->db->order_by('maquinaria.id_maquinaria', 'asc');

            $query = $this->db->get();
            $data = $query->result_array();
            
            
            
            
            
            
            
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new MaquinariaPojoCorteRotacion(
           $value->id_maquinaria,$value->fecha_corte_rotacion);

                array_push($colVentas, $objeto);
            }
            return $colVentas;
        } //condicions que realice la consulta solo si es refacciones
         else if ($dataLevel == "is_Director") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

             
            $this->db->select('id_maquinaria,fecha_corte_rotacion');
            $this->db->from('maquinaria');
            //$this->db->join('users', 'maquinaria.id=users.id');
            $this->db->where('maquinaria.id_maquinaria=', '1');
            $this->db->order_by('maquinaria.id_maquinaria', 'asc');

            $query = $this->db->get();
            $data = $query->result_array();
            
            
            
            
            
            
            
            $colVentas = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new MaquinariaPojoCorteRotacion(
           $value->id_maquinaria,$value->fecha_corte_rotacion);

                array_push($colVentas, $objeto);
            }
            return $colVentas;
        }else {
<<<<<<< HEAD
   
         redirect(site_url() . 'main/');
=======
            redirect(site_url() . 'main/');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        }
    }

}
