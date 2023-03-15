<?php

require 'PlacaPojo.php';
require 'IModeloAbstracto.php';

/**
 * Description of CatalogoVenTecModelo
 *
 * @author Desarrollo.robus
 */
class PlacaModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function add($data) {
        $this->db->insert('placa', $data);
    }

    public function delete($id) {
        $this->db->delete('placa', array('id_placa' => $id));
    }

    public function query() {
        $query = $this->db->get('placa');
        $colPlaca = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new PlacaPojo($value->id_placa, $value->no_maquina, $value->modelo, $value->serie, $value->placa, $value->factura, $value->cliente, $value->pedimento
            );

            array_push($colPlaca, $objeto);
        }
        return $colPlaca;
    }

    public function update($placa) {
        $datos = array(
            "no_maquina" => $placa->getNo_maquina(),
            "modelo" => $placa->getModelo(),
            "serie" => $placa->getSerie(),
            "placa" => $placa->getPlaca(),
            "factura" => $placa->getFactura(),
            "cliente" => $placa->getPedimento(),
        );
        $this->db->where("id_placa", $placa->getId_placa());
        $this->db->update("placa", $datos);
    }

    public function obtener($id_placa) {
        $objj = $this->db->query(" Select * From placa where id_placa= $id_placa");
        $obj = $objj->row();
        $dp = array('id_placa' => $obj->id_placa,
            'no_maquina' => $obj->no_maquina,
            'modelo' => $obj->modelo,
            'serie' => $obj->serie,
            'placa' => $obj->placa,
            'factura' => $obj->factura,
            'cliente' => $obj->cliente,
            'pedimento' => $obj->pedimento
        );
        return $dp;
    }

    public function actualizar($data) {
        $this->db->where('id_placa', $data['id_placa']);
        return $this->db->update('placa', $data);
    }

    public function refacciones() {
        
    }

    function save_upload($title, $modelo, $serie, $placa, $factura, $cliente, $pedimento) {
        $data = array(
            'no_maquina' => $title,
            'modelo' => $modelo,
            'serie' => $serie,
            'placa' => $placa,
            'factura' => $factura,
            'cliente' => $cliente,
            'pedimento' => $pedimento
        );
        $result = $this->db->insert('placa', $data);
        return $result;
    }
    
    
     function update_upload($title, $modelo, $serie, $placa, $factura, $cliente, $pedimento) {
        $data = array(
            'no_maquina' => $title,
            'modelo' => $modelo,
            'serie' => $serie,
            'placa' => $placa,
            'factura' => $factura,
            'cliente' => $cliente,
            'pedimento' => $pedimento
        );
        $result = $this->db->insert('placa', $data);
        return $result;
    }

}
