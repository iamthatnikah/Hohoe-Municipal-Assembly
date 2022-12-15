<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){$page_data['title'] = 'File user Register';  

		// get all filelist table from filelist model
		$data['all_users'] = $this->login_model->get_all_users();

		// get all filelist table from filelist model
		//$data['all_departments'] = $this->department_model->get_all_departs();

		// get all filelist table from filelist model
		//$data['all_filelists'] = $this->filelist_model->get_all_filelists();

		$this->load->view('includes/head');
		$this->load->view('login', $data);
		$this->load->view('includes/footer');
	}


}