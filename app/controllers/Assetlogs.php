<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assetlogs extends CI_Controller {

	public function index(){

		$page_data['title'] = 'Assets Logs';

		// Get All Logs table from Asset Lods Model
		$data['mis_asset_logs'] = $this->assetlogs_model->get_all_assetlogs();

		// get all filelist table from filelist model
		$data['all_hhma_desktops'] = $this->mis_model->get_all_hhma_desktops();

		// get all filelist table from filelist model
		$data['all_hhma_laptops'] = $this->mis_model->get_all_hhma_laptops();

		// get all filelist table from filelist model
		$data['all_hhma_printers'] = $this->mis_model->get_all_hhma_printers();

		// get all filelist table from filelist model
		$data['all_departments'] = $this->department_model->get_all_departments();

		// get all Permanent Staff table from Staff model
		$data['all_perm_staff'] = $this->staff_model->get_all_perm_staff();

		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('assetlogs', $data);
		$this->load->view('includes/footer');
	}


	public function add_log(){
		
	}
}