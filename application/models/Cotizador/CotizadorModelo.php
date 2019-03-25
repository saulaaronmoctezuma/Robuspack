<?php

require 'CotizadorPojo.php';
require 'IModeloAbstracto.php';

/**
 * Description of Cotizador
 *
 * @author Desarrollo.robus
 */
class CotizadorModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function add($data) {
        $this->db->insert('cotizador', $data);
    }

    public function delete($id) {
        $this->db->delete('cotizador', array('id_cotizador' => $id));
    }

    public function query() {
        $query = $this->db->get('cotizador');
        $colCotizador = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new CotizadorPojo($value->id_cotizador, $value->cliente, $value->dir_fiscal, $value->contacto, $value->tel, $value->email, $value->no_refacc,
                    $value->no_cotizacion, 
                    $value->fech_solicitud, $value->no_item, $value->descri_esp, $value->descri_ingles, $value->observaciones, $value->cod_refacc, $value->modelo_maq, $value->qty, $value->pre_uni, $value->pre_total, $value->moneda);

            array_push($colCotizador, $objeto);
        }
        return $colCotizador;
    }

    public function update($cotizador) {
        $datos = array(
            "cliente" => $cotizador->getCliente(),
            "dir_fiscal" => $cotizador->getDir_fiscal(),
            "contacto" => $cotizador->getContacto(),
            "tel" => $cotizador->getTel(),
            
            "email" => $cotizador->getEmail(),
            "no_refacc" => $cotizador->getNo_refacc(),
            "no_cotizacion" => $cotizador->getNo_cotizacion(),
            "fech_solicitud" => $cotizador->getFech_solicitud(),
            "no_item" => $cotizador->getNo_item(),
            "descri_esp" => $cotizador->getDescri_esp(),
            "descri_ingles" => $cotizador->getDescri_ingles(),
            "observaciones" => $cotizador->getObservaciones(),
            "cod_refacc" => $cotizador->getCod_refacc(),
            "modelo_maq" => $cotizador->getModelo_maq(),
            "qty" => $cotizador->getQty(),
            "pre_uni" => $cotizador->getPre_uni(),
            "pre_total" => $cotizador->getPre_total(),
            "moneda" => $cotizador->getMoneda()
        );
        $this->db->where("id_cotizador", $cotizador->getId_cotizador());
        $this->db->update("cotizador", $datos);
    }

    public function obtener($id_cotizador) {
        $objj = $this->db->query(" Select * From cotizador where id_cotizador= $id_cotizador");
        $obj = $objj->row();
        $dp = array('id_cotizador' => $obj->id_cotizador,
            'cliente' => $obj->cliente,
            'dir_fiscal' => $obj->dir_fiscal,
            'contacto' => $obj->contacto,
            'tel' => $obj->tel,
            'email' => $obj->email,
            'no_refacc' => $obj->no_refacc,
            'no_cotizacion' => $obj->no_cotizacion,
            'fech_solicitud' => $obj->fech_solicitud,
            'no_item' => $obj->no_item,
            'descri_esp' => $obj->descri_esp,
            'descri_ingles' => $obj->descri_ingles,
            'observaciones' => $obj->observaciones,
            'cod_refacc' => $obj->cod_refacc,
            'modelo_maq' => $obj->modelo_maq,
            'qty' => $obj->qty,
            'pre_uni' => $obj->pre_uni,
            'pre_total' => $obj->pre_total,
            'moneda' => $obj->moneda
        );
        return $dp;
    }

    public function actualizar($data) {
        $this->db->where('id_cotizador', $data['id_cotizador']);
        return $this->db->update('cotizador', $data);
    }

}
