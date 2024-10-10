<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$page_data['title'] = 'Assets Management System';  

		// get all filelist table from filelist model
		$data['all_users'] = $this->login_model->validate_user();

		$this->load->view('includes/head', $page_data);
		$this->load->view('login', $data);
		// $this->load->view('includes/footer');
	
	}

	public function login(){

        if($_POST){ 
            $query = $this->login_model->validate_user();
            
            //-- if valid
            if($query){
                $data = array();
                foreach($query as $row){
                    $data = array(
                        'id' => $row->id,
                        'firstname' => $row->firstname,
                        'middlename' => $row->middlename,
                        'lastname' => $row->lastname,
                        'official_email' =>$row->official_email,
                        'role' =>$row->role,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata($data);
                    $url = base_url('dashboard');
                }
                //echo json_encode(array('st'=>1,'url'=> $url)); //--success
                redirect($url);
            }else{
               // echo json_encode(array('st'=>0)); //-- error
                redirect('login');
            }
            
        }else{
            $this->load->view('login',$data);
        }
    }


    
    function logout(){
        $this->session->sess_destroy();
        $data = array();
        $data['page'] = 'logout';
        $this->load->view('login', $data);
    }


}