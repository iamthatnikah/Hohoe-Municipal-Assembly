<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assetlogs extends CI_Controller {

	public function index(){

		$page_data['title'] = 'Assets Logs';  

		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('assetlogs');
		$this->load->view('includes/footer');
	}


	public function add_depart(){
		
	}
}