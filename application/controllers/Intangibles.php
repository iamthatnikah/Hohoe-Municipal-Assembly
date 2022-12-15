<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intangibles extends CI_Controller {

	// load index page for filelist
	public function index(){

		// get page title
		$page_data['title'] = 'Intangible Assets';

		// get all filelist table from filelist model
		$data['all_intangible_assets'] = $this->intangible_model->get_all_intangible_assets();

		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('intangibles', $data);
		$this->load->view('includes/footer');
	}

	// add new filelist fuction
	public function add_file(){

		// CI form validation 
		$this->form_validation->set_rules('function', 'Function Name', 'required');
		$this->form_validation->set_rules('activity', 'Activity office', 'required');
		$this->form_validation->set_rules('transaction', 'Transaction Name', 'required');
		$this->form_validation->set_rules('reference', 'Reference office', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to filelist_model  
			$returnInsert = $this->filelist_model->create_filelist();

			if($returnInsert){
				$this->session->set_flashdata('success', 'File Added Successfully');
				 redirect('admin/filelist');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('admin/filelist');
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
		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/edit_filelist', $data);
		$this->load->view('admin/includes/footer');
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
