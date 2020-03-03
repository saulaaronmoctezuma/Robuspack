<?php

class Model_products extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('BitacoraMtto/BitacoraMttoModelo');
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

    /* get the brand data */

    public function getProductData($id = null) {
        if ($id) {
            $sql = "SELECT * FROM products where id = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM products ORDER BY id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getActiveProductData() {
        $sql = "SELECT * FROM products WHERE availability = ? ORDER BY id DESC";
        $query = $this->db->query($sql, array(1));
        return $query->result_array();
    }

    public function create($data) {
        if ($data) {
            $insert = $this->db->insert('products', $data);
            return ($insert == true) ? true : false;
        }
    }

    public function update($data, $id) {
        if ($data && $id) {
            $this->db->where('id', $id);
            $update = $this->db->update('products', $data);
            return ($update == true) ? true : false;
        }
    }

    public function remove($id) {
        if ($id) {
            $this->db->where('id', $id);
            $delete = $this->db->delete('products');
            return ($delete == true) ? true : false;
        }
    }

    public function countTotalProducts() {
        $sql = "SELECT * FROM products";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

}
