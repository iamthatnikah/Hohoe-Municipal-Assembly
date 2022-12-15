<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tangibles extends CI_Controller {

	// load index page for filelist
	public function index(){

		// get page title
		$page_data['title'] = 'Tangible Assets';

		// get all Tangible Assets from Tangible Model
		$data['all_tangible_assets'] = $this->tangible_model->get_all_tangible_assets();

		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('tangibles', $data);
		$this->load->view('includes/footer');
	}

	// add new Asset function
	public function add_asset(){

		// CI form validation 
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('asset_type', 'Activity office', 'required');
		$this->form_validation->set_rules('depreciate', 'depreciate', 'required');
		$this->form_validation->set_rules('category', 'Reference office', 'required');
        $this->form_validation->set_rules('unit', 'unit', 'required');
        $this->form_validation->set_rules('location_code', 'location_code', 'required');
        $this->form_validation->set_rules('date_place_in_service', 'date_place_in_service', 'required');
        $this->form_validation->set_rules('cost', 'cost', 'required');
        $this->form_validation->set_rules('usage_type', 'usage_type', 'required');
        $this->form_validation->set_rules('registration_no', 'registration_no', 'required');
        $this->form_validation->set_rules('acc_cost_center', 'acc_cost_center', 'required');
        $this->form_validation->set_rules('cost_center_using_asset', 'cost_center_using_asset', 'required');
        $this->form_validation->set_rules('staff_id', 'staff_id', 'required');
        $this->form_validation->set_rules('staff_fullname', 'staff_fullname', 'required');
        $this->form_validation->set_rules('grade', 'grade', 'required');
        $this->form_validation->set_rules('method_of_aquisition', 'method_of_aquisition', 'required');
        $this->form_validation->set_rules('dept/unit', 'dept/unit', 'required');
        $this->form_validation->set_rules('current_status', 'current_status', 'required');
        $this->form_validation->set_rules('investment_property', 'investment_property', 'required');
        $this->form_validation->set_rules('condition', 'condition', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to filelist_model  
			$returnInsert = $this->tangible_model->create_tangible_asset();

			if($returnInsert){
				$this->session->set_flashdata('success', 'File Added Successfully');
				 redirect('tangibles');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('tangibles');
			}
		}
		
	}

	// load edit filelist page
	public function edit($id){

		// insert page title
		$page_data['title'] = 'Edit Filelist';

		// get individual id from filelist model
		$data['filelist'] = $this->filelist_model->get_filelist_id($id);

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

			if(empty($data['filelist'])){
			show_404();
		}

		// load page template
		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('edit_filelist', $data);
		$this->load->view('includes/footer');
	}


	// starting update filelist function
	public function update($id){

		// insert page title
		$page_data['title'] = 'Edit Filelist';

		// get individual id from filelist model
		$data['filelist'] = $this->filelist_model->get_filelist_id($id);

		// CI form validation 
		$this->form_validation->set_rules('function', 'Function Name', 'required');
		$this->form_validation->set_rules('activity', 'Activity office', 'required');
		$this->form_validation->set_rules('transaction', 'Transaction Name', 'required');
		$this->form_validation->set_rules('reference', 'Reference office', 'required');

		// pass form validation?
		if($this->form_validation->run() === FALSE){
			$this->edit($id);
		}else{
			// update filelist from model
			$returnUpdate = $this->filelist_model->update_filelist();

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('admin/filelist/edit/' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('admin/filelist/edit/' .$id);
			}
		}
	}

	// starting filelist delete function
	public function delete($id){

		// delete filelist from model
		$this->filelist_model->delete_filelist($id);

		// set flash message
		$this->session->set_flashdata('success', "File Deleted");
		redirect('admin/filelist');
	}


}
