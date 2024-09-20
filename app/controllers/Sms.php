<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller {

	public function index(){

		$page_data['title'] = 'Sms Broadcast';  

			// get all filelist table from filelist model
			$data['all_roles'] = $this->role_model->get_all_roles();
	
			// get all filelist table from filelist model
			$data['departments'] = $this->department_model->get_all_departments();

		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('sms', $data);
		$this->load->view('includes/footer');
	}


	public function add_sms(){
		
	}
}