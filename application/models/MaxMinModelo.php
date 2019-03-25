<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MaxMinModelo extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como parámetro o no
    public function maxminConsulta()
    {
        
    $this->db->select('m.maquina,m.referencia,v.grupo,'
                    . 'v.cliente,v.cantidad_maxima,m.inventario');
    $this->db->from('maquinaria m');
    $this->db->join('venta v', 'm.referencia = v.referencia');
    $this->db->order_by('m.referencia','asc');
   
    
   /* $sub = $this->subquery->start_subquery('select_max');
    $sub->select('cantidad_maxima')->from('venta')->where('venta.referencia', 'maquinaria.referencia');
    $this->subquery->end_subquery('subconsulta'); 
    
     */
    $query = $this->db->get();
    return $query->result();
    }
    
    
    }