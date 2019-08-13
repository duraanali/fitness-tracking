<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	$query = $this->db->get("goals"); 
	$data['rows'] = $query->result();

		$this->load->view('include/header');
		$this->load->view('index', $data);
		$this->load->view('include/footer');
	}
}