<?php

/*
<<<<<<< HEAD
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
    class MaxMin extends CI_Controller { 
=======
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MaxMin
 *
 * @author soporte.desarrollo1
 */
    class MaxMin1 extends CI_Controller { 
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database('default');
    }
    public function index()
    {
        $this->load->model('MaxMinModelo');
        $data['titulo'] = 'Consultas a la base de datos con codeigniter';

        //obtenemos los datos y entradas de un único usuario dependiendo
        //del argumento que le pasemos a la consulta, en este caso del usuario
        //con id = 1
        /*
         * 
         *
        ***MYSQL ****
        SELECT username,name,id,
        (SELECT 
        name FROM roles
        WHERE users.id = roles.user_id)
        as role 
        FROM users 
        WHERE id = 1
         
         *CODEIGNITHER
         $this->db->select('username,id,name');
        $sub = $this->subquery->start_subquery('select');
        $sub->select('name')->from('roles');
        $sub->where('users.id = roles.id');
        $this->subquery->end_subquery('role');
        $this->db->from('users')
        $this->db->where('id', '1');
         * 
         * 
         * 
        ****MYSQL****
        Select m.maquina, m.referencia, v.grupo , v.cliente, v.cantidad_maxima,
        (SELECT SUM
        (v.cantidad_maxima) from venta v
        where m.referencia=v.referencia
        group by v.referencia)" ,
        (SELECT SUM
        (v.cantidad_maxima)*(3) 
        from venta v 
        where m.referencia=v.referencia 
        group by v.referencia),
        m.inventario,
        (SELECT 
        SUM(v.cantidad_maxima)*(3) 
        from venta v 
        where m.referencia=v.referencia
        group by v.referencia)-(M.inventario)
        FROM maquinaria m, venta v
        where m.referencia=v.referencia and Fecha between '2018-09-01 00:00:00' and '2018-10-30 23:59:59'
        order by v.referencia asc


        $this-db-select(maquina, referencia, grupo, cliente, cantidad_maxima)
        $sub= $this->subquery->start_subquery('select');
        $sub->select_max('cantidad_maxima')->from->('venta');
        $sub->where('venta.referencia=maquinaria.referencia');
        $sub->group_by(venta.referencia);
        $this->subquery->end_subquery('total_requerido_trimestral')
        $this->db->from('venta');
        $this->where('maquinaria.referencia=venta.referencia');
        $this->order_by('referencia','asc');


         * 
         *          */
        
        
        
        
            $this->db->select('v.referencia, m.maquina');
            $this->db->from('venta v');
            $this->db->join('maquinaria m', 'v.referencia = m.referencia');
            $consulta = $this->db->get();
        
        
            
   /* $sub = $this->subquery->start_subquery('select_max');
    $sub->select('cantidad_maxima')->from('venta')->where('venta.referencia', 'maquinaria.referencia');
    $this->subquery->end_subquery('subconsulta'); 
    
     */
        
        
        $data = array();
        $data['consulta'] = $consulta->result_array();
        $data['maxmin'] = $this->MaxMinModelo->maxminConsulta();

        //obtenemos los datos y entradas de todos los usuarios al no pasarle
        //ningún argumento a la consulta
      

        $this->load->view('max_min',$data);
    }
}
