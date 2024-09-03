<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mails extends CI_Controller {

	public function index(){

		$page_data['title'] = 'Incomimg Correspondence Register';  

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		// get all department table from department model
		$data['all_departments'] = $this->department_model->get_all_depart();

		// get all department table from department model
		$data['all_mails'] = $this->mail_model->get_all_mail();

		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/mails', $data);
		$this->load->view('admin/includes/footer');
	}


	public function add_mail(){
		// CI form validation 
		$this->form_validation->set_rules('dol', 'Date of Letter', 'required');
		$this->form_validation->set_rules('date_received', 'Date Received', 'required');
		$this->form_validation->set_rules('received', 'Received', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('reg_no', 'Registry Number', 'required');

		// check pass validation
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			// pass values to mail_model  
			$returnInsert = $this->mail_model->create_mail();

			if($returnInsert){
				$this->session->set_flashdata('success', 'File Added Successfully');
				 redirect('admin/mails');
			}else{
				$this->session->set_flashdata('error', 'Something went wrong: try again');
				 redirect('admin/mails');
			}
		}
		
	}

	// load edit mails page
	public function edit($id){

		// insert page title
		$page_data['title'] = 'Edit mail';

		// get all filelist table from filelist model
		$data['all_filelists'] = $this->filelist_model->get_all_filelist();

		// get all department table from department model
		$data['all_departments'] = $this->department_model->get_all_depart();

		// get individual id from mails model
		$data['mails'] = $this->mail_model->get_mail_id($id);

			if(empty($data['mails'])){
			show_404();
		}

		// load page template
		$this->load->view('admin/includes/head');
		$this->load->view('admin/includes/navbar');
		$this->load->view('admin/includes/sidebar', $page_data);
		$this->load->view('admin/edit_mails', $data);
		$this->load->view('admin/includes/footer');
	}


	// starting update mails function
	public function update($id){

		// insert page title
		$page_data['title'] = 'Edit mail';

		// get individual id from mails model
		$data['mails'] = $this->mail_model->get_mail_id($id);

		// CI form validation 
		$this->form_validation->set_rules('dol', 'Date of Letter', 'required');
		$this->form_validation->set_rules('date_received', 'Date Received', 'required');
		$this->form_validation->set_rules('received', 'Received', 'required');
		$this->form_validation->set_rules('inst_ref', 'Institution Ref No', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('office', 'Office', 'required');
		$this->form_validation->set_rules('file_ref', 'File Ref No', 'required');
		$this->form_validation->set_rules('folio', 'Folio', 'required');
		$this->form_validation->set_rules('reg_no', 'Reg No', 'required');

		// pass form validation?
		if($this->form_validation->run() === FALSE){
			$this->edit($id);
		}else{
			$post_image = null;

			//upload file
			if(isset($_POST["old-scan-name"])){
				// update mails from model
			$returnUpdate = $this->mail_model->update_mail($_POST["old-scan-name"]);
			}else{
				$config['upload_path'] = './uploads/mails';
				$config['allowed_types'] = 'pdf';
				$config['max_size'] = '6048';
				$file_name = str_replace(" ","_", $_FILES["userfile"]['name']);
				$config['file_name'] = $file_name;

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$returnUpdate = FALSE;
				}else{
					$data = array('upload_data' => $this->upload->data());
					$post_image = $file_name;

					$returnUpdate = $this->mail_model->update_mail($post_image);
				}
			}
			

			// pass update?
			if($returnUpdate){
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('admin/mails/edit/' .$id);
			}else{
				$this->session->set_flashdata('error', 'Something went wrong. Please try again');
				redirect('admin/mails/edit/' .$id);
			}
		}
	}


	// call update file remove function
	public function removescan($id){

		// check login
		// if(!$this->userdata("logged_in")){
		// 	redirect('login');
		// }

		//$permission = $this->permissions('incoming_mails');

		// if(!in_array("delete", $permission)){
		// 	$this->session->set_flashdata('error', 'You don\'t have permission to perform this action.');
		// 	redirect('mails');
		// }

		$post_image = $this->mail_model->get_mail_id($id)["post_image"];

		$file_exists = file_exists("./uploads/mails/".$post_image);

		if($file_exists){

			$fil = unlink("./uploads/mails/".$post_image);
			$results = $this->mail_model->remove_scan($id);
			$this->session->set_flashdata('success', 'File removed successfully');
			redirect('admin/mails/edit/' .$id);

		}else{
			$this->session->set_flashdata('error', 'Something went wrong');
			redirect('admin/mails/edit/' .$id);
		}

	}

	// starting mails delete function
	public function delete($id){

		// delete mails from model
		$this->mail_model->delete_mail($id);

		// set flash message
		$this->session->set_flashdata('success', "Mail Deleted");
		redirect('admin/mails');
	}
}
