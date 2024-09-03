<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Misassetsreport extends CI_Controller {

	public function index(){

		$page_data['title'] = 'Committes';  

		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('misassetsreport');
		$this->load->view('includes/footer');
	}


	public function add_depart(){
		
	}
}