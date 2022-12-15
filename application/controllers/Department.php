<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	// starting index function Department
	public function index(){

		// insert page title
		$page_data['title'] = 'Departments';

		// get all department table from depart model
		$data['departments'] = $this->department_model->get_all_departments();

		// load page template
		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('department', $data);
		$this->load->view('includes/footer');
	}

	// starting add depart function
	public function add_department(){
		
		// CI form validation 
		$this->form_validation->set_rules('department_name', 'Department Name', 'required');
		$this->form_validation->set_rules('office', 'Department office', 'required');
		// $this->form_validation->set_rules('inter_exten', 'inter_exten', 'required');
		$this->form_validation->set_rules('hod', 'Head Of Department', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to department_model  
			$returnInsert = $this->department_model->add_department();

			if($returnInsert){
				$this->session->set_flashdata('success', 'Department Added Successfully');
				 redirect('department');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('department');
			}
		}
	}

	// loading edit page function
	public function edit($id){

		// insert page title
		$page_data['title'] = 'Edit Department';

		// get individual id from department model
		$data['department'] = $this->department_model->get_department_id($id);

		// get all department table from department model
		$data['all_departments'] = $this->department_model->get_all_departments();

			if(empty($data['department'])){
			show_404();
		}

		// load page template
		$this->load->view('includes/head');
		$this->load->view('includes/navbar');
		$this->load->view('includes/asidebar', $page_data);
		$this->load->view('edit_department', $data);
		$this->load->view('includes/footer');
	}

	// starting update department function
	public function update($id){

		// insert page title
		$page_data['title'] = 'Edit Department';

		// get individual id from department model
		$data['department'] = $this->department_model->get_department_id($id);

		// CI form validation 
		$this->form_validation->set_rules('name', 'Department Name', 'required');
		$this->form_validation->set_rules('office', 'Department office', 'required');

		// pass form validation?
		if($this->form_validation->run() === FALSE){
			$this->edit($id);
		}else{
			// update department from model
			$returnUpdate = $this->department_model->update_department();

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('department/edit/' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('department/edit/' .$id);
			}
		}
	}

	// starting department delete function
	public function delete($id){

		// delete department from model
		$this->department_model->delete_department($id);

		// set flash message
		$this->session->set_flashdata('success', "Department Deleted");
		redirect('admin/department');
	}
}
