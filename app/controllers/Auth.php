<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index(){
        $data = array();
        $data['page'] = 'Auth';
        $this->load->view('admin/index', $data);
    }


    public function log(){

        if($_POST){ 
            $query = $this->login_model->validate_user();
            
            //-- if valid
            if($query){
                $data = array();
                foreach($query as $row){
                    $data = array(
                        'id' => $row->id,
                        'fullname' => $row->fullname,
                        'email' =>$row->email,
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
                redirect('auth');
            }
            
        }else{
            $this->load->view('auth',$data);
        }
    }


    
    function logout(){
        $this->session->sess_destroy();
        $data = array();
        $data['page'] = 'logout';
        $this->load->view('login', $data);
    }

}