<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function index(){$page_data['title'] = 'Staff Register';  

		// get all filelist table from filelist model
		$data['all_perm_staff'] = $this->staff_model->get_all_perm_staff();

		// get all filelist table from filelist model
		$data['all_temp_staff'] = $this->staff_model->get_all_temp_staff();

		// get all filelist table from filelist model
		$data['all_departments'] = $this->department_model->get_all_departments();

		// get all filelist table from filelist model
		//$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('staff', $data);
		$this->load->view('includes/footer');
	}


	public function add_perm_staff(){
		// CI form validation
		$this->form_validation->set_rules('staff_id', 'staff_id', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('middle_name', 'middle_name', 'required');
		$this->form_validation->set_rules('last_name', 'last_name', 'required');
		$this->form_validation->set_rules('official_email', 'official_email', 'required');
		$this->form_validation->set_rules('personal_email', 'personal_email', 'required');
		$this->form_validation->set_rules('department', 'department', 'required');
		$this->form_validation->set_rules('grade', 'grade', 'required');
        $this->form_validation->set_rules('class', 'class', 'required');
        $this->form_validation->set_rules('date_of_birth', 'date_of_birth', 'required');
        $this->form_validation->set_rules('date_first_appointment', 'date_first_appointment', 'required');
        $this->form_validation->set_rules('date_last_promotion', 'date_last_promotion', 'required');
        $this->form_validation->set_rules('salary_level', 'salary_level', 'required');
        $this->form_validation->set_rules('ssn', 'ssn', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('tel', 'tel', 'required');
        // $this->form_validation->set_rules('department', 'First Name', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to staff_model  
			$returnInsert = $this->staff_model->add_perm_staff();

			if($returnInsert){
				$this->session->set_flashdata('success', 'Permanent Staff Added Successfully');
				 redirect('staff');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('staff');
			}
		}
		
	}

	public function add_temp_staff(){
		// CI form validation
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('middle_name', 'middle_name', 'required');
		$this->form_validation->set_rules('last_name', 'last_name', 'required');
		$this->form_validation->set_rules('date_of_birth', 'date_of_birth', 'required');
        $this->form_validation->set_rules('date_first_appointment', 'date_first_appointment', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');
		$this->form_validation->set_rules('class', 'class', 'required');
		$this->form_validation->set_rules('personal_email', 'personal_email', 'required');
		$this->form_validation->set_rules('tel', 'tel', 'required');
		$this->form_validation->set_rules('mobile', 'mobile', 'required');
		$this->form_validation->set_rules('department', 'department', 'required');
		$this->form_validation->set_rules('grade', 'grade', 'required');
        $this->form_validation->set_rules('ssn', 'ssn', 'required');
        // $this->form_validation->set_rules('department', 'First Name', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to staff_model  
			$returnInsert = $this->staff_model->add_temp_staff();

			if($returnInsert){
				$this->session->set_flashdata('success', 'Temporal Staff Added Successfully');
				 redirect('staff');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('staff');
			}
		}
		
	}

	// load edit staff page
	public function edit($id){

		// insert page title
		$page_data['title'] = 'Edit staff';

		// get all filelist table from filelist model
		$data['all_perm_staff'] = $this->staff_model->get_all_perm_staff();

		// get individual id from staff model
		$data['staff'] = $this->staff_model->get_staff_id($id);

		// get all filelist table from filelist model
		$data['all_departments'] = $this->department_model->get_all_departments();

			if(empty($data['staff'])){
			show_404();
		}

		// load page template
		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('staff', $data);
		$this->load->view('includes/footer');
	}


	// starting update staff function
	public function update($id){

		// insert page title
		$page_data['title'] = 'Edit staff';

		// get individual id from staff model
		$data['staff'] = $this->staff_model->get_staff_id($id);

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
			// update staff from model
			$returnUpdate = $this->staff_model->update_staff();

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('staff/edit/' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('staff/edit/' .$id);
			}
		}
	}

	// starting staff delete function
	public function delete($id){

		// delete staff from model
		$this->staff_model->delete_staff($id);

		// set flash message
		$this->session->set_flashdata('success', "staff Deleted");
		redirect('staff');
		
	}
}