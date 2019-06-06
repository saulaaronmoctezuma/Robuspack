<?php

Class TotSic extends CI_Controller {

    function __construct() {
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
        $this->load->model("TotSic/TotSicModelo");
    }

    public function index() {
        $data ['css'] = $this->css;
        $data ['base'] = $this->base;
        $this->load->model('TotSic/TotSicModelo');
        $data['title'] = "Robuspack";


        $data = $this->session->userdata;
        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $data['totalRegistroSicCarlos'] = $this->TotSicModelo->totalRegistroSicCarlos(1);
            $data['totalRegistroSicAldo'] = $this->TotSicModelo->totalRegistroSicAldo(1);
            $data['totalRegistroSicElvira'] = $this->TotSicModelo->totalRegistroSicElvira(1);
            $data['totalRegistroSicJaime'] = $this->TotSicModelo->totalRegistroSicJaime(1);


            $data['totalRegistroSicNoTroquelaCarlos'] = $this->TotSicModelo->totalRegistroSicNoTroquelaCarlos(1);
            $data['totalRegistroSicNoTroquelaAldo'] = $this->TotSicModelo->totalRegistroSicNoTroquelaAldo(1);
            $data['totalRegistroSicNoTroquelaElvira'] = $this->TotSicModelo->totalRegistroSicNoTroquelaElvira(1);
            $data['totalRegistroSicNoTroquelaJaime'] = $this->TotSicModelo->totalRegistroSicNoTroquelaJaime(1);


            $data['totalRegistroSicConfirmacionCarlos'] = $this->TotSicModelo->totalRegistroSicConfirmacionCarlos(1);
            $data['totalRegistroSicConfirmacionAldo'] = $this->TotSicModelo->totalRegistroSicConfirmacionAldo(1);
            $data['totalRegistroSicConfirmacionElvira'] = $this->TotSicModelo->totalRegistroSicConfirmacionElvira(1);
            $data['totalRegistroSicConfirmacionJaime'] = $this->TotSicModelo->totalRegistroSicConfirmacionJaime(1);


            $data['totalRegistroSicOrdenCarlos'] = $this->TotSicModelo->totalRegistroSicOrdenCarlos(1);
            $data['totalRegistroSicOrdenAldo'] = $this->TotSicModelo->totalRegistroSicOrdenAldo(1);
            $data['totalRegistroSicOrdenElvira'] = $this->TotSicModelo->totalRegistroSicOrdenElvira(1);
            $data['totalRegistroSicOrdenJaime'] = $this->TotSicModelo->totalRegistroSicOrdenJaime(1);


            $data['totalRegistroSicSinPedidoCarlos'] = $this->TotSicModelo->totalRegistroSicSinPedidoCarlos(1);
            $data['totalRegistroSicSinPedidoAldo'] = $this->TotSicModelo->totalRegistroSicSinPedidoAldo(1);
            $data['totalRegistroSicSinPedidoElvira'] = $this->TotSicModelo->totalRegistroSicSinPedidoElvira(1);
            $data['totalRegistroSicSinPedidoJaime'] = $this->TotSicModelo->totalRegistroSicSinPedidoJaime(1);


            $data['totalRegistroSic'] = $this->TotSicModelo->totalRegistroSic(1);
            $data['totalRegistroSicNoTroquela'] = $this->TotSicModelo->totalRegistroSicNoTroquela(1);
            $data['totalRegistroSicSConsignacion'] = $this->TotSicModelo->totalRegistroSicSConsignacion(1);
            $data['totalRegistroSicOrdenCompra'] = $this->TotSicModelo->totalRegistroSicOrdenCompra(1);
            $data['totalRegistroSicSinPedido'] = $this->TotSicModelo->totalRegistroSicSinPedido(1);





            $this->load->view('TotSic/listarTotSic', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

           $data['totalRegistroSicCarlos'] = $this->TotSicModelo->totalRegistroSicCarlos(1);
            $data['totalRegistroSicAldo'] = $this->TotSicModelo->totalRegistroSicAldo(1);
            $data['totalRegistroSicElvira'] = $this->TotSicModelo->totalRegistroSicElvira(1);
            $data['totalRegistroSicJaime'] = $this->TotSicModelo->totalRegistroSicJaime(1);


            $data['totalRegistroSicNoTroquelaCarlos'] = $this->TotSicModelo->totalRegistroSicNoTroquelaCarlos(1);
            $data['totalRegistroSicNoTroquelaAldo'] = $this->TotSicModelo->totalRegistroSicNoTroquelaAldo(1);
            $data['totalRegistroSicNoTroquelaElvira'] = $this->TotSicModelo->totalRegistroSicNoTroquelaElvira(1);
            $data['totalRegistroSicNoTroquelaJaime'] = $this->TotSicModelo->totalRegistroSicNoTroquelaJaime(1);


            $data['totalRegistroSicConfirmacionCarlos'] = $this->TotSicModelo->totalRegistroSicConfirmacionCarlos(1);
            $data['totalRegistroSicConfirmacionAldo'] = $this->TotSicModelo->totalRegistroSicConfirmacionAldo(1);
            $data['totalRegistroSicConfirmacionElvira'] = $this->TotSicModelo->totalRegistroSicConfirmacionElvira(1);
            $data['totalRegistroSicConfirmacionJaime'] = $this->TotSicModelo->totalRegistroSicConfirmacionJaime(1);


            $data['totalRegistroSicOrdenCarlos'] = $this->TotSicModelo->totalRegistroSicOrdenCarlos(1);
            $data['totalRegistroSicOrdenAldo'] = $this->TotSicModelo->totalRegistroSicOrdenAldo(1);
            $data['totalRegistroSicOrdenElvira'] = $this->TotSicModelo->totalRegistroSicOrdenElvira(1);
            $data['totalRegistroSicOrdenJaime'] = $this->TotSicModelo->totalRegistroSicOrdenJaime(1);


            $data['totalRegistroSicSinPedidoCarlos'] = $this->TotSicModelo->totalRegistroSicSinPedidoCarlos(1);
            $data['totalRegistroSicSinPedidoAldo'] = $this->TotSicModelo->totalRegistroSicSinPedidoAldo(1);
            $data['totalRegistroSicSinPedidoElvira'] = $this->TotSicModelo->totalRegistroSicSinPedidoElvira(1);
            $data['totalRegistroSicSinPedidoJaime'] = $this->TotSicModelo->totalRegistroSicSinPedidoJaime(1);


            $data['totalRegistroSic'] = $this->TotSicModelo->totalRegistroSic(1);
            $data['totalRegistroSicNoTroquela'] = $this->TotSicModelo->totalRegistroSicNoTroquela(1);
            $data['totalRegistroSicSConsignacion'] = $this->TotSicModelo->totalRegistroSicSConsignacion(1);
            $data['totalRegistroSicOrdenCompra'] = $this->TotSicModelo->totalRegistroSicOrdenCompra(1);
            $data['totalRegistroSicSinPedido'] = $this->TotSicModelo->totalRegistroSicSinPedido(1);








            $this->load->view('TotSic/listarTotSic', $data);
            $this->load->view('footer');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);

            $data['totalRegistroSicCarlos'] = $this->TotSicModelo->totalRegistroSicCarlos(1);
            $data['totalRegistroSicAldo'] = $this->TotSicModelo->totalRegistroSicAldo(1);
            $data['totalRegistroSicElvira'] = $this->TotSicModelo->totalRegistroSicElvira(1);
            $data['totalRegistroSicJaime'] = $this->TotSicModelo->totalRegistroSicJaime(1);


            $data['totalRegistroSicNoTroquelaCarlos'] = $this->TotSicModelo->totalRegistroSicNoTroquelaCarlos(1);
            $data['totalRegistroSicNoTroquelaAldo'] = $this->TotSicModelo->totalRegistroSicNoTroquelaAldo(1);
            $data['totalRegistroSicNoTroquelaElvira'] = $this->TotSicModelo->totalRegistroSicNoTroquelaElvira(1);
            $data['totalRegistroSicNoTroquelaJaime'] = $this->TotSicModelo->totalRegistroSicNoTroquelaJaime(1);


            $data['totalRegistroSicConfirmacionCarlos'] = $this->TotSicModelo->totalRegistroSicConfirmacionCarlos(1);
            $data['totalRegistroSicConfirmacionAldo'] = $this->TotSicModelo->totalRegistroSicConfirmacionAldo(1);
            $data['totalRegistroSicConfirmacionElvira'] = $this->TotSicModelo->totalRegistroSicConfirmacionElvira(1);
            $data['totalRegistroSicConfirmacionJaime'] = $this->TotSicModelo->totalRegistroSicConfirmacionJaime(1);


            $data['totalRegistroSicOrdenCarlos'] = $this->TotSicModelo->totalRegistroSicOrdenCarlos(1);
            $data['totalRegistroSicOrdenAldo'] = $this->TotSicModelo->totalRegistroSicOrdenAldo(1);
            $data['totalRegistroSicOrdenElvira'] = $this->TotSicModelo->totalRegistroSicOrdenElvira(1);
            $data['totalRegistroSicOrdenJaime'] = $this->TotSicModelo->totalRegistroSicOrdenJaime(1);


            $data['totalRegistroSicSinPedidoCarlos'] = $this->TotSicModelo->totalRegistroSicSinPedidoCarlos(1);
            $data['totalRegistroSicSinPedidoAldo'] = $this->TotSicModelo->totalRegistroSicSinPedidoAldo(1);
            $data['totalRegistroSicSinPedidoElvira'] = $this->TotSicModelo->totalRegistroSicSinPedidoElvira(1);
            $data['totalRegistroSicSinPedidoJaime'] = $this->TotSicModelo->totalRegistroSicSinPedidoJaime(1);


            $data['totalRegistroSic'] = $this->TotSicModelo->totalRegistroSic(1);
            $data['totalRegistroSicNoTroquela'] = $this->TotSicModelo->totalRegistroSicNoTroquela(1);
            $data['totalRegistroSicSConsignacion'] = $this->TotSicModelo->totalRegistroSicSConsignacion(1);
            $data['totalRegistroSicOrdenCompra'] = $this->TotSicModelo->totalRegistroSicOrdenCompra(1);
            $data['totalRegistroSicSinPedido'] = $this->TotSicModelo->totalRegistroSicSinPedido(1);

            $this->load->view('TotSic/listarTotSic', $data);
            $this->load->view('footer');
        } else {
            redirect(site_url() . 'main/');
        }
    }

}
