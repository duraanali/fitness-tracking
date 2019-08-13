<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goals extends CI_Controller {

    public function __construct(){

		parent::__construct();
	

	}

	public function add()  {

		if($this->input->post('submit') == 'Add'){
			
			$name = $this->input->post('name');
			$actions = $this->input->post('actions');

			$data = array(
			'name' => $name,
			'actions' => $actions,
			'created' => time()
			);

			$this->db->insert('goals', $data);
			$this->session->set_flashdata('add', 'Goal just got added!');
			redirect(get_site_url(''));
	
		}
   
      
		$this->load->view('include/header');       
        $this->load->view('goals/add');        
	} 
	
	public function edit($id=''){

		$where = array(
            'id' => $id,
		);
		
		$data['row'] = db_get_row('goals', $where);

		if($this->input->post('submit') == 'Edit'){
	
		$name = $this->input->post('name');
		$actions = $this->input->post('actions');
		$data = array(
        	'name' => $name,
			'actions' => $actions
		);


		$this->db->where('id', $id);
		$this->db->update('goals', $data);
		$this->session->set_flashdata('update', 'Goal Updated!');
		redirect(get_site_url(''));
		}

		$this->load->view('include/header');       
        $this->load->view('goals/edit', $data);  

	}

	
	public function delete($id=''){

		$where = array(
            'id' => $id,
		);

		$row = $this->db->get('goals', $where);

		if($row){

		
			$this->db->delete("goals", $where);

		}
		$this->session->set_flashdata('delete', 'Goal Deleted!');
		redirect(get_site_url(''));
 		
	}


		public function completed($id=''){

		$where = array(
			'id' => $id,
			'status' => $status
		);

		if ('status' == 1) {
			'status' == 0;
		} else {
			'status' == 1;
		}

		$row = $this->db->get('goals', $where);

		if($row){

		
			$this->db->delete("goals", $where);
		}

		$this->session->set_flashdata('complete', 'Goal is Completed!');
		redirect(get_site_url(''));
 		
	}



}