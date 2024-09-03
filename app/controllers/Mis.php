<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mis extends CI_Controller {

	// load index page for filelist
	public function index(){

		// get page title
		$page_data['title'] = 'M.I.S Inventory';

		// get all filelist table from filelist model
		$data['all_hhma_desktops'] = $this->mis_model->get_all_hhma_desktops();

		// get all filelist table from filelist model
		$data['all_hhma_laptops'] = $this->mis_model->get_all_hhma_laptops();

		// get all filelist table from filelist model
		$data['all_hhma_printers'] = $this->mis_model->get_all_hhma_printers();

		// get all filelist table from filelist model
		$data['all_departments'] = $this->department_model->get_all_departments();

		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('mis', $data);
		$this->load->view('includes/footer');
	}

	// add new Desktop fuction
	public function add_desktop(){

		// CI form validation 
		$this->form_validation->set_rules('computer_location', 'computer_location', 'required');
        $this->form_validation->set_rules('owner', 'owner', 'required');
        $this->form_validation->set_rules('department', 'department', 'required');
        $this->form_validation->set_rules('admin_acc_name', 'admin_acc_name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('processor', 'processor', 'required');
        $this->form_validation->set_rules('os_edition', 'os_edition', 'required');
        $this->form_validation->set_rules('system_rating', 'system_rating', 'required');
        $this->form_validation->set_rules('installed_memory', 'installed_memory', 'required');
        $this->form_validation->set_rules('processor_speed', 'processor_speed', 'required');
        $this->form_validation->set_rules('system_type', 'system_type', 'required');
        $this->form_validation->set_rules('computer_name', 'computer_name', 'required');
        $this->form_validation->set_rules('workgroup', 'workgroup', 'required');
        $this->form_validation->set_rules('product_id', 'product_id', 'required');
        $this->form_validation->set_rules('date_purchased', 'date_purchased', 'required');
        $this->form_validation->set_rules('update_schedule', 'update_schedule', 'required');
        $this->form_validation->set_rules('user_acc', 'user_acc', 'required');
        $this->form_validation->set_rules('system_manufacturer', 'system_manufacturer', 'required');
        $this->form_validation->set_rules('system_model', 'system_model', 'required');
        $this->form_validation->set_rules('office_version', 'office_version', 'required');
        $this->form_validation->set_rules('antivirus', 'antivirus', 'required');
        $this->form_validation->set_rules('browsers', 'browsers', 'required');
        $this->form_validation->set_rules('hdd_capacity', 'hdd_capacity', 'required');
        $this->form_validation->set_rules('monitor_brand', 'monitor_brand', 'required');
        $this->form_validation->set_rules('monitor_model', 'monitor_model', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to filelist_model  
			$returnInsert = $this->mis_model->add_desktop();

			if($returnInsert){
				$this->session->set_flashdata('success', 'File Added Successfully');
				 redirect('mis');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('mis');
			}
		}
		
	}

	// Edit Desktop by ID
	public function edit_desktop($id){
		
		// insert laptop page title
		$page_data['title'] = 'Edit Desktop';

		// get individual id from mis model
		$data['desktops'] = $this->mis_model->get_desktop_id($id);

		// get all mis table from mis model
		$data['all_desktops'] = $this->mis_model->get_all_hhma_desktops();

			if(empty($data['desktops'])){
			show_404();
		}

		// load page template
		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/sidebar', $page_data);
		$this->load->view('edit_desktop', $data);
		$this->load->view('includes/footer');
	}

	// Updating Desktops
	// starting update desktop function
	public function update_desktop($id){

		// insert page title
		$page_data['title'] = 'Edit Desktop';

		// get individual id from filelist model
		$data['desktops'] = $this->mis_model->get_desktop_id($id);

		// CI form validation 
		$this->form_validation->set_rules('computer_location', 'computer_location', 'required');
        $this->form_validation->set_rules('owner', 'owner', 'required');
        $this->form_validation->set_rules('department', 'department', 'required');
        $this->form_validation->set_rules('admin_acc_name', 'admin_acc_name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('processor', 'processor', 'required');
        $this->form_validation->set_rules('os_edition', 'os_edition', 'required');
        $this->form_validation->set_rules('system_rating', 'system_rating', 'required');
        $this->form_validation->set_rules('installed_memory', 'installed_memory', 'required');
        $this->form_validation->set_rules('processor_speed', 'processor_speed', 'required');
        $this->form_validation->set_rules('system_type', 'system_type', 'required');
        $this->form_validation->set_rules('computer_name', 'computer_name', 'required');
        $this->form_validation->set_rules('workgroup', 'workgroup', 'required');
        $this->form_validation->set_rules('product_id', 'product_id', 'required');
        $this->form_validation->set_rules('date_purchased', 'date_purchased', 'required');
        $this->form_validation->set_rules('update_schedule', 'update_schedule', 'required');
        $this->form_validation->set_rules('user_acc', 'user_acc', 'required');
        $this->form_validation->set_rules('system_manufacturer', 'system_manufacturer', 'required');
        $this->form_validation->set_rules('system_model', 'system_model', 'required');
        $this->form_validation->set_rules('office_version', 'office_version', 'required');
        $this->form_validation->set_rules('antivirus', 'antivirus', 'required');
        $this->form_validation->set_rules('browsers', 'browsers', 'required');
        $this->form_validation->set_rules('hdd_capacity', 'hdd_capacity', 'required');
        $this->form_validation->set_rules('monitor_brand', 'monitor_brand', 'required');
        $this->form_validation->set_rules('monitor_model', 'monitor_model', 'required');

		// pass form validation?
		if($this->form_validation->run() === FALSE){
			$this->edit_desktop($id);
		}else{
			// update filelist from model
			$returnUpdate = $this->mis_model->update_desktop();

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('mis' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('mis' .$id);
			}
		}
	}

		// starting desktop delete function
		public function delete_desktop($id){

			// delete filelist from model
			$this->mis_model->delete_hhma_desktop($id);
	
			// set flash message
			$this->session->set_flashdata('success', "Desktop Deleted");
			redirect('mis');
		}


	// ********** LAPTOP ********** //
		// add new Laptop fuction
	public function add_laptop(){

		// CI form validation 
		$this->form_validation->set_rules('computer_location', 'computer_location', 'required');
        $this->form_validation->set_rules('owner', 'owner', 'required');
        $this->form_validation->set_rules('department', 'department', 'required');
        $this->form_validation->set_rules('admin_acc_name', 'admin_acc_name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('processor', 'processor', 'required');
        $this->form_validation->set_rules('os_edition', 'os_edition', 'required');
        $this->form_validation->set_rules('system_rating', 'system_rating', 'required');
        $this->form_validation->set_rules('installed_memory', 'installed_memory', 'required');
        $this->form_validation->set_rules('processor_speed', 'processor_speed', 'required');
        $this->form_validation->set_rules('system_type', 'system_type', 'required');
        $this->form_validation->set_rules('computer_name', 'computer_name', 'required');
        $this->form_validation->set_rules('workgroup', 'workgroup', 'required');
        $this->form_validation->set_rules('product_id', 'product_id', 'required');
        $this->form_validation->set_rules('date_purchased', 'date_purchased', 'required');
        $this->form_validation->set_rules('update_schedule', 'update_schedule', 'required');
        $this->form_validation->set_rules('user_acc', 'user_acc', 'required');
        $this->form_validation->set_rules('system_manufacturer', 'system_manufacturer', 'required');
        $this->form_validation->set_rules('system_model', 'system_model', 'required');
        $this->form_validation->set_rules('office_version', 'office_version', 'required');
        $this->form_validation->set_rules('antivirus', 'antivirus', 'required');
        $this->form_validation->set_rules('browsers', 'browsers', 'required');
        $this->form_validation->set_rules('hdd_capacity', 'hdd_capacity', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to filelist_model  
			$returnInsert = $this->mis_model->add_laptop();

			if($returnInsert){
				$this->session->set_flashdata('success', 'Laptop Added Successfully');
				 redirect('mis');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('mis');
			}
		}
		
	}

	// load edit laptop page
	public function edit_laptop($id){

		// insert page title
		$page_data['title'] = 'Edit Lapktop';

		// get individual id from mis model
		$data['laptop'] = $this->mis_model->get_laptop_id($id);

		// get all mis table from mis model
		$data['all_hhma_laptops'] = $this->mis_model->get_all_hhma_laptops();

			if(empty($data['laptops'])){
			show_404();
		}

		// load page template
		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/sidebar', $page_data);
		$this->load->view('edit_laptop', $data);
		$this->load->view('includes/footer');

	}

	// starting update desktop function
	public function update_laptop($id){

		// insert page title
		$page_data['title'] = 'Edit Laptop';

		// get individual id from filelist model
		$data['Laptops'] = $this->mis_model->get_laptop_id($id);

		// CI form validation 
		$this->form_validation->set_rules('computer_location', 'computer_location', 'required');
        $this->form_validation->set_rules('owner', 'owner', 'required');
        $this->form_validation->set_rules('department', 'department', 'required');
        $this->form_validation->set_rules('admin_acc_name', 'admin_acc_name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('processor', 'processor', 'required');
        $this->form_validation->set_rules('os_edition', 'os_edition', 'required');
        $this->form_validation->set_rules('system_rating', 'system_rating', 'required');
        $this->form_validation->set_rules('installed_memory', 'installed_memory', 'required');
        $this->form_validation->set_rules('processor_speed', 'processor_speed', 'required');
        $this->form_validation->set_rules('system_type', 'system_type', 'required');
        $this->form_validation->set_rules('computer_name', 'computer_name', 'required');
        $this->form_validation->set_rules('workgroup', 'workgroup', 'required');
        $this->form_validation->set_rules('product_id', 'product_id', 'required');
        $this->form_validation->set_rules('date_purchased', 'date_purchased', 'required');
        $this->form_validation->set_rules('update_schedule', 'update_schedule', 'required');
        $this->form_validation->set_rules('user_acc', 'user_acc', 'required');
        $this->form_validation->set_rules('system_manufacturer', 'system_manufacturer', 'required');
        $this->form_validation->set_rules('system_model', 'system_model', 'required');
        $this->form_validation->set_rules('office_version', 'office_version', 'required');
        $this->form_validation->set_rules('antivirus', 'antivirus', 'required');
        $this->form_validation->set_rules('browsers', 'browsers', 'required');
        $this->form_validation->set_rules('hdd_capacity', 'hdd_capacity', 'required');

		// pass form validation?
		if($this->form_validation->run() === FALSE){
			$this->edit_laptop($id);
		}else{
			// update filelist from model
			$returnUpdate = $this->mis_model->update_laptop();

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('mis' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('mis' .$id);
			}
		}
	}

	public function delete_laptop($id){
		
		// delete filelist from model
		$this->mis_model->delete_hhma_laptop($id);

		// set flash message
		$this->session->set_flashdata('success', "Laptop Deleted");
		redirect('mis');
	}

	//*************** PRINTER  *****************/
			// add new Printer fuction
	public function add_printer(){

		// CI form validation 
		$this->form_validation->set_rules('owner', 'Owner', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('printer_manufacturer', 'Printer Manufacturer', 'required');
        $this->form_validation->set_rules('cartridge_installed', 'Cartridge Installed', 'required');
        $this->form_validation->set_rules('printer_model', 'Printer Model', 'required');
        $this->form_validation->set_rules('date_purchased', 'Date Purchased', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to filelist_model  
			$returnInsert = $this->mis_model->add_printer();

			if($returnInsert){
				$this->session->set_flashdata('success', 'Printer Added Successfully');
				 redirect('mis');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('mis');
			}
		}
		
	}

	public function edit_printer($id){

		// insert page title
		$page_data['title'] = 'Edit Printer';

		// get individual id from mis model
		$data['printer'] = $this->mis_model->get_printer_id($id);

		// get all mis table from mis model
		$data['all_hhma_printers'] = $this->mis_model->get_all_hhma_printers();

			if(empty($data['printers'])){
			show_404();
		}

		// load page template
		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/sidebar', $page_data);
		$this->load->view('mis', $data);
		$this->load->view('includes/footer');

	}

	public function update_printer($id){

		// insert page title
		$page_data['title'] = 'Edit Printer';

		// get individual id from filelist model
		$data['Printers'] = $this->mis_model->get_printer_id($id);

		// CI form validation 
		$this->form_validation->set_rules('owner', 'Owner', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('printer_manufacturer', 'Printer Manufacturer', 'required');
        $this->form_validation->set_rules('cartridge_installed', 'Cartridge Installed', 'required');
        $this->form_validation->set_rules('printer_model', 'Printer Model', 'required');
        $this->form_validation->set_rules('date_purchased', 'Date Purchased', 'required');
		// pass form validation?
		if($this->form_validation->run() === FALSE){
			$this->edit_printer($id);
		}else{
			// update filelist from model
			$returnUpdate = $this->mis_model->update_printer();

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('mis' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('mis' .$id);
			}
		}
	}

	public function delete_printer($id){
		
		// delete filelist from model
		$this->mis_model->delete_hhma_printer($id);

		// set flash message
		$this->session->set_flashdata('success', "Printer Deleted");
		redirect('mis');
	}


}
