<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dispatch extends CI_Controller {

	public function index(){

		$page_data['title'] = 'File Dispatch';  

		
		$data['all_dispatches'] = $this->dispatch_model->get_all_dispatch();

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		$page_data['title'] = 'Outgoing Correspondence Register';  

		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/dispatch', $data);
		$this->load->view('admin/includes/footer');
	}


	public function add_dispatch(){
		// CI form validation 
		$this->form_validation->set_rules('reg_no', 'Reg No', 'required');
		$this->form_validation->set_rules('drp', 'Date Received', 'required');
		$this->form_validation->set_rules('date_dispatch', 'Date Dispatch', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('whom_sent', 'Whom Sent', 'required');
		$this->form_validation->set_rules('ref_no', 'Ref No', 'required');
		$this->form_validation->set_rules('folio', 'Folio', 'required');
		$this->form_validation->set_rules('addressee', 'Addressee', 'required');
		//$this->form_validation->set_rules('added_at', 'When Added', 'required');
		$this->form_validation->set_rules('mod', 'Mode of Dispatch', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to filelist_model  
			$returnInsert = $this->dispatch_model->create_dispatch();

			if($returnInsert){
				$this->session->set_flashdata('success', 'Dispatch Added Successfully');
				 redirect('admin/dispatch');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('admin/dispatch');
			}
		}
		
	}

	// load edit dispatch page
	public function edit($id){

		// insert page title
		$page_data['title'] = 'Edit dispatch';

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		// get individual id from dispatch model
		$data['dispatch'] = $this->dispatch_model->get_dispatch_id($id);

		// get all dispatch table from dispatch model
		$data['all_dispatch'] = $this->dispatch_model->get_all_dispatch();

			if(empty($data['dispatch'])){
			show_404();
		}

		// load page template
		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/edit_dispatch', $data);
		$this->load->view('admin/includes/footer');
	}


	// starting update dispatch function
	public function update($id){

		// insert page title
		$page_data['title'] = 'Edit dispatch';

		// get individual id from dispatch model
		$data['dispatch'] = $this->dispatch_model->get_dispatch_id($id);

		// CI form validation 
		$this->form_validation->set_rules('reg_no', 'Reg No', 'required');
		$this->form_validation->set_rules('drp', 'Date Received', 'required');
		$this->form_validation->set_rules('date_dispatch', 'Date Dispatch', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('whom_sent', 'Whom Sent', 'required');
		$this->form_validation->set_rules('ref_no', 'Ref No', 'required');
		$this->form_validation->set_rules('folio', 'Folio', 'required');
		$this->form_validation->set_rules('addressee', 'Addressee', 'required');
		//$this->form_validation->set_rules('added_at', 'When Added', 'required');
		$this->form_validation->set_rules('mod', 'Mode of Dispatch', 'required');

		// pass form validation?
		if($this->form_validation->run() === FALSE){
			$this->edit($id);
		}else{
			// update dispatch from model
			$returnUpdate = $this->dispatch_model->update_dispatch();

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('admin/dispatch/edit/' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('admin/dispatch/edit/' .$id);
			}
		}
	}

	// starting dispatch delete function
	public function delete($id){

		// delete dispatch from model
		$this->dispatch_model->delete_dispatch($id);

		// set flash message
		$this->session->set_flashdata('success', "Dispatch Deleted");
		redirect('admin/dispatch');
		
	}
}
