<?php
  class Login_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }


    // login dashboard
   /* public function login_dashboard($id = FALSE){
      $data = array(
        'email' => $this->input->post('reg_no'),
        'password' => $this->input->post('reg_no')
       
      );

      return $this->db->insert('dispatch', $data);
    }*/

    // get User by ID
    public function login_dashboard($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('dispatch');
            return $query->result_array();
        }
      $query = $this->db->get_where('dispatch', array('id' => $id));
      return $query->row_array();
    }


    // delete dispatch
    public function delete_dispatch($id){
      $this->db->where('id', $id);
      $this->db->delete('dispatch');
    }

  }
