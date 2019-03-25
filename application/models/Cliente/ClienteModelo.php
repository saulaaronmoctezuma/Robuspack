<?php

require 'ClientePojo.php';
require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ClienteModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('ClienteModelo/ClienteModelo');
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
        $this->db->insert('cliente', $data);
    }

    public function delete($id) {
        $this->db->delete('cliente', array('id_cliente' => $id));
    }

    public function query() {
       
        //user data from session
        $data = $this->session->userdata;
        if (empty($data)) {
            redirect(site_url() . 'main/login/');
        }

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
            $query = $this->db->query('SELECT * FROM cliente order by cliente_sae desc');

            $colCliente = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClientePojo($value->id_cliente, $value->grupo, $value->cliente, $value->cliente_sae, $value->cliente_sae_dolares,
                        $value->razon_soc, $value->rfc, $value->direccion, $value->tel_cel, $value->extension, $value->correo,
                        $value->correo1, $value->correo2, $value->correo3, $value->moneda, $value->cta_banc,$value->cta_banc_dolares, $value->vendedor_refacciones, 
                        $value->vendedor_maquinaria, $value->forma_pago, $value->metodo_pago, $value->uso_de_cfdi,$value->direccion_entrega
                );

                array_push($colCliente, $objeto);
            }
            return $colCliente;
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_editor") {
           /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $query = $this->db->query('SELECT * FROM cliente order by cliente_sae desc');

            $colCliente = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClientePojo($value->id_cliente, $value->grupo, $value->cliente, $value->cliente_sae, $value->cliente_sae_dolares,
                        $value->razon_soc, $value->rfc, $value->direccion, $value->tel_cel, $value->extension, $value->correo,
                        $value->correo1, $value->correo2, $value->correo3, $value->moneda, $value->cta_banc,$value->cta_banc_dolares, $value->vendedor_refacciones, 
                        $value->vendedor_maquinaria, $value->forma_pago, $value->metodo_pago, $value->uso_de_cfdi,$value->direccion_entrega
                );

                array_push($colCliente, $objeto);
            }
            return $colCliente;
        }else if ($dataLevel == "is_credito") {
          /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $query = $this->db->query('SELECT * FROM cliente order by cliente_sae desc');

            $colCliente = array();
            foreach ($query->result() as $key => $value) {
                $objeto = new ClientePojo($value->id_cliente, $value->grupo, $value->cliente, $value->cliente_sae, $value->cliente_sae_dolares,
                        $value->razon_soc, $value->rfc, $value->direccion, $value->tel_cel, $value->extension, $value->correo,
                        $value->correo1, $value->correo2, $value->correo3, $value->moneda, $value->cta_banc,$value->cta_banc_dolares, $value->vendedor_refacciones, 
                        $value->vendedor_maquinaria, $value->forma_pago, $value->metodo_pago, $value->uso_de_cfdi,$value->direccion_entrega
                );

                array_push($colCliente, $objeto);
            }
            return $colCliente;
        
        } else {
            redirect(site_url() . 'main/');
        }
    }

    public function update($cliente) {
        if ($cliente instanceof ClientePojo) {
            $datos = array(
                "grupo" => $cliente->getGrupo(),
                "cliente" => $cliente->getCliente(),
                "cliente_sae" => $cliente->getCliente_sae(),
                "cliente_sae_dolares" => $cliente->getCliente_sae_dolares(),
                "razon_soc" => $cliente->getRazon_soc(),
                "rfc" => $cliente->getRfc(),
                "direccion" => $cliente->getDireccion(),
                "tel_cel" => $cliente->getTel_cel(),
                "extension" => $cliente->getExtension(),
                "correo" => $cliente->getCorreo(),
                "correo1" => $cliente->getCorreo1(),
                "correo2" => $cliente->getCorreo2(),
                "correo3" => $cliente->getCorreo3(),
                "moneda" => $cliente->getMoneda(),
                "cta_banc" => $cliente->getCta_banc(),
                "cta_banc_dolares" => $cliente->getCta_banc_dolares(),
                "vendedor_refacciones" => $cliente->getVendedor_refacciones(),
                "vendedor_maquinaria" => $cliente->getVendedor_maquinaria(),
                "forma_pago" => $cliente->getForma_pago(),
                "metodo_pago" => $cliente->getMetodo_pago(),
                "uso_de_cfdi" => $cliente->getUso_de_cfdi(),
                "direccion_entrega" => $cliente->getDireccion_entrega()
            );
            $this->db->where("id_cliente", $cliente->getId_cliente());
            $this->db->update("cliente", $datos);
        }
    }

    public function obtener($id_cliente) {
        $objj = $this->db->query(" Select * From cliente where id_cliente=$id_cliente");
        $obj = $objj->row();
        $dp = array('id_cliente' => $obj->id_cliente,
            'grupo' => $obj->grupo,
            'cliente' => $obj->cliente,
            'cliente_sae' => $obj->cliente_sae,
            'cliente_sae_dolares' => $obj->cliente_sae_dolares,
            'razon_soc' => $obj->razon_soc,
            'rfc' => $obj->rfc,
            'direccion' => $obj->direccion,
            'tel_cel' => $obj->tel_cel,
            'extension' => $obj->extension,
            'correo' => $obj->correo,
            'correo1' => $obj->correo1,
            'correo2' => $obj->correo2,
            'correo3' => $obj->correo3,
            'moneda' => $obj->moneda,
            'cta_banc' => $obj->cta_banc,
            'cta_banc_dolares' => $obj->cta_banc_dolares,
            'vendedor_refacciones' => $obj->vendedor_refacciones,
            'vendedor_maquinaria' => $obj->vendedor_maquinaria,
            'forma_pago' => $obj->forma_pago,
            'metodo_pago' => $obj->metodo_pago,
            'uso_de_cfdi' => $obj->uso_de_cfdi,
            'direccion_entrega' => $obj->direccion_entrega
        );
        return $dp;
    }

    public function actualizar($data) {
        $this->db->where('id_cliente', $data['id_cliente']);
        return $this->db->update('cliente', $data);
    }

    public function refacciones() {
        
    }

}
