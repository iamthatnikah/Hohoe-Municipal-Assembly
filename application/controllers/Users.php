<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index(){$page_data['title'] = 'File user Register';  

		// get all filelist table from filelist model
		$data['all_users'] = $this->user_model->get_all_user();

		// get all filelist table from filelist model
		$data['all_departments'] = $this->department_model->get_all_depart();

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/users', $data);
		$this->load->view('admin/includes/footer');
	}


	public function add_user(){
		// CI form validation 
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required');
		$this->form_validation->set_rules('department', 'Department', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to user_model  
			$returnInsert = $this->user_model->create_user();

			if($returnInsert){
				$this->session->set_flashdata('success', 'File Added Successfully');
				 redirect('admin/users');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('admin/users');
			}
		}
		
	}

	// load edit user page
	public function edit($id){

		// insert page title
		$page_data['title'] = 'Edit user';

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		// get individual id from user model
		$data['user'] = $this->user_model->get_user_id($id);

		// get all filelist table from filelist model
		$data['all_departments'] = $this->department_model->get_all_depart();

			if(empty($data['user'])){
			show_404();
		}

		// load page template
		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/edit_user', $data);
		$this->load->view('admin/includes/footer');
	}


	// starting update user function
	public function update($id){

		// insert page title
		$page_data['title'] = 'Edit user';

		// get individual id from user model
		$data['user'] = $this->user_model->get_user_id($id);

		// CI form validation 
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required');
		$this->form_validation->set_rules('department', 'Department', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		// pass form validation?
		if($this->form_validation->run() === FALSE){
			$this->edit($id);
		}else{
			// update user from model
			$returnUpdate = $this->user_model->update_user();

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('admin/users/edit/' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('admin/users/edit/' .$id);
			}
		}
	}

	// starting user delete function
	public function delete($id){

		// delete user from model
		$this->user_model->delete_user($id);

		// set flash message
		$this->session->set_flashdata('success', "User Deleted");
		redirect('admin/user');
		
	}
}