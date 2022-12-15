<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filemove extends CI_Controller {

	public function index(){

		$page_data['title'] = 'Files Movement';  

		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/filemove');
		$this->load->view('admin/includes/footer');
	}


	/*public function add_depart(){
		
	}*/
}
