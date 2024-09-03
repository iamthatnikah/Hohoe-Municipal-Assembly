<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movement extends CI_Controller {

	public function index(){

		$page_data['title'] = 'File Movement Register';  

		// get all filelist table from filelist model
		$data['all_movements'] = $this->movement_model->get_all_movement();

		// get all filelist table from filelist model
		$data['all_departments'] = $this->department_model->get_all_depart();

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/movement', $data);
		$this->load->view('admin/includes/footer');
	}


	public function add_movement(){
		// CI form validation 
		$this->form_validation->set_rules('moved_to', 'Sent To', 'required');
		//$this->form_validation->set_rules('dot', 'Date of movement', 'required');
		$this->form_validation->set_rules('ref_no', 'File Ref No.', 'required');
		$this->form_validation->set_rules('remarks', 'Remarks', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to movement_model  
			$returnInsert = $this->movement_model->create_movement();

			if($returnInsert){
				$this->session->set_flashdata('success', 'File Movement Added Successfully');
				 redirect('admin/movement');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('admin/movement');
			}
		}
		
	}

	// load edit movement page
	public function edit($id){

		// insert page title
		$page_data['title'] = 'Edit movement';

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		// get individual id from movement model
		$data['movement'] = $this->movement_model->get_movement_id($id);

		// get all filelist table from filelist model
		$data['all_departments'] = $this->department_model->get_all_depart();

			if(empty($data['movement'])){
			show_404();
		}

		// load page template
		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/edit_movement', $data);
		$this->load->view('admin/includes/footer');
	}


	// starting update movement function
	public function update($id){

		// insert page title
		$page_data['title'] = 'Edit movement';

		// get individual id from movement model
		$data['movement'] = $this->movement_model->get_movement_id($id);

		// CI form validation 
		$this->form_validation->set_rules('moved_to', 'Sent To', 'required');
		$this->form_validation->set_rules('ref_no', 'File Ref No.', 'required');
		$this->form_validation->set_rules('returned_date', 'Returned Date', 'required');
		$this->form_validation->set_rules('remarks', 'Remarks', 'required');

		// pass form validation?
		if($this->form_validation->run() === FALSE){
			$this->edit($id);
		}else{
			// update movement from model
			$returnUpdate = $this->movement_model->update_movement();

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('admin/movement/edit/' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('admin/movement/edit/' .$id);
			}
		}
	}

	// starting movement delete function
	public function delete($id){

		// delete movement from model
		$this->movement_model->delete_movement($id);

		// set flash message
		$this->session->set_flashdata('success', "File Movement Deleted");
		redirect('admin/movement');
		
	}
}
