<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stores extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Stores';

		$this->load->model('model_stores');
	}
	/* 
    * It only redirects to the manage stores page
    */
	public function index()
	{
		/*if(!in_array('viewStore', $this->permission)) {
			redirect('dashboard', 'refresh');
		}*/
        $this->load->model('model_stores');
        $data['title'] = 'Refacciones';
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
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
           $this->render_template('stores/index', $this->data);	
            /* } */
        	
	}else if ($dataLevel == "is_editor") {
            $this->load->view('header', $data);
            //$this->load->view('navbar', $data);
           $this->render_template('stores/index', $this->data);	
            /* } */
        }
        }
	/*
	* It retrieve the specific store information via a store id
	* and returns the data in json format.
	*/
	public function fetchStoresDataById($id) 
	{
		if($id) {
			$data = $this->model_stores->getStoresData($id);
			echo json_encode($data);
		}
	}

	/*
	* It retrieves all the store data from the database 
	* This function is called from the datatable ajax function
	* The data is return based on the json format.
	*/
	public function fetchStoresData()
	{
		$result = array('data' => array());

		$data = $this->model_stores->getStoresData();

		foreach ($data as $key => $value) {

			// button
			$buttons = '';

			/*if(in_array('updateStore', $this->permission)) {*/
				$buttons = '<button type="button" class="btn btn-default" onclick="editFunc('.$value['id'].')" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button>';
			/*}*/

			/*if(in_array('deleteStore', $this->permission)) {*/
				$buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc('.$value['id'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
			/*}*/

			$status = ($value['active'] == 1) ? '<span class="label label-success">Activo</span>' : '<span class="label label-warning">Desactivado</span>';

			$result['data'][$key] = array(
				$value['name'],
				$status,
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	/*
    * If the validation is not valid, then it provides the validation error on the json format
    * If the validation for each input is valid then it inserts the data into the database and 
    returns the appropriate message in the json format.
    */
	public function create()
	{
		/*if(!in_array('createStore', $this->permission)) {
			redirect('dashboard', 'refresh');
		}*/

		$response = array();

		$this->form_validation->set_rules('store_name', 'Store name', 'trim|required');
		$this->form_validation->set_rules('active', 'Active', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'name' => $this->input->post('store_name'),
        		'active' => $this->input->post('active'),	
        	);

        	$create = $this->model_stores->create($data);
        	if($create == true) {
        		$response['success'] = true;
        		$response['messages'] = 'Creado correctamente';
        	}
        	else {
        		$response['success'] = false;
        		$response['messages'] = 'Error in the database while creating the brand information';			
        	}
        }
        else {
        	$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }

        echo json_encode($response);
	}	

	/*
    * If the validation is not valid, then it provides the validation error on the json format
    * If the validation for each input is valid then it updates the data into the database and 
    returns a n appropriate message in the json format.
    */
	public function update($id)
	{
		/*if(!in_array('updateStore', $this->permission)) {
			redirect('dashboard', 'refresh');
		}*/

		$response = array();

		if($id) {
			$this->form_validation->set_rules('edit_store_name', 'Store name', 'trim|required');
			$this->form_validation->set_rules('edit_active', 'Active', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
	        	$data = array(
	        		'name' => $this->input->post('edit_store_name'),
	        		'active' => $this->input->post('edit_active'),	
	        	);

	        	$update = $this->model_stores->update($data, $id);
	        	if($update == true) {
	        		$response['success'] = true;
	        		$response['messages'] = 'Actualizado correctamente';
	        	}
	        	else {
	        		$response['success'] = false;
	        		$response['messages'] = 'Error al actualizar';			
	        	}
	        }
	        else {
	        	$response['success'] = false;
	        	foreach ($_POST as $key => $value) {
	        		$response['messages'][$key] = form_error($key);
	        	}
	        }
		}
		else {
			$response['success'] = false;
    		$response['messages'] = 'Error please refresh the page again!!';
		}

		echo json_encode($response);
	}

	/*
	* If checks if the store id is provided on the function, if not then an appropriate message 
	is return on the json format
    * If the validation is valid then it removes the data into the database and returns an appropriate 
    message in the json format.
    */
	public function remove()
	{
		/*if(!in_array('deleteStore', $this->permission)) {
			redirect('dashboard', 'refresh');
		}*/
		
		$store_id = $this->input->post('store_id');

		$response = array();
		if($store_id) {
			$delete = $this->model_stores->remove($store_id);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Eliminado correctamente";	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Error en la base de datos";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Actualizar la página nuevamente!!";
		}

		echo json_encode($response);
	}

}