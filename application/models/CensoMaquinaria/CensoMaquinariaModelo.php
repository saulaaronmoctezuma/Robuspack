<?php

require 'CensoMaquinariaPojo.php';
require 'IModeloAbstracto.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 25-06-2019 10:30 am
 */

class CensoMaquinariaModelo extends CI_Model implements IModeloAbstracto {

    public function __construct() {
        parent::__construct();

        $this->load->database();

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('CensoMaquinaria/CensoMaquinariaModelo');
        //para que tenga el mismo header
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

   public function insert($data)
  {
      $this->db->insert('censo_maquinaria',$data);
      return TRUE;
  }
  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('censo_maquinaria');
      return TRUE;
  }
    
    public function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('censo_maquinaria');
      $query = $this->db->get();
      return $query->result();
  }
  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('censo_maquinaria');

    return $query->num_rows();
  }


 public function queryProspectos() {

        //user data from session
        $data = $this->session->userdata;
        $dataUser = $this->session->userdata;
        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        $id_usuario = $this->userlevel->id($data['id']);
        //check user level
        $data['title'] = "Robuspack";
       if (($dataLevel == "is_editor")&&($id_usuario == 4)) {
    //  if (($dataLevel == "is_editor")) {
             /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
           /* $this->db->select('*');
            $this->db->from('censo_maquinaria');
            $this->db->join('users', 'censo_maquinaria.id_usuario=users.id');
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_censomaquinaria", "desc");*/
            
                $this->db->select('*');
            $this->db->from('censo_maquinaria');
            $this->db->join('users', 'censo_maquinaria.id_usuario=users.id');
            $query = $this->db->where('users.id= 4 and  censo_maquinaria.cliente_robuspack="No" or censo_maquinaria.cliente_robuspack="Prospectos"');
           
            
            
            
            
          //  $query = $this->db->where("u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->order_by("id_censomaquinaria", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado


            $colCensoMaquinaria = array();

            foreach ($query->result() as $key => $value) {
               $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                        $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                        $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                       
                       
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                   
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        
                     $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                        
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        $value->refacciones,
                        $value->corrugadora,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        } if (($dataLevel == "is_editor")) {
             /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
            $this->db->select('*');
            $this->db->from('censo_maquinaria');
            $this->db->join('users', 'censo_maquinaria.id_usuario=users.id');
            $query = $this->db->where('censo_maquinaria.cliente_robuspack="No" or censo_maquinaria.cliente_robuspack="Prospectos"');
            
            $query = $this->db->order_by("id_censomaquinaria", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado


            $colCensoMaquinaria = array();

            foreach ($query->result() as $key => $value) {
               $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                        $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                        $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                       
                       
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                   
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        
                     $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                        
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        $value->refacciones,
                        $value->corrugadora,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        } else if ($dataLevel == "is_addddmin") {
             $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
              );
            /* Para traerse el id del usuario */
            $dataUser = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
            $this->db->select('*');
            $this->db->from('censo_maquinaria');
            $this->db->join('users', 'censo_maquinaria.id_usuario=users.id');
            //399
            // $query = $this->db->where('censo_maquinaria.cliente_robuspack="No" or censo_maquinaria.cliente_robuspack="Prospectos" ');
            $query = $this->db->where('censo_maquinaria.id_censomaquinaria > 780" ');
            
            
            //$query = $this->db->where('users.id= ', $dataLevel);
           // $query = $this->db->where("users.id= ". $dataLevel . " or censo_maquinaria.asesor='".$dataUser["first_name"]. "' or censo_maquinaria.asesor_maquinaria='". $dataUser["first_name"]."' or censo_maquinaria.asesor_consumibles='". $dataUser["first_name"]."'" );
            
            $query = $this->db->order_by("fecha_modificacion", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado


            $colCensoMaquinaria = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                          $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                       $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        $value->info_maquina_2,
                        $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,
                        $value->info_maquina_3,
                        $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,
                        $value->info_maquina_4,
                        $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,
                        $value->info_maquina_5,
                        $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,
                        $value->info_maquina_6,
                        $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,
                        $value->info_maquina_7,
                        $value-> modelo_maquina_7, 
                        $value->medida_maquina_7 , 
                        $value->tipo_maquina_7 , 
                        $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        $value->maquina_conversion,
                        $value->refacciones,
                        $value->corrugadora ,
                        $value->cliente_robuspack,
                        $value->first_name,
                        $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        } else if ($dataLevel == "is_refacciones") {
           $dataUser = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
                
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
              $this->db->select('*');
            $this->db->from('censo_maquinaria c');
            $this->db->join('users u', 'c.id_usuario=u.id');
            ///$query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->where("c.cliente_robuspack='No' or c.cliente_robuspack='Prospectos' and u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->order_by("id_censomaquinaria", "desc");

            
            
            

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colCensoMaquinaria = array();

              foreach ($query->result() as $key => $value) {
              $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                          $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                       $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        
                        
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         $value->info_maquina_3,
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         $value->info_maquina_4,
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                         $value->info_maquina_5,
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        $value->info_maquina_6,
                         $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                         $value->info_maquina_7,
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        
                        $value->refacciones,
                        $value->corrugadora,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_maquinaria")   { /* Para traerse el id del usuario */
        
            
            
            
             $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
              $this->db->select('*');
            $this->db->from('censo_maquinaria c');
            $this->db->join('users u', 'c.id_usuario=u.id');
           // $query = $this->db->where('users.id= ', $dataLevel);
             $query = $this->db->where("censo_maquinaria.cliente_robuspack='No' and censo_maquinaria.cliente_robuspack='Prospectos' or u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->order_by("id_censomaquinaria", "desc");

            
            
            

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colCensoMaquinaria = array();

              foreach ($query->result() as $key => $value) {
              $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                          $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                       $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        
                        
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         $value->info_maquina_3,
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         $value->info_maquina_4,
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                         $value->info_maquina_5,
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        $value->info_maquina_6,
                         $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                         $value->info_maquina_7,
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        
                        $value->refacciones,
                        $value->corrugadora,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        
            
            
            
            
            
            
            
            
            
            
            
            
        }
        //inge edson
         //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_jefe_mantenimiento")   { /* Para traerse el id del usuario */
        
            
            
            
             $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
              $this->db->select('*');
            $this->db->from('censo_maquinaria c');
            $this->db->join('users u', 'c.id_usuario=u.id');
            //$query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->where("c.cliente_robuspack='No' or c.cliente_robuspack='Prospectos' and u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->order_by("id_censomaquinaria", "desc");

            
            
            

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colCensoMaquinaria = array();

              foreach ($query->result() as $key => $value) {
              $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                          $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                       $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        
                        
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         $value->info_maquina_3,
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         $value->info_maquina_4,
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                         $value->info_maquina_5,
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        $value->info_maquina_6,
                         $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                         $value->info_maquina_7,
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        
                        $value->refacciones,
                        $value->corrugadora,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        
            
            
            
            
            
            
            
            
            
            
            
            
        }
        
        else if ($dataLevel == "is_maquinaria_refacciones") {
             $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
              $this->db->select('*');
            $this->db->from('censo_maquinaria c');
            $this->db->join('users u', 'c.id_usuario=u.id');
           $query = $this->db->where("c.cliente_robuspack='No' or c.cliente_robuspack='Prospectos' and u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->where('u.id= ', $dataLevel);
            $query = $this->db->order_by("c.id_censomaquinaria", "desc");


            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colCensoMaquinaria = array();

              foreach ($query->result() as $key => $value) {
                $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                         $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                        $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        
                        
                        
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         $value->info_maquina_3,
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         $value->info_maquina_4,
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                         $value->info_maquina_5,
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        $value->info_maquina_6,
                         $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                         $value->info_maquina_7,
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        
                        
                        $value->refacciones,
                        $value->corrugadora,
                         $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        
        } else  if ($dataLevel == "is_Gerente_Ventas") {
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
              $this->db->select('*');
            $this->db->from('censo_maquinaria c');
            $this->db->join('users u', 'c.id_usuario=u.id');
            //$query = $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->where('users.id= ', $dataLevel);
            // $query = $this->db->where("u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
            $query = $this->db->where("c.cliente_robuspack='No' or c.cliente_robuspack='Prospectos' and c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->order_by("c.id_censomaquinaria", "desc");


            //tree los datos de la consulta
           $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            
            
                   




            $colCensoMaquinaria = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                          $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                       $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                       
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                        
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                        
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        $value->info_maquina_6,
                        
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                  
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        
                        $value->refacciones,
                        $value->corrugadora ,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        }
        
        
        
        else  if ($dataLevel == "is_director") {
             /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,
               
                        cliente_seguimiento.cliente, 
                        cliente_seguimiento.nivel,
                         cliente_seguimiento.modelo_maquina,
                          cliente_seguimiento.numero_maquina,
                         cliente_seguimiento.necesidad, 
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.cotizacion,
                        cliente_seguimiento.pedido,
                         cliente_seguimiento.contrato,
                        users.first_name');
            $this->db->from('cliente_seguimiento');
            $this->db->join('users', 'cliente_seguimiento.id=users.id');
            //$query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_clienteseguimiento", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado


            $colCensoMaquinaria = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteSeguimientoPojo(
                        $value->id_clienteseguimiento, 
                        $value->cliente,
                        $value->nivel,
                        $value->necesidad,
                       
                        $value->compromiso,
                        $value->notas, 
                           $value->modelo_maquina,
                        $value->numero_maquina,
                        $value->cotizacion,
                        $value->pedido,
                        $value->contrato,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10
                );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        }
      
        else {
            redirect(site_url() . 'main/');
        }
    }

 
     public function query() {

        //user data from session
        $data = $this->session->userdata;
        $dataUser = $this->session->userdata;
        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        $id_usuario = $this->userlevel->id($data['id']);
        //check user level
        $data['title'] = "Robuspack";
       if (($dataLevel == "is_editor")&&($id_usuario == 4)) {
    //  if (($dataLevel == "is_editor")) {
             /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
           /* $this->db->select('*');
            $this->db->from('censo_maquinaria');
            $this->db->join('users', 'censo_maquinaria.id_usuario=users.id');
            $query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_censomaquinaria", "desc");*/
            
                $this->db->select('*');
            $this->db->from('censo_maquinaria');
            $this->db->join('users', 'censo_maquinaria.id_usuario=users.id');
            $query = $this->db->where("users.id= 4 and censo_maquinaria.cliente_robuspack='Sí'");
            
                    
            
            
          //  $query = $this->db->where("u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->order_by("id_censomaquinaria", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado


            $colCensoMaquinaria = array();

            foreach ($query->result() as $key => $value) {
               $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                        $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                        $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                       
                       
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                   
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        
                     $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                        
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        $value->refacciones,
                        $value->corrugadora,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        } if (($dataLevel == "is_editor")) {
             /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
            $this->db->select('*');
            $this->db->from('censo_maquinaria');
            $this->db->join('users', 'censo_maquinaria.id_usuario=users.id');
            //$query = $this->db->where('censo_maquinaria.cliente_robuspack="Sí"');
            $query = $this->db->order_by("id_censomaquinaria", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado


            $colCensoMaquinaria = array();

            foreach ($query->result() as $key => $value) {
               $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                        $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                        $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                       
                       
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                   
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        
                     $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                        
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        $value->refacciones,
                        $value->corrugadora,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        } else if ($dataLevel == "is_admin") {
             $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
              );
            /* Para traerse el id del usuario */
            $dataUser = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
            $this->db->select('*');
            $this->db->from('censo_maquinaria');
            $this->db->join('users', 'censo_maquinaria.id_usuario=users.id');
            //399
            $query = $this->db->where('censo_maquinaria.id_censomaquinaria>500');
            //$query = $this->db->where('censo_maquinaria.cliente_robuspack="Sí"');
           // $query = $this->db->where("users.id= ". $dataLevel . " or censo_maquinaria.asesor='".$dataUser["first_name"]. "' or censo_maquinaria.asesor_maquinaria='". $dataUser["first_name"]."' or censo_maquinaria.asesor_consumibles='". $dataUser["first_name"]."'" );
            
            $query = $this->db->order_by("fecha_insecion", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado


            $colCensoMaquinaria = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                          $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                       $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        $value->info_maquina_2,
                        $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,
                        $value->info_maquina_3,
                        $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,
                        $value->info_maquina_4,
                        $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,
                        $value->info_maquina_5,
                        $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,
                        $value->info_maquina_6,
                        $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,
                        $value->info_maquina_7,
                        $value-> modelo_maquina_7, 
                        $value->medida_maquina_7 , 
                        $value->tipo_maquina_7 , 
                        $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        $value->maquina_conversion,
                        $value->refacciones,
                        $value->corrugadora ,
                        $value->cliente_robuspack,
                        $value->first_name,
                        $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        } else if ($dataLevel == "is_refacciones") {
           $dataUser = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
                
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
              $this->db->select('*');
            $this->db->from('censo_maquinaria c');
            $this->db->join('users u', 'c.id_usuario=u.id');
            ///$query = $this->db->where('users.id= ', $dataLevel);
            //c.cliente_robuspack='Sí' or 
            $query = $this->db->where("u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->order_by("c.id_censomaquinaria", "desc");

            
            
            

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colCensoMaquinaria = array();

              foreach ($query->result() as $key => $value) {
              $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                          $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                       $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        
                        
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         $value->info_maquina_3,
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         $value->info_maquina_4,
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                         $value->info_maquina_5,
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        $value->info_maquina_6,
                         $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                         $value->info_maquina_7,
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        
                        $value->refacciones,
                        $value->corrugadora,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_maquinaria")   { /* Para traerse el id del usuario */
        
            
            
            
             $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
              $this->db->select('*');
            $this->db->from('censo_maquinaria c');
            $this->db->join('users u', 'c.id_usuario=u.id');
           // $query = $this->db->where('users.id= ', $dataLevel);
           //c.cliente_robuspack='Sí' and
             $query = $this->db->where("u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->order_by("c.id_censomaquinaria", "desc");

            
            
            

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colCensoMaquinaria = array();

              foreach ($query->result() as $key => $value) {
              $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                          $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                       $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        
                        
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         $value->info_maquina_3,
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         $value->info_maquina_4,
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                         $value->info_maquina_5,
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        $value->info_maquina_6,
                         $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                         $value->info_maquina_7,
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        
                        $value->refacciones,
                        $value->corrugadora,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        
            
            
            
            
            
            
            
            
            
            
            
            
        }
        //inge edson
         //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_jefe_mantenimiento")   { /* Para traerse el id del usuario */
        
            
            
            
             $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
              $this->db->select('*');
            $this->db->from('censo_maquinaria c');
            $this->db->join('users u', 'c.id_usuario=u.id');
           // $query = $this->db->where('censo_maquinaria.cliente_robuspack="Sí" and users.id= ', $dataLevel);
            $query = $this->db->where("u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->order_by("c.id_censomaquinaria", "desc");

            
            
            

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colCensoMaquinaria = array();

              foreach ($query->result() as $key => $value) {
              $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                          $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                       $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        
                        
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         $value->info_maquina_3,
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         $value->info_maquina_4,
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                         $value->info_maquina_5,
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        $value->info_maquina_6,
                         $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                         $value->info_maquina_7,
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        
                        $value->refacciones,
                        $value->corrugadora,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        
            
            
            
            
            
            
            
            
            
            
            
            
        }
        
        else if ($dataLevel == "is_maquinaria_refacciones") {
             $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
              $this->db->select('*');
            $this->db->from('censo_maquinaria c');
            $this->db->join('users u', 'c.id_usuario=u.id');
           $query = $this->db->where("c.cliente_robuspack and u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->where('u.id= ', $dataLevel);
            $query = $this->db->order_by("c.id_censomaquinaria", "desc");


            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado



            $colCensoMaquinaria = array();

              foreach ($query->result() as $key => $value) {
                $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                         $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                        $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        
                        
                        
                       $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                         $value->info_maquina_3,
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                         $value->info_maquina_4,
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                         $value->info_maquina_5,
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        $value->info_maquina_6,
                         $value->info_maquina_6,
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                         $value->info_maquina_7,
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        
                        
                        $value->refacciones,
                        $value->corrugadora,
                         $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        
        } else  if ($dataLevel == "is_Gerente_Ventas") {
            $data = $this->session->userdata;
            $data = array(
                //se lleva el valor del id del usuario
                $dataLevel = $this->userlevel->id($data['id']) /* Es para traerse el id del usuario */
            );
            /* Para traerse el id del usuario */

            //consulta la tabla venta
              $this->db->select('*');
            $this->db->from('censo_maquinaria c');
            $this->db->join('users u', 'c.id_usuario=u.id');
            //$query = $this->db->where('users.id= ', $dataLevel);
            //$query = $this->db->where('users.id= ', $dataLevel);
            // $query = $this->db->where("u.id= ". $dataLevel . " or c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
            $query = $this->db->where("c.asesor='".$dataUser["first_name"]. "' or c.asesor_maquinaria='". $dataUser["first_name"]."' or c.asesor_consumibles='". $dataUser["first_name"]."'" );
           
            $query = $this->db->order_by("c.id_censomaquinaria", "desc");


            //tree los datos de la consulta
           $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado
            
            
                   




            $colCensoMaquinaria = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new CensoMaquinariaPojo(
                        $value->id_censomaquinaria, 
                          $value->grupo,
                        $value->grupo_temporal,
                        $value->empresa,
                       $value->empresa_temporal,
                        $value->estado,
                        $value->ciudad_municipio,
                        $value->nombre_dueno,
                        $value->celular_dueno,
                        $value->correo_empresarial_dueno,
                        $value->correo_personal_dueno,
                        $value->nombre_ceo,
                        $value->celular_ceo,
                        $value->correo_empresarial_ceo,
                        $value->correo_personal_ceo,
                        $value->nombre_gerente,
                        $value->celular_gerente,
                        $value->correo_empresarial_gerente,
                        $value->correo_personal_gerente,
                        $value->nombre_produccion,
                        $value->celular_produccion,
                        $value->correo_empresarial_produccion,
                        $value->correo_personal_produccion,
                        $value->nombre_mtto,
                        $value->celular_mtto,
                        $value->correo_empresarial_mtto,
                        $value->correo_personal_mtto,
                        $value->nombre_compras,
                        $value->celular_compras,
                        $value->correo_empresarial_compras,
                        $value->correo_personal_compras,
                        $value->nombre_ventas,
                        $value->celular_ventas,
                        $value->correo_empresarial_ventas,
                        $value->correo_personal_ventas,
                        $value->nombre_otros,
                        $value->celular_otros,
                        $value->correo_empresarial_otros,
                        $value->correo_personal_otros,
                        $value->tipo_de_cliente,
                        $value->asesor,
                       $value->asesor_maquinaria,
                        $value->asesor_consumibles,
                        $value->estatus_cliente,
                        $value->tamano_cliente,
                        $value->tipo_mercado,
                        $value->volumen_produccion,
                        $value->necesidad,
                        $value->compromiso,
                        $value->notas,
                        $value->info_maquina_1,
                        $value-> modelo_maquina_1, 
                        $value->medida_maquina_1 , 
                        $value->tipo_maquina_1 , 
                        $value->troquel_maquina_1 , 
                        $value->codigo_cubierta_maquina_1 , 
                        $value->cliente_conoce_maquina_1 , 
                        
                        $value->info_maquina_2,
                          $value-> modelo_maquina_2, 
                        $value->medida_maquina_2 , 
                        $value->tipo_maquina_2 , 
                        $value->troquel_maquina_2 , 
                        $value->codigo_cubierta_maquina_2 , 
                        $value->cliente_conoce_maquina_2 ,

                        
                        $value->info_maquina_3,
                       
                          $value-> modelo_maquina_3, 
                        $value->medida_maquina_3 , 
                        $value->tipo_maquina_3 , 
                        $value->troquel_maquina_3 , 
                        $value->codigo_cubierta_maquina_3 , 
                        $value->cliente_conoce_maquina_3 ,

                        $value->info_maquina_4,
                        
                          $value-> modelo_maquina_4, 
                        $value->medida_maquina_4 , 
                        $value->tipo_maquina_4 , 
                        $value->troquel_maquina_4 , 
                        $value->codigo_cubierta_maquina_4 , 
                        $value->cliente_conoce_maquina_4 ,

                        $value->info_maquina_5,
                        
                          $value-> modelo_maquina_5, 
                        $value->medida_maquina_5 , 
                        $value->tipo_maquina_5 , 
                        $value->troquel_maquina_5 , 
                        $value->codigo_cubierta_maquina_5 , 
                        $value->cliente_conoce_maquina_5 ,

                        $value->info_maquina_6,
                        
                          $value-> modelo_maquina_6, 
                        $value->medida_maquina_6 , 
                        $value->tipo_maquina_6 , 
                        $value->troquel_maquina_6 , 
                        $value->codigo_cubierta_maquina_6 , 
                        $value->cliente_conoce_maquina_6 ,

                        $value->info_maquina_7,
                  
                            $value-> modelo_maquina_7, 
                          $value->medida_maquina_7 , 
                          $value->tipo_maquina_7 , 
                          $value->troquel_maquina_7 , 
                        $value->codigo_cubierta_maquina_7 , 
                        $value->cliente_conoce_maquina_7 ,
                        
                        
                        $value->info_maquina_8,
                        $value-> modelo_maquina_8, 
                        $value->medida_maquina_8, 
                        $value->tipo_maquina_8 , 
                        $value->troquel_maquina_8 , 
                        $value->codigo_cubierta_maquina_8 , 
                        $value->cliente_conoce_maquina_8 ,
                        
                        $value->info_maquina_9,
                        $value-> modelo_maquina_9, 
                        $value->medida_maquina_9 , 
                        $value->tipo_maquina_9 , 
                        $value->troquel_maquina_9 , 
                        $value->codigo_cubierta_maquina_9 , 
                        $value->cliente_conoce_maquina_9 ,
                        
                        $value->info_maquina_10,
                        $value-> modelo_maquina_10, 
                        $value->medida_maquina_10 , 
                        $value->tipo_maquina_10 , 
                        $value->troquel_maquina_10 , 
                        $value->codigo_cubierta_maquina_10 , 
                        $value->cliente_conoce_maquina_10 ,
                        
                          $value->maquina_conversion,
                        
                        $value->refacciones,
                        $value->corrugadora ,
                          $value->cliente_robuspack,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10

                       );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        }
        
        
        
        else  if ($dataLevel == "is_director") {
             /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            //consulta la tabla venta
            $this->db->select('cliente_seguimiento.id_clienteseguimiento,
               
                        cliente_seguimiento.cliente, 
                        cliente_seguimiento.nivel,
                         cliente_seguimiento.modelo_maquina,
                          cliente_seguimiento.numero_maquina,
                         cliente_seguimiento.necesidad, 
                        cliente_seguimiento.compromiso,
                        cliente_seguimiento.notas,
                        cliente_seguimiento.cotizacion,
                        cliente_seguimiento.pedido,
                         cliente_seguimiento.contrato,
                        users.first_name');
            $this->db->from('cliente_seguimiento');
            $this->db->join('users', 'cliente_seguimiento.id=users.id');
            //$query = $this->db->where('users.id= ', $dataLevel);
            $query = $this->db->order_by("id_clienteseguimiento", "desc");

            //tree los datos de la consulta
            $query = $this->db->get();
            $data = $query->result_array();

            //hace el where donde compara el id con el id del usuario, para solo mostrar los registros que usurio haga realizado


            $colCensoMaquinaria = array();

            foreach ($query->result() as $key => $value) {
                $objeto = new ClienteSeguimientoPojo(
                        $value->id_clienteseguimiento, 
                        $value->cliente,
                        $value->nivel,
                        $value->necesidad,
                       
                        $value->compromiso,
                        $value->notas, 
                           $value->modelo_maquina,
                        $value->numero_maquina,
                        $value->cotizacion,
                        $value->pedido,
                        $value->contrato,
                        $value->first_name,
                          $value->refacciones_maquina_1,
                        $value->consumibles_maquina_1,
                        $value->refacciones_maquina_2,
                        $value->consumibles_maquina_2,
                        $value->refacciones_maquina_3,
                        $value->consumibles_maquina_3,
                        $value->refacciones_maquina_4,
                        $value->consumibles_maquina_4,
                        $value->refacciones_maquina_5,
                        $value->consumibles_maquina_5,
                        $value->refacciones_maquina_6,
                        $value->consumibles_maquina_6,
                        $value->refacciones_maquina_7,
                        $value->consumibles_maquina_7,
                        $value->refacciones_maquina_8,
                        $value->consumibles_maquina_8,
                        $value->refacciones_maquina_9,
                        $value->consumibles_maquina_9,
                        $value->refacciones_maquina_10,
                        $value->consumibles_maquina_10
                );

                array_push($colCensoMaquinaria, $objeto);
            }
            return $colCensoMaquinaria;
        }
      
        else {
            redirect(site_url() . 'main/');
        }
    }


    
     public function get_by_id($kondisi)
  {
      $this->db->from('censo_maquinaria');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

    
    public function update($data,$kondisi)
  {
      $this->db->update('censo_maquinaria',$data,$kondisi);
      return TRUE;
  }
    //select referencia
    function getOptions() {
        $options = $this->db->select('id_maquinaria, referencia')->order_by("referencia", "asc")
                ->get('maquinaria')
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

        foreach ($options as $option) {
            $options_arr[$option->referencia] = $option->referencia;
        }

        return $options_arr;
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
 
    function save_upload($title, $cliente, $prioridad, $estatus, $necesidad, $fecha_cotizacion, $image, $fecha_contactar, $compromiso, $notas) {
        /* Para traerse el id del usuario */
        $data = $this->session->userdata;
        /* Para traerse el id del usuario */
        $data = array(  
            'grupo' => $title,
            'cliente' => $cliente,
            'prioridad' => $prioridad,
            'estatus' => $estatus,
            'necesidad' => $necesidad,
            'fecha_cotizacion' => $fecha_cotizacion,
            'archivo1' => $image,
            'fecha_contactar' => $fecha_contactar,
            'compromiso' => $compromiso,
            'notas' => $notas,
            /* Es para traerse el id del usuario */
            'id' => $dataLevel = $this->userlevel->id($data['id'])
                /* Es para traerse el id del usuario */
        );
        $result = $this->db->insert('censo_maquinaria', $data);
        return $result;
    }

    public function add($objeto) {
        
    }

    public function querybusqueda() {
        
    }

    public function refacciones() {
        
    }
    
     function getCliente() {
          $grupo = $this->db->select('nombre_empresa')
                  //->where('')
                  ->order_by("nombre_empresa", "asc")
                ->get('todas_las_empresas_v2')
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

        foreach ($grupo as $option) {
            $options_arr[$option->nombre_empresa] = $option->nombre_empresa;
        }

        return $options_arr;
    }
    
    
    
    
    
      //select grupo
    function getGrupo() {
        $grupo = $this->db->select('id_cliente, grupo')->order_by("grupo", "asc")
                ->get('cliente')
                ->result();

        $options_arr;

        // entre el arreglo va a ir el dato que se guarde en caso de que no seleccione nada
        $options_arr[' '] = 'Selecciona una opción';

        // Formato para pasar a la función form_dropdown

        foreach ($grupo as $option) {
            $options_arr[$option->grupo] = $option->grupo;
        }

        return $options_arr;
    }
    
    //select grupo
  /*  function getCliente() {
        $grupo = $this->db->select('id_cliente, cliente')->order_by("cliente", "asc")->get('cliente')->result();

        $options_arr;
         $options_arr[' '] = 'Selecciona una opción';
            foreach ($grupo as $option) {
            $options_arr[$option->cliente] = $option->cliente;
        }

        return $options_arr;
    }*/

    

}
