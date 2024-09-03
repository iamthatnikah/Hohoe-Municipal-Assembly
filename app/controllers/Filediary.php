<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filediary extends CI_Controller {

	public function index(){

		$page_data['title'] = 'File Diary';  

		
		$data['all_filediarys'] = $this->filediary_model->get_all_filediary();

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/filediary', $data);
		$this->load->view('admin/includes/footer');
	}


	public function add_filediary(){
		// CI form validation 
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('previous', 'Previous', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to filelist_model  
			$returnInsert = $this->filediary_model->create_filediary();

			if($returnInsert){
				$this->session->set_flashdata('success', 'File Diary Added Successfully');
				 redirect('admin/filediary');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('admin/filediary');
			}
		}
		
	}

	// load edit filediary page
	public function edit($id){

		// insert page title
		$page_data['title'] = 'Edit Filediary';

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		// get individual id from filediary model
		$data['filediary'] = $this->filediary_model->get_filediary_id($id);

		// get all filediary table from filediary model
		$data['all_filediary'] = $this->filediary_model->get_all_filediary();

			if(empty($data['filediary'])){
			show_404();
		}

		// load page template
		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/edit_filediary', $data);
		$this->load->view('admin/includes/footer');
	}


	// starting update filediary function
	public function update($id){

		// insert page title
		$page_data['title'] = 'Edit Filediary';

		// get individual id from filediary model
		$data['filediary'] = $this->filediary_model->get_filediary_id($id);

		// CI form validation 
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('previous', 'Previous', 'required');

		// pass form validation?
		if($this->form_validation->run() === FALSE){
			$this->edit($id);
		}else{
			// update filediary from model
			$returnUpdate = $this->filediary_model->update_filediary();

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('admin/filediary/edit/' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('admin/filediary/edit/' .$id);
			}
		}
	}

	// starting filediary delete function
	public function delete($id){

		// delete filediary from model
		$this->filediary_model->delete_filediary($id);

		// set flash message
		$this->session->set_flashdata('success', "File Diary Deleted");
		redirect('admin/filediary');
	}
}
