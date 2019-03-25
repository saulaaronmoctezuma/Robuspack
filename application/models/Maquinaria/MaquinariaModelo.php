<?php

require 'MaquinariaPojo.php';
require 'IModeloAbstracto.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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

        foreach ($query->result() as $key => $value) {
            $objeto = new MaquinariaPojo($value->id_maquinaria, $value->referencia, $value->fecha
                    , $value->fabricante, $value->maquina, $value->precio1, $value->precio2, $value->precio3, $value->precio4, $value->precio5, $value->pcexwork, $value->pcfob, $value->pccif, $value->pccip, $value->ancho, $value->espesor, $value->diametro, $value->empresa_competencia_1, $value->empresa_competencia_2, $value->inventario,
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
            'piezas_recibir' => $obj->piezas_recibir,
            'fecha_corte_rotacion' => $obj->fecha_corte_rotacion
                );
        return $dp;
    }

    public function actualizar($data) {

        $this->db->where('id_maquinaria', $data['id_maquinaria']);
        return $this->db->update('maquinaria', $data);
    }

    public function refacciones() {
        
    }

}
