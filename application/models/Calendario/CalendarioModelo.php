<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarioModelo extends CI_Model {
    /* Read the data from DB */

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

    Public function getEvents() {
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
            $sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
            return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();
        } else if ($dataLevel == "is_editor") {
            $sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
            return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();
        }else if ($dataLevel == "is_refacciones") {
            $sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
            return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

        }else if ($dataLevel == "is_Gerente_Ventas") {
            $sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
            return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

        }else if ($dataLevel == "is_mantenimiento") {
            $sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
            return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

        }else if ($dataLevel == "is_jefe_mantenimiento") {
            $sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
            return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();

        }  else {
            redirect(site_url() . 'Calendario/');
        }
    }

    /* Create new events */

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
                   $user_id = $this->session->userdata('id');
            $sql = "INSERT INTO events (title,events.start,events.end,description, color,id_usuario) VALUES (?,?,?,?,?,$user_id)";
            $this->db->query($sql, array($_POST['title'], $_POST['start'], $_POST['end'], $_POST['description'], $_POST['color']));
            return ($this->db->affected_rows() != 1) ? false : true;
        } else if ($dataLevel == "is_editor") {
              $user_id = $this->session->userdata('id');
            $sql = "INSERT INTO events (title,events.start,events.end,description, color,id_usuario) VALUES (?,?,?,?,?,$user_id)";
            $this->db->query($sql, array($_POST['title'], $_POST['start'], $_POST['end'], $_POST['description'], $_POST['color']));
            return ($this->db->affected_rows() != 1) ? false : true;
        } else if ($dataLevel == "is_refacciones") {
             $user_id = $this->session->userdata('id');
            $sql = "INSERT INTO events (title,events.start,events.end,description, color,id_usuario) VALUES (?,?,?,?,?,$user_id)";
            $this->db->query($sql, array($_POST['title'], $_POST['start'], $_POST['end'], $_POST['description'], $_POST['color']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else if ($dataLevel == "is_jefe_mantenimiento") {
             $user_id = $this->session->userdata('id');
            $sql = "INSERT INTO events (title,events.start,events.end,description, color,id_usuario) VALUES (?,?,?,?,?,$user_id)";
            $this->db->query($sql, array($_POST['title'], $_POST['start'], $_POST['end'], $_POST['description'], $_POST['color']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else if ($dataLevel == "is_mantenimiento") {
             $user_id = $this->session->userdata('id');
            $sql = "INSERT INTO events (title,events.start,events.end,description, color,id_usuario) VALUES (?,?,?,?,?,$user_id)";
            $this->db->query($sql, array($_POST['title'], $_POST['start'], $_POST['end'], $_POST['description'], $_POST['color']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else if ($dataLevel == "is_Gerente_Ventas") {
             $user_id = $this->session->userdata('id');
            $sql = "INSERT INTO events (title,events.start,events.end,description, color,id_usuario) VALUES (?,?,?,?,?,$user_id)";
            $this->db->query($sql, array($_POST['title'], $_POST['start'], $_POST['end'], $_POST['description'], $_POST['color']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else {
            redirect(site_url() . 'Calendario/');
        }
    }

    /* Update  event */

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
            $user_id = $this->session->userdata('id');
            $sql = "UPDATE events SET title = ?, description = ?, color = ? WHERE id = ? ";
            $this->db->query($sql, array($_POST['title'], $_POST['description'], $_POST['color'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        } else if ($dataLevel == "is_editor") {
             $user_id = $this->session->userdata('id');
            $sql = "UPDATE events SET title = ?, description = ?, color = ? WHERE id = ?";
            $this->db->query($sql, array($_POST['title'], $_POST['description'], $_POST['color'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else if ($dataLevel == "is_refacciones") {
              $user_id = $this->session->userdata('id');
            $sql = "UPDATE events SET title = ?, description = ?, color = ? WHERE id = ? and id_usuario=$user_id";
            $this->db->query($sql, array($_POST['title'], $_POST['description'], $_POST['color'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else if ($dataLevel == "is_jefe_mantenimiento") {
               $user_id = $this->session->userdata('id');
            $sql = "UPDATE events SET title = ?, description = ?, color = ? WHERE id = ? and id_usuario=$user_id";
            $this->db->query($sql, array($_POST['title'], $_POST['description'], $_POST['color'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        } else if ($dataLevel == "is_mantenimiento") {
               $user_id = $this->session->userdata('id');
            $sql = "UPDATE events SET title = ?, description = ?, color = ? WHERE id = ? and id_usuario=$user_id";
            $this->db->query($sql, array($_POST['title'], $_POST['description'], $_POST['color'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        } else if ($dataLevel == "is_Gerente_Ventas") {
               $user_id = $this->session->userdata('id');
            $sql = "UPDATE events SET title = ?, description = ?, color = ? WHERE id = ? and id_usuario=$user_id";
            $this->db->query($sql, array($_POST['title'], $_POST['description'], $_POST['color'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }   else {
            redirect(site_url() . 'Calendario/');
        }
    }

    /* Delete event */

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
            $sql = "DELETE FROM events WHERE id = ?";
            $this->db->query($sql, array($_GET['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        } else if ($dataLevel == "is_editor") {
            $sql = "DELETE FROM events WHERE id = ?";
            $this->db->query($sql, array($_GET['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        } else if ($dataLevel == "is_refacciones") {
            $sql = "DELETE FROM events WHERE id = ?";
            $this->db->query($sql, array($_GET['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else {
            redirect(site_url() . 'Calendario/');
        }
    }

    /* Update  event */

    Public function dragUpdateEvent() {
        //$date=date('Y-m-d h:i:s',strtotime($_POST['date']));
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
              $user_id = $this->session->userdata('id');
            $sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ? and id_usuario=$user_id";
            $this->db->query($sql, array($_POST['start'], $_POST['end'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        } else if ($dataLevel == "is_editor") {
            $sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ? and id_usuario=$user_id";
            $this->db->query($sql, array($_POST['start'], $_POST['end'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }  else if ($dataLevel == "is_refacciones") {
            $sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ? and id_usuario=$user_id";
            $this->db->query($sql, array($_POST['start'], $_POST['end'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else if ($dataLevel == "is_jefe_mantenimiento") {
              $user_id = $this->session->userdata('id');
            $sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ? and id_usuario=$user_id";
            $this->db->query($sql, array($_POST['start'], $_POST['end'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else if ($dataLevel == "is_mantenimiento") {
            $sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ? and  id_usuario=$user_id";
            $this->db->query($sql, array($_POST['start'], $_POST['end'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else if ($dataLevel == "is_Gerente_Ventas") {
            $sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ? and id_usuario=$user_id";
            $this->db->query($sql, array($_POST['start'], $_POST['end'], $_POST['id']));
            return ($this->db->affected_rows() != 1) ? false : true;
        }else {
            redirect(site_url() . 'Calendario/');
        }
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

}
