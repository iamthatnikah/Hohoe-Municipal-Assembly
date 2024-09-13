<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$page_data['title'] = 'Assets Management System';  

		// get all filelist table from filelist model
		$data['all_users'] = $this->login_model->validate_user();

		// get all filelist table from filelist model
		//$data['all_departments'] = $this->department_model->get_all_departs();

		// get all filelist table from filelist model
		//$data['all_filelists'] = $this->filelist_model->get_all_filelists();

		$this->load->view('includes/head', $page_data);
		$this->load->view('login', $data);
		// $this->load->view('includes/footer');
	}


}