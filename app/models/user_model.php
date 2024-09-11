<?php
  class user_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    // Get all user from db
    public function get_all_users(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('users');
      return $query->result_array();
    }

    // create user
    public function create_users($enc_password){
      $data = array(
        'fullname' => $this->input->post('fullname'),
        'email' => $this->input->post('email'),
        'department' => $this->input->post('department'),
        'role' => $this->input->post('role'),
        'status' => 'Active',
        'password' => $enc_password
        
      );

      return $this->db->insert('users', $data);
    }

    // get user by ID
    public function get_user_id($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('user');
            return $query->result_array();
        }
      $query = $this->db->get_where('user', array('id' => $id));
      return $query->row_array();
    }

    // update user
    public function update_user($enc_password){
      $data = array(
        'firstname' => $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname'),
        'email' => $this->input->post('email'),
        'department' => $this->input->post('department'),
        'role' => $this->input->post('role'),
        'status' => $this->input->post('status')
        
      );
      $this->db->where('id', $this->input->post('id'));
     return $this->db->update('user', $data);
    }

     // Check email exists
    public function check_email_exists($email){
      $query = $this->db->get_where('users', array('email' => $email));
      if(empty($query->row_array())){
        return true;
      } else {
        return false;
      }
    }

    // delete user
    public function delete_user($id){
      $this->db->where('id', $id);
      $this->db->delete('user');
    }

  }
