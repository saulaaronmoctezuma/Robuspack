<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**

 * class @author  Saul González  
 * Fecha : Ultimo Cambio 25/06/2019 Hora 10:26 am
 * Fecha : 26/06/2019 12:34 PM
 * Sistema de Control Robuspack.
 */
class Correo extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('upload');
        $this->load->library('pagination');

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model("CensoMaquinaria/CensoMaquinariaModelo");
         //$this->load->model('ClienteRefacciones/ClienteRefaccionesModelo');
        //poner para el poner selet en un formulario
        //para que tenga el mismo header y trearse el usuario para dar permisos
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }
     public function index() {
    $result = $this->User_model->getAllSettings();
       $stLe = $result->site_title;
    date_default_timezone_set("America/Mexico_City");
    	$tz = $result->timezone;
	    
      $now = new DateTime();
        $now->setTimezone(new DateTimezone($tz));
       $dTod =  $now->format('Y-m-d');
       $dTim =  $now->format('H:i:s');
        
       $this->load->helper('cookie');
        
       /*$data['ventas'] = $this->ClienteRefaccionesModelo->queryCorreo();
       
         
        foreach ($data['ventas'] as $editorial){
           $prueba = $editorial['id'];
            
      
     */
	    
        
            $this->load->library("email");
            $this->load->library('sendmail');
            $bUrl = base_url();
            $dataUsuario = $this->session->userdata;
           // $correo = $dataUsuario['email'];
           $message = $this->sendmail->ejemploDeCorreo('saul','moctezuma','grupo', $dTod,'empresa','temporal');
           //$message = $this->sendmail->ejemploDeCorreo();
           $to_email = 'desarrollador.ti@robuspack.com';
           //$to_email = 'saul.gonzalez@scrobuspack.com';
            $this->email->from($this->config->item('Correo Nueva'), 'SCROBUSPACK ');
            $this->email->to($to_email);
            ///$this->email->cc('desarrollador.ti@robuspack.com');
            //$this->email->cc($correo);
                $this->email->subject('PRUEBAS DE CORREO CON POSTMAN');
            $this->email->message($message);
            $this->email->set_mailtype("html");
            $this->email->send();
            
            echo 'enviado';}
     /*}*/
}