<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index(){

		// insert page title
		$page_data['title'] = 'Profile';

		// get all filelist table from filelist model
		$data['all_perm_staff'] = $this->staff_model->get_all_perm_staff();


		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('profile', $data);
		$this->load->view('includes/footer');
	}
}