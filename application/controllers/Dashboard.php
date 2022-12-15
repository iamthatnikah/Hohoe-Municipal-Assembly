<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){

		// insert page title
		$page_data['title'] = 'Dashboard';


		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('dashboard');
		$this->load->view('includes/footer');
	}
}
