<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();

        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('Calendario/CalendarioModelo');
        //para que tenga el mismo header
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

    /* Home page Calendar view  */

    public function index() {

        $data['css'] = $this->css;
        $data['base'] = $this->base;
        $this->load->model('Calendario/CalendarioModelo');


        //user data from session
        $data = $this->session->userdata;
        /* if (empty($data)) {
          redirect(site_url() . 'main/login/');
          } */

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
            $this->load->view('Calendario/calendario');
        } else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Calendario/calendario');
        } else if ($dataLevel == "is_refacciones") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Calendario/calendario');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Calendario/calendario');
        }else if ($dataLevel == "is_jefe_mantenimiento") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Calendario/calendario');
        }else if ($dataLevel == "is_mantenimiento") {
            $this->load->view('header', $data);
            $this->load->view('navbar', $data);
            $this->load->view('Calendario/calendario');
        }else {
            redirect(site_url() . 'main/');
        }
    }

    /* Get all Events */

    Public function getEvents() {
        $result = $this->CalendarioModelo->getEvents();
        echo json_encode($result);
    }

    /* Add new event */

    Public function addEvent() {



        $data['css'] = $this->css;
        $data['base'] = $this->base;


        //user data from session
        $data = $this->session->userdata;
        /* if (empty($data)) {
          redirect(site_url() . 'main/login/');
          } */

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            $result = $this->CalendarioModelo->addEvent();
            echo $result;
        } else if ($dataLevel == "is_editor") {
            $result = $this->CalendarioModelo->addEvent();
            echo $result;
        }else if ($dataLevel == "is_refacciones") {
            $result = $this->CalendarioModelo->addEvent();
            echo $result;
        }else if ($dataLevel == "is_Gerente_Ventas") {
            $result = $this->CalendarioModelo->addEvent();
            echo $result;
        } else if ($dataLevel == "is_mantenimiento") {
            $result = $this->CalendarioModelo->addEvent();
            echo $result;
        } else if ($dataLevel == "is_jefe_mantenimiento") {
            $result = $this->CalendarioModelo->addEvent();
            echo $result;
        }  else {
            redirect(site_url() . 'Calendario/');
        }
    }

    /* Update Event */

    Public function updateEvent() {


        $data['css'] = $this->css;
        $data['base'] = $this->base;


        //user data from session
        $data = $this->session->userdata;
        /* if (empty($data)) {
          redirect(site_url() . 'main/login/');
          } */

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            $result = $this->CalendarioModelo->updateEvent();
            echo $result;
        } else if ($dataLevel == "is_editor") {
            $result = $this->CalendarioModelo->updateEvent();
            echo $result;
        }else if ($dataLevel == "is_refacciones") {
            $result = $this->CalendarioModelo->updateEvent();
            echo $result;
        }else if ($dataLevel == "is_Gerente_Ventas") {
            $result = $this->CalendarioModelo->updateEvent();
            echo $result;
        }else if ($dataLevel == "is_mantenimiento") {
            $result = $this->CalendarioModelo->updateEvent();
            echo $result;
        }else if ($dataLevel == "is_jefe_mantenimiento") {
            $result = $this->CalendarioModelo->updateEvent();
            echo $result;
        } 
        else {
            redirect(site_url() . 'Calendario/');
        }
    }

    /* Delete Event */

    Public function deleteEvent() {

        $data['css'] = $this->css;
        $data['base'] = $this->base;


        //user data from session
        $data = $this->session->userdata;
        /* if (empty($data)) {
          redirect(site_url() . 'main/login/');
          } */

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            $result = $this->CalendarioModelo->deleteEvent();
            echo $result;
        } else if ($dataLevel == "is_editor") {
            $result = $this->CalendarioModelo->deleteEvent();
            echo $result;
        }else if ($dataLevel == "is_refacciones") {
            $result = $this->CalendarioModelo->deleteEvent();
            echo $result;
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $result = $this->CalendarioModelo->deleteEvent();
            echo $result;
        } else {
            redirect(site_url() . 'Calendario/');
        }
    }

    Public function dragUpdateEvent() {



        $data['css'] = $this->css;
        $data['base'] = $this->base;


        //user data from session
        $data = $this->session->userdata;
        /* if (empty($data)) {
          redirect(site_url() . 'main/login/');
          } */

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            $result = $this->CalendarioModelo->dragUpdateEvent();
            echo $result;
        } else if ($dataLevel == "is_editor") {
            $result = $this->CalendarioModelo->dragUpdateEvent();
            echo $result;
        }else if ($dataLevel == "is_refacciones") {
            $result = $this->CalendarioModelo->dragUpdateEvent();
            echo $result;
        }else if ($dataLevel == "is_mantenimiento") {
            $result = $this->CalendarioModelo->dragUpdateEvent();
            echo $result;
        } else if ($dataLevel == "is_Gerente_Ventas") {
            $result = $this->CalendarioModelo->dragUpdateEvent();
            echo $result;
        } else if ($dataLevel == "is_jefe_mantenimiento") {
            $result = $this->CalendarioModelo->dragUpdateEvent();
            echo $result;
        }   else {
            redirect(site_url() . 'Calendario/');
        }
    }

}
