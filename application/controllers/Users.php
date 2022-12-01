<?php
//Main Dashboard
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
		
		$this->load->view('includes/head');
		$this->load->view('includes/aside');
		$this->load->view('users');
		$this->load->view('includes/footer');
		
		// $this->load->view('admin/includes/sidebar');
		
		//$this->load->view('admin/includes/footer');
		//$this->load->view('dashboard');
	}
}
