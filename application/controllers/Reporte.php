<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Desarrolladores : Saúl Aarón González Moctezuma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

class Reporte extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
        //para que tenga el mismo header

        $this->load->model('htmltopdf_model');
        $this->load->library('pdf');
    }

    public function index() {


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
            $data['customer_data'] = $this->htmltopdf_model->fetch();
            $this->load->view('htmltopdf', $data);
        } else if ($dataLevel == "is_credito") {
            $data['customer_data'] = $this->htmltopdf_model->fetch();
            $this->load->view('htmltopdf', $data);
        }else if ($dataLevel == "is_editor") {
            $data['customer_data'] = $this->htmltopdf_model->fetch();
            $this->load->view('htmltopdf', $data);
        } else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    
       public function entradaAlmacen() {
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
            if ($this->uri->segment(3)) {
                $id_entrada = $this->uri->segment(3);
                $html_content = '<center> </center>  <br><h3 align="center">Entrada a almacén</h3>';

                $html_content .= $this->htmltopdf_model->entradaInventario($id_entrada);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Entrada_" . $id_entrada . ".pdf", array("Attachment" => 0));
            }
        } else  if ($dataLevel == "is_almacen") {
            if ($this->uri->segment(3)) {
                $id_entrada = $this->uri->segment(3);
                $html_content = '<center> </center>  <br><h3 align="center">Entrada a almacén</h3>';

                $html_content .= $this->htmltopdf_model->entradaInventario($id_entrada);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Entrada_" . $id_entrada . ".pdf", array("Attachment" => 0));
            }
        }else if ($dataLevel == "is_editor") {
             if ($this->uri->segment(3)) {
                $id_entrada = $this->uri->segment(3);
                $html_content = '<center> </center>  <br><h3 align="center">Entrada a almacén</h3>';

                $html_content .= $this->htmltopdf_model->entradaInventario($id_entrada);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Entrada_" . $id_entrada . ".pdf", array("Attachment" => 0));
            }
        } else if ($dataLevel == "is_servicio_a_clientes") {
               if ($this->uri->segment(3)) {
                $id_entrada = $this->uri->segment(3);
                $html_content = '<center> </center>  <br><h3 align="center">Entrada a almacén</h3>';

                $html_content .= $this->htmltopdf_model->entradaInventario($id_entrada);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Entrada_" . $id_entrada . ".pdf", array("Attachment" => 0));
            }
        }else if ($dataLevel == "is_Gerente_Ventas") {
              if ($this->uri->segment(3)) {
                $id_entrada = $this->uri->segment(3);
                $html_content = '<center> </center>  <br><h3 align="center">Entrada a almacén</h3>';

                $html_content .= $this->htmltopdf_model->entradaInventario($id_entrada);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Entrada_" . $id_entrada . ".pdf", array("Attachment" => 0));
            }
        }else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    public function orders() {
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
            if ($this->uri->segment(3)) {
                $id_entrada = $this->uri->segment(3);
                $html_content = '<center> </center>  <br><h3 align="center">Orden</h3>';

                $html_content .= $this->htmltopdf_model->ordenesInventario($id_entrada);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Entrada_" . $id_entrada . ".pdf", array("Attachment" => 0));
            }
        }else  if ($dataLevel == "is_almacen") {
            if ($this->uri->segment(3)) {
                $id_entrada = $this->uri->segment(3);
                $html_content = '<center> </center>  <br><h3 align="center">Orden</h3>';

                $html_content .= $this->htmltopdf_model->ordenesInventario($id_entrada);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Entrada_" . $id_entrada . ".pdf", array("Attachment" => 0));
            }
        } else if ($dataLevel == "is_credito") {
            if ($this->uri->segment(3)) {
                $html_content = '<center> </center>  <br><h3 align="center">Orden</h3>';

                $html_content .= $this->htmltopdf_model->ordenesInventario($id_entrada);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Entrada_" . $id_entrada . ".pdf", array("Attachment" => 0));
            }
        } else if ($dataLevel == "is_servicio_a_clientes") {
            if ($this->uri->segment(3)) {
              $html_content = '<center> </center>  <br><h3 align="center">Orden</h3>';

                $html_content .= $this->htmltopdf_model->ordenesInventario($id_entrada);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Entrada_" . $id_entrada . ".pdf", array("Attachment" => 0));
            }
        }else if ($dataLevel == "is_Gerente_Ventas") {
            if ($this->uri->segment(3)) {
                $html_content = '<center> </center>  <br><h3 align="center">Orden</h3>';

                $html_content .= $this->htmltopdf_model->ordenesInventario($id_entrada);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Entrada_" . $id_entrada . ".pdf", array("Attachment" => 0));
            }
        }else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    
    
    
        public function almacen() {
        /*$data = $this->session->userdata;
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
     */
            if ($this->uri->segment(3)) {
                $id_venta = $this->uri->segment(3);
                $data['sku_detalles'] = $this->htmltopdf_model->buscar_detalles_individuales_por_sku($id_venta);
                $this->load->view('Reporte/almacen', $data);
            
        } 
    
        }
    
    

    public function visualizar() {
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
            if ($this->uri->segment(3)) {
                $id_venta = $this->uri->segment(3);
                $data['customer_details'] = $this->htmltopdf_model->buscar_detalles_individualesHtml($id_venta);
                $this->load->view('htmltopdf', $data);
            }
        } else if ($dataLevel == "is_credito") {
            if ($this->uri->segment(3)) {
                $id_venta = $this->uri->segment(3);
                $data['customer_details'] = $this->htmltopdf_model->buscar_detalles_individualesHtml($id_venta);
                $this->load->view('htmltopdf', $data);
            }
            
        }else if ($dataLevel == "is_servicio_a_clientes") {
            if ($this->uri->segment(3)) {
                $id_venta = $this->uri->segment(3);
                $data['customer_details'] = $this->htmltopdf_model->buscar_detalles_individualesHtml($id_venta);
                $this->load->view('htmltopdf', $data);
            }
            
        } else if ($dataLevel == "is_editor") {
            if ($this->uri->segment(3)) {
                $id_venta = $this->uri->segment(3);
                $data['customer_details'] = $this->htmltopdf_model->buscar_detalles_individualesHtml($id_venta);
                $this->load->view('htmltopdf', $data);
            }
            
        }else if ($dataLevel == "is_Gerente_Ventas") {
            if ($this->uri->segment(3)) {
                $id_venta = $this->uri->segment(3);
                $data['customer_details'] = $this->htmltopdf_model->buscar_detalles_individualesHtml($id_venta);
                $this->load->view('htmltopdf', $data);
            }
            
        }else {
            redirect(site_url() . 'main/');
        }
    }

    public function pdf() {
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
            if ($this->uri->segment(3)) {
                $id_cliente = $this->uri->segment(3);
                $html_content = '<h3 align="center">Cliente</h3>';

                $html_content .= $this->htmltopdf_model->buscar_detalles_individualesPdf($id_cliente);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Robuspack_" . $id_cliente . ".pdf", array("Attachment" => 0));
            }
        } else if ($dataLevel == "is_credito") {
            if ($this->uri->segment(3)) {
                $id_cliente = $this->uri->segment(3);
                $html_content = ' <h3 align="center">Cliente</h3>';

                $html_content .= $this->htmltopdf_model->buscar_detalles_individualesPdf($id_cliente);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Robuspack_" . $id_cliente . ".pdf", array("Attachment" => 0));
            }
        }else if ($dataLevel == "is_servicio_a_clientes") {
            if ($this->uri->segment(3)) {
                $id_cliente = $this->uri->segment(3);
                $html_content = ' <h3 align="center">Cliente</h3>';

                $html_content .= $this->htmltopdf_model->buscar_detalles_individualesPdf($id_cliente);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Robuspack_" . $id_cliente . ".pdf", array("Attachment" => 0));
            }
        }else if ($dataLevel == "is_editor") {
            if ($this->uri->segment(3)) {
                $id_cliente = $this->uri->segment(3);
                $html_content = ' <h3 align="center">Cliente</h3>';

                $html_content .= $this->htmltopdf_model->buscar_detalles_individualesPdf($id_cliente);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Robuspack_" . $id_cliente . ".pdf", array("Attachment" => 0));
            }
        }else if ($dataLevel == "is_Gerente_Ventas") {
            if ($this->uri->segment(3)) {
                $id_cliente = $this->uri->segment(3);
                $html_content = ' <h1 align="center">Cliente</h1>';

                $html_content .= $this->htmltopdf_model->buscar_detalles_individualesPdf($id_cliente);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Robuspack_" . $id_cliente . ".pdf", array("Attachment" => 0));
            }
        }  else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    
    
      public function pdfVendedores() {
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
            if ($this->uri->segment(3)) {
                $id_catalogo = $this->uri->segment(3);
                $html_content = ' <h3 align="center">Vendedores y Técnicos</h3>';

                $html_content .= $this->htmltopdf_model->buscar_detalles_individualesVendedoresPdf($id_catalogo);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Vendedores y Técnicos.pdf", array("Attachment" => 0));
            }
        } else if ($dataLevel == "is_editor") {
           
                 if ($this->uri->segment(3)) {
                $id_catalogo = $this->uri->segment(3);
                $html_content = ' <h3 align="center">Vendedores y Técnicos</h3>';

                $html_content .= $this->htmltopdf_model->buscar_detalles_individualesVendedoresPdf($id_catalogo);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Vendedores y Técnicos.pdf", array("Attachment" => 0));
            }
        } else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    
    public function pdfBitacoraMantenimiento2() {
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
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                $html_content = '<center> </center>  <h3 align="center"></h3>';

                $html_content .= $this->htmltopdf_model->bitacorasMantenimientoPdfColor($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Robuspack Mantenimiento-". $id_bitacora ."-".date('d-m-Y_H:i:s'). ".pdf", array("Attachment" => 0));
            }
        } else if ($dataLevel == "is_mantenimiento") {
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                //$html_content = ' <h1 align="center">Cliente</h1>';
                //$html_content. = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $html_content = $this->htmltopdf_model->bitacorasMantenimientoPdfColor($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                  $this->pdf->stream("Robuspack Mantenimiento ".date('d-m-Y H-i-s'). ".pdf", array("Attachment" => 0));
           
            }
        }else if ($dataLevel == "is_editor") {
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                //$html_content = ' <h1 align="center">Cliente</h1>';
                //$html_content. = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $html_content = $this->htmltopdf_model->bitacorasMantenimientoPdfColor($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                  $this->pdf->stream("Robuspack Mantenimiento ".date('d-m-Y H-i-s'). ".pdf", array("Attachment" => 0));
           
            }
        }else if ($dataLevel == "is_refacciones") {
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                //$html_content = ' <h1 align="center">Cliente</h1>';
                //$html_content. = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $html_content = $this->htmltopdf_model->bitacorasMantenimientoPdfColor($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                  $this->pdf->stream("Robuspack_" . $id_bitacora ."-".date('d-m-Y_H:i:s'). ".pdf", array("Attachment" => 0));
           
            }
        }
        else if ($dataLevel == "is_jefe_mantenimiento") {
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                //$html_content = ' <h1 align="center">Cliente</h1>';
                //$html_content. = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $html_content = $this->htmltopdf_model->bitacorasMantenimientoPdfColor($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                  $this->pdf->stream("Robuspack_" . $id_bitacora ."-".date('d-m-Y_H:i:s'). ".pdf", array("Attachment" => 0));
           
            }
        }
        
        
        
        
        else if ($dataLevel == "is_servicio_a_clientes") {
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                //$html_content = ' <h1 align="center">Cliente</h1>';
                //$html_content. = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $html_content = $this->htmltopdf_model->bitacorasMantenimientoPdfColor   ($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                  $this->pdf->stream("Robuspack_" . $id_bitacora ."-".date('d-m-Y_H:i:s'). ".pdf", array("Attachment" => 0));
           
            }
        }
        
        
        
        
        
        
        else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    public function pdfBitacoraMantenimiento() {
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
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                $html_content = '<center> </center>  <h3 align="center"></h3>';

                $html_content .= $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Robuspack Mantenimiento-". $id_bitacora ."-".date('d-m-Y_H:i:s'). ".pdf", array("Attachment" => 0));
            }
        } else if ($dataLevel == "is_mantenimiento") {
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                //$html_content = ' <h1 align="center">Cliente</h1>';
                //$html_content. = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $html_content = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                  $this->pdf->stream("Robuspack Mantenimiento ".date('d-m-Y H-i-s'). ".pdf", array("Attachment" => 0));
           
            }
        }else if ($dataLevel == "is_editor") {
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                //$html_content = ' <h1 align="center">Cliente</h1>';
                //$html_content. = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $html_content = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                  $this->pdf->stream("Robuspack Mantenimiento ".date('d-m-Y H-i-s'). ".pdf", array("Attachment" => 0));
           
            }
        }else if ($dataLevel == "is_refacciones") {
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                //$html_content = ' <h1 align="center">Cliente</h1>';
                //$html_content. = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $html_content = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                  $this->pdf->stream("Robuspack_" . $id_bitacora ."-".date('d-m-Y_H:i:s'). ".pdf", array("Attachment" => 0));
           
            }
        }
        else if ($dataLevel == "is_jefe_mantenimiento") {
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                //$html_content = ' <h1 align="center">Cliente</h1>';
                //$html_content. = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $html_content = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                  $this->pdf->stream("Robuspack_" . $id_bitacora ."-".date('d-m-Y_H:i:s'). ".pdf", array("Attachment" => 0));
           
            }
        }
        
        
        
        
        else if ($dataLevel == "is_servicio_a_clientes") {
            if ($this->uri->segment(3)) {
                $id_bitacora = $this->uri->segment(3);
                //$html_content = ' <h1 align="center">Cliente</h1>';
                //$html_content. = $this->htmltopdf_model->bitacorasMantenimientoPdf($id_bitacora);
                $html_content = $this->htmltopdf_model->bitacorasMantenimientoPdf   ($id_bitacora);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                  $this->pdf->stream("Robuspack_" . $id_bitacora ."-".date('d-m-Y_H:i:s'). ".pdf", array("Attachment" => 0));
           
            }
        }
        
        
        
        
        
        
        else {
            redirect(site_url() . 'main/');
        }
    }
    
    
    
    
    
      public function pdfUsuario() {
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
            if ($this->uri->segment(3)) {
                $id= $this->uri->segment(3);
                $html_content = ' <h3 align="center">Lista de Usuarios</h3>';
                $html_content .= $this->htmltopdf_model->convertirListaUsuarioPdf($id);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Usuarios.pdf", array("Attachment" => 0));
            }
        } else if ($dataLevel == "is_editor") {

            if ($this->uri->segment(3)) {
               $id= $this->uri->segment(3);
                $html_content = ' <h3 align="center">Lista de Usuarios</h3>';
                $html_content .= $this->htmltopdf_model->convertirListaUsuarioPdf($id);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Usuarios.pdf", array("Attachment" => 0));
            }
        } else if ($dataLevel == "is_Gerente_Ventas") {

            if ($this->uri->segment(3)) {
               $id= $this->uri->segment(3);
                $html_content = ' <h3 align="center">Lista de Usuarios</h3>';
                $html_content .= $this->htmltopdf_model->convertirListaUsuarioPdf($id);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Usuarios.pdf", array("Attachment" => 0));
            }
        }
        
        
         else if ($dataLevel == "is_jefe_mantenimiento") {

            if ($this->uri->segment(3)) {
               $id= $this->uri->segment(3);
                $html_content = ' <h3 align="center">Lista de Usuarios</h3>';
                $html_content .= $this->htmltopdf_model->convertirListaUsuarioPdf($id);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Lsita de Usuarios Robuspack Mantenimiento.pdf", array("Attachment" => 0));
            }
        } 
        
        
        
        
        else if ($dataLevel == "is_director") {

            if ($this->uri->segment(3)) {
               $id= $this->uri->segment(3);
                $html_content = ' <h3 align="center">Lista de Usuarios</h3>';
                $html_content .= $this->htmltopdf_model->convertirListaUsuarioPdf($id);
                $this->pdf->loadHtml($html_content);
                $this->pdf->render();
                $this->pdf->stream("Usuarios.pdf", array("Attachment" => 0));
            }
        } 
        else {
            redirect(site_url() . 'main/');
        }
    }

}

?>
