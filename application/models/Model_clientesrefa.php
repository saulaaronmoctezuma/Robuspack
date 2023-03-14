<?php 

class Model_clientesrefa extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	 

        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('Model_clientesrefa');
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


	/* get the active store data */
	public function getActiveStore()
	{
		$sql = "SELECT * FROM clientes_robuspack";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

            /* get the brand data */
	public function getStoresData($id_cliente = null)
	{
		if($id_cliente) {
			$sql = "SELECT * FROM clientes_robuspack where id_cliente = ?";
			$query = $this->db->query($sql, array($id_cliente));
			return $query->row_array();
		}

		$sql = "SELECT * FROM clientes_robuspack";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('clientes_robuspack', $data);
			return ($insert == true) ? true : false;
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id_cliente', $id);
			$update = $this->db->update('clientes_robuspack', $data);
			return ($update == true) ? true : false;
		}
	}

	public function remove($id)
	{
		if($id) {
			$this->db->where('id_cliente', $id);
			$delete = $this->db->delete('clientes_robuspack');
			return ($delete == true) ? true : false;
		}
	}

	public function countTotalStores()
	{
		$sql = "SELECT * FROM clientes_robuspack";
		$query = $this->db->query($sql, array(1));
		return $query->num_rows();
	}
        
        
          public function updateStock($data, $id)
	{
		if($data && $id) {
			$this->db->where('id_cliente', $id);
			$update = $this->db->update('clientes_robuspack', $data);
			return ($update == true) ? true : false;
		}
	}

}