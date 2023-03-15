









<?php

require 'FuvservicioPojo.php';
require 'IModeloAbstracto.php';

/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 00/00/0000 Hora 00:00 am/pm
 * Sistema de Control Robuspack
 */
class FuvservicioModelo extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('Fuvservicio/FuvservicioModelo');
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

    public function get($batas = NULL, $offset = NULL, $cari = NULL) {
        if ($batas != NULL) {
            $this->db->limit($batas, $offset);
        }
        if ($cari != NULL) {
            $this->db->or_like($cari);
        }
        $this->db->from('verificacion');
        $query = $this->db->get();
        return $query->result();
    }

    public function jumlah_row($search) {
        $this->db->or_like($search);
        $query = $this->db->get('verificacion');

        return $query->num_rows();
    }

    public function get_by_id($kondisi) {
<<<<<<< HEAD
        $this->db->from('fuvservicio');
=======
        $this->db->from('Fuvservicio');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }

    public function insert($data) {
<<<<<<< HEAD
        $this->db->insert('fuvservicio', $data);
=======
        $this->db->insert('Fuvservicio', $data);
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        return TRUE;
    }

    public function delete($where) {
        $this->db->where($where);
<<<<<<< HEAD
        $this->db->delete('fuvservicio');
=======
        $this->db->delete('Fuvservicio');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        return TRUE;
    }

    public function update($data, $kondisi) {
<<<<<<< HEAD
        $this->db->update('fuvservicio', $data, $kondisi);
=======
        $this->db->update('Fuvservicio', $data, $kondisi);
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        return TRUE;
    }

    public function query() {
        //$query = $this->db->get('verificacion');
        $this->db->select('*');
<<<<<<< HEAD
        $this->db->from('fuvservicio');
        $this->db->order_by('fuvservicio.id_fuvservicio', 'desc');
=======
        $this->db->from('Fuvservicio');
        $this->db->order_by('Fuvservicio.id_fuvservicio', 'desc');
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
        //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
        // $this->db->where('users.id= ', $dataLevel);
        $query = $this->db->get();

        $colFuCompras = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new FuvservicioPojo(
                    $value->id_fuvservicio,
                    $value->ref,
                    $value->cliente,
                    $value->direccion, 
<<<<<<< HEAD
=======
                     $value->referencia, 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
                    $value->codigo,
                    $value->tipo_de_prod,
                    $value->rfc,
                    $value->factura,
                    $value->facturapdf,
                    //$value->remision, 
                   // $value->fecha_de_remision,
                    $value->orden_compra,
                    $value->cantidad, 
                    $value->pu_usd,
                    $value->subtotal,
                    $value->iva,
                    $value->total_usd,
                    $value->fecha, 
                    //$value->pedimento,
                    //$value->fecha_pedimento,
                    $value->dias_de_credito,
                    $value->fecha_vencimiento,
                    $value->fecha_de_pago,
                    $value->status_de_pago,
                    $value->refacturacion,
                    $value->nueva,
                    $value->observaciones, 
                    $value->vendedor,
                    $value->fecha_de_cobro_de_comisiones
            );

            array_push($colFuCompras, $objeto);
        }
        return $colFuCompras;
    }

    public function add($objeto) {
        
    }

    public function refacciones() {
        
    }

    //select grupo
    function getCliente() {
        $grupo = $this->db->select('id_cliente, cliente')->order_by("cliente", "asc")
                ->get('cliente')
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

        foreach ($grupo as $option) {
            $options_arr[$option->cliente] = $option->cliente;
        }

        return $options_arr;
    }

    public function querybusqueda() {
        
    }

    public function totalRegistroPlacas() {
        $this->db->select('COUNT(*) as total_registros_placas');
        $this->db->from('verificacion');
        // $this->db->where('venta.id= ', 1);
        $query = $this->db->get();
        return $query->result();
    }

}
