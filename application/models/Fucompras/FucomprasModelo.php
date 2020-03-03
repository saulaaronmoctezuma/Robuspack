<?php

require 'FucomprasPojo.php';
require 'IModeloAbstracto.php';

/**

 * class @author  Saul González & Karen González
 * Fecha : Ultimo Cambio 11/10/2019 Hora 10:20 am
 * 
 */
class FucomprasModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('Fucompras/FucomprasModelo');
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
        $this->db->from('fucompras');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }

    public function insert($data) {
        $registros = $this->input->post('cantidad_registros');
         $i = 0;
         while ($i < $registros)
             {
           $this->db->insert('fucompras', $data);
            
            $i++;
          
            } 
        
          return TRUE;
        
     /* $j=0;  
for ($j = 0; $j > $data['id_fucompras']; $j++)
 {
 
        $this->db->insert('fucompras', $data);
        return TRUE;
    }*/
 }
 

    
    /*

     *      */
    public function delete($where) {
        $this->db->where($where);
        $this->db->delete('fucompras');
        return TRUE;
    }

    public function update($data, $kondisi) {
        $this->db->update('fucompras', $data, $kondisi);
        return TRUE;
    }

    public function query() {
        //$query = $this->db->get('verificacion');
       
        $this->db->select('*');
        $this->db->from('fucompras');
        $this->db->order_by('fucompras.id_fucompras', 'desc');
        //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
        // $this->db->where('users.id= ', $dataLevel);  
        $query = $this->db->get();

        $colFuCompras = array();

        foreach ($query->result() as $key => $value) {
            $objeto = new FucomprasPojo(
                    $value->id_fucompras, 
                    $value->cantidad_registros, 
                    $value->ref, 
                    $value->estatus, 
                    $value->compania_importadora,
                    $value->cliente_proveedor,
                    $value->awb, 
                    $value->courier,
                    $value->clave,
                    $value->tipo_de_prod,
                     $value->descripcion,
                    $value->factura, 
                    $value->imn, 
                    $value->ocv, 
                    $value->qty, 
                    $value->pu_usd, 
                    $value->total_usd,
                    $value->tipo_de_embarque,
                    $value->tc_pedimento, 
                    $value->importacion_por_partida_pz_mxn, 
                    $value->importacion_por_partida_pz_usd, 
                    $value->impx_unidad, 
                    $value->costo_total_compra_usd_lab_qro, 
                    $value->costo_unitario_compra_usd_lab_qro,
                    $value->com, 
                    $value->cm, 
                    $value->cm_c, 
                    $value->ent, 
                    $value->pedimento, 
                    $value->fecha_pedimento, 
                    $value->valor_aduana,
                    $value->arancel_igi, 
                    $value->arancel, 
                    $value->dta, 
                    $value->iva_del_pedimento,
                    $value->costo_del_flete_mxn,
                    $value->honorarios_courier, 
                    $value->costo_del_flete_usd, 
                    $value->pv_extra_bajo_ref_x_pz,
                    $value->utilidad_refx_pz, 
                    $value->utilidad, 
                    $value->observaciones,
                    $value->fecha_pi,
                    $value->codigo_arancelario,
                    $value->factura_proveedor,
                    $value->pedimentopdf,
                    $value->honorarios_importacion
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
