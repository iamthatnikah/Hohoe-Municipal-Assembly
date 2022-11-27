<?php
//Main Dashboard
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		//loading the dashboard from the views
		$this->load->view('login');

		$this->load->view('includes/head');
		// $this->load->view('admin/includes/navbar');
		// $this->load->view('admin/includes/sidebar');
		
		//$this->load->view('admin/includes/footer');
		//$this->load->view('dashboard');
	}
	public function add_dispatch(){
		// CI form validation 
		$this->form_validation->set_rules('reg_no', 'Reg No', 'required');
		$this->form_validation->set_rules('drp', 'Date Received', 'required');
		//$this->form_validation->set_rules('added_at', 'When Added', 'required');
		//$this->form_validation->set_rules('mod', 'Mode of Dispatch', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to filelist_model  
			$returnInsert = $this->login_model->create_dispatch();

			if($returnInsert){
				$this->session->set_flashdata('success', 'Login Successfully');
				 redirect('dashboard');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('login');
			}
		}
		
	}
}
