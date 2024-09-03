<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Committe extends CI_Controller {

	public function index(){

		$page_data['title'] = 'Committes';  

		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/committe');
		$this->load->view('admin/includes/footer');
	}


	public function add_depart(){
		
	}
}
