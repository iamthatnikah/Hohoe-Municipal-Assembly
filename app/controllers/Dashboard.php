<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){

		// insert page title
		$page_data['title'] = 'Dashboard';

		// get all Permanent Staff table from Staff model
		$data['all_perm_staff'] = $this->staff_model->get_all_perm_staff();

		// Count all HHMA Desktops from MIS Model
		// $data['desktops'] = $this->mis_model->count_all_hhma_desktops();


		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('dashboard', $data);
		$this->load->view('includes/footer');
	}
}
